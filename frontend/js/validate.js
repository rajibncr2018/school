//<script type="text/javascript">
function validate()
{ 
   if( document.StudentRegistration.class.value == "-1" )
   {
     alert( "Please select the class for admission!" );
     document.StudentRegistration.class.focus() ;
     return false;
   }
   if( document.StudentRegistration.CandName.value == "" )
   {
     alert( "Please provide Candidate Name!" );
     document.StudentRegistration.CandName.focus() ;
     return false;
   }
   if ( ( StudentRegistration.sex[0].checked == false ) && ( StudentRegistration.sex[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }
   if( document.StudentRegistration.FN.value == "" )
   {
     alert( "Please provide your Father Name!" );
     document.StudentRegistration.FN.focus() ;
     return false;
   }
   if( document.StudentRegistration.MN.value == "" )
   {
     alert( "Please provide your Mother Name!" );
     document.StudentRegistration.MN.focus() ;
     return false;
   }
   
   if( document.StudentRegistration.PresentAdd.value == "" )
   {
     alert( "Please provide your Present Address!" );
     document.StudentRegistration.PresentAdd.focus() ;
     return false;
   }
   if( document.StudentRegistration.PresentPin.value == "" ||
           isNaN( document.StudentRegistration.PresentPin.value) ||
           document.StudentRegistration.PresentPin.value.length != 6 )
   {
     alert( "Please provide a pincode in the format ######." );
     document.StudentRegistration.PresentPin.focus() ;
     return false;
   } 
   if( document.StudentRegistration.mobileno.value == "" ||
           isNaN( document.StudentRegistration.mobileno.value) ||
           document.StudentRegistration.mobileno.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123." );
     document.StudentRegistration.mobileno.focus() ;
     return false;
   }   
   if( document.StudentRegistration.Nationality.value == "" )
   {
     alert( "Please provide your Nationality!" );
	 document.StudentRegistration.Nationality.focus() ;  
     return false;
   }
   if( document.StudentRegistration.DOB.value == "" )
   {
     alert( "Please provide your DOB!" );
     document.StudentRegistration.DOB.focus() ;
     return false;
   }  
   if( document.StudentRegistration.State.value == "-1" )
   {
     alert( "Please provide your Select State!" );
     document.StudentRegistration.State.focus() ;
     return false;
   }
 var email = document.StudentRegistration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.emailid.focus() ;
     return false;
 }
   return( true );
}
//</script>
