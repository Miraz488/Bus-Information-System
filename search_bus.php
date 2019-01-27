
<?php
include './admin/database/bus.php';
$bus=new Bus();
 $start=$_POST['dept'];
 $end=$_POST['end'];

$busdata=$bus->searchBus($start,$end);
while($row= mysqli_fetch_array($busdata)){
   //echo $row['name'].'<br>';
   ?>
 <a href="bus_details.php?id=<?PHP echo $row['id'] ?> && start=<?PHP echo $start ?> && end=<?PHP echo $end ?> && cost=<?PHP echo $row['cost'] ?>"><p><?PHP echo $row['name']?></p></a>
 <p>Bus Type:<?php echo $row['type'] ?>        Cost: <?php echo $row['cost'] ?>  Tk</p>

 <br>

<?PHP
}
?>