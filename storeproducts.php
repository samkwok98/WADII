<?php
// The amounts of products to show on each page
$num_products_on_each_page = 4;
// The current page, in the URL this will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>

<?php
include("header.php")
?>


<div class="products content-wrapper container">
    <h1>Products</h1>
    <p><?=$total_products?> Products</p>
    <div class="products-wrapper row d-flex flex-wrap align-items-center">
        <?php foreach ($products as $product): ?>
        <a href="storeindex.php?page=storeproduct&id=<?=$product['id']?>" class="product card col-md-6 col-lg-3 col-xl-1 p-1">
            <img src="images/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price'],' ', $product['currency']?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a class="button btn-primary" href="storeindex.php?page=storeproducts&p=<?=$current_page-1?>" role="button">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
            <a class="button btn-primary" href="storeindex.php?page=storeproducts&p=<?=$current_page+1?>" role="button">Next</a>
        <?php endif; ?>

    </div>
</div>

<?php
include("footer.php")
?>