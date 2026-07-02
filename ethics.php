<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on ethics in data collection and experiments.">
    <title>Ethics in Data Collection</title>
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
        .ethics-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;margin-bottom:14px;}
        .hidden-answer{background:#fbf9ff;border-left:5px solid #5B0A9F;padding:14px 18px;margin-top:10px;border-radius:4px;}
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
            <li><a href="ethics.php">Ethics</a></li>
        </ol></div></div>
        <div class="row"><div class="col-lg-8 col-lg-offset-2">
            <h1>Ethics in Data Collection and Experiments</h1>
            <div class="row">
                <div class="col-lg-9">
                    <div class="lesson-hero">
                        <p><strong>Good statistics is not only about correct math.</strong> It is also about treating people fairly, protecting privacy, and being honest about what the data can and cannot show.</p>
                    </div>

                    <h2>1. Informed Consent</h2>
                    <div class="ethics-card">
                        <p>Participants should know what the study is about, what they will be asked to do, and any possible risks. They should be able to say no without being punished.</p>
                    </div>

                    <h2>2. Privacy and Confidentiality</h2>
                    <div class="ethics-card">
                        <p>Personal information should be protected. If a survey asks sensitive questions, names should not be attached unless there is a very strong reason.</p>
                    </div>

                    <h2>3. Avoiding Harm</h2>
                    <div class="ethics-card">
                        <p>An experiment should not put people in danger just to collect data. Researchers must think about physical, emotional, social, and academic harm.</p>
                    </div>

                    <h2>4. Honesty in Reporting</h2>
                    <div class="ethics-card">
                        <p>Researchers should not hide inconvenient results, exaggerate conclusions, or make a graph that visually tricks the reader.</p>
                    </div>

                    <h2>5. Special Care With Vulnerable Groups</h2>
                    <p>Studies involving children, medical patients, or people who may feel pressured to participate require extra care. For school projects, this means questions should be respectful, optional, and appropriate.</p>

                    <h2>Worked Example</h2>
                    <div class="well well-sm">
                        <p>A student wants to survey classmates about family income and plans to post the raw answers in a class slideshow with names included.</p>
                        <p>What ethical problems are present?</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                    <div id="answer1" class="hidden-answer">
                        <p>The question is sensitive, and posting names violates privacy. If the data is collected at all, it should be optional, anonymous, and reported only in summary form.</p>
                    </div>

                    <hr>
                    <h2>Practice</h2>
                    <div class="well well-sm">
                        <p>A teacher tells students they must participate in a survey about stress or lose participation marks. Explain why this is a problem and how to fix it.</p>
                    </div>
                    <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                    <div id="answer2" class="hidden-answer">
                        <p>This is not proper consent because students are being pressured. The survey should be voluntary, and students should be able to skip questions or choose an alternate activity without penalty.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-default"><div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div><div class="panel-body"><ul class="list-group">
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="sampling_techniques.php">Sampling Techniques</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="bias.php">Sampling Bias</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="observational_vs_experiments.php">Observational Studies vs. Experiments</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
                        <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="design_elements.php">Design Elements</a></li>
                    </ul></div></div>
                </div>
            </div>
            <br><br><?php include_once("footer.php"); ?>
        </div></div>
    </div>
    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
