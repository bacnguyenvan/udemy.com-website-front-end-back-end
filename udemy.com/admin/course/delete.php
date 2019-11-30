<?php 
	require '../autoload/autoload.php';
	
	$id = (int)inputget('id');

	$delete = $db->deleteByID('list_courses',$id);
	if($delete){
		$_SESSION['success'] = 'Xóa khoá học thành công';
		redirect('course');
	}else{
		$_SESSION['error'] = 'Xóa khoá học thất bại';
		redirect('course');
	}


?>