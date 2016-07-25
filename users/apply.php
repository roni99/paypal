<body class="splash-index">
  <?php include("../header.php") ?>
  <section class="teaser bg-top">
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
    <h1 class="sub-title">Become a Service Provider
    </h1>
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
  </section>
  <div class="container">
    <?php
if(isset($_REQUEST['msg']))
{
$msg=$_REQUEST['msg'];
if($msg=="Inserted")
{
echo '<div class="succ-msg">Your Application send successfully. We will get back to you soon..</div>';
}
else if($msg=="Error")
{
echo '<div class="err-msg">Server Error</div>';		
}
}
else
$msg="";
?>
    <!--<div class="err-msg" id="err_id"><?php echo $msg;?></div>-->
  </div>
  <section class="teaser" style="margin-top:30px;">
    <form class="form-large" action="javascript:cleaner('add')" accept-charset="UTF-8" method="post">
      <div class="container apply_form">
        <div class="min-space">
        </div>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Email Address
              </span>
              <input type="email" value="" required="required" class="user-login__input user-login__input" id="email" >
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Confirm Email Address
              </span>
              <input type="email" value="" required="required" class="user-login__input user-login__input" id="cemail" >
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">First name
              </span>
              <input type="text" value="" required="required" class="user-login__input user-login__input" id="fname" >
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Last name
              </span>
              <input type="text" value="" required="required" class="user-login__input user-login__input" id="lname" >
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Mobile No
              </span>
              <input type="text" value=""  required="required" class="user-login__input user-login__input" id="mob_no" >
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Post Code
              </span>
              <input type="text" value="" required="required" class="user-login__input user-login__input" id="post_code" >
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Experience
              </span>
              <select id="exp" class="user-login__input user-login__input" required="required"> 
                <option value="">None
                </option>	
                <option value="1">i have never cleaned professionally before
                </option>
                <option value="2">1-5 months
                </option>
                <option value="3">6-12 months
                </option>
                <option value="4">1-3 years
                </option>
                <option value="5">I am running a household
                </option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Are you currently doing any paid cleaning work?
              </span>
              <select id="paid_work" class="user-login__input user-login__input" required="required"> 
                <option value="">None
                </option>	
                <option value="1">no,none at the moment
                </option>
                <option value="2">1-10 hours/week
                </option>
                <option value="3">10-20 hours/week
                </option>
                <option value="4">+20 hours per week
                </option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Gender
              </span>
              <select id="gender" class="user-login__input user-login__input" required="required" > 
                <option value="">None
                </option>	
                <option value="1">male
                </option>
                <option value="2">female
                </option>
              </select>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Date of Birth
              </span>
              <input type="text" id="datepicker" name="datepicker" required="required" placeholder="Select date" class="user-login__input user-login__input">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Nationality
              </span>
              <input type="text" id="nation" name="nation" required="required" class="user-login__input user-login__input">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <span class="title">Location
              </span>
              <input type="text" id="suburb" name="datepicker" required="required" placeholder="" class="user-login__input user-login__input">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span class="title">Address
              </span>
              <textarea id="address" required="required" class="user-login__input user-login__input req">
              </textarea>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <span class="title">where did you hear about us?
              </span>
              <select id="abt" class="user-login__input user-login__input" required="required" > 
                <option value="">None
                </option>	
                <option value="1">Events
                </option>
                <option value="2">Advert
                </option>
                <option value="3">Friend
                </option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <input type="submit" class="user-login__action" value="Finish my application">
        </div>
      </div>
    </form>
    <div class="min-space">
    </div>
  </section>
  <?php include("../footer.php") ?>
  <script src="../js/jquery-1.9.1.js">
  </script>
  <script src="../js/jquery-ui.js">
  </script>
  <link rel="stylesheet" href="../css/jquery-ui.css">
  <script>
    $(function(){
      $( "#datepicker" ).datepicker({
        dateFormat: 'dd-mm-yy'}
                                   );
    }
     );
  </script>
</body>
</html>
