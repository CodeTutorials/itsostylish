<?
require "top.php";
require "header.php";

?>
<div class='container-fluid'>
<div class='row'>
<div class='col-12'>
<?
$ema = ($_REQUEST['em']);



$nl = cr($stp, $ema, $action = 'inv');

$sq = $db->query("SELECT * FROM cust1 WHERE cust_tok = '$ema'");
while($row = $sq->fetchArray(SQLITE3_ASSOC) ) { 
$emm = $row[cust_tok]; 
echo "$emm"; } 
if($emm != $ema) { 
echo "we do not have this address in our database, please send a valid address"; } 
elseif ($emm === $ema) {


while($rowx = $sq->fetchArray(SQLITE3_ASSOC) ) { 

$id = $rowx['cust_id'];
$status = $rowx['cust_valid'];
 } 
 
 if($status === '2') { 
 echo "You have already validated this email address"; } 
 else { 
 $sqa = $db->query("UPDATE cust1 SET cust_valid = '2', cust_tok_valid = '2'WHERE cust_id = '$id'");
 
 echo "<h4>Thank you for validating your address, we will be sending you your pattern shortly, and if you have selected the newsletter, you will recieve it from time to time</h4>";
 
 } } 
 ?>
</div></div>
</div>