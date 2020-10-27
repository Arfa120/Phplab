<?php

	$gender="";
	$err_gender="";
	$hobbies="";
	$err_hobbies="";
	$profession="";
	$err_profession="";
	$name="";
	$err_name="";

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
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$has_error = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hobbies"])){
			$err_hobbies = "Atleast select 1 hobby";
			$has_error = true;
		}
		else{
			$hobbies=$_POST["hobbies"];
		}

		if(!$has_error){
			echo $name;
		}
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
						<td><input type="text" name="name"> <?php echo $err_name;?></td>
					</tr>
					<tr>
						<td>Username:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><input type="text"></td>
					</tr>
					<tr>
						<td>Phone:</td>
						
						<td>
					<select>
					<option>Code</option>
					</select>
					</td>
					<td>
					<select>
					<option>Number</option>
					</select>
					</td>
					</tr>
					
					
					<td> Address</td>
					
					
					
					<td>
					<select>
					<option>Stress Address</option>
					</select>
					</td>
					<td>
					<select>
					<option>City</option>
					</select>
					</td>
					<td>
					<select>
					<option> State</option>
					</select>
					</td>
					
					<td>
					<select>
					<option>Postal/Zip Code</option>
					</select>
					</td>
					
					
					
				
				
					
				
				
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr></tr>
					<tr>
						<td> Confirm Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
				
				
					<td>Birth Date:</td>
				
		
				<tr>
				<?php
				for($i=0;Si<10;$i++){
					echo"<option>1</option>";
				}
				?>
					
					
					
					
					<td>
					<select>
					<option> Day</option>
>
					
					</select>
					</td>
					<td>
					<select>
					<option> Month</option>
>
					
					</select>
					</td>
					<td>
					<select>
					<option> Year</option>
>
					
					</select>
					</td>
				</tr>
					
						<td>Gender: <?php echo $err_gender;?></td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female
						</td>
					</tr>
					
					<center>
<tr>				
				<td><h4> Where did you hear about us?</h4></td>
				<tr>
				<td>
				<input type="checkbox" name="Gender">Google<br>
						
						<input type="checkbox" name="Gender"> Blog Post<br>
						
						<input type="checkbox" name="Gender"> New Article<br>
						</tr>
				</center>
				</td>
				</tr>
					<tr>
						<td>Bio:</td>
						<td>
							<textarea name="io" ></textarea>
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