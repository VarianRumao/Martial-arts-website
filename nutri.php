<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!Doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Martial Artswork - Training</title>
 <link rel="shortcut icon" HREF="../image/logo.png">
 <link rel="stylesheet" type="text/css" href="./style/style.css">
	 <link rel="stylesheet" type="text/css" href="./style/navbc.css">
	 <link rel="stylesheet" type="text/css" href="./style/nutrition.css">
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
         <li><a href="home.php" > HOME </a></li>
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
        <h1>Why follow a diet?<h1>
       <h2>Eating healthy can help you lose weight and have more energy. It can also improve your mood and reduce your risk of disease. Yet despite these benefits, maintaining a healthy diet and lifestyle can be challenging.</h2>
      </div>
    </div>
    <div class="smallcont">

      <div class="innerdiv">
        <h1>1. Paleo Diet<h1>
       <h2>The paleo diet claims that you should eat the same foods that your hunter-gatherer ancestors ate before agriculture developed.

The theory is that most modern diseases can be linked to the Western diet and the consumption of grains, dairy, and processed foods.

While it's debatable whether this diet really provides the same foods your ancestors ate, it is linked to several impressive health benefits.<br>

How it works: The paleo diet emphasizes whole foods, lean protein, vegetables, fruits, nuts, and seeds, while discouraging processed foods, sugar, dairy, and grains.

Some more flexible versions of the paleo diet also allow for dairy like cheese and butter, as well as tubers like potatoes and sweet potatoes.<br>

Weight loss: Several studies have shown that the paleo diet can lead to significant weight loss and reduced waist size.In studies, paleo dieters automatically eat much fewer carbs, more protein, and 300–900 fewer calories per day<br>

Other benefits: The diet seems effective at reducing risk factors for heart disease, such as cholesterol, blood sugar, blood triglycerides, and blood pressure.<br>

The downside: The paleo diet eliminates whole grains, legumes, and dairy, which are healthy and nutritious.</h2>
      </div>
      <div class="media">
          <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/zB9RXefnYII" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      </div>
      <div class="smallcont">
        <div class="innerdiv">
          <h1>2. Vegan diet<h1>
         <h2>The vegan diet restricts all animal products for ethical, environmental, or health reasons.

Veganism is also associated with resistance to animal exploitation and cruelty.<br>

How it works: Veganism is the strictest form of vegetarianism.

In addition to eliminating meat, it eliminates dairy, eggs, and animal-derived products, such as gelatin, honey, albumin, whey, casein, and some forms of vitamin D3.<br>

Weight loss: A vegan diet seems to be very effective at helping people lose weight — often without counting calories — because its very low fat and high fiber content may make you feel fuller for longer.

Vegan diets are consistently linked to lower body weight and body mass index (BMI) compared to other diets.<br>

One 18-week study showed that people on a vegan diet lost 9.3 pounds (4.2 kg) more than those on a control diet. The vegan group was allowed to eat until fullness, but the control group had to restrict calories.

However, calorie for calorie, vegan diets are not more effective for weight loss than other diets .

Weight loss on vegan diets is primarily associated with reduced calorie intake.<br>

Other benefits: Plant-based diets are linked to a reduced risk of heart disease, type 2 diabetes, and premature death.<br>

Limiting processed meat may also reduce your risk of Alzheimer's disease and dying from heart disease or cancer .<br>

The downside: Because vegan diets eliminate animal foods completely, they may be low in several nutrients, including vitamin B12, vitamin D, iodine, iron, calcium, zinc, and omega-3 fatty acids.<br>
       </div>
       <div class="media">
           <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ZhvWrOUncCo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
      </div>
        <div class="smallcont">
          <div class="innerdiv">
            <h1>3. Low Carbs Diet<h1>
           <h2>Low-carb diets have been popular for decades — especially for weight loss.

There are several types of low-carb diets, but all involve limiting carb intake to 20–150 grams per day.

The primary aim of the diet is to force your body to use more fats for fuel instead of using carbs as a main source of energy.<br>

How it works: Low-carb diets emphasize unlimited amounts of protein and fat while severely limiting your carb intake.

When carb intake is very low, fatty acids are moved into your blood and transported to your liver, where some of them are turned into ketones.

Your body can then use fatty acids and ketones in the absence of carbs as its primary energy source.<br>

Weight loss: Numerous studies indicate that low-carb diets are extremely helpful for weight loss, especially in overweight and obese individuals.

They seem to be very effective at reducing dangerous belly fat, which can become lodged around your organs.<br>

People on very low-carb diets commonly reach a state called ketosis. Many studies note that ketogenic diets lead to more than twice the weight loss than a low-fat, calorie-restricted diet.

Other benefits: Low-carb diets tend to reduce your appetite and make you feel less hungry, leading to an automatic reduction in calorie intake.

Furthermore, low-carb diets may benefit many major disease risk factors, such as blood triglycerides, cholesterol levels, blood sugar levels, insulin levels, and blood pressure.<br>

The downside: Low-carb diets do not suit everyone. Some feel great on them while others feel miserable.

Some people may experience an increase in “bad” LDL cholesterol.

In extremely rare cases, very low-carb diets can cause a serious condition called nondiabetic ketoacidosis. This condition seems to be more common in lactating women and can be fatal if left untreated.

However, low-carb diets are safe for the majority of people.</h2>
          </div>
          <div class="media">
            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Q89St6BTxIQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          </div>
          <div class="smallcont">
            <div class="innerdiv">
              <h1>4. Dukan Diet<h1>
             <h2>The Dukan diet is a high-protein, low-carb weight loss diet split into four phases — two weight loss phases and two maintenance phases.

              How long you stay in each phase depends on how much weight you need to lose. Each phase has its own dietary pattern.<br>

              How it works: The weight loss phases are primarily based on eating unlimited high-protein foods and mandatory oat bran.

              The other phases involve adding non-starchy vegetables followed by some carbs and fat. Later on, there will be fewer and fewer pure protein days to maintain your new weight.

              Weight loss: In one study, women following the Dukan diet ate about 1,000 calories and 100 grams of protein per day and lost an average of 33 pounds (15 kg) in 8–10 weeks .

              Also, many other studies show that high-protein, low-carb diets may have major weight loss benefits.

              These include a higher metabolic rate, a decrease in the hunger hormone ghrelin and an increase in several fullness hormones.<br>

              Other benefits: Apart from weight loss, there are no recorded benefits of the Dukan diet in scientific literature.<br>

              The downside: There is very little quality research available on the Dukan diet.

              The Dukan diet limits both fat and carbs — a strategy not based on science. On the contrary, consuming fat as part of a high-protein diet seems to increase metabolic rate compared to both low-carb and low-fat diets .

              What’s more, fast weight loss achieved by severe calorie restriction tends to cause significant muscle loss (61Trusted Source).

              The loss of muscle mass and severe calorie restriction may also cause your body to conserve energy, making it very easy to regain the weight after losing it.</h2>
            </div>
            <div class="media">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/wJe71nnjLmw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>              </div>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>
