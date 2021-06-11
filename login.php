<?php
// include('dbcon.php');
$con=mysqli_connect('localhost','root','','test') or die("error");

// echo "gh";
// die();
// if(isset($_POST('submit')))	{
	$name=$_POST['name'];

	$query1="INSERT INTO login VALUES (1,'$name')";
	// echo $query1;
	// die();
	$qry1=mysqli_query($con,$query1)or die("error2");

// }
?>