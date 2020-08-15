<!DOCTYPE html>
<html>
<head>
<title> Login System </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
.button {
  background-color: #343a40;
  border: none;
  color: white;
  padding: 6px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {border-radius: 4px;}
</style>
</head>
<body>
	<div class="transbox">
	</div>

	
     <form action="checklogin.php" method="post" class="padding">


     	
		<div class="form-group">
				
				<label for="email">Email address:</label>
				 <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
			 </div>
			
			<div class="form-group">

				
				<label for="pwd">Password:</label>
    			<input type="password" class="form-control" id="pwd" name="passward" placeholder="Password" required>
			</div>
			<div class="form-check">
    		<label class="form-check-label">
      		<input class="form-check-input" type="checkbox"> Remember me
    		</label>



  </div>
			
		    <tr>
			  <td>
				<input type="submit" name="submit" class="btn btn-dark" value="LOGIN"/>
				
			  </td>

			</tr>
		</table>

        <a href="signupinfo.php"><input type="button" class="button button1" value="Sign Up"/></a>
		
		</form>
		



		
		
</body>
</html>