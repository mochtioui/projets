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


 if(document.myform.description.value == "")  {
   alert("description!");
   document.myform.description.focus();
   return false;
  }
 if(document.myform.prix.value == "") {
   alert("ERREUR prix");
   document.myform.prix.focus();
   return false;
  }
  
   if(document.myform.quantite.value == "") {
   alert("ERREUR quantite");
   document.myform.quantite.focus();
   return false;
  }
  
   if(document.myform.categorie.value == "") {
   alert("ERREUR categorie");
   document.myform.categorie.focus();
   return false;
  }


}
