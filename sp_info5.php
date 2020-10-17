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
    $query2 = "INSERT INTO `cart`(`u_id`, `p_id`) VALUES ($row[0],'10')";
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
  <title>Bootstrap Example</title>
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
    <div class="col-sm-6" style="background-color:#B5DFD6; height:670px">
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
          <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>

        <!-- Just cahnge the number of images and the name under src. -->
        <div class="carousel-inner" style="align:center;">
          <div class="item active">
            <img class="img-responsive center-block" src="img2.5.1.jpg" alt="Image1" style="width:70%;">
          </div>

          <div class="item">
              <img class="img-responsive center-block" src="img2.5.2.jpg" alt="Image2" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img2.5.3.jpg" alt="Image3" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img2.5.4.jpg" alt="Image4" style="width:70%;">
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

    <div class="col-sm-6" style="background-color:#DBF5F0;height:670px " >

        <!-- product name -->
      <h2 >Portronics Dynamo Bluetooth 5.0 Portable Stereo Speaker with TWS, USB Music & FM Music and Clear Bass Sound, 5W, Blue</h2>
      <br>
       &nbsp &nbsp Rating:&nbsp
         <!-- change the stars as per the product rating. here first four are full and last one is half star. -->
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star-o" aria-hidden="true"></i>
      <br>
      <br>
        <!-- Price-->
      <p >&nbsp &nbsp M.R.P.:&nbsp &nbsp<span style="text-decoration: line-through;"> <i class="fa fa-inr" aria-hidden="true"></i>1,999.00</span></p>
      <p>&nbsp &nbsp Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>1,049.00</p>
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
        <li>[CLEAR & RELAXING BASS]- Dynamo has a powerful 5W inbuilt speakers with acoustically tuned amplifiers to offer unbelievably clear sound output, relaxing bass and mid-ranges</li>
        <li>[MULTIPLE CONNECTIVITY]- its Bluetooth 5.0 BLE offers 250 percent faster speed, lower energy consumption than even Bluetooth 4.1, You can play music options like Pen Drive and FM Radio</li>
        <li>[COOL & COMPACT LOOKS]- Solid and stable shape in multi colour goes well with stylish metallic grille. It weighs only 266 grams. It has water resistant and dust tight body</li>
        <li>[LONG PLAYTIME] - The powerful 2000mAh lithium Ion battery can play music for more than 10-12 hours on a single recharge</li>
        <li>[TRUE WIRELESS STEREO]- If you want to enjoy True Dual Speaker Stereo, then connect two Dynamo speakers using TWS. You get 12-months Warranty and for any issues contact us on 9555245245</li>

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
      <td>Portronics</td>
    </tr>
    <tr>
      <th scope="row">Manufacturer</th>
      <td>	Portronics</td>
    </tr>
    <tr>
      <th scope="row">Model</th>
      <td>Dynamo</td>
    </tr>
    <tr>
      <th scope="row">Product Dimensions</th>
      <td>7.1 x 9.5 x 3.8 cm; 266 Grams</td>
    </tr>
    <tr>
      <th scope="row">Item model number</th>
      <td>	Dynamo</td>
    </tr>
    <tr>
      <th scope="row">Compatible Devices</th>
      <td>	Smartphone, Tablet, Laptop or Computer</td>
    </tr>
    <tr>
      <th scope="row">Item Weight</th>
      <td>	266 g</td>
    </tr>
    <tr>
      <th scope="row">Imported By</th>
      <td>Portronics Digital Pvt Limited; B76 Wazirpur Industrial Area, Delhi -52</td>
    </tr>
    <tr>
      <th scope="row">Packed By</th>
      <td>	FLOOR-1st and 2nd, B-76, Wazirpur Industrial area, Wazirpur, New Delhi, Delhi, 110052</td>
    </tr>
    <tr>
      <th scope="row">Units</th>
      <td>1 Unit</td>
    </tr>
    <tr>
      <th scope="row">Best Sellers Rank</th>
      <td>#1,373 in Electronics (See Top 100 in Electronics)#44 in Bluetooth Speakers</td>
    </tr>
    <tr>
      <th scope="row">Mounting Type</th>
      <td>	Table Top</td>
    </tr>
    <tr>
      <th scope="row">Battery Cell Composition</th>
      <td>Lithium Ion</td>
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
