<style>
#footer{
  font-size:inherit;
position:relative;
bottom:0;
width:100%;
height:auto;
background: black;
color:white;
padding-top:4px;
overflow: hidden;
padding-left:0px;
padding-right:0px;

}</style>

<div id='footer'>
<div class='row text-center'>
<div class='col-4'><h4>Categories</h4>
<ul class='list-unstyled'>
<?
$sqlpp = $db->query("SELECT * FROM cate");
while($ro = $sqlpp->fetchArray(SQLITE3_ASSOC ) ) { 
echo "<li>$ro[cate_title]</li>"; } 
?>

</ul>
</div>
<div class='col-4'><h4>Pages</h4>
<ul class='list-unstyled'>
<li><a href='about.php'>About</a></li>
<li><a href='contact.php'>Contact</a></li>
<li><a href='https://itsostylish.com/privacypolicy.php'>Privacy policy</a></li>
<li><a href='https://itsostylish.com/termsofservice.php'>Terms of service</a></li>

</ul>
</div>
<div class='col-4'><h4>Contact</h4>
<address>
<?
$sqfa = $db->query("SELECT * FROM siteinfo");
while ($ra = $sqfa->fetchArray(SQLITE3_ASSOC) ) { 
$nname = $ra['site_name'];
$ph = '0642490926';
  echo "<strong>$ra[site_name]</strong><br>
  $ra[site_address]<br>
  <abbr title='Phone'>P:</abbr> $ph
</address>

<address>
  <strong>Susan</strong><br>
  <a href='mailto:#'>info@itsostylish.com</a>
</address>"; 
 } 
?>
</div>
</div>
<div class='row'>
<div class='col-12'>
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="index.php"><? echo "$nname"; ?></a>
  </div>
</div>
</div>
