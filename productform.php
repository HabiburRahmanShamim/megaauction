<html>
<head>
<title>Add Item</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>

<form method = "post" action = "add_item_to_database.php">
	<center class="pt-3">
		<h1>UPLOAD PRODUCT</h1>
	
	Product Name	: <input type = "text" name = "pname"  > <br><br>
	Seller ID		: <input type = "text" name = "sid" > <br><br>
	Initial Bid		: <input type = "text" name = "ini_bid" > <br><br>
	Category		: <select name = "category">
						<option value = "Electronics">Electronics</option>
						<option value = "Vehicle">Vehicle</option>
						<option value = "Property">Property</option>
						<option value = "Garments">Garments</option>
					</select><br><br>
	Location		: <select name = "location">
						<option value = "Dhaka">Dhaka</option>
						<option value = "Chittagong">Chittagong</option>
						<option value = "Sylhet">Sylhet</option>
						<option value = "Rajshahi">Rajshahi</option>
						<option value = "Khulna">Khulna</option>
						<option value = "Barisal">Barisal</option>
						<option value = "Rangpur">Rangpur</option>
					</select><br><br>
	Bid Start Time 	: <input type = "datetime-local" name = "starttime"><br><br>
	Bid End Time 	: <input type = "datetime-local" name = "endtime"><br><br>
	Description		: <textarea rows = "4" cols = "20"  name = "description"></textarea><br><br>
	<input type = "submit" value = "Add Item">
	</center>
</form>

</body>
</html>