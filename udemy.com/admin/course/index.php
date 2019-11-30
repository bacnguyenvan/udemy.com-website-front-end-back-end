<?php $page = 'news';
	require_once '../autoload/autoload.php';
	$courses = $db->fetch_All('list_courses');
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
								<h1 class="main-title float-left">Danh sách khóa học</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Trang chủ</li>
									<li class="breadcrumb-item active">khóa học</li>
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
									<span class="pull-right">
										<a href="add.php" class="btn btn-primary">
											<i class="fa fa-user-plus" aria-hidden="true"></i> Thêm khóa học
										</a>
									</span>
									
									<h3 id="bac_test"><i class="fa fa-user"></i> Tổng khóa học:  <?php echo count($courses) ?> </h3>
								</div>
								<!-- end card-header -->
								
								<div class="card-body">
									
									
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th style="width:50px">STT</th>
													<th style="width:100px">Tên khóa học</th>
													<th>Tác giả</th>
													<th>Giá</th>
													<th>Giảm giá</th>
		
													<th  style="width:200px;text-align: center;" >image</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<?php $i=1; foreach($courses as $course)  {?>
												<tr >
													<th><?php echo $i ?> </th>
													<td><?php echo $course['name_course'] ?></td>
													<td><?php echo $course['name_author'] ?></td>
													<td><?php echo $course['price'] ?></td>
													<td><?php echo $course['sale'] ?>%</td>
													
													<td style="text-align: center;height: 120px">
														<span style="text-align: center;"><img  style="max-width:100px; height:auto;" src="../public/uploads/courses/<?php echo $course['image'] ?> " /></span>
														
													</td>
													
													<td style="text-align: center;width: 15%">
														<a id="<?php echo $course['id'] ?>" href="edit.php?id=<?php echo $course['id'] ?>"  class="btn btn-primary btn_edit" title="Edit">
															<i class="fa fa-pencil" ></i>
														</a>

														<a id="<?php echo $course['id'] ?>" href ="" class="btn btn-danger btn_delete" title="Delete"><i class="fa fa-trash-o" ></i>
														</a>
													</td>
													
													
													
													
												</tr>
												<?php $i++; } ?>
												
											</tbody>
										</table>
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
			