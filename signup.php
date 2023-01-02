<?php
$page_title = "KJSIT - Register Page";
include_once 'partials/headers.php';
include_once 'partials/parseSignup.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    body{
         background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }
    .container2{

         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
     .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        margin-top: 12em;
        height: 38em;
       border: 5px solid #9b2928;
         box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
footer {
    display: flex;
 justify-content: space-evenly;
 height: 5rem;
position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
  padding: 3px;
  background-color: #9b2928;
  color: white;
}

</style>
<div class="container2">
    <section class="col col-lg-7">
        <h2 style="font-family: 'Poppins';color:#9b2928; font-weight:bold; text-align:center">Registration Form </h2><hr>
        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>

        <form action="" method="post">
            <div class="form-group">
                <label for="emailField" style="font-family: 'Poppins';color:#9b2928; font-weight:bold; font-size:x-large">Email Address</label>
                <input type="text" class="form-control" name="email" id="emailField" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="usernameField" style="font-family: 'Poppins';color:#9b2928; font-weight:bold; font-size:x-large">Username</label>
                <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
            </div>

             <div class="form-group">
                <label for="DepartmentField" style="font-family: 'Poppins';color:#9b2928; font-weight:bold; font-size:x-large">Department</label>
                <input type="text" class="form-control" name="Department" id="DeparmentField" placeholder="Department">
            </div>

            <div class="form-group">
                <label for="passwordField" style="font-family: 'Poppins';color:#9b2928; font-weight:bold; font-size:x-large">Password</label>
                <input type="password" name="password" class="form-control" id="passwordField" placeholder="Password">
            </div>
            
            <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
            <button type="submit" name="signupBtn" class="btn btn-primary pull-right" style="font-family: 'Poppins';width: 9em;">Signup</button>
        </form>
         <button style="background-color:#337ab7; color:#9b2928; border:none;border-radius: 3px;width: 9em;">  <p style="font-family: 'Poppins';margin-top:0.3em;"><a href="index.php" style="color:white;">Back</a> </p></button> 
    </section>
 
</div>
<br>
<footer>





    <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Guided by: Prof. Jyoti Wadmare</p>
  
    <p style="font-family: 'Poppins';color:white;;margin-bottom: 0px;margin-top: 10px; font-size:large">Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
 
</footer>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>

