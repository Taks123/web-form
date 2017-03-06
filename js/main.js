function validate() {
if (validateEmail() && validateName()) {
  return true;
}
return false;
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



// function getAge(dateString) {
//     var today = new Date();
//     var birthDate = new Date(dateString);
//     var age = today.getFullYear() - birthDate.getFullYear();
//     var m = today.getMonth() - birthDate.getMonth();
//     if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
//         age--;
//     }
//     return age;
// }
