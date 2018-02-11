<?php
$page_name = 'About Me';
include ('header.html');
?>
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</div>
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="aboutme.php">About Me</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="center btmspace-80">
      <h3 class="heading">Get to know me reader</h3>
      <p class="nospace">Take some time and check out what I have been up to throughout my life.</p>
    </div>
    <ul class="nospace group cta">
      <li class="one_third first">
        <article><span><i class="fa fa-file"></i></span>
          <h6 class="heading font-x1"><a href="resume.php">Resume</a></h6>
          <p>Get an overview of my milestones within my career. My most current work experience is attached.</p>
          <footer><a href="resume.php">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><span><i class="fa fa-arrows-v"></i></span>
          <h6 class="heading font-x1"><a href="life-timeline.php">Timeline</a></h6>
          <p>Get a personal look at my life. From my humble beginnings to my splendid life of now - beneath lies all &hellip;</p>
          <footer><a href="life-timeline.php">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><span><i class="fa fa-cutlery"></i></span>
          <h6 class="heading font-x1"><a href="favorite-foods.php">Favorite Foods</a></h6>
          <p>Nothing speaks getting to know someone like knowing their favorite foods. Check out some of my top spots in Austin &hellip;</p>
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