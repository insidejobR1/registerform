<?php
error_reporting(0);
 include('config0.php');

// Escape user inputs for security
if(isset($_POST['submit'])){
	$username = $_POST['name'];
	$email = $_POST['email'];
    $psw = $_POST['psw'];
    $con = $_POST['contact'];
    $gen = $_POST['gender'];
    $add = $_POST['add'];
    
    $hby = $_POST['service'];
	$cont = $_POST['country'];
    $std = $_POST['state'];
    $city = $_POST['city'];


	//echo "data is taken";
	// $sql = "INSERT INTO ragister_form (name, email, password, contact, gender, address, image, hobby, country, state, city) VALUES ('$username', '$email', '$psw', '$con', '$gen', '$add', '$img', '$hby', '$cont', '$std', '$city')";
// 	if ($conn->query($sql) === TRUE) {
// 	  echo "New record created successfully";
// 	} 
// 	else {
// 	  echo "Error: " . $sql . "<br>" . $conn->error;
// 	}
// }

$name = $_FILES['img']['name'];
$temp_name = $_FILES['img']['temp_name'];

$path ="images/".$name;

move_uploaded_file($temp_name,$path);
// $quer = mysqli_query($conn,"INSERT INTO `ragister_form`(`name`, `email`, `password`, `contact`, `gender`,`address`,`image`,`hobby`,`country`,`state`,`city`) VALUES ('$username','$email','$psw','$con','$gen','$add','$img','$hby','$cont','$std','$city')");

$sql =mysqli_query($conn,"INSERT INTO `ragister_form`(`name`, `email`, `password`, `contact`, `gender`,`address`,`image`,`hobby`,`country`,`state`,`city`) VALUES ('$username','$email','$psw','$con','$gen','$add','$path','$hby','$cont','$std','$city')");

$row = mysqli_num_rows($sql);


if($sql===TRUE)
{

	echo"inserted";
}


// $sql1 = "UPDATE ragister_form SET name ='$username' , email=$email where id=$id";

}


?>
