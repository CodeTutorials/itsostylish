<?
include "top.php";
$id = $_REQUEST['id'];


$ssq = $db->query("SELECT * FROM mainblog1 WHERE bl_id ='$id'");
while($pr = $ssq->fetchArray(SQLITE3_ASSOC) ) { 
$title = $pr['title']; } 
require "header.php";


?>
<style>
#getpattern{
display: none;
}

</style>
<div class='container-fluid'>

<div class='row'>
<div style='margin-top:2em;' class='col-12 text-center'><h2>Itsostylish Sewing Patterns</h2><p>Totally free patterns and sewing tutorials online. Free for commercial use see terms for restrictions.</p>
</div>
</div>
<?
$id = $_POST['pattern'];
if(EMPTY($_POST['email']) ) { 
echo "Please enter your email address so we can forward your pattern to you<br>"; } 
elseif(EMPTY($_POST['name']) ) { 
echo "Please enter your name<br>";
} 
elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
  echo "$_POST[email] is not a valid address" ; } 
  
  elseif(!EMPTY($_POST['g-recaptcha-response'])) { 

   $captcha=$_POST['g-recaptcha-response'];
          //6Ldo29MZAAAAAPz0ZMjyrIBKfnCHSzifab8-xZzM
        
        $secretKey = "6Ldo29MZAAAAAPz0ZMjyrIBKfnCHSzifab8-xZzM";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        
        
        $responseKeys = json_decode($response,true); 
        // should return JSON with success as true
        if($responseKeys["success"]) {

  

  

  



$ssq = $db->query("SELECT * FROM mainblog1 WHERE bl_id ='$id'");
while($pr = $ssq->fetchArray(SQLITE3_ASSOC) ) { 
$idd = $pr['bl_id'];
$dinstuction = $pr['link'];
$title = $pr['title'];
} 
$em = $_POST['email'];
$name = cl($_POST['name']);
$emenc = cr($stp, $em, $action = 'enc');
$nl = $_POST['nl'];
$emax = urlencode($emenc);


$nameenc = cr($stp, $name, $action = 'enc');
echo "PLEASE CHECK YOUR SPAM FOLDER, WE CANNOT SEND PATTERNS UNLESS YOU VERIFY YOUR ADDRESS<br>Your pattern $title is on its way to you, expect to receive it within 2-12 hours<br>";
echo "Instructions will be mailed to $name at $em<br>";
$sql = $db->query("INSERT INTO cust1(cust_name, cust_em, cust_nl, cust_download, cust_valid) values('$nameenc', '$emenc', '$nl', '$id', '1')");


$clientem = $_POST['email'];
$to = $clientem;
$from_name = 'Itsostylish';
$subject = 'Itsostylish Pattern' . $title;
$messagesg = "<h4>Please click on the link below to verify your email address</h4><p><a href='https://itsostylish.com/sewingpatterns/verify.php?em=" . $emax . "'>Click on this link</a></p><p>Or copy this URL to your browser if you cant click on the link https://itsostylish.com/sewingpatterns/verify.php?em=$emax </p><p>As soon as you have validated your email address we will forward your pattern $title";

$messagex = "<h2>New Subscription</h2>$uname";
$message = $messagex . $messagesg;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers
$headers .= 'To: ' . $name . ' <' . $clientem . '>' . "\r\n";
$headers .= 'From: Itsostylish <info@itsostylish.com>' . "\r\n";
$headers .= 'Cc: susan.hern@icloud.com' . "\r\n";
$headers .= 'Bcc: '; 
$ar = array('info@itsostylish.com' . ', ', 'susan.hern@icloud.com' . ',' );
$headers .=implode(',', $ar);
mail($to, $subject, $message, $headers);

} } 



require "footer.php";
?>
</div>
<?
require "bootstrapbottom.php";
?>
<script>
function showform() { 
document.getElementById("getpattern").style.display = "block";
} 
</script>

