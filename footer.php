<?php
include("connection.php");
$res         = mysql_fetch_array(mysql_query("select * from sv_admin_login"));
$admin_email = mysql_real_escape_string($res['email_id']);
$site_name   = mysql_real_escape_string($res['site_name']);
$logo        = mysql_real_escape_string($res['logo']);
$favicon     = mysql_real_escape_string($res['favicon']);
$site_desc   = mysql_real_escape_string($res['site_desc']);
$keyword     = mysql_real_escape_string($res['keyword']);
$site_url    = mysql_real_escape_string($res['site_url']);
?>

<footer class="footer">

  <div class="container">

    <div class="footer-content col-lg-3 col-md-3 col-sm-3 col-sm-4 col-lg-4">
      <h5 class="footer-content__title">Quick Links</h5>

      <ul class="footer-content__list">
        <li><a href="<?php
echo $res['site_url'];
?>">Home</a></li>
        <li><a href="<?php
echo $res['site_url'];
?>/users/howitworks.php">How it Works</a></li>
        <li><a href="<?php
echo $res['site_url'];
?>/users/pricing.php">Pricing</a></li>
        <li><a href="<?php
echo $res['site_url'];
?>/users/help.php">Help</a></li>
        <li><a href="<?php
echo $res['site_url'];
?>/users/order.php">Post your order</a></li>
      </ul>
    </div>

    <div class="footer-content col-lg-3 col-md-3 col-sm-3 col-sm-4 col-lg-4">
      <h5 class="footer-content__title">Services</h5>
      <ul class="footer-content__list">
        <li><a href="#">Laundry</a></li>
        <li><a href="#">Painting</a></li>
        <li><a href="#">Mechanic</a></li>
        <li><a href="#">Wash</a></li>
        <li><a href="#">Electricians</a></li>

      </ul>
    </div>
    
    
     <div class="footer-content col-lg-3 col-md-3 col-sm-3 col-sm-4 col-lg-4">
      <h5 class="footer-content__title">Mobile app</h5>
      <ul class="footer-content__list">
     <a href="#"><img style="margin-bottom:10px;" src="<?php
echo $res['site_url'];
?>/img/app1.png"></a>
          <a href="#"><img src="<?php
echo $res['site_url'];
?>/img/app2.png"></a>

        </ul>
    </div>
    

    <div class="footer-content col-lg-3 col-md-3 col-sm-3 col-sm-4 col-lg-4">
      <div class="footer-content__social social">
          <h5 class="footer-content__title">Find us online</h5>

          <a class="social__action" href="#">
            <i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a class="social__action" href="#">
           <i class="fa fa-google-plus" aria-hidden="true"></i></a>
           <a class="social__action" href="#">
           <i class="fa fa-twitter" aria-hidden="true"></i></a>
         </div>

      <div class="mobile-app">
          <h5 class="footer-content__title">Payment methods:</h5>
          <img src="<?php
echo $res['site_url'];
?>/img/visa.png" alt="Visa" />
          <img src="<?php
echo $res['site_url'];
?>/img/mastercard.png" alt="Mastercard" />
          <img src="<?php
echo $res['site_url'];
?>/img/american_express.png" alt="American express" />
          <img src="<?php
echo $res['site_url'];
?>/img/paypal.png" alt="Paypal" />
      </div>
    </div>
  </div>

  <div class="footer__copyright container">
    <p>
Copyright &#169; 2016 UniiServices. Designed By <a href="http://wipixar.com/" target="_blank">Wipixar Solutions Limited</a>
    </p>
  </div>
</footer>
 