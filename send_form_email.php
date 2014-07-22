<?php
 
if(isset($_POST['email'])) {
 

    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "nat@natcooper.com";
 
    $email_subject = "A Message from NatCooper.com";

    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }

    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }

 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 

 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 

<!-- include your own success html here -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jessica's Kitchen</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css">
  <link href='http://fonts.googleapis.com/css?family=Sofia|Dancing+Script|Roboto+Condensed:300|Nunito:300' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- TITLE BLOCK -->
  <div class="titleblock">
    <div class="ribbon">
      <div class="threading">
        <img src="images/jessicaskitchen-logo300.png">
      </div>
    </div>
    <div class="ribbonTri2"></div>
    <div class="ribbonTri1"></div>
  </div>
<!-- //TITLE BLOCK -->
<!-- NAVIGATION -->
  <div class="nav">
    <div class="navRibbon">
      <div class="navThreading">
        <a href="index.html"><p>Home</p></a>
      </div>
      <div class="navRibbonTri2"></div>
      <div class="navRibbonTri1"></div>
    </div>
    <div class="navRibbon">
      <div class="navThreading">
        <a href="about.html"><p>About</p></a>
      </div>
      <div class="navRibbonTri2"></div>
      <div class="navRibbonTri1"></div>
    </div>
    <div class="navRibbon">
      <div class="navThreading">
        <a href="contact.html"><p>Contact</p></a>
      </div>
      <div class="navRibbonTri2"></div>
      <div class="navRibbonTri1"></div>
    </div>
    <div class="navRecipe">
      <div class="navThreading">
        <p>Recipe Box</p>
      </div>
      <div class="navRibbonTri2"></div>
      <div class="navRibbonTri1"></div>
      <ul class="recipeBox">
        <li>
          <div class="miniRbox">
            <a href="RecipeBox/icing/index.html"><p>Icing</p></a>
          </div>
        </li>
        <li>
          <div class="miniRbox">
            <a href="RecipeBox/cupcakes/index.html"><p>Cupcakes</p></a>
          </div>
        </li>
        <li>
          <div class="miniRbox">
            <a href="RecipeBox/pies/index.html"><p>Pies</p></a>
          </div>
        </li>
        <li>
          <div class="miniRbox">
            <a href="RecipeBox/savoury/index.html"><p>Savoury Treats</p></a>
          </div>
        </li>
      </ul>
    </div>
  </div>
<!-- //NAVIGATION -->
<!-- PICTURE SLIDER -->
  <div class="container">
    <div class="main">
      <h1>Thank you!</h1>
      <p>Thank you for contacting Jessica's Kitchen! Be sure to follow me on pinterest too!</p>
    </div>
    
  </div>
<!-- //PICTURE SLIDER -->
<!-- QUOTATION -->
  <div class="quotation">
    I am a Toronto-Based baker offering friendly, creative and delicious baked goods at affordable prices. Read more about me <a href="about.html">here</a>.
  </div>
<!-- //QUOTATION -->
<!-- FOOTER -->
  <footer>
    <div class="whiteThread">
      <a href="https://www.facebook.com/jessica.ashlene" target="_blank"><img src="images/social/facebook.png"></a>
      <a href="http://instagram.com/jessicaashlene" target="_blank"><img src="images/social/instagram.png"></a>
      <a href="mailto:jess.ashlene@gmail.com"><img src="images/social/email.png"></a>
      <a href="http://www.pinterest.com/jessicaashlene/likes/" target="_blank"><img src="images/social/pinterest.png"></a>
      <a href="https://twitter.com/jessicaashlene" target="_blank"><img src="images/social/twitter.png"></a>
      <div class="copyright">
        <p>Made with love by<br>
        <a href="http://natcooper.com" target="_blank">NatCooper.com</a></p>
      </div>
    </div>
  </footer>
<!-- //FOOTER -->

<!-- JS SHTUFF -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.flexslider').flexslider({
        directionNav: false,
        animation: "fade",
      });
    });
  </script>
<!-- //JS SHTUFF -->
</body>
</html>
 
 
 
<?php
 
}
 
?>