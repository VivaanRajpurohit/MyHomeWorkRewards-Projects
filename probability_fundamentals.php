<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on probability rules, complements, addition rule, multiplication rule, and conditional probability.">
    <title>Probability Rules</title>
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
        .rule-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;margin-bottom:14px;}
        .hidden-answer{background:#fbf9ff;border-left:5px solid #5B0A9F;padding:14px 18px;margin-top:10px;border-radius:4px;}
        .table>tbody>tr>th{background:#f7f2ff;}
        @media (max-width:767px){ol.breadcrumb{margin-left:0;display:block;}}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
  <?php include_once("header.php"); ?>
    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row"><div class="col-lg-8 col-lg-offset-2"><ol class="breadcrumb">
            <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
            <li><a href="organized_counting.php">Grade 12 Data Management</a></li>
            <li><a href="probability_fundamentals.php">Probability Rules</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Probability Rules</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>Probability measures how likely an event is to happen.</strong> It always falls between 0 and 1, where 0 means impossible and 1 means certain.</p>
                    </div>

                    <h2>Basic Probability</h2>
                    <div class="rule-card">
                        <p><code>P(event) = number of favorable outcomes / total number of outcomes</code></p>
                    </div>

                    <h2>Complement Rule</h2>
                    <p>The complement of an event is everything outside that event.</p>
                    <div class="rule-card">
                        <p><code>P(not A) = 1 - P(A)</code></p>
                    </div>

                    <h2>Addition Rule</h2>
                    <p>Use the addition rule when a problem asks for event A <strong>or</strong> event B.</p>
                    <div class="rule-card">
                        <p><code>P(A or B) = P(A) + P(B) - P(A and B)</code></p>
                        <p>If A and B cannot happen at the same time, then <code>P(A and B) = 0</code>.</p>
                    </div>

                    <h2>Multiplication Rule</h2>
                    <p>Use the multiplication rule when a problem asks for event A <strong>and</strong> event B.</p>
                    <div class="rule-card">
                        <p><code>P(A and B) = P(A) x P(B given A)</code></p>
                        <p>If A and B are independent, this becomes <code>P(A and B) = P(A) x P(B)</code>.</p>
                    </div>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>A standard deck has 52 cards. What is the probability of drawing a heart or a king?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>There are 13 hearts and 4 kings. The king of hearts is counted in both groups, so subtract it once.</p>
                        <p><code>P(heart or king) = 13/52 + 4/52 - 1/52 = 16/52 = 4/13</code></p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>A bag has 5 red marbles, 3 blue marbles, and 2 green marbles. One marble is selected at random.</p>
                        <ol>
                            <li>Find P(red).</li>
                            <li>Find P(not blue).</li>
                        </ol>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <ol>
                            <li>Total marbles: <code>5 + 3 + 2 = 10</code>, so <code>P(red) = 5/10 = 1/2</code>.</li>
                            <li><code>P(not blue) = 1 - 3/10 = 7/10</code>.</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="organized_counting.php">Organized Counting</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="combinations.php">Permutations and Combinations</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="binomial_theorem.php">The Binomial Theorem</a></li>
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
