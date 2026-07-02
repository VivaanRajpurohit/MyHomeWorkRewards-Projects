<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Grade 12 Data Management lesson on sampling and data foundations, including populations, samples, census, variables, and sampling techniques.">
    <title>Sampling and Data Foundations</title>
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
        h1,h2,h3{font-family:lucida sans;}
        p,li{font-size:16px; line-height:1.6;}
        ol.breadcrumb{display:flex;align-items:center;list-style-type:none;margin-left:10rem;background-color:#5B0A9F;color:#fff;border-radius:4px;padding:8px 15px;font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;font-size:14px;line-height:1.42857143;}
        ol.breadcrumb li{display:inline-block;margin-right:10px;}
        .lesson-hero{background:#f7f2ff;border-left:6px solid #5B0A9F;border-radius:6px;padding:18px 22px;margin-bottom:22px;}
        .note-box{border:1px solid #DCC4F8;border-radius:6px;padding:16px;margin:18px 0;background:#fbf9ff;}
        .method-grid{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin:18px 0;}
        .method-card{border-left:5px solid #5B0A9F;background:#f8f8f8;border-radius:4px;padding:15px;}
        .flow{display:flex;flex-wrap:wrap;gap:10px;margin:18px 0;}
        .flow span{background:#DCC4F8;border-radius:5px;padding:12px 14px;font-weight:bold;text-align:center;min-width:135px;}
        .hidden-answer{background:#fbf9ff;border-left:5px solid #5B0A9F;padding:14px 18px;margin-top:10px;border-radius:4px;}
        .table>tbody>tr>th{background:#f7f2ff;}
        @media (max-width:767px){ol.breadcrumb{margin-left:0;display:block;}.method-grid{grid-template-columns:1fr;}.flow span{width:100%;}}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body>
  <?php include_once("header.php"); ?>

    <div class="container-fluid" style="margin-bottom:30px;"><br><br>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <ol class="breadcrumb">
                    <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
                    <li><a href="https://app.myhomeworkrewards.com/lessons/Gr12/gr12_main.php">Grade 12</a></li>
                    <li><a href="https://app.myhomeworkrewards.com/lessons/Gr12/Math/gr12_math_main.php">Data Management</a></li>
                    <li><a href="sampling_techniques.php">Sampling Techniques</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Sampling and Data Foundations</h1>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="lesson-hero">
                            <p><strong>Data does not magically become useful just because it is collected.</strong> In statistics, the way you collect data can decide whether your conclusion is strong or completely misleading.</p>
                            <p>This lesson builds the foundation: populations, samples, variables, censuses, and the four sampling techniques used most often in Grade 12 Data Management.</p>
                        </div>

                        <h2>1. Population, Sample, and Census</h2>
                        <p>The <strong>population</strong> is the entire group you want information about. The <strong>sample</strong> is the smaller group you actually collect information from.</p>
                        <p>A <strong>census</strong> collects data from every member of the population. A census sounds perfect, but it can be expensive, slow, or impossible when the population is large.</p>

                        <table class="table table-bordered">
                            <tr><th>Situation</th><th>Population</th><th>Sample</th></tr>
                            <tr><td>Surveying study habits at a school</td><td>All students at the school</td><td>120 students selected for the survey</td></tr>
                            <tr><td>Testing battery life from a factory</td><td>All batteries produced that week</td><td>80 batteries tested by quality control</td></tr>
                            <tr><td>Measuring voter opinion in a city</td><td>All eligible voters in the city</td><td>900 voters contacted by phone</td></tr>
                        </table>

                        <div class="note-box">
                            <h3>Quick Rule</h3>
                            <p>If the study is about everyone in a group, that group is the population. If the study only asks some of them, those people are the sample.</p>
                        </div>

                        <h2>2. Variables and Data Types</h2>
                        <p>A <strong>variable</strong> is what you record for each person or item. Some variables are labels, and some are numbers.</p>
                        <ul>
                            <li><strong>Categorical variables:</strong> favorite course, type of phone, chosen transportation, yes/no responses.</li>
                            <li><strong>Quantitative variables:</strong> height, test score, number of hours studied, distance travelled.</li>
                            <li><strong>Discrete quantitative data:</strong> counted values, such as number of siblings.</li>
                            <li><strong>Continuous quantitative data:</strong> measured values, such as mass, time, or temperature.</li>
                        </ul>

                        <div class="well well-sm">
                            <p><strong>Try It:</strong> A student records the time, in minutes, that each classmate spends commuting to school. What type of variable is this?</p>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer1" aria-pressed="false">Show Answer</span>
                        <div id="answer1" class="hidden-answer">
                            <p>It is <strong>quantitative continuous</strong> data because time is measured and can include decimals, such as 18.5 minutes.</p>
                        </div>

                        <hr>
                        <h2>3. Types of Sampling</h2>
                        <p>A good sample should represent the population. That does not mean it has to be huge, but it does need to be chosen carefully.</p>

                        <div class="method-grid">
                            <div class="method-card">
                                <h3>Simple Random Sampling</h3>
                                <p>Every member of the population has the same chance of being selected.</p>
                                <p><strong>Example:</strong> Use a random number generator to select 60 student ID numbers from a school list.</p>
                            </div>
                            <div class="method-card">
                                <h3>Stratified Sampling</h3>
                                <p>Split the population into important groups, then randomly sample from each group.</p>
                                <p><strong>Example:</strong> Randomly select students from each grade so Grades 9, 10, 11, and 12 are all represented.</p>
                            </div>
                            <div class="method-card">
                                <h3>Cluster Sampling</h3>
                                <p>Split the population into natural groups, randomly choose some whole groups, and survey everyone inside those chosen groups.</p>
                                <p><strong>Example:</strong> Randomly choose 5 homerooms and survey every student in those homerooms.</p>
                            </div>
                            <div class="method-card">
                                <h3>Systematic Sampling</h3>
                                <p>Choose a random starting point, then select every nth member.</p>
                                <p><strong>Example:</strong> Start with the 4th name on a list, then survey every 12th name after that.</p>
                            </div>
                        </div>

                        <h2>4. How to Choose a Method</h2>
                        <div class="flow">
                            <span>Define the population</span>
                            <span>Choose the variable</span>
                            <span>Select a sampling method</span>
                            <span>Collect data carefully</span>
                            <span>Make a conclusion</span>
                        </div>
                        <p>If you need every major subgroup represented, stratified sampling is often strongest. If a full list is hard to get but natural groups exist, cluster sampling may be easier. If you have a clean list, simple random or systematic sampling can work well.</p>

                        <h2>Worked Example</h2>
                        <div class="well well-sm">
                            <p>A school wants to estimate the average amount of time Grade 12 students spend on homework each night. The school has a list of all Grade 12 students. Describe a simple random sample and a stratified sample.</p>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer2" aria-pressed="false">Show Answer</span>
                        <div id="answer2" class="hidden-answer">
                            <p><strong>Simple random sample:</strong> Number every Grade 12 student and use a random number generator to choose, for example, 80 students.</p>
                            <p><strong>Stratified sample:</strong> Divide Grade 12 students by a useful subgroup, such as academic program or homeroom, then randomly choose students from each subgroup.</p>
                        </div>

                        <hr>
                        <h2>Practice</h2>
                        <div class="well well-sm">
                            <p>A city wants to ask residents about public transit. It randomly chooses 20 apartment buildings and surveys every person living in those buildings.</p>
                            <ol>
                                <li>Which sampling method is being used?</li>
                                <li>Why might the city choose this method?</li>
                                <li>What is one possible weakness?</li>
                            </ol>
                        </div>
                        <span class="show-answer collapsed" style="cursor:pointer; text-decoration:underline;" data-target="answer3" aria-pressed="false">Show Answer</span>
                        <div id="answer3" class="hidden-answer">
                            <ol>
                                <li>This is <strong>cluster sampling</strong>.</li>
                                <li>It is easier than building one list of every resident in the city.</li>
                                <li>People in apartment buildings may use transit differently from people in houses, so the sample might not represent all residents.</li>
                            </ol>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h5 class="text-center">Review these lessons:</h5></div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="bias.php">Sampling Bias</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="observational_vs_experiments.php">Observational Studies vs. Experiments</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="experimental_design.php">Experimental Design</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="design_elements.php">Design Elements</a></li>
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="ethics.php">Ethics</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading"><h5 class="text-center">Try these questions:</h5></div>
                            <div class="panel-body">
                                <ul class="list-group">
                                    <li class="list-group-item" style="padding:0px 0px 10px 0px;"><a href="StatisticsDataDesignPractice.php">Statistics Practice Set</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <?php include_once("footer.php"); ?>
            </div>
        </div>
    </div>

    <script type='text/javascript' src='hide_answer.js'></script>
  </body>
</html>
