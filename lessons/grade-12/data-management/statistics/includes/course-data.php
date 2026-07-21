<?php

function stats_course_catalog()
{
    return array(
        "unit1" => array(
            "number" => 1,
            "title" => "Data Collection and Experimental Design",
            "description" => "Learn how trustworthy data begins: define a population, choose a representative sample, recognize bias, and design studies that support responsible conclusions.",
            "review" => "/lessons/grade-12/data-management/statistics/practice/unit-1-review.php",
            "lessons" => array(
                array("id" => "1.1", "title" => "Sampling and Data Foundations", "file" => "/lessons/grade-12/data-management/statistics/unit-1/sampling-foundations.php", "minutes" => 45),
                array("id" => "1.2", "title" => "Types of Sampling", "file" => "/lessons/grade-12/data-management/statistics/unit-1/sampling-techniques.php", "minutes" => 50),
                array("id" => "1.3", "title" => "Sampling Bias", "file" => "/lessons/grade-12/data-management/statistics/unit-1/sampling-bias.php", "minutes" => 45),
                array("id" => "1.4", "title" => "Observational Studies Versus Experiments", "file" => "/lessons/grade-12/data-management/statistics/unit-1/observational-studies-vs-experiments.php", "minutes" => 50),
                array("id" => "1.5", "title" => "Experimental Design", "file" => "/lessons/grade-12/data-management/statistics/unit-1/experimental-design.php", "minutes" => 60),
                array("id" => "1.6", "title" => "Design Elements", "file" => "/lessons/grade-12/data-management/statistics/unit-1/design-elements.php", "minutes" => 50),
                array("id" => "1.7", "title" => "Ethics in Statistics and Research", "file" => "/lessons/grade-12/data-management/statistics/unit-1/ethics.php", "minutes" => 45)
            )
        ),
        "unit2" => array(
            "number" => 2,
            "title" => "Counting and Probability",
            "description" => "Build sample spaces, count outcomes efficiently, and use probability rules, diagrams, and conditional reasoning to measure uncertainty.",
            "review" => "/lessons/grade-12/data-management/statistics/practice/unit-2-review.php",
            "lessons" => array(
                array("id" => "2.1", "title" => "Organized Counting", "file" => "/lessons/grade-12/data-management/statistics/unit-2/organized-counting.php", "minutes" => 50),
                array("id" => "2.2", "title" => "Permutations and Combinations", "file" => "/lessons/grade-12/data-management/statistics/unit-2/permutations-and-combinations.php", "minutes" => 60),
                array("id" => "2.3", "title" => "The Binomial Theorem", "file" => "/lessons/grade-12/data-management/statistics/unit-2/binomial-theorem.php", "minutes" => 55),
                array("id" => "2.4", "title" => "Probability Rules", "file" => "/lessons/grade-12/data-management/statistics/unit-2/probability-rules.php", "minutes" => 60),
                array("id" => "2.5", "title" => "Event Types", "file" => "/lessons/grade-12/data-management/statistics/unit-2/event-types.php", "minutes" => 50),
                array("id" => "2.6", "title" => "Visualizing Probability", "file" => "/lessons/grade-12/data-management/statistics/unit-2/visualizing-probability.php", "minutes" => 50),
                array("id" => "2.7", "title" => "Tables and Tree Diagrams", "file" => "/lessons/grade-12/data-management/statistics/unit-2/tables-and-tree-diagrams.php", "minutes" => 55),
                array("id" => "2.8", "title" => "Independent Events", "file" => "/lessons/grade-12/data-management/statistics/unit-2/independent-events.php", "minutes" => 50),
                array("id" => "2.9", "title" => "Probability Word Problems", "file" => "/lessons/grade-12/data-management/statistics/unit-2/probability-word-problems.php", "minutes" => 60)
            )
        ),
        "unit3" => array(
            "number" => 3,
            "title" => "Sampling Distributions",
            "description" => "Follow statistics across repeated samples, understand the Central Limit Theorem, and calculate probabilities and standard errors for means and proportions.",
            "review" => "/lessons/grade-12/data-management/statistics/practice/unit-3-review.php",
            "lessons" => array(
                array("id" => "3.1", "title" => "Introduction to Sampling Distributions", "file" => "/lessons/grade-12/data-management/statistics/unit-3/sampling-distributions-introduction.php", "minutes" => 50),
                array("id" => "3.2", "title" => "The Central Limit Theorem", "file" => "/lessons/grade-12/data-management/statistics/unit-3/central-limit-theorem.php", "minutes" => 60),
                array("id" => "3.3", "title" => "Sampling Distribution for Means", "file" => "/lessons/grade-12/data-management/statistics/unit-3/sampling-distribution-means.php", "minutes" => 60),
                array("id" => "3.4", "title" => "Sampling Distribution for Proportions", "file" => "/lessons/grade-12/data-management/statistics/unit-3/sampling-distribution-proportions.php", "minutes" => 60),
                array("id" => "3.5", "title" => "Standard Error", "file" => "/lessons/grade-12/data-management/statistics/unit-3/standard-error.php", "minutes" => 50)
            )
        )
    );
}

function stats_course_flat_lessons()
{
    $flat = array();
    foreach (stats_course_catalog() as $unitId => $unit) {
        foreach ($unit["lessons"] as $lesson) {
            $lesson["unit_id"] = $unitId;
            $lesson["unit_title"] = $unit["title"];
            $flat[] = $lesson;
        }
    }
    return $flat;
}

function stats_course_lesson_meta($lessonId)
{
    foreach (stats_course_flat_lessons() as $lesson) {
        if ($lesson["id"] === $lessonId) {
            return $lesson;
        }
    }
    return null;
}

function stats_course_lesson($lessonId)
{
    $unitNumber = substr($lessonId, 0, 1);
    $path = dirname(__DIR__) . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "unit-" . $unitNumber . ".php";
    if (!is_file($path)) {
        return null;
    }
    $lessons = require $path;
    if (!isset($lessons[$lessonId])) {
        return null;
    }
    $lesson = $lessons[$lessonId];
    $expansion = stats_course_expansion($lessonId);
    if ($expansion) {
        $lesson["sections"][] = $expansion;
    }
    return $lesson;
}

function stats_course_expansion($lessonId)
{
    $notes = array(
        "2.2" => array(
            "A Reliable Decision Process",
            "When a problem mixes selection and arrangement, separate the stages. A company may choose four finalists from 12 and then assign first and second place among those finalists. The first stage is \\(\\binom{12}{4}\\). The second is \\(P(4,2)\\). Multiply because each finalist group can produce the same number of prize assignments.",
            "Use the identity \\(P(n,r)=\\binom nr r!\\) as a size check. A permutation count should be at least as large as the corresponding combination count because it distinguishes internal orders. If a calculator gives fewer ordered selections than unordered groups, the setup or entry is wrong.",
            "Technology can evaluate formulas, but written setup still matters. Record n, r, whether order matters, and every restriction before pressing keys. For a difficult restriction, test a small version by listing outcomes; it often reveals overlapping cases, reversible blocks, or an incorrect complement."
        ),
        "2.3" => array(
            "Verification and Transfer",
            "Several checks can verify an expansion. Substituting \\(a=1\\) and \\(b=1\\) into \\((a+b)^n\\) shows that row coefficients sum to \\(2^n\\). Setting one variable to zero checks the first and last terms. Every term should have total degree n.",
            "For a negative binomial, substitute a simple value to expose sign errors. If an expression claims to equal \\((x-1)^4\\), setting \\(x=1\\) should make the expansion zero. One substitution is not a proof, but it is a useful diagnostic after symbolic work.",
            "The general-term method can find a constant term by setting the total variable exponent to zero. Keep grouped terms such as \\((3x)^{n-r}\\) and \\((-2)^r\\) intact until the correct index is found; this protects numerical powers and signs."
        ),
        "2.4" => array(
            "Probability Rules as One System",
            "The complement, addition, conditional, and multiplication rules all partition a sample space. The addition rule rebuilds a union from A-only, B-only, and both. Conditional probability zooms into one region and treats it as the new whole. Multiplication converts a conditional share back to a joint share.",
            "If 30% use reminders and 80% of those complete, then 24% of all users are in the reminder-and-complete intersection because \\(0.30(0.80)=0.24\\). Dividing that joint region by the 30% reminder region recovers the 80% conditional rate.",
            "Use probability bounds to audit results. A union cannot be smaller than either event, an intersection cannot exceed either marginal probability, and a conditional numerator cannot exceed the conditioned group. These checks catch overlap and denominator errors quickly."
        ),
        "2.5" => array(
            "Classify Relationships in Two Steps",
            "One event pair can receive more than one description. Complementary events are mutually exclusive and also cover the full sample space. Dependent events may overlap or be mutually exclusive. Classify overlap and influence separately before choosing the most specific label requested.",
            "First ask whether the events can occur together; if not, they are mutually exclusive. Then ask whether learning one changes the other's probability. If it does, they are dependent. If they can occur together and probabilities remain unchanged, they are independent.",
            "A table can show association in a sample, but exact independence is a population or model property. Calculate conditional rates, describe whether the sample pattern is approximately independent, and avoid turning a small sample difference or equality into a universal conclusion."
        ),
        "2.6" => array(
            "Choose the Visual That Answers the Question",
            "A Venn diagram is strongest for overlap, a two-way table for exact counts and conditional comparisons, and an area model for multiplication. A useful visual makes the requested numerator, denominator, or region easier to identify; it is not decoration.",
            "To move from a table to a Venn diagram, place the both count in the overlap first. Subtract it from each event total to find the only regions, then subtract the union from the grand total for neither. Starting with full event totals inside the circles double-counts the overlap.",
            "Compare rates when group sizes differ. Sixty of 100 mobile users is 60%, while 90 of 200 desktop users is 45%. Desktop has more completers but a lower completion rate. Label visuals directly and provide a text alternative so meaning never depends on colour alone."
        ),
        "2.7" => array(
            "Audit a Tree Before Trusting It",
            "Before calculating, verify that branches leaving every node sum to one and label later branches with their conditions. Writing 0.75 beside completion is incomplete; \\(P(C|R)=0.75\\) records which earlier path controls that value.",
            "After calculating, add every endpoint product. A total below one signals a missing path; a total above one signals overlap, bad branch sums, or arithmetic error. Then add requested endpoints to recover any known marginal probabilities from the prompt.",
            "A tree can be drawn in reverse order only after recalculating its conditionals. A reminder-first tree uses \\(P(C|R)\\), while a completion-first tree uses \\(P(R|C)\\). Hypothetical counts such as 1,000 users often make this reversal and its new denominator easier to explain."
        ),
        "2.8" => array(
            "Model Assumptions and Sensitivity",
            "Independent trials are approximations in many applications. Shot probability can change with fatigue, and product quality can change after a machine adjustment. Before using a repeated-trial formula, explain why conditions are stable enough and why one result does not influence the next.",
            "Sensitivity analysis changes the assumed p. For five trials, at-least-one probability is \\(1-(1-p)^5\\). At p=0.20 it is about 0.6723; at p=0.25 it is about 0.7627. A modest per-trial change can meaningfully alter the multi-trial answer.",
            "Exactly-k probabilities for k from 0 through n should sum to one. This is a useful technology check, but the combination factor still needs explanation: it counts success positions. Pairwise independence among three events also may not guarantee full mutual independence, an important enrichment warning."
        ),
        "2.9" => array(
            "Communicate a Complete Solution",
            "Write one decision sentence before arithmetic: 'Because selection is without replacement, the second probability is conditional,' or 'Because the committee is unordered, combinations count the groups.' This makes the assumption visible and separates reasoning from calculator work.",
            "Keep units consistent. A count of 52 cannot be subtracted from a proportion of 0.60. Convert both to counts or both to proportions. Preserve exact fractions until the final line when practical, then state a sensible rounding precision.",
            "Test the answer against the story. An at-least-one probability should exceed the one-trial probability. A without-replacement path should visibly change later fractions. A conditional probability should use the conditioned group. These checks reveal structural errors that arithmetic alone cannot."
        ),
        "3.2" => array(
            "Build Intuition With Extreme Cases",
            "With \\(n=1\\), a sample mean is one individual value, so its standard error equals \\(\\sigma\\). With \\(n=100\\), averaging 100 independent values reduces spread to \\(\\sigma/10\\). The population is not less variable; only the average is more stable.",
            "The shape change is gradual. Means of two values from a strongly skewed population can remain skewed because one extreme value dominates. Means of 30 dilute one extreme across more observations, and means of 100 are more stable still. Heavy tails and outliers can require larger n.",
            "Separate the theorem's three claims: centre remains \\(\\mu\\), spread becomes \\(\\sigma/\\sqrt n\\), and shape approaches normality as n grows. Sample size changes spread and shape, not the unbiased centre."
        ),
        "3.3" => array(
            "Technology Without Losing the Reasoning",
            "A normal calculator may accept bounds, mean, and standard deviation. For a sample-mean question, enter standard error as the distribution's standard deviation. Entering population sigma models individuals and can make an extreme sample mean look far too ordinary.",
            "Record the z-score or model parameters even when technology returns an area directly. Use landmarks: a cutoff at the mean leaves 0.5 on each side, one standard error above leaves about 0.1587 to the right, and two standard errors above leave about 0.0228.",
            "For an interval, subtract cumulative left-tail areas or use a between function. For a cutoff, identify which percentage lies below. The highest 10% begins at the 90th percentile, so its z-score is positive."
        ),
        "3.4" => array(
            "Discrete Counts Behind Proportions",
            "The success count X is discrete even when a continuous normal curve approximates p-hat. With n=100, proportions jump by 0.01. The event \\(\\hat p>0.68\\) means at least 69 successes, while \\(\\hat p\\ge0.68\\) includes 68.",
            "Some courses use a continuity correction for a binomial count. The event \\(X\\ge69\\) uses the continuous boundary 68.5 before standardizing. Apply this refinement when required, but always identify the exact count event before approximation.",
            "Holding p fixed, the standard-error ratio is \\(SE_2/SE_1=\\sqrt{n_1/n_2}\\). Increasing n from 100 to 225 multiplies SE by \\(\\sqrt{100/225}=2/3\\). This compares precision without recalculating both formulas."
        )
    );

    if (!isset($notes[$lessonId])) {
        return null;
    }
    $note = $notes[$lessonId];
    return array(
        "title" => $note[0],
        "content" => array(
            "<p>" . $note[1] . "</p>",
            "<p>" . $note[2] . "</p>",
            "<p>" . $note[3] . "</p>",
            "<p>To make this skill durable, explain each choice in words before using technology. Then check the result with a second representation, a small case, a boundary value, or an estimate of reasonable size. Statistics and probability are easier to trust when the method can be reconstructed from the meaning of the quantities rather than remembered as an isolated calculator sequence. A complete final sentence should name the event or quantity, the group or process, and any assumption that the conclusion needs.</p>"
        )
    );
}

function stats_course_neighbors($lessonId)
{
    $lessons = stats_course_flat_lessons();
    foreach ($lessons as $index => $lesson) {
        if ($lesson["id"] === $lessonId) {
            return array(
                "previous" => $index > 0 ? $lessons[$index - 1] : null,
                "next" => $index < count($lessons) - 1 ? $lessons[$index + 1] : null
            );
        }
    }
    return array("previous" => null, "next" => null);
}

function stats_course_h($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, "UTF-8");
}

function stats_q($id, $type, $prompt, $answer, $explanation, $hint, $difficulty = "proficient", $options = array(), $tags = array())
{
    return array(
        "id" => $id,
        "type" => $type,
        "prompt" => $prompt,
        "answer" => $answer,
        "explanation" => $explanation,
        "hint" => $hint,
        "difficulty" => $difficulty,
        "options" => $options,
        "tags" => $tags
    );
}

function stats_mc($id, $prompt, $options, $answer, $explanation, $hint, $difficulty = "proficient", $tags = array())
{
    return stats_q($id, "multiple-choice", $prompt, $answer, $explanation, $hint, $difficulty, $options, $tags);
}

function stats_classify($id, $prompt, $options, $answer, $explanation, $hint, $difficulty = "proficient", $tags = array())
{
    return stats_q($id, "classification", $prompt, $answer, $explanation, $hint, $difficulty, $options, $tags);
}

function stats_numeric($id, $prompt, $answer, $explanation, $hint, $difficulty = "proficient", $tags = array(), $tolerance = 0.001)
{
    return stats_q($id, "numeric", $prompt, array("value" => $answer, "tolerance" => $tolerance), $explanation, $hint, $difficulty, array(), $tags);
}

function stats_written($id, $type, $prompt, $explanation, $hint, $difficulty = "proficient", $tags = array())
{
    return stats_q($id, $type, $prompt, "self-check", $explanation, $hint, $difficulty, array(), $tags);
}
