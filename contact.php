<?
require "top.php";

require 'header.php';


?>
<div class='container-fluid'>
<div class='row'>
<div class='col-6'>
</div>
</div>






      <div class="row">
        <div class="col-6">
          <center><h2>Contact</h2></center><hr>
          <p><h4>Add your Name and Email to your message. Expect a response in 24hrs.</h4><p class='lead'><address>
        <?
          $em = "info@itsostylish.com";
        
  echo "<strong>Itsostylish</strong><br>
  
  Towerby, Johannesburg<br><abbr title='Phone'>P:</abbr>0642490926</address><address><strong>Susan</strong><br><a href='mailto:". $em . "'>". $em . "</a></address>"; 
 ?>
 <p></div><div class='col-6'><form method='post'class="form-horizontal" action="processcontact1.php">
          <div class="form-group">
    <label class="control-label col-sm-4" for="name">Name:</label>
    <div class="col-sm-12"> 
      <input type="text" class="form-control" name='name' id="name" placeholder="Enter name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-4" for="email">Email:</label>
    <div class="col-sm-12">
      <input type="email" class="form-control" name='email' id="email" placeholder="Enter email">
    </div>
  </div>
<div class='form-group'><label class="control-label col-sm-4" for='message'>Enter Message :</label><br /><div class="col-sm-12"><textarea cols='40' rows='10' id='message' name='message'></textarea></div></div>

<div class="g-recaptcha" data-sitekey="6Ldo29MZAAAAAIm7MQFDKvKDBHcuk0NMT7ard7-l"></div><input type="submit" value="Send Message" name="submit" class="btn btn-lg btn-primary btn-block">
</form></div></div>



<? 
require 'footer.php';
?>




</div><!container>

<?
require 'bootstrapbottom.php';
?>


   
