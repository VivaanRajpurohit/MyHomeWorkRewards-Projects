<!DOCTYPE html>
<html lang="en">
  <head>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Course",
  "courseCode": "STATISTICS",
  "name": "Collecting Data and Experimental Design Practice",
  "provider": {
    "@type": "HighSchool",
    "name": "MyHomeworkRewards",
    "url": "https://app.myhomeworkrewards.com/"
  },
  "datePublished": "2026-07-02",
  "author": {"@type": "Person", "name": "MyHomeworkRewards"},
  "publisher": {"@type": "Organization", "name": "MyHomeworkRewards"}
}
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Practice problems for collecting data and experimental design, including samples, bias, treatments, control groups, random assignment, and confounding.">
    <title>Statistics Practice</title>
    <link rel="icon" href="https://app.myhomeworkrewards.com/images/favicon.png" type="image/icon type">
    <link href="bootstrap.min.css" rel="stylesheet">

    <style>
        body{background-color:#ffffff;}
        .list-group-item{border:0px solid black;}
        .breadcrumb{background-color:#5B0A9F;}
        .breadcrumb>li>a{color:white;}
        .well{background-color:#DCC4F8;}
        .panel-primary > .panel-heading{background-color:#DCC4F8; color:black;}
        .panel-default > .panel-heading{background-color:#DCC4F8;}
        h1,h2,h3{font-family: lucida sans;}
        p,li{font-size:16px; line-height:1.6;}

        ol.breadcrumb {
            display:flex;
            align-items:center;
            list-style-type:none;
            margin-left:10rem;
            background-color:#5B0A9F;
            color:#fff;
            border-radius:4px;
            padding:8px 15px;
            font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size:14px;
            line-height:1.42857143;
        }

        ol.breadcrumb li {display:inline-block; margin-right:10px;}

        .lesson-hero {
            background:#f7f2ff;
            border-left:6px solid #5B0A9F;
            border-radius:6px;
            padding:18px 22px;
            margin-bottom:22px;
        }

        .problem-number {
            background:#5B0A9F;
            color:white;
            border-radius:50%;
            display:inline-block;
            width:34px;
            height:34px;
            line-height:34px;
            text-align:center;
            margin-right:8px;
        }

        .hidden-answer {
            background:#fbf9ff;
            border-left:5px solid #5B0A9F;
            padding:14px 18px;
            margin-top:10px;
            border-radius:4px;
        }

        @media (max-width: 767px) {
            ol.breadcrumb {margin-left:0; display:block;}
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>

  <body>
  <?php
    include_once("header.php");
  ?>

    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <ol class="breadcrumb">
                    <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
                    <li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/gr8_main.php">Gr8</a></li>
                    <li><a href="https://app.myhomeworkrewards.com/lessons/Gr8/Math/gr8_math_main.php">Math</a></li>
                    <li><a href="StatisticsDataDesignPractice.php">Statistics Practice</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Statistics Practice: Collecting Data and Experimental Design</h1>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="lesson-hero">
                            <p>Use these problems to practice reading study descriptions carefully. For each problem, ask: Who is being studied? What was measured? Was anything assigned? Could bias or confounding affect the conclusion?</p>
                        </div>

                        <hr>
                        <h2><span class="problem-number">1</span>Population, Sample, and Bias</h2>
                        <div class="well well-sm">
                            <p>A school newspaper wants to know whether students support adding more school dances. The reporter asks 40 students who are already attending a dance committee meeting.</p>
                            <ol>
                                <li>Identify the population.</li>
                                <li>Identify the sample.</li>
                                <li>Explain the likely bias.</li>
                                <li>Suggest a better sampling method.</li>
                            </ol>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="problem1" aria-pressed="false">Show Answer</span>
                        <div id="problem1" class="hidden-answer">
                            <ol>
                                <li>The population is all students at the school.</li>
                                <li>The sample is the 40 students at the dance committee meeting.</li>
                                <li>The sample is biased because students at a dance committee meeting probably care more about dances than the average student.</li>
                                <li>A better method is to randomly select students from the school roster or take a stratified random sample from each grade.</li>
                            </ol>
                        </div>

                        <hr>
                        <h2><span class="problem-number">2</span>Better Survey Questions</h2>
                        <div class="well well-sm">
                            <p>Rewrite this survey question so it is more neutral and specific:</p>
                            <p><strong>"Do you agree that the cafeteria should stop serving boring food?"</strong></p>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="problem2" aria-pressed="false">Show Answer</span>
                        <div id="problem2" class="hidden-answer">
                            <p>A better question is: <strong>"How satisfied are you with the current cafeteria food options?"</strong></p>
                            <p>This version avoids pushing the person toward a negative answer and asks about one clear topic.</p>
                        </div>

                        <hr>
                        <h2><span class="problem-number">3</span>Types of Data</h2>
                        <div class="well well-sm">
                            <p>Classify each variable as categorical or numerical:</p>
                            <ol>
                                <li>Favorite music genre</li>
                                <li>Number of texts sent yesterday</li>
                                <li>Time spent exercising this week</li>
                                <li>Type of transportation used to get to school</li>
                            </ol>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="problem3" aria-pressed="false">Show Answer</span>
                        <div id="problem3" class="hidden-answer">
                            <ol>
                                <li>Categorical</li>
                                <li>Numerical</li>
                                <li>Numerical</li>
                                <li>Categorical</li>
                            </ol>
                        </div>

                        <hr>
                        <h2><span class="problem-number">4</span>Observational Study or Experiment</h2>
                        <div class="well well-sm">
                            <p>Researchers record how many hours students sleep and compare it with their quiz scores. They do not assign students to sleep for different amounts of time.</p>
                            <p>Is this an observational study or an experiment? Can it prove that more sleep causes higher quiz scores?</p>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="problem4" aria-pressed="false">Show Answer</span>
                        <div id="problem4" class="hidden-answer">
                            <p>This is an <strong>observational study</strong> because researchers only record what students already do. It can show an association, but it does not prove cause and effect because other variables may be involved.</p>
                        </div>

                        <hr>
                        <h2><span class="problem-number">5</span>Experimental Parts</h2>
                        <div class="well well-sm">
                            <p>A teacher tests whether background music helps students memorize vocabulary. Half the students study with music, and half study in silence. Then everyone takes the same vocabulary quiz.</p>
                            <ol>
                                <li>What is the treatment?</li>
                                <li>What is the control or comparison group?</li>
                                <li>What is the response variable?</li>
                            </ol>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="problem5" aria-pressed="false">Show Answer</span>
                        <div id="problem5" class="hidden-answer">
                            <ol>
                                <li>The treatment is studying with background music.</li>
                                <li>The comparison group is students who study in silence.</li>
                                <li>The response variable is the vocabulary quiz score.</li>
                            </ol>
                        </div>

                        <hr>
                        <h2><span class="problem-number">6</span>Confounding</h2>
                        <div class="well well-sm">
                            <p>A company tests two training programs. Program A is taught by an experienced instructor in the morning. Program B is taught by a new instructor in the afternoon. Program A has better test results.</p>
                            <p>Name two variables that are confounded with the training program.</p>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="problem6" aria-pressed="false">Show Answer</span>
                        <div id="problem6" class="hidden-answer">
                            <p>Instructor experience and time of day are confounded with the training program. If Program A performs better, the cause might be the program, the instructor, the morning schedule, or a mixture of these.</p>
                        </div>

                        <hr>
                        <h2><span class="problem-number">7</span>Design a Better Experiment</h2>
                        <div class="well well-sm">
                            <p>A student wants to test whether drinking water before a test improves scores. Design a fair experiment using random assignment, a comparison group, and a response variable.</p>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="problem7" aria-pressed="false">Show Answer</span>
                        <div id="problem7" class="hidden-answer">
                            <p>Randomly assign students to two groups. One group drinks a set amount of water before the test, and the comparison group follows the usual routine or drinks no extra water. Give both groups the same test under the same conditions. The response variable is the test score.</p>
                        </div>

                        <hr>
                        <h2><span class="problem-number">8</span>Blocking</h2>
                        <div class="well well-sm">
                            <p>A researcher thinks grade level may affect how students respond to a new reading program. How could the researcher use blocking?</p>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="problem8" aria-pressed="false">Show Answer</span>
                        <div id="problem8" class="hidden-answer">
                            <p>The researcher could separate students into grade-level blocks first. Then, within each grade, randomly assign students to the new reading program or the comparison program.</p>
                        </div>

                        <hr>
                        <h2>Quick Review Checklist</h2>
                        <ul>
                            <li>If no treatment is assigned, it is usually observational.</li>
                            <li>If treatments are assigned, it is an experiment.</li>
                            <li>Random sampling helps choose who is measured.</li>
                            <li>Random assignment helps choose who gets each treatment.</li>
                            <li>Bias affects data collection. Confounding affects cause-and-effect conclusions.</li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="text-center">Review these lessons:</h5>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="sampling_techniques.php">Sampling Techniques</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="bias.php">Sampling Bias</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="observational_vs_experiments.php">Observational Studies vs. Experiments</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="design_elements.php">Design Elements</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="ethics.php">Ethics</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="Lesson7&Lesson8WordProblems.php">Probability Word Problems</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="text-center">Try these questions:</h5>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="StatisticsDataDesignPractice.php">This practice set</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <?php
                include_once("footer.php");
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML"></script>
    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
