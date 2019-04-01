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


 if(document.myform.chemin.value == "")  {
   alert("chemin!");
   document.myform.chemin.focus();
   return false;
  }
 if(document.myform.parent.value == "") {
   alert("ERREUR Parent!");
   document.myform.parent.focus();
   return false;
  }


}
