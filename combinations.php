<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on permutations and combinations.">
    <title>Permutations and Combinations</title>
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
            <li><a href="combinations.php">Permutations and Combinations</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Permutations and Combinations</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>The first question is always: does order matter?</strong> If order matters, use permutations. If order does not matter, use combinations.</p>
                    </div>

                    <h2>Factorials</h2>
                    <p>A factorial means multiplying a whole number by every positive whole number below it.</p>
                    <p><code>5! = 5 x 4 x 3 x 2 x 1 = 120</code></p>
                    <p>Factorials show up when arranging objects because each position has fewer choices than the one before it.</p>

                    <h2>Permutations</h2>
                    <p>A <strong>permutation</strong> is an arrangement where order matters. First, second, and third place are different positions, so order matters.</p>
                    <div class="formula-box">
                        <p><strong>Formula:</strong> <code>nPr = n! / (n - r)!</code></p>
                        <p>Use this when choosing and arranging <code>r</code> objects from <code>n</code> objects.</p>
                    </div>

                    <h2>Combinations</h2>
                    <p>A <strong>combination</strong> is a selection where order does not matter. A committee with Alex, Priya, and Mateo is the same committee no matter what order the names are written in.</p>
                    <div class="formula-box">
                        <p><strong>Formula:</strong> <code>nCr = n! / (r!(n - r)!)</code></p>
                        <p>Use this when choosing <code>r</code> objects from <code>n</code> objects without arranging them.</p>
                    </div>

                    <table class="table table-bordered">
                        <tr><th>Situation</th><th>Order Matters?</th><th>Use</th></tr>
                        <tr><td>Choosing a president, vice-president, and treasurer</td><td>Yes</td><td>Permutation</td></tr>
                        <tr><td>Choosing 3 students for a committee</td><td>No</td><td>Combination</td></tr>
                        <tr><td>Making a 4-digit lock code</td><td>Yes</td><td>Permutation/counting principle</td></tr>
                        <tr><td>Picking 5 cards from a deck</td><td>No</td><td>Combination</td></tr>
                    </table>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>There are 10 students trying out for 3 different roles: captain, assistant captain, and equipment manager. How many ways can the roles be assigned?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>Order matters because the roles are different.</p>
                        <p><code>10P3 = 10! / 7! = 10 x 9 x 8 = 720</code></p>
                        <p>There are <strong>720 ways</strong>.</p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>A teacher chooses 4 students from a class of 18 to represent the class at a meeting. The students all have the same role. How many groups are possible?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <p>Order does not matter, so use combinations.</p>
                        <p><code>18C4 = 18! / (4!14!) = 3060</code></p>
                        <p>There are <strong>3060 possible groups</strong>.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="organized_counting.php">Organized Counting</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="binomial_theorem.php">The Binomial Theorem</a></li>
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
