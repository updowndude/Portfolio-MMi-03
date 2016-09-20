// JavaScript Document

// this script ensures that all the form's fields are filled out
// it also ensures that the email addresses match, preventing typos

//so given by mmi
//simple from validation only if its not empty and two fiels are same
function checkform ( form )
    {
      if (form.nname.value == "") {
        alert( "Please enter your first name." );
        form.nname.focus();
        return false ;
      }
       if (form.email.value == "") {
        alert( "Please enter your e-mail address." );
        form.email.focus();
        return false ;
      }
      if (form.email.value != form.email2.value) {
        alert( "Your e-mail addresses don't match." );
        form.email.focus();
        return false ;
      }
      return true ;
    }
