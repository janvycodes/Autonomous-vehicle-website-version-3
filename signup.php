<?php
require 'configure.php';
$fullname = "";
$username = "";
$email="";
$dob="";
$postcode="";
$address = "";
$password = "";

if (isset($_POST['submit']))  {
	$conn = mysqli_connect('localhost', 'root', '', 'aut-veh');

	$fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['date']);
	$postcode = mysqli_real_escape_string($conn, $_POST['code']);
	$address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

	if ($conn) {		
		$SQL = $conn->prepare('SELECT * FROM login WHERE username = ?');
		$SQL->bind_param('s', $username);
		$SQL->execute();
		$result = $SQL->get_result();

		if ($result->num_rows > 0) {
			$_SESSION['error'] = "*Username is already taken";
		}
		else {
			$phash = password_hash($password, PASSWORD_DEFAULT);
			$SQL = $conn->prepare("INSERT INTO login (fullname, username, email, dob, postcode, address, password) VALUES ('$fullname', '$username', '$email', '$dob', '$postcode', '$address', '$phash')");
			$SQL->execute();
			header ("Location: login.php");
		}
	}
	else {
		$_SESSION['error'] = "Database Not Found";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Autonomous vehicles</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
	<header>
		<div id="logo">DRIVERLESS</div>
		<div class="nav-menu">
          <a href="index.php">Home</a>
        </div>
	</header>
	<div class=login>
		<div class="fm">
			<h2>SIGN UP</h2>
			<?php
				if(isset($_SESSION['error'])){
					?>
					<div class="alert">
						<?php echo $_SESSION['error']; ?>
					</div>
					<?php
					unset($_SESSION['error']);
					}
					?>
			<form method="post" action="signup.php">
				<input type="text" name="fullname" placeholder="full name" required>
				<input type="text" name="username" placeholder="username" required>
				<input type="email" name="email" placeholder="email" required>
				<input type="date" name="date">
				<input type="text" name="code" placeholder="postcode" required>
				<input type="text" name="address" placeholder="postal address" required>
				<input type="password" name="password" placeholder="password" required>
				<a href="login.php">Already a member, Login</a>
				<input type="submit" name="submit" value="Create account">
			</form>
		</div>
	</div>
</body>
</html>