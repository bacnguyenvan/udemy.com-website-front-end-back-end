<div class="container course_filter">
        <div class="row" style="height: 100%">
            
            <div class="course_left_filter">
                <h4 style="font-size: 19px">The world’s largest selection of courses</h4>
                <span style="text-align: left;">Choose from over 100,000 online video courses with new additions published every month</span>
                
            </div>

            <div class="course_right_filter">
                <ul class="filter_content">
                    <li class="active_filter"><a href="">All</a></li>
                    <li><a href="" data-id="1" >Lập trình Arduino</a></li>
                    <li><a href="" data-id="2" >Lập trình ARM</a></li>
                    <li><a href="" data-id="3">Lập trình C/C++</a></li>
                    <li><a href="" data-id="4">IT & Software</a></li>
                   

                </ul>

                
                <!-- slide cart -->
                <div id="carouselExampleControls1" class="carousel slide course_right_filter_cart" data-ride="carousel" >
                    <div class="carousel-inner" >
                        
                        <?php
                            $countItems =(!empty($courses)?count($courses):0);

                        ?>

                        <?php for($i=0; $i<$countItems/3; $i++){ 
                            if($i==0):
                        ?>
                                <div class="carousel-item active">
                                    <div class="row">
                                        <?php for($j=0;$j<3;$j++){ $a = $j + 3*$i; if($a>=$countItems) break; ?>

                                        <div class="col-sm-4">
                                            <div class="cart">
                                                <div class="card">
                                                    <a value="<?php echo $courses[$a]['name_course'] ?>" href="#" data-toggle="popover" data-placement="right" 
                                                    >
                                                        <?php if($courses[$a]['sale']!=0): ?>
                                                            <div class="sale_price">BESTSELLER</div>
                                                        <?php endif;?>
                                                        <img class="card-img-top" src="admin/public/uploads/courses/<?php echo $courses[$a]['image']   ?>" alt="Card image cap">
                                                        <div class="card-body">
                                                            
                                                            <h6 class="card-title"><?php echo $courses[$a]['name_course']   ?></h6>
                                                           
                                                            <span style="color: #686f7a; "><?php echo $courses[$a]['name_author']   ?></span>
                                                            <div class="star_icon">
                                                                <?php for($k=0;$k<5;$k++){
                                                                        if($k<$courses[$a]['number_star']){
                                                                            echo '<span class="fa fa-star checked_star"></span>';
                                                                        }else{
                                                                            echo '<span class="fa fa-star"></span>';
                                                                        }
                                                                        
                                                                    }

                                                                    
                                                                 ?>
                                                                
                                                                
                                                            </div>  
                                                            <div class="price">
                                                                <?php if($courses[$a]['sale']==0): ?>
                                                                    
                                                                <span><?php echo $courses[$a]['price'] ?>$ </span>
                                                                <?php else: ?>
                                                                    <strike><?php echo $courses[$a]['price']   ?>$</strike>
                                                                    <span><?php echo $courses[$a]['price']*(100-$courses[$a]['sale'])/100 ?>$ </span>
                                                                <?php endif; ?>
                                                            </div>
                                                            
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php }?>
                                    </div>
                                </div>

                        <?php else:?>
                                <div class="carousel-item">
                                    <div class="row">
                                        <?php for($j=0;$j<3;$j++){ $a = $j + 3*$i; if($a>=$countItems) break;?>

                                        <div class="col-sm-4">
                                            <div class="cart">
                                                <div class="card">
                                                    <a value="<?php echo $courses[$a]['name_course'] ?>" href="#" data-toggle="popover" data-placement="right" 
                                                    >
                                                        <?php if($courses[$a]['sale']!=0): ?>
                                                            <div class="sale_price">BESTSELLER</div>
                                                        <?php endif;?>
                                                        <img class="card-img-top" src="admin/public/uploads/courses/<?php echo $courses[$a]['image']   ?>" alt="Card image cap">
                                                        <div class="card-body">
                                                            
                                                            <h6 class="card-title"><?php echo $courses[$a]['name_course']   ?></h6>
                                                           
                                                            <span style="color: #686f7a; "><?php echo $courses[$a]['name_author']   ?></span>
                                                            <div class="star_icon">
                                                                <?php for($k=0;$k<5;$k++){
                                                                        if($k<$courses[$a]['number_star']){
                                                                            echo '<span class="fa fa-star checked_star"></span>';
                                                                        }else{
                                                                            echo '<span class="fa fa-star"></span>';
                                                                        }
                                                                        
                                                                    }

                                                                    
                                                                 ?>
                                                                
                                                                
                                                            </div>  
                                                            <div class="price">
                                                                <?php if($courses[$a]['sale']==0): ?>
                                                                    
                                                                <span><?php echo $courses[$a]['price'] ?>$ </span>
                                                                <?php else: ?>
                                                                    <strike><?php echo $courses[$a]['price']   ?>$</strike>
                                                                    <span><?php echo $courses[$a]['price']*(100-$courses[$a]['sale'])/100 ?>$ </span>
                                                                <?php endif; ?>
                                                            </div>
                                                            
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php }?>
                                    </div>
                                </div>
                            <?php endif;?>

                        
                        <?php }?>
                        

                      

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev" id="prev" style="left: -20px">
                        <span ><i class="fa fa-chevron-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next" id="next">
                        <span><i class="fa fa-chevron-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
                <!--  -->

            </div>

            

        </div>
        
    </div>