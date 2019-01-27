<?php 

class USer{

	public $db;

public function __construct(){

	$con= new mysqli('localhost','root','','map');
	$this->db=$con;

	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
}
public function Login($email,$password){
    $query="SELECT * from user_login WHERE email='$email' AND password='$password' ";
    $result=mysqli_query($this->db,$query);
		return $result;
	
}

public function registration($name,$email,$password){
    $query="INSERT INTO user_login VALUES('','$name','$email','$password')";
    $result=mysqli_query($this->db,$query);
		return $result;
	
}




}