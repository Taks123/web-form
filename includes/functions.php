<?php
// All you functions will go inside this file
function validateName($name) {
  if (empty($name)) {
    return "Name is required";
  }
  if (strlen($name) > 40 || !preg_match("/\s/", $name)) {
    return "Please enter full name";
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
    return "Please enter full name";
  }
  else {
    return false;
  }
}
function validatedateofbirth ($dateofbirth){
if(empty($dateofbirth)){
  return "Date of Birth is required";
}
}
function validateAge ($age){
if(empty($age)){
  return "Age is required";
}
}
function validateGender ($gender){
if(empty($gender)){
  return "Gender is required";
}
}
function validateMovie ($movie){
if(empty($movie)){
  return "Favourite movie is required";
}
}


function dd($data){

}

function escape($value){
return e($value);
}
// THIS IS THE SAME AS ABOVE
 // function e($value)
// {
//   return htmlspecialchars($value, ENT_QUOTES, 'utf-8');
// }
