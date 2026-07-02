<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on design elements in experiments, including blocking, blinding, placebo, confounding, and matched pairs.">
    <title>Design Elements</title>
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
        .element-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;margin-bottom:14px;}
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
            <li><a href="sampling_techniques.php">Grade 12 Data Management</a></li>
            <li><a href="design_elements.php">Design Elements</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Design Elements</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>Experimental design is about protecting the comparison.</strong> Once you know the treatment and response, the next question is whether the design is strong enough to trust.</p>
                        <p>These tools help reduce unfairness, hidden variables, and expectation effects.</p>
                    </div>

                    <h2>1. Confounding</h2>
                    <p>A <strong>confounding variable</strong> is mixed up with the treatment, so you cannot tell what really caused the response.</p>
                    <div class="element-card">
                        <p><strong>Example:</strong> Fertilizer A plants are placed by a sunny window, while Fertilizer B plants are placed in the back of the room. If Fertilizer A plants grow taller, the cause might be fertilizer, sunlight, or both.</p>
                    </div>

                    <h2>2. Blocking</h2>
                    <p><strong>Blocking</strong> means grouping subjects by an important characteristic before random assignment. Then treatments are randomly assigned inside each block.</p>
                    <p>Blocking is useful when a variable is likely to affect the response.</p>

                    <h2>3. Matched Pairs</h2>
                    <p>A <strong>matched-pairs design</strong> is a special type of blocking. Subjects are paired with someone similar, or the same subject receives both treatments in a random order.</p>
                    <p>Example: To compare two running shoes, each runner wears Shoe A on one timed run and Shoe B on another timed run. The order is randomized.</p>

                    <h2>4. Placebo and Blinding</h2>
                    <table class="table table-bordered">
                        <tr><th>Term</th><th>Meaning</th></tr>
                        <tr><td>Placebo</td><td>A fake treatment used so expectations can be compared fairly.</td></tr>
                        <tr><td>Single-blind</td><td>Subjects do not know which treatment they received.</td></tr>
                        <tr><td>Double-blind</td><td>Subjects and the people measuring results do not know who received which treatment.</td></tr>
                    </table>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>A researcher tests a new headache medicine. Participants know whether they receive the real medicine, and the researcher measuring pain levels also knows.</p>
                        <p>What design element could improve this study?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>A <strong>double-blind placebo-controlled design</strong> would improve the study. Some participants should receive a placebo, and neither the participants nor the people measuring pain should know who received the real medicine.</p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>A reading program is tested on Grade 9 and Grade 12 students. The researcher thinks grade level will affect improvement. How could blocking be used?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <p>Separate students into Grade 9 and Grade 12 blocks first. Within each grade, randomly assign students to the new reading program or the comparison program.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="observational_vs_experiments.php">Observational Studies vs. Experiments</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="ethics.php">Ethics</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="bias.php">Sampling Bias</a></li>
                    </ul></div></div>
                </div>
            </div>
            <br><br><?php include_once("footer.php"); ?>
        </div></div>
    </div>
    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
