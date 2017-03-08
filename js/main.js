function validate() {
if (validateEmail() && validateName() && validateAddress() && validateDateOfBirth() && validateAge() && validateMovie() && validateGender()) {
  return true;
}
return false;
}
   function validateName() {
         fullName= document.getElementsByName('name')[0].value;
         if(fullName.length>2){
       // fullName + "is a valid name!";
          document.getElementById('nameError').innerHTML=fullName + " " + "is a valid name"
          return true;
         }
        else{
         // fullName + "is not a valid name!";
         document.getElementById('nameError').innerHTML=fullName + " " + "is not a valid name"
         return false;
        }
       }

       function validateEmail(){
   mailAddress = document.getElementById('email').value;
         pos1 = mailAddress.indexOf("@");
         pos2 = mailAddress.indexOf(".");
        if (pos1 >= 0 && pos2 >= 0) {
        document.getElementById('emailError').innerHTML=mailAddress + "This is a valid e-mail address!";
             return true;
         }
         else {
            document.getElementById('emailError').innerHTML=mailAddress + "This is NOT a valid e-mail address!"; return false;
         }
 }
      function validateAddress(){
Address = document.getElementById('address').value;
pos1 = Address.indexOf("");
 Address.length=>200;

   document.getElementById('addressError').innerHTML=Address + "This is a valid address!";
             return true;
         }
         else {
            document.getElementById('addressError').innerHTML=Address + "This is NOT a valid address!"; return false;
         }
 }
// function validateAge (){


function validateMovie(){
  movie = document.getElementById('movie');
  if (movie.selectedIndex == 0){
    document.getElementById('movieError').innerHTML = "Please choose a movie!";
    return false
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


