<?php
  require('db.php');
  session_start();
  if(isset($_POST['addTOCart'])){
    $a = $_SESSION['username'];
    $query = "SELECT `u_id` FROM `users` WHERE `u_name` = '$a' ";
    //$query1 = " SELECT u_id FROM users WHERE u_name= $a ";
    $result1 = mysqli_query($con, $query);
    $row = mysqli_fetch_row($result1);
    if(!($result1)){
      echo("Error description: " . mysqli_error($con));
    }
    $query2 = "INSERT INTO `cart`(`u_id`, `p_id`) VALUES ($row[0],'14')";
    $result2 = mysqli_query($con, $query2);
    if($result1){
      echo '<script>alert("Product added to cart!")</script>';
    }else{
      echo("Error description: " . mysqli_error($con));
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Headphones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylefile.css">
  <!-- No need to change any CSS here-->

</head>
<body>

  <div class="topnav">
  <h1 style="text-align:center; color:white">&nbsp &nbsp ONECLICK CART<sub style="font-size:40%"> FIND IT! LOVE IT! BUY IT!</sub></h1>

</div>
<div class="topnav">
  <a href="home.html">&nbsp HOME &nbsp &nbsp</a>
  <a href="smartPhones.html">&nbsp Smart Phones &nbsp &nbsp</a>
  <a href="speakers.html">&nbsp Speakers &nbsp &nbsp</a>
  <a href="headphones.html">&nbsp Headphones &nbsp &nbsp</a>
  <a href="earphones.html">&nbsp Earphones &nbsp &nbsp</a>
  <a href="logout.php" style="float:right">&nbsp &nbsp Logout &nbsp &nbsp</a>
  <a href="cart.php" style="float:right">&nbsp &nbsp &nbsp &nbsp <i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp Cart &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
</div>

<div class="container-fluid h-100">
  <div class="row justify-content-center h-100">
    <div class="col-sm-6" style="background-color:#B5DFD6; height:620px">
      <br>
      <br>
      <br>
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:95%;align:center">

        <!-- Change the number of list items according to the number of images -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Just change the number of images and the name under src. -->
        <div class="carousel-inner" style="align:center;">
          <div class="item active">
                <img class="img-responsive center-block" src="img3.4.1.jpg" alt="Image1" style="width:70%;">
          </div>

          <div class="item">
              <img class="img-responsive center-block" src="img3.4.2.jpg" alt="Image2" style="width:70%;">
          </div>

          <div class="item">
                <img class="img-responsive center-block" src="img3.4.3.jpg" alt="Image3" style="width:70%;">
          </div>

        </div>

        <!-- No Change here -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-sm-6" style="background-color:#DBF5F0;height:620px " >

        <!-- product name -->
      <h2>Sony WH-1000XM4 Industry Leading Wireless Noise Cancelling Headphones, Bluetooth Headset with Mic for Phone Calls, 30 Hours Battery Life, Quick Charge, Touch Control & Alexa Voice Control – (Black)</h2>
      <br>
       &nbsp &nbsp Rating:&nbsp
         <!-- change the stars as per the product rating. here first four are full and last one is half star. -->
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star-half-o" aria-hidden="true"></i>
      <br>
      <br>
        <!-- Price-->
      <p >&nbsp &nbsp M.R.P.:&nbsp &nbsp<span style="text-decoration: line-through;"> <i class="fa fa-inr" aria-hidden="true"></i>33,000.00</span></p>
      <p>&nbsp &nbsp Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>29,990.00</p>
      <p style="color:#2E86C1"><b> &nbsp &nbsp IN STOCK!</b></p>
      <br>
      <form method="POST">
        <button type="submit" class="btn btn-info btn-lg" name="addTOCart" id="addTOCart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp Add to Cart</button>
      </form>
      <br>
      <br>
      <br>
      <ul style="width:600px " >
          <!-- Quick details -->
        <li>Digital noise cancelling: Industry leading Active Noise Cancellation (ANC) lends a personalized, virtually soundproof experience at any situation</li>
        <li>Voice assistant: Alexa, Google Assistant & Siri enabled (In-built) for voice access to music, information and more. Activate with a simple touch</li>
        <li>Speak-to-chat: Headphones use an array of smart technologies to create a seamless, hands-free listening experience. For eg, simply start speaking to automatically pause your music in Speak-to-Chat</li>
        <li>Wearing Detection: Proximity sensor and two acceleration sensors in your headphones can detect whether you're wearing them or not, then adapt playback accordingly to help save battery power</li>

      </ul>
    </div>
  </div>
  <div class="container-fluid h-100">
    <br>
    <br>
    <h2 style="text-align:center">Technical Details</h2>
    <br>
    <br>
      <!-- Change the table as per the details.-->
  <table class="table table-hover center table-striped table-dark" style="width:900px">
    <tr>
      <th scope="row">Brand</th>
      <td>Sony</td>
    </tr>
    <tr>
      <th scope="row">Manufacturer</th>
      <td>Sony, 18001037799</td>
    </tr>
    <tr>
      <th scope="row">Model Name</th>
      <td>Headphones</td>
    </tr>
    <tr>
      <th scope="row">Product Dimensions</th>
      <td>18.47 x 7.7 x 25.25 cm; 254 Grams</td>
    </tr>
    <tr>
      <th scope="row">Batteries</th>
      <td>1 Lithium ion batteries required.</td>
    </tr>
    <tr>
      <th scope="row">Item model number</th>
      <td>WH1000XM4/B</td>
    </tr>
    <tr>
      <th scope="row">Hardware Platform</th>
      <td>Smartphone</td>
    </tr>
    <tr>
      <th scope="row">Battery Cell Composition</th>
      <td>	Lithium Ion</td>
    </tr>
    <tr>
      <th scope="row">Special Features</th>
      <td>Noise cancelling</td>
    </tr>
    <tr>
      <th scope="row">Mounting Hardware</th>
      <td>Operating Instruction, Instruction Manual, USB Cable, Carrying Case, In-Flight Adaptor</td>
    </tr>
    <tr>
      <th scope="row">Number Of Items</th>
      <td>1</td>
    </tr>
    <tr>
      <th scope="row">Battery Average Life	</th>
      <td>30 Hours</td>
    </tr>
    <tr>
        <th scope="row">Batteries Included</th>
        <td>Yes</td>
    </tr>
    <tr>
        <th scope="row">Item Weight</th>
        <td>254 g</td>
    </tr>

  </table>
</div>
</div>
  <!-- No Change here -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 ">
          <h6>About</h6>
          <p class="text-justify">Our company assures you, the best quality of products with the best possible deals! Just click it and have the most amazing products in your hands by minimum time!<i>  FIND IT! LOVE IT! BUY IT!</i></p>
        </div>

        <div class="col-sm-6"  style="text-align:center;">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="smartPhones.html">Smart Phones</a></li>
            <li><a href="speakers.html">Speakers</a></li>
            <li><a href="headphones.html">Headphones</a></li>
            <li><a href="earphones.html">Earphones</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>

  </footer>

</body>
</html>
