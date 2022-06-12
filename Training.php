<!-- <?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?> -->
 <!Doctype html>
<html>
<head>
	<title>Martial Artswork - Training</title>
	<link rel="shortcut icon" HREF="../image/logo.png">
	<link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/navbc.css">
    <link rel="stylesheet" type="text/css" href="./style/train.css">
</head>
<body>
	<div class="wrapper">
	<div class="bgimage1">
		<div class="menu">
			<nav>

			    <div class="hamburger">
			    	<div class="line"></div>
			    	<div class="line"></div>
			    	<div class="line"></div>
			    </div>

          <div class="logod" onclick="home()">
			    </div>
					<script type="text/javascript">
			       function home(){
			         location.href="index.php"
			       }
			    </script>

			    <ul class="nav-links">
					<li><a href="home.php"> HOME </a></li>
					<li><a href="Training.php" id="onlink"> TRAINING </a></li>
					<li><a href="self-def.php"> self-def </a></li>
					<li><a href="aboutus.php"> About US </a></li>
					<li><a href="signup.php"> Sign up </a></li>
			    </ul>
   			</nav>

		</div>
		<div class="bigdiv">
			<div class="ft">
			  <div class="thefront">
          <div class="ftimage1">
          </div>
					<div class="ftt1">
						<h1>FIGHT AND TRAIN</h1>
					</div>
			    </div>
					<div class="theback">
						<div class="matter">
							<h1>Learn about the basic techniques of martial arts. Hit the Learn more button to know more about Fight and train..</h1>
							<a href="f_t.php"><button a href="f_t.php" target="_blank" id="buttonn"> Learn more</button></a>
						</div>
					</div>
			</div>
			<div class="ft">
				<div class="thefront">
          <div class="ftimage2">
          </div>
					<div class="ftt1">
						<h1>SELF DEFENCE</h1>
					</div>
			    </div>
				<div class="theback">
					<div class="matter">
							<h1>Learn about the lastest Self-Defense techniques on this page. Also find the right move about your favourite fighting style. Hit the Learn more button to know more about Self-Defense..</h1>
							<a href="self-def.php"><button a href="self-def.php" target="_blank" id="buttonn"><span> Learn more</span></button></a>
					</div>
				</div>
			</div>
			<div class="ft">
				<div class="thefront">
          <div class="ftimage3">
          </div>
						<div class="ftt1">
							<h1>NUTRITION</h1>
					    </div>
			    </div>
				<div class="theback">
					<div class="matter">
							<h1>To develop a healthy nutritional program that not only aids in weight loss or gain but improves ones well being, aids in quick recovery from illness, reduces risk of diseases among many others.Hit the Learn more button to know more about Nutrition</h1>
							<a href="nutri.php"><button a href="nutri.php" target="_blank" id="buttonn"> Learn more</button></a>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
<div class="footer">
  <div class="footer-content">
    <div class="footer-sectionone">
      <p>Feel free to ask us anything . We are engineers ,so we are jobless anyways.</p>
      <div class="fcontact">
        <span></i> &nbsp;+91-7045020790</span>
        <span></i> &nbsp;martialartswork@maybe.com</span>
        <a href="contact.php" style="text-decoration: none">Contact form</a>
      </div>
    </div>
    <div class="footer-sectiontwo">
        <div id="map">
        </div>
    </div>
  </div>
  <div class="fdown">
    Made by Clane | Varian | Gladstone | Rickie
  </div>

  </div>

<script src="../jss/nav.js"></script>
<script>
function initMap() {
var uluru = {lat: 19.243400, lng: 72.855832};
var map = new google.maps.Map(
    document.getElementById('map'), {zoom: 8, center: uluru});
var marker = new google.maps.Marker({position: uluru, map: map});
}
  </script>

  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">
  </script>
</body>
</html>
