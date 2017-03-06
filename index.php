<?php
require 'includes/functions.php';
// Define variables and set to empty values
$name = $address = $email = $age = $dateofbirth = $movie = $gender ='';
$errors= [];
  // The request is using the POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
// add data from form
$name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $age = $_POST['age'];
  $dateofbirth = $_POST['dateofbirth'];
  $movie = $_POST['movie'];
  $gender = !empty($_POST['gender']) ? $_POST['gender'] : '';


  $errors['name'] = validateName($name);
  $errors['name'] = validateEmail($email);
  $errors['name'] = validateAddress($address);
  $errors['name'] = validateAge($age);
  $errors['name'] = validateDateofBirth($dateofbirth);
  $errors['name'] = validateMovie($movie);
  $errors['name'] = validateGender($gender);
}


require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';
?>
