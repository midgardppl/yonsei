<?php
 $db = mysqli_connect('localhost','root','','yonseicoop');
 if(!$db)
 {
 echo "Database connection failed";
 }
 $username = $_POST['username'];
 $password = $_POST['password'];
 $sql = "INSERT INTO users VALUES ('".$username."', '".$password."')";

 $result = mysqli_query($db,$sql);
 $count = mysqli_num_rows($result);

 if($count == 1){
 	echo json_encode("Success");
 } 
 else{
 	echo json_encode("Error");
 }

?>