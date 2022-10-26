<html>
<head>
<title>Register</title>

</head>
<body>
<?php

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    
    //1. connect to the database
 

  // 2. Select a database to use

    
    //3.check if the user found
    $query=mysqli_query($connection,"SELECT * FROM login WHERE username='".$user."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0)
    {
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

    $result=mysqli_query($connection,$sql);
        if($result){
            echo "Account Successfully Created";
            echo "Welcome $user to our website";
      } else {
            echo "Failure!";
      }

       } else {
    echo "That username already exists! Please try again with another.";
    }

} else {
    echo "All fields are required!";
}

?>

</body>
</html>
