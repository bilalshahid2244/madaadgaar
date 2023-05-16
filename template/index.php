<?php require_once("../template/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("header.php") ?>
<div id="about"  class="about">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <div class="about_img">
                           <figure><img src="images/about_img.jpg" alt="#"/></figure>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="titlepage">
                           <h2>About <span class="blu">us</span></h2>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                           <a class="read_more">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end about -->
            <!-- classified  section -->
            <div class="classified ">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                           <h2>ONE OF THE BEST <span class="blu"> classified</span></h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                              <div class="classified_box">
                                 <span>0<strong class="blu2">1</strong>.</span>
                              </div>
                           </div>
                           <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                              <div class="classified_box">
                                 <div class="fornt">
                                    <h3> FRONT END MULTICURRENCY</h3>
                                    <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                 <div class="classified_box">
                                    <span>0<strong class="blu2">2</strong>.</span>
                                 </div>
                              </div>
                              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                 <div class="classified_box">
                                    <div class="fornt">
                                       <h3>MOST INTELLIGENT SEARCH SYSTEM</h3>
                                       <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                 <div class="classified_box">
                                    <span>0<strong class="blu2">3</strong>.</span>
                                 </div>
                              </div>
                              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                 <div class="classified_box">
                                    <div class="fornt">
                                       <h3>MOST INTELLIGENT SEARCH SYSTEM</h3>
                                       <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end classified  section -->
            <!-- review -->
            <div id="review" class="review">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="titlepage">
                           <h2>Our client <span class="blu"> review</span></h2>
                           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it</p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <div id="myCarousel" class="carousel slide review_Carousel " data-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                           </ol>
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="container">
                                    <div class="carousel-caption ">
                                       <div class="row">
                                       <?php 
                                          $fetch = "SELECT * FROM `tbl_helper`";
                                          $run = mysqli_query($conn,$fetch);
                                          $check = mysqli_num_rows($run);

                                          if($check > 0){
                                             while($i = mysqli_fetch_array($run)){?>

                                                <div class="col-md-12 margin_boot">
                                                <div class="test_box">
                                                   <i><img src="images/te1.png" alt="#"/></i>
                                                   <h4><?php echo $i[1];?></h4>
                                                   <span><?php echo $i[2];?></span>
                                                   <h4><?php echo $i[3];?></h4>
                                                </div>
                                             </div>
                                       <?php      }

                                          } else{
                                             echo"NOTHING";
                                          }
                                          
                                          ?>
                                         
                                       </div>
                                    </div>
                                 </div>
                              </div>
                            
                           </div>
                           <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end review -->
            <?php include("footer.php") ?>
         </div>
    
</body>
</html>