<?php
$page_title = "KJSIT - Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
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
      .container3{
         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
     .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        width: 50em;
      border: 5px solid #9b2928;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

    }footer {
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
  
<div class="container3">
    <div>
        <h1 style="margin-top:2em ; font-weight:bold; color:#9b2928;" >Profile</h1>
        <?php if(!isset($_SESSION['username'])): ?>
        <P class="lead" style="font-family: 'Poppins'; font-size:x-large">You are not authorized to view this page <strong><a href="login.php" style="font-family: 'Poppins'">Login</a></strong><br>
            Not yet a member? <strong><a href="signup.php" style="font-family: 'Poppins'">Signup</a></strong> </P>
        <?php else: ?>
            <section class="col col-lg-7">

                <div class="row col-lg-3" style="margin-bottom: 10px;">
                    <img src="<?php if(isset($profile_picture)) echo $profile_picture; ?>" class="img img-rounded" width="100" height="100" style="border-radius: 50%;"/>
                </div>

                <table class="table table-bordered table-condensed">
                    <tr><th style="width: 20%;font-family: 'Poppins'; color:#9b2928;">Username:</th><td style="font-family: 'Poppins'; color:#9b2928"><?php if(isset($username)) echo $username; ?></td></tr>
                    <tr><th style="font-family: 'Poppins'; color:#9b2928;">Email:</th><td style="font-family: 'Poppins'; color:#9b2928"><?php if(isset($email)) echo $email; ?></td></tr>
                    <tr><th style="font-family: 'Poppins'; color:#9b2928;">Date Joined:</th><td style="font-family: 'Poppins'; color:#9b2928"><?php if(isset($date_joined)) echo $date_joined; ?></td></tr>
                    <tr><th></th><td>
                            <a class="" style="color:#9b2928;" href="edit-profile.php?user_identity=<?php if(isset($encode_id)) echo $encode_id; ?>">
                                <span class="glyphicon glyphicon-edit"></span style="font-family: 'Poppins';color:#9b2928">Edit Profile</a> &nbsp; &nbsp;
                            <a class="" style="color:#9b2928;" href="update-password.php?user_identity=<?php if(isset($encode_id)) echo $encode_id; ?>">
                                <span class="glyphicon glyphicon-edit"></span style="font-family: 'Poppins';color:#9b2928">Change Password</a> &nbsp; &nbsp;
                            <a class="pull-right alert-warning" style="color:black" href="deactivate-account.php?user_identity=<?php if(isset($encode_id)) echo $encode_id; ?>">
                                <span class="glyphicon glyphicon-trash"></span style="font-family: 'Poppins';color:#9b2928"> Deactivate Account</a>
                        </td></tr>
                </table>
            </section>
        <?php endif ?>
    </div>
</div>
<footer>

    <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Guided by: Prof. Jyoti Wadmare</p>
  
    <p style="font-family: 'Poppins';color:white;;margin-bottom: 0px;margin-top: 10px; font-size:large">Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
 
</footer>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>

