<?php 
	require_once 'admin/autoload/autoload.php';

	$listCheck = [];
    
    for($i=1;$i<=3;$i++){
        if(isset($_POST['check'.$i])){
            array_push($listCheck,$_POST['check'.$i]);
        }
    }
    
    $listCheck_sql = "(".implode(',',$listCheck).")";
    
    if(!empty($listCheck)){
    	$courses = $db->fetch_All_condition('list_courses'," loai_course IN $listCheck_sql ORDER BY loai_course asc");
    }else{
    	$courses = $db->fetch_All_condition('list_courses','1 ORDER BY created_at asc');
    }
    
    
    
?>
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


