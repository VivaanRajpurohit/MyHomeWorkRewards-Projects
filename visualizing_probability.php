<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on visualizing probability with tables, tree diagrams, Venn diagrams, and two-way tables.">
    <title>Visualizing Probability</title>
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
        .visual-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;margin-bottom:14px;}
        .tree-box{font-family:monospace;background:#fbf9ff;border:1px solid #DCC4F8;border-radius:6px;padding:14px;white-space:pre-wrap;margin:15px 0;}
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
            <li><a href="visualizing_probability.php">Visualizing Probability</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Visualizing Probability</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>A good visual can make a probability problem much easier.</strong> Tables, tree diagrams, and Venn diagrams help you see the sample space instead of guessing.</p>
                    </div>

                    <div class="visual-card">
                        <h2>Tree Diagrams</h2>
                        <p>Tree diagrams are best when events happen in stages. Multiply along branches to find the probability of a full path.</p>
                        <div class="tree-box">Coin
  H
    Die 1, 2, 3, 4, 5, 6
  T
    Die 1, 2, 3, 4, 5, 6</div>
                        <p>There are 12 total outcomes when flipping a coin and rolling a die.</p>
                    </div>

                    <div class="visual-card">
                        <h2>Two-Way Tables</h2>
                        <p>Two-way tables organize two categories at once. They are useful for "and," "or," and conditional probability questions.</p>
                        <table class="table table-bordered">
                            <tr><th></th><th>Plays Sports</th><th>Does Not Play Sports</th><th>Total</th></tr>
                            <tr><th>Grade 12</th><td>28</td><td>22</td><td>50</td></tr>
                            <tr><th>Grade 11</th><td>24</td><td>26</td><td>50</td></tr>
                            <tr><th>Total</th><td>52</td><td>48</td><td>100</td></tr>
                        </table>
                    </div>

                    <div class="visual-card">
                        <h2>Venn Diagrams</h2>
                        <p>Venn diagrams are useful when categories overlap. The overlap represents outcomes that are in both events.</p>
                        <p>If 30 students like math, 25 like science, and 12 like both, then the number who like math or science is:</p>
                        <p><code>30 + 25 - 12 = 43</code></p>
                    </div>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>Using the two-way table above, what is the probability that a randomly selected student is in Grade 12 and plays sports?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>The Grade 12 and plays sports cell is 28. The total is 100.</p>
                        <p><code>P(Grade 12 and plays sports) = 28/100 = 7/25</code></p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>In the same table, what is the probability that a student plays sports given that the student is in Grade 11?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <p>Because we are told the student is in Grade 11, use the Grade 11 row total: 50.</p>
                        <p><code>P(plays sports given Grade 11) = 24/50 = 12/25</code></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="organized_counting.php">Organized Counting</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="combinations.php">Permutations and Combinations</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="binomial_theorem.php">The Binomial Theorem</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="probability_fundamentals.php">Probability Rules</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="dependent_independent_events.php">Event Types</a></li>
                    </ul></div></div>
                </div>
            </div>
            <br><br><?php include_once("footer.php"); ?>
        </div></div>
    </div>
    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
