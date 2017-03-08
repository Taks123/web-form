<?php
//ALL your functions will go inside here
function validateName($name) {
  if(empty($name)) {
    return "Name is required";
  }
}

function validateEmail($email) {
  if(empty($email)) {
    return "An email is required";
  }
}

function validateAddress($address) {
  if(empty($address)) {
    return "An address is required";
  }
}

function validateAge($age) {
  if(empty($age)) {
    return "Age is required";
  }
}

function validateDateOfBirth($dateofbirth) {
  if(empty($dateofbirth)) {
    return "Date of Birth is required";
  }
}

function validateMovie($movie) {
  if($movie == 'movie1') {
    return "Please select a movie";
  }
}

function validateGender($gender) {
  if(empty($gender)) {
    return "Please select a gender";
  }
}


function dd($data)
{
die(var_dump($data));
}


//These do the same function
// function escape($value)
// {
//  return e($value);
// }
//
function e($value)
{
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}


