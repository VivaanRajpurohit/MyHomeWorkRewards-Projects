<?php
$pcOptions = array("a" => "Permutation", "b" => "Combination", "c" => "Repeated-object permutation", "d" => "Fundamental counting principle");
return array(
    "overview" => "Permutations and combinations answer two different questions: are we arranging roles or selecting a group? This lesson builds the formulas from counting logic, then applies them to repeated objects, restrictions, and multi-step selections.",
    "objectives" => array("Evaluate factorials and explain why \\(0!=1\\).", "Use permutations when order creates a different outcome.", "Use combinations when only membership matters.", "Count arrangements with repeated objects and introduce circular arrangements.", "Solve restricted selection problems with casework and complements."),
    "prerequisites" => array("Use the fundamental counting principle.", "Recognize restrictions and complement counting.", "Simplify products and fractions."),
    "vocabulary" => array(
        array("Factorial", "For positive integer \\(n\\), the product \\(n(n-1)\\cdots2\\cdot1\\)."), array("Permutation", "An arrangement or selection in which order or assigned role matters."),
        array("Combination", "A selection in which order does not matter."), array("Distinguishable arrangement", "An arrangement counted only when its visible sequence differs."),
        array("Repeated object", "An object identical to one or more others in an arrangement."), array("Circular permutation", "An arrangement around a circle in which rotations are considered the same."),
        array("Casework", "Dividing valid outcomes into nonoverlapping cases and adding their counts."), array("Order test", "Asking whether rearranging the same selected items creates a genuinely different result.")
    ),
    "sections" => array(
        array("title" => "Factorials Compress Decreasing Products", "content" => array(
            "<p>Arranging \\(n\\) distinct objects in all positions gives \\(n\\) choices for the first, \\(n-1\\) for the second, and so on. This product is written \\(n!=n(n-1)(n-2)\\cdots2\\cdot1\\). Thus \\(5!=5\\times4\\times3\\times2\\times1=120\\). The exclamation mark is notation, not punctuation and not multiplication by \\(n\\).</p>",
            "<p>We define \\(0!=1\\). One reason comes from the identity \\(n!=n(n-1)!\\). Setting \\(n=1\\) gives \\(1!=1\\cdot0!\\), so \\(0!\\) must equal 1. It also represents one way to choose or arrange nothing: the empty selection.</p>",
            "<p>Factorials grow quickly. Rather than expanding both numerator and denominator fully, cancel first. For example, \\(10!/7!=10\\times9\\times8=720\\). Writing only uncancelled factors reduces arithmetic errors.</p>",
            array("type" => "formula", "label" => "Factorial", "html" => "<p>\\[n!=n(n-1)(n-2)\\cdots2\\cdot1,\\qquad 0!=1\\]</p>")
        )),
        array("title" => "Permutations: Order or Roles Matter", "content" => array(
            "<p>A <strong>permutation</strong> counts ordered selections. Choosing Ana as president and Ben as vice-president differs from Ben as president and Ana as vice-president. From \\(n\\) distinct objects, selecting and arranging \\(r\\) gives \\(n\\) choices, then \\(n-1\\), continuing for \\(r\\) factors.</p>",
            array("type" => "formula", "label" => "Permutation formula", "html" => "<p>\\[P(n,r)={}_nP_r=\\frac{n!}{(n-r)!}\\]</p><p>Here \\(n\\) is the number available and \\(r\\) is the number selected into ordered positions.</p>"),
            "<p>From 10 students, president, vice-president, and secretary can be assigned in \\(P(10,3)=10\\times9\\times8=720\\) ways. We do not divide because each rearrangement changes who holds each office. Permutations need not use every object.</p>",
            "<p>Keywords are not enough. \"Select three winners\" may mean a combination if prizes are identical, but it is a permutation if first, second, and third prizes differ. Apply the order test: would swapping two selected people produce a new official outcome?</p>"
        )),
        array("title" => "Combinations: Membership Matters", "content" => array(
            "<p>A <strong>combination</strong> counts groups without order. The committee {Ana, Ben, Carlos} is the same group in any listing order. The permutation count overcounts each \\(r\\)-person group \\(r!\\) times, once for every internal arrangement, so divide by \\(r!\\).</p>",
            array("type" => "formula", "label" => "Combination formula", "html" => "<p>\\[C(n,r)={}_nC_r=\\binom{n}{r}=\\frac{n!}{r!(n-r)!}\\]</p>"),
            "<p>Selecting a three-student committee from 10 gives \\(\\binom{10}{3}=120\\), while assigning three offices gives 720. Both start from the same available people, but the outcome definitions differ. Combination symmetry, \\(\\binom{n}{r}=\\binom{n}{n-r}\\), reflects that choosing the included items also chooses which items are excluded.</p>",
            array("type" => "warning", "label" => "Words can mislead", "html" => "<p>The word choose does not force a combination. Choosing a password order, race ranking, or assigned roles still uses permutations.</p>")
        )),
        array("title" => "Repeated Objects and Circular Arrangements", "content" => array(
            "<p>If some objects are identical, \\(n!\\) treats swaps of identical copies as new even though the visible arrangement does not change. For \\(n\\) total objects with repeat counts \\(n_1,n_2,\\ldots,n_k\\), divide by the factorial of each repeat count.</p>",
            array("type" => "formula", "label" => "Repeated arrangements", "html" => "<p>\\[\\frac{n!}{n_1!n_2!\\cdots n_k!}\\]</p>"),
            "<p>LEVEL has 5 letters, with L repeated twice and E repeated twice. Its distinguishable arrangements are \\(5!/(2!2!)=30\\). The V repeat count of one needs no visible denominator because \\(1!=1\\).</p>",
            "<p>For \\(n\\) distinct objects around a circle, rotations represent the same neighbour arrangement. Fix one object as an anchor and arrange the remaining \\(n-1\\), giving \\((n-1)!\\). This rule treats reflections as different; necklace problems may identify reflections too and require additional reasoning.</p>"
        )),
        array("title" => "Restrictions: Build Cases Carefully", "content" => array(
            "<p>Restricted committees often combine combinations with multiplication. To choose a six-person team containing exactly two coaches from five and four students from 18, choose each role group independently: \\(\\binom52\\binom{18}4\\). Order inside the team does not matter, but the two source categories create separate selection stages.</p>",
            "<p>For \"at least one\" special member, a complement is often shorter: all possible groups minus groups containing none. For a four-person committee from 7 seniors and 5 juniors with at least one junior, calculate \\(\\binom{12}4-\\binom74\\). Casework is useful when the restriction is exactly zero, one, two, and so forth; make cases nonoverlapping before adding.</p>",
            "<p>For arrangements where two people must sit together, temporarily treat them as one block, arrange the block and remaining objects, then multiply by the internal arrangements of the block. If two people cannot sit together, count all arrangements and subtract those where they are together. Always state whether the setting is linear or circular.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Student offices", "scenario" => "Choose president, vice-president, and treasurer from 10 students.", "steps" => array("The offices are distinct, so order/role matters.", "Use \\(P(10,3)=10!/(10-3)!\\).", "Cancel to \\(10\\times9\\times8=720\\)."), "conclusion" => "There are 720 officer assignments."),
        array("title" => "Debate team", "scenario" => "Choose 2 coaches from 5 and 6 students from 18.", "steps" => array("Order within each selected group does not matter.", "Coach choices: \\(\\binom52=10\\).", "Student choices: \\(\\binom{18}6=18564\\).", "Multiply independent selections: \\(10\\times18564=185640\\)."), "conclusion" => "There are 185,640 possible teams."),
        array("title" => "Arranging MISSISSIPPI", "scenario" => "Count distinguishable arrangements of MISSISSIPPI.", "steps" => array("There are 11 letters.", "Repeat counts are I:4, S:4, P:2, M:1.", "Use \\(11!/(4!4!2!)\\).", "The value is 34,650."), "conclusion" => "Dividing removes rearrangements of identical letters."),
    ),
    "misconceptions" => array(
        array("Choosing people always means combinations.", "Assigned offices, positions, or order create permutations."), array("Permutations use all available objects.", "\\(P(n,r)\\) selects only \\(r\\) ordered objects from \\(n\\)."),
        array("Dividing by \\(r!\\) is optional.", "It removes the \\(r!\\) internal orderings of each unordered group."), array("Repeated letters can be treated as distinct.", "Swapping identical copies does not create a visible new arrangement."),
        array("All circular pictures are different.", "Rotations are the same in ordinary circular permutations, so fix one anchor."), array("The word select guarantees a combination.", "Outcome meaning, not vocabulary, determines the method.")
    ),
    "why" => array("These methods count teams, schedules, rankings, passwords, playlists, survey selections, and coefficients in algebra and probability. They prevent both brute-force listing and hidden overcounting.", "The order test is especially powerful because it converts a formula-choice problem into a meaning question: what counts as a genuinely different outcome?"),
    "knowledge_check" => array(
        stats_numeric("kc1", "Evaluate 6!.", 720, "<p>\\(6!=6\\times5\\times4\\times3\\times2\\times1=720\\).</p>", "Multiply down to 1.", "foundational", array("factorial")),
        stats_classify("kc2", "Choose 4 committee members from 12.", $pcOptions, "b", "<p>Membership matters, not listing order, so use a combination.</p>", "Swap two names: same committee?", "foundational", array("combination")),
        stats_classify("kc3", "Award gold, silver, and bronze among 12 finalists.", $pcOptions, "a", "<p>The three ranks are distinct, so order matters.</p>", "Swapping ranks changes the result.", "foundational", array("permutation"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "Evaluate 8!/6!.", 56, "<p>Cancel: \\(8!/6!=8\\times7=56\\).</p>", "Do not expand 6!.", "foundational", array("factorial")),
        stats_numeric("g2", "Calculate P(8,3).", 336, "<p>\\(8\\times7\\times6=336\\).</p>", "Three decreasing factors.", "foundational", array("permutation")),
        stats_numeric("g3", "Calculate C(8,3).", 56, "<p>\\(8\\times7\\times6)/(3\\times2\\times1)=56\\).</p>", "Divide the ordered count by 3!.", "foundational", array("combination")),
        stats_classify("g4", "Select and order 5 songs from 20.", $pcOptions, "a", "<p>Playlist order changes the listening sequence, so it is a permutation.</p>", "Order is explicitly included.", "foundational", array("permutation")),
        stats_classify("g5", "Choose 5 questions from a bank of 20 when order on the test is irrelevant.", $pcOptions, "b", "<p>Only the chosen set matters, so it is a combination.</p>", "Same questions, different listing.", "foundational", array("combination")),
        stats_numeric("g6", "How many arrangements of BANANA?", 60, "<p>There are 6 letters with A repeated 3 and N repeated 2: \\(6!/(3!2!)=60\\).</p>", "Divide by repeat factorials.", "proficient", array("repeated objects"))
    ),
    "independent_practice" => array(
        stats_numeric("i1", "Evaluate 0!.", 1, "<p>By definition, \\(0!=1\\).</p>", "Empty arrangement.", "foundational", array("factorial")),
        stats_numeric("i2", "How many ways can 7 distinct books be arranged?", 5040, "<p>\\(7!=5040\\).</p>", "All seven positions.", "foundational", array("permutation")),
        stats_numeric("i3", "Choose 3 students from 11 for an unranked team.", 165, "<p>\\(\\binom{11}3=165\\).</p>", "Membership only.", "foundational", array("combination")),
        stats_numeric("i4", "Assign 4 different roles from 11 students.", 7920, "<p>\\(P(11,4)=11\\times10\\times9\\times8=7920\\).</p>", "Roles distinguish order.", "foundational", array("permutation")),
        stats_numeric("i5", "Count arrangements of LEVEL.", 30, "<p>\\(5!/(2!2!)=30\\).</p>", "L and E repeat.", "proficient", array("repeated objects")),
        stats_numeric("i6", "Seat 6 people around a circular table.", 120, "<p>\\((6-1)!=5!=120\\).</p>", "Fix one person as anchor.", "proficient", array("circular")),
        stats_numeric("i7", "Choose a 5-person group from 8 seniors and 4 juniors with no juniors.", 56, "<p>Choose all five from the 8 seniors: \\(\\binom85=56\\).</p>", "No juniors fixes the source group.", "proficient", array("restriction")),
        stats_numeric("i8", "Choose a 4-person committee from 7 seniors and 5 juniors with at least one junior.", 460, "<p>All committees minus all-senior: \\(\\binom{12}4-\\binom74=495-35=460\\).</p>", "Use the no-junior complement.", "advanced", array("restriction", "complement")),
        stats_written("i9", "error-analysis", "A student uses C(10,3) for president, vice-president, and secretary. Explain.", "<p><strong>Model answer:</strong> The same three people produce different outcomes when roles are swapped. Use \\(P(10,3)=720\\), not \\(C(10,3)=120\\).</p>", "Apply the order test.", "proficient", array("method choice")),
        stats_written("i10", "short-response", "Explain why C(n,r)=C(n,n-r).", "<p><strong>Model answer:</strong> Choosing the \\(r\\) included objects automatically determines the \\(n-r\\) excluded objects, so both descriptions count the same partitions.</p>", "Selected and left out are two views of one decision.", "advanced", array("combination"))
    ),
    "summary" => array("Factorials represent decreasing products and \\(0!=1\\).", "Permutations count ordered selections; combinations count unordered groups.", "The combination formula divides permutations by internal orderings.", "Repeated-object arrangements divide by factorials of repeat counts.", "Restrictions often require multiplication across categories, casework, or complements."),
    "exit_ticket" => array(
        stats_numeric("e1", "How many 3-person committees can be chosen from 9 students?", 84, "<p>\\(\\binom93=84\\).</p>", "Order does not matter.", "proficient", array("combination")),
        stats_written("e2", "short-response", "State the order test in your own words.", "<p><strong>Model answer:</strong> Ask whether rearranging the same selected objects creates a genuinely different official outcome. If yes, use a permutation; if no, use a combination.</p>", "Same members, different order.", "proficient", array("method choice"))
    )
);
