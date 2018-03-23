<?php
$page_name = 'Projects';
$page_meta = 'Look at the open source chart framework that Paul Habjanetz utilizes. Everything from pie, line, bar charts are included in his examples.';
include ('header.html');
?>
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
  

   var clients;
var clients = [{ "Name": "One Taco", "Type": 1, "Address": "12200 Research Blvd Austin Texas 78759", "Ranking": 1 },{ "Name": "Fresa's Chicken Al Carbon", "Type": 1, "Address": "915 N Lamar Blvd Austin Texas 78703", "Ranking": 9 },{ "Name": "Saigon Le Vendeur", "Type": 4, "Address": "2404 E 7th St Austin Texas 78702", "Ranking": 7 },{ "Name": "O'Daku", "Type": 4, "Address": "2501 W Parmer Ln Austin Texas 78727", "Ranking": 5 },{ "Name": "Noble Sandwich Company", "Type": 5, "Address": "4805 Burnet Rd Austin Texas 78756", "Ranking": 11 },{ "Name": "Pho Please", "Type": 4, "Address": "1920 E Riverside Dr Austin Texas 78741", "Ranking": 13 },{ "Name": "Ramen Tatsu-Ya", "Type": 4, "Address": "1234 South Lamar Austin Texas 78704", "Ranking": 4 },{ "Name": "Cabo Bobs", "Type": 1, "Address": "2828 Rio Grande St Austin Texas 78705", "Ranking": 14 },{ "Name": "Velvet Taco", "Type": 1, "Address": "11501 Rock Rose Ave Austin Texas 78758", "Ranking": 6 },{ "Name": "LA Barbecue", "Type": 3, "Address": "2027 E Cesar Chavez St Austin Texas 78704", "Ranking": 2 },{ "Name": "Desano", "Type": 3, "Address": "8000 Burnet Rd Austin Texas 78757", "Ranking": 12 },{ "Name": "East Side Kings", "Type": 4, "Address": "2310 S Lamar Blvd Austin Texas 78704", "Ranking": 10 },{ "Name": "Lucky's Puccias", "Type": 5, "Address": "1611 W 5th St Austin Texas 78703", "Ranking": 15 },{ "Name": "Fuego Tortilla Grill", "Type": 1, "Address": "913 N Interstate 35 Frontage Rd San Marcos Texas 78666", "Ranking": 8 },{ "Name": "Dos Batos", "Type": 1, "Address": "2525 W Anderson Ln Austin Texas 78757", "Ranking": 3 },];

    var resttypes = [
        { Name: "", Id: 0 },
        { Name: "Mexican", Id: 1 },
        { Name: "Italian", Id: 2 },
        { Name: "American", Id: 3 },
        { Name: "Asian", Id: 4 },
        { Name: "Sandwiches", Id: 5 },
    ];
 
    $("#jsGrid").jsGrid({
        width: "100%",
        height: "500px",
 
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
 
        data: clients,
 
        fields: [
            { name: "Name", type: "text", width: 100, validate: "required" },
            { name: "Address", type: "text", width: 200 },
            { name: "Type", type: "select", items: resttypes, valueField: "Id", textField: "Name" },
            { name: "Ranking", type: "text", width: 50 }
        ]
    });

</script>
<script DEFER>
 

var xmlhttp = new XMLHttpRequest();


xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      clients = JSON.parse(this.responseText);
    }
};
xmlhttp.open("GET", "getGridData.php", true);
xmlhttp.send();
function one(){
  alert("clients");
  $("#jsGrid").jsGrid("insertItem", { Name: "John"}).done(function() {
    alert("insertion completed");
});
}

</script>

<?php
include ('footer.html');
?>