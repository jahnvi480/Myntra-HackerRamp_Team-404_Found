 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
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
    foreach ($q as $value)
    {
    	?>
    	<img src="<?php echo $value; ?>" style="width:100px;">
    <?php
}
}
else{
	echo "not found";
}
?>
 
 </body>
 </html>

 