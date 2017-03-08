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
 $dateofbirth = $_POST['dateofbirth'];


  // // date in mm/dd/yyyy format; or it can be in other formats as well
  // $dateofbirth = "12/12/2012";
  // // //explode the date to get month, day and year
  // $dateofbirth = explode("/", $dateofbirth);
  // //get age from date or birthdate
  // $age = (date("md", date("U", mktime(0, 0, 0, $dateofbirth[0], $dateofbirth[1], $dateofbirth[2]))) > date("md")
  //   ? ((date("Y") - $dateofbirth[2]) - 1)
  //   : (date("Y") - $dateofbirth[2]));
  // echo "Age is:" . $age;


    $age = $_POST['age'];
    $movie = $_POST['movie'];
  $gender = !empty($_POST['gender']) ? $_POST['gender'] : '';


  $errors['name'] = validateName($name);
  $errors['email'] = validateEmail($email);
  $errors['address'] = validateAddress($address);
   $errors['dateofbirth'] = validateDateofBirth($dateofbirth);
   $errors['age'] = validateAge($age);

  $errors['movie'] = validateMovie($movie);
  $errors['gender'] = validateGender($gender);
}

require 'partials/header.php';
require 'partials/form.php';
require 'partials/footer.php';

?>






