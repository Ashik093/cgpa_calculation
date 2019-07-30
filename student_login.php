<?php
	 include('conection.php');
	if(isset($_POST['submit'])){
        try{
            if(empty($_POST['username'])){
                throw new Exception("User name field cannot be empty");
            }
            if(empty($_POST['password'])){
                throw new Exception("Password field cannot be empty");
            }

            $result=  mysqli_query($connection,"select * from tbl_student_l3t1 where id='$_POST[username]' and password='$_POST[password]'" );
            $num= mysqli_num_rows($result);
            if($num>0)
            {
                session_start();
				$row=mysqli_fetch_assoc($result);
                $_SESSION['name']="eka";
				$_SESSION['std_name']=$row['name'];
				$_SESSION['id']=$row['id'];
				$_SESSION['dept']=$row['dept'];
				$_SESSION['level']=$row['level'];
				$_SESSION['term']=$row['term'];
				$_SESSION['gender']=$row['gender'];
				$_SESSION['phone']=$row['phone'];
				$_SESSION['password']=$row['password'];
				$_SESSION['password']=$row['password'];
				$_SESSION['cse_210']=$row['cse_301'];
				$_SESSION['cse_211']=$row['cse_302'];
				$_SESSION['cse_212']=$row['cse_303'];
				$_SESSION['cse_213']=$row['cse_304'];
				$_SESSION['cse_215']=$row['cse_305'];
				$_SESSION['cse_216']=$row['cse_306'];
				$_SESSION['cse_217']=$row['cse_307'];
				$_SESSION['cse_220']=$row['cse_308'];
				$_SESSION['math_247']=$row['cse_309'];
				$_SESSION['cgpa']=$row['cgpa'];
                header('location: student_profile.php');
            }
            else{
                throw new Exception("Incorrect username or password");
            }
        }
        catch(Exception $e){
            $error=$e->getMessage();
        }
    }

?>
<!DOCTYPE html>

<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
			<div>

			<nav class="navbar navbar-expand-lg navbar-light bg-primary">
					<a class="navbar-brand" href="#"><h1>Bangladesh Army International University of Science & Technology</h1></a>
			</nav>
		</div>

		<div class="container">

			<nav class="navbar navbar-light bg-light">
			<form class="form-inline">
				<button class="btn btn-outline-success mr-3" type="button"><a href="student_login.php">Student Login</a></button>
				<button class="btn btn-sm btn-outline-secondary" type="button"><a href="admin_login.php">Admin Panel</a></button>
			</form>
			</nav>
			<div class="card text-center" style="width: 18rem;">
				<div class="card-header">
					Student login
				</div>
				<div class="card-body">
					<div class="loginBox center">
							<?php
								 if(isset($error)){
										 echo $error;
								 }
							?>

							<br/>

							<form action="" method="post">
							<div class="form-group">
								<label for="exampleInputEmail1">Enter Username(id): </label>
								<input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Enter username">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Login</button>
							</form>
					</div>
				</div>





            </div>
        </div>

				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <scrpit src="js/bootstrap.min.js"></scrpit>
    </body>
</html>
