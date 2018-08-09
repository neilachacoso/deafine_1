<?php 
	if (isset($_POST['user']) && isset($_POST['pwd'])) {
		if ($_POST['user'] == 'a@a.com' && $_POST['pwd'] == '123') {
			header("Location: home");
			exit();
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css" />
	<title>ddd</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container">
	  		<a class="navbar-brand" href="#">
	  			<img src="images/logo.png" id="logo" width="150" alt="">
	  		</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>

	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    		<ul class="navbar-nav ml-auto">
	      			<li class="nav-item active">
	        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="about.php">About</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="tutorials.php">Tutorials</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="portfolio.php">Portfolio</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="jobs.php">Jobs</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="contact.php">Contact</a>
	      			</li>
	      			<!-- <li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					Login
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        	<a class="dropdown-item" href="signup.php">Sign Up</a>
        				</div>
      				</li> -->
      				<li class="nav-item">
      					<a class="nav-link" href="login.php">Login</a>
      				</li>
      				<li class="nav-item">
      					<a class="btn btn-primary btn-block" href="signup.php">Signup</a>
      				</li>
	    		</ul>
	  		</div>
	  	</div>
	</nav>



	<div class="container text-center">
        <h1>Log in with your email account</h1>
        <p>Don't have an account yet? <a href="signup.php">Sign up here.</a>
	    </p>
	    <form name="test" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
	  		<div class="form-group">
	    		<input type="email" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
	    		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  		</div>
	  		<div class="form-group">
	    		<input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
	  		</div>
	  		<div class="form-check">
	    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
	    		<label class="form-check-label" for="exampleCheck1">Check me out</label>
	  		</div>
	  		<a href="forgotpass.php">Forgot Password?</a>
	  		<input type="submit" class="btn btn-primary btn-block">
		</form>
	</div>

	<!---scripts--->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>