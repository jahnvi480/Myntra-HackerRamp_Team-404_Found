
<?php
include 'databaseconnect.php';

if(isset($_POST['id']))
{
	$id = $_POST['id'];
	$_SESSION['id'] = $id;


}
else{
	echo "bye";
}
?>