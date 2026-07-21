<?php
require_once __DIR__ . "/course-data.php";
require_once __DIR__ . "/components.php";
$projectRoot = dirname(__DIR__, 5);

if (!isset($stats_lesson_id)) {
    http_response_code(500);
    exit("Lesson ID is missing.");
}

$lesson = stats_course_lesson($stats_lesson_id);
$meta = stats_course_lesson_meta($stats_lesson_id);
if (!$lesson || !$meta) {
    http_response_code(404);
    exit("Lesson not found.");
}

$catalog = stats_course_catalog();
$unit = $catalog[$meta["unit_id"]];
$stats_unit = $meta["unit_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo stats_course_h($lesson["overview"]); ?>">
    <title><?php echo stats_course_h($meta["title"]); ?> | Grade 12 Data Management</title>
    <link rel="icon" href="/assets/images/favicon.png" type="image/png">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/statistics-lesson.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.MathJax={tex:{inlineMath:[['\\(','\\)']],displayMath:[['\\[','\\]']]},svg:{fontCache:'global'}};</script>
    <script async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
    <script src="/assets/js/statistics-course.js" defer></script>
</head>
<body class="statistics-lesson">
<?php include_once $projectRoot . "/includes/header.php"; ?>

<div class="container-fluid statistics-container" style="margin-bottom:30px;">
    <br><br>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <ol class="breadcrumb">
                <li><a href="https://app.myhomeworkrewards.com/lessons/lessons_main.php">Lessons</a></li>
                <li><a href="https://app.myhomeworkrewards.com/lessons/Gr12/gr12_main.php">Grade 12</a></li>
                <li><a href="https://app.myhomeworkrewards.com/lessons/Gr12/Math/gr12_math_main.php">Data Management</a></li>
                <li><a href="<?php echo stats_course_h($meta["file"]); ?>"><?php echo stats_course_h($meta["title"]); ?></a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h1><?php echo stats_course_h($meta["title"]); ?></h1>
            <div class="row">
                <div class="col-lg-9 lesson-content">
                    <div class="lesson-hero">
                        <p><?php echo $lesson["overview"]; ?></p>
                        <p><strong>Estimated time:</strong> <?php echo $meta["minutes"]; ?> minutes</p>
                    </div>

                    <h2>Learning Objectives</h2>
                    <ul><?php foreach ($lesson["objectives"] as $item): ?><li><?php echo $item; ?></li><?php endforeach; ?></ul>

                    <h2>Prerequisite Knowledge</h2>
                    <ul><?php foreach ($lesson["prerequisites"] as $item): ?><li><?php echo $item; ?></li><?php endforeach; ?></ul>

                    <h2>Key Vocabulary</h2>
                    <table class="table table-bordered vocabulary-table">
                        <thead><tr><th>Term</th><th>Meaning</th></tr></thead>
                        <tbody><?php foreach ($lesson["vocabulary"] as $item): ?><tr><td><strong><?php echo stats_course_h($item[0]); ?></strong></td><td><?php echo $item[1]; ?></td></tr><?php endforeach; ?></tbody>
                    </table>

                    <?php foreach ($lesson["sections"] as $section): ?>
                        <section class="lesson-section">
                            <h2><?php echo stats_course_h($section["title"]); ?></h2>
                            <?php foreach ($section["content"] as $block): ?>
                                <?php if (is_array($block)): ?>
                                    <div class="note-box <?php echo stats_course_h($block["type"]); ?>-box">
                                        <?php if (!empty($block["label"])): ?><h3><?php echo stats_course_h($block["label"]); ?></h3><?php endif; ?>
                                        <?php echo $block["html"]; ?>
                                    </div>
                                <?php else: ?>
                                    <?php echo $block; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if (!empty($section["simulation"])): stats_render_simulation($section["simulation"]); endif; ?>
                        </section>
                    <?php endforeach; ?>

                    <?php if (!empty($lesson["activities"])): ?>
                        <section class="lesson-section">
                            <h2>Interactive Lab</h2>
                            <?php foreach ($lesson["activities"] as $activity): stats_render_simulation($activity); endforeach; ?>
                        </section>
                    <?php endif; ?>

                    <section class="lesson-section">
                        <h2>Worked Examples</h2>
                        <p>Try to identify the method before opening each answer. The complete solution breaks down every step.</p>
                        <?php foreach ($lesson["worked_examples"] as $index => $example): stats_render_worked_example($example, $index); endforeach; ?>
                    </section>

                    <section class="lesson-section">
                        <h2>Common Misconceptions and Mistakes</h2>
                        <table class="table table-bordered misconception-table">
                            <thead><tr><th>Common mistake</th><th>What to remember</th></tr></thead>
                            <tbody><?php foreach ($lesson["misconceptions"] as $item): ?><tr><td><strong><?php echo stats_course_h($item[0]); ?></strong></td><td><?php echo $item[1]; ?></td></tr><?php endforeach; ?></tbody>
                        </table>
                    </section>

                    <section class="lesson-section why-section">
                        <h2>Why This Matters</h2>
                        <?php foreach ($lesson["why"] as $paragraph): ?><p><?php echo $paragraph; ?></p><?php endforeach; ?>
                    </section>

                    <?php stats_render_question_set("Quick Knowledge Check", "Check the main ideas before moving into longer practice.", $lesson["knowledge_check"], $meta["id"], "knowledge-check"); ?>
                    <?php stats_render_question_set("Guided Practice", "Work through these one step at a time, then reveal the complete explanation.", $lesson["guided_practice"], $meta["id"], "guided-practice"); ?>
                    <?php stats_render_question_set("Independent Practice", "Try these without notes first, then compare your process with the answer.", $lesson["independent_practice"], $meta["id"], "independent-practice"); ?>

                    <section class="lesson-section summary-section">
                        <h2>Lesson Summary</h2>
                        <ul><?php foreach ($lesson["summary"] as $item): ?><li><?php echo $item; ?></li><?php endforeach; ?></ul>
                    </section>

                    <?php stats_render_question_set("Exit Ticket", "Use these final questions to check whether the lesson is secure.", $lesson["exit_ticket"], $meta["id"], "exit-ticket"); ?>
                </div>

                <div class="col-lg-3 lesson-sidebar">
                    <?php include __DIR__ . "/sidebar.php"; ?>
                </div>
            </div>
            <br><br>
            <?php include_once $projectRoot . "/includes/footer.php"; ?>
        </div>
    </div>
</div>

<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/hide-answer.js"></script>
</body>
</html>
