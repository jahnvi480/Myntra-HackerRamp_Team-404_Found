<?php
include 'databaseconnect.php';

$id = $_SESSION['id'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Myntra</title>
	<meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <script src="https://cdn.jsdelivr.net/npm/p5@1.0.0/lib/p5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/clmtrackr@1.1.2/build/clmtrackr.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>	<link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://kit.fontawesome.com/2df014e953.js" crossorigin="anonymous"></script>
  <link rel="icon" href="png/Myntra.png">

    
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">
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
    	<li class="nav-item"><a class="nav-link" href="clothing.php">Clothing</a></li>
    	<li class="nav-item"><a class="nav-link" href="accessories.php">Accessories</a></li>
    	<li class="nav-item"><a class="nav-link" href="">Shoes</a></li>
    	<li class="nav-item"><a class="nav-link" href="customize.php">Customize</a></li>
    </ul>
   
</span>
 <span class="float-right"><a href=""><img src="png/001-shopping-cart.png"></a></span>
</span>

</nav>
 <?php
    $query = mysqli_query($conn,"SELECT * FROM products where id=$id");
    $rows = mysqli_num_rows($query); 
      if($rows>0)
    {
      while($row = mysqli_fetch_assoc($query))
      {
  ?> 
<div class="product container">
<div class="row">  
  <div class="col-md-6 product-image">
    <div class="row" id="product-image-canvas">
      <img id="product-main-image" onclick="" src="<?php echo $row['product_image'] ?>" alt="" class="img-fluid rounded">
    </div>
    
    <p id="try-on-id"  class="try-on display-flex align-items-center" onclick="showcanvas('<?php echo $row['product_category']?>','<?php echo $row['assests']; ?>')"><img src="png/camera.png"> Try on</p>
    <p id="close-canvas"><i class="fa fa-close"></i></p>
    
  </div>
  <div class="col-md-6 about-product">
    <div class="product-title">
      <h5><?php echo $row['product_name']; ?></h5>
      <p style="margin-bottom:0!important;color: grey"><?php echo $row['product_info']; ?></p>
    </div>
    <div class="star align-items-center mt-1 mb-1">

                <?php
                $rating =  $row['ratings'];
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
              
      <span> | <?php echo $row['review']; ?> Reviews</span>
      
    </div>
    

    <div class="price mt-1">
      <h4 style="margin-bottom: 0">Rs: <?php echo $row['product_price']; ?>/-</h4>
      <p style="margin-bottom:0!important;color: green">Inclusive of all taxes</p>

    </div>
    <div class="colors">
      
      <?php
          $shades =  explode(',', $row['color']);
          
          if ($shades[0]!="")
          {
          ?>
          <b>Shades:</b><br>
          
<?php 
        

          foreach ($shades as $color) {
            $co =  explode('-',$color);
            $default = $co[1];
          ?>
             <span class="display-flex align-items-center"><span onclick="changecolor('<?php echo $co[1]; ?>')" class="shades" style="background:<?php echo $co[1]; ?>"></span><span style="margin-right: 0.4em"><?php echo $co[0]; ?></span></span>
             
        <?php
        } 
      }
        ?>

    </div>
    <div class="size">
      
      <?php
          $size =  explode(',', $row['size']);
          
          if ($size[0]!="")
          {
          ?>
          <b>Size:</b><br>
          
<?php 
        

          foreach ($size as $size) {
            $co =  explode('-',$size);
            $default = $co[1];
          ?>
            <span class="display-flex align-items-center">
              <span class="shades"><?php echo $co[1]; ?></span>
            </span>
             
        <?php
        } 
      }
        ?>

    </div>
    <div class="product-description mt-3 mb-1 text-justify">
       <b>About Product:</b><br>
      <?php echo $row['product_description'];?>
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
<?php 
}
}
?>
<script type="text/javascript">
  let outputWidth;
  let outputHeight;
  let faceTracker; 
  let videoInput;
  let color = '#AA4A44';
  let subfunction;
  let earing_image;
  let earing;
  let sunglass_image;
  let sunglass;

  function showcanvas(sfunction,assests){
      subfunction = sfunction;
      earing_image = assests;
      sunglass_image = assests;
    
      let sketch = function(p) {
      p.preload = function()
      {
        if (subfunction=='earing')
        {
          earing = p.loadImage(earing_image);
        }
        else if (subfunction=='sunglass')
        {
          sunglass = p.loadImage(sunglass_image);

        }
        
      }
      p.setup = function()
      {
        
        p.createCanvas(outputWidth, outputHeight);
        p.background(0);
        videoInput = p.createCapture(p.VIDEO);
        videoInput.size(outputWidth,outputHeight);
        videoInput.hide()

        facetracker = new clm.tracker()
        facetracker.init()
        facetracker.start(videoInput.elt);



      }
      p.draw = function()
      {

        p.image(videoInput,0,0,outputWidth,outputHeight);
        
        if(subfunction=="lipstic") 
        {
            p.colorfunc(color);
        } 
        else if(subfunction=="sunglass")
        {
          p.sunglass_func(sunglass_image);
        }
        else
        {
          p.earing(earing_image);
          
          
        } 



      }
      p.sunglass_func = function(sunglass_image)
      {
        console.log(sunglass_image);
        const positions = facetracker.getCurrentPosition();
        if (positions!==false)
        {
          p.push();
          console.log(positions[41][1],positions[33][1]);
          const wx = (positions[22][0]-positions[19][0])*3.5;
          const wy = (positions[41][1]-positions[33][1])*2.5;
          p.translate(2,-4);
          p.image(sunglass, positions[0][0], positions[0][1], wx, wy);
          p.pop();

        
        }

        

      }
      p.earing = function(earing_image)
      {
        const positions = facetracker.getCurrentPosition();
          if (positions.length>=20)
          {
            p.push();
            const wx = 66*0.45;
            const wy = 68*0.45;
            p.translate(-26, -20);
            p.image(earing, positions[2][0], positions[2][1], wx, wy);
            p.pop();
          }
          if (positions.length >= 16) 
          {
            p.push();
            const wx = 66*0.45;
            const wy = 68*0.45;
            p.translate(6, -20);
            p.image(earing, positions[12][0], positions[12][1], wx, wy);
            p.pop();
          }
      }
      p.colorfunc = function(color)
    {
    const positions = facetracker.getCurrentPosition();
    if (positions!==false)
    {
      p.push();
      p.stroke(color);
      p.fill(color);
      p.beginShape();
      p.vertex(positions[44][0],positions[44][1]);
      p.vertex(positions[45][0],positions[45][1]);
      p.vertex(positions[46][0],positions[46][1]);
      p.vertex(positions[47][0],positions[47][1]);
      p.vertex(positions[48][0],positions[48][1]);
      p.vertex(positions[49][0],positions[49][1]);
      p.vertex(positions[50][0],positions[50][1]);
      p.vertex(positions[59][0],positions[59][1]);
      p.vertex(positions[60][0],positions[60][1]);
      p.vertex(positions[61][0],positions[61][1]);
      p.endShape(p.CLOSE);
      p.pop();
    }
    if (positions!==false)
    {
      p.push();
      p.stroke(color);
      p.fill(color);
      p.beginShape();
      p.vertex(positions[44][0],positions[44][1]);
      p.vertex(positions[56][0],positions[56][1]);
      p.vertex(positions[57][0],positions[57][1]);
      p.vertex(positions[58][0],positions[58][1]);
      p.vertex(positions[50][0],positions[50][1]);
      p.vertex(positions[51][0],positions[51][1]);
      p.vertex(positions[52][0],positions[52][1]);
      p.vertex(positions[53][0],positions[53][1]);
      p.vertex(positions[54][0],positions[54][1]);
      p.vertex(positions[55][0],positions[55][1]);
      p.endShape(p.CLOSE);
      p.pop();
    }

}
      
    };
    var img = document.getElementById('product-main-image');
    img.style.display="none";

    var try_on_id = document.getElementById('try-on-id');
    try_on_id.style.display="none";

    var canvas = document.getElementById('product-image-canvas');
    
    outputWidth = canvas.offsetWidth;
    outputHeight = canvas.offsetWidth * 0.75;
    
    new p5(sketch, document.getElementById('product-image-canvas'));
  
  }

  function changecolor(shade)
  {
    color = shade;
    console.log(color);
  }
  
  
</script>
</body>

</html>
