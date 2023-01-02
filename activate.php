<?php
$page_title = "KJSIT - KJSIT";
include_once 'partials/headers.php';
include_once 'partials/parseSignup.php';
?>
<style>
    body{
     background: rgb(209,209,209);
    background: radial-gradient(circle, rgba(209,209,209,1) 62%, rgba(178,178,178,1) 100%);
    }
          .container8{

         display:flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
     .flag{
        border-radius: 1em;
        background-color: #ffffff;
        margin-top: 12em;
        height: 30em;
       border: 5px solid #9b2928;
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
<div class="container8">
    <div class="flag">
        <h1 style="font-family: 'Poppins';color:#9b2928; font-weight:bold; text-align:center">Virtual Lab of Operating System</h1><br>
        <?php if(isset($result)) echo $result; ?>
    </div>
</div>
<footer>





    <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Guided by: Prof. Jyoti Wadmare</p>
  
    <p style="font-family: 'Poppins';color:white;margin-bottom: 0px;margin-top: 10px; font-size:large">Developed by: Dakshita Kolte, Kapil Bhatia, Palak Desai, Kartikeya Dangat</p>
 
</footer>
<?php include_once 'partials/footers.php'; ?>
</body>
</html>