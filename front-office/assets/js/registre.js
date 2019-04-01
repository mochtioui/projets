function verif_formulaire()
{


 if(document.myform.nom.value == "")  {
   alert("ERREUR name !");
   document.myform.last_name.focus();
   return false;
  }
 if(document.myform.email.value == "") {
   alert("ERREUR Email!");
   document.myform.email.focus();
   return false;
  }





 if(document.myform.password.value == "") {
   alert("ERREUR password !");
   document.myform.password.focus();
   return false;
  }



}
