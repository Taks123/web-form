function validate() {

 var nameError = validateName();
  var emailError = validateEmail();
  var addressError = validateAddress();
  var ageError = getAge();
  var dobError = validateDob();
  var genderError = validateGender();
  var movieError = validateMovie();

  if (!nameError && !emailError && !addressError &&  !ageError && !dobError && !genderError && !movieError)
  {
  return false;
}
  return true;
}

  function validateName() {
         name= document.getElementsByName('name')[0].value;
         if(name.length>2){
       // fullName + "is a valid name!";
          document.getElementById('nameError').innerHTML=name + " " + " " ;
          return true;
         }
        else{
         // fullName + "is not a valid name!";
         document.getElementById('nameError').innerHTML=name + " " + "Please enter your name";
         return false;
        }
       }

function validateEmail(){
mailAddress = document.getElementById('email').value;
 pos1 = mailAddress.indexOf("@");
 pos2 = mailAddress.indexOf(".");
  if (pos1 >= 0 && pos2 >= 0) {
  document.getElementById('emailError').innerHTML = mailAddress + " ";
  return true;
  }
  else {
  document.getElementById('emailError').innerHTML = mailAddress + "Please enter a valid e-mail address!";
  return false;
    }
}

function validateAddress(){
  address = document.getElementById('address').value;
  pos1 = address.indexOf(' ');

  if (pos1 >= 0 && address.length < 200) {

    document.getElementById('addressError').innerHTML = "";
    return true;
  }
  else
  {
    document.getElementById('addressError').innerHTML = address + "Please enter a valid address!";
    return false;
  }
}

function validateDob(){
  var dob = document.getElementById('dob');
  var calculatedAge = getAge(dob.value);
  document.getElementById('age').value;
  if (calculatedAge != dob || parseInt(dob) >= 150 || parseInt(dob) < 0){
    document.getElementById("ageError").innerHTML = "Please enter a valid age";
    return false;
  }
  else
  {
    document.getElementById("ageError").innerHTML = "";
    return true;
  }
}


function getAge(dob) {
  var today = new Date();
  var birthDate = new Date(dob);
  var age = today.getFullYear() - birthDate.getFullYear();
  var m = today.getMonth() - birthDate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
    age--;
  }
  return age;
}


function calculateAge() {
   var dob = document.getElementById('dob');
  var calculatedAge = getAge(dob.value);
  document.getElementById('age').value = calculatedAge;
}

// function validateGender() {
// //     if(document.getElementById('gender_Male').checked) {

// // }
// // else if(document.getElementById('gender_Female').checked) {

// // }
// //  return ($('input[type=radio]:checked').size() > 0);
// //     }
function validateGender() {
  var radios = document.getElementsByName("gender");
  var formValid = false;
  document.getElementById('genderError').innerHTML = '';

  var i = 0;
  while (!formValid && i < radios.length) {
    if (radios[i].checked) formValid = true;
    i++;
  }

  if (!formValid) document.getElementById("genderError").innerHTML = 'Please choose an answer!';
  return formValid;
}



function validateMovie(){
movie = document.getElementById('movie').selectedIndex;
if (movie === 0){
  document.getElementById('movieError').innerHTML = "Please choose a movie!";
  return false;
}
else {
  document.getElementById('movieError').innerHTML = "Good Choice!";
  return true;
}
}
