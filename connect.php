<?php 
$host = 'localhost';


?>
<?php

$db_host = "localhost";
	$db_user = "root"; 
	$db_password = ""; 
	$db_name = "VOiC";
	$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];
  $query = "SELECT * FROM info WHERE email='$email' AND pwd='$pwd'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result)) {
       session_start();         
       session_regenerate_id();
       $_SESSION["user_id"] = $user["id"];     
       header("Location: UI.php");
       exit;
  } else {
       $is_invalid = true;
    }
}
?> 