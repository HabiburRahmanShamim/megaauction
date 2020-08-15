<html>

<?php

	$u = $_POST["email"];
    $p = $_POST["passward"];
    //echo "email is : $u"."<br>";
    //echo "password is: $p"."<br>";

	$user = "id11633247_admin";
    $pass = "W@-$0kk*WL*0fzGj";
    $db = "id11633247_megaauction";
    
    $db_connect = mysqli_connect('localhost',$user,$pass,$db) or die('no database found');
    
    //echo 'connection successful'."<br>";
        
    $qry = "SELECT user_ID FROM userinfo WHERE Email = '$u' and Passward = '$p'";

    $res = mysqli_query($db_connect, $qry);
    $row = mysqli_num_rows($res);
    if($row >= 1){
        echo 'login successful'."<br>";
		header("Location: index.php");
    }
    else{
        echo 'you must signup first'."<br>";
		echo '<form method = "post" action = "login.php"><button type = "submit">Log In Again</button></form>';
    }

?>



</html>