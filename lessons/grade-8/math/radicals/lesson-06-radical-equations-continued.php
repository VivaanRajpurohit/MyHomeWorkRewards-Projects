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
    <link rel="icon" href="/assets/images/favicon.png" type="image/icon type">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

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

      <link href="/assets/css/legacy-lessons.css" rel="stylesheet">
  </head>

  <p>
  <?php
    include_once(dirname(__DIR__, 4) . "/includes/header.php");
  ?>



    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <ol class="breadcrumb">
                    <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
                    <li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/gr8_main.php">Algebra 1</a></li>
                    <li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/Math/gr8_math_main.php">Math</a></li>
                    <li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Solve Radical Equations cont.</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

    <div class="content">
    <h1>8.6 Solve Radical Equations cont.</h1>

                <p>Radical equations are equations that involve a variable inside a radical (a square root, cube root, etc.). To solve radical equations, we often use algebraic techniques like squaring both sides, isolating the radical, and simplifying expressions. Understanding how to manipulate radical expressions is important not only in mathematics but also in various real-world applications such as physics, engineering, and more.</p>

                <hr>

                <h3>Key Steps in Solving Radical Equations</h3>

                <p>When solving radical equations, follow these general steps:</p>

                <ol>
                    <li><strong>Isolate the radical expression:</strong> To begin solving, try to isolate the radical (the square root, cube root, etc.) on one side of the equation. This step may require algebraic manipulation like adding, subtracting, or factoring.</li>
                    <li><strong>Square (or cube) both sides:</strong> Once the radical is isolated, square both sides of the equation to eliminate the square root. If there is a cube root or higher-order radical, cube both sides. This will help eliminate the radical and simplify the equation.</li>
                    <li><strong>Simplify:</strong> After squaring or cubing both sides, simplify the equation. This may involve combining like terms, distributing, or factoring.</li>
                    <li><strong>Check for extraneous solutions:</strong> Squaring both sides of an equation can sometimes introduce extraneous solutionsâ€”solutions that donâ€™t satisfy the original equation. Itâ€™s important to plug the solutions back into the original equation to verify that they are valid.</li>
                </ol>

                <hr>

                <h3>Example: Solving a Simple Radical Equation</h3>

                <p>Consider the equation:</p>
                <p><em>âˆš(x + 5) = 3</em></p>

                <p><strong>Step 1:</strong> Isolate the radical expression:</p>
                <p>The radical expression is already isolated, as it is the square root of <em>(x + 5)</em>.</p>

                <p><strong>Step 2:</strong> Square both sides:</p>
                <p>To eliminate the square root, square both sides of the equation:</p>
                <p><em>(âˆš(x + 5))Â² = 3Â²</em></p>
                <p><em>x + 5 = 9</em></p>

                <p><strong>Step 3:</strong> Simplify:</p>
                <p>Now, solve for <em>x</em> by subtracting 5 from both sides:</p>
                <p><em>x = 9 - 5</em></p>
                <p><em>x = 4</em></p>

                <p><strong>Step 4:</strong> Check for extraneous solutions:</p>
                <p>Plug <em>x = 4</em> back into the original equation:</p>
                <p><em>âˆš(4 + 5) = 3</em></p>
                <p><em>âˆš9 = 3</em></p>
                <p><em>3 = 3</em></p>
                <p>This is true, so <em>x = 4</em> is a valid solution.</p>

                <hr>

                <h3>Solving Radical Equations with Two Radicals</h3>

                <p>In some cases, an equation may involve two radical expressions. To solve these equations, you generally need to isolate one radical, square both sides, and then isolate the second radical. Continue this process until you have an equation that no longer involves radicals, and then solve for the variable.</p>

                <p>Here is an outline of the steps:</p>

                <ol>
                    <li><strong>Isolate one radical:</strong> Start by isolating one of the radicals on one side of the equation.</li>
                    <li><strong>Square both sides:</strong> Square both sides of the equation to eliminate the radical.</li>
                    <li><strong>Isolate the second radical:</strong> If necessary, isolate the second radical expression.</li>
                    <li><strong>Square both sides again:</strong> Repeat the squaring process to remove the second radical.</li>
                    <li><strong>Simplify:</strong> After the radicals are removed, solve the resulting equation algebraically.</li>
                    <li><strong>Check for extraneous solutions:</strong> As with single radical equations, check for extraneous solutions to ensure the solution is valid.</li>
                </ol>

                <hr>

                <h3>Conclusion</h3>

                <p>Solving radical equations requires a systematic approach of isolating the radical expression, squaring both sides, and simplifying the equation. While working with equations that involve more than one radical, itâ€™s important to isolate and eliminate each radical step by step. Always remember to check for extraneous solutions at the end to ensure that the solutions you find are valid in the original equation.</p>
                    </div>
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="text-center">Review these lessons:</h5>
                                </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-01-simplifying-roots.php">8.1 Simplifying Expressions with Roots</a></li>
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-02-radical-expressions.php">8.2 Simplifying Radical Expressions</a></li>
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-03-rational-exponents.php">8.3 Simplify Rational Exponents</a></li>
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-04-radical-operations.php">8.4 Add, Subtract, and Multiply Radical Expressions</a></li>
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-05-dividing-radicals.php">8.5 Divide Radical Expressions</a></li>
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-05-dividing-radicals-continued.php">8.5 Divide Radical Expressions cont.</a></li>
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-06-radical-equations.php">8.6 Solve Radical Equations</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="text-center">Try these questions:</h5>
                                </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;">
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="practice-lessons-01-02.php">Problems On Lessons 1 & 2<a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="practice-lesson-05.php">Problems On Lesson 5<a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <?php
                include_once(dirname(__DIR__, 4) . "/includes/footer.php");
                ?>
            </div>
        </div>

    </div>



    <script async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src='/assets/js/bootstrap.min.js'></script>
  <script type='text/javascript' src='/assets/js/hide-answer.js'></script>
  </body>
</html>
