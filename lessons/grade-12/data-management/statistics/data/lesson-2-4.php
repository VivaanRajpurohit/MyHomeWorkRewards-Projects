<?php
return array(
    "overview" => "Probability assigns numbers to uncertainty. This lesson moves from sample-space ratios and long-run frequencies to complements, unions, intersections, conditional probability, and the general addition and multiplication rules.",
    "objectives" => array("Interpret probabilities from 0 to 1.", "Calculate theoretical and experimental probabilities.", "Use complement and addition rules without double-counting.", "Use conditional probability and the general multiplication rule.", "Translate union, intersection, complement, and given notation in context."),
    "prerequisites" => array("Build sample spaces and count outcomes.", "Work with fractions, decimals, and percentages.", "Recognize sets and overlapping categories."),
    "vocabulary" => array(
        array("Probability", "A number from 0 to 1 describing long-run likelihood."), array("Theoretical probability", "A probability derived from a model of outcomes."),
        array("Experimental probability", "An observed relative frequency from repeated trials."), array("Complement", "The event that A does not occur, written \\(A^c\\)."),
        array("Union", "A or B or both, written \\(A\\cup B\\)."), array("Intersection", "A and B together, written \\(A\\cap B\\)."),
        array("Conditional probability", "The probability of one event within a known condition, such as \\(P(B|A)\\)."), array("Mutually exclusive", "Events with no shared outcomes."),
        array("Relative frequency", "Event count divided by total trials."), array("Odds", "A ratio of favourable to unfavourable outcomes, distinct from probability.")
    ),
    "sections" => array(
        array("title" => "Probability as a Long-Run Model", "content" => array(
            "<p>Every probability satisfies \\(0\\le P(A)\\le1\\). Zero means impossible under the model, one means certain, and values nearer one represent greater likelihood. Probability does not predict the exact result of one trial. A 0.70 chance of completion does not guarantee seven completions in every ten users; it describes a long-run pattern under stable repeated conditions.</p>",
            "<p>When all outcomes are equally likely, theoretical probability is \\(P(A)=\\text{favourable outcomes}/\\text{total outcomes}\\). On a fair die, results greater than 4 are {5,6}, so \\(P(A)=2/6=1/3\\). Counting the sample space is only valid when outcomes have equal probability.</p>",
            "<p>Experimental probability uses observed relative frequency: event occurrences divided by trials. If 162 of 250 users complete a task, the observed completion rate is \\(162/250=0.648\\). As many independent stable trials accumulate, relative frequency tends to settle near the underlying probability, though short runs can fluctuate considerably.</p>",
            array("type" => "formula", "label" => "Equally likely model", "html" => "<p>\\[P(A)=\\frac{|A|}{|S|}\\]</p><p>Here \\(|A|\\) counts outcomes in event A and \\(|S|\\) counts outcomes in the sample space.</p>")
        )),
        array("title" => "Complements", "content" => array(
            "<p>The complement \\(A^c\\) contains every sample-space outcome outside A. Exactly one of A and \\(A^c\\) occurs, so their probabilities sum to one: \\(P(A^c)=1-P(A)\\). A complement often turns \"at least one\" into the simpler event \"none.\"</p>",
            "<p>With four independent attempts whose failure probability is 0.8, the probability of no success is \\(0.8^4\\). Therefore, the probability of at least one success is \\(1-0.8^4=0.5904\\). Directly adding exactly one, two, three, and four successes would work but requires more cases.</p>",
            "<p>Write the complement in words before calculating. The complement of \"at least two\" is \"fewer than two,\" meaning zero or one, not simply \"none.\" Careful language prevents incomplete complements.</p>",
            array("type" => "formula", "label" => "Complement rule", "html" => "<p>\\[P(A^c)=1-P(A)\\]</p>")
        )),
        array("title" => "The Addition Rule", "content" => array(
            "<p>The union \\(A\\cup B\\) means A or B or both. Adding \\(P(A)+P(B)\\) counts the intersection twice, so subtract it once:</p>",
            array("type" => "formula", "label" => "General addition rule", "html" => "<p>\\[P(A\\cup B)=P(A)+P(B)-P(A\\cap B)\\]</p>"),
            "<p>If 55% of students take math, 30% take computer science, and 18% take both, then the probability a random student takes at least one is \\(0.55+0.30-0.18=0.67\\). The word or is inclusive in probability unless the context explicitly says exactly one.</p>",
            "<p>Mutually exclusive events have no overlap, so \\(P(A\\cap B)=0\\) and their probabilities simply add. Rolling 2 and rolling 5 on one die roll are mutually exclusive. Taking math and computer science are not necessarily exclusive.</p>"
        )),
        array("title" => "Conditional Probability Changes the Denominator", "content" => array(
            "<p>The phrase \"given A\" restricts attention to outcomes inside A. Conditional probability \\(P(B|A)\\) asks what fraction of the A outcomes also belong to B. The denominator is therefore \\(P(A)\\), not the whole sample space.</p>",
            array("type" => "formula", "label" => "Conditional probability", "html" => "<p>\\[P(B|A)=\\frac{P(A\\cap B)}{P(A)},\\qquad P(A)>0\\]</p>"),
            "<p>Among 100 reminder users, 72 complete a task, so \\(P(\\text{complete}|\\text{reminder})=72/100=0.72\\). The joint probability among all 200 users might be \\(72/200=0.36\\). These answer different questions because their reference groups differ.</p>",
            "<p>Reverse conditional probabilities are generally unequal. \\(P(A|B)\\) uses B as the restricted group, while \\(P(B|A)\\) uses A. Always read the condition after the vertical bar first: \"among those in A, what fraction are also B?\"</p>"
        )),
        array("title" => "The Multiplication Rule and Total Probability", "content" => array(
            "<p>Rearranging the conditional formula gives the general multiplication rule \\(P(A\\cap B)=P(A)P(B|A)\\). Travel down a sequential path by multiplying the probability of the first event by the conditional probability of the next event. If events are independent, \\(P(B|A)=P(B)\\), producing the familiar product \\(P(A)P(B)\\).</p>",
            "<p>An event can be divided across complete cases. If B and \\(B^c\\) partition the sample space, then \\(P(A)=P(A\\cap B)+P(A\\cap B^c)\\). Tree diagrams visualize this law of total probability: multiply along each path to A, then add the different A paths.</p>",
            "<p>Odds and probability should not be confused. Odds in favour of A are favourable:unfavourable. If probability is 3/5, odds in favour are 3:2, not 3:5. Unless a question specifically asks for odds, report probability as a fraction, decimal, or percentage.</p>",
            array("type" => "formula", "label" => "General multiplication rule", "html" => "<p>\\[P(A\\cap B)=P(A)P(B|A)\\]</p>")
        ), "simulation" => "probability")
    ),
    "worked_examples" => array(
        array("title" => "Inclusive or", "scenario" => "P(Math)=0.55, P(CS)=0.30, and P(both)=0.18. Find P(Math or CS).", "steps" => array("Use the general addition rule because overlap exists.", "Substitute: \\(0.55+0.30-0.18\\).", "Calculate 0.67."), "conclusion" => "There is a 67% probability a randomly selected student takes at least one of the courses."),
        array("title" => "Conditional completion", "scenario" => "Of 100 reminder users, 72 complete; of 200 total users, 117 complete.", "steps" => array("The condition is reminder, so use 100 as denominator.", "The intersection reminder and complete has count 72.", "\\(P(C|R)=72/100=0.72\\)."), "conclusion" => "Among reminder users, 72% completed."),
        array("title" => "At least one", "scenario" => "Four independent attempts each succeed with probability 0.20.", "steps" => array("Complement of at least one success is no successes.", "Failure probability is 0.80; all four fail with \\(0.8^4=0.4096\\).", "Subtract from one: \\(1-0.4096=0.5904\\)."), "conclusion" => "The probability of at least one success is 0.5904."),
    ),
    "misconceptions" => array(
        array("Probability predicts an exact short-run count.", "It describes long-run relative frequency, not a guaranteed small sample."), array("Or excludes the overlap.", "Probability uses inclusive or unless exactly one is specified."),
        array("Always add P(A)+P(B).", "Subtract overlap unless events are mutually exclusive."), array("Given does not change the denominator.", "Conditional probability restricts the reference group."),
        array("P(A|B)=P(B|A).", "The two condition on different groups and generally differ."), array("Multiply any two event probabilities.", "Use a conditional second factor unless independence is justified.")
    ),
    "why" => array("Probability rules combine uncertain events in surveys, product defects, games, medical research, elections, and business decisions. The notation provides a compact language for relationships that words can blur.", "Most mistakes are denominator or overlap mistakes. Drawing the sample space, table, Venn diagram, or tree before calculating makes the correct rule visible."),
    "knowledge_check" => array(
        stats_numeric("kc1", "If P(A)=0.37, find P(A^c).", 0.63, "<p>\\(1-0.37=0.63\\).</p>", "Complement sums to one.", "foundational", array("complement")),
        stats_numeric("kc2", "P(A)=0.4, P(B)=0.5, P(A and B)=0.2. Find P(A or B).", 0.7, "<p>\\(0.4+0.5-0.2=0.7\\).</p>", "Subtract overlap.", "foundational", array("addition")),
        stats_numeric("kc3", "30 of 75 students in group A have outcome B. Find P(B|A).", 0.4, "<p>Condition on the 75 in A: \\(30/75=0.4\\).</p>", "Use the conditioned group as denominator.", "foundational", array("conditional"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "A fair die shows a number greater than 4. Find the probability.", 0.3333, "<p>Favourable {5,6}: \\(2/6=1/3\\approx0.3333\\).</p>", "Count favourable and total.", "foundational", array("theoretical"), 0.001),
        stats_numeric("g2", "A result occurs 84 times in 120 trials. Find experimental probability.", 0.7, "<p>\\(84/120=0.70\\).</p>", "Observed count over trials.", "foundational", array("experimental")),
        stats_numeric("g3", "Mutually exclusive events have probabilities 0.25 and 0.40. Find their union.", 0.65, "<p>No overlap, so \\(0.25+0.40=0.65\\).</p>", "Intersection is zero.", "foundational", array("addition")),
        stats_numeric("g4", "P(A)=0.60 and P(B|A)=0.75. Find P(A and B).", 0.45, "<p>\\(0.60)(0.75)=0.45\\).</p>", "Multiply along the path.", "proficient", array("multiplication")),
        stats_written("g5", "short-response", "Translate P(C|R) into words for completion C and reminder R.", "<p><strong>Model answer:</strong> The probability a user completes, given that the user activated reminders; equivalently, among reminder users, the proportion who complete.</p>", "Read after the bar first.", "foundational", array("notation")),
        stats_written("g6", "error-analysis", "A student computes P(A or B)=P(A)+P(B) when events overlap. Explain.", "<p><strong>Model answer:</strong> The intersection is included once in each probability and is counted twice. Subtract \\(P(A\\cap B)\\) once.</p>", "Track the overlap.", "proficient", array("error analysis"))
    ),
    "independent_practice" => array(
        stats_numeric("i1", "If P(not A)=0.18, find P(A).", 0.82, "<p>\\(1-0.18=0.82\\).</p>", "Complement.", "foundational", array("complement")),
        stats_numeric("i2", "P(A)=0.62, P(B)=0.47, P(A and B)=0.24. Find P(A or B).", 0.85, "<p>\\(0.62+0.47-0.24=0.85\\).</p>", "Inclusive or.", "foundational", array("addition")),
        stats_numeric("i3", "In a table, 45 of 90 gamers prefer strategy. Find the marginal probability.", 0.5, "<p>\\(45/90=0.50\\).</p>", "Category total over grand total.", "foundational", array("marginal")),
        stats_numeric("i4", "Of 40 console gamers, 26 prefer strategy. Find P(strategy|console).", 0.65, "<p>\\(26/40=0.65\\).</p>", "Condition on console gamers.", "proficient", array("conditional")),
        stats_numeric("i5", "P(A)=0.8 and P(B|A)=0.3. Find P(A and B).", 0.24, "<p>\\(0.8)(0.3)=0.24\\).</p>", "General multiplication rule.", "foundational", array("multiplication")),
        stats_numeric("i6", "Five independent trials have failure probability 0.9. Find P(at least one success).", 0.40951, "<p>\\(1-0.9^5=0.40951\\).</p>", "Complement of all failures.", "proficient", array("complement"), 0.00001),
        stats_written("i7", "short-response", "Explain why experimental probability may differ from theoretical probability in 20 trials.", "<p><strong>Model answer:</strong> Random variation can be substantial in a short run. With more stable independent trials, relative frequency usually settles closer to the theoretical model.</p>", "Long run versus short run.", "proficient", array("long-run frequency")),
        stats_written("i8", "short-response", "Distinguish probability 3/5 from odds 3:2.", "<p><strong>Model answer:</strong> Probability compares favourable outcomes with all outcomes, 3/(3+2)=3/5. Odds compare favourable with unfavourable, 3:2.</p>", "Different denominators/comparisons.", "proficient", array("odds"))
    ),
    "summary" => array("Probability lies from 0 to 1 and describes long-run uncertainty.", "Use theoretical ratios only for equally likely outcomes; experimental probability is observed relative frequency.", "Complements subtract from one, and unions subtract overlap.", "Conditional probability changes the reference group.", "The general multiplication rule multiplies a first event by the conditional probability of the next."),
    "exit_ticket" => array(
        stats_numeric("e1", "P(A)=0.7 and P(B|A)=0.4. Find P(A and B).", 0.28, "<p>\\(0.7)(0.4)=0.28\\).</p>", "Multiply along the condition.", "proficient", array("multiplication")),
        stats_written("e2", "short-response", "Why is the intersection subtracted in the addition rule?", "<p><strong>Model answer:</strong> It appears inside both P(A) and P(B), so adding counts it twice. Subtracting once leaves every union outcome counted exactly once.</p>", "Count the overlap.", "proficient", array("addition"))
    )
);
