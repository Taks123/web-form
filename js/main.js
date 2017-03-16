function validate() {

 var nameError = validateName();
  var emailError = validateEmail();
  var addressError = validateAddress();
  var ageError = getAge();
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
         name= document.getElementsByName("name")[0].value;
         if(name.length>2){
          document.getElementById("nameError").innerHTML= "";
          return true;
         }
        else{
         document.getElementById("nameError").innerHTML=name + "[JS] Please enter your name";
         return false;
        }
       }

function validateEmail(){
mailAddress = document.getElementById("email").value;
 pos1 = mailAddress.indexOf("@");
 pos2 = mailAddress.indexOf(".");
  if (pos1 >= 0 && pos2 >= 0) {
    document.getElementById("emailError").innerHTML = "";
  return true;
  }
  else {
  document.getElementById("emailError").innerHTML = "[JS] Please enter a valid e-mail address!";
  return false;
    }
}

function validateAddress(){
  address = document.getElementById("address").value;

  if (address == "") {
    document.getElementById("addressError").innerHTML = "[JS] Please enter a valid address!";
    return false;
  }else if(address.length <= 2){
    document.getElementById("addressError").innerHTML = "[JS] You address is too short!";
    return false;
  }else if(address.length >= 200){
    document.getElementById("addressError").innerHTML = "[JS] You address is too long!";
    return false;
  }
  else{
    document.getElementById("addressError").innerHTML = "";
    return true;
  }
}

function validateDob(){
  var dob = document.getElementById("dob");
  var calculatedAge = getAge(dob.value);
  document.getElementById("age").value;
  if (calculatedAge != dob || parseInt(dob) >= 150 || parseInt(dob) < 0){
    document.getElementById("ageError").innerHTML = "[JS] Please enter a valid age";
    return false;
  }
  else{
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
function validateAge(){
   age= document.getElementById("age")[0].value;
   if(age =""){
    document.getElementById("ageError").innerHTML= "";
    return true;
   }
  else{
   document.getElementById("ageError").innerHTML="[JS] Please enter your age";
   return false;

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
  document.getElementById("genderError").innerHTML = "[JS] Please select your gender!";
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
  document.getElementById("movieError").innerHTML = "[JS] Please choose a movie!";
  return false;
}
else {
   document.getElementById("movieError").innerHTML ="";
  return true;
}
}
