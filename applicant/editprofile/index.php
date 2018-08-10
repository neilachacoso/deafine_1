<?php 
	include '../../dbconfig.php';

	$educ = $db->query("SELECT * FROM `education` WHERE user_id = 1 ORDER BY year_to DESC");
	$info = $db->query("SELECT * FROM `info` WHERE user_id = 1");
	if($info->num_rows > 0){
		while($row = $info->fetch_assoc()){
			$address = $row['address'];
			$email = $row['email'];
			$phone = $row['phone'];
			$mobile = $row['mobile'];
			$linkedin = $row['linkedin'];
			$github = $row['github'];
			$facebook = $row['facebook'];
			$twitter = $row['twitter'];
			$skills = $row['skills'];
			$tech = $row['tech'];
		}
	}
?>
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
			<div class="col-md-8">
				<div class="row row-eq-height">
					<div class="col-md-3">
						<img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t1.0-9/26904061_1818421621502743_381615301218543167_n.jpg?_nc_cat=0&oh=bb2b21ca2e09aa0e17fff45636c2ae71&oe=5C11A615" class="rounded img-fluid" alt="Cinque Terre">
					</div>
					<div class="col-md-9">
						<div class="float-left">
							<h4>Neil Achacoso</h4>
						</div>
						<div class="float-right">
							<button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal">
								<i class="far fa-fw fa-edit"></i>
							</button>
						</div>
						<div class="clearfix"></div>
						<hr class="my-2">
						<p>
							Web Developer
							<br><br>
							About Me:
							<br>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. 
						</p>
					</div>
				</div>
				<div class="mt-3">
					<div class="float-left">
						<h5>Education</h5>
					</div>
					<div class="float-right">
						<button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-fw fa-plus"></i>
						</button>
					</div>
					<div class="clearfix"></div>
					<hr class="my-2">
					<div>
						<?php 
							if($educ->num_rows > 0){
								while($row = $educ->fetch_assoc()){
									echo 
										'<div class="row my-2">
											<div class="col-md-10">
												<b>'.$row['school'].'</b>
												<br>
												'.$row['degree'].' ('.$row['year_from'].' – '.$row['year_to'].')
											</div>
											<div class="col-md-2 text-right">
												<button type="button" class="btn btn-light" data-toggle="modal" data-target="#editModal">
													<i class="fas fa-pen"></i>
												</button>
											</div>
										</div>';
								}
							}
						?>
					</div>	
				</div>
				<div class="mt-4">
					<div class="float-left">
						<h5>Skills</h5>
					</div>
					<div class="float-right">
						<button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal">
							<i class="far fa-fw fa-edit"></i>
						</button>
					</div>
					<div class="clearfix"></div>
					<hr class="my-2">
					<?php 
						echo $skills;
					?>
				</div>	
				<div class="mt-4">
					<div class="float-left">		
						<h5>Technical Skills</h5>
					</div>
					<div class="float-right">
						<button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal">
							<i class="far fa-fw fa-edit"></i>
						</button>
					</div>
					<div class="clearfix"></div>
					<hr class="my-2">
					<?php 
						echo $tech;
					?>
				</div>	
				<div class="mt-4">
					<div class="float-left">
						<h5>Work Related Experience</h5>
					</div>
					<div class="float-right">
						<button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModal">
							<i class="far fa-fw fa-edit"></i>
						</button>
					</div>
					<div class="clearfix"></div>
					<hr class="my-2">
					<div>
						<div class="row">
							<div class="col-md-10">
								<b>PLDT</b><br>
								Intern – Technical Support (488 Hours, 2016)
							</div>
							<div class="col-md-2 text-right">
								<button type="button" class="btn btn-light" data-toggle="modal" data-target="#editModal">
									<i class="fas fa-pen"></i>
								</button>
							</div>
						</div>
					</div>
				</div>	
				<h5 class="mt-4">Trainings and Seminars Attended</h5>
				<hr class="my-2"></hr>
				<p>
					<ul>
						<li><b>Web Dev 101</b> (2015) - Mapua University</li>
						<li><b>Personal and Communication Development</b> (2015) - Mapua University</li>
						<li><b>Application Pointers</b> (2015) - Mapua University</li>
					</ul>
				</p>
				<h5 class="mt-4">Projects</h5>
				<hr class="my-2"></hr>
				<p>
					<b>Information Dissemination Website for Mapua Center for Career Services –
					HTML5, CCS3, PHP5, MySQL</b>
					<br>
					October 2017
					<br>
					A capstone project that aims to aid Mapua Center for Career
					Services in information dissemination to Mapua OJT students
					<br><br>
					DEAFINE.ph – HTML5, CCS3, PHP5, MySQL
					March 2016
					A job matching website
					<br><br>
					<b>TELMAS (Telephone Master) – C#, MS SQL</b>
					<br>
					March 2016
					<br>
					Telephone database system for PLDT
					<br><br>
					<b>PC Central – HTML5, CCS3, PHP5, MySQL</b>
					<br>
					October 2015
					<br>
					An online computer retail store
					<br><br>
					<b>Brent Paintrade Commercial Inventory System – C#, MS SQL</b>
					<br>
					September 2015
					<br>
					A C# inventory system with database
					<br><br>
					<b>Record Management System for Pearl Grace Ship management – C#, MS SQL</b>
					<br>
					September 2014
					<br>
					A system for managing shipping crew records
					<br><br>
					<b>Xtreme Bucket – C#</b>
					<br>
					July 2013
					<br>
					A tennis game application written in C#
				</p>
				<h5 class="mt-4">Interests</h5>
				<hr class="my-2"></hr>
				<p>
					Learning new languages and framework
					<br>
					Sports – Basketball, Biking, Table Tennis
					<br>
					Music – Guitar, Bass, Rock Music
				</p>
				<h5 class="mt-4">References</h5>
				<hr class="my-2"></hr>
				<p>
					<b>Jefferson Manrique</b>
					<br>
					Sr. SQL Developer – Crawford & Company
					<br>
					https://www.linkedin.com/in/jeffersonmanrique/
					<br><br>
					<b>Harold Albert Lambago</b>
					<br>
					Programmer Analyst – Eastwest Banking Corporation
					<br>
					+639161150581
				</p>
			</div>
			<div class="col-md-4 text-left" style="word-wrap: break-word;">
				<a href="../uploads/resume.pdf" target="_blank" class="btn btn-primary btn-block mb-4" role="button" aria-pressed="true">My Resume</a>
				<h6>Personal Info</h6>
				<hr class="my-2">
				<b>Address</b>
				<p><?php echo $address; ?></p>
				<b>Email</b>
				<p><?php echo $email; ?></p>
				<b>Phone</b>
				<p>
					<?php 
						echo $phone != '' ? $phone : $mobile;
						echo $mobile != '' ? ' / ' : NULL;
						echo $mobile != '' ? $mobile : NULL ;
					?>
				</p>
				<b>LinkedIn</b>
				<p><?php echo $linkedin != '' ? $linkedin : 'none'; ?></p>
				<b>Github</b>
				<p><?php echo $github != '' ? $github : 'none'; ?></p>
				<b>Social</b>
				<p>
					<?php 
						echo $facebook != '' ? $facebook : NULL;
						echo $twitter != '' ? '<br>' : NULL;
						echo $twitter != '' ? $twitter : NULL ; ?>
				</p>
			</div>
		</div>
	</div>

	<!---scripts--->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>