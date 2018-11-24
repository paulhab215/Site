<?php
$page_name = 'Projects';
$page_meta = 'Look at the open source chart framework that Paul Habjanetz utilizes. Everything from pie, line, bar charts are included in his examples.';
include ('header.html');
?>
<link href="http://js-grid.com/css/jsgrid.min.css" rel="stylesheet" />
<link href="http://js-grid.com/css/jsgrid-theme.min.css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://js-grid.com/js/jsgrid.min.js"></script>

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
  <main class="hoccontainer clear"> 
    <div id="jsGrid"></div>
  </main>  
<script type="text/javascript">
    $(function() {

        $.ajax({
            type: "GET",
            url: "Restaurants/index.php"
        }).done(function(food) {

            $("#jsGrid").jsGrid({
                height: "85%",
                width: "100%",
                filtering: true,
                inserting: true,
                editing: true,
                sorting: true,
                paging: true,
                autoload: true,
                pageSize: 10,
                pageButtonCount: 5,
                controller: {
                    loadData: function(filter) {
                     return $.ajax({
                            type: "GET",
                            url: "Restaurants/index.php",
                            dataType: 'json',
                            success: function (result) {
                                return result;
                            },
                            error: function(result) {
                              console.log(result);
                            },

                        });
                    },
                    insertItem: function(item) {
                        return $.ajax({
                            type: "POST",
                            url: "Restaurants/index.php",
                            data: item
                        });
                    },
                    updateItem: function(item) {
                        return $.ajax({
                            type: "PUT",
                            url: "Restaurants/index.php",
                            data: item
                        });
                    },
                    deleteItem: function(item) {
                        return $.ajax({
                            type: "DELETE",
                            url: "Restaurants/index.php",
                            data: item
                        });
                    }
                },

                fields: [
                    { name: "food_id", type: "text", visible: false},
                    { name: "name", title: "Name", type: "text", width: 150 },
                    { name: "street", title: "Street", type: "text", width: 200 },
                    { name: "secondary_street", title: "Secondary Street", type: "text", width: 200 },
                    { name: "city", title: "City", type: "text", width: 200 },
                    { name: "zip", title: "Zip", type: "text", width: 200 },
                    { type: "control" }
                ]
            });
        });
    });


</script>

<?php
include ('footer.html');
?>