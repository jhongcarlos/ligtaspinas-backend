<?php
session_start();
$db = mysqli_connect('localhost','root','','ligtaspinas'); 
$result_register = "";
$result_city = "";

// Adding users
if (isset($_POST['adduser'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact_number = $_POST['contact_number'];
	$region = $_POST['region'];
	$city = $_POST['city'];
	$position = $_POST['position'];

	$sql = mysqli_query($db, "INSERT INTO `tblbackend_users` (`id`, `name`, `email`, `contact_number`, `region`, `city`, `position`) VALUES (NULL, '$name', '$email', '$contact_number', '$region', '$city', 'position');");
	$result_register = "<h3 style='padding: 10px; background-color: #99ff99' class='btn btn-dark btn-block'>User Added</h3>";
}
if (isset($_POST['register_city'])) {
	$city = $_POST['city'];
	$region = $_POST['region'];

	$region1 = "";
	$sql = mysqli_query($db, "SELECT * FROM tblregion WHERE regionname = '$region'");
	if ($get = mysqli_fetch_array($sql)) {
		$region1 = $get['id'];
	}

	$insert = mysqli_query($db, "INSERT INTO `tblcity` (`id`, `cityname`, `regionid`) VALUES (NULL, '$city', '$region1');");
	$result_city = "<h3 style='padding: 10px; background-color: #99ff99' class='btn btn-dark btn-block'>City Added</h3>";
}

 ?>