<?php 

include("connect.php");
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $mobile_no = $_POST['mobile_no'];
    $email = $_POST['email'];
    $Age = $_POST['Age'];
    $password = $_POST['password'];
    $query = "select * from user where email_id = '$email' or mobile_no = '$mobile_no'";
    $res = mysqli_query($connect,$query);
    if(mysqli_num_rows($res)>0)
    echo "email id or mobile no already exists";
    else 
    {
        $query2 = "insert into user(email_id,mobile_no,password,full_name,Age) values('$email','$mobile_no','$password','$name','$Age')";
        $res = mysqli_query($connect,$query2);
        echo "<script>alert('New user created successfully');</script>";
        header("refresh:0 ;url=./login.php"); 
    }
}
?>