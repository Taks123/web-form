<?php
require 'includes/functions.php';
//define variables and set to empty values
$name = $address = $email = $age = $dob = $movie = $gender = '';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
//Add data from form
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$movie = $_POST['movie'];

$gender = !empty($_POST['gender']) ? $_POST['gender'] : '';
$errors['name'] = validateName($name);
$errors['email'] = validateEmail($email);
$errors['address'] = validateAddress($address);
$errors['dob'] = validateDob($dob);
$errors['age'] = validateAge($age);
$errors['movie'] = validateMovie($movie);
$errors['gender'] = validateGender($gender);

if(!$errors['name'] && !$errors['address'] && !$errors['email'] && !$errors['dob'] && !$errors['gender'] && !$errors['movie'] &&!$errors['age']){
	$formcontent=" From: $name \n Email: $email \n Message: $address";
	$recipient = "Daniel.Urlwin@visioncollege.ac.nz";
	$subject= "Web-Form";
	$mailheader= "From: $email \r\n";
	mail ($recipient, $subject, $formcontent, $mailheader) or die ("error");
	require 'partials/thanks.php';
	die();
}
}
require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';
?>


