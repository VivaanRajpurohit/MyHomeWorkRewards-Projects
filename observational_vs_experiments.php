<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson comparing observational studies and experiments.">
    <title>Observational Studies vs. Experiments</title>
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
        .compare-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:18px 0;}
        .compare-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;}
        .hidden-answer{background:#fbf9ff;border-left:5px solid #5B0A9F;padding:14px 18px;margin-top:10px;border-radius:4px;}
        .table>tbody>tr>th{background:#f7f2ff;}
        @media (max-width:767px){ol.breadcrumb{margin-left:0;display:block;}.compare-grid{grid-template-columns:1fr;}}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
  <?php include_once("header.php"); ?>
    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row"><div class="col-lg-8 col-lg-offset-2"><ol class="breadcrumb">
            <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
            <li><a href="sampling_techniques.php">Grade 12 Data Management</a></li>
            <li><a href="observational_vs_experiments.php">Observational Studies vs. Experiments</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Observational Studies vs. Experiments</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>The biggest question is: did the researcher assign something?</strong> If yes, you are probably looking at an experiment. If no, it is probably an observational study.</p>
                        <p>This difference matters because it changes what kind of conclusion you are allowed to make.</p>
                    </div>

                    <h2>1. Observational Study</h2>
                    <p>In an <strong>observational study</strong>, researchers collect data without controlling what people do. They observe, survey, measure, or record.</p>
                    <p>Observational studies are useful when an experiment would be impossible, too expensive, or unethical.</p>

                    <h2>2. Experiment</h2>
                    <p>In an <strong>experiment</strong>, researchers apply a treatment and measure the response. The researcher actively assigns conditions.</p>
                    <p>A well-designed experiment can give stronger evidence for cause and effect because the researcher controls the treatment.</p>

                    <div class="compare-grid">
                        <div class="compare-card">
                            <h3>Observational Study</h3>
                            <ul>
                                <li>No treatment is assigned.</li>
                                <li>Can show association.</li>
                                <li>Cause and effect is usually not proven.</li>
                                <li>Often used when assignment would be unethical.</li>
                            </ul>
                        </div>
                        <div class="compare-card">
                            <h3>Experiment</h3>
                            <ul>
                                <li>A treatment is assigned.</li>
                                <li>Can test cause and effect.</li>
                                <li>Needs control, random assignment, and replication.</li>
                                <li>Must be ethical and safe.</li>
                            </ul>
                        </div>
                    </div>

                    <h2>3. Association Is Not Causation</h2>
                    <p>If two variables move together, they are <strong>associated</strong>. That does not automatically mean one caused the other.</p>
                    <p>Example: Students who spend more time studying may get higher marks. But maybe those students also attend extra help, sleep more, or already understand the material better. Those extra variables can confuse the conclusion.</p>

                    <table class="table table-bordered">
                        <tr><th>Scenario</th><th>Study Type</th><th>Conclusion</th></tr>
                        <tr><td>Researchers record sleep hours and test scores.</td><td>Observational</td><td>Can show association, not definite causation.</td></tr>
                        <tr><td>Researchers randomly assign students to two study methods.</td><td>Experiment</td><td>Can support cause and effect if designed well.</td></tr>
                    </table>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>A health researcher records how often people exercise and compares it with their blood pressure. The researcher does not assign exercise plans.</p>
                        <p>Is this observational or experimental? Can it prove exercise caused the difference in blood pressure?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>This is an <strong>observational study</strong>. It can show an association, but it cannot prove cause and effect by itself because other variables, like diet, age, stress, or medication, may also affect blood pressure.</p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>A teacher randomly assigns half the class to use flashcards and half the class to use practice quizzes. After one week, everyone takes the same vocabulary test.</p>
                        <ol>
                            <li>Is this an observational study or experiment?</li>
                            <li>What is the treatment?</li>
                            <li>What is the response variable?</li>
                        </ol>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <ol>
                            <li>It is an experiment because the teacher assigns study methods.</li>
                            <li>The treatment is the study method: flashcards or practice quizzes.</li>
                            <li>The response variable is the vocabulary test score.</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="sampling_techniques.php">Sampling Techniques</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="bias.php">Sampling Bias</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="design_elements.php">Design Elements</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="ethics.php">Ethics</a></li>
                    </ul></div></div>
                </div>
            </div>
            <br><br><?php include_once("footer.php"); ?>
        </div></div>
    </div>
    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
