<?php
session_start();
require 'configure.php';
if (strlen($_SESSION['user_id']==0)) {
  header('location:login.php');
  } 

$fullname = "";
$username = "";
$email="";
$dob="";
$postcode="";
$address = "";
$password = "";

if (isset($_POST['submit']))  {
  $conn = mysqli_connect('localhost', 'root', '', 'aut-veh');

   $user_id=$_SESSION['user_id'];
  $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = mysqli_real_escape_string($conn, $_POST['date']);
  $postcode = mysqli_real_escape_string($conn, $_POST['code']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);


  if ($conn) {    
      $SQL = $conn->prepare("UPDATE login set fullname='$fullname', username='$username', email='$email', dob='$dob', postcode='$postcode', address='$address' WHERE user_id='$user_id'");
      $SQL->execute();
      $_SESSION['error'] = "Profile update successful";
    }else {
    $_SESSION['error'] = "Profile update error";
  }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Autonomous vehicles</title>
  	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/95ae6c8f7a.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
	<header>
		<div id="logo">DRIVERLESS</div>
    <a href="home.php"><img src="media/homebtn.png" width="40" height="40"></a>
		<div class="desc">
        <div class="dropdown">
      <?php
$user_id=$_SESSION['user_id'];
$sql= "select username from login where user_id='$user_id'";
$query = $conn->query($sql);
if($query->num_rows > 0){
$row = $query->fetch_assoc();
$name=$row['username'];
            }
echo $name; ?>
      &nbsp;&nbsp;<i class="fas fa-caret-down dropbtn" onclick="myFunction()"></i>
      <div id="myDropdown" class="dropdown-content">
        <a href="profile.php">My account</a>
        <a href="logout.php">Logout</a>
      </div>
      </div>
    </div>
	</header>
  <?php
$user_id=$_SESSION['user_id'];
$sql= "select * from login where user_id='$user_id'";
$query = $conn->query($sql);
if($query->num_rows > 0){
$row = $query->fetch_assoc();
$fullname=$row['fullname'];
$username=$row['username'];
$email=$row['email'];
$dob=$row['dob'];
$postcode=$row['postcode'];
$address=$row['address'];
            }
?>
	<div class="profile">
   <div class="prof-main">
     <div class="profile-1">
       <h2>MY PROFILE</h2>
       <p>Fullname: <?php echo $fullname;?></p>
       <p>Username: <?php echo $username;?></p>
       <p>Email: <?php echo $email;?></p>
       <p>Date of birth: <?php echo $dob;?></p>
       <p>Postcode: <?php echo $postcode;?></p>
       <p>Address: <?php echo $address;?></p>
     </div>
     <div class="profile-2">
       <div class="fm">
      <h2>UPDATE PROFILE</h2>
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
      <form method="post" action="profile.php">
        <input type="text" name="fullname" value="<?php echo $fullname;?>" required>
        <input type="text" name="username" value="<?php echo $username;?>" required>
        <input type="email" name="email" value="<?php echo $email;?>" required>
        <input type="date" name="date" value="<?php echo $dob;?>">
        <input type="text" name="code" value="<?php echo $postcode;?>" required>
        <input type="text" name="address" value="<?php echo $address;?>" required>
        <a href="pass.php">Change password</a>
        <input type="submit" name="submit" value="Edit account">
      </form>
    </div>
     </div>
   </div> 
  </div>
  <footer>
    <div id="loggo">DRIVERLESS</div>
    <div class="social">
      <img src="media/facebook.png">
      <img src="media/twitter.png">
      <img src="media/instagram.png">
    </div>
    <div class="copyr">Copyright© Autonomous Vehicles</div>
  </footer>
</body>
</html>
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>