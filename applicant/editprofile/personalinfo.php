<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/dist/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../../css/custom.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<title>ddd</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
	  		<a class="navbar-brand" href="#">
	  			<img src="../../images/logo.png" id="logo" width="150" alt="">
	  		</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>

	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    		<ul class="navbar-nav ml-auto">
	      			<li class="nav-item active">
	        			<a class="nav-link" href="#">My Profile</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="jobs.php">Find Jobs</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="jobs.php">My Portfolio</a>
	      			</li>
	      			<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					Your Name
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        					<a class="dropdown-item" href="signup.php">Edit Profile</a>
				        	<a class="dropdown-item" href="signup.php">Account Settings</a>
				        	<a class="dropdown-item" href="signup.php">Log out</a>
        				</div>
      				</li>
	    		</ul>
	  		</div>
	  	</div>
	</nav>

	<div class="container mt-5">

		<div class="row">
			<div class="col-md-3 p-0">
				<!-- <div class="text-center">
					<img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.0-9/26904061_1818421621502743_381615301218543167_n.jpg?_nc_cat=0&oh=bb2b21ca2e09aa0e17fff45636c2ae71&oe=5C11A615" class="rounded img-thumbnail" alt="Cinque Terre" style="border: none;">
					<br>
					<b>Neil Achacoso</b>
					<br>
					<a href="index.php">View Profile</a>
					<hr class="mb-0">
				</div>	 -->
				<div class="row">
					<div class="col-md-3 pr-0 text-center"><img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.0-9/26904061_1818421621502743_381615301218543167_n.jpg?_nc_cat=0&oh=bb2b21ca2e09aa0e17fff45636c2ae71&oe=5C11A615" class="rounded img-thumbnail" alt="Cinque Terre" style="border: none;"></div>
					<div class="col-md-9 pt-1">
						<h6>Neil Achacoso</h6>
						<a href="index.php">View Profile</a>
					</div>
				</div>
				<hr class="mb-0">
				<nav class="nav flex-column mt-3">
  					<a class="nav-link active" href="#" style="background-color: #56CCE1;"><i class="fa fa-user fa-fw mr-2"></i>Personal Info</a>
  					<a class="nav-link px-0" href="#"><i class="fas fa-graduation-cap fa-fw mr-2"></i>Education</a>
  					<a class="nav-link px-0" href="#"><i class="fas fa-star fa-fw mr-2"></i>Skills</a>
  					<a class="nav-link px-0" href="#"><i class="fas fa-cogs fa-fw mr-2"></i>Technical Skills</a>
  					<a class="nav-link px-0" href="#"><i class="fas fa-briefcase fa-fw mr-2"></i>Experience</a>
  					<a class="nav-link px-0" href="#"><i class="fas fa-file-alt fa-fw mr-2"></i>Projects</a>
  					<a class="nav-link px-0" href="#"><i class="fas fa-chalkboard-teacher fa-fw mr-2"></i>Trainings and Seminars</a>
  					<a class="nav-link px-0" href="#"><i class="fab fa-gratipay fa-fw mr-2"></i>Interests</a>
  					<a class="nav-link px-0" href="#"><i class="fas fa-users fa-fw mr-2"></i>References</a>
				</nav>
			</div>
			<div class="col-md-9">
				<?php 
					if (isset($_GET['a'])) {
						if ($_GET['a'] == 'uploadresume') { ?>
							Upload Resume
							<hr>
							<form>
								<div class="custom-file mb-3">
  									<input type="file" class="custom-file-input" id="customFile">
  									<label class="custom-file-label" for="customFile">Choose file</label>
								</div>
			  					<div class="text-right">
			  						<input type="submit" class="btn btn-primary">
			  						<a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-danger">Cancel</a>
			  					</div>
							</form>
				<?php } 
					} else { ?>
						<div class="text-right">
							<a href="<?php echo $_SERVER['PHP_SELF'].'?a=uploadresume'; ?>" class="btn btn-primary">Upload Resume</a>
						</div>
						<form>
							<div class="form-group">
							    <label for="formGroupExampleInput">Position Title</label>
							    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="Web Developer">
						  	</div>
						  	<div class="form-group">
		    					<label for="inputAddress">Address</label>
		    					<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="Blk. 58 Lot 10 Hirono St. Subd., Brgy. Salawag, Dasmariñas City, Cavite">
		  					</div>
		  					<div class="form-row">
		  						<div class="col-md-6 mb-3">
		  							<label for="validationCustom01">Email</label>
							    	<input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="achacoso.neil@gmail.com" required>
							    	<div class="valid-feedback">
							       		Looks good!
							    	</div>
		  						</div>
		  						<div class="col-md-6 mb-3">
		  							<label for="validationCustom01">Mobile</label>
							    	<input type="email" class="form-control" id="validationCustom01" placeholder="First name" value="+639476090607" required>
							    	<div class="valid-feedback">
							       		Looks good!
							    	</div>
		  						</div>
		  					</div>
		  					<div class="text-right">
		  						<input type="submit" class="btn btn-primary">
		  						<a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-danger">Cancel</a>
		  					</div>
						</form>
				<?php }
				?>
			</div>
		</div>
	</div>

	<!---scripts--->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>