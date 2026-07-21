<?php
require_once __DIR__ . "/course-data.php";
require_once __DIR__ . "/components.php";
require_once __DIR__ . "/review-data.php";
$projectRoot = dirname(__DIR__, 5);

$catalog = stats_course_catalog();
if (!isset($stats_review_unit) || !isset($catalog[$stats_review_unit])) {
    http_response_code(404);
    exit("Review not found.");
}
$unit = $catalog[$stats_review_unit];
$questions = stats_review_questions($stats_review_unit);
$stats_unit = $stats_review_unit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo stats_course_h($unit["title"]); ?> Practice Questions</title>
    <link rel="icon" href="/assets/images/favicon.png" type="image/png">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/statistics-lesson.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.MathJax={tex:{inlineMath:[['\\(','\\)']],displayMath:[['\\[','\\]']]},svg:{fontCache:'global'}};</script>
    <script async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body class="statistics-review">
<?php include_once $projectRoot . "/includes/header.php"; ?>

<div class="container-fluid statistics-container" style="margin-bottom:30px;">
    <br><br>
    <div class="row"><div class="col-lg-8 col-lg-offset-2">
        <ol class="breadcrumb">
            <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
            <li><a href="https://app.myhomeworkrewards.com/lessons/Gr12/gr12_main.php">Grade 12</a></li>
            <li><a href="https://app.myhomeworkrewards.com/lessons/Gr12/Math/gr12_math_main.php">Data Management</a></li>
            <li><a href="<?php echo stats_course_h($unit["review"]); ?>">Practice Questions</a></li>
        </ol>
    </div></div>

    <div class="row"><div class="col-lg-8 col-lg-offset-2">
        <h1><?php echo stats_course_h($unit["title"]); ?> Practice Questions</h1>
        <div class="row">
            <div class="col-lg-9 lesson-content">
                <div class="lesson-hero">
                    <p>This set reviews the complete unit. Try each question before revealing the answer, then compare both your result and your reasoning with the explanation.</p>
                    <p><strong><?php echo count($questions); ?> questions with complete answers</strong></p>
                </div>
                <?php foreach ($questions as $question): stats_render_question($question, "review-" . $unit["number"]); endforeach; ?>
            </div>
            <div class="col-lg-3 lesson-sidebar"><?php include __DIR__ . "/sidebar.php"; ?></div>
        </div>
        <br><br><?php include_once $projectRoot . "/includes/footer.php"; ?>
    </div></div>
</div>

<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/hide-answer.js"></script>
</body>
</html>
