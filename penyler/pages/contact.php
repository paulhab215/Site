<?php
$page_name = 'Contact Information';
$page_meta = 'Need to get in contact with Paul Habjanetz, contact him through automated system or in person. Contact information such as email and phone located here.';
include ('header.html');
?>
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="contact.php">Contact Me</a></li>
    </ul>
  </div>
</div><div class="wrapper row3">
  <main class="hoc container clear"> 
 <div class="sidebar one_quarter first"> 
      <div class="sdb_holder">
        <img src="../images/paul/1.jpg" alt="Pauls handsome face">
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
        <p>I have always highlighted my listening skills as a favorite among my senses. Drop me a line through this form based contact system and I will return your queries in a timely manner.</p>
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