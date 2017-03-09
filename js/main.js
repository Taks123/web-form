function validate() {

 validateName();
   validateEmail();
    validateAddress();
    //  validateAge();
     validateMovie();
      validateGender();

  return false;
  document.getElementById('submitForm').submit();
}

  function validateName() {
         name= document.getElementsByName('name')[0].value;
         if(name.length>2){
       // fullName + "is a valid name!";
          document.getElementById('nameError').innerHTML=name + " " + " "
          return true;
         }
        else{
         // fullName + "is not a valid name!";
         document.getElementById('nameError').innerHTML=name + " " + "Please enter your name"
         return false;
        }
       }
function validateEmail(){

 mailAddress = document.getElementById('email').value;
 pos1 = mailAddress.indexOf("@");
 pos2 = mailAddress.indexOf(".");
  if (pos1 >= 0 && pos2 >= 0) {
// alert(mailAddress + "is a valid e-mail address!"); }
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

// function validateDateofbirth(){
// var valueDate = document.getElementById('dateofbirth').value;

// if(!Date.parse(valueDate)){
//  document.getElementById('dateofbirthError').innerHTML = "";
//     return true;
//   }
//   else
//   {
//     document.getElementById('dateofbirthError').innerHTML = dateofbirth + "Please enter Date Of Birth!";
//     return false;
//   }
// }


function validateGender() {
    var radios = document.getElementsByName("gender");
    var formValid = document.getElementById('genderError').innerHTML = '';

    var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) form= true;
        i++;
    }

    if (!formValid) document.getElementById("genderError").innerHTML = 'Please select your gender';
    return formValid;
}

function validateMovie(){
movie = document.getElementById('movie').selectedIndex;
if (movie == 0){
  document.getElementById('movieError').innerHTML = "Please choose a movie!";
  return false;
}
else {
  document.getElementById('movieError').innerHTML = "Good Choice!";
  return true;
}
}



// function validateAge(dateString) {
//     var today = new Date();
//     var birthDate = new Date(dateString);
//     var age = today.getFullYear() - birthDate.getFullYear();
//     var m = today.getMonth() - birthDate.getMonth();
//     if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
//         age--;
//     }
//     return age;
// }

// function validateDateofbirth() {
//   var dob = document.getElementById('dateofbirth');
//   document.getElementById('ageOutput').innerHTML = "validateAge(dob.value)";
// }
