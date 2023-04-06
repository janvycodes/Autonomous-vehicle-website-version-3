<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Autonomous vehicles</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<div class="inner-width">
        <div class="menu">
        <i class="fas fa-bars menu-toggle-btn" alt="menu"></i>
        </div>
        <div class="navigation-menu">
		  <a href="login.php">Login</a>
		  <a href="signup.php">Sign up</a>
        </div>
      </div>
	</header>
	<div class="banner">
   <h2>Do you want the best in autonomous vehicles?</h2>
   <p>Here at Driverless we pride ourselves as the best in automobile manufacturing, maintenance and sale. Our trusted staff use indistry standard procedures when catering for all your automobile needs.</p>
  </div>
  <div class="main">
    <div class="sidebar">
      <h2>LINKS</h2>
      <p><a href="#about"><i class="fas fa-comment"></i></a>&nbsp;&nbsp;<a href="#about" class="hdn">About</a></p>
      <p><a href="#contact"><i class="fas fa-phone"></i></a>&nbsp;&nbsp;<a href="#contact" class="hdn">Contact Us</a></p>

      <!-- Display the countdown timer in an element -->
    <p id="demo"></p>
    <p class="who">New Year Auction</p>
    </div>
    <div class="other">
      <div class="prod">
        <h2>PRODUCT RECOMMENDATIONS</h2>
        <div class="yess">
          <div class="yes-1">
            <i class="fas fa-cogs"></i>
            <p class="yy">EFFECIENCY</p>
            <p>Our vehicles are world class and can be trusted as brand known for our efficiency.</p>
          </div>
          <div class="yes-2">
            <i class="fa fa-shield"></i>
            <p class="yy">STRENGTH</p>
            <p>Our vehicles are built with the best materials that make them stronger and last longer.</p>
          </div>
          <div class="yes-3">
            <i class="fas fa-bolt"></i>
            <p class="yy">SPEED</p>
            <p>Our vehicles are fast and reliable and get you to your destination on time. </p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gallery">
    <h2>GALLERY</h2>
  <div class="grid-container">
    <img src="media/gd1.jpg" alt="grid-item">
    <img src="media/gd2.jpg" alt="grid-item">
    <img src="media/gd3.jpg" alt="grid-item">
    <img src="media/gd4.jpg" alt="grid-item">
    <img src="media/gd5.jpg" alt="grid-item">
    <img src="media/gd6.jpg" alt="grid-item">
  </div>
  </div>
  <div class="yeah">
    <div id="contact">
      <h3>CONTACT US</h3>
      <form action="">
        <input type="email" name="email" placeholder="enter your email" required="">
        <input type="text" name="topic" placeholder="enter topic of message" required="">
        <textarea name="message" placeholder="enter message" required=""></textarea>
        <input type="radio" name="news">Subscribe to our newsletter
        <button type="button" name="submit" id="myBtn">Submit</button>
      </form>
    </div>
    <div id="about">
      <h3>ABOUT US</h3>
      <p>DRIVERLESS was founded in 1998 by Robert Guy as a car information business that provided information to clients about various cars they may need. The company has since grown to be one of the largest in the world.</p>
      <p>DRIVERLESS GO is the software arm of the company that created the DRIVER PLUS AI that is used at Driver;ess systems. This custom AI has been of greate use in the company as it simplifies the design, manufacturing and distribution of autonomous vehicles.</p>
      <video src="media/vidd.mp4" autoplay="autoplay" muted="muted" loop="loop"></video>
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
  <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>FAQ</h3>
    <p>Can i purchase vehicles from this site?</p>
    <p><span>Support:</span> You cannot purchase vehicles from our site right now. We hope to add the feature soon.</p>
    <p>Can anyone register an account on the site?</p>
    <p><span>Support:</span> The site is open to anyone and every one who wishes to join. Just create an account.</p>
    <p>How does one create an account on the site?</p>
    <p><span>Support:</span> You can create an account by visiting the sign up page via the link in the header. You will be automatically redirected to the login page.</p>
    <p>Can't find what you're looking for? Click this button to <a href="mailto:driverless@mail.com">LEAVE A MESSAGE</a></p> 
  </div>

</div>
</body>
</html>
<script type="text/javascript">
      $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      });
</script>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 25, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
