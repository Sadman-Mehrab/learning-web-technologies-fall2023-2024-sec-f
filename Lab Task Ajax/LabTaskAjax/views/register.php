<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <center>
        <form action="../controllers/registrationCheck.php" method="POST">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend><h3>Register</h3></legend>
                            Name<br/>
                            <input type="text" name="name" id="name" value=""><br/>
                            Phone<br/>
                            <input type="text" name="phone" id="phone" value=""><br/>
                            Email<br/>
                            <input type="email" name="email" id="email" value="" onblur="checkEmail()">
                            <span id="emailCheck" value=""></span>
                            <br/>
                            Password<br/>
                            <input type="password" name="password" id="password" value=""><br/>
                            Confirm Password<br/>
                            <input type="password" name="confirmPassword" id="confirmPassword" value=""><br/>
                            
                    
                            <hr/>
                            <input type="submit" name="submit" value="Submit" onclick="return validate()">
                            
                        </fieldset>
                    </td>
                </tr>                                
            </table>
        </form>
        </center>
        <script>

            function checkEmail(){
                let email = document.getElementById('email').value;
                let emailCheck = document.getElementById('emailCheck');
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../controllers/emailCheck.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        emailCheck.innerHTML = this.responseText;
                    }
                }      

                xhttp.send('email='+email);
            }



            function validate(){
                let name = document.getElementById('name').value;
                let phone = document.getElementById('phone').value;
                let email = document.getElementById('email').value;
                let password = document.getElementById('password').value;
                let confirmPassword = document.getElementById('confirmPassword').value;
                let emailCheck = document.getElementById('emailCheck').innerHTML;
                
                if(name == ""){
                    alert('Name Cannot Be Empty');
                    return false;
                }
                if(phone == ""){
                    alert('Phone Cannot Be Empty');
                    return false;
                }
                if(email == ""){
                    alert('Email Cannot Be Empty');
                    return false;
                }
                if(password == ""){
                    alert('Password Cannot Be Empty');
                    return false;
                }
                if(confirmPassword == ""){
                    alert('Confirm Password Cannot Be Empty');
                    return false;
                }
                if(password != confirmPassword){
                    alert('Password and Confirm Password Should Match');
                    return false;
                }
                if(emailCheck.includes("Not Available")){
                    alert('Email Is Not Available');
                    return false;
                }
                
                return true;
            }
        </script>
</body>
</html>




            