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
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <body>
      <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit" id="submit">Search</button>
                  </form>
                </div>
            </nav>


</header> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     
<script>
$(document).ready(function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.ajax({
        type:'POST',
        url:'getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
                $("#loc").html(msg);
               alert(msg);
               
               
            }else{
                $("#location").html('Not Available');
            }
        }
    });
    
    return msg;
    
}
</script>
      
                <p id="loc"></p>
      
              
    <script>
var str = $( "p:first" ).text();
alert(srt);
</script>     
      
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
                <a href="#" class="list-group-item active step-1-menu" data-for=".step-1">
                    <h4 class="list-group-item-heading">Location</h4><h4>To </h4>
                    <p class="list-group-item-text" ></p>
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
                <a  id="location" href=""></a> 
              
                
            </div>
          </div>
          <div class="col-md-8">

              <form id="myForm" method="post">
            <input id="origin-input" class="controls" type="text"
                   placeholder="Enter an origin location" name="location_from" id="location_from">

    <input id="destination-input" class="controls" type="text"
        placeholder="Enter a destination location" name="location_to">
   
     


   <div id="mode-selector" class="controls">
    
      <!-- <input type="radio" name="type" id="changemode-walking" checked="checked">
      <label for="changemode-walking">Walking</label>      -->
      <input type="radio" name="type" id="changemode-driving" checked="checked">
      <label for="changemode-driving">Driving</label>      
    </div>
    
      <input  type="button" id="origin-input" class="controls" value="Submit" name="submit">
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

       // this.setupClickListener('changemode-walking', 'WALKING');
        
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