<!Doctype html>
<html>
<head>
  <title>Martial Artswork - Contact us</title>
  <link rel="shortcut icon" HREF="../image/logo.png">
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/navbc.css">
    <link rel="stylesheet" type="text/css" href="./style/contact.css">
</head>
<body>
  <div class="wrapper">
  <div class="bgimage">
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
          <li><a href="home.php" id="onlink"> HOME </a></li>
					<li><a href="Training.php"> TRAINING </a></li>
					<li><a href="self-def.php"> self-def </a></li>
					<li><a href="aboutus.php"> About US </a></li>
					<li><a href="signup.php"> Sign up </a></li>
			    </ul>
        </nav>

    </div>
    
    <section class='contact' id='contact'>




      <div class='content'>
        <h2>CONTACT US</h2>
      </div>
      <div class='container-4'>
        <div class='contactInfo'>
          <div class='box'>
              <div class='icon'><i class="fa fa-map-marker 1x" ></i></div>
              <div class="text">
                <h3>ADDRESS</h3>
                <span> We Care For You, <br>
                  Virar west, <br>
                  Mumbai 401301</span>
              </div>
          </div>
          <div class='box'>
              <div class='icon'><i class="fa fa-phone fa-1x" aria-hidden="true"></i></div>
              <div class="text">
                <h3>PHONE</h3>
                <span>+91 8698720039 <br>+91 9975382882</span>
              </div>
          </div>
          <div class='box'>
            <div class='icon'><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></div>
              <div class="text">
                <h3>Email</h3>
                <span><a href="mailto:magnuslopes23@gmail.com" style='color:#F7DC5F;text-decoration:none'>magnuslopes23@gmail.com <br> mervinkzar@gmail.com</a></span>
              </div>
          </div>
        </div>



        <div class="contactForm">
          <form action="contact.php" method="POST" >
            <h2>Send Message</h2>
            <div class='inputBox'>
              <span >Full Name</span><br>
              <input type="text" name='nameq' id="fname" min="3" maxlength="15" >
             
              <br>
              <span id="error"></span>
            </div>
            <div class='inputBox'>
                <span>Email</span><br>
              <input type="text" name='emailq' id="email" >
              <br>
              <span id="error1"></span>
            </div>
            <div class='inputBox'>
              
              <span > Feedback</span><br>
              <textarea style='background-color:white;color:black' name="feedback" id="feedback" cols="30" rows="10"  ></textarea>
              <br>
              <span id="error2"></span>
            </div>
            <div class='inputBox'>
              <button style='background-color: #724141; height: 30px;color: white; font-size: 20px' onclick="return validate()" type="submit" name='submit'>Submit</button>
              
            </div>
          </form>
        </div>
      </div>
    </section>
    <script>
      function validate(){
      var names=document.getElementById("fname").value;
      var namez=names.trim();
      var regex=/^[a-zA-Z- ]+([w ]{0,})+[a-zA-Z]+$/;  
      
      if(namez==""){
            document.getElementById("error").innerHTML="Please fill out this field";
            document.getElementById("error").style.color="red";
            //alert("fiil out");
            
            return false;
            
      }
      else if(regex.test(namez)==false){
          document.getElementById("error").innerHTML="Only characters are allowed";
          document.getElementById("error").style.color="red";
          return false;
      }
      else if (regex.test(namez)==true){
          document.getElementById("error").innerHTML="";
          
      }
      var emails=document.getElementById("email").value;
      var regex1=/(^[A-Za-z_\-\.]{3,15})+([0-9]{0,})+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if(emails==""){
            document.getElementById("error1").innerHTML="Please fill out this field";
            document.getElementById("error1").style.color="red";
            //alert("fiil out");
            
            return false;
            
      }
      else if(regex1.test(emails)==false){
          document.getElementById("error1").innerHTML="Enter a valid email address";
          document.getElementById("error1").style.color="red";
          return false;
      }
      else if (regex1.test(emails)==true){
          document.getElementById("error1").innerHTML="";
          
      }
     var feedbacks=document.getElementById("feedback").value;
     //var feddbackz=feedbacks.trim();
     if(feedbacks==""){
            document.getElementById("error2").innerHTML="Please enter your feedback";
            document.getElementById("error2").style.color="red";
            //alert("fiil out");
            
            return false;
            
      }
      else {
          document.getElementById("error2").innerHTML="";
          
      }


    }

</script>
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
      <!--  <a href="contact.php" style="text-decoration: none">Contact form</a>-->
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