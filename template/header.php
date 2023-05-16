<!DOCTYPE html>
<?php 
require_once("config.php");
session_start();
if(!isset( $_SESSION["useremail"])){
    header("location:userlogin.php");

}


?>
<html lang="en">
<head>
  <!-- basic -->
  <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>adpitor</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div class="wrapper">
         <!-- end loader -->
         <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div id="dismiss">
                  <i class="fa fa-arrow-left"></i>
               </div>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="index.php">Home</a>
                  </li>
                  <li>
                     <a href="#about">About</a>
                  </li>
                  <li>
                     <a href="#review">Review</a>
                  </li>
                  <li>
                     <a href="#contact">Conatct</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div id="content">
            <!-- header -->
            <header>
               <!-- header inner -->
               <div class="menu_sitbar">
                  <ul class="menu">
                     <li><button type="button" id="sidebarCollapse">
                        <img src="images/menu_icon.png" alt="#" />
                        </button></a>
                     </li>
                  </ul>
               </div>
               <div class="header_full_banner">
                  <div class="header">
                     <div class="container">
                        <div class="row">
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                              <div class="full">
                                 <div class="center-desk">
                                    <div class="logo">
                                       <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                              <ul class="btn">
                                 <li class="login_btn"><a href="userlogin.php">Login</a></li>
                                 <li><a href="userlogin.php">Sign Up</a></li>
                                 <li><a href="logout.php">logout</a></li>
                                 <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end header inner -->
                  <!-- end header -->
     
    
    
</body>
</html>