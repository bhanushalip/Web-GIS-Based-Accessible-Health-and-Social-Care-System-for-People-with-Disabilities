<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Signup</title>
    <style>
.jumbotron-fluid{
  background-image: url('hbackground.jpg');
  background-blend-mode: hard-light;
}
    </style>
</head>
<body>
        <div class="jumbotron jumbotron-fluid" > 


                 <!-- <div class="d-flex justify-content-center align-items-center">
                        <img src="rait_new.png" alt="" srcset="">
                </div> -->
                <div class="d-flex justify-content-center align-items-center">
                    <img style="display: inline;" src="hospital.png" width="125px" height="80px" alt="logo" />


                        <h1 style="color:darkcyan; background-color:beige; display: inline;">Health And Social Care System </h1>
                </div> 
        
                <div class=""> 
                <div class="d-flex justify-content-center align-items-center">
                        <form method="post" action ="create_account.php">
                                <div class="form-group">
                                        <label for="exampleInputName">Full name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile No.</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile_no" placeholder="Mobile No.">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Age</label>
                                        <input type="text" class="form-control" id="Age" name="Age" placeholder="Age">
                                    </div>
                                
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"> Confirm Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Confirm Password">
                                        </div>
                                
                            
                               
                                
                               
        
                                <div class="text-center">
                                        <button type="submit" class="btn btn-info">Sign Up</button>
                                </div>
        
                                <small id="emailHelp" class="form-text text-muted" style="font-size:medium">Alredy have an account? Log in <a
                                                href="login.php" class="text-info">here</a>.</small>
        
                        </form>
                </div>
        
        
        </div>
</body>
</html>