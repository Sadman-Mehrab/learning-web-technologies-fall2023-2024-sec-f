In this task, database named "persondb" and table named "persons" was created. The task follows the MVC architecture. 

Proper validation was implemented using JavaScript with Null Validation, Mismatch of Password and Confirm Password. The validate function returns false if validation fails, else it returns true. 

In the registration form there is a span element that has id of "checkEmail". This element is used to show if the email entered in the registration form is available or not available. This checking of email availability is performed asynchronously using Ajax, where the emailCheck.php checks the database using the  