<!DOCTYPE html>
<html lang="en">
 <head>
    <title>D'S ELEARNING </title>
    <LINK TYPE="TEXT/CSS" REL="STYLESHEET" HREF="css/style_container.css" >  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!--D logo-->
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
  <body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-image:url('pics/b.jpg'); background-repeat:no-repeat; background-size:COVER; padding-top:2%;">
    <!--menu bar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="home.php">D's ELEARNING</a>
        </div>
        <div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="pgmg.php">Programming Languages</a></li>
              <li><a href="sw.php">Software Frameworks</a></li>
              <li><a href="webdev.php">Web Development</a></li>
              <li><a href="adv.php">Advanced Technologies</a></li>
              <li><a href="db.php">Database</a></li>
            </ul>
          </div>
        </div>      
      </div>
    </nav> 
    <br>
    <table align="center" cellspacing="20px" cellpadding="10px">
      <tr>
        <td><div class="container"><img src="pics/1.jpg" alt="PROGRAMMING LANGUAGES">
          <button class="btn" onclick="window.location.href = 'pgmg.php';">PROGRAMMING LANGUAGES</button></div>
        </td>
        <td><div class="container"><img src="pics/2.jpg" alt="SOFTWARE FRAMEWORKS">
          <button class="btn" onclick="window.location.href = 'sw.php';">SOFTWARE FRAMEWORKS</button></div></td>
      </tr>
      <tr><td><br></td></tr> 
      <tr>
        <td><div class="container"><img src="pics/4.jpg" alt="WEB DEVELOPMENT">
          <button class="btn" onclick="window.location.href = 'webdev.php';">WEB DEVELOPMENT</button>
        </div></td>
        <td><div class="container"> <img src="pics/3.jpg" alt="ADVANCED TECHNOLOGIES">
          <button class="btn" onclick="window.location.href = 'adv.php';">ADVANCED TECHNOLOGIES</button>
        </div></td>
      </tr>         
      <tr>
        <div class="container"><img src="pics/7.jpg" alt="DATABASE">
          <button class="btn" onclick="window.location.href = 'db.php';">DATABASE</button>
        </div>
      </tr>
    </table>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
