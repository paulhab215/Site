<?php 
$page_name = 'Life Timeline';
include ('header.html');
?>
<div class="wrapper row2">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="aboutme.php">About Me</a></li>
      <li><a href="#">Life Timeline</a></li>
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="content"> 
        <div class="center btmspace-80">
          <h3 class="heading">Me through the ages</h3>
          <p class="nospace">Nothing like traveling back in time.</p>
        </div>
        <ul class="timeline">
            <li>
                <div class="line-event"><a><i class="fa fa-circle" id=""></i></a></div>
                <div class="line-event-panel">
                    <div class="line-heading">
                       <div class="left-column"><h4>Birth Day</h4></div>
                       <div class="right-column"><h4>12-1989</h4></div>
                    </div>
                    <div class="timeline-content"><br>
                        <p>Although little about me is known, I started my life in Columbus Ohio on December 18, 1989.</p>
                    </div>
                </div>
            </li>
            
            <li class="line-flipped">
                <div class="line-event"><a><i class="fa fa-circle invert" id=""></i></a></div>
                <div class="line-event-panel">
                    <div class="line-heading">
                       <div class="left-column-flipped"><h4>Hello Texas</h4></div>
                       <div class="right-column-flipped"><h4>04-1994</h4></div>
                    </div>
                    <div class="timeline-content"><br>
                        <p>I spent very little time enjoying their cold winters before I found myself in Kindergarden here in Texas in the year 1994 as a Garden Ridge Gator.</p>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="line-event"><a><i class="fa fa-circle" id=""></i></a></div>
                <div class="line-event-panel">
                    <div class="line-heading">
                       <div class="left-column"><h4>Early Leadership</h4></div>
                       <div class="right-column"><h4>00-2005</h4></div>
                    </div>
                    <div class="timeline-content"><br>
                        <p>As a participant of many youth organizations I was able to distinguish myself as a leader among children. These opportunities which included adventures into unknown lands helped me develop a sense of independence as well as a comfort in unknown situations.</p>
                    </div>
                </div>
            </li>
            
            <li class="line-flipped">
                <div class="line-event"><a><i class="fa fa-circle invert" id=""></i></a></div>
                <div class="line-event-panel">
                    <div class="line-heading">
                       <div class="left-column-flipped"><h4>Graduated High School</h4></div>
                       <div class="right-column-flipped"><h4>05-2008</h4></div>
                    </div>
                    <div class="timeline-content"><br>
                        <p>I left high school a man among men and was filled with a hunger for more wordly experience which I satisfied with social interactions and the embarkment towards college.</p>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="line-event"><a><i class="fa fa-circle" id=""></i></a></div>
                <div class="line-event-panel">
                    <div class="line-heading">
                       <div class="left-column"><h4>First CS class</h4></div>
                       <div class="right-column"><h4>08-2014</h4></div>
                    </div>
                    <div class="timeline-content"><br>
                        <p>Upon the advice of my uncle (a data analyst) I decided to take a computer science class. It didn't even take a week for me to fall in love.</p>
                    </div>
                    <div class="timeline-footer">
                        <img src="../images/demo/backgrounds/03.png" width="313" height="216" align="middle">
                    </div>
                </div>
            </li>
            
            <li  class="line-flipped">
                <div class="line-event"><a><i class="fa fa-circle invert" id=""></i></a></div>
                <div class="line-event-panel">
                    <div class="line-heading">
                       <div class="left-column-flipped"><h4>Graduated College</h4></div>
                       <div class="right-column-flipped"><h4>05-2015</h4></div>
                    </div>
                    <div class="timeline-content"><br>
                        <p>Upon Graduating college I felt that I was prepared for the establishment of a flouring career so I launched my hard working attitude to the ranks of Corrections Software Solutions.</p>
                    </div>
                    <div class="timeline-footer primary">
                        <img src="includes/dog.jpg" width="313" height="216" align="middle">
                    </div>
                </div>
            </li>
            <li class="clearfix no-float"></li>
        </ul>
    </div>
    <div class="clear"></div>
  </main>
</div>
<?php
include ('footer.html');
?>