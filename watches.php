<!DOCTYPE html>
<html>
<head>
	<title>Myntra</title>
	<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <script src="https://unpkg.com/@tensorflow/tfjs-core@2.1.0/dist/tf-core.js"></script>
<script src="https://unpkg.com/@tensorflow/tfjs-converter@2.1.0/dist/tf-converter.js"></script>
<script src="https://unpkg.com/@tensorflow/tfjs-backend-webgl@2.1.0/dist/tf-backend-webgl.js"></script>
<script src="https://unpkg.com/@tensorflow-models/handpose@0.0.6/dist/handpose.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/2df014e953.js" crossorigin="anonymous"></script>
  <link rel="icon" href="png/Myntra.png">
  <script src="index_w.js"></script>

    
  <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>


<nav class="mb-2 shadow-sm w-100 navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand logo-size" href="home.php"><img src="png/Myntra.png" style="width: 70px;
        left: 15px; position: relative"/></a>

  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
      
  </a>
<span class="collapse navbar-collapse">
	<span class="container clearfix">
	<ul class="navbar-nav mr-auto mb-2 mb-lg-0 float-right">
    	<li class="nav-item"><a class="nav-link" href="women's collection.php">Women's Collection</a></li>
      <li class="nav-item"><a class="nav-link" href="men's collection.php">Men's Collection</a></li>
      <li class="nav-item"><a class="nav-link" href="accessories.php">Accessories</a></li>
      <li class="nav-item"><a class="nav-link" href="customize.php">Customize</a></li>
    </ul>
   
</span>
 <span class="float-right"><a href=""><img src="png/001-shopping-cart.png"></a></span>
</span>

</nav>
<div class="product container">
<div class="row">  
  <div class="product-image" style="width:57%">
    <div class="row" id="product-image-canvas">
      <img id="product-main-image" src="png/products/ring_Watch.jfif" alt="" class="img-fluid rounded">
      	<video id="videoElement" width="640" height="500" style="display: none;">
    	</video>
    	<canvas id="canvasElement" width="640" height="500"></canvas>
  	   
  	<img id="mother" src="png/products/assests/watch.png" style="display: none;"/>
  	<img id="ring" src="png/products/assests/ring2.png" style="display: none;"/>
  
    </div>
    
    <p id="try-on-id"  class="try-on display-flex align-items-center" onclick="main()" style="top:15%;"><img src="png/camera.png"> Try on</p>
    <p id="close-canvas"><i class="fa fa-close"></i></p>
    
  </div>
  <div class="about-product" style="width:43%">
    <div class="product-title">
      <h5>Titan watch with ring</h5>
      <p style="margin-bottom:0!important;color: grey">Women Grey Analogue Watch 2651WM01 with silver ring</p>
    </div>
    <div class="star align-items-center mt-1 mb-1">

                <?php
                $rating =  3;
                for($i=0;$i<$rating;$i++){ ?>
                <i class="fa fa-star" style="color:orange"></i>
                <?php
                } 
                ?>
                <?php for($i=0;$i<(5-$rating);$i++){ ?>
                <i class="fa fa-star"></i>
                <?php 
              }
              ?>
              
      <span> | 10 Reviews</span>
      
    </div>
    

    <div class="price mt-1">
      <h4 style="margin-bottom: 0">Rs: 5000/-</h4>
      <p style="margin-bottom:0!important;color: green">Inclusive of all taxes</p>

    </div>
    <div class="colors">
      
    
    </div>
    <div class="size">
        <span class="display-flex align-items-center">
              <span class="shades">OS</span>
        </span>
    </div>
    <div class="product-description mt-3 mb-1 text-justify">
       <b>About Product:</b><br>
       <pre>
          Display: Analogue
          Power source: Battery
          Dial style: Textured round brass dial
          Features: Reset Time
          Strap style: Rose Gold-Toned bracelet style.
          Water resistance: 50 m
          Warranty provided by brand/manufacturer
	     </pre>
    </div>
    <div class="row options mt-1 mb-1">
      <div class="col-md-4 d-md-flex align-items-md-center">
        <button type="button" class="btn btn-success"><img src="png/shopping-bag.png" style="margin-right: 0.4em;">Add to bag</button>
      
      </div>
      <div class="col-md-8 justify-content-md-center  ">
        <b>Delivery option:</b><br>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Enter pincode">
     
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">Check</span>
            </div>
        </div> 
      </div>  
        
    </div>
    <div class="m-1">
      <span><img src="png/speed-limit-100.png"> 100% genuine products | </span>
      <span><img src="png/handshake.png"> Easy Return Policy | </span>
      <span><img src="png/002-delivery-truck-1.png"> Fast Delivery 
</span>
      
    </div>

  </div>
</div>  
</div>


</body>
</html>