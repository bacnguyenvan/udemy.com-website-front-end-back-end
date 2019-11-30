<?php require_once 'admin/autoload/autoload.php' ?>

<?php 
    
    $value = inputGet('value');
   
    

    $courses_relate = $db->fetch_All_condition('list_courses'," loai_course=$value ORDER BY created_at desc");

    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>udemy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    
    <!-- font awesome -->
    <link  rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.11.2/css/all.css"/>

    <link rel="stylesheet" href="assets/css/styles.css">

    
</head>

<body>
    <div class="container-fluid clock_nguoc">
        <span class="delete_time pull-right pr-2 pt-2"><i class="fa fa-times"></i></span>
        <p>Limited-Time Discount| Enroll today and learn risk-free with our 30-day money-back guarantee.</p>
        <span>Ends in <span id="clock_count"></span></span>
    </div>
    <div >
        <nav class="navbar navbar-expand-md bg-light navigation-clean-button">
            <div class="container-fluid"><a class="navbar-brand" href="index.php"><img src="assets/img/logo1.png"> </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav menu_main">
                        <li class="nav-item menu_dropdown" role="presentation" style="padding-bottom: 25px;">
                            <a class="nav-link active" href="#"><i class="fa fa-th"></i>  Categories </a>
                            <ul class="menu_dropdown_content">
                                <li class="menu_dropdown_content_child">
                                    <a href="#">
                                        <i class="fas fa-file-code"></i>&nbsp;&nbsp;
                                        Development
                                        <i class="fa fa-angle-right"></i>
                                    </a>

                                    <ul class="menu_dropdown_content_child_content">

                                        <li>
                                            <a href="#">All Development</a>
                                        </li>

                                        <li class="menu_dropdown_content_child_child">
                                            <a href="#">  
                                                Web Development
                                                <i class="fa fa-angle-right"></i>
                                            </a>

                                            <ul class="menu_dropdown_content_child_child_content">
                                                <li>
                                                    <a style="font-weight: bold" href="">Popular Topics</a>
                                                </li>
                                                <li>
                                                    <a href="">All Network & Security</a>
                                                </li>
                                                <li>
                                                    <a href="load-course.php?value=1">Arduino</a>
                                                </li>
                                                <li>
                                                    <a href="load-course.php?value=2">Arm</a>
                                                </li>
                                                <li>
                                                    <a href="load-course.php?value=3">Lập trình C/C++</a>
                                                </li>
                                                <li>
                                                    <a href="load-course.php?value=4">IT helpdesk</a>
                                                </li>
                                            </ul>

                                       

                                        </li>

                                        <li>
                                            <a href="#">  
                                                Data Science
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Mobile Apps
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Programming Languges
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Databases
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Software Testing
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>    
                                    </ul>

                                </li>
                                <li class="menu_dropdown_content_child">
                                    <a href="#">
                                        <i class="fas fa-chart-bar"></i>&nbsp;&nbsp;
                                        Business
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="menu_dropdown_content_child_content">

                                        <li>
                                            <a href="#">All Business</a>
                                        </li>

                                       
                                        <li>
                                            <a href="#">  
                                                Data Science
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Mobile Apps
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Programming Languges
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Databases
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Software Testing
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>    
                                    </ul>
                                </li>
                                <li class="menu_dropdown_content_child">
                                    <a href="#">
                                        <i class="fas fa-laptop-code"></i>&nbsp;&nbsp;
                                        IT & Software
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="menu_dropdown_content_child_content">

                                        <li>
                                            <a href="#">All IT & Software</a>
                                        </li>

                                        <li>
                                            <a href="#">  
                                                Web Development
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Data Science
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Mobile Apps
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Programming Languges
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Databases
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Software Testing
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>    
                                    </ul>
                                </li>
                                <li class="menu_dropdown_content_child">
                                    <a href="#">
                                        <i class="fas fa-pencil-ruler"></i>&nbsp;&nbsp;
                                        Personal Development
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="menu_dropdown_content_child_content">

                                        <li>
                                            <a href="#">All Personal Development</a>
                                        </li>

                                        <li>
                                            <a href="#">  
                                                Web Development
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Data Science
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Mobile Apps
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Programming Languges
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Databases
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Software Testing
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>    
                                    </ul>
                                </li>
                                
                                <li class="menu_dropdown_content_child">
                                    <a href="#">
                                        <i class="fas fa-bullseye"></i>&nbsp;&nbsp;
                                        Marketing
                                        <i class="fa fa-angle-right"></i>

                                    </a>
                                    <ul class="menu_dropdown_content_child_content">

                                        <li>
                                            <a href="#">All Marketing</a>
                                        </li>

                                        <li>
                                            <a href="#">  
                                                Web Development
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Data Science
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Mobile Apps
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Programming Languges
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Databases
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Software Testing
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>    
                                    </ul>
                                </li>
                                <li class="menu_dropdown_content_child">
                                    <a href="#">
                                        <i class="fas fa-music"></i>&nbsp;&nbsp;
                                        Music
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="menu_dropdown_content_child_content">

                                        <li>
                                            <a href="#">All Music</a>
                                        </li>

                                        <li>
                                            <a href="#">  
                                                Web Development
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Data Science
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Mobile Apps
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Programming Languges
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Databases
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Software Testing
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>    
                                    </ul>
                                </li>
                                <li class="menu_dropdown_content_child">
                                    <a href="#">
                                        <i class="fas fa-pencil-ruler"></i>&nbsp;&nbsp;
                                        Design
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="menu_dropdown_content_child_content">

                                        <li>
                                            <a href="#">All Design</a>
                                        </li>

                                        <li>
                                            <a href="#">  
                                                Web Development
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Data Science
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Mobile Apps
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Programming Languges
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Databases
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Software Testing
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>    
                                    </ul>
                                </li>
                                
                                <li class="menu_dropdown_content_child">
                                    <a href="#">
                                        <i class="fas fa-camera-retro"></i>&nbsp;&nbsp;
                                        Teaching & Academics
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="menu_dropdown_content_child_content">

                                        <li>
                                            <a href="#">All Teaching & Academics</a>
                                        </li>

                                        <li>
                                            <a href="#">  
                                                Web Development
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Data Science
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Mobile Apps
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Programming Languges
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Databases
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">  
                                                Software Testing
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>    
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item search_menu ml-5 mr-5" role="presentation" style="width: 42%">
                            <div class="nav-link search_content" href="#">
                                <input id="search" type="text" placeholder="Search for anything" class="input-text">
                                <i style="cursor: pointer" class="fa fa-search"></i>
                            </div>
                        </li>

                        <li class="nav-item menu_dropdown_2" role="presentation">
                            <a class="nav-link" href="#">Udemy for Bussiness</a>

                            <div class="menu_dropdown_2_content">
                                <p>Get your team access to 3,500+ top Udemy courses anytime, anywhere</p>
                                <a href="#">Try Udemy for Business</a>
                            </div>

                        </li>
                        <li class="nav-item menu_dropdown_2" role="presentation">
                            <a class="nav-link" href="#">Teach on Udemy</a>
                            <div class="menu_dropdown_2_content">
                                <p>Turn what you know into an opportunity and reach millions around the world.</p>
                                <a href="#">Learn more</a>
                            </div>
                        </li>
                        <li class="nav-item menu_dropdown_2 menu_shoping_cart" role="presentation">
                            <a class="nav-link" href="#">
                                <img src="assets/img/cart.png">

                            </a>
                            <div class="menu_dropdown_2_content">
                                <p>Your cart is empty.</p>
                                <a href="#">Keep shopping</a>
                            </div>
                        </li>
                    </ul>
                    <!-- login -->
                    
                    <p class="ml-auto navbar-text">
                         
                        <div class="actions" style="padding: 13px 2px">
                            <a href="#" class="log_in btn btn-default btn_login_form" data-toggle="modal" data-target="#modal_login">Log In </a> 
                            <a class="btn btn-light action-button" data-toggle="modal" data-target="#modal_signup" href="#">Sign Up </a>
                        </div>
                    </p>
                </div>
            </div>
        </nav>
    </div>
   

    <div class="container-fluid  mb-5">
        <!-- slide -->
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-3">
                        <h4>Khóa học giành cho bạn</h4>
                    </div>
                    
                </div>

                <div class="row sale_bottom">
                    <div class="col-md-12">
                        <!-- slide cart -->
    
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                                <?php
                                    $countItems =(!empty($courses_relate)?count($courses_relate):0);

                                    if($countItems<5){
                                        $loop = $countItems;
                                        $countItems=5;
                                    }else $loop=5;

                                ?>
                                <?php for($i=0;$i<$countItems/5;$i++){ 
                                        if($i==0):

                                    ?>
                                
                                        <div class="carousel-item active">
                                            <div class="row sale_bottom">
                                                <?php for($j=0;$j<$loop;$j++){ $a=$j + 5*$i; if($a>=$countItems)break; ?>
                                                <div class="cart">
                                                    <div class="card">
                                                        <a value="<?php echo $courses_relate[$a]['name_course'] ?>" href="#" data-toggle="popover" data-placement="right" 
                                                        >
                                                            <?php if($courses_relate[$a]['sale']!=0): ?>
                                                                <div class="sale_price">BESTSELLER</div>
                                                            <?php endif;?>
                                                            <img class="card-img-top" src="admin/public/uploads/courses/<?php echo $courses_relate[$a]['image']   ?>" alt="Card image cap">
                                                            <div class="card-body">
                                                                
                                                                <h6 class="card-title"><?php echo $courses_relate[$a]['name_course']   ?></h6>
                                                               
                                                                <span style="color: #686f7a; "><?php echo $courses_relate[$a]['name_author']   ?></span>
                                                                <div class="star_icon">
                                                                    <?php for($k=0;$k<5;$k++){
                                                                            if($k<$courses_relate[$a]['number_star']){
                                                                                echo '<span class="fa fa-star checked_star"></span>';
                                                                            }else{
                                                                                echo '<span class="fa fa-star"></span>';
                                                                            }
                                                                            
                                                                        }

                                                                        
                                                                     ?>
                                                                    
                                                                    
                                                                </div>  
                                                                <div class="price">
                                                                    <?php if($courses_relate[$a]['sale']==0): ?>
                                                                        
                                                                    <span><?php echo $courses_relate[$a]['price'] ?>$ </span>
                                                                    <?php else: ?>
                                                                        <strike><?php echo $courses_relate[$a]['price']   ?>$</strike>
                                                                        <span><?php echo $courses_relate[$a]['price']*(100-$courses_relate[$a]['sale'])/100 ?> </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                                
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                

                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="carousel-item">
                                            <div class="row sale_bottom">
                                                <?php for($j=0;$j<$loop;$j++){ $a=$j + 5*$i;if($a>=$countItems)break; ?>
                                                <div class="cart">
                                                    <div class="card">
                                                        <a value="<?php echo $courses_relate[$a]['name_course'] ?>" href="#" data-toggle="popover" data-placement="right" 
                                                        >
                                                            <?php if($courses_relate[$a]['sale']!=0): ?>
                                                                <div class="sale_price">BESTSELLER</div>
                                                            <?php endif;?>
                                                            <img class="card-img-top" src="admin/public/uploads/courses/<?php echo $courses_relate[$a]['image']   ?>" alt="Card image cap">
                                                            <div class="card-body">
                                                                
                                                                <h6 class="card-title"><?php echo $courses_relate[$a]['name_course']   ?></h6>
                                                               
                                                                <span style="color: #686f7a; "><?php echo $courses_relate[$a]['name_author']   ?></span>
                                                                <div class="star_icon">
                                                                    <?php for($k=0;$k<5;$k++){
                                                                            if($k<$courses_relate[$a]['number_star']){
                                                                                echo '<span class="fa fa-star checked_star"></span>';
                                                                            }else{
                                                                                echo '<span class="fa fa-star"></span>';
                                                                            }
                                                                            
                                                                        }

                                                                        
                                                                     ?>
                                                                    
                                                                    
                                                                </div>  
                                                                <div class="price">
                                                                    <?php if($courses_relate[$a]['sale']==0): ?>
                                                                        
                                                                    <span><?php echo $courses_relate[$a]['price'] ?>$ </span>
                                                                    <?php else: ?>
                                                                        <strike><?php echo $courses_relate[$a]['price']   ?>$</strike>
                                                                        <span><?php echo $courses_relate[$a]['price']*(100-$courses_relate[$a]['sale'])/100 ?> </span>
                                                                    <?php endif; ?>
                                                                </div>
                                                                
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                        

                                                <?php }?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                
                                <?php }?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" id="prev">
                                <span ><i class="fa fa-chevron-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <?php if($a>5){ ?>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" id="next">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
            <!--  -->
    </div>

   

    <div class="background_fade"></div>
    <!--  -->
    <!-- model login -->
    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_login">
        <div class="modal-dialog" style="max-width: 400px;">
            <div class="modal-content">
                
                <form id="form_login" action="" method="post" enctype="multipart/form-data">
                    
                    <div class="modal-header">
                        <h5 class="modal-title">Log In to Your Udemy Account!</h5>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group fix_fg" style="background: #1a538a">
                                    <a href="#" class="btn-face m-b-10" style="color: white">
                                        <i class="fab fa-facebook "></i>&nbsp;
                                        Continue with Facebook
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg" style="box-shadow: 0px 2px 2px 0px #ddd;">
                                    <a href="#" class="btn-google m-b-10" style="color: black;">
                                        <img src="images/icons/icon-google.png" alt="GOOGLE" style="    width: 20px;">
                                        Continue with Google
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <input name="email" type="email" placeholder="Email" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-lock"></i></span>
                                    <input name="pass" type="password" placeholder="Password" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="message_login"></div>

                                <button class="btn btn-danger form-control" id="btn_login">Log In</button>
                                
                            </div>
                        </div>
                        
                        <div class="text-center mt-2">
                            
                            <div class="mt-4">
                                <span>Don't have an account? </span>
                                <a href="#" id="not_account" data-toggle="modal" data-target="#modal_signup">Sign up</a>
                            </div>
                        </div>
                    </div>
                    
                    
                   
                </form>
                
            </div>
        </div>
    </div>
    
    <!-- model sign up -->

    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_signup">
        <div class="modal-dialog" style="max-width: 400px;">
            <div class="modal-content">
                
                <form id="form_signup" action="" method="post" enctype="multipart/form-data">
                    
                    <div class="modal-header">
                        <h5 class="modal-title">Sign Up and Start Learning!</h5>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    
                    <div class="modal-body">
                         <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-user"></i></i></span>
                                    <input name="fullname" type="text" placeholder="Full Name" required="" />
                                </div>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <input name="email" type="email" placeholder="Email" required="" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group fix_fg">
                                    <span><i class="fa fa-lock"></i></span>
                                    <input name="pass" type="password" placeholder="Password" required="" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    
                                    <input name="check" type="checkbox" required="" />  Yes! I want to get the most out of Udemy by receiving emails with exclusive deals, personal recommendations and learning tips!
                                    <div id="message_signup"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                
                                <button type="submit" class="btn btn-danger form-control btn_signup">Sign Up</button>
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mt-4 text-center">
                                <small style="font-size: 70%;">By signing up, you agree to our Terms of Use and Privacy Policy.</small>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="modal-footer" style="justify-content: center;">
                            
                        <span>Already have an account? </span>
                        <a id="has_account" href="#" data-toggle="modal" data-target="#modal_login">Log In</a>
                       
                    </div>
                    
                    
                   
                </form>
                
            </div>
        </div>
    </div>
    
    <!-- part 2 -->
    
    <!-- Recommendation -->
    <section id="recommendation" class="recommendation py-3">
        <div class="container-fluid">
            <!-- icon top -->
            <div class="row justify-content-around d-none d-md-flex d-lg-flex">
                <span class="rec-icon text-white">
                    <i class="fab fa-html5 "></i>
                </span>
                <span class="rec-icon text-white">
                    <i class="fab fa-js "></i>
                </span>
                <span class="rec-icon text-white">
                    <i class="fab fa-jsfiddle "></i>
                </span>
                <span class="rec-icon text-white">
                    <i class="fab fa-js-square "></i>
                </span>
                <span class="rec-icon text-white">
                    <i class="fab fa-node-js "></i>
                </span>
            </div>
            <!-- end of icon top -->

            <!-- text middle -->
            <div class="row text-middle my-4">
                <span class="rec-icon text-white d-none d-md-block d-lg-block">
                    <i class="fab fa-css3 "></i>
                </span>
                <div class="text-center recommendation-info">
                    <h4 class="text-white">Get personalized recommendations</h4>
                    <p class="text-white">Answer a few questions for your top picks</p>
                    <button type="button" class="btn btn-danger text-capitalize text-white">get started</button>
                </div>
                <span class="rec-icon text-white d-none d-md-block d-lg-block">
                    <i class="fab fa-php "></i>
                </span>
            </div>
            <!-- end of text middle -->

            <!-- icon bottom -->
            <div class="row justify-content-around d-none d-md-flex d-lg-flex">
                <span class="rec-icon text-white">
                    <i class="fab fa-python "></i>
                    </span>
                    <span class="rec-icon text-white">
                        <i class="fab fa-adobe "></i>
                    </span>
                    <span class="rec-icon text-white">
                        <i class="fas fa-chart-bar "></i>
                    </span>
                    <span class="rec-icon text-white">
                        <i class="fab fa-github "></i>
                    </span>
                    <span class="rec-icon text-white">
                        <i class="fas fa-code-branch "></i>
                    </span>
            </div>
            <!-- end of icon bottom -->
        </div>
    </section>
    <!-- End of Recommendation -->

    <!-- Categories -->
    <section id="categories" class="categories py-5">
        <div class="container">
            <!-- categories title -->
            <div class="row">
                <h3 class="ml-3 text-capitalize">top categories</h3>
            </div>
            <!-- end of categories title -->    
            
            <!-- categories panels -->
            <div class="row">
                <!-- single link panel -->
                <div class="col-11 col-md-4 col-lg-3">
                        <a href="#" class="categories-link ">
                            <div class="categories-content my-2 d-flex align-items-center">
                                <span class="categories-icon mr-3">
                                    <i class="fas fa-file-code"></i>
                                </span>
                                <div class="categories-text text-capitalize">development</div>
                            </div>
                        </a>
                    </div>
                    <!-- end of single link panel -->
                    <!-- single link panel -->
                    <div class="col-11 col-md-4 col-lg-3">
                        <a href="#" class="categories-link">
                            <div class="categories-content my-2 d-flex align-items-center">
                                <span class="categories-icon mr-3">
                                    <i class="fas fa-chart-bar"></i>
                                </span>
                                <div class="categories-text text-capitalize">business</div>
                            </div>
                        </a>
                    </div>
                    <!-- end of single link panel -->
                    <!-- single link panel -->
                    <div class="col-11 col-md-4 col-lg-3">
                        <a href="#" class="categories-link">
                            <div class="categories-content my-2 d-flex align-items-center">
                                <span class="categories-icon mr-3">
                                    <i class="fas fa-laptop-code"></i>
                                </span>
                                <div class="categories-text ">IT and Software</div>
                            </div>
                        </a>
                    </div>
                    <!-- end of single link panel -->
                    <!-- single link panel -->
                    <div class="col-11 col-md-4 col-lg-3">
                        <a href="#" class="categories-link">
                            <div class="categories-content my-2 d-flex align-items-center">
                                <span class="categories-icon mr-3">
                                    <i class="fas fa-pencil-ruler"></i>
                                </span>
                                <div class="categories-text text-capitalize">design</div>
                            </div>
                        </a>
                    </div>
                    <!-- end of single link panel -->
                    <!-- single link panel -->
                    <div class="col-11 col-md-4 col-lg-3">
                        <a href="#" class="categories-link">
                            <div class="categories-content my-2 d-flex align-items-center">
                                <span class="categories-icon mr-3">
                                    <i class="fas fa-bullseye"></i>
                                </span>
                                <div class="categories-text text-capitalize">marketing</div>
                            </div>
                        </a>
                    </div>
                    <!-- end of single link panel -->
                    <!-- single link panel -->
                    <div class="col-11 col-md-4 col-lg-3">
                        <a href="#" class="categories-link">
                            <div class="categories-content my-2 d-flex align-items-center">
                                <span class="categories-icon mr-3">
                                    <i class="fas fa-pencil-ruler"></i>
                                </span>
                                <div class="categories-text text-capitalize">personal development</div>
                            </div>
                        </a>
                    </div>
                    <!-- end of single link panel -->
                    <!-- single link panel -->
                    <div class="col-11 col-md-4 col-lg-3">
                        <a href="#" class="categories-link">
                            <div class="categories-content my-2 d-flex align-items-center">
                                <span class="categories-icon mr-3">
                                    <i class="fas fa-camera-retro"></i>
                                </span>
                                <div class="categories-text text-capitalize">photography</div>
                            </div>
                        </a>
                    </div>
                    <!-- end of single link panel -->
                    <!-- single link panel -->
                    <div class="col-11 col-md-4 col-lg-3">
                        <a href="#" class="categories-link">
                            <div class="categories-content my-2 d-flex align-items-center">
                                <span class="categories-icon mr-3">
                                    <i class="fas fa-music"></i>
                                </span>
                                <div class="categories-text text-capitalize">music</div>
                            </div>
                        </a>
                    </div>
                    <!-- end of single link panel -->
            </div>
            <!-- end of categories panels -->
        </div>
    </section>
    <!-- End of Categories -->

    <!-- Feedback -->
    <!-- slide cart -->
    <div class="container">
        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner" >

                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <img src="assets/img/borivoje.jpg" alt="" class="rounded-circle mr-3">
                                    <h3 class="text-capitalize">zulaika</h3>
                                </div>
                                <div class="card-body card-feedback-body">
                                    <p class="card-text">I work in project management and joined Udemy because I get great courses for less. The instructors are fantastic, interesting, and helpful. I plan to use Udemy for a long time!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <img src="assets/img/zulaika.jpg" alt="" class="rounded-circle mr-3">
                                    <h3 class="text-capitalize">zulaika</h3>
                                </div>
                                <div class="card-body card-feedback-body">
                                    <p class="card-text">I work in project management and joined Udemy because I get great courses for less. The instructors are fantastic, interesting, and helpful. I plan to use Udemy for a long time!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <img src="assets/img/marco.jpg" alt="" class="rounded-circle mr-3">
                                    <h3 class="text-capitalize">marco</h3>
                                </div>
                                <div class="card-body card-feedback-body">
                                    <p class="card-text">My children and I LOVE Udemy! The courses are fantastic and the instructors are so fun and knowledgeable. I only wish we found it sooner.</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <img src="assets/img/zulaika.jpg" alt="" class="rounded-circle mr-3">
                                    <h3 class="text-capitalize">zulaika</h3>
                                </div>
                                <div class="card-body card-feedback-body">
                                    <p class="card-text">I work in project management and joined Udemy because I get great courses for less. The instructors are fantastic, interesting, and helpful. I plan to use Udemy for a long time!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <img src="assets/img/marco.jpg" alt="" class="rounded-circle mr-3">
                                    <h3 class="text-capitalize">marco</h3>
                                </div>
                                <div class="card-body card-feedback-body">
                                    <p class="card-text">My children and I LOVE Udemy! The courses are fantastic and the instructors are so fun and knowledgeable. I only wish we found it sooner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-header d-flex align-items-center">
                                    <img src="assets/img/dipesh.jpg" alt="" class="rounded-circle mr-3">
                                    <h3 class="text-capitalize">zulaika</h3>
                                </div>
                                <div class="card-body card-feedback-body">
                                    <p class="card-text">I work in project management and joined Udemy because I get great courses for less. The instructors are fantastic, interesting, and helpful. I plan to use Udemy for a long time!</p>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>

               

            </div>

            <a class="carousel-control-prev prev_footer" href="#carouselExampleControls2" role="button" data-slide="prev" id="prev" style="left: -20px">
                <span ><i class="fa fa-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next next_footer" href="#carouselExampleControls2" role="button" data-slide="next" id="next">
                <span><i class="fa fa-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--  -->

    



    <!-- End of Feedback -->

    <section id="reviews" class="reviews py-3">
        <div class="container">
            <!-- feedback carousel -->
            
            <!-- end of feedback carousel -->
            <div class="row">
                <div class="col text-center">
                    <p class="partners-text">
                        Trusted by companies of all sizes
                    </p>
                </div>
            </div>
            <!-- partners -->
            <div class="row">
                <a href="#" class="mx-auto">
                    <div class="partners-logo">
                        <!-- single logo item -->
                            <div class="logo-item">
                                <img src="assets/logo/adidas-logo.svg" alt="">
                            </div>
                        <!-- end of single logo item -->
                        <!-- single logo item -->
                            <div class="logo-item">
                                <img src="assets/logo/booking-logo.svg" alt="">
                            </div>
                        <!-- end of single logo item -->
                        <!-- single logo item -->
                            <div class="logo-item">
                                <img src="assets/logo/eventbrite-logo.svg" alt="">
                            </div>
                        <!-- end of single logo item -->
                        <!-- single logo item -->
                            <div class="logo-item">
                                <img src="assets/logo/mercedes-logo.svg" alt="">
                            </div>
                        <!-- end of single logo item -->
                        <!-- single logo item -->
                            <div class="logo-item">
                                <img src="assets/logo/pinterest-logo.svg" alt="">
                            </div>
                        <!-- end of single logo item -->
                        <!-- single logo item -->
                            <div class="logo-item">
                                <img src="assets/logo/volkswagen-logo.svg" alt="">
                            </div>
                        <!-- end of single logo item -->
                    </div>
                </a>
            </div>
            <!-- end of partners -->

            <!-- non student -->
            <div class="row non-student-cta-wrapper">
                <!-- single non-student-cta -->
                <div class="col-lg-6 col-sm-11 mx-auto non-student-cta my-5">
                    <div class="non-student-cta-text">
                        <h3 class="non-student-header text-center">
                            Become an instructor
                        </h3>
                        <div class="non-student-content text-center my-3">
                                Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.
                        </div>
                        <div class="non-student-link text-center">
                            <button class="btn btn-danger text-capitalize">start teaching today</button>
                        </div>
                    </div>
                </div>
                <!-- end of single non-student-cta -->
                <!-- single non-student-cta -->
                <div class="col-lg-6 col-sm-11 mx-auto non-student-cta my-5">
                    <div class="non-student-cta-text">
                        <h3 class="non-student-header text-center">
                            Udemy for Business
                        </h3>
                        <div class="non-student-content text-center my-3">
                                Get unlimited access to 3,500+ of Udemy’s top courses for your team.
                        </div>
                        <div class="non-student-link text-center">
                            <button class="btn btn-danger text-capitalize">get udemy for business</button>
                        </div>
                    </div>
                </div>
                <!-- end of single non-student-cta -->
            </div>
            <!-- end of non student -->
        </div>
    </section>

    <!-- footer -->
    <footer id="footer" class="footer pb-2 pt-4">
        <div class="container">
            <!-- footer about -->
            <div class="row">
                <div class="col-md-9 col-sm-12  hidden-xs hidden-xxs footer-about">
                    <ul class="links">
                        <li class="footer-link">
                            <a href="#" class='font-weight-bold link-text'>
                                Udemy for Business
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class='font-weight-bold link-text'>
                                Teach on Udemy
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class="link-text">
                                Udemyn app
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class="link-text">
                                About us
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class="link-text">
                                Careers
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class="link-text">
                                Blog 
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class="link-text">
                                Help and Support
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class="link-text">
                                Affiliate
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class="link-text">
                                Site map
                            </a>
                        </li>
                        <li class="footer-link">
                            <a href="#" class="link-text">
                                Featured courses
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- select language -->
                <div class="col-md-3 col-sm-4 text-right ">
                    <div class="option_language">
                        <span>
                            <i class="fa fa-globe-asia"></i>
                        </span>
                        <select class="selectpicker" data-width="fit">
                            <option >English</option>
                            <option >Español</option>
                            <option >Vietnamese</option>
                        </select>
                    </div>
                </div>
                <!-- end of select language -->
            </div>
            <!-- end of footer about -->            
        </div>
        <!-- Để cho cái hr nó dai hết màn hình nên phải đặt trong container-fluid -->
        <div class="container-fluid box-container">
            <div class="container mt-3">
                <!-- udemy info -->
            <div class="row udemy-info-footer">
                    <div class="col-sm-6">
                        <a href="#" class="mr-2">
                            <img src="assets/img/logo1.png" width="110" height="32" alt="Udemy">
                        </a>
                        <span class="footer-copyright">Copyright © 2019 Udemy, Inc.</span>
                    </div>
    
                    <div class="col-sm-6 text-right">
                            <ul class="list-inline">
                                <li class="footer-link">
                                    <a href="#" class="link-text">Terms</a>
                                </li>
                                <li class="footer-link">
                                    <a href="#" class="link-text">Privacy Policy and Cookie Policy</a>
                                </li>
                            </ul>
                    </div>
                </div>
                <!-- end of udemy info -->
            </div>
        </div>
    </footer>
    <!-- end of footer -->


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   
    <script type="text/javascript" src="assets/js/script_load.js"></script>
</body>

</html>
