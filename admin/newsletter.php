<?php

ob_start();
$conn = new mysqli("localhost","root",'keith7053$me$',"hotel_db");
  //Check if Connection is successful
  if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error."<br>");
  }
  else{
	echo "Succeful Connection!<br>";
  }
ob_end_clean();

$eid = $_GET['eid'];
$approval ="Allowed";
$napproval="Not Allowed";

$view="select * from contact where id = '$eid' ";
$re = mysqli_query($con,$view);
while ($row=mysqli_fetch_array($re))
{
	$id =$row['approval'];

}

if($id=="Not Allowed")
{
	$sql ="UPDATE `contact` SET `approval`= '$approval' WHERE id = '$eid' ";
	if(mysqli_query($con,$sql))
	{
		echo '<script>alert("New Room Added") </script>' ;
		header("Location: messages.php");
	}
}
else {
$sql ="UPDATE `contact` SET `approval`= '$napproval' WHERE id = '$eid' ";
	if(mysqli_query($con,$sql))
	{
		echo '<script>alert("New Room Added") </script>' ;
		header("Location: messages.php");
	}



}
?>