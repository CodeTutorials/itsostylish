<?

$ref = $_SERVER['HTTP_REFERER'];

if(!EMPTY($_POST['g-recaptcha-response']) && !EMPTY($_POST['email']) && !EMPTY($_POST['name']) && !EMPTY($_POST['message'])) {
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
                echo '<h2>Thanks for your enquiry</h2>';  
                $name = $_POST['name'];
$email = $_POST['email'];
$bh = 'info@itsostylish.com';
echo "<br>Thank you, message received.<br>";
$to  = 'amberjones797@gmail.com';
$message = strip_tags($_POST['message']);
// subject
$subject = 'Message From ' . " $name";

// message
$message = '<html><head><title>You have received an online query</title></head>
<body><p>From !' . $name . '</p><table><tr><th>' . $email. '</th><th>' . $message . '</th></tr></table></body></html>';

// To send HTML mail, the Content-type header must be set
$headers = "From: " . strip_tags($bh) . "\r\n";
$headers .= "CC: susan@icloud.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";




// Mail it
mail($to, $subject, $message, $headers); 
                

                

                

                

                } } else { 
                echo "please complete captcha and all form elements"; } 