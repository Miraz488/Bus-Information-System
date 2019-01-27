<?php 

class Bus{

	public $db;

public function __construct(){

	$con= new mysqli('localhost','root','','map');
	$this->db=$con;

	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	
}
public function searchBus($start,$end){
    $query="SELECT DISTINCT  bus.id,bus.bus_name as name,bus.type,cost.cost  FROM `bus` ,cost where cost.bus_id=bus.id and cost.start='$start' AND cost.end='$end'";
    $result=mysqli_query($this->db,$query);
		return $result;
	
}


public function searchBusId($id){
     $query="SELECT bus.id,bus.bus_name as name,bus.image as image ,bus.type,cost.cost,cost.start,cost.end  FROM `bus` ,cost where cost.bus_id=bus.id and bus.id='$id';";
    $result=mysqli_query($this->db,$query);
		return $result;
	
}

public function searchBusLocation($id,$start,$end){
   $query="SELECT bus.id,bus.bus_name as name,bus.image as image ,bus.type,cost.cost,cost.start,cost.end FROM `bus` ,cost where cost.bus_id=bus.id and bus.id='35 ' AND cost.start='$start' and cost.end='$end' ";
    $result=mysqli_query($this->db,$query);
		return $result;
	
}

public function stopageList($id)
 {
     $query="SELECT * FROM stopage WHERE bus_id='$id'";
     $result=mysqli_query($this->db,$query);
		return $result;	
}

public function GetStopageList($location){
      //echo $query="SELECT * FROM stopage WHERE name LIKE '%$location%'";
        $query="SELECT * FROM stopage WHERE name='$location' or name like '%Rupnogor%'";
    $result=mysqli_query($this->db,$query);
		return $result;
	
}


public function GetStopageEnd($end,$busId){
      //echo $query="SELECT * FROM stopage WHERE name LIKE '%$location%'";
     $query="SELECT * FROM stopage WHERE name='$end' AND bus_id='$busId' ";        
        
        $result=mysqli_query($this->db,$query);
		return $result;
	
}

public function GetStopageStart($start,$busId){
    
     $query="SELECT * FROM stopage WHERE name='$start' AND bus_id='$busId' ";
        $result=mysqli_query($this->db,$query);
		return $result;
	
}


public function GetStopage($start,$end){
      //echo $query="SELECT * FROM stopage WHERE name LIKE '%$location%'";
     $query="select * from stopage where (id BETWEEN '$start' AND '$end')  ";
        
        
        $result=mysqli_query($this->db,$query);
		return $result;
	
}


} ?>