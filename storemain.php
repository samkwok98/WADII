<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
include("header.php");
?>

<div class="featured">
    <h2>Authentic TCM Products</h2>
    <p>AG T&T Quality Guranteed </p>
</div>


<div class="recentlyadded content-wrapper row">
    <h2>Recently Added Products</h2>
    <div class="products row d-flex flex-wrap align-items-center">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="storeindex.php?page=storeproduct&id=<?=$product['id']?>" class="product card col-md-6 col-lg-3 col-xl-2 p-1">
            <img src="images/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price'],' ', $product['currency']?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="view row">
    <a class="btn btn-primary" href="storeindex.php?page=storeproducts" role="button">View All</a>
</div>


<?php
include("footer.php")
?>