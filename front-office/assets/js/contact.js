function verif_formulaire()
{

  if(document.myform.first_name.value == "")  {
    alert("ERREUR first_name !");
    document.myform.first_name.focus();
    return false;
   }
 if(document.myform.last_name.value == "")  {
   alert("ERREUR last_name !");
   document.myform.last_name.focus();
   return false;
  }
 if(document.myform.email_address.value == "") {
   alert("ERREUR Email!");
   document.myform.email_address.focus();
   return false;
  }


 if(document.myform.message.value == "") {
   alert("ERREUR write something !");
   document.myform.message.focus();
   return false;
  }



}
