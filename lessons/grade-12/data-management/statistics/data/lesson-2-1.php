<?php
$principleOptions = array("a" => "Addition principle", "b" => "Fundamental counting principle", "c" => "Complement counting", "d" => "Direct organized list");
return array(
    "overview" => "Counting is the grammar behind probability. Instead of guessing or writing chaotic lists, we will represent outcomes with sample spaces, tables, trees, stages, and complements, then choose addition or multiplication based on the structure of the decision.",
    "objectives" => array("Define outcomes, events, and sample spaces.", "Construct complete organized lists, tables, and tree diagrams.", "Use the fundamental counting principle for sequential choices.", "Use the addition principle for nonoverlapping alternatives.", "Count outcomes under restrictions and use complements for at-least-one conditions."),
    "prerequisites" => array("Multiply and add whole numbers.", "Read set braces and simple exponents.", "Translate words such as and, or, at least, and exactly."),
    "vocabulary" => array(
        array("Outcome", "One possible result of a process."), array("Sample space", "The set of every possible outcome, often labelled \\(S\\)."),
        array("Event", "A set containing one or more outcomes from the sample space."), array("Stage", "One step in a multi-step process."),
        array("Fundamental counting principle", "Multiply the number of choices at successive stages."), array("Addition principle", "Add counts for separate, nonoverlapping alternatives."),
        array("Restriction", "A rule that makes some otherwise possible outcomes invalid."), array("Complement", "Every outcome outside an event."),
        array("Repetition", "Using the same option more than once when the rules allow it."), array("Endpoint", "The end of a complete path in a tree diagram.")
    ),
    "sections" => array(
        array("title" => "Outcomes, Events, and Sample Spaces", "content" => array(
            "<p>An <strong>outcome</strong> is one complete possible result. When rolling a six-sided die, 4 is an outcome. The <strong>sample space</strong> lists all outcomes: \\(S=\\{1,2,3,4,5,6\\}\\). An <strong>event</strong> is any collection from that space. The event \"roll an even number\" is \\(A=\\{2,4,6\\}\\). Probability questions count outcomes in an event and compare them with the sample space.</p>",
            "<p>For multi-stage processes, an outcome must describe every stage. If a student chooses a red or blue shirt and black, grey, or tan pants, \"red\" is incomplete. \"Red shirt and grey pants\" is one full outcome. A complete organized list fixes the first choice and cycles systematically through every second choice before moving on.</p>",
            "<p>Organization prevents both omissions and duplicates. Tables work well for two choices: rows can represent shirts and columns pants. Tree diagrams work well for sequences: each level is a stage, each branch a choice, and each endpoint a complete outcome. The representation may change, but the count should agree.</p>",
            array("type" => "example", "label" => "Two-by-three wardrobe", "html" => "<p>The outcomes are RB, RG, RT, BB, BG, and BT, where the first letter identifies shirt colour and the second pants colour. There are six endpoints, matching \\(2\\times3=6\\).</p>")
        )),
        array("title" => "Multiply Through Sequential Stages", "content" => array(
            "<p>The <strong>fundamental counting principle</strong> says that if one stage has \\(m\\) choices and a following stage has \\(n\\) choices for every first choice, then the complete process has \\(m\\times n\\) outcomes. With several stages, multiply all stage counts: \\(n_1n_2n_3\\cdots n_k\\).</p>",
            "<p>A username with one of 26 letters, one of 10 digits, and one of 4 symbols has \\(26\\times10\\times4=1040\\) possibilities when repetition and all positions are allowed. Multiplication works because every first-stage option branches to every allowed second-stage option and so on.</p>",
            "<p>The stage counts need not be identical. A four-digit PIN with no repeated digits has 10 choices for the first digit, then 9, 8, and 7. Its count is \\(10\\times9\\times8\\times7=5040\\). The multiplication remains valid because the number of available choices at each later stage is known from the restriction.</p>",
            array("type" => "formula", "label" => "Sequential choices", "html" => "<p>\\[\\text{total outcomes}=n_1\\times n_2\\times\\cdots\\times n_k\\]</p>")
        )),
        array("title" => "Add Across Alternatives", "content" => array(
            "<p>The <strong>addition principle</strong> applies when a final choice comes from separate alternatives. If a student can choose one of five math electives <em>or</em> one of three nonoverlapping computer-science electives, there are \\(5+3=8\\) choices. Addition combines separate cases; multiplication combines stages within a case.</p>",
            "<p>The cases must not overlap unless overlap is corrected. If a course appears in both lists, simply adding counts includes it twice. Later probability lessons formalize this through the general addition rule. For counting, define cases so that each valid outcome belongs to exactly one case.</p>",
            "<p>Many problems require both principles. A password may begin with either a letter followed by three digits or a digit followed by three letters. Count each format by multiplication, then add the two format counts because no password can have both first-character formats.</p>",
            array("type" => "warning", "label" => "Decision question", "html" => "<p>Are choices happening one after another to build one outcome? Multiply. Are you choosing between complete nonoverlapping cases? Add.</p>")
        )),
        array("title" => "Restrictions Change Stage Counts", "content" => array(
            "<p>Before multiplying, underline every restriction: repetition allowed or forbidden, first digit nonzero, certain items together or apart, exactly one from a category, or at least one special option. Then count stage by stage in an order that makes the restriction easy to track.</p>",
            "<p>For a four-digit number, the first digit has only 9 choices because zero would create a three-digit number. If repetition is allowed, each remaining digit has 10 choices, for \\(9\\times10^3=9000\\). If repetition is forbidden, the choices are \\(9\\times9\\times8\\times7=4536\\): after a nonzero first digit, zero remains available among the nine unused digits.</p>",
            "<p>When a restriction creates cases with different stage counts, split the problem. Count each nonoverlapping case carefully and add. A tree or short table can reveal whether a stage count stays constant; do not multiply one convenient number across branches where the choices actually differ.</p>"
        )),
        array("title" => "Count 'At Least One' With a Complement", "content" => array(
            "<p>Directly counting \"at least one\" often creates overlapping cases: exactly one, exactly two, exactly three, and so on. The complement is usually simpler. Every outcome either has at least one desired feature or has none, so:</p>",
            array("type" => "formula", "label" => "Complement counting", "html" => "<p>\\[\\text{wanted}=\\text{all outcomes}-\\text{outcomes with none}\\]</p>"),
            "<p>For four-digit PINs with at least one 7, there are \\(10^4=10000\\) total PINs. A PIN with no 7 has 9 choices in each position, or \\(9^4=6561\\). Therefore \\(10000-6561=3439\\) PINs contain at least one 7.</p>",
            "<p>The complement method works because the two groups are nonoverlapping and exhaustive. It does not require equally likely outcomes; it is a counting identity. Clearly state what \"none\" means and make sure its restrictions match the original process.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Meal combinations", "scenario" => "A cafeteria offers 4 mains, 3 sides, and 2 drinks.", "steps" => array("One meal requires one choice from each of three stages.", "Every main can pair with every side and drink.", "Multiply: \\(4\\times3\\times2=24\\)."), "conclusion" => "There are 24 complete meals."),
        array("title" => "Restricted access code", "scenario" => "A code has two different letters followed by three digits; the first digit cannot be zero, while digit repetition is allowed.", "steps" => array("First letter: 26 choices; second different letter: 25.", "First digit: 9 choices from 1-9.", "Remaining digits: 10 choices each because repetition is allowed.", "Multiply: \\(26\\times25\\times9\\times10\\times10=585000\\)."), "conclusion" => "There are 585,000 valid codes."),
        array("title" => "At least one success symbol", "scenario" => "How many length-5 strings made from A, B, C, D contain at least one A?", "steps" => array("All strings: \\(4^5=1024\\).", "Strings with no A use B, C, or D in each position: \\(3^5=243\\).", "Subtract: \\(1024-243=781\\)."), "conclusion" => "There are 781 strings containing at least one A."),
    ),
    "misconceptions" => array(
        array("Always multiply counts.", "Add separate complete alternatives; multiply sequential stages."), array("'Or' always means add.", "Overlapping alternatives must be separated or corrected before addition."),
        array("Repetition is automatically allowed.", "Read the rule. Later-stage choice counts depend on whether earlier choices remain available."), array("A four-digit number may begin with zero.", "A leading zero does not produce a four-digit number, though it is allowed in a four-character PIN."),
        array("At least one means count one desired item.", "At least one includes one or more; complement counting usually handles all cases without overlap."), array("Any list is complete.", "A list is reliable only when its structure guarantees each valid outcome appears exactly once.")
    ),
    "why" => array("Counting methods support passwords, schedules, product configurations, tournament outcomes, genetics models, and probability denominators. They replace trial-and-error listing with a method that scales.", "The real skill is translating language into structure. Once stages, alternatives, and restrictions are visible, the arithmetic is usually the easy part."),
    "knowledge_check" => array(
        stats_classify("kc1", "Choose one shirt and one pair of pants.", $principleOptions, "b", "<p>Two sequential choices build one outfit, so multiply.</p>", "One outcome needs both choices.", "foundational", array("counting principle")),
        stats_classify("kc2", "Choose either one art elective or one music elective from nonoverlapping lists.", $principleOptions, "a", "<p>The complete choices are alternatives, so add their counts.</p>", "Either complete category.", "foundational", array("addition")),
        stats_numeric("kc3", "Three stages have 5, 4, and 7 choices. How many outcomes?", 140, "<p>\\(5\\times4\\times7=140\\).</p>", "Multiply stage counts.", "foundational", array("FCP"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "List or count outcomes for 2 coin results followed by 6 die results.", 12, "<p>Each of 2 coin outcomes pairs with 6 die outcomes: \\(2\\times6=12\\).</p>", "Two stages.", "foundational", array("sample space")),
        stats_numeric("g2", "How many three-digit PINs are possible when repetition is allowed?", 1000, "<p>A PIN may begin with zero, so \\(10^3=1000\\).</p>", "PIN is not the same as three-digit number.", "foundational", array("FCP")),
        stats_numeric("g3", "How many three-digit numbers exist?", 900, "<p>The first digit has 9 choices and the others 10: \\(9\\times10\\times10=900\\).</p>", "First digit cannot be zero.", "foundational", array("restriction")),
        stats_numeric("g4", "A menu offers 6 sandwiches or 4 salads, with no overlap. How many single lunch choices?", 10, "<p>These are alternatives: \\(6+4=10\\).</p>", "One item from either category.", "foundational", array("addition")),
        stats_numeric("g5", "How many binary strings of length 6 contain at least one 1?", 63, "<p>All: \\(2^6=64\\). No 1: only 000000, so \\(64-1=63\\).</p>", "Subtract the all-zero string.", "proficient", array("complement")),
        stats_written("g6", "error-analysis", "A student adds 4+3+2 for a meal with one main, side, and drink. Explain.", "<p><strong>Model answer:</strong> A meal needs all three sequential choices, so the counts multiply: \\(4\\times3\\times2=24\\). Adding would count isolated items, not complete meals.</p>", "Does one outcome need and or or?", "proficient", array("error analysis"))
    ),
    "independent_practice" => array(
        stats_numeric("i1", "A game avatar has 7 hairstyles, 5 shirts, and 4 backgrounds. Count avatars.", 140, "<p>\\(7\\times5\\times4=140\\).</p>", "One from each stage.", "foundational", array("FCP")),
        stats_numeric("i2", "A plate has two letters followed by two digits, repetition allowed. Count plates.", 67600, "<p>\\(26^2\\times10^2=67600\\).</p>", "Four independent positions.", "foundational", array("FCP")),
        stats_numeric("i3", "Count two-letter codes with no repeated letter.", 650, "<p>\\(26\\times25=650\\).</p>", "Second position loses one choice.", "foundational", array("restriction")),
        stats_numeric("i4", "A student chooses one of 8 clubs or one of 3 teams, and no option belongs to both. Count choices.", 11, "<p>Nonoverlapping alternatives add: \\(8+3=11\\).</p>", "Either group, not stages.", "foundational", array("addition")),
        stats_numeric("i5", "How many 4-digit PINs contain at least one 0?", 3439, "<p>\\(10^4-9^4=10000-6561=3439\\).</p>", "Count no zeros and subtract.", "proficient", array("complement")),
        stats_numeric("i6", "How many length-4 strings from A, B, C have no repeated symbols?", 0, "<p>After using all three symbols, no unused symbol remains for the fourth position. A length-4 no-repeat string is impossible.</p>", "Compare positions with available symbols.", "proficient", array("restriction")),
        stats_written("i7", "short-response", "Create an organized list for two ice-cream flavours and three toppings.", "<p><strong>Model answer:</strong> Fix flavour 1 and list its three toppings, then flavour 2 with the same three: F1T1, F1T2, F1T3, F2T1, F2T2, F2T3. The list has six outcomes.</p>", "Fix one stage while cycling the other.", "proficient", array("organized list")),
        stats_written("i8", "short-response", "Explain when a tree diagram is preferable to a simple product.", "<p><strong>Model answer:</strong> A tree is especially useful when later choices depend on earlier branches or when probabilities differ by path. It makes changing stage counts and endpoints visible.</p>", "Do all branches have the same choices?", "proficient", array("tree"))
    ),
    "summary" => array("Sample spaces contain all outcomes; events contain selected outcomes.", "Lists, tables, and trees make completeness visible.", "Multiply sequential stage choices and add nonoverlapping complete alternatives.", "Apply restrictions before counting each stage.", "For at least one, subtract the no-success complement from all outcomes."),
    "exit_ticket" => array(
        stats_numeric("e1", "How many 5-character binary strings contain at least one 1?", 31, "<p>\\(2^5-1^5=32-1=31\\).</p>", "Subtract the one all-zero string.", "proficient", array("complement")),
        stats_written("e2", "short-response", "State the difference between addition and multiplication principles.", "<p><strong>Model answer:</strong> Multiply choices across stages needed to build one outcome; add counts across nonoverlapping complete alternatives.</p>", "And versus either/or.", "proficient", array("principles"))
    )
);
