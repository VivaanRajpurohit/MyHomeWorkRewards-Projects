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
  <body>
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
                    <li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Use the Complex Number System</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
            <h1>8.8 Use the Complex Number System</h1>
                <div class="row">
                    <div class="col-lg-9">
                    <p>In mathematics, we often deal with square roots. For example, the square root of 9 is 3, because 3 Ã— 3 = 9. But what if we try to take the square root of a negative number, like -9?</p>

                        <p>In the set of real numbers, there is no number that you can square to get a negative result. This is because a positive number times itself is positive, and a negative number times itself is also positive. So, in real numbers, âˆš(-9) has no solution.</p>

                        <p>To solve this problem, mathematicians created a new number system: the complex number system. The key idea is to define a new unit called the imaginary unit, written as <strong>i</strong>. This special number is defined as the square root of -1:</p>

                        <p><strong>i = âˆš(-1)</strong></p>

                        <p>Once we have this definition, we can work with square roots of negative numbers easily. For example:</p>

                        <p>âˆš(-9) = âˆš(9 Ã— -1) = âˆš9 Ã— âˆš(-1) = 3i</p>

                        <p>This tells us that âˆš(-9) is equal to 3i. Here are some more examples:</p>

                        <p>âˆš(-16) = 4i</p>
                        <p>âˆš(-100) = 10i</p>
                        <p>âˆš(-1) = i</p>

                        <p>These numbers are called <strong>imaginary numbers</strong>, because they are based on the imaginary unit <strong>i</strong>. But imaginary numbers are not useless or fakeâ€”they are actually very useful in advanced math, physics, and engineering.</p>

                        <p>Now, we can also combine real numbers and imaginary numbers to form what are called <strong>complex numbers</strong>. A complex number is written in the form:</p>

                        <p><strong>a + bi</strong></p>

                        <p>Here, <strong>a</strong> is the real part, and <strong>bi</strong> is the imaginary part. Some examples of complex numbers are:</p>

                        <p>3 + 2i, -5 + 7i, 0 - 6i, and even just 4 (which is really 4 + 0i)</p>

                        <p>Letâ€™s look at a few more square roots of negative numbers and write them in complex form:</p>

                        <p>âˆš(-49) = 7i â†’ So a complex number could be 0 + 7i</p>
                        <p>âˆš(-121) = 11i â†’ You might see this used in equations involving oscillations or waveforms</p>

                        <p>These kinds of problems help introduce you to the complex number system, which is just an extension of the real numbers. It allows us to solve equations that we couldn't solve before, like:</p>

                        <p>xÂ² + 1 = 0 â†’ In real numbers, this has no solution. But in complex numbers, it has two solutions: x = i and x = -i</p>

                        <p>To summarize:</p>
                        <p>1. The square root of a negative number is not possible with real numbers.</p>
                        <p>2. We use the imaginary unit <strong>i</strong>, where i = âˆš(-1).</p>
                        <p>3. âˆš(-a) = âˆš(a) Ã— i for any positive number a.</p>
                        <p>4. Imaginary numbers can be combined with real numbers to form complex numbers (a + bi).</p>
                        <p>5. Complex numbers are very useful in solving all kinds of mathematical problems that real numbers can't handle alone.</p>

                        <p>Understanding the complex number system helps you work with more advanced math in high school, college, and beyond. Itâ€™s also used in real-world things like electronics, signal processing, quantum physics, and computer graphics!</p>


                        </div>
                         <hr>
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
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-06-radical-equations-continued.php">8.6 Solve Radical Equations cont.</a></li>
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-07-radical-functions.php">8.7 Use Radicals in Functions</a></li>
                                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-07-radical-functions-continued.php">8.7 Use Radicals in Functions cont.</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="text-center">Try these questions:</h5>
                                </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="practice-lessons-01-02.php">Problems On Lessons 1 & 2<a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="practice-lesson-05.php">Problems On Lesson 5<a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="practice-lesson-06.php">Problems on Lesson 6<a></li>
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
