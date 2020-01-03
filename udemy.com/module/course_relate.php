<div class="container-fluid  mb-5">
        <!-- slide -->
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-3">
                        <h4>Khóa học liên quan</h4>
                    </div>
                    
                </div>

                <div class="row sale_bottom">
                    <div class="col-md-12">
                        <!-- slide cart -->
    
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
                            <div class="carousel-inner">
                                <?php
                                    $countItems =(!empty($courses_relate)?count($courses_relate):0);
                                ?>
                                <?php for($i=0;$i<$countItems/5;$i++){ 
                                        if($i==0):

                                    ?>
                                
                                        <div class="carousel-item active">
                                            <div class="row sale_bottom">
                                                <?php for($j=0;$j<5;$j++){ $a=$j + 5*$i; if($a>=$countItems)break; ?>
                                                <div class="cart">
                                                    <div class="card">
                                                        <a value="<?php echo $courses_relate[$a]['name_course'] ?>" href="#" data-toggle="popover" data-placement="right" 
                                                        >
                                                            <?php if($courses[$a]['sale']!=0): ?>
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
                                                                    <?php if($courses[$a]['sale']==0): ?>
                                                                        
                                                                    <span><?php echo $courses[$a]['price'] ?>$ </span>
                                                                    <?php else: ?>
                                                                        <strike><?php echo $courses[$a]['price']   ?>$</strike>
                                                                        <span><?php echo $courses[$a]['price']*(100-$courses[$a]['sale'])/100 ?> </span>
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
                                                <?php for($j=0;$j<5;$j++){ $a=$j + 5*$i;if($a>=$countItems)break; ?>
                                                <div class="cart">
                                                    <div class="card">
                                                        <a value="<?php echo $courses_relate[$a]['name_course'] ?>" href="#" data-toggle="popover" data-placement="right" 
                                                        >
                                                            <?php if($courses[$a]['sale']!=0): ?>
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
                                                                    <?php if($courses[$a]['sale']==0): ?>
                                                                        
                                                                    <span><?php echo $courses[$a]['price'] ?>$ </span>
                                                                    <?php else: ?>
                                                                        <strike><?php echo $courses[$a]['price']   ?>$</strike>
                                                                        <span><?php echo $courses[$a]['price']*(100-$courses[$a]['sale'])/100 ?> </span>
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
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" id="next">
                                <span><i class="fa fa-chevron-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <!--  -->
    </div>