<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
    <style>
        .jumbotron{
  background-image: url('hbackground.jpg');
  background-blend-mode: hard-light;
  background-size: cover;
  
}
    </style>

</head>
<body>
        <div class="jumbotron">


                <!-- <div class="d-flex justify-content-center align-items-center">
                    <img src="rait_new.png" alt="" srcset="">
                </div> -->
                <div class="d-flex justify-content-center align-items-center">
                    <img style="display: inline;" src="hospital.png" width="125px" height="80px" alt="logo" />


                        <h1 style="color:darkcyan; background-color:beige; display: inline;">Health And Social Care System </h1>
                </div> 
            
            
                <div class="d-flex justify-content-center align-items-center">
                    <form action="check_login.php" method="post">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="username" name="email_id" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
            
                        <div class="text-center">
                            <button type="submit" class="btn btn-info" onclick="location.href = 'a.html'">Login</button>
                        </div>
                        
            
                       
                        
                        <small id="emailHelp" class="form-text text-muted" style="">Don't have an account yet? Sign up <a
                                href="signup.php" class="text-info">here</a>.</small>
            
                    </form>
                </div>
            
            
            </div>
</body>
</html>