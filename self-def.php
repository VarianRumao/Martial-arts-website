<!-- <?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
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
	 <link rel="stylesheet" type="text/css" href="./style/self-def.css">
</head>
<body>
 <div class="wrapper">
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

   <div class="bg">
     <div class="leftycont">
       <div class="adds" onclick="show()">
         <script type="text/javascript">
            function show(){
              location.href="https://www.amazon.in/Martial-Arts-Accessories/b?ie=UTF8&node=3403650031"
            }
         </script>
       </div>
       </div>
    <div class="bigcont">
    <div class="smallcont">
      <div class="innerdiv">
        <h1>What is self defence?<h1>
       <h2>To understand why training for self-defense is important, it helps to understand what it entails. Self-defense is the training and techniques necessary to defend yourself when targeted by crime or violence. There will always be thieves who want to take what isn’t theirs, and predators who want to hurt or humiliate others. When you train in self-defense, you gain the tools to stay safe from danger.</h2>
      </div>
    </div>
    <div class="smallcont">
      <div class="innerdiv">
        <h1>5 Self-defense moves everyone should know<h1>
          <h2>
          <strong>•Eye:</strong> Aiming at the opponets eye makes him/her partially handicap<br>
          <strong>•Torso:</strong> When the opponent throws a hook or a punch, stop him by using ur arms and target his/her torso<br>
          <strong>•Kick in the groin:</strong> If you think that the opponet is gonna kick you in the groin, stop him/her using ur hands and target the knee cap<br>
          <strong>•Attck on your chest:</strong> Try loosing up his/her grip, if not then attack the opponent's neck<br>
         <strong>•Grabbing the body: </strong> Stamp his/her feet, reverse headbutt</h2>
      </div>
      <div class="media">
          <iframe width="560" height="312" src="https://www.youtube-nocookie.com/embed/ORAOkP1h3R0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      </div>
      <div class="smallcont">
        <div class="innerdiv">
          <h1>How to defend against a knife attack<h1>
         <h2>1. Push your head away from the knife (remember you always have space since the knife is in front if you)<br> 2. Grab the opponents arm firmly and turn it inward<br> 3. Twist it inward and pivoting his/her elbow try pushing the knife towards the opponent </h2>
       </div>
        <div class="media">
        <iframe width="560" height="312" align="center" src="https://www.youtube-nocookie.com/embed/tbYs-OjxAM0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
        <div class="smallcont">
          <div class="innerdiv">
            <h1>How to escape a standing rear choke<h1>
           <h2>1. Bend forward from the waist. This shifts your weight forward, making it more difficult for your attacker to pick you up.<br> 2. It also gives you a better angle to throw elbows from side to side to the attacker’s face.<br>
             Turn into the attacker with one of your elbows and continue counterattacking.<br>
             3.This should give you space to turn fully, using another move to injure the face or strike the groin. With the space these moves have created, you may be able to escape and run away.</h2>
          </div>
          <div class="media">
            <iframe width="560" height="312" src="https://www.youtube-nocookie.com/embed/sKIwNvoCvQU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          </div>
          <div class="smallcont">
            <div class="innerdiv">
              <h1>How to get out of a headlock<h1>
             <h2>1. Turn into the attacker’s side as much as possible to avoid being choked<br>
                 2. With your hand that’s furthest away, strike the groin with open-handed slaps until you have enough mobility to turn your head all the way out to disengage</h2>
            </div>
            <div class="media">
              <iframe width="560" height="312" src="https://www.youtube-nocookie.com/embed/WeIm1_D7Aks" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="footer">
            <div class="footer-content">
              <div class="footer-sectionone">
                <h1><br>Feel free to ask us anything</br></h1>
                 <h2>If you do like our website submit your feedback in the contact form below</h2>
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

      </div>
    </div>
  </body>
</html>
