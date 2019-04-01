function verif_formulaire()
{

  if(document.myform.nom.value == "")  {
    alert("ERREUR first_name !");
    document.myform.nom.focus();
    return false;
   }
 if(document.myform.prenom.value == "")  {
   alert("ERREUR last_name !");
   document.myform.prenom.focus();
   return false;
  }
 if(document.myform.email.value == "") {
   alert("ERREUR Email!");
   document.myform.emails.focus();
   return false;
  }


 if(document.myform.message.value == "") {
   alert("ERREUR write something !");
   document.myform.message.focus();
   return false;
  }



}
