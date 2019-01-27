<?php
//if latitude and longitude are submitted
if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    
    //if request status is successful
    if($status == "OK"){
        //get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    
    
    include './admin/database/bus.php';
    $busObj=new Bus();
    $busData=$busObj->GetStopageList($location);
    echo "Current Location : ".$location.'<br>'." Bus Stopage : ";
    
    while ($busRow= mysqli_fetch_array($busData)){
        echo $busRow['name'].'<br>';
        
       
    }
    //json_encode($busArray);
     $location=$busRow['name'];
    //return address to ajax 
     $location;
    
    
    
    
    
}
?>