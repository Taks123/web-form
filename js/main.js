function validate() {

 var nameError = validateName();
  var emailError = validateEmail();
  var addressError = validateAddress();
  var ageError = validateAge();
  var dobError = validateDob();
  var genderError = validateGender();
  var movieError = validateMovie();

if (nameError && emailError && addressError &&  ageError && dobError && genderError && movieError)
    {
    return true;
  }
    return false;
  }


  function validateName() {
name = document.getElementById('name').value;
 pos1 = name.indexOf(" ");
 pos2 = name.indexOf("@");
 pos3 = name.indexOf(".");
if (pos1 >= 0 && pos2 < 0 && pos3 < 0 && ! parseInt(name)) {
document.getElementById('nameError').innerHTML = "";
return true;
}
  else if(name.length <= 2){
    document.getElementById("nameError").innerHTML = "You name is too short!";
    return false;

  }
  else if(name.length >= 40){
    document.getElementById("nameError").innerHTML = "You name is too long!";
    return false;
}
 else {
         document.getElementById("nameError").innerHTML="Please enter your full name";
         return false;
        }
       }



function validateEmail(){
email = document.getElementById("email").value;
 pos1 = email.indexOf("@");
 pos2 = email.indexOf(".");
  if (pos1 >= 0 && pos2 >= 0 && email.length <= 100) {
    document.getElementById("emailError").innerHTML = "";
  return true;
  }
  else {
  document.getElementById("emailError").innerHTML = "Please enter a valid e-mail address!";
  return false;
    }
}

function validateAddress(){
  address = document.getElementById("address").value;

  if (address == "") {
    document.getElementById("addressError").innerHTML = "Please enter a valid address!";
    return false;
  }else if(address.length <= 2){
    document.getElementById("addressError").innerHTML = "You address is too short!";
    return false;
  }else if(address.length >= 200){
    document.getElementById("addressError").innerHTML = "You address is too long!";
    return false;
  }
  else{
    document.getElementById("addressError").innerHTML = "";
    return true;
  }
}

function validateDob(){
  var dob = document.getElementById("dob").value;
  var calculatedAge = getAge(dob);
  var age= document.getElementById("age").value;
  if (calculatedAge != age || parseInt(age) >= 150 || parseInt(age) < 0){
    document.getElementById("ageError").innerHTML = "Please enter a valid age";
    document.getElementById("dobError").innerHTML = "Please enter a valid date of birth";
    return false;
  }
  else{
    document.getElementById("ageError").innerHTML = "";
    document.getElementById("dobError").innerHTML = "";
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
function validateAge(){
   age= document.getElementById("age").value;
   if(age ==""){
   document.getElementById("ageError").innerHTML="Please enter your age";
   return false;
 }
  else{
   document.getElementById("ageError").innerHTML= "";
    return true;
  }
}

function calculateAge() {
   var dob = document.getElementById("dob");
  var calculatedAge = getAge(dob.value);
  document.getElementById("age").value = calculatedAge;
}

  function validateGender() {
gender = document.getElementById("gender").selectedIndex;
if (gender === 0){
  document.getElementById("genderError").innerHTML = "Please select your gender!";
  return false;
}
else {
   document.getElementById("genderError").innerHTML ="";
  return true;
}
}



function validateMovie(){
movie = document.getElementById("movie").selectedIndex;
if (movie === 0){
  document.getElementById("movieError").innerHTML = "Please choose a movie!";
  return false;
}
else {
   document.getElementById("movieError").innerHTML ="";
  return true;
}
}

function clearForm(){
document.getElementById("form").reset();
clearName()
clearEmail()
clearAddress()
clearDob()
clearAge()
clearGender()
clearMovie()
}
function clearName(){
  document.getElementById("nameError").innerHTML="";
}
function clearEmail(){
  document.getElementById("emailError").innerHTML="";
}
function clearAddress(){
  document.getElementById("addressError").innerHTML="";
}
function clearDob(){
  document.getElementById("dobError").innerHTML="";
}
function clearAge(){
  document.getElementById("ageError").innerHTML="";
}
function clearGender(){
  document.getElementById("genderError").innerHTML="";
}
function clearMovie(){
  document.getElementById("movieError").innerHTML="";
}
