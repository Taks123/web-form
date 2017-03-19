<?php
//ALL your functions will go inside here
function validateName($name) {
  if (empty($name)) {
    return "Full Name is required";
  }
  if (strlen($name) > 40|| !preg_match("/\s/", $name)) {
   return "Please enter full name";
  }
  if (!preg_match("/^ [a-zA-Z]*$/", $name)) {
    return "How do you pronounce that! Please enter a valid name.";
  }
  else {
    return false;
  }
}

function validateEmail($email) {
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    return "Email is required";
  }
}

function validateAddress($address) {
  if(empty($address)) {
    return "An address is required";
  }
  if (strlen($address) > 200 || !preg_match("/\s/", $address)) {
    return "error too address too long";
  }
  else {
    return false;
  }
}

function validateAge($age) {
  if(empty($age)) {
    return "Age is required";
  }
}

function validateDob($dob) {
  if(empty($dob)) {
    return "Date of Birth is required";
  }
}

function validateGender($gender) {
  if($gender == 'select gender') {
    return "Please select your gender ";
  }
}

function validateMovie($movie) {
  if($movie == 'movie1') {
    return "Please select a movie";
  }
}


function dd($data)
{
die(var_dump($data));
}



function escape($value)
{
 return e($value);
}



