<?php
include "top.php";
$id = $_REQUEST['id'];


$ssq = $db->query("SELECT * FROM mainblog1 WHERE bl_id ='$id'");
while($pr = $ssq->fetchArray(SQLITE3_ASSOC) ) { 
$title = $pr['title']; 

} 
$description = 'Sewing video tutorial instructions and pattern for ' . $title;
require "header.php";

?>
<style>
#getpattern{
display: none;
}

</style>
<div class='container-fluid'>

<div class='row'>
<div style='margin-top:2em;' class='col-12 text-center'><h1>Itsostylish Sewing Pattern for <? echo $title; ?></h1><p>Totally free patterns and sewing tutorials online. Free for commercial use see terms for restrictions.</p>
</div>
</div>
<?php
$id = $_REQUEST['id'];


$ssq = $db->query("SELECT * FROM mainblog1 WHERE bl_id ='$id'");
while($pr = $ssq->fetchArray(SQLITE3_ASSOC) ) { 
$idd = $pr['bl_id'];
$dins = $pr['link'];
echo "<div class='row'>
<div class='col-6'><h2>$pr[title] </h2><p>$pr[descps]</p><img style='height:300px;' src='$pr[img]' />
</div>";
$vlen = strlen($pr['video']);
if($vlen > 5) { 
echo "<div class='col-6'><h2>Video</h2><iframe width='400' height='215' src='$pr[video]' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
</div>"; } else { 
echo "<div class='col-6'></div>";
} } 
echo "</div>";
$ssqx = $db->query("SELECT * FROM bodblog WHERE titleid ='$idd'");
while($prx = $ssqx->fetchArray(SQLITE3_ASSOC) ) { 
echo "<div class='row'>
<div class='col-12'><h2>$prx[subtitle]</h2>";
if(strlen($prx['img1']) > 4) { 
echo "<img style='height:300px;' src='$prx[img1]' /><br>"; } 

if($prx['details'] === 'lis') { 
$txt = explode('|', $prx['txt']);
echo "<ul class='list-unslyled'>";
foreach($txt as $tx) { 
echo "<li>$tx</li>";
} 
echo "</ul>";

} else { 
echo "<p>$prx[txt]</p>";
} 

} 
$ds = trim($dins);

echo "<a href='$ds' style='margin-left:6em;margin-bottom:2em;'>$dins Download Insructions</a>"; 
echo "<div onclick='showform();' style='margin-left:2em;margin-bottom:2em;' roll='button' class='btn btn-outline-secondary'>Get the pattern</div>"; 
echo "<form name='getpattern' action='getpattern.php' method='post' id='getpattern'><h2>Enter details, we will send you your pattern via email.</h2>";
$input_id = 'name';
$input_type = 'text';
$input_label ='Name';
$size = 'l';
input_form($input_id, $input_type, $input_label, $size);
$input_id = 'email';
$input_type = 'email';
$input_label ='Email';
$size = 'l';
input_form($input_id, $input_type, $input_label, $size);
 echo '<div class="form-group">
    <label for="nl">Get our newsletter for regular tips and tutorials</label>
    <select multiple class="form-control" name="nl" id="nl">
      <option value="y">Yes</option>
      <option value="n">No</option>
      
    </select>
  </div>';
echo "<input type='hidden' value='$id' id='pattern' name='pattern' />";
echo "<div class='g-recaptcha' data-sitekey='6Ldo29MZAAAAAIm7MQFDKvKDBHcuk0NMT7ard7-l'></div>";
echo "<button id='semail' type='submit' class='btn btn-outline-dark'>Send pattern</button>";
echo "</form>";


echo "</div></div>"; 








require "footer.php";
?>
</div>
<?php
require "bootstrapbottom.php";
?>
<script>
function showform() { 
document.getElementById("getpattern").style.display = "block";
} 
</script>

