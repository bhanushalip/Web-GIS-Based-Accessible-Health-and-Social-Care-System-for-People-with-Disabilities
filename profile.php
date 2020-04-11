

<?php
session_start();

$email = $_SESSION['email'];
$query = "select * from user where email_id = '$email'";
include("connect.php");
$res = mysqli_query($connect,$query);
while($row =mysqli_fetch_assoc($res))
{
  $full_name = $row['full_name'];
  $age = $row['Age'];
  $mobile = $row['mobile_no'];
}
?>

<!DOCTYPE html>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<html>
<head>
    <title>Profile</title>



       <style>
.jumbotron-fluid{
  background-image: url('hbackground.jpg');
  background-blend-mode: hard-light;
}
    
</style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center">
    <img style="display: inline;" src="hospital.png" width="125px" height="80px" alt="logo" />


        <h1 style="color:darkcyan; background-color:beige; display: inline;">Health And Social Care System </h1>
</div> 
<br>
<br>
<br><br>
<div>
<img style="display: inline;" src="user.jpg" width="67px" height="50px" alt="logo" />
<h1 style="display: inline;">User Details</h1>
</div>
<div class="jumbotron jumbotron-fluid">
<div class="d-flex justify-content-center align-items-center">
  <form method="post" action ="create_account.php">
          <div class="form-group col-xs-4">
                  <label for="exampleInputName">Full name</label>
                  <input type="text" class="form-control" id="name" name="name" disabled value = '<?php echo $full_name;?>' placeholder="">
              </div>
              <div class="form-group col-xs-4">
                  <label for="exampleInputEmail">Email</label>
                  <input type="text" class="form-control" name="email" id="email" disabled value = '<?php echo $email;?>' placeholder="">
              </div>
              <div class="form-group col-xs-4 pull left">
                  <label for="exampleInputEmail1">Mobile No.</label>
                  <input type="text" class="form-control" id="mobile" disabled name="mobile_no" value = '<?php echo $mobile;?>' placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Age</label>
                <input type="text" class="form-control" id="Age" disabled name="Age" value = '<?php echo $age;?>' placeholder="">
            </div>
            </div>
            </div>

</body>
</html>
