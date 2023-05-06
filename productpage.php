<?
include "top.php";
$searchTerm = $_REQUEST['searchTerm'];


$sqlpp = $db->query("SELECT * FROM cate WHERE cate_title = '$searchTerm'");
while($ro = $sqlpp->fetchArray(SQLITE3_ASSOC ) ) { 
$id = $ro['id']; 
}
$title = 'Free sewing patterns category ' . $searchTerm;
require "header.php";
?>
<div class='container-fluid'>
<div class='row'>
<div id='mainheader' class='col-12'>
</div>
</div>
<div class='row'>
<div style='margin-top:2em;' class='col-12 text-center'><h1>Sewing patterns category <? echo $searchTerm; ?><h2>Itsostylish Sewing Patterns</h2><p>Totally free patterns and sewing tutorials online. Free for commercial use see terms for restrictions.</p>
</div>
</div>
<div class='row text-center'>
<div class='col-4'><h2>All the tools</h2><i class='fas fa-wrench fa-3x'></i><p>Online tools include full courses, mini-tutorials, videos, images and more.</p>
</div>
<div class='col-4'><h2>Recieve by email</h2><i class='fas fa-envelope-open fa-3x'></i><p>Recieve your pattern directly to your email address. Most patterns are multi-size graded for easy use.</p>
</div>
<div class='col-4'><h2>Download a PDF</h2><i class='fas fa-download fa-3x'></i><p>Save the PDF to your device. Use whenever necessary.</p>
</div>
</div>
<div class='row'>
<?

$ssq = $db->query("SELECT * FROM mainblog1 WHERE cate1 = '$id' OR cate2 = '$id' OR cate3 = '$id' ORDER BY bl_id DESC LIMIT 30");
while($pr = $ssq->fetchArray(SQLITE3_ASSOC) ) { 
echo "<div class='col-4'><a href='itempage.php?id=$pr[bl_id]'><h4>$pr[title] </h4></a><p><img style='height:300px;' src='$pr[img]' /></p><p>$pr[cate]</p><p>$pr[descps]</p>
</div>"; 
} 
?>
</div>

<?
require "footer.php";
?>
</div>
<?
require "bootstrapbottom.php";
?>