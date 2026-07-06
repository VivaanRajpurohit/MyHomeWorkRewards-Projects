<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on the binomial theorem, Pascal's triangle, binomial coefficients, and expansions.">
    <title>The Binomial Theorem</title>
    <link rel="icon" href="https://app.myhomeworkrewards.com/images/favicon.png" type="image/icon type">
    <link href="bootstrap.min.css" rel="stylesheet">
    <style>
        body{background-color:#ffffff;}
        .list-group-item{border:0px solid black;}
        .breadcrumb{background-color:#5B0A9F;}
        .breadcrumb>li>a{color:white;}
        .well{background-color:#DCC4F8;}
        .panel-default > .panel-heading{background-color:#DCC4F8;}
        h1,h2,h3{font-family:lucida sans;}
        p,li{font-size:16px;line-height:1.6;}
        ol.breadcrumb{display:flex;align-items:center;list-style-type:none;margin-left:10rem;background-color:#5B0A9F;color:#fff;border-radius:4px;padding:8px 15px;font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:14px;line-height:1.42857143;}
        ol.breadcrumb li{display:inline-block;margin-right:10px;}
        .lesson-hero{background:#f7f2ff;border-left:6px solid #5B0A9F;border-radius:6px;padding:18px 22px;margin-bottom:22px;}
        .formula-box{border:1px solid #DCC4F8;border-radius:6px;padding:16px;margin:18px 0;background:#fbf9ff;}
        .pascal{text-align:center;font-family:monospace;font-size:18px;line-height:1.8;background:#f8f8f8;border-radius:6px;padding:16px;margin:18px 0;}
        .hidden-answer{background:#fbf9ff;border-left:5px solid #5B0A9F;padding:14px 18px;margin-top:10px;border-radius:4px;}
        @media (max-width:767px){ol.breadcrumb{margin-left:0;display:block;}.pascal{font-size:14px;}}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
  <?php include_once("header.php"); ?>
    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row"><div class="col-lg-8 col-lg-offset-2"><ol class="breadcrumb">
            <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
            <li><a href="organized_counting.php">Grade 12 Data Management</a></li>
            <li><a href="binomial_theorem.php">The Binomial Theorem</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>The Binomial Theorem</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>The binomial theorem is a shortcut for expanding powers like (x + 2)^5.</strong> Instead of multiplying five brackets by hand, you use patterns from combinations.</p>
                    </div>

                    <h2>The Pattern</h2>
                    <p>A binomial has two terms, such as <code>x + 3</code> or <code>2a - b</code>. When a binomial is raised to a power, the coefficients follow Pascal's Triangle and combinations.</p>
                    <div class="pascal">
                        1<br>
                        1&nbsp;&nbsp;1<br>
                        1&nbsp;&nbsp;2&nbsp;&nbsp;1<br>
                        1&nbsp;&nbsp;3&nbsp;&nbsp;3&nbsp;&nbsp;1<br>
                        1&nbsp;&nbsp;4&nbsp;&nbsp;6&nbsp;&nbsp;4&nbsp;&nbsp;1<br>
                        1&nbsp;&nbsp;5&nbsp;&nbsp;10&nbsp;&nbsp;10&nbsp;&nbsp;5&nbsp;&nbsp;1
                    </div>

                    <h2>The Formula</h2>
                    <div class="formula-box">
                        <p><code>(a + b)^n = nC0 a^n + nC1 a^(n-1)b + nC2 a^(n-2)b^2 + ... + nCn b^n</code></p>
                    </div>
                    <p>Each term follows a pattern: the power of <code>a</code> goes down, the power of <code>b</code> goes up, and the coefficients come from combinations.</p>

                    <h2>Example: Expand (x + 2)^4</h2>
                    <p>The coefficients from row 4 are <code>1, 4, 6, 4, 1</code>.</p>
                    <p><code>(x + 2)^4 = x^4 + 4x^3(2) + 6x^2(2^2) + 4x(2^3) + 2^4</code></p>
                    <p><code>= x^4 + 8x^3 + 24x^2 + 32x + 16</code></p>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>Find the coefficient of <code>x^3</code> in <code>(x + 4)^5</code>.</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>The <code>x^3</code> term happens when the power of 4 is 2, because the powers must add to 5.</p>
                        <p><code>5C2 x^3(4^2) = 10 x^3(16) = 160x^3</code></p>
                        <p>The coefficient is <strong>160</strong>.</p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>Expand <code>(x + 3)^3</code>.</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <p>Row 3 coefficients are <code>1, 3, 3, 1</code>.</p>
                        <p><code>(x + 3)^3 = x^3 + 3x^2(3) + 3x(3^2) + 3^3</code></p>
                        <p><code>= x^3 + 9x^2 + 27x + 27</code></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="organized_counting.php">Organized Counting</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="combinations.php">Permutations and Combinations</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="probability_fundamentals.php">Probability Rules</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="dependent_independent_events.php">Event Types</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="visualizing_probability.php">Visualizing Probability</a></li>
                    </ul></div></div>
                </div>
            </div>
            <br><br><?php include_once("footer.php"); ?>
        </div></div>
    </div>
    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
