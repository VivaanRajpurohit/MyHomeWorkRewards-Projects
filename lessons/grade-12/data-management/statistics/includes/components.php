<?php
require_once __DIR__ . "/course-data.php";

function stats_render_question($question, $lessonId)
{
    static $questionNumber = 0;
    $questionNumber++;
    $id = stats_course_h("stats-answer-" . preg_replace("/[^a-zA-Z0-9_-]/", "-", $lessonId) . "-" . $question["id"] . "-" . $questionNumber);
    $type = isset($question["type"]) ? $question["type"] : "short-response";
    ?>
    <div class="practice-question">
        <div class="well well-sm">
            <p><?php echo $question["prompt"]; ?></p>
            <?php if (($type === "multiple-choice" || $type === "classification" || $type === "multiple-select") && !empty($question["options"])): ?>
                <ol class="question-options" type="A">
                    <?php foreach ($question["options"] as $option): ?><li><?php echo $option; ?></li><?php endforeach; ?>
                </ol>
            <?php endif; ?>
        </div>
        <span class="show-answer collapsed" role="button" tabindex="0" data-target="<?php echo $id; ?>" aria-controls="<?php echo $id; ?>" aria-pressed="false">Show Answer</span>
        <div id="<?php echo $id; ?>" class="hidden-answer">
            <?php if (!empty($question["hint"])): ?><p><strong>Hint:</strong> <?php echo $question["hint"]; ?></p><?php endif; ?>
            <?php echo $question["explanation"]; ?>
        </div>
    </div>
    <?php
}

function stats_render_question_set($title, $intro, $questions, $lessonId, $className = "")
{
    ?>
    <section class="lesson-section practice-section <?php echo stats_course_h($className); ?>" aria-labelledby="<?php echo stats_course_h($lessonId . "-" . strtolower(str_replace(" ", "-", $title))); ?>">
        <h2 id="<?php echo stats_course_h($lessonId . "-" . strtolower(str_replace(" ", "-", $title))); ?>"><?php echo stats_course_h($title); ?></h2>
        <?php if ($intro): ?><p><?php echo $intro; ?></p><?php endif; ?>
        <?php foreach ($questions as $question): stats_render_question($question, $lessonId); endforeach; ?>
    </section>
    <?php
}

function stats_render_worked_example($example, $index)
{
    static $exampleNumber = 0;
    $exampleNumber++;
    $answerId = "worked-answer-" . $exampleNumber;
    ?>
    <article class="worked-example">
        <h3>Example <?php echo $index + 1; ?>: <?php echo stats_course_h($example["title"]); ?></h3>
        <div class="well well-sm"><p><?php echo $example["scenario"]; ?></p></div>
        <span class="show-answer collapsed" role="button" tabindex="0" data-target="<?php echo $answerId; ?>" aria-controls="<?php echo $answerId; ?>" aria-pressed="false">Show Answer</span>
        <div id="<?php echo $answerId; ?>" class="hidden-answer">
            <ol class="solution-steps"><?php foreach ($example["steps"] as $step): ?><li><?php echo $step; ?></li><?php endforeach; ?></ol>
            <p><strong>Conclusion:</strong> <?php echo $example["conclusion"]; ?></p>
        </div>
    </article>
    <?php
}

function stats_render_simulation($type, $config = array())
{
    if ($type === "sampling") {
        ?>
        <div class="simulation" data-simulation="sampling">
            <div class="simulation-heading"><h3>Repeated-sampling lab</h3><span class="simulation-status">0 samples drawn</span></div>
            <p>Choose a sample size, then draw samples from the same right-skewed population. Each dot records one sample mean.</p>
            <div class="simulation-controls">
                <label>Sample size <select data-sample-size><option>2</option><option>5</option><option selected>10</option><option>30</option><option>100</option></select></label>
                <button class="course-btn" type="button" data-draw="1">Draw 1</button>
                <button class="course-btn" type="button" data-draw="10">Draw 10</button>
                <button class="course-btn" type="button" data-draw="100">Draw 100</button>
                <button class="text-btn" type="button" data-reset>Reset</button>
            </div>
            <canvas width="760" height="260" aria-label="Histogram of simulated sample means" role="img"></canvas>
            <p class="diagram-alternative">Text alternative: the histogram displays the sample means generated so far. Larger sample sizes should make the means cluster more tightly near the population mean.</p>
        </div>
        <?php
    } elseif ($type === "probability") {
        ?>
        <div class="simulation" data-simulation="probability">
            <div class="simulation-heading"><h3>Long-run probability lab</h3><span class="simulation-status">0 trials</span></div>
            <p>Choose a theoretical success probability and run repeated trials. Watch the experimental proportion settle toward the theoretical value.</p>
            <div class="simulation-controls">
                <label>Success probability <input data-probability type="range" min="0.1" max="0.9" step="0.1" value="0.6"><output>0.60</output></label>
                <button class="course-btn" type="button" data-trials="10">Run 10</button>
                <button class="course-btn" type="button" data-trials="100">Run 100</button>
                <button class="course-btn" type="button" data-trials="1000">Run 1,000</button>
                <button class="text-btn" type="button" data-reset>Reset</button>
            </div>
            <canvas width="760" height="240" aria-label="Experimental probability over repeated trials" role="img"></canvas>
            <p class="diagram-alternative">Text alternative: the line graph compares the cumulative experimental success proportion with the selected theoretical probability.</p>
        </div>
        <?php
    } elseif ($type === "venn") {
        ?>
        <div class="simulation venn-tool" data-simulation="venn">
            <h3>Interactive Venn diagram</h3>
            <p>Select a region to connect probability language with the part of the sample space it describes.</p>
            <div class="venn-controls" role="group" aria-label="Venn diagram region">
                <button class="course-btn" type="button" data-region="union">A or B</button>
                <button class="course-btn" type="button" data-region="intersection">A and B</button>
                <button class="course-btn" type="button" data-region="a-only">A but not B</button>
                <button class="course-btn" type="button" data-region="neither">Neither</button>
            </div>
            <svg viewBox="0 0 620 260" role="img" aria-labelledby="venn-title venn-desc">
                <title id="venn-title">Two-event Venn diagram</title>
                <desc id="venn-desc">A rectangle contains two overlapping circles labelled A and B.</desc>
                <rect class="venn-space" x="10" y="10" width="600" height="240"></rect>
                <circle class="venn-a" cx="250" cy="130" r="92"></circle>
                <circle class="venn-b" cx="370" cy="130" r="92"></circle>
                <text x="215" y="135">A</text><text x="395" y="135">B</text>
            </svg>
            <p class="venn-feedback" aria-live="polite">Choose a probability phrase.</p>
        </div>
        <?php
    } elseif ($type === "classification") {
        $items = array(
            array("label" => "Preferred device type", "answer" => "categorical"),
            array("label" => "Number of siblings", "answer" => "quantitative"),
            array("label" => "Satisfaction level", "answer" => "categorical"),
            array("label" => "Height in centimetres", "answer" => "quantitative"),
            array("label" => "Jersey number", "answer" => "categorical"),
            array("label" => "Goals scored", "answer" => "quantitative")
        );
        ?>
        <div class="simulation classification-tool" data-simulation="classification">
            <div class="simulation-heading"><h3>Variable classification lab</h3><span class="simulation-status">0 of 6 placed</span></div>
            <p>Sort each variable by what its values mean. A number used only as a label belongs with categorical data.</p>
            <div class="classification-bank" data-classification-zone="unplaced" aria-label="Variables waiting to be classified">
                <?php foreach ($items as $index => $item): ?>
                    <button class="classification-item" type="button" draggable="true" data-classification-item="<?php echo $index; ?>" data-expected="<?php echo $item["answer"]; ?>" aria-label="<?php echo stats_course_h($item["label"]); ?>. Press Enter to move between categories."><?php echo stats_course_h($item["label"]); ?></button>
                <?php endforeach; ?>
            </div>
            <div class="classification-zones">
                <div class="classification-zone" data-classification-zone="categorical"><h4>Categorical</h4><p>Labels or groups</p></div>
                <div class="classification-zone" data-classification-zone="quantitative"><h4>Quantitative</h4><p>Numerical amounts</p></div>
            </div>
            <div class="simulation-controls">
                <button class="course-btn" type="button" data-check-classification>Check classifications</button>
                <button class="text-btn" type="button" data-reset>Reset</button>
            </div>
            <p class="classification-feedback" aria-live="polite">Place all six variables, then check your reasoning.</p>
        </div>
        <?php
    } elseif ($type === "random-sample") {
        ?>
        <div class="simulation random-sample-tool" data-simulation="random-sample">
            <div class="simulation-heading"><h3>Random sample generator</h3><span class="simulation-status">No sample generated</span></div>
            <p>The population contains students numbered 001 through 120. Generate a simple random sample or a systematic sample and compare the selection patterns.</p>
            <div class="simulation-controls">
                <label>Sample size <input data-random-sample-size type="number" min="5" max="24" step="1" value="12"></label>
                <button class="course-btn" type="button" data-sample-method="srs">Generate SRS</button>
                <button class="course-btn" type="button" data-sample-method="systematic">Generate systematic sample</button>
                <button class="text-btn" type="button" data-reset>Reset</button>
            </div>
            <ol class="sample-result" aria-live="polite"></ol>
            <p class="sample-explanation">The selected student numbers will appear here.</p>
        </div>
        <?php
    } elseif ($type === "tree") {
        ?>
        <div class="simulation tree-tool">
            <h3>Tree-diagram path reader</h3>
            <svg viewBox="0 0 760 300" role="img" aria-labelledby="tree-title tree-desc">
                <title id="tree-title">Reminder and completion probability tree</title>
                <desc id="tree-desc">Sixty percent use reminders. Of those, seventy-five percent complete. Forty percent do not use reminders, and forty percent of those complete.</desc>
                <g class="tree-lines"><line x1="70" y1="145" x2="270" y2="70"/><line x1="70" y1="145" x2="270" y2="220"/><line x1="270" y1="70" x2="520" y2="35"/><line x1="270" y1="70" x2="520" y2="110"/><line x1="270" y1="220" x2="520" y2="185"/><line x1="270" y1="220" x2="520" y2="260"/></g>
                <g class="tree-labels"><text x="85" y="95">Reminder 0.60</text><text x="85" y="215">No reminder 0.40</text><text x="310" y="40">Complete 0.75</text><text x="310" y="112">Not complete 0.25</text><text x="310" y="185">Complete 0.40</text><text x="310" y="260">Not complete 0.60</text><text x="540" y="40">0.45</text><text x="540" y="115">0.15</text><text x="540" y="190">0.16</text><text x="540" y="265">0.24</text></g>
            </svg>
            <p class="diagram-alternative">Multiply along a branch to find one complete path. Add separate complete paths when they lead to the same event.</p>
        </div>
        <?php
    }
}
