<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CW-Alarm-Loginscreen</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/alarm_login_screen.css">
</head>

<body>

  <nav class="navbar navbar-expand navbar-light ">
    <a class="navbar-brand" href="#">
  <img src="/img/logo.jpg" width="140" height="50" alt="">
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class=>
          <a class="nav-link" href="#">
            <p>Welkom</p><span class="sr-only">(current)</span></a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">

        <button type="reset" onclick="location.href='/index.php'" class="btn btn-outline-light my-2 my-sm-0" type="submit">Back</button>

      </form>
    </div>
  </nav>

  <!--<img src="img/logo.jpg" alt="logo" style="width: 15%; float: left; top:-13px; position: relative; margin-left: 420px;";>-->

  <div id="login-box">
    <div class="left">
      <h1><center>Sign in</center></h1>


      <input type="text" name="email" placeholder="E-mail" />
      <input type="password" name="password" placeholder="Password" />
      <input type="password" name="pincode" placeholder="Pincode" />
      <a href="../alarmlandingpage.html">
        <center><input type="submit" name="login_submit" value="Login" /></center>
        <a href="#">
          <!-- <center><input type="submit" name="signup_submit" value="Sign me up" /></center> -->

    </div>
    <!--<img src="/img/Alarm.jpg" alt="" style="width:300px;height:400px;">-->
    <div class="right">

      <span class="loginwith">Login<br/>My alarm panel</span>

    </div>

  </div>


  <footer>
    <i><em>Copyright&copy; CareWatch 2017</em></i>
    <div id="copyright" style="top: 40px; margin-left: -50px; position: relative; text-align:center;"></div>
    <div id="logoap"><a href="#"><img src="/img/logoap.jpg" alt="logo" style="width: 15%; top:-30; margin-left: 550px;  position: relative"><div>

</footer>

  <!-- Hier begint footer **********************************************************-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>


</html>
