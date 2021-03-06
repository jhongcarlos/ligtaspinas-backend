<?php
session_start();
$db = mysqli_connect('localhost','root','','ligtaspinas'); 
$result_register = "";
$result_city = "";
$result_evacuation = "";
$res_delete_evacuation = "";
$result_announcement = "";
$result_ads = "";

// Adding users
if (isset($_POST['adduser'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact_number = $_POST['contact_number'];
	$region = $_POST['region'];
	$city = $_POST['city'];
	$position = $_POST['position'];
	$password = $_POST['password'];

	$sql = mysqli_query($db, "INSERT INTO `tblbackend_users` (`id`, `name`, `email`, `contact_number`, `region`, `city`, `position`) VALUES (NULL, '$name', '$email', '$contact_number', '$region', '$city', 'position','$password');");
	$result_register = "<h3 style='padding: 10px; background-color: #99ff99' class='btn btn-dark btn-block'>User Added</h3>";
}

// City registration
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

// Add evacuation
if (isset($_POST['addevacuation'])) {
	$location = $_POST['location'];
	$description = $_POST['description'];

	$sql = mysqli_query($db, "INSERT INTO `tblevacuationcenter` (`id`, `brgyid`, `location`, `description`, `latitude`, `longitude`) VALUES (NULL, '0', '$location', '$description', '0', '0');");
	$result_evacuation = "<h3 style='padding: 10px; background-color: #99ff99' class='btn btn-dark btn-block'>Evacuation center Added</h3>";
}
// Delete evacuation
if (isset($_POST['delete_evacuation'])) {
	$id = $_POST['id'];
	$sql = mysqli_query($db, "DELETE FROM tblemergencycontact WHERE id = '$id'");
	$res_delete_evacuation = "<h3 style='padding: 10px; background-color: #99ff99' class='btn btn-dark btn-block'>Emergency Contact Deleted</h3>";
}

// First step
if (isset($_POST['update_evac_second'])) {
	$update_contact = $_POST['update_contact'];
	$update_number = $_POST['update_number'];

	header('Location: emergency_contact.php');
}

// Annoouncement
if (isset($_POST['announce'])) {
	$txt_announce = $_POST['txt_announce'];

	$time = date('h:i:s');
	$date = date('Y-m-d');

	$sql = mysqli_query($db, "INSERT INTO `tblalertmsg` (`id`, `brgyid`, `message`, `time`, `date`, `AMPM`) VALUES (NULL, '0', '$txt_announce', '$time', '$date', 'AM');");
	$result_announcement = "<h3 style='padding: 10px; background-color: #99ff99;margin-bottom:10px' class='btn btn-dark btn-block'>Announced successfully</h3>";
}

// Add Advertisement
if (isset($_POST['add_advertisement'])) {
	$company = $_POST['company'];
	$price = $_POST['price'];
	$link = $_POST['link'];

	$image = $_FILES['file']['tmp_name'];
    $get = file_get_contents($image);
    $data = base64_encode($get);

    $sql = mysqli_query($db, "INSERT INTO `tbladvertisement` (`id`, `company`, `price`, `image`, `link`) VALUES (NULL, '$company', '$price', '$data', '$link');");
    $result_ads = "<h3 style='padding: 10px; background-color: #99ff99;margin-bottom:10px' class='btn btn-dark btn-block'>Advertiser Added</h3";
    $_SESSION['lp_company'] = $company;
    header('Location: setup_payment.php');
}
// Login
if (isset($_POST['login'])) {

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

    $query = "SELECT * FROM tblbackend_users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
       $_SESSION['lp_email'] = $email;
       header('location: index.php');
    }
  }
 ?>