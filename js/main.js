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
// else {
  // document.getElementById('movieError').innerHTML = "Good Choice!";
  return true
}


function validateGender() {
  var genderRadios = document.getElementsByName('gender');
  var genderSelected = false;


  for (var i = 0; i < genderRadios.length; i++) {
    if (genderRadios[i].checked === true){
      genderSelected = true;
    }
  }
  var output = document.getElementById('genderError');
  if (!genderSelected) {
    output.innerHTML = "Please select a gender!";
    return false;
  }
  output.innerHTML = "";
  return true;
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
