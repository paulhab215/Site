<?php
$page_name = 'Favorite Foods';
$page_meta = 'Check out Paul Habjanetz\'s favorite food in Austin Texas. Take it from a local who prioritizes good eats and has lived in Austin for a number of years.';
include ('header.html');
?>
<style>
#map{
  width: 900px; 
  height: 600px; 
} 
#infoWindow {
    width: 450px;
    height: 200px;
}
.foodDetails {
    padding: 0px 20px 0px 10px;
    float: left;
    height:175px;
    width:275px; 
} 

/* ipad */
@media screen and (max-width:900px){
  #map{
    width: 620px; 
    height: 650px; 
  } 
  #infoWindow {
      width: 420px;
  }
  .foodDetails {
      padding: 0px 10px 0px 7px;
      height:135px;
      width:210px; 
  } 
}

@media screen and (max-width:750px){
  #map{
    width: 475px; 
    height: 500px; 
  } 
  #infoWindow {
      width: 280px;
  }
  .foodDetails {
      padding: 0px 10px 0px 7px;
      height:120px;
      width:175px; 
  } 
}

/*iphone 8 plus / iphone x*/
@media screen and (max-width:650px){
  #map{
    width: 328px; 
    height: 450px; 
  } 
  #infoWindow {
      width: 200px;
  }
  .foodDetails {
      padding: 0px 8px 0px 5px;
      height:90px;
      width:130px; 
  } 
}
</style>
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="aboutme.php">About Me</a></li>
      <li><a href="favorite-foods.php">Favorite Foods</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="center btmspace-20">
      <h2 class="heading">Is your Favorite my Favorite?</h2>
      <p>Below are my top choices of food places in Austin, pulled from the database, you can click on the name of each place to see where they are located within my city and also find more information in their infowindow. I have only been here for a couple years so am not a veteran in Austin food but with more time I will cover more territory and this map will have more baloons. </p>
      <br>
      <div class="map_canvas" id="map" style="margin:0 auto;"></div>
    </div>
    <div class="clear"></div>
  </main>
</div>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCReRGxwYW71hK5_AdwvxTkv0WN6lp5EpI&callback"></script>
  <script type="text/javascript">
    var map;
    var geocoder;
    var infoWindow;
    var clicked = false;

    function initMap(){
      geocoder = new google.maps.Geocoder();
       infoWindow = new google.maps.InfoWindow({
        maxWidth: 550
      });
      map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(30.430243, -97.696589),
        zoom: 12
      });

      downloadUrl('../search-food.php', function(data) {
        if(data.status == 200)//response okie
        {
            var xmlResponse = data.responseXML;
            var textResponse = data.responseText;

            str = textResponse.substring(textResponse.indexOf("<markers>") + 0);

            var parser = new DOMParser();
            var xmlDoc = parser.parseFromString(str, "application/xml");

            var markers = xmlDoc.documentElement.getElementsByTagName('marker');
            for (var i = 0; i < markers.length; i++) {
              var name    = markers[i].getAttribute("name");
              var address = markers[i].getAttribute("address");
              var bio     = markers[i].getAttribute("bio");
              var yelp    = markers[i].getAttribute("yelp");
              var foodpic = markers[i].getAttribute("foodpic");
              codeAddress(name, address, bio, yelp, foodpic);
            }
        }
      });
    }

    function codeAddress(name, searchAddr, bio, yelplink, foodpic){
      var address = searchAddr;
      geocoder.geocode( { 'address': address}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          var html = "<div id='infoWindow'><div id='mapContent'>";
          html += "<h1 class='mapName'>" + name + "</h1></br><p> (" + address + ")</p></div><div id='mapBody'><img src='../images/food/food" + foodpic + ".jpg' class='foodDetails'><p>" + bio + "<br/><br/>Check it on out on <a href = "+ yelplink +">yelp</a>!</p></div></div>";
          map.setCenter(results[0].geometry.location);
          createMarker(results[0].geometry.location,html);              
        } else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {    
            setTimeout(function() {
                codeAddress(name, searchAddr, bio, yelplink, foodpic);
            }, 200);
        } else {
            alert("Geocode was not successful for the following reason:" + status);
        }
      });
    }

    function createMarker(latlng,html){
      var marker = new google.maps.Marker({
        position: latlng,
        map: map
      }); 

      google.maps.event.addListener(marker, 'mouseover', function() { 
        if (!clicked) {
          infoWindow.setContent(html);
          infoWindow.open(map, marker);
        }
      });
        
      google.maps.event.addListener(marker, 'mouseout', function() { 
        if (!clicked) {
          infoWindow.close();
        }
      });

      // CLICK EVENT LISTENER
      google.maps.event.addListener( marker, 'click', function() {
          clicked = true;
          infoWindow.setContent(html);
          infoWindow.open(map, marker);
     });

      // trying to close the window on click
      google.maps.event.addListener(infoWindow, 'closeclick', function(){       
          clicked = false;
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;
      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };
      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCReRGxwYW71hK5_AdwvxTkv0WN6lp5EpI&callback=initMap">
  </script>
<?php
include ('footer.html');
?>
