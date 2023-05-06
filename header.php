<?
require "bootstraptop.php";
$size = 'xl';
$bootcolor = 'light';
$bootcolor2 = 'light';
$navname = "Itsostylish";

$dropdownname = 'Browse';
$sqlpp = $db->query("SELECT * FROM cate");
while($rowfd = $sqlpp->fetchArray(SQLITE3_ASSOC ) ) { 
$xdd[] =  $rowfd['id']; 
$xdtitle[] = $rowfd['cate_title'];
} 
$dropdownlinkarray = array( "$xdtitle[0]" => "productpage.php?searchTerm=$xdtitle[0]", "$xdtitle[1]" => "productpage.php?searchTerm=$xdtitle[1]", "$xdtitle[2]" => "productpage.php?searchTerm=$xdtitle[2]", "$xdtitle[3]" => "productpage.php?searchTerm=$xdtitle[3]", "$xdtitle[4]" => "productpage.php?searchTerm=$xdtitle[4]", "$xdtitle[5]" => "productpage.php?searchTerm=$xdtitle[5]", "$xdtitle[6]" => "productpage.php?searchTerm=$xdtitle[6]", "$xdtitle[7]" => "productpage.php?searchTerm=$xdtitle[7]", "$xdtitle[8]" => "productpage.php?searchTerm=$xdtitle[8]");
$pagelinkarray = array( "contact.php" => "Contact", "about.php" => "About", "../index.php" => "Coloring Pages");
$ar = array('home >>', 'index.php');
navbardropdownsearch ($size, $bootcolor, $bootcolor2, $navname, $pagelinkarray, $dropdownname, $dropdownlinkarray, $ar); 


?>