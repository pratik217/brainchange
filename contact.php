
<?php
        include 'header.php';
    ?>
<html>
    <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

    <div class="border bottom">
            <div class="fl_right">
                <form method="POST" action="contact.php">
                <input type="image" id="go" src="images/Contact.png" alt="submit" />
                </form>
           </div>
        </div>
<div id="container">
    <div class="one-half">
    <div class="heading_bg">
  <h1>Contact Us</h1>
  <script type ="text/javascript">
    function validate()
    {
     var emailID=document.login.field5.value;
        atpos=emailID.indexOf("@");
        dotpos=emailID.lastIndexOf(".");
        if(atpos<1||(dotpos-atpos<2))
        {
            alert("Please Enter Correct EmailId");
            document.login.field5.focus();
            return false;
            }
            return (true);
    }
    </script>
    <script>
        function nn()
        {
            if (document.login.tel.value===""||isNaN(document.login.tel.value)||document.login.tel.value.length!==11)    
        {
            alert("Please Provide a Valid Phone No.");
            document.login.tel.focus();
            return false;
        }
        return truue;
            }
    </script>
 
    
  <form name="login" onsubmit="return(validate());"action="feedback.php" class="TTWForm" method="post">
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
          <input name="s1" type="submit" class="button" value="Submit" >
       
      </div>
    </form>
    </div>
        </div>
        <div class="one-half last">
             <div class="heading_bg">
      <h2>Our Details</h2>
    </div>
            
            <p><strong>BrainCHANGE</strong><br>
      India<br>
      <br>
      Tel: (+91) 99 88 77 66<br>
      mail: <b><u>brainchange@rediffmail.com</u></b> </p>
    <div style="clear:both"></div> 
            
        </div>
    <div style="clear:both; height: 40px"></div>
</div>
  
<?php
    include 'footer.php';
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

