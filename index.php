<?php

$title = 'Free sewing patterns with tutorials';
$description = 'Sewing tips, tutorials and patterns for women, children, babies, pets, homeware and men';
include "top.php";
require "header.php";
?>
<div class='container-fluid'>
<div class='row'>
<div id='mainheader' class='col-12'>
</div>
</div>
<div class='row'>
<div style='margin-top:2em;' class='col-12 text-center'><h1>Itsostylish Sewing Patterns</h1><p>Totally free patterns and sewing tutorials online. Free for commercial use see terms for restrictions.</p>
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
<?php

$ssq = $db->query("SELECT * FROM mainblog1 ORDER BY bl_id DESC LIMIT 30");
while($pr = $ssq->fetchArray(SQLITE3_ASSOC) ) { 
echo "<div class='col-4'><a href='itempage.php?id=$pr[bl_id]'><h4>$pr[title] </h4></a><p><img class='img-fluid' src='$pr[img]' alt='$pr[title]' /></p><p>$pr[cate]</p><p>$pr[descps]</p>
</div>"; 
} 
?>
</div>

<?php
require "footer.php";
?>
</div>
<?php
require "bootstrapbottom.php";
?>
