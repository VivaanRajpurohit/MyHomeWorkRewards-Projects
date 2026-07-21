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
                    <li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Simplify Rational Exponents</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
          <h1>8.3 Simplify Rational Exponents</h1>
    <p>By the end of this section, you will be able to:</p>
    <ul>
        <li>Simplify expressions with <math><msup><mi>a</mi><mfrac><mn>1</mn><mi>n</mi></mfrac></msup></math></li>
        <li>Simplify expressions with <math><msup><mi>a</mi><mfrac><mi>m</mi><mi>n</mi></mfrac></msup></math></li>
        <li>Use exponent properties to simplify expressions with rational exponents</li>
    </ul>

    <h2>Understanding Rational Exponents</h2>
    <p>A rational exponent represents both roots and powers. The general form is:</p>
    <div class="example">
        <math xmlns="http://www.w3.org/1998/Math/MathML">
            <msup>
                <mi>a</mi>
                <mfrac><mi>m</mi><mi>n</mi></mfrac>
            </msup>
            <mo>=</mo>
            <msqrt>
                <msup>
                    <mi>a</mi>
                    <mi>m</mi>
                </msup>
                <mi>n</mi>
            </msqrt>
        </math>
    </div>

    <h2>1. Simplifying <math><msup><mi>a</mi><mfrac><mn>1</mn><mi>n</mi></mfrac></msup></math></h2>
    <p>The exponent <math><mfrac><mn>1</mn><mi>n</mi></mfrac></math> means taking the <math><mi>n</mi></math>th root of <math><mi>a</mi></math>.</p>
    <div class="example">
        <p>Example: Simplify <math><msup><mn>27</mn><mfrac><mn>1</mn><mn>3</mn></mfrac></msup></math></p>
        <p>Solution: The cube root of 27 is 3:</p>
        <math xmlns="http://www.w3.org/1998/Math/MathML">
            <msup>
                <mn>27</mn>
                <mfrac><mn>1</mn><mn>3</mn></mfrac>
            </msup>
            <mo>=</mo>
            <mn>3</mn>
        </math>
    </div>

    <h2>2. Simplifying <math><msup><mi>a</mi><mfrac><mi>m</mi><mi>n</mi></mfrac></msup></math></h2>
    <p>The exponent <math><mfrac><mi>m</mi><mi>n</mi></mfrac></math> means raising <math><mi>a</mi></math> to the power of <math><mi>m</mi></math> and then taking the <math><mi>n</mi></math>th root.</p>
    <div class="example">
        <p>Example: Simplify <math><msup><mn>16</mn><mfrac><mn>3</mn><mn>4</mn></mfrac></msup></math></p>
        <p>Solution:</p>
        <math xmlns="http://www.w3.org/1998/Math/MathML">
            <msup>
                <mn>16</mn>
                <mfrac><mn>3</mn><mn>4</mn></mfrac>
            </msup>
            <mo>=</mo>
            <msup>
                <mroot>
                    <mn>16</mn>
                    <mn>4</mn>
                </mroot>
                <mn>3</mn>
            </msup>
            <mo>=</mo>
            <msup>
                <mn>2</mn>
                <mn>3</mn>
            </msup>
            <mo>=</mo>
            <mn>8</mn>
        </math>
    </div>

    <h2>3. Properties of Rational Exponents</h2>
    <p>We use exponent properties to simplify expressions:</p>
    <ul>
        <li>
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <msup>
                    <mi>a</mi>
                    <mfrac>
                        <mi>m</mi>
                        <mi>n</mi>
                    </mfrac>
                </msup>
                <mo>Ã—</mo>
                <msup>
                    <mi>a</mi>
                    <mfrac>
                        <mi>p</mi>
                        <mi>n</mi>
                    </mfrac>
                </msup>
                <mo>=</mo>
                <msup>
                    <mi>a</mi>
                    <mrow>
                        <mfrac>
                            <mi>m</mi>
                            <mi>n</mi>
                        </mfrac>
                        <mo>+</mo>
                        <mfrac>
                            <mi>p</mi>
                            <mi>n</mi>
                        </mfrac>
                    </mrow>
                </msup>
            </math>
        </li>
        <li>
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <mfrac>
                    <msup>
                        <mi>a</mi>
                        <mfrac>
                            <mi>m</mi>
                            <mi>n</mi>
                        </mfrac>
                    </msup>
                    <msup>
                        <mi>a</mi>
                        <mfrac>
                            <mi>p</mi>
                            <mi>n</mi>
                        </mfrac>
                    </msup>
                </mfrac>
                <mo>=</mo>
                <msup>
                    <mi>a</mi>
                    <mrow>
                        <mfrac>
                            <mi>m</mi>
                            <mi>n</mi>
                        </mfrac>
                        <mo>-</mo>
                        <mfrac>
                            <mi>p</mi>
                            <mi>n</mi>
                        </mfrac>
                    </mrow>
                </msup>
            </math>
        </li>
        <li>
            <math xmlns="http://www.w3.org/1998/Math/MathML">
                <msup>
                    <mrow>
                        <mo>(</mo>
                        <msup>
                            <mi>a</mi>
                            <mfrac>
                                <mi>m</mi>
                                <mi>n</mi>
                            </mfrac>
                        </msup>
                        <mo>)</mo>
                    </mrow>
                    <mi>p</mi>
                </msup>
                <mo>=</mo>
                <msup>
                    <mi>a</mi>
                    <mrow>
                        <mfrac>
                            <mi>m</mi>
                            <mi>n</mi>
                        </mfrac>
                        <mo>Ã—</mo>
                        <mi>p</mi>
                    </mrow>
                </msup>
            </math>
        </li>
    </ul>
    <h2>Conclusion</h2>
    <p>Rational exponents allow us to express roots and powers in a single notation. Understanding these rules helps in simplifying and solving more advanced algebraic expressions.</p>
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
