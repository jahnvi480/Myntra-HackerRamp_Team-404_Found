<?php
include 'databaseconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Accessories</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/2df014e953.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="icon" href="png/Myntra.png">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    

<nav class="mb-2 w-100 shadow-sm navbar navbar-expand-lg navbar-light">
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
<!--cards-->
<div class="container mb-5 mt-5">
  <?php
    $query = mysqli_query($conn,"SELECT * FROM products");
    $rows = mysqli_num_rows($query); 
   ?>

  <div class="row">
     <?php
      if($rows>0)
    {
      while($row = mysqli_fetch_assoc($query))
      {
  ?> <div class="col-md-4 p-4" style="cursor: pointer;" onclick="product_page('<?php echo $row['id']; ?>')">
        <div class="card mt-3">
          <div class="product-1 align-items-center p-2 text-center">
            <img src="<?php echo $row['product_image'] ?>" alt="" class="rounded" width="160">
            <h6><?php echo $row['product_name']; ?></h6>
            <div class="info">
              <span class="text1 d-block"><?php echo $row['product_info']; ?></span>
            </div>
            <div class="cost text-dark">
              <span><b><?php echo $row['product_price']; ?>/-</b></span>
              <div class="star align-items-center">

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
              </div>
            </div>
          </div>
          <div class="text-center text-white cursor">
            <button type="button" class="w-100 btn btn-success"><img src="png/shopping-bag.png" style="margin-right: 0.4em;">Add to cart</button></p>
      
          </div>
        </div>
      </div>
      <?php 
    }
    }
    ?>

<!--end-->

  </div>
</div>
<script type="text/javascript">
  function product_page(id)
  {
    
    $.ajax({
            url:"product-id-set.php",
            type:"POST",
            data:{'id':id},
            success:function(data){
             window.location.href = "product-page.php";
            }

        });
  }
</script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>