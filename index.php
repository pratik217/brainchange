<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.defaultvalue.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.scrollTo-min.js"></script>
<link rel="stylesheet" href="layout/styles//bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="layout/styles//bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="layout/scripts/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $("#fullname, #validemail, #message").defaultvalue("Full Name", "Email Address", "Message");
    $('#shout a').click(function () {
        var to = $(this).attr('href');
        $.scrollTo(to, 1200);
        return false;
    });
    $('a.topOfPage').click(function () {
        $.scrollTo(0, 1200);
        return false;
    });
    $("#tabcontainer").tabs({
        event: "click"
    });
});
</script>
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#hpage_slider').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>
<script type="text/javascript" src="layout/scripts/piecemaker/swfobject/swfobject.js"></script>
<script type="text/javascript">
var flashvars = {};
flashvars.cssSource = "layout/scripts/piecemaker/piecemaker.css";
flashvars.xmlSource = "layout/scripts/piecemaker/piecemaker.xml";
var params = {};
params.play = "false";
params.menu = "false";
params.scale = "showall";
params.wmode = "transparent";
params.allowfullscreen = "true";
params.allowscriptaccess = "sameDomain";
params.allownetworking = "all";
swfobject.embedSWF('layout/scripts/piecemaker/piecemaker.swf', 'piecemaker', '960', '430', '10', null, flashvars, params, null);
</script>
<!-- End Homepage Only Scripts -->
</head>
<?php
    include 'header.php';
?>
<!-- ####################################################################################################### -->
    <script>
$( document ).ready(function() {
 
    $( "a" ).click(function( event ) {
 
        alert( "As you can see, the link no longer took you to jquery.com" );
 
        event.preventDefault();
 
    });
    
});
    </script>
<!--------------------------border--->
<div class="border bottom">
            <div class="fl_right">
    <script src="jquery.js"></script>

    
    <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="

   bottom: 5px;
  right: 18px;
  position: fixed;
  padding-bottom: 7px;
">
    <script>
        position: fixed;
right: 16px;
bottom: 0;
</script>
  Contact us form
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Contact us</h4>
      </div>
      <div class="modal-body">
          <h3> <form name="login" onsubmit="return(validate());"action="feedback.php" class="TTWForm" method="post">
      <div id="field1-container" class="field f_50">
          <label for="field1">Name</label></br>
          <input name="name" id="field1" type="text"></br>
      </div>
      <div id="field2-container" class="field f_50">
        <label for="field2">Telephone</label></br>
        <input name="tel" id="field2" type="text" onblur="return nn()"></br>
      </div>
      <div id="field5-container" class="field f_50">
        <label for="field5">Email</label></br>
        <input name="email" id="field5" type="email" onblur="return validate()"></br>
      </div>
      <div id="field4-container" class="field f_100">
        <label for="field4">Message</label></br>
        <textarea rows="5" cols="20" name="message" id="field4"></textarea></br>
      </div>
      <div id="form-submit" class="field f_100 clearfix submit">
<input name="s1" type="submit" class="button" value="Submit" style="
    padding-bottom: 7px;
    padding-right: 19px;
">       
</input>
      </div>
    </form></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">(X)Close</button>
        <button type="button" class="btn btn-primary">Save and send()</button>
      </div>
    </div>
  </div>
</div>
               
           </div>
        </div>
<div class="border top"></div>
	<div class="border right"></div>
	<div class="border left"></div>
        
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <div id="piecemaker"><img src="images/demo/piecemaker/960x360.gif" alt="" /></div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container" class="clear"> 
    <!-- ####################################################################################################### -->
    
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2>Our Partners and Sponsors</h2>
        <div id="hpage_slider">
          <div class="item"><img src="images/demo/featured-project/1.gif" alt="" /></div>
          <div class="item"><img src="images/demo/featured-project/2.gif" alt="" /></div>
          <div class="item"><img src="images/demo/featured-project/3.gif" alt="" /></div>
          <div class="item"><img src="images/demo/featured-project/4.gif" alt="" /></div>
          <div class="item"><img src="images/demo/featured-project/5.gif" alt="" /></div>
        </div>
        <h2>Topics Undertaken</h2>
        <p><strong>Topic Type:</strong> <a href="#">Group disscussion</a></p>
        <p></a>.</p>
        <p class="readmore"><a href="#"><strong>View The Full Project &raquo;</strong></a></p>
      </div>
      <div class="fl_right">
        <h2>What People Say About Us</h2>
        <ul class="testimonials">
          <li>
            <p class="name"><strong>TCS</strong> - CEO</p>
            <blockquote>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. Idenim semper pellente velis felit ac nullam pretium morbi lacus.</blockquote>
            <p class="readmore"><a href="#"><strong>View This Project</strong></a></p>
          </li>
          <li class="last">
            <p class="name"><strong>Red Hat Enterprise</strong> - CEO</p>
            <blockquote>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. Idenim semper pellente velis felit ac nullam pretium morbi lacus.</blockquote>
            <p class="readmore"><a href="#"><strong>View This Project</strong></a></p>
          </li>
        </ul>
        
        <h2>Subscribe To Our Newsletter</h2>
        <p>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit.</p>
        <form action="#" method="post">
          <fieldset>
            <legend>Newsletter Signup:</legend>
            <input type="email" id="newsletter" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="image" id="subscribe" src="images/sign-up.gif" alt="Submit" />
          </fieldset>
        </form>
        <p class="form_hint">* Please add name@brainchange.com to your trusted email list</p>
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### 
<div class="wrapper">
  <div id="footer" class="clear">
    <div class="fl_left">
      <div class="about_us border">
        <h2>About Us</h2>
        <p> We want to empower students to get highly paid jobs in India and abroad. We conduct all types of workshops including Resume, Cover letter, Story-telling, Hidden Job market and Business Etiquettes workshop.</p>
        <p> Website is primarily used to establish credibility in the minds of the people. People will be able to read about the company, the team, their values, testimonials, clients. 
      </div>
    </div>
  </div>
      <div id="contact" class="clear">
        
        <div class="fl_right">
          
        </div>
      </div>
    </div>---->
      
    <!-- ####################################################################################################### -->
    <div class="fl_right">
      <div id="tabcontainer" class="border">
        <ul id="tabnav">
          <li><a href="#tabs-1">From The Blog</a></li>
          <li><a href="#tabs-2">Latest Tweets</a></li>
          <li class="last"><a href="#tabs-3">Interesting Links</a></li>
        </ul>
        <div id="tabs-1" class="tabcontainer">
          <ul class="blogposts">
            <li>
              <p class="posttitle">Justoid nonummy laoreet phasellent</p>
              <p class="publishedon">Published on 01 Jan 2042, by Username</p>
              <p class="postintro">Miet gravida nulla at augue curabitae faucibulum nulla curabitur consectetus dolorem. Ametuervestibus nam nibh laculis vivamus suscinia masse convallis sollis quam males.</p>
              <p class="readmore"><a href="#">Read More &raquo;</a></p>
            </li>
            <li class="last">
              <p class="posttitle">Justoid nonummy laoreet phasellent</p>
              <p class="publishedon">Published on 01 Jan 2042, by Username</p>
              <p class="postintro">Miet gravida nulla at augue curabitae faucibulum nulla curabitur consectetus dolorem. Ametuervestibus nam nibh laculis vivamus suscinia masse convallis sollis quam males.</p>
              <p class="readmore"><a href="#">Read More &raquo;</a></p>
            </li>
          </ul>
        </div>
        <!-- ########### -->
        <div id="tabs-2" class="tabcontainer">
          <ul class="twitterfeed">
            <li><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. <span>1 day ago</span></li>
            <li><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. <span>1 day ago</span></li>
            <li><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. <span>1 day ago</span></li>
            <li class="last"><a href="#">@namehere</a> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit. <span>1 day ago</span></li>
          </ul>
            
        </div>
        <!-- ########### -->
        <div id="tabs-3" class="tabcontainer">
          <ul>
            <li><a href="#">Lorem ipsum dolor sit</a></li>
            <li><a href="#">Amet consectetur</a></li>
            <li><a href="#">Praesent vel sem id</a></li>
            <li><a href="#">Curabitur hendrerit est</a></li>
            <li><a href="#">Aliquam eget erat nec sapien</a></li>
            <li><a href="#">Cras id augue nunc</a></li>
            <li><a href="#">In nec justo non</a></li>
            <li><a href="#">Vivamus mollis enim ut</a></li>
            <li class="last"><a href="#">Sed a nulla urna</a></li>
          </ul>
        </div>
      </div>
</div>
   
    <?php
    include 'footer.php';
    ?>
</body>

</html>