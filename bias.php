<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on sampling bias, nonresponse bias, response bias, measurement bias, and question wording bias.">
    <title>Sampling Bias</title>
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
        .bias-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;margin-bottom:14px;}
        .hidden-answer{background:#fbf9ff;border-left:5px solid #5B0A9F;padding:14px 18px;margin-top:10px;border-radius:4px;}
        .table>tbody>tr>th{background:#f7f2ff;}
        @media (max-width:767px){ol.breadcrumb{margin-left:0;display:block;}}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
  <?php include_once("header.php"); ?>

    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <ol class="breadcrumb">
                <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
                <li><a href="https://app.myhomeworkrewards.com/lessons/Gr12/gr12_main.php">Grade 12</a></li>
                <li><a href="sampling_techniques.php">Data Management</a></li>
                <li><a href="bias.php">Sampling Bias</a></li>
            </ol>
        </div></div>

        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Sampling Bias</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>Bias is the quiet problem in statistics.</strong> A calculation can be correct, but the conclusion can still be wrong if the data was collected in a biased way.</p>
                        <p>In this lesson, the goal is to learn how to spot bias before it ruins the study.</p>
                    </div>

                    <h2>1. What Bias Means</h2>
                    <p><strong>Bias</strong> is a built-in unfairness in the way data is collected, measured, or reported. Bias pushes results toward one side instead of letting the data represent the population honestly.</p>
                    <p>Random error can happen by chance. Bias is different because it usually points in a pattern.</p>

                    <h2>2. Common Types of Bias</h2>
                    <div class="bias-card">
                        <h3>Sampling Bias</h3>
                        <p>The sample does not represent the population.</p>
                        <p><strong>Example:</strong> Asking only students in the library whether the school should buy more books.</p>
                    </div>
                    <div class="bias-card">
                        <h3>Convenience Bias</h3>
                        <p>The sample is chosen because it is easy to reach.</p>
                        <p><strong>Example:</strong> Asking only the people sitting beside you in class.</p>
                    </div>
                    <div class="bias-card">
                        <h3>Voluntary Response Bias</h3>
                        <p>People choose whether to respond, so people with strong opinions may be overrepresented.</p>
                        <p><strong>Example:</strong> An online poll where anyone can vote.</p>
                    </div>
                    <div class="bias-card">
                        <h3>Nonresponse Bias</h3>
                        <p>Some selected people do not answer, and their missing answers may be different from the answers collected.</p>
                        <p><strong>Example:</strong> A homework survey gets only 14 responses from 200 selected students.</p>
                    </div>
                    <div class="bias-card">
                        <h3>Response Bias</h3>
                        <p>People answer inaccurately, often because they are embarrassed or want to look better.</p>
                        <p><strong>Example:</strong> Students overstate how many hours they studied.</p>
                    </div>
                    <div class="bias-card">
                        <h3>Question Wording Bias</h3>
                        <p>The question pushes people toward a certain answer.</p>
                        <p><strong>Example:</strong> "Do you agree that our excellent cafeteria should keep serving its popular meals?"</p>
                    </div>

                    <h2>3. Spotting Biased Wording</h2>
                    <table class="table table-bordered">
                        <tr><th>Biased Question</th><th>Better Question</th></tr>
                        <tr><td>Do you support wasting money on a new gym?</td><td>Do you support funding a new gym?</td></tr>
                        <tr><td>Should students be forced to wear uncomfortable uniforms?</td><td>Should students be required to wear uniforms?</td></tr>
                        <tr><td>Do you agree that homework is ruining student life?</td><td>How do you feel about the current amount of homework?</td></tr>
                    </table>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>A radio station asks listeners to call in and vote on whether city taxes should increase. The station announces the poll during a morning show mostly listened to by adults driving to work.</p>
                        <p>Identify two possible sources of bias.</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p><strong>Voluntary response bias:</strong> Only people who choose to call in are counted.</p>
                        <p><strong>Sampling bias:</strong> The poll mostly reaches morning radio listeners, not all city residents.</p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>A principal asks, "Do you agree that our school should finally replace the boring old schedule with a better one?"</p>
                        <ol>
                            <li>What type of bias is present?</li>
                            <li>Rewrite the question in a fairer way.</li>
                        </ol>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <ol>
                            <li>This is <strong>question wording bias</strong>.</li>
                            <li>A fairer question is: "Do you support changing the current school schedule?"</li>
                        </ol>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="sampling_techniques.php">Sampling Techniques</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="observational_vs_experiments.php">Observational Studies vs. Experiments</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="ethics.php">Ethics</a></li>
                    </ul></div></div>
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Try these questions:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="StatisticsDataDesignPractice.php">Statistics Practice Set</a></li>
                    </ul></div></div>
                </div>
            </div>
            <br><br><?php include_once("footer.php"); ?>
        </div></div>
    </div>
    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
