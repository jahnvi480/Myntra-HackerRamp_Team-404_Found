<!DOCTYPE html>
<html>
<head>
	<title>Customized Product</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/2df014e953.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="icon" href="png/Myntra.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<?php
	include('databaseconnect.php');
	$i1 = mysqli_real_escape_string($conn, $_GET['id']);
	$query = "SELECT * FROM custompro WHERE id = '$i1'";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($result)) {
		$im = $row['img'];
		$p = $row["price"];
		$dw = $row["drawarea-width"];
		$dh = $row["drawarea-height"];
		$pd = $row["pro-desc"];
		$pt = $row["title"];
		$rat = $row["rating"];
		$mt = $row["margin-top"];
		$ml = $row["margin-left"];
		$re = $row['review'];
?>
<style type="text/css">
	.des{
            width: 100%;
        }
        td:hover {
            background-color: #f2f2f2;
        }
        td{
            width: 200px;
        }
        .drawing-area{
            position: absolute;
            top: 60px;
            left: 122px;
            z-index: 10;
            width: 200px;
            height: 400px;
        }

        .canvas-container{
            width: 100px;
            height: 300px;
            <?php echo "margin:".$mt."px ".$ml."px;"?>
            position: relative;
            user-select: none;
        }

        #tshirt-div{
            width: 70%;
            position: relative;
            background-color: #fff;
            margin-left: auto;
            margin-right: auto;
        }

        #canvas{
            width: 140px;
            height: 250px; 
            left: 0px; 
            top: 0px; 
            user-select: none; 
            cursor: default;
        }

        #tshirt-color,#image-select,#tshirt-custompicture, #textadder{
            width: 100%;
        }
        .arr{
            margin-right: 15px;
        }
        .btn-outline-success{
        	width: 50px;
        	height: 50px;
        	padding: 10px;
        	border-radius: 50%;
        }
        .btn-link{
        	color: black;
        	background-color: white
        	text-decoration: none;
        	cursor: pointer;
        }
        .card{
        	margin-bottom: 15px!important;
        }

</style>
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

    <div class="card-deck" style="margin: 15px 10px">
      <!-- CARD 1-->	
	  <div class=" col-3" style="border: none;width: 100px!important;" id="card1">
	    <div id="accordion">
		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          <img src="images op/ra.png" class="arr">Select Color
		        </a>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
		      	<input type="Color" name="" id="tshirt-color" oninput="t()">
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          <img src="images op/ra.png" class="arr">Select deisgn
		        </a>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		      <div class="card-body" style="overflow-y: scroll;height: 200px; ">
		        <table>
	                <tr>
	                    <td><img src="Images option/1.png" class="des" onclick='updateTshirtImage("Images option/1.png")'></td>
	                    <td><img src="Images option/2.png" class="des" onclick='updateTshirtImage("Images option/2.png")'></td>
	                    <td><img src="Images option/3.png" class="des" onclick='updateTshirtImage("Images option/3.png")'></td>
	                </tr>
	                <tr>
	                    <td><img src="Images option/4.png" class="des" onclick='updateTshirtImage("Images option/4.png")'></td>
	                    <td><img src="Images option/5.png" class="des" onclick='updateTshirtImage("Images option/5.png")'></td>
	                    <td><img src="Images option/6.png" class="des" onclick='updateTshirtImage("Images option/6.png")'></td>
	                </tr>
	                <tr>
	                    <td><img src="Images option/7.png" class="des" onclick='updateTshirtImage("Images option/7.png")'></td>
	                    <td><img src="Images option/8.png" class="des" onclick='updateTshirtImage("Images option/8.png")'></td>
	                    <td><img src="Images option/9.png" class="des" onclick='updateTshirtImage("Images option/9.png")'></td>
	                </tr>
	                <tr>
	                    <td><img src="Images option/10.png" class="des" onclick='updateTshirtImage("Images option/10.png")'></td>
	                    <td><img src="Images option/11.png" class="des" onclick='updateTshirtImage("Images option/11.png")'></td>
	                </tr>
	            </table>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          <img src="images op/ra.png" class="arr">Upload your design
		        </a>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		      <div class="card-body">
		        <div class="input-group mb-3">
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="tshirt-custompicture">
				    <label class="custom-file-label" for="tshirt-custompicture">Choose file</label>
				  </div>
				</div>
		      </div>
		    </div>
		  </div>
		  <div class="card">
		    <div class="card-header" id="headingFour">
		      <h5 class="mb-0">
		        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		          <img src="images op/ra.png" class="arr">Enter text
		        </a>
		      </h5>
		    </div>
		    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
		      <div class="card-body">
		        <div id="textadder">
			        <label style="width: 32%">Text color:</label>
			        <label style="width: 32%">Font:</label>
			        <label style="width: 32%">Style:</label><br>
			        <input type="color" name="" id="text-color" oninput="colchange()" style="width: 30%;margin-right: 2%">
			        <select id="fontfam" style="width: 30%;margin-right: 2%">
			            <option value="Times New Roman">Times New Roman</option>
			            <option value="Arial">Arial</option>
			            <option value="Verdana">Verdana</option>
			            <option value="Courier New">Courier New</option>
			            <option value="serif">Serif</option>
			            <option value="sans-serif">Sans-Serif</option>
			            <option value="Helvetica">Helvetica</option>
			            <option value="Tahoma">Tahoma</option>
			            <option value="Trebuchet MS">Trebuchet MS</option>
			            <option value="Georgia">Georgia</option>
			            <option value="Garamond">Garamond</option>
			            <option value="Courier New">Courier New</option>
			            <option value="Brush Script MT">Brush Script MT</option>
			        </select>
			        <select id="style" style="width: 30%;margin-right: 2%">
			            <option value="normal">Normal</option>
			            <option value="bold">Bold</option>
			            <option value="italic">Italic</option>
			        </select>
			        <p></p><label>Enter Text:</label><br>
			        <div class="input-group mb-3">
					  <input type="text" class="form-control" placeholder="Enter your text here" aria-label="Recipient's username" aria-describedby="basic-addon2" id="enter-text">
					  <div class="input-group-append">
					    <button class="btn btn-outline-secondary" type="button" onclick="text()">Button</button>
					  </div>
					</div>

			    </div>
		      </div>
		    </div>
		  </div>
		</div>
	  </div>


	  <!-- CARD 2-->
	  <div class="col-4" style="border: 1px solid rgba(0,0,0,0.1)">
	  	<div class="card-body">
	  		<div id="card_img">
			    <div id="tshirt-div">
			    	<?php echo '<img id="tshirt-backgroundpicture" src="'.$im.'" width="100%" />'; ?>
		            
		            <div id="drawingArea" class="drawing-area">                 
		                <div class="canvas-container">
		                	<?php echo '<canvas id="tshirt-canvas" width="'.$dw.'px" height="'.$dh.'px"></canvas>';?> 
		                </div>
		            </div>
		        </div>
		    </div><br>
	        <div class="card-footer">
		      <p class="text-muted">To remove a loaded picture on the T-Shirt select it and press the <kbd>DEL</kbd> key.</p>
		    </div> 
     	</div>
	  </div>


	  <!-- CARD 3-->
	  <div class="card" style="border: none;">
	    <div class="card-body">
	      <div class="product-title">
		      <h5><?php echo $pt; ?></h5>
		    </div>
		    <div class="star align-items-center mt-1 mb-1">
		    	<?php for($i=0;$i<($rat);$i++){ ?>
                <i class="fa fa-star" style="color:orange"></i>
                <?php
                } 
                ?>
                <?php for($i=0;$i<(5-$rat);$i++){ ?>
                <i class="fa fa-star"></i>
                <?php 
              }
              ?>
		      <span> | <?php echo $re; ?> Reviews</span>
		    </div>
		    

		    <div class="price mt-1">
		      <h4 style="margin-bottom: 0">Rs: <?php echo $p; ?>/-</h4>
		      <p style="margin-bottom:0!important;color: green">Inclusive of all taxes</p>

		    </div>
		    <div>
		      <b>Size:</b><br>
		      <button type="button" class="btn btn-outline-success">S</button>
		      <button type="button" class="btn btn-outline-success">M</button>
		      <button type="button" class="btn btn-outline-success">L</button>
		      <button type="button" class="btn btn-outline-success">XL</button>
		      <button type="button" class="btn btn-outline-success">2XL</button>
		      <button type="button" class="btn btn-outline-success">3XL</button>
		    </div>
		    <div class="product-description mt-3 mb-1 text-justify">
		       <b>About Product:</b><br>
		       <?php echo $pd ;}?>
		    </div>
		    <div class="row options mt-1 mb-1">
		      <div class="col-4 d-flex align-items-md-center">
		        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter" onclick="dis()"><img src="images op/preview.png" style="margin-right: 0.4em;">Preivew</button>
		      
		      </div>
		      <div class="col-8 justify-content-md-center  ">
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
		      <span><img src="images op/de.jpeg"> 100% genuine products | </span>
		      <span><img src="images op/handshake.jpeg"> Easy Return Policy | </span>
		      <span><img src="images op/truck.jpeg"> Fast Delivery </span>
		    </div>

			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Preview</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="rem()">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" id="insert" style="margin-right: auto;margin-left: auto;">
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="rem()">Close</button>
			        <button type="button" class="btn btn-primary" onclick="save()"><img src="images op/download.png" width="20"></button>
			        <button type="button" class="btn btn-success"><img src="png/shopping-bag.png">Add to Bag</button>
			      </div>
			    </div>
			  </div>
			</div>

	    </div>
	  </div>
	</div>

<script src="js required/fabric.min.js"></script>
<script src="js required/FileSaver.min.js"></script>
<script src="js required/dom-to-image.min.js"></script>
<script src="js required/html2canvas.min.js"></script>

<script>

            function rem(){
            	document.getElementById('insert').innerHTML = ''
            }

            function dis(){
                html2canvas(document.getElementById('card_img')).then(function(canvas) {
                    document.getElementById('insert').appendChild(canvas);
                });
            }

            let canvas = new fabric.Canvas('tshirt-canvas');

            function updateTshirtImage(imageURL){
                fabric.Image.fromURL(imageURL, function(img) {                   
                    img.scaleToHeight(100);
                    img.scaleToWidth(100); 
                    canvas.centerObject(img);
                    canvas.add(img);
                    canvas.renderAll();
                });
            }
            
            // Update the TShirt color according to the selected color by the user
            function t(){
                console.log(document.getElementById("tshirt-color").value)
                document.getElementById("tshirt-div").style.backgroundColor = document.getElementById("tshirt-color").value;
            }


            // When the user clicks on upload a custom picture
            document.getElementById('tshirt-custompicture').addEventListener("change", function(e){
                var reader = new FileReader();
                
                reader.onload = function (event){
                    var imgObj = new Image();
                    imgObj.src = event.target.result;

                    // When the picture loads, create the image in Fabric.js
                    imgObj.onload = function () {
                        var img = new fabric.Image(imgObj);

                        img.scaleToHeight(100);
                        img.scaleToWidth(100); 
                        canvas.centerObject(img);
                        canvas.add(img);
                        canvas.renderAll();
                    };
                };

                // If the user selected a picture, load it
                if(e.target.files[0]){
                    reader.readAsDataURL(e.target.files[0]);
                }
            }, false);

            function text(){
                var str = document.getElementById('enter-text').value
                var col = document.getElementById('text-color').value
                var fam = document.getElementById('fontfam').value
                var s = document.getElementById('style').value
                var text = new fabric.Text(str)
                text.set({fill: col})
                text.set({fontSize: 24})
                text.set({fontFamily: fam})
                text.set({fontStyle: s})
                canvas.centerObject(text)
                canvas.add(text);

            }
            document.getElementById('text-color').oninput = function(){
                canvas.getActiveObject().set("fill", this.value);
                canvas.requestRenderAll();
            }
            document.getElementById('fontfam').onchange = function(){
                canvas.getActiveObject().set("fontFamily", this.value);
                canvas.requestRenderAll();
            }
            document.getElementById('style').onchange = function(){
                canvas.getActiveObject().set("fontStyle", this.value);
                canvas.requestRenderAll();
            }

            // When the user selects a picture that has been added and press the DEL key
            // The object will be removed !
            document.addEventListener("keydown", function(e) {
                var keyCode = e.keyCode;
                console.log(canvas.getActiveObject())
                if(keyCode == 46){
                    console.log("Removing selected element on Fabric.js on DELETE key !");
                    canvas.remove(canvas.getActiveObject());
                }

            }, false);

            function save(){
                domtoimage.toBlob(document.getElementById('card_img')).then(function (blob) {
                    window.saveAs(blob, 'custom.png');
                });
            }

</script>

</body>
</html>