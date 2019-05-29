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
        width: 70%;
        margin-left: 180px;
        position: absolute;
        top: 35%

      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 3px;
        border-color: #9CE9F3;
        border-width: thin;
        box-sizing: border-box;
        outline: none;
        box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
        background-color: #fff;
        font-family: Lato;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 2px;
      }

      .pac-controls {
        display: inline-block;
        padding: 2px 1px;
      }

      .pac-controls label {
        font-family: Lato;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        border-radius: 3px;
        border-color: #9CE9F3;
        font-family: Lato;
        font-size: 15px;
        font-weight: 300;
        margin-top: 10px;
        padding: 0 2px 0 1px;
        text-overflow: ellipsis;
        position: absolute;
        width: 264px;
        height: 40px;
        left: 162px;
        top: 215px;
      }

      #pac-input:focus {
        border-color: #9CE9F3;
      }
    </style>
  </head>
  <body>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
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

        var image = "/wp-content/themes/tenantsunion_theme/assets/images/Marker_Icon.png"
        for (i = 0; i < locations.length; i++) {
          var marker1 = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            title: locations[i][0],
            map: map,
            icon: image
          });
        };
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);



      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYvWA0IAZbJQd7UL5_EmOc3DPusdL0lrc&callback=initMap&libraries=places"
    async defer></script>
  </body>
</html>
