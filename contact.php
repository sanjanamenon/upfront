<!DOCTYPE html>
<html>
<title>UpFront</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
body, html {height: 100%}
.bgimg {
    background-image: url('ny.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body class="w3-black">
<div class="bgimg w3-display-container w3-text-white">
<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="tiramisu.jpg" style="width:100%">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="login.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Login/Signup</p>
  </a>
  <a href="res.php" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>Restaurants</p>
  </a>

</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">Login/Signup</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">Restaurants</a>

  </div>
</div>



<!-- Contact Section -->
<div class="w3-padding-64 w3-content w3-text-black" id="contact">
  <h2 class="w3-text-light-grey">Contact us?</h2>
  <hr style="width:200px" class="w3-opacity">

  <div class="w3-section">
    <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Bangalore, India</p>
    <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 000000</p>
    <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
  </div><br>
  <p>Lets get in touch. Send me a message:</p>

  <form action="/action_page.php" target="_blank">
    <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
    <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
    <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
    <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
    <p>
      <button class="w3-button w3-light-grey w3-padding-large" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </p>
  </form>
<!-- End Contact Section -->
</div>

<!-- Footer -->
<footer class="w3-content w3-padding-64 w3-text-black w3-xlarge">
<i class="fa fa-facebook-official w3-hover-opacity"></i>
<i class="fa fa-instagram w3-hover-opacity"></i>
<i class="fa fa-snapchat w3-hover-opacity"></i>
<i class="fa fa-pinterest-p w3-hover-opacity"></i>
<i class="fa fa-twitter w3-hover-opacity"></i>
<i class="fa fa-linkedin w3-hover-opacity"></i>
<p class="w3-medium">A Fame Initaitive <a href="http://fametechnologies.in/" target="_blank" class="w3-hover-text-green">Know More!</a></p>
<!-- End footer -->
</footer>

</body>
</html>