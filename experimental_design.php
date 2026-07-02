<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on experimental design, treatments, control groups, random assignment, replication, and response variables.">
    <title>Experimental Design</title>
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
        .principle{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;margin-bottom:14px;}
        .flow{display:flex;flex-wrap:wrap;gap:10px;margin:18px 0;}
        .flow span{background:#DCC4F8;border-radius:5px;padding:12px 14px;font-weight:bold;text-align:center;min-width:135px;}
        .hidden-answer{background:#fbf9ff;border-left:5px solid #5B0A9F;padding:14px 18px;margin-top:10px;border-radius:4px;}
        @media (max-width:767px){ol.breadcrumb{margin-left:0;display:block;}.flow span{width:100%;}}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
  <?php include_once("header.php"); ?>
    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row"><div class="col-lg-8 col-lg-offset-2"><ol class="breadcrumb">
            <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
            <li><a href="sampling_techniques.php">Grade 12 Data Management</a></li>
            <li><a href="experimental_design.php">Experimental Design</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Experimental Design</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>An experiment is a fair test.</strong> The goal is to change one thing on purpose, measure what happens, and avoid mixing that change with other factors.</p>
                        <p>A strong experiment is not just "try something and see." It is planned so the comparison is fair.</p>
                    </div>

                    <h2>1. Main Parts of an Experiment</h2>
                    <ul>
                        <li><strong>Experimental units or subjects:</strong> the people, plants, objects, or animals being studied.</li>
                        <li><strong>Treatment:</strong> the condition applied to the subjects.</li>
                        <li><strong>Control group:</strong> a comparison group that receives no treatment, a standard treatment, or a placebo.</li>
                        <li><strong>Response variable:</strong> the outcome measured after the treatment.</li>
                        <li><strong>Explanatory variable:</strong> the variable researchers think may explain changes in the response.</li>
                    </ul>

                    <h2>2. Three Big Principles</h2>
                    <div class="principle">
                        <h3>Control</h3>
                        <p>Keep conditions as similar as possible so the treatment is the main difference between groups.</p>
                    </div>
                    <div class="principle">
                        <h3>Random Assignment</h3>
                        <p>Use chance to decide which subjects receive each treatment. This helps spread out hidden differences between groups.</p>
                    </div>
                    <div class="principle">
                        <h3>Replication</h3>
                        <p>Use enough subjects in each group. If only two people are tested, one unusual result can distort everything.</p>
                    </div>

                    <h2>3. Basic Design Template</h2>
                    <div class="flow">
                        <span>Choose subjects</span>
                        <span>Randomly assign groups</span>
                        <span>Apply treatments</span>
                        <span>Measure response</span>
                        <span>Compare groups</span>
                    </div>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>A coach wants to know if a new warm-up routine reduces injuries. The coach lets players choose whether to use the new warm-up or the old warm-up.</p>
                        <p>What is the main design problem?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>The players choose their own groups, so there is no random assignment. Players who choose the new warm-up may already be more careful, more motivated, or more worried about injury.</p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>Design a fair experiment to test whether listening to instrumental music while studying improves quiz scores.</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <p>Randomly assign students to two groups. One group studies with instrumental music, and the other studies in silence. Give both groups the same material, the same amount of study time, and the same quiz. Compare quiz scores.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="observational_vs_experiments.php">Observational Studies vs. Experiments</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="design_elements.php">Design Elements</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="ethics.php">Ethics</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="sampling_techniques.php">Sampling Techniques</a></li>
                    </ul></div></div>
                </div>
            </div>
            <br><br><?php include_once("footer.php"); ?>
        </div></div>
    </div>
    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
