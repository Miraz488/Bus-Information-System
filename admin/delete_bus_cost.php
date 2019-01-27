<?php 
            include('database/admin.php');
            $remove=new Admin();
            echo $_GET['id'];
          $data=$remove->remove_bus_cost($_GET['id']);


            if ($data)
            {
                   header("Location:manage_cost.php");
            }




 ?>