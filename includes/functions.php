<?php
// All you functions will go inside this file
function validateName ($name)
if(empty($name)){
  return "Name is required"
}
}
function validateEmail ($email)
if(empty($email)){
  return "Email is required"
}
}
function validateAddress ($address)
if(empty($address)){
  return "Address is required"
}
}
function validatedateofbirth ($dateofbirth)
if(empty($dateofbirth)){
  return "Date of Birth is required"
}
}
function validateAge ($age)
if(empty($age)){
  return "Age is required"
}
}
function validateGender ($gender)
if(empty($gender)){
  return "Gender is required"
}
}
function validateMovie ($movie)
if(empty($movie)){
  return "Favourite movie is required"
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
