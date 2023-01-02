<?php
$page_title = "KJSIT - Homepage";
include_once 'partials/headers.php';
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
  /* *{
    background: rgba(0,0,0,0);
  }   */
    body{
      
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }
   .flag{
    height:30em;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
border: 5px solid #9b2928;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;

    margin-top: 12em;
    background-color: snow;
    
   }
.container{
  margin-right:0;
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

<div class="container" style="z-index: 1 ;">
  
    <div class="flag">
        <h1 style="color:#9b2928;" ><strong style="font-family: 'Noto Serif';font-style: ITALIC;color:#9b2928; font-size:180%">Welcome To Virtual Lab of Operating System</strong></h1>
<br>
        <?php if(!(isset($_SESSION['username']))): ?>
            <P class="lead">
<h3 style="font-family: 'Poppins';color:white;font-size:200%;"> <button style="background-color:#9b2928; border:none; padding:10px; border-radius: 10px ;width:5em"> <a href="login.php" style=" color:#ffffff">Login</h3></a></button></P>
              <P class="lead"> 
<h3 style="font-family: 'Poppins';color:white;font-size:200%; text-decoration:none"> <button style="background-color:#9b2928; border:none; padding:10px; border-radius: 10px ;width:5em"><a href="signup.php" style=" color:#ffffff"> Signup</h3></a></button>  </P>
        <?php else: ?>
            <p style="font-family: 'Poppins';color:#9b2928;font-size:200%; text-decoration:none" class="lead">You are logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?>
               <br><br><button style="background-color:#9b2928;color:white; border:none;border-radius: 10px; width: 5em; "> <a style=" color:#ffffff" href="logout.php">Logout</a> </p></button>
        <?php endif ?>
    </div>
</div>
<footer>





    <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Guided by:  Prof. Jyoti Wadmare</p>
  
    <p style="font-family: 'Poppins';color:white;;margin-bottom: 0px;margin-top: 10px; font-size:large">Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
 
</footer>
<?php  include_once 'partials/footers.php'; ?>
</body>
</html>




