<!DOCTYPE html>
<html>
<head>
	<title>Ekraal Login</title>
	 <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- Custom styles for this template -->
    <link href="css/floating_label.css" rel="stylesheet">
<!-- Jquery -->
<script type="text/javascript"  src="js/jquery-3.3.1.min.js" ></script>
<!-- validate JS -->
<script type="text/javascript" src="js/validation.min.js"></script>
<!-- Custom javascript -->
<script type="text/javascript" src="js/login.js"></script>


</head>

<body>
<form class="form-signin" method="post" id="login-form">
  <div class="text-center mb-4">
    <img class="rounded-circle" src="images/ekraal.png" alt="" width="120" height="120">
    <h1 class="h3 mb-3 font-weight-normal">Ekraal Innovation Hub</h1>
    <p><code>The Future of Cybersecurity in Kenya</code></p>

  </div>
  <div id="error">
  	
  </div>

  <div class="form-label-group">
    <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputEmail">Email address</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="login_button" id="login_button" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
</form>
</body>
</html>