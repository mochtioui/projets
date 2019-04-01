function verif_formulaire()
{
	
	
	 if(document.myform.id.value == "")  {
   alert("id!");
   document.myform.id.focus();
   return false;
  }
	
 if(document.myform.nom.value == "")  {
   alert("Nom!");
   document.myform.nom.focus();
   return false;
  }


 if(document.myform.desc.value == "")  {
   alert("Description!");
   document.myform.last_name.focus();
   return false;
  }
 if(document.myform.prix.value == "") {
   alert("ERREUR Prix!");
   document.myform.email.focus();
   return false;
  }

 if(document.myform.cat.value == "") {
   alert("ERREUR Categorie!");
   document.myform.country.focus();
   return false;
  }

}
