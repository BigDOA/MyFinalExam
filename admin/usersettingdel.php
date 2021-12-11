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

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `login` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
							
						
				}
			header("Location: usersetting.php");
		
?>


