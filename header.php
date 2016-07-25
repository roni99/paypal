<html>
 <?php 
 include("connection.php");
 $res=mysql_fetch_array(mysql_query("select * from sv_admin_login"));        
    $admin_email=mysql_real_escape_string($res['email_id']);
    $site_name=mysql_real_escape_string($res['site_name']);
    $logo=mysql_real_escape_string($res['logo']);    
    $favicon=mysql_real_escape_string($res['favicon']);
    $site_desc=mysql_real_escape_string($res['site_desc']);
    $keyword=mysql_real_escape_string($res['keyword']);
    $site_url=mysql_real_escape_string($res['site_url']);
 ?>
 <title><?php echo $site_name;?></title>
  <link rel="icon" href="admincp/admin-logo/<?php echo $favicon;?>" >
  <head>
    <meta name="description" content="<?php echo $site_desc; ?>">
    <meta name="keywords" content="<?php echo $keyword; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
       <script>
        var nav = responsiveNav('.nav-collapse', { // Selector
        animate: true, // Boolean: Use CSS3 transitions, true or false
        transition: 284, // Integer: Speed of the transition, in milliseconds
        label: 'Menu', // String: Label for the navigation toggle
        insert: 'before', // String: Insert the toggle before or after the navigation
        customToggle: '.nav-toggle'
      });
    </script>
    <script type="text/javascript" src="<?php echo $site_url; ?>/users/validation.js"></script>
    <link rel="stylesheet" href="<?php echo $site_url; ?>/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>/css/style.css" />
    <script src="<?php echo $site_url; ?>/js/responsive-nav.js"></script>
    <link rel="stylesheet" media="screen" href="<?php echo $site_url; ?>/css/index.css" />
    <link rel="stylesheet" media="screen" href="<?php echo $site_url; ?>/css/responsive.css" />
    <script src="<?php echo $site_url; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $site_url; ?>/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo $site_url; ?>/css/bootstrap.min.css" type="text/css">
    </head>
    

    <header class="header-main header-main--light">
        <nav class="site-nav reversed">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top marginBottom-0" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php
                            if($logo=="") { ?>    
                                <a href="<?php echo $site_url; ?>" class="site-logo"><img src="<?php echo $site_url; ?>/admincp/admin-logo/default-logo.png" alt="" ></a>
                            <?php } else {     ?>
                                <a href="<?php echo $site_url; ?>" class="site-logo"><img src="<?php echo $site_url; ?>/admincp/admin-logo/<?php echo $logo;?>"></a>
                            <?php } ?>     
                    </div>
                    
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li><a class="nav__link" href="<?php echo $site_url; ?>/users/howitworks.php">How it Works</a></li>
                            <li><a class="nav__link" href="<?php echo $site_url; ?>/users/pricing.php">Pricing</a></li>
                            <li><span class="link_to_another_page"><a class="nav__link" href="<?php echo $site_url; ?>/users/help.php">Help</a></span></li>
                            <li><span class="link_to_another_page"><a class="nav__link" href="<?php echo $site_url; ?>/users/contact.php">Contact</a></span></li>
                            <?php 
                                @session_start();
                                if(!isset($_SESSION['phone_no'])) { ?>
                                <li><a class="nav__link sign-in" href="<?php echo $site_url; ?>/users/sign_in.php">Sign in</a></li><?php } ?>
                             <li><span class="link_to_another_page"><a class="nav__link nav__link--prominent" href="<?php echo $site_url; ?>/users/order.php">Post Your Order</a></span></li>
                                <?php 
                                    @session_start();
                                    if(isset($_SESSION['phone_no']))
                                    {    
                                        $phone_no=mysql_real_escape_string($_SESSION['phone_no']);            
                                        $query=mysql_fetch_array(mysql_query("select * from sv_user_profile where phone_no='$phone_no'"));
                                ?>
                                 <li class="dropdown dropdown-submenu user_menu"><a href="<?php echo $site_url; ?>/users/dashboard.php" class="dropdown-toggle nav__link" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php echo $query['name'];?> &nbsp; <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $site_url; ?>/users/dashboard.php">Order Details</a></li>
                                    <li><a href="<?php echo $site_url; ?>/users/order.php">Post your Order</a></li>
                                    <li><a href="<?php echo $site_url; ?>/users/edit-profile.php">Edit Profile</a></li>
                                    <li><a href="<?php echo $site_url; ?>/users/change_password.php">Change password</a></li>
                                    <li><a href="<?php echo $site_url; ?>/users/apply.php">Become a Service Provider</a></li>
                                    <li><a href="<?php echo $site_url; ?>/users/logout.php">Sign out</a></li>
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
    </header>            