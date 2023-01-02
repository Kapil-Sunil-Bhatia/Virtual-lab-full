<?php
$page_title = "KJSIT - Edit Profile";
include_once 'partials/headers.php';
include_once 'partials/parseProfile.php';
include_once 'partials/parseDeactivate.php';
?>
<style>
    body{
           background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }
         .container9{
         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
         box-shadow: #000000;
    }
     .col-lg-7{
        border-radius: 1em;
        background-color: #ffffff;
        margin-top: 12em;
        height: 30em;
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

       border: 5px solid #000000;
    }



</style>
<div class="container9">
    <section class="col col-lg-7">
        <h2 style="font-family: 'Poppins'">Deactivate Account </h2>
        <div>
            <?php if(isset($result)) echo $result; ?>
            <?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
        </div>
        <div class="clearfix"></div>

        <?php if(!isset($_SESSION['username'])): ?>
            <P class="lead" style="font-family: 'Poppins'">You are not authorized to view this page <a href="login.php" style="font-family: 'Poppins'">Login</a>
                Not yet a member? <a href="signup.php" style="font-family: 'Poppins'">Signup</a> </P>
        <?php else: ?>
            <!-- Deactivate Account Area -->
            <hr />
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
                <input type="hidden" name="token" value="<?php if(function_exists('_token')) echo _token(); ?>">
                <button onclick="return confirm('Do you really want to deactivate your account?')"
                        type="submit" name="deleteAccountBtn" class="btn btn-danger btn-block pull-right" style="font-family: 'Poppins'">
                    Deactivate Your Account</button> <br />
            </form>
            <br><br>
                  <button style="background-color:#337ab7; color:white; border:none;border-radius: 3px;">  <p style="font-family: 'Poppins';margin-top:0.3em;"><a href="index.php" style="color:white;">Back</a> </p></button> 

        <?php endif ?>
    </section>
 
</div>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>