<?php 

	function _debug($val){
		echo '<pre>';
		print_r($val);
		echo '</pre>';
		die();
	}
	function get_url()
	{
		$url = 'http://localhost/udemy.com/admin/';
		return $url;
	}
	function inputGet($str){
		
		return isset($_GET[$str])?$_GET[$str]:'';
	}
	
	function inputPost($str){
		
		return isset($_POST[$str])?$_POST[$str]:'';
	}
	
	
	function redirect($url){
		header("location: ".get_url().$url);
		exit();
	}


?>