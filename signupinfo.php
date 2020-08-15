<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>

<form method = "post" action = "signup.php">
	<center>
	
	<h1>Sign Up</h1>
	First Name	: <input type = "text" name = "fname"  > <br><br>
	Last Name	: <input type = "text" name = "lname" > <br><br>
	Email		: <input type = "text" name = "email" > <br><br>
	Passward	: <input type = "text" name = "passward" > <br><br>
	Contact No.	: <input type = "text" name = "contact_no" > <br><br>
	Location	: <select name = "location">
					<option value = "Dhaka">Dhaka</option>
					<option value = "Chittagong">Chittagong</option>
					<option value = "Sylhet">Sylhet</option>
					<option value = "Rajshahi">Rajshahi</option>
					<option value = "Khulna">Khulna</option>
					<option value = "Barisal">Barisal</option>
					<option value = "Rangpur">Rangpur</option>
				</select>
	<br><br>
	<input type = "submit" class="btn btn-success" value = "Sign UP">
	<button class="btn btn-success"><a href = "signupinfo.php" align = "center"> Log in</a></button>	
	</center>
</form>



</body>
</html>



