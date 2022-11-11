<!DOCTYPE html>
<?php include 'header.php' ?>

<html>
  <head>
    <style>

      #map {
        height: 500px;
        width: 60%;
        border: 5px solid black;
       }

       h2 {
        padding: 20px;
       }
    </style>
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body onload="change('scis')">
    <h2>Our stores</h2>

    <div class="text-center mt-5 mb-5">
      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" onclick="change('scis')" checked>
          <label class="btn btn-outline-primary" for="btnradio1">SCIS Branch</label>
          <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" onclick="change('sob')">
          <label class="btn btn-outline-primary" for="btnradio2">SOB Branch</label>
          <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" onclick="change('soss')">
          <label class="btn btn-outline-primary" for="btnradio3">SOSS Branch</label>
          <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" onclick="change('tt')">
          <label class="btn btn-outline-primary" for="btnradio4">Tomato Town Branch</label>
          <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off" onclick="change('is')">
          <label class="btn btn-outline-primary" for="btnradio5">Istana Branch</label>
      </div>
    </div>

    <div id="map" style="margin: auto;"></div>

    <script>
        function initMap(coordinates) {
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 16, center: coordinates});
          var marker = new google.maps.Marker({position: loc, map: map});
          }

        function change(key) {
          var coordinates = coords[key]
          initMap(loc=coordinates)
        }

        var coords = {
            "scis": {lat: 1.2975488, lng: 103.8472296},
            "sob": {lat: 1.295091, lng: 103.849108}, 
            "soss": {lat: 1.2979327, lng: 103.8467304},
            "tt": {lat: 1.3451942, lng: 103.7184946},
            "is": {lat: 1.3067039, lng: 103.8409115}

        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAo304l1NlMbOwhtCNbbQEhuEd4NEmoTo&callback=initMap"
    async defer></script>

  </body>

  <?php include 'footer.php' ?>
</html>
