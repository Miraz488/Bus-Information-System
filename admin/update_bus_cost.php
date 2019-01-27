<?php include('header_inc.php') ?>
  <!-- Left side column. contains the logo and sidebar -->
 <?PHP include('sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
     
      <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Bus Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <?php 

            include('database/admin.php');
            $bus=new Admin();
            $data=$bus->get_bus_cost_by_id($_GET['id']);
            $row= mysqli_fetch_array($data);
            
            
            
            if($_SERVER['REQUEST_METHOD']=='POST'){
                extract($_POST);
                //print_r($_POST);
                $insert=$bus->Update_bus_cost($_GET['id'], $start, $end, $cost);
                
                if($insert){
                    echo "UPDATE Cost Successfully";
                  // header("Location:manage_cost.php");
                }
            }
            

               
             ?>
            <form class="form-horizontal" method="post">
              <div class="box-body">


                  <div class="form-group">
                  <label for="bus_name" class="col-sm-2 control-label">start</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="bus_name" placeholder="name" name="name" value="<?PHP echo $row['bus_name'] ?>" readonly="">
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="bus_name" class="col-sm-2 control-label">start</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="bus_name" placeholder="name" name="start"value="<?PHP echo $row['start'] ?>">
                  </div>
                </div>                  
                  <div class="form-group">
                  <label for="bus_name" class="col-sm-2 control-label">End</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="bus_name" placeholder="name" name="end"value="<?PHP echo $row['end'] ?>">
                  </div>
                </div>
                  
                  <div class="form-group">
                  <label for="bus_name" class="col-sm-2 control-label">Cost</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="bus_name" placeholder="name" name="cost"value="<?PHP echo $row['cost'] ?>">
                  </div>
                </div>      
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" name="submit">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
          
          <!-- /.box -->
        </div>
    </section>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?PHP include('footer.php') ?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
