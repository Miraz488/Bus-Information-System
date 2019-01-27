<?php

include ('./database/admin.php');
$bus=new Admin();

	echo $id = $_GET['id'];
 $data=$bus->stopageList($id);


while($row22= mysqli_fetch_array($data)){
	
	 ?>

			<option >
			<?php echo $row22['name'] ?>
			</option>
                        

<?php } 

 
?>

                      