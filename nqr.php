<!DOCTYPE html> 

<html> 

<!DOCTYPE html>
<html lang="en">`
<head>
<meta charset="UTF-8">
<title>Booking</title>
<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">
</head>
<body>
<div>
<div>
<form action="process.php"method="post">
<h2>Booking Details</h2>
<div>
<p>Your Name</p>
<input type="text" placeholder="name" name="name" required="">
</div>
<div>
<p>Date</p>
<input type="date" name="date" min="2022-12-01" max="2022-12-31 required/>
<span class="validity">
</span>
</div>
<div>
<p>Time</p>
<input type="time" name="time" required="">
</div>  
  <!-- Include Bootstrap for styling -->

  <link rel="stylesheet" href= 

"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> 

  

  <style> 

    .qr-code { 

      max-width: 200px; 

      margin: 10px; 

    } 

  </style> 

  

  <title>QR Code Generator</title> 

</head> 

  

<body> 

  <div class="container-fluid"> 

    <div class="text-center"> 

  

      <!-- Get a Placeholder image initially, 

       this will change according to the 

       data entered later -->

      <img src= 
"https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"

        class="qr-code img-thumbnail img-responsive" /> 

    </div> 

  

    <div class="form-horizontal"> 

      <div class="form-group"> 

        <label class="control-label col-sm-2"

          for="content"> 

          Content: 

        </label> 

        <div class="col-sm-10"> 

  

          <!-- Input box to enter the  

              required data -->
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<div data-ng-app="" data-ng-init="quantity1=1;price1=90">
<div data-ng-app="" data-ng-init="quantity2=1;price2=50">
<div data-ng-app="" data-ng-init="quantity4=1;price4=0">
<div data-ng-app="" data-ng-init="quantity3=1;price3=25">
<div data-ng-app="" data-ng-init="quantity5=1;price5=60">
<h2></h2>
<div>
  <p>Adult</p>
   <input  name="adult" type="number" ng-model="adult" id="adult">
</div>
<div>
  <p>CHILDREN(above 5 years and below 12 years)</p>
 <input type="number" ng-model="child" id="child">
</div>
<div>
  <p>CHILDREN(below 5 years)</p>
 <input type="number" ng-model="c5" id="c5">
</div>
<div>
  <p>CAMERA</p>
 <input type="number" ng-model="camera" id="camera">
</div>
<div>
  <p>BATTERY VEHICLES</p>
 <input type="number" ng-model="veh" id="veh">
</div>
<div>
<output name="content" class="form-control"

id="content" ><p><b>Total in rupees:</b>  {{adult* price1+child* price2+c5* price4+camera* price3+veh* price5}} </p>
</div>
      <div class="form-group"> 

        <div class="col-sm-offset-2 col-sm-10"> 

  

          <!-- Button to generate QR Code for 

           the entered data -->

          <button type="button" class= 

            "btn btn-default" id="generate"> 

            Generate 

          </button> 

        </div> 

      </div> 

    </div> 

  </div> 

  <script src= 

    "https://code.jquery.com/jquery-3.5.1.js"> 

  </script> 

  

  <script> 

    // Function to HTML encode the text 

    // This creates a new hidden element, 

    // inserts the given text into it  

    // and outputs it out as HTML 

    function htmlEncode(value) { 

      return $('<div/>').text(value) 

        .html(); 

    } 

  

    $(function () { 

  

      // Specify an onclick function 

      // for the generate button 

      $('#generate').click(function () { 

  

        // Generate the link that would be 

        // used to generate the QR Code 

        // with the given data  

        let finalURL = 
'https://chart.googleapis.com/chart?cht=qr&chl=' +

          htmlEncode("Adult:"+$('#adult').val()
          +"        "+             
          "Children(5 to 12 years):"+$('#child').val()
          +"        "+                                                      
          "Children(below 5yrs):"+$('#c5').val() 
          +"        "+                 
          "Camera:"+$('#camera').val()    
          +"        "+                                                  
          "Battery Vehicle:"+$('#veh').val() 
          +"        "+                                     
          $('#content').val()) +

          '&chs=160x160&chld=L|0' 

  

        // Replace the src of the image with 

        // the QR code image 

        $('.qr-code').attr('src', finalURL); 

      }); 

    }); 

  </script> 

</body> 

  

</html>