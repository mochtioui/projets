
function check(form)
{
 if(form.email.value == "ahmedomar.miladi@esprit.tn" && form.password.value == "123456")
  {
 self.location.href = 'index.html';  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
