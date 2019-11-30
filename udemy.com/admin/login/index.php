<?php 
  
  session_start();
  require_once "../libraries/database.php";
  require_once"../libraries/function.php";
   $db = new DB;
  

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $errors = [];

    if(inputPost('email') == ''){
      $errors['email'] = 'Vui lòng nhập email';
    }
    if(inputPost('password') == ''){
      $errors['password'] = 'Vui lòng nhập password';
    }

    if(empty($errors)){

      $data  = [
        'email' => mysqli_escape_string($db->__connect,inputPost('email')),
        'password'=>mysqli_escape_string($db->__connect,inputPost('password')),
      ];

      $is_check = $db->fetch_One('users',"email =  '".$data['email']."' AND level='9' AND password =  '".$data['password']." ' ");
      

      if($is_check){

        $_SESSION['admin_name'] = $is_check['name'];
        
        echo "<script>
        alert('Đăng nhập thành công');
        location.href = '../index.php';


        </script>";

      }else{

        $_SESSION['error'] = '<p>Đăng nhập thất bại</p>';
      }

    }

  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Đăng nhập</title>
    
    <!-- Favicon -->
    

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    
    
    
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" method="POST" action="" >
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control"  placeholder="Nhập email" required autofocus name="email">
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input name="password" type="password" id="inputPassword" class="form-control"  placeholder="Nhập passwork" required>
                <label for="inputPassword">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              </div>
              <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                  <p><?php echo $_SESSION['error'] ; unset($_SESSION['error']) ?></p>
                </div>
              <?php endif ?>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>






  
</body>
</html>