<html>


<head>
<title>Login</title>
</head>

<body>
<?php



if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $connection = mysqli_connect('localhost','root','');

  if (!$connection) {
      die('could not connect to the databse');
  }

  // 2. Select a database to use
  $db_select = mysqli_select_db($connection, 'my_db');
  if (!$db_select) {
      die('could not find my_db databse');
  }

//3 check if the user is already exists
    $query=mysqli_query($connection,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");


    $numrows=mysqli_num_rows($query);//retrieve the number of rows from a result
    if($numrows!=0)
    {

    session_start();
    $_SESSION['sess_user']=$user;

    /* Redirect browser */
    header("Location: member.php");
    }


    
    else {
   print "Invalid username or password!, You need to register";
    }
}
    
?>
</body>
</html>
