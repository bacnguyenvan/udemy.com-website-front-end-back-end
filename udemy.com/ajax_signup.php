<?php 
	
	require_once 'admin/autoload/autoload.php';

	$data =[
		'name' => mysqli_escape_string($db->__connect,inputPost('fullname')),
		'email' => inputPost('email'),
		'password' => mysqli_escape_string($db->__connect,inputPost('pass'))
	];

	if($data['name']==''||$data['email']==''||$data['password']==''){
		echo '0';
	}else if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $data['email'])){
		echo '9';
	}else{

		$check_email_exist = $db->fetch_One('users',"email = '".$data['email']."' ");
		
		if($check_email_exist){ 
			echo '1';
		}else{
			if($db->insertDB('users',$data)){
				echo '2';
			}else{
				echo '3';
			}
		}

	}

	

	
	




?>