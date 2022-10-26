<!doctype html>
<html>
<head>
<title>Register</title>
    <style>
        body{
    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    background-color: azure ;
    color: palevioletred;
    font-family: verdana;
    font-size: 100%

        }
            h1 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}
         h2 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
}</style>

</head>
<body>

    <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1></center>
   <p><a href="register.php">Register</a> | <a href="login.php">Login</a></p>
    <center><h2>Registration Form</h2></center>

<form action="registerform.php" method="POST" onsubmit ="return verifyPassword()">
    <legend>
    <fieldset>

Username: <input type="text" name="user"><br />
Password: <input type="password" name="pass" id="pswd"><br />
<input type="submit" value="Register" name="submit" />


        </fieldset>
        </legend>
        <div>
          <p id="message"></p>

        </div>
</form>

</body>
</html>
