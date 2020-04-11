<?php 

include("connect.php");
if(isset($_POST['email_id']) && isset($_POST['password']))
{
   
    $email = $_POST['email_id'];
    $password = $_POST['password'];
    $query = "select * from user where email_id = '$email' and password = '$password'";
    $res = mysqli_query($connect,$query);
    if(mysqli_num_rows($res)>0)
    {
        session_start();
        $_SESSION['email'] = $email;

        header("refresh:0 ;url=./a.php"); 

    }
    else 
    {
        echo "<script>alert('Invalid username or password');</script>";
        header("refresh:0 ;url=./login.php"); 
    }
}
?>