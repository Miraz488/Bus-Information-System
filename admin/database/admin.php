<?php 

class Admin{

public $db;

public function __construct(){

	$con= new mysqli('localhost','root','','map');
	$this->db=$con;

	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	// if ($con) {
	// 	echo "connect..";
	// }
}


		public function admin_login($email,$password){
			$query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
			$result=mysqli_query($this->db,$query);
			return $result;

			}



			//insert bus

		   public function add_bus($name,$type){

			 $query="INSERT INTO bus VALUES(null,'$name','$type','')";
			 $result=mysqli_query($this->db,$query);
					return $result;
				}
                                
                                
         public function add_location($name,$location){

			 $query="INSERT INTO stopage VALUES(null,'$name','$location','','0')";
			 $result=mysqli_query($this->db,$query);
					return $result;
				}
                                
                                
            public function get_bus(){
			 $query="SELECT * FROM bus"; 
			$result=mysqli_query($this->db,$query);
					return $result;
				}
              
              public function get_bus_cost(){
			 $query="SELECT cost.id,cost.start,cost.end,cost.cost,bus.bus_name FROM `cost`,bus WHERE cost.bus_id=bus.id;";
			$result=mysqli_query($this->db,$query);
					return $result;
				}              
                                
         public function get_bus_cost_by_id($id){
			 $query="SELECT cost.id,cost.start,cost.end,cost.cost,bus.bus_name FROM `cost`,bus WHERE cost.bus_id=bus.id and cost.id='1'";
			$result=mysqli_query($this->db,$query);
					return $result;
				}                         
                                
                                
    public function add_bus_cost($name,$start,$end,$cost)
    {
		
		$query="INSERT INTO cost VALUES(null,'$start','$end','$name','$cost')";
		$result=mysqli_query($this->db,$query);
		return $result;
	
	}
        
        public function add_bus_stopage($name,$id)
    {
		
		$query="INSERT INTO stopage VALUES(null,'$id','$name')";
		$result=mysqli_query($this->db,$query);
		return $result;
	
	}
        
        
         public function Update_bus_cost($id,$start,$end,$cost)
    {
		
		$query="UPDATE cost SET start='$start',end='$end',cost='$cost' WHERE id='$id'";
		$result=mysqli_query($this->db,$query);
		return $result;
	
	}

	public function remove_bus_cost($id){
		echo $query="DELETE FROM cost WHERE id='$id'";
		$result=mysqli_query($this->db,$query);
		return $result;
	
	}
        
        
        public function stopageList($id) {
            echo $query="SELECT * FROM stopage WHERE bus_id='$id' ";
		$result=mysqli_query($this->db,$query);
		return $result;
        }
       public function stopageStart()
       {  
          $query="SELECT * FROM stopage ";
    $result=mysqli_query($this->db,$query);
		return $result;
	
}                         


}


 ?>