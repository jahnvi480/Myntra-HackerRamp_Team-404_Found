<?php
include 'databaseconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Myntra</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>	
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="icon" href="png/Myntra.png">
</head>
<body>

<nav class="shadow-sm w-100 navbar navbar-expand-lg navbar-light">
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
    	<li class="nav-item"><a class="nav-link" href="clothing.php">Clothing</a></li>
    	<li class="nav-item"><a class="nav-link" href="accessories.php">Accessories</a></li>
    	<li class="nav-item"><a class="nav-link" href="">Shoes</a></li>
    	<li class="nav-item"><a class="nav-link" href="customize.php">Customize</a></li>
    </ul>
   
</span>
 <span class="float-right"><a href=""><img src="png/001-shopping-cart.png"></a></span>
</span>

</nav>
<!--navigation-links-->
  
<div class="container-fluid" style="background-image: url(png/leaf.png);
    background-repeat: no-repeat;
    background-blend-mode: color-dodge;
    background-size: contain;
    background-color: currentcolor;">
<div class="row">
 <div class="col-8 main-bold  my-auto text-center">

 	<p class="main-heading">Exclusive Summer Collection</p>
 	<p>Shop the looks you love from social media<br><button type="button" class="btn btn-light">Explore Now</button>
 	</p>
 	

 </div>
 <div class="col-4 h-50 p-5">
 	<img class="img-fluid rounded" src="png/model1.jpg">
 </div>
</div>
</div> 

<div id="brands" class="p-4 container">
<div class="row">
  <div class="col-2 "><img class="img-fluid" src="png/nike.png"></div>
  <div class="col-2 "><img class="img-fluid" src="png/adidas.png"></div>
  <div class="col-2 "><img class="img-fluid" src="png/puma.png"></div>
  <div class="col-2 "><img class="img-fluid" src="png/ck.png"></div>
  <div class="col-2 "><img class="img-fluid" src="png/pg.png"></div>
  <div class="col-2 "><img class="img-fluid" src="png/gap.png"></div>
</div>
	
</div>
<div class="container-fluid pb-5">
	<div class="row customise">
	<div class="col-6 h-50 p-5">
	 	<img class="img-fluid rounded" src="png/customise2.gif">
	 </div>
	 <div class="col-6 h-50 my-auto">

		<p class="main-bold main-heading" style="color: black">Let's create your own style</p>
		<p class="main-bold" style="color: black;font-size: 1.5em!important;">Each women has a unique style, we help you to create your every own style becuase you deserve to shine like a star!<br><button type="button" class="btn btn-dark" onclick="window.location.href='customize.php'">Customise Now</button></p>

	</div> 	
	</div>
</div>
<div class="container-fluid mb-4 pb-4">
	<div class="row">
		 <div class="col-8">
		 <div class="row">	
		 	<div class="col"><img class="img-fluid" src="png/g1.jpg"></div>
		 	<div class="col"><img class="img-fluid" src="png/g2.jpg"></div>
		 	<div class="col"><img class="img-fluid" src="png/g1.jpg"></div>
		 	<div class="col"><img class="img-fluid" src="png/g2.jpg"></div>
		 </div>
		 </div>
		 <div class="col-4 my-auto d-flex justify-content-center">
		 	<button type="button" class="btn btn-dark">Shop Now</button>
		 </div>
		 	
	</div>
</div>
<div class="container-fluid pb-5 dark">
	<div class="row dark">
	 <div class="col-6 h-50 p-5 my-auto">

		<p class="main-bold main-heading">Reverse Image Search</p>
		<p class="main-bold" style="font-size: 1.5em!important;">Search your favourite tops by just uploading image and we will bring the best matching products.<br><button type="button" class="btn btn-light" onclick="window.location.href='clothing.php'">Check Now</button></p>

	</div> 	
	<div class="col-6 h-50 p-5">
	 	<img class="img-fluid rounded" src="png/rimgs2.png">
	 </div>
	</div>
</div>
</body>
</html>