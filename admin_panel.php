<?php
	ob_start();
	session_start();
	if($_SESSION['name']!="rakib"){
		header('location: admin_login.php');
	}
	include('conection.php');
?>
<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="">
    </head>
    <body>
			<div>

			<nav class="navbar navbar-expand-lg navbar-light bg-primary">
					<a class="navbar-brand" href="#"><h1>Bangladesh Army International University of Science & Technology</h1></a>
			</nav>
		</div>
       <div>
			<h1>Welcome to Admin Panel</h1>

				<div>
					<a class="btn btn-success" href="register_new_std.php">Register A New Student</a>
					<a class="btn btn-success" href="result_add.php">Result Calculation</a>
					<a class="btn btn-success" href="admin_chng_pass.php">Change Password</a>
					<a class="btn btn-success" href="see_all.php">All student</a>
				</div>
				<div>

				</div>
				<a class="btn btn-dark mt-4" href="admin_logout.php">Logout</a>

	   </div>

		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <scrpit src="js/bootstrap.min.js"></scrpit>
    </body>
</html>
