<?php 
	session_start();
	require_once __DIR__. DIRECTORY_SEPARATOR.'../libraries/database.php';
	require_once __DIR__. DIRECTORY_SEPARATOR.'../libraries/function.php';
	$db = new DB;
	define('URL_IMG',$_SERVER['DOCUMENT_ROOT']."/udemy.com/admin/public/uploads/");  
	 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
?>