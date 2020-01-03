<?php require_once 'admin/autoload/autoload.php' ?>

<?php 
    
    $courses = $db->fetch_All_condition('list_courses','1 ORDER BY created_at asc');

    $courses_relate = $db->fetch_All_condition('list_courses','1 ORDER BY created_at desc');

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no user-scalable=no">
    <title>udemy</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    
    <!-- font awesome -->
    <link  rel="stylesheet" type="text/css" href="assets/fontawesome-free-5.11.2/css/all.css"/>
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    
</head>

<body>

    <?php require_once "module/header.php" ?>
    
    
    <!-- filter cart -->
    <?php require_once "module/filter_cart.php" ?>
    
    <!-- course relation -->
    <?php require_once "module/course_relate.php" ?>
    

    <!-- message display -->
    <?php require_once "module/message_display.php" ?>
   
    

    <div class="background_fade"></div>

    <!-- model login -->
    <?php require_once "module/model_login.php" ?>

    <!-- model sign up -->
    <?php require_once "module/model_signup.php" ?>

    <!-- Top Categories , Feedback ,footer -->
    
	<?php require_once "module/footer.php" ?>


    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>
