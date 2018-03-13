<?php
$page_name = 'Projects';
$page_meta = 'Look at the open source chart framework that Paul Habjanetz utilizes. Everything from pie, line, bar charts are included in his examples.';
include ('header.html');
?>
<script src="https://unpkg.com/frappe-charts@0.0.8/dist/frappe-charts.min.iife.js"></script>
<style>
.container {
  padding:15px!important;
}

#chart,#charttwo{
  width:800px;
} 

@media screen and (max-width:900px){
  #chart,#charttwo{
    width:600px;
  } 
}

@media screen and (max-width:750px){
  #chart,#charttwo{
    width:900px;
  } 
}
@media screen and (max-width:650px){
  #chart,#charttwo{
    width:330px;
  } 
}
</style>
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</div>
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="projects.php">Projects</a></li>
      <li><a href="frappe.php">Frappe Charts</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="center btmspace-20">
      <h2 class="heading">Utilizing Open Source</h2>
      <p>Below are a number of different charts from the open source framework Frappe. With its easy to understand documentation and simple array data declaration the framework is a great fit for any project. I pull this test data from the restaurants on my <a href="favorite-foods.php">favorite foods page</a></p>
    </div>
  </main>
  <main class="hoc container clear"> 
    <div id="chart" style="margin:0 auto!important;" class="center btmspace-80">
    </div>
  </main>
  <main class="hoc container clear"> 
    <div id="charttwo" style="margin:0 auto!important;" class="center btmspace-80">
    </div>
  </main>  
</div>

<script>
  let data = {
    labels: ["Mexican", "Italian", "American", "Sandwiches", "Asian"],

    datasets: [
      {
        title: "Number Faved",
        values: [4, 1, 1, 1, 2, 3]
      },
    ]
  };

  let chart = new Chart({
    parent: "#chart", 
    title: "Count of Favorite Restaurants",
    data: data,
    type: 'pie',
    height: 325,

    colors: ['#7cd6fd', 'violet', 'blue'],

    format_tooltip_x: d => (d + '').toUpperCase(),
    format_tooltip_y: d => d + ' pts'
  });

  let data1 = {
    labels: ["One Taco", "O'daku", "Fresas", "Counter Cafe", "Saigon Le Vendeur"],

    datasets: [
      {
        title: "Ranking",
        values: [4, 5, 2, 3, 1]
      },
      {
        title: "Occupied (most busy)",
        values: [2, 1, 4, 5, 3]
      },      
    ]
  };

  let charttwo = new Chart({
    parent: "#charttwo",
    title: "Ranked Restaurants",
    data: data1,
    type: 'line',
    height: 250,

    colors: ['#7cd6fd', 'green', 'green'],
    format_tooltip_x: d => (d + '').toUpperCase(),
    format_tooltip_y: d => d + ' pts'
  });

</script>
<?php
include ('footer.html');
?>