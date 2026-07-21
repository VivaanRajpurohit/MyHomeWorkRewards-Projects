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
                    <li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Simplifying Expressions with Roots</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
            <h1>8. 1 Simplifying Expressions with Roots</h1>
                <div class="row">
                    <div class="col-lg-9">
                        <h2>Understanding Roots</h2>
                        <p>The root of a number is a value that, when multiplied by itself a given number of times, produces the original number.</p>
                        <ul>
                            <li>The <strong>square root</strong> (\(\sqrt{x}\)) of a number \(x\) is a value that, when squared, equals \(x\).</li>
                            <li>The <strong>cube root</strong> (\(\sqrt[3]{x}\)) of \(x\) is a value that, when cubed, equals \(x\).</li>
                        </ul>

                        <h2>Simplifying Square Roots</h2>
                        <p>To simplify a square root, factor the number into perfect squares.</p>
                        <div class="example">
                            <p>\(\sqrt{36} = 6\)</p>
                            <p>\(\sqrt{50} = \sqrt{25 \times 2} = \sqrt{25} \times \sqrt{2} = 5\sqrt{2}\)</p>
                        </div>

                        <h2>Estimating and Approximating Roots</h2>
                        <p>If a number is not a perfect square, approximate it by finding the closest perfect squares.</p>
                        <table>
                            <tr>
                                <th>Square Root</th>
                                <th>Approximate Value</th>
                            </tr>
                            <tr>
                                <td>\(\sqrt{10}\)</td>
                                <td>\(\approx 3.16\)</td>
                            </tr>
                            <tr>
                                <td>\(\sqrt{75}\)</td>
                                <td>\(\approx 8.66\)</td>
                            </tr>
                        </table>

                        <h2>Simplifying Expressions with Variables</h2>
                        <p>When simplifying square roots of variables, divide the exponent by 2.</p>
                        <div class="example">
                            <p>\(\sqrt{x^6} = x^3\)</p>
                            <p>\(\sqrt{x^5} = x^2\sqrt{x}\)</p>
                        </div>

                        <h2>Multiplying and Dividing Roots</h2>
                        <p>Roots can be multiplied or divided if they have the same index.</p>
                        <div class="example">
                            <p>\(\sqrt{3} \times \sqrt{12} = \sqrt{36} = 6\)</p>
                            <p>\(\frac{\sqrt{18}}{\sqrt{2}} = \sqrt{9} = 3\)</p>
                        </div>

                        <h2>Adding and Subtracting Roots</h2>
                        <p>Like terms can be combined when adding or subtracting square roots.</p>
                        <div class="example">
                            <p>\(2\sqrt{5} + 3\sqrt{5} = 5\sqrt{5}\)</p>
                            <p>\(4\sqrt{2} - \sqrt{2} = 3\sqrt{2}\)</p>
                        </div>

                        <h2>Rationalizing the Denominator</h2>
                        <p>If a square root appears in the denominator, multiply by a suitable term to remove it.</p>
                        <div class="example">
                            <p>\(\frac{5}{\sqrt{3}} \times \frac{\sqrt{3}}{\sqrt{3}} = \frac{5\sqrt{3}}{3}\)</p>
                        </div>


                    </div>

                    <div class="col-lg-3">
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="text-center">Review these lessons:</h5>
                                </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                <!---<li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-07-radical-functions.php">Determining Probabilities Using Tree Diagrams and Tables</a></li>--->
                                <!---!<li class="list-group-item" style="padding:0px 0px 0px 0px;"><a href="lesson-08-complex-numbers.php">Continuity</a></li>--->
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
