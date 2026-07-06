<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on organized counting, tree diagrams, tables, lists, and the fundamental counting principle.">
    <title>Organized Counting</title>
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
        .count-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:18px 0;}
        .count-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;}
        .hidden-answer{background:#fbf9ff;border-left:5px solid #5B0A9F;padding:14px 18px;margin-top:10px;border-radius:4px;}
        .table>tbody>tr>th{background:#f7f2ff;}
        @media (max-width:767px){ol.breadcrumb{margin-left:0;display:block;}.count-grid{grid-template-columns:1fr;}}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
  <?php include_once("header.php"); ?>
    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row"><div class="col-lg-8 col-lg-offset-2"><ol class="breadcrumb">
            <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
            <li><a href="sampling_techniques.php">Grade 12 Data Management</a></li>
            <li><a href="organized_counting.php">Organized Counting</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Organized Counting</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>Counting in Data Management is not just counting one-by-one.</strong> It is about finding every possible outcome without missing any or counting the same one twice.</p>
                        <p>When a problem has several choices, an organized method keeps the work clean.</p>
                    </div>

                    <h2>Why Organized Counting Matters</h2>
                    <p>Probability often starts with the question, "How many outcomes are possible?" If your count is wrong, the probability will be wrong too.</p>
                    <p>For small situations, a list or table may be enough. For larger situations, the <strong>fundamental counting principle</strong> is faster.</p>

                    <div class="count-grid">
                        <div class="count-card">
                            <h3>Organized List</h3>
                            <p>Write outcomes in a pattern so you can see when the list is complete.</p>
                            <p>Example: For shirts red/blue and pants black/white, list RB, RW, BB, BW.</p>
                        </div>
                        <div class="count-card">
                            <h3>Table</h3>
                            <p>Use rows and columns when two choices are being paired.</p>
                            <p>This is useful for dice, menus, outfits, and simple schedules.</p>
                        </div>
                        <div class="count-card">
                            <h3>Tree Diagram</h3>
                            <p>Use branches when choices happen in stages.</p>
                            <p>This is helpful when order matters, like first place then second place.</p>
                        </div>
                        <div class="count-card">
                            <h3>Counting Principle</h3>
                            <p>If there are m ways to do one thing and n ways to do another, there are m x n total ways.</p>
                            <p>For several stages, multiply the number of choices at each stage.</p>
                        </div>
                    </div>

                    <h2>The Fundamental Counting Principle</h2>
                    <p>If a password has 3 choices for the first character, 4 choices for the second, and 5 choices for the third, the total number of passwords is:</p>
                    <p><code>3 x 4 x 5 = 60</code></p>
                    <p>The multiplication works because each first choice can be paired with every second choice, and each of those can be paired with every third choice.</p>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>A cafe lets you choose 1 sandwich, 1 drink, and 1 dessert. There are 5 sandwiches, 4 drinks, and 3 desserts. How many meals are possible?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>Use the counting principle:</p>
                        <p><code>5 x 4 x 3 = 60</code></p>
                        <p>There are <strong>60 possible meals</strong>.</p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>A school club is making a 4-character code. The first character is one of 6 letters, the second is one of 10 digits, the third is one of 10 digits, and the last is one of 3 symbols.</p>
                        <p>How many codes are possible?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <p><code>6 x 10 x 10 x 3 = 1800</code></p>
                        <p>There are <strong>1800 possible codes</strong>.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="combinations.php">Permutations and Combinations</a></li>
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
