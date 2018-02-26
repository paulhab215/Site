<?php
$page_name = 'Projects';
$page_meta = 'Look at Paul Habjanetz\'s resume. See my career and what I have accomplished. Within my resume lay all the detail regarding my professional work.';
include ('header.html');
?>
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</div>
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="projects.php">Projects</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="center btmspace-80">
      <h3 class="heading">Check out some of my Projects</h3>
      <p class="nospace">Evaluate my work and see if it is right for you.</p>
    </div>
    <ul class="nospace group cta">
      <li class="one_third first">
        <article><span><i class="fa fa-file"></i></span>
          <h6 class="heading font-x1"><a href="resume.php">Weather API</a></h6>
          <p>Created a AngularJS weather page that pulls in data from Open Weather Map.</p>
          <footer><a href="resume.php">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><span><i class="fa fa-arrows-v"></i></span>
          <h6 class="heading font-x1"><a href="life-timeline.php">Social Network Template</a></h6>
          <p> &hellip;</p>
          <footer><a href="life-timeline.php">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><span><i class="fa fa-cutlery"></i></span>
          <h6 class="heading font-x1"><a href="favorite-foods.php">JS Grid</a></h6>
          <p> &hellip;</p>
          <footer><a href="favorite-foods.php">Details &raquo;</a></footer>
        </article>
      </li>
    </ul>
    <div class="clear"></div>
  </section>
</div>
<?php
include ('footer.html');
?>