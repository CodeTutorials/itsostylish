
<?php

$rescount = $records;
$recordsperpage = 6;
$pages = ceil($rescount/$recordsperpage);

if(!($_GET["nu"])) {  
 $nu = 0;} else{
$nu = $_GET[nu]; }
$ref = ($nu +1);
$pg = range(1, $pages, 1);

echo "<div class='ne'>";

foreach( $pg as $p) { 
$rec = $p - 1;
$num = $rec*$recordsperpage;




}
if($p == 1) { 
echo "1 Page";
}


if(($nu+$recordsperpage) >= $rescount && $p != 1 && $rec != -1) { 
$calc = $nu+$recordsperpage;

$pgd = ceil($nu/$recordsperpage)+1;
previousonly($pages, $pgd, $recordsperpage, $url, $type, $searchTerm);
echo "<div class='pr'><a href='" . $url . "?nu=" . ($nu-$recordsperpage) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>PREVIOUS</a><br/></div>";
 } 
elseif ($nu+$recordsperpage < $rescount && $nu > 1) { 

$pgd = ceil($nu/$recordsperpage)+1;
nextandprevious($pages, $pgd, $recordsperpage, $url, $type, $searchTerm);
echo "<div class='pr'><a href='" . $url . "?nu=" . ($nu+$recordsperpage) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>NEXT</a><br /></div>";
echo "<div class='pr'><a href='" . $url . "?nu=" . ($nu-$recordsperpage) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>PREVIOUS</a><br/></div>";


} 
 



elseif($nu === 0 && $rec >=1 ) { 

$pgd = ceil($nu/$recordsperpage)+1;
nextonly($pages, $pgd, $recordsperpage, $url, $type, $searchTerm);
echo "<div class='pr'><a href='" . $url . "?nu=" . ($nu+$recordsperpage) . "&&type=" . $type . "&&searchTerm=" . $searchTerm . "'>NEXT</a></div>";





echo "</div>";
} 



?>