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
                    <li><a href="/lessons/Gr12/Math/Calculus/ProbabilitiesWithTablesAndDiagrams.php">Simplifying Radical Expressions</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
      <h1>8.2 Simplifying Radical Expressions</h1>
                <div class="row">
                    <div class="col-lg-9">
              <h2>Understanding Radical Expressions</h2>
              <p>A radical expression contains a square root, cube root, or any higher root. The goal is to simplify these expressions as much as possible.</p>

              <h2>Using the Product Property of Square Roots</h2>
              <p>The product property states:</p>
              <div class="example">
                  <p>\(\sqrt{a \times b} = \sqrt{a} \times \sqrt{b}\), where \(a\) and \(b\) are non-negative numbers.</p>
              </div>
              <p>This property helps break down square roots into simpler components.</p>

              <h3>Examples:</h3>
              <div class="example">
                  <p>\(\sqrt{50} = \sqrt{25 \times 2} = \sqrt{25} \times \sqrt{2} = 5\sqrt{2}\)</p>
                  <p>\(\sqrt{72} = \sqrt{36 \times 2} = 6\sqrt{2}\)</p>
              </div>

              <h3>Special Cases:</h3>
              <p>When dealing with variables, apply the same rule.</p>
              <div class="example">
                  <p>\(\sqrt{x^6} = \sqrt{x^4 \times x^2} = \sqrt{x^4} \times \sqrt{x^2} = x^2 \times x = x^3\)</p>
                  <p>\(\sqrt{y^5} = \sqrt{y^4 \times y} = y^2 \sqrt{y}\)</p>
              </div>

              <h2>Using the Quotient Property of Square Roots</h2>
              <p>The quotient property states:</p>
              <div class="example">
                  <p>\(\frac{\sqrt{a}}{\sqrt{b}} = \sqrt{\frac{a}{b}}\), where \(b \neq 0\).</p>
              </div>
              <p>This property allows division to be simplified inside a single square root.</p>

              <h3>Examples:</h3>
              <div class="example">
                  <p>\(\frac{\sqrt{48}}{\sqrt{3}} = \sqrt{\frac{48}{3}} = \sqrt{16} = 4\)</p>
                  <p>\(\frac{\sqrt{50}}{\sqrt{2}} = \sqrt{\frac{50}{2}} = \sqrt{25} = 5\)</p>
              </div>

              <h2>Rationalizing the Denominator</h2>
              <p>If a square root appears in the denominator, multiply by a suitable term to eliminate it.</p>
              <div class="example">
                  <p>\(\frac{5}{\sqrt{3}} \times \frac{\sqrt{3}}{\sqrt{3}} = \frac{5\sqrt{3}}{3}\)</p>
              </div>

              <h2>Comparing Simplified Expressions</h2>
              <table>
                  <tr>
                      <th>Original Expression</th>
                      <th>Simplified Expression</th>
                  </tr>
                  <tr>
                      <td>\(\sqrt{98}\)</td>
                      <td>\(7\sqrt{2}\)</td>
                  </tr>
                  <tr>
                      <td>\(\sqrt{18x^4}\)</td>
                      <td>\(3x^2\sqrt{2}\)</td>
                  </tr>
                  <tr>
                      <td>\(\frac{\sqrt{32}}{\sqrt{2}}\)</td>
                      <td>\(\sqrt{16} = 4\)</td>
                  </tr>
              </table>

              <h2>Practice Problems</h2>
              <ul>
                  <li>Simplify: \(\sqrt{200}\)</li>
                  <li>Use the product property: \(\sqrt{8} \times \sqrt{2}\)</li>
                  <li>Apply the quotient property: \(\frac{\sqrt{144}}{\sqrt{9}}\)</li>
                  <li>Rationalize: \(\frac{7}{\sqrt{5}}\)</li>
              </ul>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h5 class="text-center">Review these lessons:</h5>
                                </div>
                            <div class="panel-body">
                                <ul class="list-group">
                <li class="list-group-item"  style="padding:0px 0px 10px 0px;"><a href="lesson-01-simplifying-roots.php">8.1 Simplifying Expressions with Roots</a></li>
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
