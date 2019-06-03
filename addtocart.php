<?php 
	session_start();
	include_once "conn.php";
	
	$isloggedin = isset($_SESSION["username"]);
	$namme;
		$massk = $_GET['mask'];
		if(!$isloggedin) {
			echo '<script language="javascript">';
			echo 'alert("Please Log In !")';
			echo '</script>';
			//refresh the page
			header("Refresh:0; url=login.php");    
		} else {
			$namme = $_SESSION["username"];
			$mask_found = false;
			$sql = "SELECT * FROM orders";
			$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0) {
				while($row = mysqli_fetch_array($result)) {
				if($row['Username'] === $namme) {

				if($row['Mask_Id'] === $massk) {
					$mask_found = true;

					break;
				}
			} 
		} 
		if($mask_found) {

					$quantitty = $row['Quantity'] + 1;
					$sql1 = "UPDATE orders SET Quantity = $quantitty WHERE Username = '$namme' AND Mask_Id = '$massk'";
					
					mysqli_query($conn, $sql1);
		} else {
			$sql1 = "INSERT INTO orders (Username, Mask_Id, Quantity) VALUES ('$namme', '$massk', 1)"; 
			mysqli_query($conn, $sql1);
		}

	}else {
					$sql2 = "INSERT INTO orders (Username, Mask_Id, Quantity) VALUES ('$namme', '$massk', 1)";
					mysqli_query($conn, $sql2);
		}
		mysqli_close($conn);
		echo '<script language="javascript">';
			echo 'alert("'.$massk.' Mask has been added to your cart!");';
			echo '</script>';
		header("Refresh:0; url=index.php");
		}
	
?>

