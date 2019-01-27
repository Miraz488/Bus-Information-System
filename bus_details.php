<!DOCTYPE html>
<html>
<head>
    <title>Place Autocomplete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */


    </style>
    <link href="design/images/fcon.jpg" rel="shortcut icon" type="image/png">
<link href="design/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="design/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="design/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="design/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="design/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="design/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="design/css/animate.css" rel="stylesheet" type="text/css">
<link href="design/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="design/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="design/design/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="design/design/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="design/design/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="design/design/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="design/css/colors/theme-skin-yellow.css" rel="stylesheet" type="text/css">
  </head>
	<title>Local Bus Details</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/table-row.less">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> 
</head>


 <?php 

   include('./admin/database/bus.php');
   $bus=new Bus();
   $bus_id=$_GET['id'];

$startPlace=$_GET['start'];
$endPlace=$_GET['end'];

   $stopage=$bus->stopageList($bus_id);
   $data=$bus->searchBusId($bus_id);
   $row=mysqli_fetch_array($data);


   $data1 = $bus->searchBusLocation($bus_id,$_GET['start'],$_GET['end']);
	$row1=mysqli_fetch_array($data1);
   
   
   
   $stopageStart=$bus->GetStopageStart($startPlace, $bus_id);
   $stopageRow= mysqli_fetch_array($stopageStart);
   
   $stopageEnd=$bus->GetStopageEnd($endPlace, $bus_id);
   $stopageEndRow= mysqli_fetch_array($stopageEnd);
   
   
   
   $stopageTotal=$bus->GetStopage($stopageRow['id'], $stopageEndRow['id']);
   
   
//   while ($stopageTotalRow= mysqli_fetch_array($stopageTotal)){
//       
//       echo $stopageTotalRow['name'].' -> ';
//   }
//   
 ?> 
<body>	
	 
   <header id="header" class="header">
    <div class="header-top bg-theme-colored sm-text-center p-0">
      <div class="container">
        <div class="row">
         
        
        </div>
      </div>
    </div>
   
 <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-lighter" style="z-index: 1000; position: static; top: auto;">
    <div class="container">
          <nav id="menuzord" class="menuzord pull-left flip menuzord-responsive"><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a><a href="javascript:void(0)" class="showhide" style="display: none;"><em></em><em></em><em></em></a>
            <ul class="menuzord-menu menuzord-indented scrollable" style="max-height: 400px;">
              <li class="active"><a href="design/index.php">Home</a>
                
              </li>
              
              
              <li><a href="nxt.php">Services</a></li>           
               <li><a href="#">About Us</a>
                <ul class="dropdown">
                  <li><a href="history.php">History</a></li>
                  <li><a href="m&v.php">Vision and Mission</a></li>
                  <!-- <li><a href="shop-product-details.html">Statistics</a></li> -->
                  <!-- <li><a href="shop-cart.html">Cart</a></li>
                  <li><a href="shop-checkout.html">Checkout</a></li> -->
                </ul>
              </li>
              
              
            <li class="scrollable-fix"></li><li class="scrollable-fix"></li><li class="scrollable-fix"></li><li class="scrollable-fix"></li><li class="scrollable-fix"></li></ul>
            
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off" type="text">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
        </div><div style="display: none; width: 1349px; height: 72px; float: none;"></div>
      </div><div></div><div></div>
    </header>
<section id="vehicle-root">
	<div class="container">
		<div class="row">
			<div col-md-12 col-lg-12>
				<img src="image/<?PHP echo $row['image'] ?>"  height="500px" style="padding-bottom: 30px;" >
	<h1 style="text-align: center;"><?php echo $row['name']; ?></h1>
	<!-- <h4 style="text-align: center;">Strat Location: <?php echo $row['start'] ?></h4>
	<h4 style="text-align: center;">End Location: <?php echo $row['end'] ?></h4> -->

	<div class="box box-poth">
        
    <div class="box-body">
        <div class="row custom_margin">
              
                    </div>
        <div class="row custom_margin">
            <div class="col-md-3">
                <p class="no-margin">Transport type</p>
            </div>
            <div class="col-md-9">
                <h4 class="no-margin">Bus</h4>
            </div>


        </div>
        <div class="row custom_margin">
            <div class="col-md-3">
                <p>Vehicle Name</p>
            </div>
            <div class="col-md-9">
                <h4 class="no-margin"><a ><?php echo $row['name'] ?></a></h4>
            </div>
        </div>

        <div class="row custom_margin">
            
        </div>

        <div class="row custom_margin">
            <div class="col-md-3">
                <p>Departure Place</p>
            </div>
            <div class="col-md-9">
                <h4 class="no-margin"><?php echo $startPlace ?></h4>
            </div>


        </div>
        <div class="row custom_margin">
            <div class="col-md-3">
                <p>End Place</p>
            </div>
            <div class="col-md-9">
                <h4 class="no-margin"><?php echo $endPlace ?></h4>
            </div>


        </div>

        <div class="row custom_margin">
            <div class="col-md-3">
                <!-- <p>Rent</p> -->

            </div>
            <div class="col-xs-4">
                <!-- <h4 class="no-margin">40 Tk.</h4> -->
            </div>
                 
                    </div>


        <div class="row custom_margin">
            <div class="col-md-3">
                <p>Departure Time</p>
            </div>
            <div class="col-md-9">
                <h4 class="no-margin">Consecutively</h4>
            </div>
        </div>

        <div class="row custom_margin">
            <div class="col-md-3">
                <p>Cost</p>
            </div>
            <div class="col-md-9">
                <h4 class="no-margin"><?php echo $_GET['cost'] ?> TK</h4>
            </div>
        </div>

        <div class="row custom_margin ">
            <div class="col-xs-12  " >
                <h4 style="padding-left: 10px;">Stoppages Or Via: <?PHP //echo $stopageTotalRow['name'] ?></h4>
            </div>
            <div class="col-xs-12">
                <div class="box-body no-padding">
                    <div class="table-responsive rubel">
                        <h4><?PHP  while ($stopageTotalRow= mysqli_fetch_array($stopageTotal)){
       
       echo $stopageTotalRow['name'].'<br>';
   }
   ?></h4>
                    </div>
                </div>
            </div>
        </div> 

        
    </div>
    <div class="box-footer">
        

    </div>

				
		</div>
			
		</div>
		
	</div>
</section>


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>