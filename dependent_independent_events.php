<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on event types, independent events, dependent events, mutually exclusive events, and conditional probability.">
    <title>Event Types</title>
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
        .event-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;margin-bottom:14px;}
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
            <li><a href="dependent_independent_events.php">Event Types</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Event Types</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>Probability problems get easier when you know what kind of events you are dealing with.</strong> The words independent, dependent, and mutually exclusive tell you which rule to use.</p>
                    </div>

                    <div class="event-card">
                        <h2>Independent Events</h2>
                        <p>Two events are <strong>independent</strong> if one event does not affect the probability of the other.</p>
                        <p><strong>Example:</strong> Rolling a die and flipping a coin.</p>
                        <p><code>P(A and B) = P(A) x P(B)</code></p>
                    </div>

                    <div class="event-card">
                        <h2>Dependent Events</h2>
                        <p>Two events are <strong>dependent</strong> if the first event changes the probability of the second event.</p>
                        <p><strong>Example:</strong> Drawing two cards without replacement.</p>
                        <p><code>P(A and B) = P(A) x P(B given A)</code></p>
                    </div>

                    <div class="event-card">
                        <h2>Mutually Exclusive Events</h2>
                        <p>Two events are <strong>mutually exclusive</strong> if they cannot happen at the same time.</p>
                        <p><strong>Example:</strong> Rolling a 2 and rolling a 5 on one die roll.</p>
                        <p><code>P(A or B) = P(A) + P(B)</code></p>
                    </div>

                    <table class="table table-bordered">
                        <tr><th>Question Clue</th><th>Likely Event Type</th><th>Common Rule</th></tr>
                        <tr><td>With replacement</td><td>Independent</td><td>Multiply unchanged probabilities</td></tr>
                        <tr><td>Without replacement</td><td>Dependent</td><td>Update the second probability</td></tr>
                        <tr><td>One die roll, two different numbers</td><td>Mutually exclusive</td><td>Add probabilities</td></tr>
                    </table>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>A bag has 4 red marbles and 6 blue marbles. Two marbles are drawn without replacement. What is the probability both are red?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>The events are dependent because the first marble is not replaced.</p>
                        <p><code>P(red then red) = 4/10 x 3/9 = 12/90 = 2/15</code></p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>You flip a coin and roll a 6-sided die. What is the probability of getting heads and rolling a 4?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <p>The events are independent.</p>
                        <p><code>1/2 x 1/6 = 1/12</code></p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="organized_counting.php">Organized Counting</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="combinations.php">Permutations and Combinations</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="binomial_theorem.php">The Binomial Theorem</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="probability_fundamentals.php">Probability Rules</a></li>
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
