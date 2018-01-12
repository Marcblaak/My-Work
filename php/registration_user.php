<!DOCTYPE html>
<html>

  <head>
    <title>Thecarewatch sign page</title>
    <!--links voor opmaak-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/registration_user.css">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <?php include 'dbhinc.php'; ?>
  </head>

<body>
  <header>
    <h3>Registration page Carewatch</h3>
    <br><h4>Sign up</h4>
  </header>
<div class="container">
  <form class="well form-horizontal" action=" " method="post"  id="regristration_form">
  <fieldset>

<!-- container-->
  <div class= "container_bg_color">
    <div class="wrapper">
      <div class="f1">

<!-- Text input first name-->
        <div class="form-group1">
          <label class="col- control-label">First Name</label>
          <div class="col- inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

<!-- Text input preposition -->
      <div class="form-group1">
        <label class="col- control-label">Preposition</label>
          <div class="col- inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input  name="preposition" placeholder="Preposition" class="form-control"  type="text">
            </div>
          </div>
      </div>
<!-- Text input lastname-->

  <div class="form-group1">
    <label class="col- control-label" >Last Name</label>
      <div class="col- inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
        </div>
      </div>
    </div>

<!--textinput with dropdown gender-->
  <div class="form-group1">
    <label class="col- control-label">Gender</label>
      <div class="col- selectContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <select name="gender" class="form-control selectpicker">
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
    </div>

<!-- Text day of birth-->
  <div class="form-group1">
    <label class="col- control-label">Day of birth</label>
      <div class="col- inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="day_of_birth" placeholder="Day of birth" class="form-control"  type="date">
        </div>
      </div>
    </div>

<!--SSN-->
  <div class="form-group1">
    <label class="col- control-label">Social security number</label>
      <div class="col- inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="SSN" placeholder="SSN" class="form-control" type="text">
        </div>
      </div>
    </div>

<!--Adress-->
  <div class="form-group1">
    <label class="col- control-label">Adress</label>
      <div class="col- inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="Adress" placeholder="Adress" class="form-control" type="text">
        </div>
      </div>
    </div>

<!--Zipcode-->
  <div class="form-group1">
    <label class="col- control-label">Zip Code</label>
      <div class="col- inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="Zipcode" placeholder="Zipcode" class="form-control" type="text">
        </div>
      </div>
  </div>
</div>


<!--City-->
<div class="f2">
  <div class="form-group2">
    <label class="col- control-label">City</label>
    <div class="col- inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input name="City" placeholder="City" class="form-control" type="text">
      </div>
    </div>
  </div>
<!--Country-->
  <div class="form-group2">
    <label class="col- control-label">Country</label>
    <div class="col- inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
        <input name="Country" placeholder="Country" class="form-control" type="text">
      </div>
    </div>
</div>
<!-- **************************** MAIL ******************************************* -->
<!-- <form> -->
<div class="form-group2">
<label class="col- control-label">E-Mail</label>
  <div class="col- inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input name="email" placeholder="E-Mail Address" id="email" required class="form-control"  type="email">
    </div>
  </div>
</div>

<div class="form-group2">
<label class="col- control-label">E-Mail Confirm</label>
    <div class="col- inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email2" placeholder="E-Mail Address confirm" id="email2" class="form-control"  type="email">
      </div>
    </div>
</div>

    <!-- *********************************************************************** -->
    <!-- Text input password-->
<div class="form-group2">
  <label class="col- control-label" >Password</label>
  <div class="col- inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="user_password" placeholder="Password" id="user_password" required class="form-control"  type="password">
      </div>
  </div>
</div>
    <!-- Text input confirm_password -->
<div class="form-group2">
  <label class="col- control-label" >Password Confirm</label>
  <div class="col- inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input name="confirm_password" placeholder="Password Confirm" id="confirm_password" required class="form-control"  type="password">
    </div>
  </div>
</div>
<!-- Controleerd of e-mail en wachtwoord goed zijn ingevuld -->
<script src="/js/check_password.js"></script>
<script src="/js/check_mail.js"></script>

<!-- *********************************************************************** -->
<!-- Text input username-->
<div class="form-group2">
  <label class="col- control-label">Username</label>
  <div class="col- inputGroupContainer">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  name="user_name" placeholder="Username" required class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- *********************************************************************** -->
<!--textinput with dropdown securitylevel-->
<div class="form-group2">
  <label class="col- control-label">Access level</label>
    <div class="col- selectContainer">
      <div class="input-group">
        <span class="input-group-addon"><i  class="glyphicon glyphicon-list"></i></span>
        <select name="securitylevel" required class="form-control selectpicker">
          <option value="">Select</option>
          <option value="1">Level 1</option>
          <option value="2">Level 2</option>
          <option value="3">Level 3</option>
        </select>
      </div>
    </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->

<div class="form-group">
  <label class="col- control-label"></label>
  <div class="col-">
    <button type="Submit"  formaction="send_registration.php"  class="btn btn-block btn-primary" >Send<span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</div>
  <button type="Submit" formnovalidate formaction="/index.php" class="btn btn-block btn-secondary" >Back <span class="glyphicon glyphicon-send"></span></button>
  <button type="Submit" class="btn btn-block btn-danger" >Alarmcenter<span class="glyphicon glyphicon-send"></span></button>
</div>
        </div>
      </fieldset>
      </form>
      </div>
    </div><!-- /.container -->
    <script src="/js/check_mail.js"></script>
  </body>
</html>
