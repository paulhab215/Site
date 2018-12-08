<?php
$page_name = 'About Me';
$page_meta = 'Learn more about Paul Habjanetz, Take a look at his career accomplishments or his favorite foods in Austin Texas. Checkout the latest on Paul Habjanetz.';
include ('header.html');
?>
<link href="../../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
      <h2 class="heading">Get to know Paul Habjanetz</h2>
      <p class="nospace">Take some time and check my professional qualifications as well as some of my personal food preferences here in the Austin location.</p>
    </div>
    <ul class="nospace group cta">
      <li class="one_half first">
        <article><span><i class="fa fa-file"></i></span>
          <h6 class="heading font-x1"><a href="resume.php">Resume</a></h6>
          <p>Get an overview of my milestones within my career. My most current work experience is attached.</p>
          <footer><a href="resume.php">Details &raquo;</a></footer>
        </article>
      </li>
      </li>
      <li class="one_half">
        <article><span><i class="fa fa-cutlery"></i></span>
          <h6 class="heading font-x1"><a href="favorite-foods.php">Favorite Foods</a></h6>
          <p>Nothing speaks getting to know someone like knowing their favorite foods. Check out some of my top spots in Austin.</p>
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