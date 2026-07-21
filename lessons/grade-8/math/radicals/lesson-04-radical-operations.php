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
                    <li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Add, Subtract, and Multiply Radical Expressions</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
          <h1>8.4 Add, Subtract, and Multiply Radical Expressions</h1>
    <br>Radical expressions involve roots, like square roots or cube roots. This lesson will guide you on how to handle addition, subtraction, </br>and multiplication of such expressions.</p>

    <h2>Adding and Subtracting Radical Expressions</h2>
    <p>Before you can add or subtract radicals, it is crucial to understand the following rules:</p>
    <ol>
        <li><strong>Like Radicals:</strong> Radicals must have the same index and the same radicand (the number inside the root) </br>to be combined.</li>
        <li><strong>Combine Coefficients:</strong> Only the coefficients (numbers in front of the radicals) are added or subtracted.</br> The radical part remains unchanged.</li>
        <li><strong>Simplify:</strong> If the radicals are not like terms, attempt to simplify them first.</li>
    </ol>
    <p><strong>Examples:</strong></p>
    <ul>
        <li>3âˆš2 + 4âˆš2 = (3 + 4)âˆš2 = 7âˆš2</li>
        <li>8âˆš5 - 5âˆš5 = (8 - 5)âˆš5 = 3âˆš5</li>
        <li>2âˆš18 + 3âˆš2: First, simplify âˆš18 to 3âˆš2, then combine: (2 Ã— 3âˆš2) + 3âˆš2 = 6âˆš2 + 3âˆš2 = 9âˆš2</li>
    </ul>
    <p>Notice that you cannot combine radicals with different radicands. For instance, âˆš3 + âˆš5 remains as is </br>because they are not like terms.</p>

    <h2>Multiplying Radical Expressions</h2>
    <p>When multiplying radicals, use the following steps:</p>
    <ol>
        <li><strong>Multiply Coefficients:</strong> Multiply the numbers outside the radicals.</li>
        <li><strong>Multiply Radicands:</strong> Multiply the numbers inside the radicals.</li>
        <li><strong>Simplify the Result:</strong> After multiplying, simplify the radical if possible.</li>
    </ol>
    <p><strong>Examples:</strong></p>
    <ul>
        <li>(2âˆš3)(4âˆš5) = (2 Ã— 4)(âˆš3 Ã— âˆš5) = 8âˆš15</li>
        <li>(3âˆš7)(5âˆš7) = (3 Ã— 5)(âˆš7 Ã— âˆš7) = 15 Ã— 7 = 105</li>
        <li>(âˆš6)(âˆš14) = âˆš(6 Ã— 14) = âˆš84. Simplify âˆš84 to 2âˆš21 (if necessary).</li>
    </ul>
    <p>Remember, multiplying a radical by itself eliminates the root. For example, (âˆš5)(âˆš5) = 5.</p>

    <h2>Important Tips</h2>
    <ul>
        <li>Simplify radicals before adding, subtracting, or multiplying to make the process easier.</li>
        <li>Watch out for common mistakes, like trying to combine unlike radicals or forgetting to simplify completely.</li>
    </ul>

    <h2>Interactive Practice</h2>
    <p>Test your understanding with these problems:</p>
    <ul>
        <li>Simplify: 4âˆš2 + 6âˆš2</li>
        <li>Simplify: 9âˆš3 - 5âˆš3</li>
        <li>Multiply: (2âˆš5)(3âˆš7)</li>
        <li>Multiply: (4âˆš6)(âˆš6)</li>
    </ul>

    <h2>Challenge Yourself</h2>
    <p>Try these more advanced problems:</p>
    <ul>
        <li>Simplify: 2âˆš50 + 3âˆš8</li>
        <li>Multiply: (âˆš2 + âˆš3)(âˆš2 - âˆš3)</li>
        <li>Multiply: (5âˆš11)(2âˆš22)</li>
    </ul>

    <p>With practice, you'll become confident in adding, subtracting, and multiplying radical expressions!</p>
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
                                        <a href="practice-lessons-01-02.php">Word Problems On Lessons 1 & 2</a>
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
