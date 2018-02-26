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
  <main class="hoc container clear"> 
    <div class="center btmspace-80">
      <h2 class="heading">Check out some of my Projects</h2>
      <p class="nospace">Evaluate my work and see if it is a right fit for you. Below are some simple exercises I did in order to showcase my project development skills. Ass seen I can work with API's, write to and from a stack as seen with Social Network site, and manage large amounts of data.</p>
    </div>
    <ul class="nospace group cta">
      <li class="one_third first">
        <article>
          <img src="../images/projects/weather.png" alt="Habjanetz Weather App">
          <h6 class="heading font-x1"><a href="../projects/WeatherApp/index.htm">Weather API</a></h6>
          <p>I created a AngularJS weather app that pulls in data from Open Weather Map. You are able to type in your zip code to find the most releveant weather for you.</p>
          <footer><a href="../projects/WeatherApp/index.htm">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <img src="../images/projects/social.png" alt="Habjanetz Social Network">
          <h6 class="heading font-x1"><a href="../projects/SocialNetwork/social.html">Social Network Template</a></h6>
          <p>While I still need to partition this project to its own stack web app take a look at the template I've built for a social networking site.</p>
          <footer><a href="../projects/SocialNetwork/social.html">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <img src="../images/projects/jsgrid.png" alt="Habjanetz Weather App">
          <h6 class="heading font-x1"><a href="underconstruction.php">JS Grid</a></h6>
          <p>An open source dynamic grid display for data. Will be hooked to SQL database to dynamically pull in and format data and allow for different sorting and displays.</p>
          <footer><a href="underconstruction.php">Details &raquo;</a></footer>
        </article>
      </li>
    </ul>
    <div class="clear"></div>
  </section>
</div>
<?php
include ('footer.html');
?>