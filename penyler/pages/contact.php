<?php
$page_name = 'Contact Information';
include ('header.html');
?>
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="aboutme.php">Contact Me</a></li>
    </ul>
  </div>
</div><div class="wrapper row3">
  <main class="hoc container clear"> 
 <div class="sidebar one_quarter first"> 
      <div class="sdb_holder">
        <img src="../images/paul/1.jpg" alt="Pauls beautiful face">
      </div>
      <div class="sdb_holder">
        <h6>Contact Directly</h6>
        <address>
        Paul Habjanetz<br>
        XXX Scofield Ridge Pkwy<br>
        Austin, TX<br>
        78727<br>
        <br>
        Tel: (214)529-2365<br>
        Email: paulhab39@gmail.com
        </address>
      </div>
    </div>
    <div class="content three_quarter"> 
      <div id="comments">
        <h1>Submit through my system</h1>
        <p>Below are my top choices of food places in Austin - you can click on the name of each place to see where they are located within the city and also find more information in their infowindow. I have only been here for a year so am not a veteran in Austin food but with more time I will cover more territory.</p>
        <form action="#" method="post">
          <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
    </div>
    <div class="clear"></div>
  </main>
</div>
<?php
include ('footer.html');
?>