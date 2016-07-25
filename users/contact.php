<body class="splash-index">
  <?php include("../header.php") ?>
  <section class="teaser bg-top">
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
    <div class="min-space">
    </div>
    <?php 
$query=mysql_fetch_array(mysql_query("select * from sv_pages where id=5"));
$content=$query['page_content'];
$page_name=$query['page_name'];
?>
    <h1 class="sub-title">
      <?php echo $page_name; ?>
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
    <form class="form-large" action="javascript:contact('add')" accept-charset="UTF-8" method="post">
      <div class="container apply_form">
        <div class="min-space">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <span class="title">Name
            </span>
            <input type="text" value="" required="required" class="user-login__input user-login__input" id="name" >
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <span class="title">Email
            </span>
            <input type="email" value="" required="required" class="user-login__input user-login__input" id="email" >
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <span class="title">Phone No
            </span>
            <input type="text" value="" required="required" class="user-login__input user-login__input" id="pho_no" >
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12">
            <span class="title">Message
            </span>
            <input type="text" value=""  required="required" class="user-login__input user-login__input" id="msg">
          </div>
          <div class="col-lg-12">
            <input type="submit" class="user-login__action" value="Send">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 address_map">
          <?php echo $content; ?>
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
