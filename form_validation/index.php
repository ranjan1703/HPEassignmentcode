<html>

   <head>
      <title>Form Validation</title>

      <script type="text/javascript">
 
      function validate()
      {

         if( document.myForm.FName.value == "" )
         {
            alert( "Please provide your first name!" );
            document.myForm.FName.focus() ;
            return false;
         }
         if( document.myForm.LName.value == "" )
         {
            alert( "Please provide your last name!" );
            document.myForm.LName.focus() ;
            return false;
         }

         if( document.myForm.EMail.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.EMail.focus() ;
            return false;
         }
         {
            var emailID = document.myForm.EMail.value;
            atpos = emailID.indexOf("@");
            dotpos = emailID.lastIndexOf(".");

            if (atpos < 1 || ( dotpos - atpos < 2 ))
            {
               alert("Please enter correct email ID")
               document.myForm.EMail.focus() ;
               return false;
            }
            return( true );
         }

         if( document.myForm.Age.value == "" ||
         isNaN( document.myForm.Age=e.value ) ||
         document.myForm.Age.value.length != 2 )
         {
            alert( "Please provide age in the format ##." );
            document.myForm.Age.focus() ;
            return false;
         }

         if( document.myForm.date.value == "" )
         {
            alert( "Please provide date of birth!" );
            return false;
         }
         return( true );
      }
   //-->
// </script>
//

   </head>

   <body>
      <form action="" name="myForm" onsubmit="return(validate());">
         <table cellspacing="2" cellpadding="2" border="1">

            <tr>
               <td align="right">First Name</td>
               <td><input type="text" name="FName" /></td>
            </tr>
            <tr>
               <td align="right">Last Name</td>
               <td><input type="text" name="LName" /></td>
            </tr>

            <tr>
               <td align="right">EMail</td>
               <td><input type="text" name="EMail" /></td>
            </tr>

            <tr>
               <td align="right">age</td>
               <td><input type="number" name="Age" /></td>
            </tr>
            <td align="right">DOB</td>
            <td><input type="date" name="date" /></td>



            <tr>
               <td align="right"></td>
               <td><input type="submit" value="Submit" /></td>
            </tr>

         </table>
      </form>

   </body>
</html>
