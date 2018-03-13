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
    <div class="center btmspace-50">
      <h2 class="heading">Check out some of my Projects</h2>
      <p class="nospace">Evaluate my work and see if it is a right fit for you. Below are some simple exercises I did in order to showcase my project development skills. As seen I can work with API's, write to and from a stack, and handle large amounts of data by displaying it in differnt forms. The logos are simple logos that I used for my projects - click on each to learn more.</p>
    </div>
    <ul class="nospace group cta">
      <li class="one_half first">
        <article>
          <img src="../images/projects/weather.png" alt="Habjanetz Weather App">
          <h6 class="heading font-x1"><a href="../projects/WeatherApp/index.htm">Weather API</a></h6>
          <p>I created a AngularJS weather app that pulls in data from Open Weather Map. You are able to type in your zip code to find the most releveant weather for you.</p>
          <footer><a href="../projects/WeatherApp/index.htm">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_half">
        <article>
          <img src="../images/projects/social.png" alt="Habjanetz Social Network">
          <h6 class="heading font-x1"><a href="../projects/SocialNetwork/social.html">Social Network Template</a></h6>
          <p>While I still need to partition this project to its own stack web app take a look at the template I've built for a social networking site.</p>
          <footer><a href="../projects/SocialNetwork/social.html">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_half first">
        <article>
          <img src="../images/projects/frappe.png" alt="Habjanetz Weather App">
          <h6 class="heading font-x1"><a href="frappe.php">Frappe</a></h6>
          <p>An open source chart package that can handle everything though simple array passing. Can be set dynamically went hooked up to a database.</p>
          <footer><a href="frappe.php">Details &raquo;</a></footer>
        </article>
      </li>
      <li class="one_half">
        <article>
          <img src="../images/projects/jsgrid.png" alt="Habjanetz Weather App">
          <h6 class="heading font-x1"><a href="jsgrid.php">JS Grid</a></h6>
          <p>An open source dynamic grid display for data. Will be hooked to SQL database to dynamically pull in and format data and allow for different sorting and displays.</p>
          <footer><a href="jsgrid.php">Details &raquo;</a></footer>
        </article>
      </li>
    </ul>
  </main>
    <div class="clear"></div>
    <br>
  </section>
</div>
<?php
include ('footer.html');
?>