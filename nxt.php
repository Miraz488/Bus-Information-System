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
              
              
              <li><a href="">Services</a></li>           
               <li><a href="#">About Us</a>
                <ul class="dropdown">
                  <li><a href="shop-category.html">History</a></li>
                  <li><a href="shop-category-sidebar.html">Vision and Mission</a></li>
                  <li><a href="shop-product-details.html">Statistics</a></li>
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
      <?PHP 
//      if($_SERVER['REQUEST_METHOD']=='POST')
//          {
//          extract($_POST);
//          print_r($_POST);
//      }
//      
      ?>
      


    <div id="main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <div class="list-group wizard-menu">
                <a style="background:#4D90FE;color: white; href="#" class="list-group-item active step-1-menu" data-for=".step-1">
                    <h4 class="list-group-item-heading">Bus</h4><h4>Information </h4>
                    <p style="background:#4D90FE;" class="list-group-item-text"></p>
                </a>
                <!-- <a href="#" class="list-group-item step-2-menu" data-for=".step-2">
                    <h4 class="list-group-item-heading" id="show_dist"></h4>
                    <h4 class="list-group-item-text" id="show_from"></h4>
                </a> -->
                <!-- <a href="#" class="list-group-item step-3-menu" data-for=".step-3">
                    <h4 class="list-group-item-heading"></h4>
                    <p class="list-group-item-text"></p>
                </a> -->
                <!-- <a href="#" class="list-group-item step-3-menu" data-for=".step-3">
                    <h4 class="list-group-item-heading"></h4>
                    <p class="list-group-item-text"></p>
                </a> -->
                <!-- <a href="#" class="list-group-item step-3-menu" data-for=".step-3">
                    <h4 class="list-group-item-heading"></h4>
                    <p class="list-group-item-text"></p>
                </a> --><!-- <a href="#" class="list-group-item step-3-menu" data-for=".step-3">
                    <h4 class="list-group-item-heading"></h4>
                    <p class="list-group-item-text"></p>
                </a> -->
                <a href="sitting.html"><p id="sitting"></p></a> 
                <p id="show"></p>
                
            </div>
          </div>
          <div class="col-md-8">

              <form id="myForm" method="post">
            <input id="origin-input" class="controls" type="text"
        placeholder="Enter an origin location" name="location_from">

    <input id="destination-input" class="controls" type="text"
        placeholder="Enter a destination location" name="location_to">
   
     


   <div id="mode-selector" class="controls col-md-2 " >
    
    <!--   <input type="radio" name="type" id="changemode-walking" >
      <label for="changemode-walking">Walking</label><br>  -->   
      <input type="radio" name="type" id="changemode-driving" checked="checked">
      <label for="changemode-driving">Driving</label>      
    </div>
    
    <input class="btn-submit"  type="button" value="Submit" name="submit" id="submit">

      </form>
    <div id="map"></div>
          </div>
          
        </div>

        
      </div>
     
    </div>

    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: false,
          center: {lat: 23.8103, lng: 90.4125},
          zoom: 13
        });

        new AutocompleteDirectionsHandler(map);
      }

       /**
        * @constructor
       */
      function AutocompleteDirectionsHandler(map) {
        this.map = map;
        this.originPlaceId = null;
        this.destinationPlaceId = null;
        this.travelMode = 'WALKING';
        var originInput = document.getElementById('origin-input');
        var destinationInput = document.getElementById('destination-input');
        var modeSelector = document.getElementById('mode-selector');
       //  var fromInput=document.getElementById('origin-input').value;
       // alert(fromInput);

        this.directionsService = new google.maps.DirectionsService;
        this.directionsDisplay = new google.maps.DirectionsRenderer;
        this.directionsDisplay.setMap(map);

        var originAutocomplete = new google.maps.places.Autocomplete(
            originInput, {placeIdOnly: true});
        var destinationAutocomplete = new google.maps.places.Autocomplete(
            destinationInput, {placeIdOnly: true});

        //this.setupClickListener('changemode-walking', 'WALKING');
        
        this.setupClickListener('changemode-driving', 'DRIVING');

        this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
        this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
        this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
      }

      // Sets a listener on a radio button to change the filter type on Places
      // Autocomplete.
      AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
        var radioButton = document.getElementById(id);
        var me = this;
        radioButton.addEventListener('click', function() {
          me.travelMode = mode;
          me.route();
        });
      };

      AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
        var me = this;
        autocomplete.bindTo('bounds', this.map);
        autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          if (!place.place_id) {
            window.alert("Please select an option from the dropdown list.");
            return;
          }
          if (mode === 'ORIG') {
            me.originPlaceId = place.place_id;
          } else {
            me.destinationPlaceId = place.place_id;
          }
          me.route();
        });

      };

      AutocompleteDirectionsHandler.prototype.route = function() {
        if (!this.originPlaceId || !this.destinationPlaceId) {
          return;
        }
        var me = this;

        this.directionsService.route({
          origin: {'placeId': this.originPlaceId},
          destination: {'placeId': this.destinationPlaceId},
          travelMode: this.travelMode
        }, function(response, status) {
          if (status === 'OK') {
            me.directionsDisplay.setDirections(response);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      };

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaNNPPGjyaZGBk7jeWmPoU139xsKe-GKI&libraries=places&callback=initMap"
        async defer></script>


        <script src="admin/jquery.js" type="text/javascript"></script>

        <script>
function myFunction() {
   // var x = document.forms["myForm"]["origin-input"].value;
   // alert(x);
    var location_from = document.getElementById("origin-input").value;
    var location_to = document.getElementById("destination-input").value;
   
    
     document.getElementById("show_dist").innerHTML = location_from;
     document.getElementById("show_from").innerHTML = location_to;
     
   
}
    
</script>

 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {
        $('form').click('submit', function () {
             var dept = $('#origin-input').val();
             var end = $('#destination-input').val();
//          
           // alert(dept);
           $.post('search_bus.php',{dept:dept,end:end},
        function(data){
             $("#show").html(data);
        });
        });
      });
    </script>
        
       <script>
  

    
</script>  
    
</script>



  </body>

</html>