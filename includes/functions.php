<?php
//ALL your functions will go inside here
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


function validateDob($dob) {
    if (empty($dob)) {
        return 'Date of Birth is required.';
    }

    if (!checkDateManually($dob)) {
        return 'Please enter a correct Date of Birth.';
    }

    if (DateTime::createFromFormat('Y-m-d', $dob)) {
        $dob = DateTime::createFromFormat('Y-m-d', $dob);
    }
    else if (DateTime::createFromFormat('Y/m/d', $dob)) {
        $dob = DateTime::createFromFormat('Y/m/d', $dob);
    }
    else if (DateTime::createFromFormat('d-m-Y', $dob)) {
        $dob = DateTime::createFromFormat('d-m-Y', $dob);
    }
    else if (DateTime::createFromFormat('d/m/Y', $dob)) {
        $dob = DateTime::createFromFormat('d/m/Y', $dob);
    }
    else {
        return 'Please enter a correct Date of Birth.';
    }

    $time = new DateTime('now');
    $today = new DateTime('now');

    $date150YearsAgo = DateTime::createFromFormat('Y-m-d', $time->modify('-150 Year')->format('Y-m-d'));

    $chosenDate = $date->format('Y-m-d');
    $chosenDay = $date->format('d');
    $chosenMonth = $date->format('m');
    $chosenYear = $date->format('Y');
    $todaysDate = $today->format('Y-m-d');
    $minDate = $date150YearsAgo->format('Y-m-d');

    if ($chosenDate <= $minDate){
        return 'We really don\'t think you were born more than 150 years ago.';
    }
    else if ($chosenDate >= $todaysDate){
        return 'You cannot be born after today.';
    }
    else if (!checkdate($chosenMonth, $chosenDay, $chosenYear)) {
        return 'Please enter a correct Date of Birth.';
    }

    return false;
}

function checkDateManually($date) {
    $dateArray = [];

    if(strpos($date, '/') !== false) {
        $dateArray = explode("/", $date);
    }
    else if(strpos($date, '-') !== false){
        $dateArray = explode("-", $date);
    }

    if (empty($dateArray)) {
        return false;
    }

    if($dateArray && count($dateArray) === 3 && (int)$dateArray[0] > 0 && (int)$dateArray[1] > 0 && (int)$dateArray[2] > 0) {
        if (checkdate($dateArray[1], $dateArray[2], $dateArray[0])) {
            return true;
        } else if (checkdate($dateArray[1], $dateArray[0], $dateArray[2])) {
            return true;
        }
        return false;
    }

    return false;
}

