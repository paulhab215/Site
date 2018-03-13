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

<script>
    var clients = [
        { "Name": "Fresas", "Type": 1, "Address": "", "Ranking": "3" },
        { "Name": "O'daku", "Type": 4, "Address": "", "Ranking": "1"},
        { "Name": "One Taco", "Type": 1, "Address": "", "Ranking": "5" },
        { "Name": "Noble Pig", "Type": 5, "Address": "", "Ranking": "2"},
        { "Name": "Saigon La Vendeur", "Type": 4, "Address": "", "Ranking": "4" }
    ];
 
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
</script>

<?php
include ('footer.html');
?>