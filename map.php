<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 60%;
        width: 50%;
        margin-left: 250px;
        position: absolute;
        top: 30%

      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
    var locations = [
      ['Van test1', 49.246292, -123.116226, 4],
      ['Van test2', 49.25, -123.216226, 5],
      ['Van test3', 49.256777, -123.226226, 3]
    ];

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 49.246292, lng: -123.116226},
          zoom: 11
        });
        var map;
        for (i = 0; i < locations.length; i++) {
          var marker1 = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYvWA0IAZbJQd7UL5_EmOc3DPusdL0lrc&callback=initMap"
    async defer></script>
  </body>
</html>
