<?
require "top.php";

require 'header.php';


?>
<div class='container-fluid'>

      <div class="row">
        <div class="col-12">
          <center><h2>Contact Details</h2></center><hr>
          <p></div></div>
<div class="row">
<hr>
  <div class="col-md-12"><h4>Message</h4><br /><hr><p>
  
<?php

$ch = $_POST[chkhuman];
$email = $_POST["email"];
echo "$email<br>";
$name = $_POST["name"];

if(EMPTY($_POST["chkhuman"]) ) { 
echo "please add the Robot checker sum";
} 
elseif($_POST["chk"] != $_POST["chkhuman"]) { 
echo "That is incorrect, please try again"; } 
elseif(filter_var($email, FILTER_VALIDATE_EMAIL) != true) { 
echo "Email is in the incorrect format"; } 
elseif(EMPTY($_POST["name"]) || EMPTY($_POST["email"]) ) { 
echo "Add details"; } else { 
$name = $_POST[name];
$email = $_POST[email];
echo "Thank you, message received.";
$to  = 'susan.hern@icloud.com';
$message = strip_tags($_POST[message]);
// subject
$subject = 'Message From ' . " $name";

// message
$message = '<html><head><title>You have received an online query</title></head>
<body><p>From !' . $name . '</p><table><tr><th>' . $email. '</th><th>' . $message . '</th></tr></table></body></html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers

$headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers); } 

?></div></div>
<? 
require 'footer.php';
?>




</div><!container>

<?
require 'bootstrapbottom.php';
?>