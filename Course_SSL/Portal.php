<html>
<head>
  <title>
    Portal
  </title>
  <script src="course_1.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- code for making website look nicer on all kind of devices. -->
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="course_1.css">
</head>
<!-- Main Section -->
<body style="background-color:lightgrey;">
<!-- First page  that is login page-->
  <div id="login_page" style="display:block;">
  <h1> Welcome To The Online Portal</h1>
  <div class="row">
    <div class="col-md-8">
      <img src="course.jpg" alt="pic not loaded" width="70%" height="480px" align="center">
    </div>
    <div class="col-md-3" style="background-color:white;">
          <button type="button" onclick="login()" class="top-button-log" id="button-log">Log In
          <button type="button" onclick="signUp()" class="top-button-sign" id="button-sign">Sign Up</button>
        <div id="login" style="display:block;">
          <form class="login" action="login.php" method="post">
          <h3>User name:</h3><br>
            <input type="text" class="input-field" name="user"></input><br>
          <h3>Password:</h3><br>
            <input type="password" class="input-field" name="pass"></input><br>
            <button type="submit" class="submit-button">SUBMIT</button>
          </form>
        </div>
        <div id="signup" style="display:none;">
          <form class="sign-up" action="create_account.php" method="post" id="create">
		  <h3>User name:</h3>:<br>
		    <input type="text" onchange="createuser()" class="input-field" id="user1" name="user1" ></input><br>
		  <h3>Password:</h3><br>
		    <input type="password" onchange="create_pass1()" class="input-field" id="pass1" name="pass1" ></input><br>
		  <h3>Confirm Password:</h3><br>
		    <input type="password" onchange="create_pass2()" class="input-field" id="pass2" name="pass2" ></input><br>
		    <button type="submit" class="submit-button">CREATE ACCOUNT</button>
          </form>
        </div>
    </div>
    <div class=col-md-1></div>
  </div>
</div>
</body>
</html>
