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
    <meta name="description" content="Limits are Real Numbers that a function can approach but never touch. This lesson outlines both algebraically and graphically the conditions needed for a limit to a exist and the scenarios where it cannot exist.">
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
	</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>	
	
  </head>
  
  <body>
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
					<li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Probabilities With Tables and Diagrams</a></li>
				</ol>			
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
			<h1>Lesson 7: Determining Probabilities Using Tree Diagrams and Tables</h1>
				<div class="row">
					<div class="col-lg-9">
        <h3>Tree Diagrams</h3>
        <p>
            Probability is the math concept, that requires someone to find the chances of something happening<br>
            by using any technique they wish, but there are two main techniques that will be focused on today<br>
            and those are the <strong>tree diagrams</strong> and the<strong> tables</strong>. Tree Diagrams, As The Name Suggests uses branches<br>
            that lead to results of an experiment as shown below<br>
        </p>
        <img src="https://images.squarespace-cdn.com/content/v1/54905286e4b050812345644c/1609607865234-4LK8UL02K1E8K88O288L/Twice.jpg" height="290px" id="tree-diagram-image" alt="Tree Diagram of Homework Rewards">
        <p id="example-header1"> Here is an example to show you what I mean in the picture above</p>
        <p>
            As shown in the image above, if one were to flip a coin, there would be a 50-50 chance of a coin<br>
            landing on either heads or tails, normally a probability is <strong>considered out of one</strong>, so 50 percent<br>
            of 1 is 0.5 the same thing goes for whenever there is a 100 percent chance of something happening,<br>
            that would be written as 1 in mathematical language.<br>
        </p>
        <h3>Tables</h3>
        <p>
            Besides using tree diagrams, another easier way of plotting data and then finding the probability<br>
            of an event is by using tables. Probability using tables involves <strong>organizing data</strong> into a table to <br>
            calculate the likelihood of specific events. By examining the table's entries, you can determine<br>
            the number of favorable outcomes and the total number of possible outcomes. The probability of<br>
            an event is then <strong> calculated as the ratio of favorable outcomes to the total number of outcomes</strong><br>
        </p>
        <img src="https://th.bing.com/th/id/R.da516ddd0a6613d5f13bedd577374f9b?rik=Ika86%2f8mZFV8gw&pid=ImgRaw&r=0" height="290px" id="table-diagram-image" alt="Probability table image">
        <p id="example-header2">Here is an example to show you what I mean in the picture</p>
        <p>
            The table shows the outcomes of flipping a coin three times, where each flip can be heads (H) or tails (T). With three flips, <br>
            there are 2^3 = 8 possible outcomes, listed as combinations like HHH, HHT, etc. Since each flip is independent and has a  <br>
            probability of 1/2 , the probability of getting any specific sequence (e.g., HHH)is 1/2 x 1/2 x 1/2 = 1/8. Therefore, <br>
            each row in the table represents an equally likely outcome with a probability of 1/8.
        </p>
				    </div>
					
					<div class="col-lg-3">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Review these lessons:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
								<!---<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="limits_properties.php"></a></li>--->
								<!---!<li class="list-group-item" style="padding:0px 0px 0px 0px;"><a href="continuity.php"></a></li>--->
								<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="sampling_techniques.php">Sampling Techniques</a></li>
								<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="bias.php">Sampling Bias</a></li>
								<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
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
