<!DOCTYPE html>
<html lang="en">
 <head>
    <title>REGISTRATION PAGE</title>
    <link TYPE="TEXT/CSS" REL="STYLESHEET" HREF="css/style.css" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!--D logo next to title -->
    <link rel="apple-touch-icon" sizes="57x57" href="dlogo/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="dlogo/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="dlogo/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="dlogo/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="dlogo/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="dlogo/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="dlogo/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="dlogo/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="dlogo/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="dlogo/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dlogo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="dlogo/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dlogo/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
  </head>    
  <body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image:url('pics/w.jpg');">
    <!--menu bar-->
    <div class="topnav">
      <a class="active" href="home.php">D's ELEARNING</a>  
      <div class="topnav-right">
        <a href="reg.php">Register</a>
        <a href="login.php">Sign in</a>
      </div>
    </div>
    <br><br><br><br>
    <div class="container">
    <center>
    <form action="" method="POST">
    <table cellpadding="10" cellspacing="10" >
    <tr><th><label>MAIL-ID</label></th><td><input  name="mid" type="text" required></td></tr>
    <tr><th><label>USER NAME</label></th><td><input  name="uname" type="text" required></td></tr>
    <tr><th><label>PASSWORD</label></th><td><input name="pwd" type="password" required></td></tr>
    <tr><td></td><td><button class="btn btn-warning"  type="submit" name="reg">REGISTER</button></td></tr>
    </table>
    </form>
    </center>
    </div> 
    <?php
    include "Dataconfig.php";
    session_start();
    if (isset($_POST["reg"]))
    {
      $mid=$_POST["mid"];
      $uname=$_POST["uname"];
      
      $pawd=$_POST["pwd"];
        $pwd=md5($pawd);
      $ins="insert into login values('$mid','$uname','$pwd')";
      $is=mysqli_query($cn,$ins);
      if($is)
        echo "<script>window.open('login.php','_self')</script>";
      else
        echo "fail";
    }
    ?>
  </body>
</html>
