<?php $page = 'news';
	require_once '../autoload/autoload.php';

	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$data = [
		'loai_course' => inputPost('the_loai'),
		'name_course' => mysqli_escape_string($db->__connect,inputPost('name_course')),
		'name_author'  => mysqli_escape_string($db->__connect,inputPost('name_author')),
		'number_star' => inputPost('number_star'),
		'price' => inputPost('price'),
		'sale' => inputPost('sale')
		];
		$errors = [];

		if($_FILES['image']['name']){
			
			$file_name = $_FILES['image']['name'];
			$file_tmp  = $_FILES['image']['tmp_name'];
			$file_ext  = explode('.',$file_name);
			$file_ext = end($file_ext);

			$expensions = ['png','jpg','jpeg'];
			

			if(!in_array($file_ext,$expensions)){
				$errors['image'] = 'Vui lòng import hình có định dạng jpg,png,jpeg';
			}else{
				$part = URL_IMG.'courses/';
				$data['image'] = $file_name;
			} 

		}else{
			$errors['image'] = 'Vui lòng import hình';
		}


		if(empty($errors)){
			$insert_db = $db->insertDB('list_courses',$data);
			if(!$insert_db){
				$_SESSION['error'] = 'Thêm khoá học không thành công';
				redirect('course');
			}else{
				move_uploaded_file($file_tmp, $part.$file_name);
				
				$_SESSION['success'] = 'Thêm khóa học thành công';
				redirect('course');
			}

		}



	}
	

 ?>


<?php require_once '../interface/header.php' ?>

		<!-- content -->
		<div class="content-page">
			
			<!-- Start content -->
			<div class="content">
				
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Thêm khóa học</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Trang chủ</li>
									<li class="breadcrumb-item">khóa học</li>
									<li class="breadcrumb-item active">thêm</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->
					
					<?php if(isset($_SESSION['success']))  {?>
						<div class="alert alert-success">
							<?php echo $_SESSION['success']; unset($_SESSION['success'])  ?>  
					     </div>
					<?php } ?>
					<?php if(isset($_SESSION['error']))  {?>
						<div class="alert alert-danger">
							<?php echo $_SESSION['error']; unset($_SESSION['error']) ?> 
					     </div>
					<?php } ?>
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							
							<div class="card mb-3">
								
								<div class="card-header">
									
									
									
								</div>
								<!-- end card-header -->
								
								<div class="card-body">
									
									 <div class="row form-add" style="margin-left: 15%;margin-right: 15%;width:70%">
					                    <div class="col-md-12">
					                        
					                        <form action="" method="POST" enctype="multipart/form-data">
					                        	<div class="form-group row">
											    	<label for="inputEmail3" class="col-sm-2 col-form-label">Thế loại</label>
												    <div class="col-sm-10">
												      	<select class="form-control" name="the_loai" required="">
												      		<option value="">---- Chọn thể loại ----</option>
												      		<option value="1">Arduino</option>
												      		<option value="2">ARM</option>
												      		<option value="3">Lập trình C/C++</option>
												      		<option value="4">Loại khác</option>
												      	</select>
												      
												    </div>
												</div>

												<div class="form-group row">
											    	<label for="inputEmail3" class="col-sm-2 col-form-label">Tên khóa học</label>
												    <div class="col-sm-10">
												      <input type="text" class="form-control" placeholder="Nhập tên khóa học" name='name_course' required="">
												      
												      
												    </div>
												</div>

												<div class="form-group row">
											    	<label for="inputEmail3" class="col-sm-2 col-form-label">Tác giả</label>
												    <div class="col-sm-10">
												      <input type="text" class="form-control" placeholder="Nhập tên tác giả" name='name_author' required="">
												      
												      
												    </div>
												</div>
												
											

												<div class="form-group row">
											    	<label class="col-sm-2 col-form-label">Hình ảnh khóa học</label>
												    <div class="col-sm-10">
												      <input type="file" name='image' class="form-control" required="">
												      
												      
												    </div>
												</div>

												<div class="form-group row">
											    	<label for="inputEmail3" class="col-sm-2 col-form-label">Đánh giá</label>
												    <div class="col-sm-10">
												      	<select class="form-control" name="number_star" required="">
												      		<option value="5">5 sao</option>
												      		<option value="4">4 sao</option>
												      		<option value="3">3 sao</option>
												      		<option value="2">2 sao</option>
												      		<option value="1">1 sao</option>
												      	</select>
												      
												    </div>
												</div>
												
												<div class="form-group row">
											    	<label for="inputEmail3" class="col-sm-2 col-form-label">Giá khóa học</label>
												    <div class="col-sm-10">
												      <input type="number" min="0" class="form-control" placeholder="Nhập giá" name='price' required="">
												      
												      
												    </div>
												</div>

												<div class="form-group row">
											    	<label for="inputEmail3" class="col-sm-2 col-form-label">Giảm giá</label>
												    <div class="col-sm-10">
												      <input type="number" min="0" class="form-control" placeholder="Nhập giảm giá %" name='sale' required="">
												      
												      
												    </div>
												</div>


												
												
												<?php if(!empty($errors)) {  ?>
													<div class="alert alert-danger">
													<?php foreach($errors as $err){	 ?>
														
															<li> <?php echo $err ?> </li> 
														<?php } ?>
													</div>


													<?php } ?>
											  
											    <div class="form-group row">
												    <div class="col-sm-12">
												      <button type="submit" class="btn btn-primary submit-form pull-right">Lưu</button>
												    </div>
											    </div>
											</form>
					                    </div>
					                    
					                </div>
									
									
								</div>
								<!-- end card-body -->
								
							</div>
							<!-- end card -->
						</div>
						<!-- end col -->
						
					</div>
					<!-- end row -->
				</div>
				<!-- END container-fluid -->
			</div>
			<!-- END content -->
		</div>
		<!-- END content-page -->
<?php require_once '../interface/footer.php' ?>		
			