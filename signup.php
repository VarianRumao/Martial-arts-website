<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Martial Arts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href='./style/signup.css'>

</head>
<body>
    
    
  <div class='container'>
  <nav class="navbar navbar-expand-sm fill" >
	                <div class="container">
                        <ul class="navbar-nav ml-auto" style='position:absolute;top:0px;left:-90px'>
					                <li class="nav-item" style='padding-left:20px'><a class="nav-link"  href="home.php"> HOME</a></li>
                            <li class="nav-item " style='padding-left:30px'><a class="nav-link" href="aboutus.php">ABOUT US</a></li>
                            <li class="nav-item" style='padding-left:30px'><a class="nav-link" href="training.php"> TRAINING</a></li>
                            <li class="nav-item active" style='padding-left:30px'><a class="nav-link" href="self-def.php"> SELF-DEF</a></li>
                            <li class="nav-item" style='padding-left:30px'><a class="nav-link" href="#"> LOGIN</a></li>
                        </ul>
	                </div>
                </nav>  
  <section>
    <div class="c">
      <div class="user signinBx">
        <!-- <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img1.jpg" alt="" /></div> -->
        <div class="formBx">
          <form>
            <h2>Sign In</h2>
            <input type="text" name="" placeholder="Username" />
            <input type="password" name="" placeholder="Password" />
            <button type="submit" class="btn btn-primary">Login</button>
            <p class="signup">
              New user ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form>
            <h2>Create an account</h2>
            <input type="text" name="" placeholder="Username" />
            <input type="email" name="" placeholder="Email Address" />
            <input type="password" name="" placeholder="Create Password" />
            <input type="password" name="" placeholder="Confirm Password" />
            <button type="submit" class="btn btn-primary">Sign up</button>
            <p class="signup">
              Already A user ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>
  <script>
    const toggleForm = () => {
      const container = document.querySelector('.c');
      container.classList.toggle('active');
    };
  </script>
</body>
</html>