<?php
	ob_start();
	session_start();
	if($_SESSION['name']!="rakib"){
		header('location: admin_login.php');
	}
	include('conection.php');
	if(isset($_POST['submit'])){
		try{
			if(empty($_POST['name'])){
                throw new Exception("Name cannot be empty");
            }

            else if(empty($_POST['id'])){
                throw new Exception("ID cannot be empty");
            }
			else if(empty($_POST['dept'])){
                throw new Exception("Department cannot be empty");
            }
            else if(empty($_POST['level'])){
                throw new Exception("Level cannot be empty");
            }
			else if(empty($_POST['term'])){
                throw new Exception("Term cannot be empty");
            }
            else if(empty($_POST['gender'])){
                throw new Exception("Gender cannot be empty");
            }
			else if(empty($_POST['phone'])){
                throw new Exception("Phone cannot be empty");
            }
            else if(empty($_POST['password'])){
                throw new Exception("Password cannot be empty");
            }
			$result=("INSERT INTO tbl_student_l3t1(name,id,dept,level,term,gender,phone,password,cse_301,cse_302,cse_303,cse_304,cse_305,cse_306,cse_307,cse_308,cse_309,cgpa) VALUES('$_POST[name]','$_POST[id]','$_POST[dept]','$_POST[level]','$_POST[term]','$_POST[gender]','$_POST[phone]','$_POST[password]','0','0','0','0','0','0','0','0','0','0')");
			if(mysqli_query($connection,$result)){
				$msg="Data has been saved suuccesfully";
			}
			else{
				die('query problem'.mysqli_error($connection));
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
			<h1>Welcome to Admin Panel</h1>

				<div>
					<a class="btn btn-success" href="register_new_std.php">Register A New Student</a>
					<a class="btn btn-success" href="result_add.php">Result Calculation</a>
					<a class="btn btn-success" href="admin_chng_pass.php">Change Password</a>
					<a class="btn btn-success" href="see_all.php">All student</a>
				</div>
				<div>

				</div>
            <form action="" method="post">
			<h1>Please fill up the form</h1>
			<?php
				if(isset($error)){
					echo $error;
				}
				if(isset($msg)){
					echo $msg;
				}
			?>
				<div>
					<table>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name"></td>
						</tr>

						<tr>
							<td>ID</td>
							<td><input type="text" name="id"></td>
						</tr>
						<tr>
							<td>Department</td>
							<td><input type="text" name="dept"></td>
						</tr>
						<tr>
							<td>Level</td>
							<td><input type="text" name="level"></td>
						</tr>
						<tr>
							<td>Term</td>
							<td><input type="text" name="term"></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>
								<select name="gender">
									<option>Select Gender</option>
									<option value="1">Male</option>
									<option value="2">Female</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><input type="text" name="phone"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Register"></td>
						</tr>
					</table>
				</div>

			</form>
			<a class="btn btn-dark" href="admin_logout.php">Logout</a>
        </div>

				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <scrpit src="js/bootstrap.min.js"></scrpit>
    </body>
</html>
