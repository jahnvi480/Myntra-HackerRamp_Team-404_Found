
<?php
include 'databaseconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Clothing</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/2df014e953.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="png/Myntra.png">
</head>
<body>
    <nav class="mb-2 w-100 shadow-sm navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand logo-size" href="home.php"><img src="png/Myntra.png" style="width: 70px;
        left: 15px; position: relative"/></a>

        <form action="clothing.php" method="post" enctype="multipart/form-data" style="margin-left: 20%">
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="image">
                <label class="custom-file-label" for="image">Choose file</label>
              </div>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" value="Upload Image" name="submit">Search</button>
              </div>
            </div>
        </form>
  
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


if(isset($_POST["submit"])) {
    $file_name = $_FILES["image"]["name"];
    $file_size = $_FILES["image"]["size"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];
    move_uploaded_file($file_tmp , "uploads/" . $file_name);
    $path = "/uploads/".$file_name;
    /*echo $path;*/
    $q = json_decode(shell_exec("python search.py $path"));
    ?>
    <div class="container mb-5 mt-5" id="pro">
          <div class="row">
            <?php 
    foreach ($q as $value)
    {
        $i = str_replace("\\", "/", $value);
        $queri = mysqli_query($conn,"SELECT * FROM fashion_img WHERE img_path = '$i'");
        $row = mysqli_fetch_assoc($queri);
        ?>
        
              <div class="col-md-4">
                  <div class="card mt-3">
                    <div class="product-1 align-items-center p-2 text-center">
                        <div id="m1div">

                            <img src="<?php echo $value; ?>" style="width:160px;">
                            <h5><?php echo $row['title']?></h5>
            <div class="mt-3 info">
              <span class="text1 d-block">Available in S-3XL</span>
            </div>
            <div class="cost mt-3 text-dark">
              <span ><?php echo $row['price'];?></span>
              <div class="star mt-3 align-items-center">
                <?php
                $rating =  $row['rating'];
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
          <!--button-->
          <button type="button" class="w-100 btn btn-success"><img src="png/shopping-bag.png" style="margin-right: 0.4em;">Add to cart</button>
        </div>
      </div>
                        </div>
                
        
    <?php
}?>
</div>
    </div>
    
    <?php }
    else{?>
<div class="container mb-5 mt-5" id="pro">
  <?php
    $query = mysqli_query($conn,"SELECT * FROM fashion_img");
    $rows = mysqli_num_rows($query); 
   ?>

  <div class="row">
     <?php
      if($rows>0)
    {
      while($row = mysqli_fetch_assoc($query))
      {
  ?> <div class="col-md-4 p-4" style="cursor: pointer;">
        <div class="card mt-3">
          <div class="product-1 align-items-center p-2 text-center">
            <img src="<?php echo $row['img_path'] ?>" alt="" class="rounded" width="160">
            <h6><?php echo $row['title']; ?></h6>
            <div class="info">
               <span class="text1 d-block">Available in S-3XL</span>
            </div>
            <div class="cost text-dark">
              <span><b><?php echo $row['price']; ?>/-</b></span>
              <div class="star align-items-center">

                <?php
                $rating =  $row['rating'];
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

    <?php }

?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>



