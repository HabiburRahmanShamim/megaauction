<html>
<head>
<link href = "css_m.css" rel = "stylesheet" type = "text/css" >
<title>Start Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type = "text/css">
	body {
		margin-left: 0px;
		margin-top: 0px;
		margin-right: 0px;
		margin-bottom: 0px;
		background-color: #CCC;
	}	
</style>
</head>
<body>
<?php
	//header("Location: bid_table_check.php");
	include "bid_table_check.php";
?>
<div id = "Container">

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="col-sm-3"><a class="navbar-brand" href="index.php">Online Auction System</a></div>
			<nav class="col-sm-5 ">
  					<form class="form-inline"  method = 'post' action  = 'search.php'>
    						<input class="form-control mr-sm-2" name = 'product_name' type="text" placeholder="Search">
    								<select name = "status" style = "width : 40% height : 80%; margin-top : .4%; padding : .7%; background-color : white; font-size : 15px">
										<option value = "ongoing" style = "font-size : 15px">Ongoing</option>
										<option value = "finished" style = "font-size : 15px">Finished</option>
										<option value = "yet to bid" style = "font-size : 15px">Yet To Bid</option>
									</select>
    								<button class="btn btn-success ml-2" name = 'search' type="submit">Search</button>
  					</form>
			</nav>




		<div class="col-sm-4">
		 <ul class="navbar-nav">
    		<li class="nav-item ">
      		<a class="nav-link" href="login.php">LogIn</a>
    		</li>
    		<li class="nav-item">
      		<a class="nav-link" href="signupinfo.php">SignUP</a>
    		</li>
    		<li class="nav-item">
      		<a class="nav-link" href="productform.php">Add Your Item</a>
    		</li>
    		
  		</ul>
  		</div>
	</nav>


	
	<div id = "Sidebar" >
		<div id = "Ongoing" style = "width : 100%; height : 50%; background-color : #E0E7F4">
			<div style = "width : 100%; height : 10%; background-color : white; border : 1px solid; border-color : white white black white"><h3 align = 'center' style = 'background-color : #001a4d;color : white; margin-top : -5px'><u>Ongoing Bid!</u></h3></div>
			<?php
				
            	$user = "id11633247_admin";
                $pass = "W@-$0kk*WL*0fzGj";
                $db = "id11633247_megaauction";
				
				$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
				//echo "Database Connected"."<br>";
				
				$qry = "SELECT product.Product_Name, locations.Name, product.Initial_Bid, bid.Status, time_track.Start_Time, time_track.End_Time, bid.Bid_ID
						FROM product, bid, locations, time_track 
						WHERE product.Product_ID = bid.Bid_ID AND product.Location = locations.ID 
							AND time_track.Track_ID = product.Product_ID AND bid.Status LIKE 'ongoing'";
				$res = mysqli_query($db_connect, $qry);
				echo '<table>';
						$cnt = 0;
						while($row = mysqli_fetch_assoc($res))
						{
							if($cnt > 3)break;
							echo '<tr>';
							echo '<td align = "center" style = "border : 1px solid">' . $row['Product_Name'] . '</td>';
							echo '<td align = "center" style = "border : 1px solid ; padding-top : 15px">' . '<form method = "post" action = "item_details.php"><button name = "details" type = "submit" value = ' . $row['Bid_ID'] . '>Details</button></form></td>';
							echo '</tr>';
							$cnt++;
						}
				echo '</table>';
			?>
		</div>
		<div id = "Yet To Bid" style = "width : 100%; height : 50%; background-color : #E0E7F4">
			<div style = "width : 100%; height : 10%; background-color : white; border : 1px solid; border-color : white white black white"><h3 align = 'center' style = 'background-color : #000000;color : orange; margin-top : -5px'><u>Yet To Bid!</u></h3></div>
			<?php
				
            	$user = "id11633247_admin";
                $pass = "W@-$0kk*WL*0fzGj";
                $db = "id11633247_megaauction";
				
				$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
				//echo "Database Connected"."<br>";
				
				$qry = "SELECT product.Product_Name, locations.Name, product.Initial_Bid, bid.Status, time_track.Start_Time, time_track.End_Time, bid.Bid_ID
						FROM product, bid, locations, time_track 
						WHERE product.Product_ID = bid.Bid_ID AND product.Location = locations.ID 
							AND time_track.Track_ID = product.Product_ID AND bid.Status LIKE 'yet to bid'";
				$res = mysqli_query($db_connect, $qry);
				echo '<table>';
						$cnt = 0;
						while($row = mysqli_fetch_assoc($res))
						{
							if($cnt > 1)break;
							echo '<tr>';
							echo '<td align = "center">' . $row['Product_Name'] . '</td>';
							echo '<td align = "center">' . '<form method = "post" action = "item_details.php"><button name = "details" type = "submit" value = ' . $row['Bid_ID'] . '>Details</button></form></td>';
							echo '</tr>';
							$cnt++;
						}
				echo '</table>';
			?>
		</div>
	</div>
	<div id = "Mainpanel">
		<?php
		
			$product_name = $_POST['product_name'];
			$status = $_POST['status'];
			
			
        	$user = "id11633247_admin";
            $pass = "W@-$0kk*WL*0fzGj";
            $db = "id11633247_megaauction";
			
			$db_connect = mysqli_connect("localhost", $user, $pass, $db) or die("no database found");
			//echo "Database Connected"."<br>";
			if(strlen($product_name) == 0)
			{
				$qry = "SELECT product.Product_Name, locations.Name, product.Initial_Bid, bid.Status, time_track.Start_Time, time_track.End_Time, bid.Bid_ID
							FROM product, bid, locations, time_track 
									WHERE product.Product_ID = bid.Bid_ID AND product.Location = locations.ID 
										AND time_track.Track_ID = product.Product_ID AND bid.Status LIKE '$status'";
			}
			else
			{
				$qry = "SELECT product.Product_Name, locations.Name, product.Initial_Bid, bid.Status, time_track.Start_Time, time_track.End_Time, bid.Bid_ID
							FROM product, bid, locations, time_track 
									WHERE product.Product_ID = bid.Bid_ID AND product.Location = locations.ID 
										AND time_track.Track_ID = product.Product_ID AND bid.Status LIKE '$status' AND product.Product_Name LIKE '%" . $product_name . "%'";
				
			}
			$res = mysqli_query($db_connect, $qry);
			$cnt = 0;
			echo '<table><th>Product Name</th><th>Location</th><th>Initial Bid</th><th>Status</th><th>Bid Start Time</th><th>Bid End Time</th><th>Product Details</th>';
					while($row = mysqli_fetch_assoc($res))
					{
						if($cnt >= 9)
							break;
						echo '<tr>';
						/*$name = $row['Product_Name'];
						$loc = $row['Name'];
						$start_bid = $row['Initial_Bid'];
						$status = $row['Status'];*/
						echo '<td align = "center">' . $row['Product_Name'] . '</td>';
						echo '<td align = "center">' . $row['Name'] . '</td>';
						echo '<td align = "center">' . $row['Initial_Bid'] . '</td>';
						echo '<td align = "center">' . $row['Status'] . '</td>';
						echo '<td align = "center">' . $row['Start_Time'] . '</td>';
						echo '<td align = "center">' . $row['End_Time'] . '</td>';
						echo '<td align = "center">' . '<form method = "post" action = "item_details.php"><button name = "details" type = "submit" value = ' . $row['Bid_ID'] . '>Details</button></form></td>';
						echo '</tr>';
						$cnt++;
					}
			echo '</table>'
		?>
	</div>

</div>



</body>
</html>