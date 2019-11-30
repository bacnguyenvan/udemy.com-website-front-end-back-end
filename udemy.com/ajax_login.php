<?php
	
	require_once 'admin/autoload/autoload.php';

	$data=[
		'email' => mysqli_escape_string($db->__connect,inputPost('email')),
		'password' => mysqli_escape_string($db->__connect,inputPost('pass'))
	];

	if($data['email']==''||$data['password']==''){
		echo '0';
	}else if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $data['email'])){
		echo '9';
	}else{

		$check_exist = $db->fetch_One('users',"email = '".$data['email']."' AND password= '".$data['password']."' ");
		
		if($check_exist){ 
			$data=[
				'id_show_home'=>$check_exist['id']
			];
			$db->updateDB('users',$data,"id=".$check_exist['id']);

			echo "1,".$check_exist['name'];

		}else{
			
			echo '2';
			
		}

	}




?>