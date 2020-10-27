<?php

	$gender="";
	$err_gender="";
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$phone="";
	$err_phone="";

	$email="";
	$err_email="";
	$address="";
	$err_address="";
	
    $birthdate="";
	$err_birthdate="";
	
	$has_error = false;
	

	
if(isset($_POST["register"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$has_error = true;
		}elseif(strpos($_POST["name"],"abcd")){
			$err_name="Consequtive abcd cant not be a name";
			$has_error = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
				
		if(strlen($_POST["password"])){
			$err_password="8 char Required";
			$has_error = true;
		}elseif(ctype_upper($_POST["password"],"ABCD")){
			$err_password= "uppercase";
			$has_error = true;
		}
		
		elseif(ctype_lower($_POST["password"],"abcd")){
			$err_password= "lowercase";
			$has_error = true;
		
		else{
			$name=htmlspecialchars($_POST["password"] "#","1");
		}
		if(is_numeric($_POST["phone"])){
			$err_phone="numerice value";
			$has_error=true;
		}
		if(htmlspecialchars($_POST["email"])){
			$err_email=contain @ and one .;
			$has_error=true;
		}
		
				
?>

<html>
	<head>
		<title>Club Member Registration</title>
	</head>
	<body>
						
		<form action="" method="post">
			<fieldset>
				<legend>
				<h1>Club Member Registration</h1>
				</legend>
				<table>
					<tr>
						<td>Name:</td>
						<td><input type="text" name="name"> <?php echo $err_name;?> </td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text" <?php echo $err_username;?>"name"> </td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text"><?php echo $_email;?> </td>
					</tr>
					<tr>
					
						<td>Phone: </td>
						

						<td><input type="text" <?php echo $_phone;?>"name"> </td>
						
			<td>
					<select>
					<option>Code</option>
					</select>
					
					
					<select>
					<option>Number</option>
					</select>
					
					</td>
					</tr>
					
				
					<tr>
					
					<td> Address</td>
					<td>
					<select>
					<option>Stress Address</option>
					</select>
					
					
					<select>
					<option>City</option>
					</select>
					
					
					<select>
					<option> State</option>
					</select>
					
					
					
					<select>
					<option>Postal/Zip Code</option>
					</select>
					</td>
					</tr>
					
				
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password"><?php echo $_password;?> </td>
					</tr>
					<tr></tr>
					<tr>
						<td> Confirm Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
		
				<td>Birth Date:</td>
				
				
				<td>
					
			
					<select>
					<option> Day</option>
					<?phpfor($i=0;$i<10;$i++){
						echo"<option>1</option>";
					}
					?>

					
					</select>
					
					
					<select>
					<option> Month</option>

					
					</select>
					
				
					<select>
					<option> Year</option>
					
					</select>
					</td>
				
				
					<tr>
						<td>Gender</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					
					<center>
			
				<td><h4> Where did you hear about us?</h4></td>
				
			
				<td>
				
				
				<input type="checkbox" name="Gender[]" value="A friend or Colleague"> A friend or Colleague<br>
						
				<input type="checkbox" name="Gender[]" value="Google">Google <br>
						
				<input type="checkbox" name="Gender[]" value=" Blog Post">Blog Post <br>
						
				<input type="checkbox" name="Gender[]" value="Article">Article <br>
						</tr>
				</center>
				</td>
				
					<tr>
						<td>Bio:</td>
						<td>
							<textarea name="bio" ></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
		</body>
		</html>
