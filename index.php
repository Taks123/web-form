<?php

require 'includes/functions.php';

//define variables and set to empty values
$name = $address = $email = $age = $dateofbirth = $movie = $gender = '';
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
}

require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';

?>






