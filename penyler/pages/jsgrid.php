<?php
$page_name = 'Projects';
$page_meta = 'Look at the open source chart framework that Paul Habjanetz utilizes. Everything from pie, line, bar charts are included in his examples.';
include ('header.html');
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
</div>
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="jsgrid.php">JS Grid</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="center btmspace-20">
      <h2 class="heading">Open Source Grid</h2>
      <p>Below is a basic example of the open source framework JS Grid that I have implemented. With dynamic capabilities and sorting functionality it is a great fit for any project. I pull this test data from the restaurants on my <a href="favorite-foods.php">favorite foods page</a></p>
    </div>
  </main>
  <main class="hoc container clear"> 
    <div id="jsGrid"></div>
  </main>  
  <script type="text/javascript">
  initMap();
    function initMap(){
      downloadUrl('getGridData.php', function(data) {
        if(data.status == 200)//response okie
        {
            var xmlResponse = data.responseXML;
            var textResponse = data.responseText;
alert(textResponse);
            str = textResponse.substring(textResponse.indexOf("<markers>") + 0);

            var parser = new DOMParser();
            var xmlDoc = parser.parseFromString(str, "application/xml");

            var markers = xmlDoc.documentElement.getElementsByTagName('marker');
            for (var i = 0; i < markers.length; i++) {
              var name    = markers[i].getAttribute("name");
              var address = markers[i].getAttribute("address");
              var type     = markers[i].getAttribute("type");
              var rank    = markers[i].getAttribute("rank");
          var html = "<div id='mapContent'>";
          html += "<h1 class='mapName'>" + name + "</h1><p> (" + address + ")</p></div><div id='mapBody'><img src='../images/food/food" + foodpic + ".jpg' class='foodDetails'><p>" + bio + "<br/><br/>Check it on out on <a href = "+ yelplink +">yelp</a>!</p></div>";


            }
        }
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
<script DEFER>
// var clients = [{ "Name": "One Taco", "Type": 1, "Address": "12200 Research Blvd Austin exas 78759", "Ranking": "1" },{ "Name": "Fresa&amp;#39;s Chicken Al Carbon", "Type": 1, "Address": "915 N Lamar Blvd Austin exas 78703", "Ranking": "9" },{ "Name": "Saigon Le Vendeur", "Type": 1, "Address": "2404 E 7th St Austin exas 78702", "Ranking": "7" },{ "Name": "O&amp;#39;Daku", "Type": 1, "Address": "2501 W Parmer Ln Austin exas 78727", "Ranking": "5" },{ "Name": "Noble Sandwich Company", "Type": 1, "Address": "4805 Burnet Rd Austin exas 78756", "Ranking": "11" },{ "Name": "Pho Please", "Type": 1, "Address": "1920 E Riverside Dr Austin exas 78741", "Ranking": "13" },{ "Name": "Ramen Tatsu-Ya", "Type": 1, "Address": "1234 South Lamar Austin exas 78704", "Ranking": "4" },{ "Name": "Cabo Bobs", "Type": 1, "Address": "2828 Rio Grande St Austin exas 78705", "Ranking": "14" },{ "Name": "Velvet Taco", "Type": 1, "Address": "11501 Rock Rose Ave Austin exas 78758", "Ranking": "6" },{ "Name": "LA Barbecue", "Type": 1, "Address": "2027 E Cesar Chavez St Austin exas 78704", "Ranking": "2" },{ "Name": "Desano", "Type": 1, "Address": "8000 Burnet Rd Austin exas 78757", "Ranking": "12" },{ "Name": "East Side Kings", "Type": 1, "Address": "2310 S Lamar Blvd Austin exas 78704", "Ranking": "10" },{ "Name": "Lucky&amp;#39;s Puccias", "Type": 1, "Address": "1611 W 5th St Austin exas 78703", "Ranking": "15" },{ "Name": "Fuego Tortilla Grill", "Type": 1, "Address": "913 N Interstate 35 Frontage Rd San Marcos exas 78666", "Ranking": "8" },{ "Name": "Dos Batos", "Type": 1, "Address": "2525 W Anderson Ln Austin exas 78757", "Ranking": "3" },];
    var resttypes = [
        { Name: "", Id: 0 },
        { Name: "Mexican", Id: 1 },
        { Name: "Italian", Id: 2 },
        { Name: "American", Id: 3 },
        { Name: "Asian", Id: 4 },
        { Name: "Sandwiches", Id: 5 },
    ];
 $(document).ready(function () {
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "300px",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
        data: clients,
 
        fields: [
            { name: "Name", type: "text", width: 100, validate: "required" },
            { name: "Address", type: "text", width: 200 },
            { name: "Type", type: "select", items: resttypes, valueField: "Id", textField: "Name" },
            { name: "Ranking", type: "text", width: 50 },
            { type: "control" }
        ]
    });
  });
</script>

<?php
include ('footer.html');
?>