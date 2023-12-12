<?php
class User {	
   
	private $userTable = 'cms_user';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function login(){
		if($this->email && $this->password) {
			$sqlQuery = "
				SELECT * FROM ".$this->userTable." 
				WHERE email = ? AND password = ?";			
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("ss", $this->email, md5($this->password));	
			$stmt->execute();
			$result = $stmt->get_result();
			if($result->num_rows > 0){
				$user = $result->fetch_assoc();
				$_SESSION["userid"] = $user['id'];
				$_SESSION["user_type"] = $user['type'];
				$_SESSION["name"] = $user['first_name']." ".$user['last_name'];					
				return 1;		
			} else {
				return 0;		
			}			
		} else {
			return 0;
		}
	}
	
	public function loggedIn (){
		if(!empty($_SESSION["userid"])) {
			return 1;
		} else {
			return 0;
		}
	}
	
	public function totalUser(){		
		$sqlQuery = "SELECT * FROM ".$this->userTable;			
		$stmt = $this->conn->prepare($sqlQuery);			
		$stmt->execute();
		$result = $stmt->get_result();
		return $result->num_rows;	
	}	

	public function getUsersListing(){		
		
		$whereQuery = '';
		if($_SESSION['user_type'] == 2) {
			$whereQuery = "WHERE id ='".$_SESSION['userid']."'";
		}		
		
		$sqlQuery = "
			SELECT id, first_name, last_name, email, type, deleted
			FROM ".$this->userTable."  
			$whereQuery ";
		
		if(!empty($_POST["search"]["value"])){
			$sqlQuery .= ' first_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR last_name LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR email LIKE "%'.$_POST["search"]["value"].'%" ';
			$sqlQuery .= ' OR type LIKE "%'.$_POST["search"]["value"].'%" ';			
		}
		if(!empty($_POST["order"])){
			$sqlQuery .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
		} else {
			$sqlQuery .= 'ORDER BY id DESC ';
		}
		if($_POST["length"] != -1){
			$sqlQuery .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
		}

		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		$result = $stmt->get_result();	
		
		$stmtTotal = $this->conn->prepare("SELECT * FROM ".$this->userTable);
		$stmtTotal->execute();
		$allResult = $stmtTotal->get_result();
		$allRecords = $allResult->num_rows;
		
		
		$displayRecords = $result->num_rows;
		$users = array();		
		while ($user = $result->fetch_assoc()) { 				
			$rows = array();	
			$status = '';
			if($user['deleted'])	{
				$status = '<span class="label label-danger">Inactive</span>';
			} else {
				$status = '<span class="label label-success">Active</span>';
			}
			
			$type = '';
			if($user['type'] == 1){
				$type = '<span class="label label-danger">Admin</span>';
			} else if($user['type'] == 2){
				$type = '<span class="label label-warning">Author</span>';
			}
			
			$rows[] = ucfirst($user['first_name'])." ".$user['last_name'];
			$rows[] = $user['email'];
			$rows[] = $type;			
			$rows[] = $status;				
			$rows[] = '<a href="add_users.php?id='.$user["id"].'" class="btn btn-warning btn-xs update">Edit</a>';
			$rows[] = '<button type="button" name="delete" id="'.$user["id"].'" class="btn btn-danger btn-xs delete" >Delete</button>';
			$users[] = $rows;
		}
		
		$output = array(
			"draw"	=>	intval($_POST["draw"]),			
			"iTotalRecords"	=> 	$displayRecords,
			"iTotalDisplayRecords"	=>  $allRecords,
			"data"	=> 	$users
		);
		
		echo json_encode($output);	
	}
	
	public function getUser(){		
		if($this->id) {
			$sqlQuery = "
			SELECT id, first_name, last_name, email, type, deleted
			FROM ".$this->userTable." 			
			WHERE id = ? ";
			$stmt = $this->conn->prepare($sqlQuery);
			$stmt->bind_param("i", $this->id);	
			$stmt->execute();
			$result = $stmt->get_result();
			$user = $result->fetch_assoc();
			return $user;
		}		
	}
	
	public function insert(){
		
		if($this->email && $this->password) {

			$stmt = $this->conn->prepare("
				INSERT INTO ".$this->userTable."(`first_name`, `last_name`, `email`, `password`, `type`, `deleted`)
				VALUES(?,?,?,?,?,?)");
		
			$this->first_name = htmlspecialchars(strip_tags($this->first_name));
			$this->last_name = htmlspecialchars(strip_tags($this->last_name));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->password = htmlspecialchars(strip_tags($this->password));
			$this->type = htmlspecialchars(strip_tags($this->type));
			$this->deleted = htmlspecialchars(strip_tags($this->deleted));		
						
			$stmt->bind_param("ssssii", $this->first_name, $this->last_name, $this->email, md5($this->password), $this->type, $this->deleted);
			
			if($stmt->execute()){
				return $stmt->insert_id;
			}		
		}
	}
	
	public function update(){
		
		if($this->id) {			
			$stmt = $this->conn->prepare("
				UPDATE ".$this->userTable." 
				SET first_name= ?, last_name = ?, email = ?, type = ?, deleted= ?
				WHERE id = ?");
	 
			$this->id = htmlspecialchars(strip_tags($this->id));
			$this->first_name = htmlspecialchars(strip_tags($this->first_name));
			$this->last_name = htmlspecialchars(strip_tags($this->last_name));
			$this->email = htmlspecialchars(strip_tags($this->email));
			$this->password = htmlspecialchars(strip_tags($this->password));
			$this->type = htmlspecialchars(strip_tags($this->type));
			$this->deleted = htmlspecialchars(strip_tags($this->deleted));			
			
			$stmt->bind_param("ssssii", $this->first_name, $this->last_name, $this->email, $this->type, $this->deleted, $this->id);
			
			if($stmt->execute()){
				return true;
			}			
		}
		
	}
	
	public function delete(){
		
		if($this->id) {	
		
			$stmt = $this->conn->prepare("
				DELETE FROM ".$this->userTable." 				
				WHERE id = ?");

			$this->id = htmlspecialchars(strip_tags($this->id));

			$stmt->bind_param("i", $this->id);

			if($stmt->execute()){
				return true;
			}
		}
	}

}
?>