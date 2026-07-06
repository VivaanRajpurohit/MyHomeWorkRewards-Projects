<!DOCTYPE html>
<html lang="en">
  <head>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Course",
  "courseCode": "GR12MATH",
  "name": "Limits of Functions",
  "provider": {
    "@type": "HighSchool",
    "name": "MyHomeworkRewards",
    "url": "https://app.myhomeworkrewards.com/lessons/Gr12/Math/Calculus/Intro_To_Calculus/limits.php"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "4",
    "ratingCount": "1",
    "reviewCount": "1"
  },
    "datePublished": "2024-05-01",
    "author": {"@type": "Person", "name": "Gabriel Aversano"},
    "publisher": {"@type": "Organization", "name": "Admin"}
  }
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Probability of events, if one can learn probbility then it can help them by giving them a better understanding of things instead of considering them as 'luck'">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyHomeworkRewards</title>
	<!-- Favicon -->
	<link rel="icon" href="https://app.myhomeworkrewards.com/images/favicon.png" type="image/icon type">
	<link rel="stylesheet" href="bootstrap.min.css">

    <!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		body{background-color:#ffffff;}
		.list-group-item{border:0px solid black;}
		
		.breadcrumb{background-color:#5B0A9F;}
		.breadcrumb>li>a{color:white;}
		
		.well{background-color:#DCC4F8;}
		.panel-primary > .panel-heading{background-color:#DCC4F8; color:black;}
		.panel-default > .panel-heading{background-color:#DCC4F8;}
		h1{font-family: lucida sans;}
	    h2{font-family: lucida sans;}
	    h3{font-family: lucida sans;}
	    
		ol.breadcrumb {
    		display: flex;
    		align-items: center;
    		list-style-type: none;
    		padding: 0;
    		margin-left: 10rem;
   	    	background-color: #5B0A9F;
        	color: #fff;
        	border-radius: 4px;
        	padding: 8px 15px;
    		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        	font-size: 14px;
    		line-height: 1.42857143;
		}

		ol.breadcrumb li {
    		display: inline-block;
    		margin-right: 10px;
		}
	img {
		display: flex;
		border-radius: 7px;
		display: block;
  		margin-left: auto;
  		margin-right: auto;
		margin-top: 2.5rem;
		margin-bottom: 2.5rem;
	}

	.side-by-side {
  display: inline-block; /* Keeps images inline */
  width: 45%; /* Adjust as needed to fit side by side */
  height: auto; /* Maintains aspect ratio */
  margin-right: 10px; /* Optional: space between images */
  vertical-align: top; /* Aligns images at the top */
}

#seperate-image {
	display: inline-block; /* Keeps images inline */
  width: 30%; /* Adjust as needed to fit side by side */
  height: auto; /* Maintains aspect ratio */
  margin-right: 10px; /* Optional: space between images */
  vertical-align: top; /* Aligns images at the top */
}
	</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	
  </head>
  
  <>
  <?php 
  	include_once("header.php");
  ?>



	<div class="container-fluid" style="margin-bottom:30px;"><br><br>
		<div class="row">			
			<div class="col-lg-8 col-lg-offset-2">
				<ol class="breadcrumb">
					<li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
					<li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/gr8_main.php">Gr8</a></li>
					<li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/Math/gr8_math_main.php">Math</a></li>
					<li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Probability of independent events (Multiplication)</a></li>
				</ol>			
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
			<h1>Lesson 8: Probability of independent events (Multiplication)</h1>
				<div class="row">
					<div class="col-lg-9">
					<h2>What Are Independent Events?</h2>
					<p>Independent events are two or more events where the outcome of one event doesn’t affect the outcome of the other. For example,
    				if you roll a die and flip a coin, the result of the die roll doesn't influence the coin flip and vice versa.</p> 
					<img src="image_fx_.jpg" alt="Image of a die and coin" width="200px" height="auto">
					<p>In this example, the two actions—rolling the die and flipping the coin—are completely independent of each other.</p>
					<h2>Multiplication Rule of Probability for Independent Events</h2>
					<p>When you have independent events, the probability of both (or all) events happening together (say, Event A and Event B) is found by multiplying the probability of each individual event:</p>
				<div class="formula">
    				<p><strong>Formula:</strong></p>
   					 <p><code>P(A and B) = P(A) &times; P(B)</code></p>
				</div>
					<p>Where:</p>
						<ul>
    				<li><code>P(A)</code> is the probability of Event A happening</li>
   					 <li><code>P(B)</code> is the probability of Event B happening</li>
   					 <li><code>P(A and B)</code> is the probability of both events happening together</li>
				</ul>
				<h3>Example 1: Understanding with Coin Flip and Dice Roll</h3>
	<div class="example"> 
		<img src="https://image1.slideserve.com/2339838/tree-diagrams-flipping-a-coin-and-rolling-a-die-l.jpg" alt="Image of a probability of a flipping a coin and a die" width="350px" height="auto">
    	<p><strong>Scenario:</strong> Let’s say you have a die and a coin:</p>
    <ul>
        <li>Probability of rolling a 4 on a 6-sided die, <code>P(A) = 1/6</code></li>
        <li>Probability of flipping heads on a coin, <code>P(B) = 1/2</code></li>
    </ul>
    	<p>Since these are independent events, to find the probability of rolling a 4 <em>and</em> flipping heads, you multiply the probabilities:</p>
    	<p><code>P(A and B) = P(A) &times; P(B) = 1/6 &times; 1/2 = 1/12</code></p>
    	<p>So, the probability of both rolling a 4 and flipping heads is <code>1/12</code>.</p>
	</div>
		<h3>Example 2: Drawing Cards and Rolling Dice</h3> 
		<img class="side-by-side" src="https://th.bing.com/th/id/R.ad1d626c2e4ff75d2d8a402a0a964139?rik=pHaOsYPj5K5hVg&riu=http%3a%2f%2fclipart-library.com%2fimages%2fLTd5gKzAc.png&ehk=w3sxnvGHSEMVI9vk0oCE9Yp7%2b7qRExnGhyuQYRQH4Uk%3d&risl=1&pid=ImgRaw&r=0" alt="Deck of cards">
		<img  id ="seperate-image" src="https://th.bing.com/th/id/OIP.Y-Il6RfkPqlhMfqkwKdk3wHaE7?w=270&h=180&c=7&r=0&o=5&pid=1.7" alt="Dice">
		<p><strong>Scenario:</strong> Suppose you draw a card from a standard deck (52 cards) and roll a 6-sided die:</p>
	<ul>
    	<li>Probability of drawing an Ace, <code>P(A) = 4/52 = 1/13</code></li>
    	<li>Probability of rolling a 3, <code>P(B) = 1/6</code></li>
	</ul>
	<p>To find the probability of drawing an Ace <em>and</em> rolling a 3:</p>
	<p><code>P(A and B) = P(A) &times; P(B) = 1/13 &times; 1/6 = 1/78</code></p>
	<p>This shows the probability of both drawing an Ace and rolling a 3 is <code>1/78</code>.</p>
	<h3>Quick Recap</h3>
	<ol>
		<li><strong>Identify</strong> if events are independent (one doesn’t affect the other).</li>
    	<li><strong>Multiply</strong> the probabilities of each event.</li>
	</ol>
	<p>This rule is super useful when dealing with sequences of independent events, such as finding the probability of rolling certain numbers or getting specific coin flip results multiple times in a row!</p>
				    </div>
					
					<div class="col-lg-3">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Review these lessons:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson7.php">Determining Probabilities Using Tree Diagrams and Tables</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="sampling_techniques.php">Sampling Techniques</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="bias.php">Sampling Bias</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="organized_counting.php">Organized Counting</a></li>
								<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="probability_fundamentals.php">Probability Rules</a></li>
								<!---!<li class="list-group-item" style="padding:0px 0px 0px 0px;"><a href="continuity.php">Continuity</a></li>--->
								</ul>
							</div>
						</div>
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Try these questions:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="StatisticsDataDesignPractice.php">Statistics Practice</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<br><br>
				<?php
				include_once("footer.php");
                ?>
			</div>	
		</div>
		
	</div>
	
	

	<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML"></script>
	<script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
