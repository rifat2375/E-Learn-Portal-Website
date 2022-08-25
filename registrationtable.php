<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="registration";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['submit']))
{	
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
     $date_of_birth = $_POST['date'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $phone = $_POST['phone'];
	 $gender = $_POST['gender'];
     $country = $_POST['country'];
     $university = $_POST['University'];
     $dept = $_POST['Department'];
	 $hobby = $_POST['hobby'];
     $about = $_POST['about'];

	 $sql_query = "INSERT INTO registrationtable (first_name,last_name,date_of_birth,email,pass,phn,gender,country,university,dept,hobby,about)
	 VALUES ('$first_name','$last_name','$date_of_birth','$email','$password','$phone','$gender','$country','$university','$dept','$hobby','$about')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>