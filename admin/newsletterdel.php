<?php

	ob_start();
    $conn = new mysqli("localhost","root",'Adbr4461',"hotel_db");
      //Check if Connection is successful
      if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error."<br>");
      }
      else{
        echo "Succeful Connection!<br>";
      }
    ob_end_clean();

$id=$_GET['eid'];
if($id=="")
{
echo '<script>alert("Sorry ! Wrong Entry") </script>' ;
		header("Location: messages.php");


}

else{
$view="DELETE FROM `contact` WHERE id ='$id' ";

	if($re = mysqli_query($conn,$view))
	{
		echo '<script>alert("News Letter Subscriber Remove") </script>' ;
		header("Location: messages.php");
	}


}







?>