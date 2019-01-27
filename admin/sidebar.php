<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="image/<?PHP echo $_SESSION['image']  ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php //echo $_SESSION['name'] ?></p> -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
         
        </li>
        
        <li>
          <a href="add_bus.php">
            <i class="fa fa-th"></i> <span>Add Bus</span>
            <span class="pull-right-container">
           
            </span>
          </a>
        </li>
         <li>
            <a href="add_location.php">
            <i class="fa fa-th"></i> <span>add location</span>
            <span class="pull-right-container">
           
            </span>
          </a>
        </li>

        <li>
          <a href="add_cost.php">
            <i class="fa fa-th"></i> <span>Add cost</span>
            <span class="pull-right-container">
           
            </span>
          </a>
        </li>
        
       
       <li>
          <a href="manage_cost.php">
            <i class="fa fa-th"></i> <span>Manage Bus</span>
            <span class="pull-right-container">
           
            </span>
          </a>
        </li>
      
       
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>