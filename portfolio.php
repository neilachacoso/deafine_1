<!-- <?php 
	//include('dbconfig.php');
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="plugins/fancybox/dist/jquery.fancybox.css">
	<title>ddd</title>
	<style type="text/css">
		.gallery img {
		    width: 20%;
		    height: auto;
		    border-radius: 5px;
		    cursor: pointer;
		    transition: .3s;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		<div class="container">
	  		<a class="navbar-brand" href="#">
	  			<img src="images/logo.png" id="logo" width="150" alt="">
	  		</a>
	  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>

	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    		<ul class="navbar-nav ml-auto">
	      			<li class="nav-item">
	        			<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="about.php">About</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="tutorials.php">Tutorials</a>
	      			</li>
	      			<li class="nav-item active">
	        			<a class="nav-link" href="portfolio.php">Portfolio</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="jobs.php">Jobs</a>
	      			</li>
	      			<li class="nav-item">
	        			<a class="nav-link" href="contact.php">Contact</a>
	      			</li>
	      			<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          					Login
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				        	<a class="dropdown-item" href="signup.php">Sign Up</a>
        				</div>
      				</li>
	    		</ul>
	  		</div>
	  	</div>
	</nav>

	<div class="jumbotron jumbotron-fluid">
  		<div class="container text-center">
    		<h1 class="display-4">ART STATION</h1>
  		</div>	
	</div>

	<div class="container">
	    <!-- <div class="gallery text-center">
	        <?php	        
	        //get images from database
	        $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
	        
	        if($query->num_rows > 0){
	            while($row = $query->fetch_assoc()){
	                $imageThumbURL = 'uploads/'.$row["file_name"];
	                $imageURL = 'uploads/'.$row["file_name"];
	        ?>
	            <a href="<?php echo $imageURL; ?>" data-fancybox="group" data-caption="<?php echo $row["title"]; ?>" >
	                <img src="<?php echo $imageThumbURL; ?>" alt="" />
	            </a>
	        <?php }
	        } ?>
	    </div> -->
	</div>


	<!---scripts--->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="plugins/fancybox/dist/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript">
		$("[data-fancybox]").fancybox({ });
	</script>
</body>
</html>