<?php 
	
	class DB
	{
		public $__connect;

		public function __construct()
		{

			$this->__connect = mysqli_connect('localhost','root','');
			if(!$this->__connect) die('connect is fail');
			mysqli_select_db($this->__connect,'udemy');
			mysqli_query($this->__connect,"SET NAMES 'utf8' ") ;

		}

		public function createSQL($data)	// detachment data to col , and value
		{
			$field_list = $value_list = '';
		
			foreach($data as $key=>$value){
				$field_list .=",$key";
				$value_list .=", '$value' ";

			}
			$field_list = trim($field_list,',');
			$value_list = trim($value_list,',');


			$list =[
				'field_list' => $field_list,
				'value_list' => $value_list
			];
			return $list;
		}

		public function insertDB($table_name,$data){
			$list = $this->createSQL($data);

			$query = "INSERT $table_name ( ".$list['field_list'].") VALUES (".$list['value_list'].")";
			mysqli_query($this->__connect,$query);

			
			return mysqli_insert_id($this->__connect); // check inserted?
		}

		public function updateDB($table,$data,$where)
		{

			// UPDATE customer SET name='kha',phone='019111' where ...;
			$sql = '';
			foreach($data as $key=>$value)
			{
				$sql .= ",$key = '".mysqli_escape_string($this->__connect,$value)."'  ";
			}
			$sql = trim($sql,','); // reject , 

			$up = "UPDATE $table SET ".$sql.' WHERE '.$where;
			
			return mysqli_query($this->__connect,$up);

		}

		public function __destruct(){
			mysqli_close($this->__connect);
		}

		public function fetch_All($table_name)
		{
			
			$query = mysqli_query($this->__connect,"SELECT * FROM $table_name");

			while($row = mysqli_fetch_assoc($query)){
				$result[] = $row; 
			}
			return $result;
		}

		public function fetch_All_condition($table,$where){
			$sql = "SELECT * FROM $table WHERE $where";
			$query = mysqli_query($this->__connect,$sql);
			while($row = mysqli_fetch_assoc($query)){
				$result[] = $row;
			}
			return $result;
		}

		public function fetchById($table,$id)
		{
			$query = mysqli_query($this->__connect,"SELECT * FROM $table WHERE id=$id");
			return mysqli_fetch_assoc($query);
		}


		public function fetch_One($table,$query)
		{
			$sql = "SELECT * FROM $table WHERE ";
			
			$sql.=$query;
			$sql.=" ORDER BY created_at DESC ";
			$sql.=" LIMIT 1";
			
			$result = mysqli_query($this->__connect,$sql);
			return mysqli_fetch_assoc($result);
		}

	

		public function fetch_Col($table,$col,$qr)
		{
			$sql = "SELECT DISTINCT $col FROM $table WHERE ";
			
			$sql.=$qr;
			
			
			$query = mysqli_query($this->__connect,$sql);
		
			while($row = mysqli_fetch_assoc($query)){
				$result[] = $row; 
			}
			return $result;

			
		}

		public function deleteById($table,$id)
		{
			$sql = "DELETE FROM $table WHERE id = $id";
			$query = mysqli_query($this->__connect,$sql);
			
			return mysqli_affected_rows($this->__connect);

		}
	}

	
?>