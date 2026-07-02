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
    <title>Solving Probability Words Problems</title>
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
					<li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a><li>
					<li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/gr8_main.php">Gr8</a></li>
					<li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/Math/gr8_math_mainphp">Math</a></li>
					<li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Probabilities With Tables and Diagrams</a></li>
				</ol>			
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
			<h1>Word Problems On Lessons 7 and 8</h1>
				<div class="row">
					<div class="col-lg-9">
						<p>
							<b>Tree diagrams</b> are visual tools used to display possible outcomes of a probability experiment, especially when there are <b>multiple events</b>. 
							Each branch represents an outcome, and the probability of a combined outcome can be determined by <b>multiplying probabilities</b> along each path.<br> 
							For example, if you <b>toss two coins</b>, each coin has two outcomes: heads (H) or tails (T).<br>
							<b>Mini Example:</b> P(H and H) = 1/2 × 1/2 = 1/4.<br> Tree diagrams help <b>visualize all possible outcomes</b> and their probabilities clearly.
						</p>

						<p>
							The probability of <b>independent events</b> can be determined using the <b>multiplication rule</b>: P(A and B) = P(A) × P(B). 
							Events are <b>independent</b> if the occurrence of one does not affect the other.<br> 
							For instance, when you <b>roll two dice</b>, the probability of rolling a 4 on the first die and a 5 on the second die is:<br>
							<b>Mini Example:</b> P(4 and 5) = 1/6 × 1/6 = 1/36.<br>
							Similarly, if you <b>toss three coins</b>, the probability of getting three heads is:<br>
							<b>Mini Example:</b> P(H, H, H) = 1/2 × 1/2 × 1/2 = 1/8.<br>
							This rule simplifies finding probabilities for <b>multiple independent events</b>.
						</p>

                         <!-- This is the 1st question -->
					    <hr>
						 <div class="well well-sm">
							<p>A survey was conducted among 50 student about their favorite sports. The data is summarized in the table: </span><span id="MathJax-Element-10-Frame" class="mjx-chtml MathJax_CHTML" tabindex="0" style="font-size: 117%; position: relative;" data-mathml="<math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;><mn>240</mn><mn>000</mn><mspace width=&quot;thickmathspace&quot; /><mo stretchy=&quot;false&quot;>[</mo><mtext>riders/day</mtext><mo stretchy=&quot;false&quot;>]</mo></math>" role="presentation"><span id="MJXc-Node-28" class="mjx-math" aria-hidden="true"><span id="MJXc-Node-29" class="mjx-mrow"><span id="MJXc-Node-30" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;">240</span></span><span id="MJXc-Node-31" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;">000</span></span><span id="MJXc-Node-32" class="mjx-mspace" style="width: 0.278em; height: 0px;"></span><span id="MJXc-Node-33" class="mjx-mo"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.614em;">[</span></span><span id="MJXc-Node-34" class="mjx-mtext"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.614em;"></span></span><span id="MJXc-Node-35" class="mjx-mo"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.614em;"></span></span></span></span><span class="MJX_Assistive_MathML" role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>240</mn><mn>000</mn><mspace width="thickmathspace"></mspace><mo stretchy="false"></mo><mtext></mtext><mo stretchy="false"></mo></math></span></span><script type="math/tex" id="MathJax-Element-10">240 000\; </script>  <span class="MathJax_Preview" style="color: inherit; display: none;"></span><span id="MathJax-Element-11-Frame" class="mjx-chtml MathJax_CHTML" tabindex="0" style="font-size: 117%; position: relative;" data-mathml="<math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;><mrow class=&quot;MJX-TeXAtom-ORD&quot;><mo>$</mo></mrow><mn>2</mn></math>" role="presentation"><span id="MJXc-Node-36" class="mjx-math" aria-hidden="true"><span id="MJXc-Node-37" class="mjx-mrow"><span id="MJXc-Node-38" class="mjx-texatom"><span id="MJXc-Node-39" class="mjx-mrow"><span id="MJXc-Node-40" class="mjx-mo"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.369em;"></span></span></span></span><span id="MJXc-Node-41" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;">2</span></span></span></span><span class="MJX_Assistive_MathML" role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow class="MJX-TeXAtom-ORD"><mo></mo></mrow><mn></mn></math></span></span><script type="math/tex" id="MathJax-Element-11"></script><span class="MathJax_Preview" style="color: inherit; display: none;"></span><span id="MathJax-Element-12-Frame" class="mjx-chtml MathJax_CHTML" tabindex="0" style="font-size: 117%; position: relative;" data-mathml="<math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;><mrow class=&quot;MJX-TeXAtom-ORD&quot;><mo>$</mo></mrow><mn>0.10</mn></math>" role="presentation"><span id="MJXc-Node-42" class="mjx-math" aria-hidden="true"><span id="MJXc-Node-43" class="mjx-mrow"><span id="MJXc-Node-44" class="mjx-texatom"><span id="MJXc-Node-45" class="mjx-mrow"><span id="MJXc-Node-46" class="mjx-mo"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.369em;"></span></span></span></span><span id="MJXc-Node-47" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;"></span></span></span></span><span class="MJX_Assistive_MathML" role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow class="MJX-TeXAtom-ORD"><mo></mo></mrow><mn></mn></math></span></span><script type="math/tex" id="MathJax-Element-12"></script><span class="MathJax_Preview" style="color: inherit; display: none;"></span><span id="MathJax-Element-13-Frame" class="mjx-chtml MathJax_CHTML" tabindex="0" style="font-size: 117%; position: relative;" data-mathml="<math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;><mn>10</mn><mn>000</mn></math>" role="presentation"><span id="MJXc-Node-48" class="mjx-math" aria-hidden="true"><span id="MJXc-Node-49" class="mjx-mrow"><span id="MJXc-Node-50" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;">10</span></span><span id="MJXc-Node-51" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;">000</span></span></span></span><span class="MJX_Assistive_MathML" role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn></mn><mn></mn></math></span></span><script type="math/tex" id="MathJax-Element-13"></script></p>
							<table border="1" style="border-collapse: separate; border-spacing: 10px; border-radius: 10px; overflow: hidden;">
							<tr>
								<th style="padding: 10px;">Sport</th>
								<th style="padding: 10px;">Number of Students</th>
							</tr>
							<tr>
								<td style="padding: 10px;">Basketball</td>
								<td style="padding: 10px;">15</td>
							</tr>
							<tr>
								<td style="padding: 10px;">Soccer</td>
								<td style="padding: 10px;">20</td>
							</tr>
							<tr>
								<td style="padding: 10px;">Tennis</td>
								<td style="padding: 10px;">10</td>
							</tr>
							<tr>
								<td style="padding: 10px;">Swimming</td>
								<td style="padding: 10px;">5</td>
							</tr>
						</table>


							<p>If one student is selected randomly:</p>
								<ol type="i">
								<li>What is the probability that the student prefers soccer?</li>
								<li>what is the probability that the stuednt does not prefer tennis?</li>
							</ol>
					    </div>

                       <!--1st questions explanations -->
						<span class="show-answer collapsed" style="cursor: pointer; text-decoration: underline;" 
          				data-target="example" aria-pressed="false">Show Answer</span>
						<div id="example" class="hidden-answer">
						<p><strong>Data Table:</strong></p>
							<p>For instance, assume the following data:</p>
							<ul>
								<li>Soccer: 20 students</li>
								<li>Tennis: 15 students</li>
								<li>Basketball: 10 students</li>
								<li>Other sports: 5 students</li>
							</ul>

							<p><strong>Solution:</strong></p>

							<p><strong>(i) Probability that the student prefers soccer:</strong></p>
							<p>
								Probability is calculated as the ratio of favorable outcomes to the total outcomes:
								<br>
								<em>P(Soccer) = Number of students who prefer soccer / Total number of students</em>
								<br>
								<em>P(Soccer) = 20 / 50 = 0.4 or 40%</em>
							</p>

							<p><strong>(ii) Probability that the student does not prefer tennis:</strong></p>
							<p>
								First, calculate the number of students who do not prefer tennis:
								<br>
								<em>Students not preferring tennis = Total students - Students who prefer tennis</em>
								<br>
								<em>Students not preferring tennis = 50 - 15 = 35</em>
								<br>
								Now, calculate the probability:
								<br>
								<em>P(Not Tennis) = Students not preferring tennis / Total students</em>
								<br>
								<em>P(Not Tennis) = 35 / 50 = 0.7 or 70%</em>
							</p>
						</div>
					  <hr>
						
                        <!-- This is the 2nd question -->

						<div class="well well-sm">
							<p>A shop sold the following number of ice cream cones in one week:</span><span id="MathJax-Element-10-Frame" class="mjx-chtml MathJax_CHTML" tabindex="0" style="font-size: 117%; position: relative;" data-mathml="<math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;><mn>240</mn><mn>000</mn><mspace width=&quot;thickmathspace&quot; /><mo stretchy=&quot;false&quot;>[</mo><mtext>riders/day</mtext><mo stretchy=&quot;false&quot;>]</mo></math>" role="presentation"><span id="MJXc-Node-28" class="mjx-math" aria-hidden="true"><span id="MJXc-Node-29" class="mjx-mrow"><span id="MJXc-Node-30" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;"></span></span><span id="MJXc-Node-31" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;"></span></span><span id="MJXc-Node-32" class="mjx-mspace" style="width: 0.278em; height: 0px;"></span><span id="MJXc-Node-33" class="mjx-mo"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.614em;"></span></span><span id="MJXc-Node-34" class="mjx-mtext"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.614em;"></span></span><span id="MJXc-Node-35" class="mjx-mo"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.614em;"></span></span></span></span><span class="MJX_Assistive_MathML" role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn></mn><mn></mn><mspace width="thickmathspace"></mspace><mo stretchy="false"></mo><mtext></mtext><mo stretchy="false"></mo></math></span></span><script type="math/tex" id="MathJax-Element-10"></script>  <span class="MathJax_Preview" style="color: inherit; display: none;"></span><span id="MathJax-Element-11-Frame" class="mjx-chtml MathJax_CHTML" tabindex="0" style="font-size: 117%; position: relative;" data-mathml="<math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;><mrow class=&quot;MJX-TeXAtom-ORD&quot;><mo>$</mo></mrow><mn>2</mn></math>" role="presentation"><span id="MJXc-Node-36" class="mjx-math" aria-hidden="true"><span id="MJXc-Node-37" class="mjx-mrow"><span id="MJXc-Node-38" class="mjx-texatom"><span id="MJXc-Node-39" class="mjx-mrow"><span id="MJXc-Node-40" class="mjx-mo"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.369em;"></span></span></span></span><span id="MJXc-Node-41" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;"></span></span></span></span><span class="MJX_Assistive_MathML" role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow class="MJX-TeXAtom-ORD"><mo></mo></mrow><mn></mn></math></span></span><script type="math/tex" id="MathJax-Element-11"></script><span class="MathJax_Preview" style="color: inherit; display: none;"></span><span id="MathJax-Element-12-Frame" class="mjx-chtml MathJax_CHTML" tabindex="0" style="font-size: 117%; position: relative;" data-mathml="<math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;><mrow class=&quot;MJX-TeXAtom-ORD&quot;><mo>$</mo></mrow><mn>0.10</mn></math>" role="presentation"><span id="MJXc-Node-42" class="mjx-math" aria-hidden="true"><span id="MJXc-Node-43" class="mjx-mrow"><span id="MJXc-Node-44" class="mjx-texatom"><span id="MJXc-Node-45" class="mjx-mrow"><span id="MJXc-Node-46" class="mjx-mo"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.491em; padding-bottom: 0.369em;"></span></span></span></span><span id="MJXc-Node-47" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;"></span></span></span></span><span class="MJX_Assistive_MathML" role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML"><mrow class="MJX-TeXAtom-ORD"><mo></mo></mrow><mn></mn></math></span></span><script type="math/tex" id="MathJax-Element-12"></script><span class="MathJax_Preview" style="color: inherit; display: none;"></span><span id="MathJax-Element-13-Frame" class="mjx-chtml MathJax_CHTML" tabindex="0" style="font-size: 117%; position: relative;" data-mathml="<math xmlns=&quot;http://www.w3.org/1998/Math/MathML&quot;><mn>10</mn><mn>000</mn></math>" role="presentation"><span id="MJXc-Node-48" class="mjx-math" aria-hidden="true"><span id="MJXc-Node-49" class="mjx-mrow"><span id="MJXc-Node-50" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;"></span></span><span id="MJXc-Node-51" class="mjx-mn"><span class="mjx-char MJXc-TeX-main-R" style="padding-top: 0.369em; padding-bottom: 0.369em;"></span></span></span></span><span class="MJX_Assistive_MathML" role="presentation"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn></mn><mn></mn></math></span></span><script type="math/tex" id="MathJax-Element-13"></script></p>
							<table border="1" style="border-collapse: separate; border-spacing: 10px; border-radius: 10px; overflow: hidden;">
							<tr>
								<th style="padding: 10px;">flavor</th>
								<th style="padding: 10px;">Cones Sold</th>
							</tr>
							<tr>
								<td style="padding: 10px;">Vanilla</td>
								<td style="padding: 10px;">40</td>
							</tr>
							<tr>
								<td style="padding: 10px;">Chocolate</td>
								<td style="padding: 10px;">50</td>
							</tr>
							<tr>
								<td style="padding: 10px;">Strawberry</td>
								<td style="padding: 10px;">30</td>
							</tr>
							<tr>
								<td style="padding: 10px;">Mint</td>
								<td style="padding: 10px;">20</td>
							</tr>
						</table>


							<p>If a cone is chosen randomly form the sales:</p>
								<ol type="i">
								<li>What is the probability that it is Vanilla?</li>
								<li>What is the probability that is Chocolate or Strawberry?</li>
							</ol>
					    </div>

					<!-- This is the 2nd question's explanation -->
					<span class="show-answer collapsed" style="cursor: pointer; text-decoration: underline;" 
          				data-target="example2" aria-pressed="false">Show Answer</span>
						<div id="example2" class="hidden-answer">
							<p><strong>Data Table:</strong></p>
							<p>For instance, assume the following data:</p>
							<ul>
								<li>Soccer: 20 students</li>
								<li>Tennis: 15 students</li>
								<li>Basketball: 10 students</li>
								<li>Other sports: 5 students</li>
							</ul>

							<p><strong>Solution:</strong></p>

							<p><strong>(i) Probability that the student prefers soccer:</strong></p>
							<p>
								Probability is calculated as the ratio of favorable outcomes to the total outcomes:
								<br>
								<em>P(Soccer) = Number of students who prefer soccer / Total number of students</em>
								<br>
								<em>P(Soccer) = 20 / 50 = 0.4 or 40%</em>
							</p>

							<p><strong>(ii) Probability that the student does not prefer tennis:</strong></p>
							<p>
								First, calculate the number of students who do not prefer tennis:
								<br>
								<em>Students not preferring tennis = Total students - Students who prefer tennis</em>
								<br>
								<em>Students not preferring tennis = 50 - 15 = 35</em>
								<br>
								Now, calculate the probability:
								<br>
								<em>P(Not Tennis) = Students not preferring tennis / Total students</em>
								<br>
								<em>P(Not Tennis) = 35 / 50 = 0.7 or 70%</em>
							</p>
						</div>
					  <hr>
					  <!-- This is the 3rd question -->	



				   	</div>
					
					<div class="col-lg-3">
						<div class="panel panel-default">
								<div class="panel-heading">
									<h5 class="text-center">Review these lessons:</h5>
								</div>
							<div class="panel-body">
								<ul class="list-group">
								<li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="lesson7.php">Determining Probabilities Using Tree Diagrams and Tables</a></li>
								<li class="list-group-item" style="padding:0px 0px 0px 0px;"><a href="lesson8.php">Probability of independent events (Multiplication)</a></li>
								<li class="list-group-item" style="padding:10px 0px 0px 0px;"><a href="sampling_techniques.php">Sampling Techniques</a></li>
								<li class="list-group-item" style="padding:10px 0px 0px 0px;"><a href="bias.php">Sampling Bias</a></li>
								<li class="list-group-item" style="padding:10px 0px 0px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
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
