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
                    <li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Divide Radical Expressions cont.</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

    <div class="content">
    <h1></h1>

    <h1>8.5 Divide Radical Expressions cont.</h1>


        <p>When we divide radical expressions, such as square roots or cube roots, we need to simplify the expression by dividing the numbers or variables that are inside the radicals. Radical expressions often involve square roots (âˆš), cube roots (âˆ›), or other roots. The main idea is to simplify the numbers or variables under the radical so that the expression becomes easier to work with.</p>

        <p>For example, consider the following expression:</p>
        <p><strong>Example 1:</strong> <em>Divide the square roots: âˆš8 / âˆš2</em></p>

        <p>Step 1: We can simplify the expression by dividing the numbers inside the radicals. In this case, we divide 8 by 2:</p>

        <p>âˆš8 / âˆš2 = âˆš(8 / 2) = âˆš4</p>

        <p>Step 2: Now that we have âˆš4, we know that the square root of 4 is 2, because 2 times 2 equals 4:</p>

        <p>âˆš4 = 2</p>

        <p>Therefore, the simplified answer is:</p>

        <p><strong>Result:</strong> 2</p>

        <p>This shows that when you divide square roots, you divide the numbers under the radical just as you would divide regular numbers. Then, simplify the radical expression to get the final result.</p>

        <h2>- Rationalize a One-Term Denominator</h2>

        <p>Rationalizing the denominator means removing any radical from the denominator of a fraction. A radical in the denominator can make the expression look complicated, and rationalizing it helps to simplify the fraction. When the denominator is a single term with a radical, we multiply both the numerator and the denominator by that same radical to "get rid" of the radical in the denominator.</p>

        <p>For example, consider the following fraction:</p>

        <p><strong>Example 2:</strong> <em>Rationalize the denominator of 1 / âˆš3</em></p>

        <p>Step 1: The denominator contains a square root, so we need to multiply both the numerator and the denominator by âˆš3. This is because multiplying by âˆš3 in the denominator will cancel out the square root:</p>

        <p>1 / âˆš3 Ã— âˆš3 / âˆš3 = âˆš3 / (âˆš3 Ã— âˆš3)</p>

        <p>Step 2: Now, the denominator becomes the square root of 3 multiplied by itself, which equals 3. This means:</p>

        <p>âˆš3 / 3</p>

        <p>So, the rationalized version of the fraction is:</p>

        <p><strong>Result:</strong> âˆš3 / 3</p>

        <p>This process is known as rationalizing a one-term denominator, and it helps us express the fraction in a simpler, more readable form without any radicals in the denominator.</p>

        <h2>- Rationalize a Two-Term Denominator</h2>

        <p>When the denominator contains two terms with a radical, we still need to remove the radical, but we have to use a different method. This method involves multiplying by the conjugate of the denominator. The conjugate is the same expression but with the opposite sign between the terms. By multiplying by the conjugate, we eliminate the radical from the denominator.</p>

        <p>The conjugate of an expression like (a + b) is (a - b), and vice versa. This works because multiplying a binomial by its conjugate results in the difference of squares, which removes the radicals.</p>

        <p>For example, consider the following fraction:</p>

        <p><strong>Example 3:</strong> <em>Rationalize the denominator of 1 / (âˆš2 + 1)</em></p>

        <p>Step 1: To rationalize the denominator, we multiply both the numerator and the denominator by the conjugate of (âˆš2 + 1). The conjugate of (âˆš2 + 1) is (âˆš2 - 1). This step eliminates the radical in the denominator:</p>

        <p>1 / (âˆš2 + 1) Ã— (âˆš2 - 1) / (âˆš2 - 1) = (âˆš2 - 1) / ((âˆš2)Â² - 1Â²)</p>

        <p>Step 2: Now, we simplify the denominator. The expression (âˆš2)Â² equals 2, and 1Â² equals 1, so we have:</p>

        <p>(âˆš2 - 1) / (2 - 1) = (âˆš2 - 1) / 1</p>

        <p>Step 3: Finally, the fraction simplifies to:</p>

        <p>âˆš2 - 1</p>

        <p><strong>Result:</strong> âˆš2 - 1</p>

        <p>This is the rationalized form of the fraction, and the denominator no longer contains any radicals. By multiplying by the conjugate, we were able to remove the radical from the denominator.</p>

        <h2>Conclusion</h2>

        <p>In summary, dividing radical expressions involves simplifying the radicals by dividing the values under the radicals. Rationalizing a denominator means removing the radical from the denominator. For a one-term denominator, we multiply both the numerator and denominator by the radical in the denominator. For a two-term denominator, we use the conjugate to eliminate the radical. These techniques are useful in simplifying radical expressions and making them easier to work with.</p>
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
