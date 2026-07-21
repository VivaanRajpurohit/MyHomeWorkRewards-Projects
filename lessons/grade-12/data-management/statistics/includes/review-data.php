<?php
require_once __DIR__ . "/course-data.php";

function stats_review_clone_questions($unitId, $perLesson)
{
    $catalog = stats_course_catalog();
    $questions = array();
    foreach ($catalog[$unitId]["lessons"] as $meta) {
        $lesson = stats_course_lesson($meta["id"]);
        $pool = array_merge($lesson["knowledge_check"], $lesson["guided_practice"], $lesson["independent_practice"]);
        $selected = array_slice($pool, 0, $perLesson);
        foreach ($selected as $question) {
            $question["id"] = str_replace(".", "-", $meta["id"]) . "-" . $question["id"];
            $question["tags"] = array("Lesson " . $meta["id"], $meta["title"]);
            $questions[] = $question;
        }
    }
    return $questions;
}

function stats_review_questions($unitId)
{
    if ($unitId === "unit1") {
        $special = array(
            stats_q("u1-ms1", "multiple-select", "Select every quantitative variable.", array("a", "c"), "<p>Hours studied is continuous quantitative and assignments completed is discrete quantitative. Device type and grade category are categorical.</p>", "Arithmetic must have meaningful interpretation.", "foundational", array("a" => "Hours studied", "b" => "Device type", "c" => "Assignments completed", "d" => "Grade category"), array("variables")),
            stats_q("u1-ms2", "multiple-select", "Which features directly support a strong causal conclusion?", array("a", "c", "d"), "<p>Random assignment, control, and replication create a fair treatment comparison. Random sampling supports generalization rather than causation.</p>", "Separate causal design from population scope.", "proficient", array("a" => "Random assignment", "b" => "Random sampling", "c" => "Control of other conditions", "d" => "Replication"), array("experimental design")),
            stats_q("u1-ms3", "multiple-select", "Which are possible response-bias causes?", array("a", "b", "d"), "<p>Social pressure, inaccurate memory, and interviewer influence can alter answers. A random start concerns systematic sampling, not response accuracy.</p>", "Focus on why a supplied answer may be inaccurate.", "proficient", array("a" => "Social desirability", "b" => "Inaccurate memory", "c" => "Random starting point", "d" => "Interviewer influence"), array("bias")),
            stats_q("u1-ms4", "multiple-select", "Which statements about confidentiality and anonymity are correct?", array("a", "c"), "<p>Confidential data may retain a protected identity link. Anonymous data are not reasonably linked to identity. Collecting email addresses prevents a truthful anonymity claim.</p>", "Ask whether an identity link exists.", "proficient", array("a" => "Confidential data may retain protected identifiers", "b" => "Anonymous and confidential mean the same", "c" => "Anonymous responses are not reasonably linked to identity", "d" => "Email collection guarantees anonymity"), array("ethics")),
            stats_q("u1-ms5", "multiple-select", "Which are elements of a well-designed experiment?", array("a", "b", "c"), "<p>A common response measure, random assignment, and enough independent units support comparison. Letting participants choose treatment invites confounding.</p>", "Choose protections for a fair comparison.", "proficient", array("a" => "A common response measure", "b" => "Random assignment", "c" => "Independent replication", "d" => "Self-selected treatments"), array("experimental design")),
            stats_written("u1-fr1", "short-response", "Design a complete experiment testing whether a reminder app improves homework completion. Include population, participants, units, treatments, assignment, control, replication, response, bias, ethics, and conclusion.", "<p><strong>Model answer:</strong> Define the population as students eligible to use the app and randomly sample when generalization is intended. Obtain required consent/assent. Students are experimental units. Randomly assign enough students, optionally within prior-completion blocks, to reminder app or standard/no-reminder control. Keep study period, instructions, and task opportunities common. Measure the pre-defined proportion of assigned tasks submitted by deadline. Protect data, report attrition and noncompliance, and use causal language for similar participants while limiting population generalization to the sampling frame.</p>", "Use every item named in the prompt as a checklist.", "advanced", array("free response")),
            stats_written("u1-fr2", "short-response", "Evaluate a voluntary social-media poll that claims its result represents every student.", "<p><strong>Model answer:</strong> The opt-in design creates voluntary-response bias, the platform undercovers students who do not use it, strong opinions may be overrepresented, and the result cannot be generalized to every student. Select randomly from the full roster, offer several response modes, follow up with selected nonresponders, and report response rates.</p>", "Trace coverage, selection, participation, and conclusion.", "advanced", array("free response")),
            stats_written("u1-fr3", "short-response", "A randomized experiment uses only volunteers. Explain what causal and population conclusions are justified.", "<p><strong>Model answer:</strong> Random assignment supports a causal comparison among the volunteers under the study conditions. Because volunteers were not randomly selected and may differ from all students, broad population generalization is limited to people similar to those who volunteered.</p>", "Assignment affects cause; selection affects scope.", "advanced", array("free response"))
        );
        return array_merge($special, stats_review_clone_questions("unit1", 4));
    }

    if ($unitId === "unit2") {
        $special = array(
            stats_written("u2-fr1", "short-response", "Use SCOPE to solve: a five-person committee is chosen from 8 seniors and 6 juniors. Find the probability of exactly two juniors.", "<p><strong>Model answer:</strong> Define X as junior count and clarify X=2. Organize with combinations. Favourable groups: \\(\\binom62\\binom83=15(56)=840\\). Total groups: \\(\\binom{14}5=2002\\). Probability \\(840/2002\\approx0.4196\\). About 41.96% of uniformly selected committees have exactly two juniors.</p>", "Count favourable and total groups with the same unordered rule.", "advanced", array("free response")),
            stats_written("u2-fr2", "short-response", "Build and explain a tree when P(R)=0.55, P(C|R)=0.80, and P(C|R^c)=0.35. Find P(C) and P(R|C).", "<p><strong>Model answer:</strong> R-C path is \\(0.55(0.80)=0.44\\); no-R-C path is \\(0.45(0.35)=0.1575\\). Thus \\(P(C)=0.5975\\). Reverse conditional \\(P(R|C)=0.44/0.5975\\approx0.7364\\). About 73.64% of completers use reminders.</p>", "Multiply paths, add completion endpoints, then condition.", "advanced", array("free response")),
            stats_written("u2-fr3", "short-response", "Explain with mathematics why positive mutually exclusive events cannot be independent.", "<p><strong>Model answer:</strong> Mutual exclusivity requires \\(P(A\\cap B)=0\\). Independence requires \\(P(A\\cap B)=P(A)P(B)\\), which is positive when both event probabilities are positive. The requirements conflict.</p>", "Compare the joint probability under both definitions.", "advanced", array("free response")),
            stats_written("u2-fr4", "short-response", "A student adds probabilities down a tree and multiplies separate endpoints. Diagnose and correct the method.", "<p><strong>Model answer:</strong> A complete path is an intersection, so multiply conditional branch probabilities along it. Different endpoints representing the same requested event are mutually exclusive alternatives, so add their path products.</p>", "Along one route versus across routes.", "proficient", array("free response"))
        );
        return array_merge($special, stats_review_clone_questions("unit2", 4));
    }

    $special = array(
        stats_written("u3-fr1", "short-response", "Distinguish population distribution, one sample distribution, and a sampling distribution using homework time.", "<p><strong>Model answer:</strong> All students' homework times form the population distribution. The times of 40 selected students form one sample distribution. The means from many random samples of 40 form the sampling distribution of \\(\\bar X\\).</p>", "State what one value represents in each graph.", "advanced", array("free response")),
        stats_written("u3-fr2", "short-response", "Explain how increasing sample size affects centre, shape, standard error, and probability of an extreme statistic.", "<p><strong>Model answer:</strong> For an unbiased mean or proportion, centre remains at the population parameter. Shape generally becomes more nearly normal when conditions support the relevant theorem. Standard error decreases at the square-root rate, so a fixed cutoff away from the parameter becomes more standard errors away and its tail probability decreases.</p>", "Address all four requested features.", "advanced", array("free response")),
        stats_written("u3-fr3", "short-response", "For mu=50, sigma=12, n=36, find and interpret P(x-bar>54) using P(Z>2)=0.0228.", "<p><strong>Model answer:</strong> SE=12/6=2 and \\(z=(54-50)/2=2\\). Thus the probability is 0.0228. About 2.28% of random samples of 36 would have a mean above 54 under the model and conditions.</p>", "Describe, standardize, area, interpret.", "advanced", array("free response")),
        stats_written("u3-fr4", "short-response", "For p=0.40 and n=200, check large counts and find SE to four decimals.", "<p><strong>Model answer:</strong> \\(np=80\\) and \\(n(1-p)=120\\), so large counts hold. \\(SE=\\sqrt{0.4(0.6)/200}\\approx0.0346\\). Random and 10% conditions must also be checked from the sampling context.</p>", "Check both counts before calculating.", "proficient", array("free response")),
        stats_written("u3-fr5", "error-analysis", "A report says standard error is the standard deviation of individual scores divided by n. Correct it.", "<p><strong>Model answer:</strong> Standard error is the spread of a statistic across repeated samples. For a sample mean with independent observations, it is \\(\\sigma/\\sqrt n\\), not \\(\\sigma/n\\). Standard deviation \\(\\sigma\\) describes individual scores.</p>", "Square root and reference distribution.", "proficient", array("error analysis"))
    );
    return array_merge($special, stats_review_clone_questions("unit3", 5));
}
