<?php
return array(
    "overview" => "Tables summarize crossed categories; trees unfold events through time or stages. Together they organize conditional probabilities, total probabilities, and reverse-condition questions such as Bayes' rule.",
    "objectives" => array("Complete frequency and relative-frequency tables.", "Build a probability tree from written conditions.", "Multiply along paths and add across disjoint paths.", "Calculate reverse conditional probabilities.", "Use Bayes' rule and count-based trees to explain results."),
    "prerequisites" => array("Calculate joint, marginal, and conditional probability.", "Use addition and multiplication rules.", "Read two-way tables."),
    "vocabulary" => array(
        array("Frequency table", "A table of category counts."), array("Relative-frequency table", "A table of counts converted to proportions."),
        array("Tree diagram", "A branching display in which each level is a stage."), array("Path probability", "The product of branch probabilities along one complete path."),
        array("Total probability", "A probability found by adding all disjoint paths that lead to an event."), array("Reverse conditional", "A conditional probability with the original condition and outcome exchanged."),
        array("Bayes' rule", "A formula for reversing a conditional using prior, likelihood, and total probability."), array("Prior probability", "The probability of a category before observing new evidence.")
    ),
    "sections" => array(
        array("title" => "Frequency and Relative-Frequency Tables", "content" => array(
            "<p>Frequency tables store counts. Relative-frequency tables divide those counts by a reference total. Overall relative frequencies divide every cell by the grand total and sum to 1. Row relative frequencies divide within each row, so every row sums to 1. Column relative frequencies divide within each column.</p>",
            "<p>The form answers a different question. Overall percentages describe the full population. Row percentages compare outcomes within row groups. Column percentages describe group composition within an outcome. A table should state the denominator or label percentages clearly.</p>",
            "<p>To complete missing entries, use row and column totals systematically and check the grand total both ways. Do not average row percentages to find an overall rate unless row sizes are equal; a weighted total is required.</p>",
            array("type" => "warning", "label" => "Denominator check", "html" => "<p>For \\(P(A|B)\\), locate the A-and-B cell, then divide by the B total. The word after given controls the table denominator.</p>")
        )),
        array("title" => "Build a Tree From Conditions", "content" => array(
            "<p>Each level of a probability tree represents a stage. Branches leaving the same node list all possible next outcomes and must sum to 1. Branch labels after the first level are conditional on the path already travelled.</p>",
            "<p>If 60% use reminders, first branches are R=0.60 and no R=0.40. If 75% of reminder users complete, branches leaving R are complete=0.75 and not complete=0.25. If 40% of non-reminder users complete, branches leaving no R are 0.40 and 0.60.</p>",
            "<p>Order matters for reading but not for the joint event: a tree can branch by reminder first or completion first if the required conditional probabilities are available. Choose the order matching the information given.</p>",
            array("type" => "definition", "label" => "Tree check", "html" => "<p>At every node, outgoing branches must be mutually exclusive and exhaustive, so their probabilities sum to 1.</p>")
        ), "simulation" => "tree"),
        array("title" => "Multiply Along, Add Across", "content" => array(
            "<p>One complete path is an intersection, so multiply its branches. Reminder and complete has probability \\(0.60\\times0.75=0.45\\). No reminder and complete has probability \\(0.40\\times0.40=0.16\\).</p>",
            "<p>Overall completion can occur through either disjoint path, so add: \\(0.45+0.16=0.61\\). This is the law of total probability. The path products at all endpoints should sum to 1, providing a strong error check.</p>",
            "<p>Students often add branch labels before multiplying. Branch labels such as 0.75 and 0.40 refer to different conditioned groups and cannot be added directly. First convert each complete route into a joint probability.</p>",
            array("type" => "formula", "label" => "Total probability across B and its complement", "html" => "<p>\\[P(A)=P(A\\cap B)+P(A\\cap B^c)\\]</p>")
        )),
        array("title" => "Reverse a Conditional", "content" => array(
            "<p>From the tree, 45% of all users both use reminders and complete, while 61% complete overall. Among completers, the fraction who used reminders is \\(P(R|C)=0.45/0.61\\approx0.738\\). This is not the original \\(P(C|R)=0.75\\).</p>",
            array("type" => "formula", "label" => "Bayes' rule", "html" => "<p>\\[P(A|B)=\\frac{P(B|A)P(A)}{P(B)}\\]</p>"),
            "<p>The numerator \\(P(B|A)P(A)\\) is the joint path A-and-B. The denominator \\(P(B)\\) adds every path ending in B. Bayes' rule is therefore conditional probability plus a tree, not an unrelated trick.</p>",
            "<p>Reverse probabilities can differ sharply when base rates differ. A category may have a high outcome rate but represent a small portion of all outcomes because the category itself is rare.</p>"
        )),
        array("title" => "Use Counts When Decimals Feel Abstract", "content" => array(
            "<p>Imagine 1,000 users. With 60% reminder use, 600 use reminders and 400 do not. Of the 600, 75% or 450 complete. Of the 400, 40% or 160 complete. Total completers are 610.</p>",
            "<p>Then \\(P(R|C)=450/610\\), the same as \\(0.45/0.61\\). Counts make the conditioned denominator visible and are especially helpful in Bayes problems with small base rates.</p>",
            "<p>A good solution may use a table, tree, formula, or hypothetical counts. Choose the representation that makes paths and denominators clearest, and end with a contextual sentence.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Overall completion", "scenario" => "P(R)=0.60, P(C|R)=0.75, and P(C|R^c)=0.40.", "steps" => array("Reminder-complete path: \\(0.60(0.75)=0.45\\).", "No-reminder-complete path: \\(0.40(0.40)=0.16\\).", "Add disjoint completion paths: \\(0.45+0.16=0.61\\)."), "conclusion" => "The overall probability of completion is 61%."),
        array("title" => "Reverse completion", "scenario" => "Using the previous tree, find P(R|C).", "steps" => array("Joint reminder and complete is 0.45.", "Overall completion is 0.61.", "Condition on completion: \\(0.45/0.61\\approx0.7377\\)."), "conclusion" => "About 73.8% of completers used reminders."),
        array("title" => "Defect source", "scenario" => "Factory A makes 70% of items with 2% defects; B makes 30% with 5% defects.", "steps" => array("A-defect: \\(0.70(0.02)=0.014\\).", "B-defect: \\(0.30(0.05)=0.015\\).", "Overall defect: \\(0.029\\).", "Given defect, B probability: \\(0.015/0.029\\approx0.5172\\)."), "conclusion" => "Even though B makes fewer items, about 51.7% of defective items come from B because its defect rate is higher."),
    ),
    "misconceptions" => array(
        array("All table percentages use the grand total.", "Row and column relative frequencies use their own totals."), array("Tree branch labels are joint probabilities.", "Later labels are conditional; multiply a full path for a joint probability."),
        array("Add along a path.", "Multiply along one path and add different complete paths."), array("P(A|B)=P(B|A).", "Reverse conditions use different denominators."),
        array("Endpoint products need not sum to one.", "A complete tree partitions the sample space, so they should."), array("Bayes' rule ignores base rates.", "The prior P(A) is essential in the numerator.")
    ),
    "why" => array("Trees and tables power risk models, spam filters, manufacturing checks, customer journeys, and many medical-test explanations. They make conditional structure auditable.", "The count method also protects against base-rate neglect: a high within-group rate does not reveal how common the group is among all observed cases."),
    "knowledge_check" => array(
        stats_numeric("kc1", "P(A)=0.6 and P(B|A)=0.7. Find the A-and-B path.", 0.42, "<p>Multiply along the path: \\(0.6(0.7)=0.42\\).</p>", "Multiply branches.", "foundational", array("tree")),
        stats_numeric("kc2", "Two disjoint paths to C have probabilities 0.42 and 0.18. Find P(C).", 0.6, "<p>Add the separate complete paths: 0.60.</p>", "Add across.", "foundational", array("total probability")),
        stats_numeric("kc3", "P(A and B)=0.24 and P(B)=0.40. Find P(A|B).", 0.6, "<p>\\(0.24/0.40=0.60\\).</p>", "Joint over condition.", "foundational", array("reverse conditional"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "P(A)=0.3 and P(B|A)=0.8. Find P(A and B).", 0.24, "<p>\\(0.3)(0.8)=0.24\\).</p>", "Path product.", "foundational", array("tree")),
        stats_numeric("g2", "P(A^c)=0.7 and P(B|A^c)=0.2. Find P(A^c and B).", 0.14, "<p>\\(0.7)(0.2)=0.14\\).</p>", "Multiply path.", "foundational", array("tree")),
        stats_numeric("g3", "Use the previous two paths to find P(B).", 0.38, "<p>\\(0.24+0.14=0.38\\).</p>", "Add B endpoints.", "proficient", array("total probability")),
        stats_numeric("g4", "Use the same tree to find P(A|B), rounded to four decimals.", 0.6316, "<p>\\(0.24/0.38\\approx0.6316\\).</p>", "A-and-B over all B.", "proficient", array("Bayes"), 0.0001),
        stats_written("g5", "short-response", "Why must branches leaving one node sum to 1?", "<p><strong>Model answer:</strong> They list every mutually exclusive possible next result given the path to that node, so one of them must occur.</p>", "Complete conditional sample space.", "proficient", array("tree")),
        stats_written("g6", "error-analysis", "A student adds 0.60+0.75 to find reminder and complete. Explain.", "<p><strong>Model answer:</strong> The events happen along one path, so use the multiplication rule: \\(0.60(0.75)=0.45\\). Adding produces a value above 1 and combines incompatible units.</p>", "Along versus across.", "proficient", array("error analysis"))
    ),
    "independent_practice" => array(
        stats_numeric("i1", "P(X)=0.4 and P(Y|X)=0.9. Find P(X and Y).", 0.36, "<p>\\(0.4)(0.9)=0.36\\).</p>", "Multiply.", "foundational", array("tree")),
        stats_numeric("i2", "P(X^c)=0.6 and P(Y|X^c)=0.3. Find the second Y path.", 0.18, "<p>\\(0.6)(0.3)=0.18\\).</p>", "Multiply.", "foundational", array("tree")),
        stats_numeric("i3", "Find P(Y) from the two previous paths.", 0.54, "<p>\\(0.36+0.18=0.54\\).</p>", "Add Y endpoints.", "foundational", array("total probability")),
        stats_numeric("i4", "Find P(X|Y) from the same values, rounded to four decimals.", 0.6667, "<p>\\(0.36/0.54=0.6667\\).</p>", "Joint over total Y.", "proficient", array("Bayes"), 0.0001),
        stats_written("i5", "short-response", "Explain overall, row, and column relative frequencies.", "<p><strong>Model answer:</strong> Overall divides by grand total, row divides by each row total, and column divides by each column total. They answer population, within-row, and within-column questions.</p>", "Name each denominator.", "proficient", array("tables")),
        stats_written("i6", "short-response", "Why can counts make Bayes' rule easier to explain?", "<p><strong>Model answer:</strong> Hypothetical counts make the numerator group and conditioned denominator visible, reducing confusion between reverse conditionals while producing the same ratio.</p>", "See the groups.", "proficient", array("counts")),
        stats_written("i7", "error-analysis", "A completed tree's endpoint products total 0.92. Diagnose.", "<p><strong>Model answer:</strong> At least one path is missing or a branch pair does not sum to 1, or a product was calculated incorrectly. A complete partition must total 1.</p>", "Use the endpoint check.", "proficient", array("tree check")),
        stats_written("i8", "short-response", "Compare P(A|B) and P(B|A) using denominators.", "<p><strong>Model answer:</strong> Both use the A-and-B intersection as numerator, but P(A|B) divides by B and P(B|A) divides by A, so they generally differ.</p>", "Same numerator, different whole.", "proficient", array("conditional"))
    ),
    "summary" => array("Relative-frequency form depends on the chosen denominator.", "Tree branches leaving a node sum to one.", "Multiply along paths for joint probability and add disjoint endpoints for totals.", "Reverse conditionals use the observed outcome as the new denominator.", "Bayes' rule is conditional probability built from a joint path and total probability."),
    "exit_ticket" => array(
        stats_numeric("e1", "P(A and B)=0.21 and P(B)=0.35. Find P(A|B).", 0.6, "<p>\\(0.21/0.35=0.60\\).</p>", "Joint over condition.", "proficient", array("conditional")),
        stats_written("e2", "short-response", "State the tree calculation rule in one sentence.", "<p><strong>Model answer:</strong> Multiply branch probabilities along one complete path, then add the products of separate paths that lead to the requested event.</p>", "Along, then across.", "proficient", array("tree"))
    )
);
