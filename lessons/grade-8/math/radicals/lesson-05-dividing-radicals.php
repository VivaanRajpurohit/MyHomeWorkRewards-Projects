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
                    <li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Divide Radical Expressions</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">

    <div class="content">
        <h1>8.5 Divide Radical Expressions</h1>

        <h>Introduction to Radical Expressions</h3>
        <p>Radical expressions include roots such as square roots and cube roots. In this lesson, you'll learn how to add, subtract, and multiply radical expressions using basic algebra techniques.</p>
        <div class="example">
            <strong>Key Rule:</strong><br>
            You can combine only radicals with the same type of root (like square roots) and the same number inside the root. These are called "like radicals."
        </div>

        <h2>Adding Radical Expressions</h2>
        <p>To add radicals, make sure the type of root and the number inside are the same. Add only the numbers in front (coefficients).</p>
        <div class="example">
            <strong>Example:</strong><br>
            Simplify: \( 3\sqrt{2} + 5\sqrt{2} \)<br>
            <em>Solution:</em> Add the coefficients: \( (3 + 5)\sqrt{2} = 8\sqrt{2} \)
        </div>
        <div class="example">
            <strong>Example:</strong><br>
            Simplify: \( 2\sqrt{5} + \sqrt{5} - 4\sqrt{5} \)<br>
            <em>Solution:</em> Combine: \( (2 + 1 - 4)\sqrt{5} = -1\sqrt{5} \)
        </div>

        <h2>**Subtracting Radical Expressions**</h2>
        <p>Just like adding radicals, subtract only "like radicals" by working with the coefficients.</p>
        <div class="example">
            <strong>Example:</strong><br>
            Simplify: \( 6\sqrt{3} - 4\sqrt{3} \)<br>
            <em>Solution:</em> Subtract coefficients: \( (6 - 4)\sqrt{3} = 2\sqrt{3} \)
        </div>

        <h2>Multiplying Radical Expressions</h2>
        <p>When multiplying radicals, use the distributive property and the rule \( \sqrt{a} \cdot \sqrt{b} = \sqrt{ab} \). Multiply both the coefficients and the numbers inside the radicals.</p>
        <div class="example">
            <strong>Example:</strong><br>
            Multiply: \( (2\sqrt{3})(4\sqrt{5}) \)<br>
            <em>Solution:</em> Multiply coefficients and radicals separately: \( 2 \cdot 4 \cdot \sqrt{3 \cdot 5} = 8\sqrt{15} \)
        </div>
        <div class="example">
            <strong>Example:</strong><br>
            Multiply: \( (\sqrt{7})(\sqrt{7}) \)<br>
            <em>Solution:</em> Multiply inside the radical: \( \sqrt{7 \cdot 7} = \sqrt{49} = 7 \)
        </div>

        <h2>Polynomial Multiplication with Radicals</h2>
        <p>When multiplying expressions with radicals, treat them like polynomials. Use distributive property or FOIL to simplify the expression.</p>
        <div class="example">
            <strong>Example:</strong><br>
            Multiply: \( (\sqrt{2} + 3)(\sqrt{2} - 1) \)<br>
            <em>Solution:</em> Use FOIL: \( (\sqrt{2} \cdot \sqrt{2}) + (\sqrt{2} \cdot -1) + (3 \cdot \sqrt{2}) + (3 \cdot -1) \)<br>
            Simplify: \( 2 - \sqrt{2} + 3\sqrt{2} - 3 = -1 + 2\sqrt{2} \)
        </div>
        <div class="example">
            <strong>Example:</strong><br>
            Multiply: \( (2 + \sqrt{3})(2 - \sqrt{3}) \)<br>
            <em>Solution:</em> Use FOIL: \( (2 \cdot 2) + (2 \cdot -\sqrt{3}) + (\sqrt{3} \cdot 2) + (\sqrt{3} \cdot -\sqrt{3}) \)<br>
            Simplify: \( 4 - 2\sqrt{3} + 2\sqrt{3} - 3 = 1 \)
        </div>

        <h2>Practice Problems</h2>
        <p>Try these exercises to strengthen your skills:</p>
        <ul>
            <li>Simplify \( 4\sqrt{6} + 2\sqrt{6} - \sqrt{6} \).</li>
            <li>Multiply \( (\sqrt{5} + 3)(\sqrt{5} - 2) \).</li>
            <li>Multiply \( (1 + 2\sqrt{7})(1 - \sqrt{7}) \).</li>
            <li>Simplify \( (2\sqrt{3} + 1)^2 \).</li>
        </ul>

        <h2>Summary</h2>
        <p>Here's what you've learned in this lesson:</p>
        <ul>
            <li>How to add and subtract radical expressions by combining like terms.</li>
            <li>How to multiply radicals by applying distributive property and \( \sqrt{a} \cdot \sqrt{b} = \sqrt{ab} \).</li>
            <li>How to use polynomial multiplication techniques to simplify radical expressions.</li>
        </ul>
        <p>Remember to practice consistently to master these concepts!</p>
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
