<?php
$eventOptions = array("a" => "Independent", "b" => "Dependent", "c" => "Mutually exclusive", "d" => "Complementary");
return array(
    "overview" => "Independent, dependent, mutually exclusive, and complementary describe different relationships between events. This lesson builds conceptual and mathematical tests so those labels are not confused.",
    "objectives" => array("Explain independence as no probability change.", "Identify dependence in sequential selections.", "Distinguish mutually exclusive from independent events.", "Recognize complementary events.", "Test independence using products or conditional probabilities."),
    "prerequisites" => array("Use intersections and conditional probability.", "Apply addition and multiplication rules.", "Understand sampling with and without replacement."),
    "vocabulary" => array(
        array("Independent events", "Events for which knowing one occurred does not change the other's probability."), array("Dependent events", "Events for which one occurrence changes the probability of the other."),
        array("Mutually exclusive events", "Events that cannot occur together."), array("Complementary events", "An event and its complement: disjoint and covering the sample space."),
        array("With replacement", "Restoring a selected item before the next draw."), array("Without replacement", "Keeping a selected item out of later draws."),
        array("Product test", "Checking whether \\(P(A\\cap B)=P(A)P(B)\\)."), array("Conditional test", "Checking whether \\(P(B|A)=P(B)\\).")
    ),
    "sections" => array(
        array("title" => "Independence Means No Information", "content" => array(
            "<p>Events A and B are independent when learning that one occurred gives no new information about the probability of the other. A coin result and a separate die result are independent under an ideal model. If \\(P(B)=1/6\\), learning the coin was heads leaves \\(P(B|A)=1/6\\).</p>",
            "<p>Equivalent mathematical tests are \\(P(B|A)=P(B)\\), \\(P(A|B)=P(A)\\), and \\(P(A\\cap B)=P(A)P(B)\\), when the conditional probabilities are defined. One equality is enough to establish independence. In sample data, values may be approximately equal because of random variation; context determines whether the model treats them as exactly independent.</p>",
            array("type" => "formula", "label" => "Independence tests", "html" => "<p>\\[P(A\\cap B)=P(A)P(B)\\qquad\\text{or}\\qquad P(B|A)=P(B)\\]</p>"),
            "<p>Events that sound unrelated are not automatically independent. Weather and website traffic may be connected; device type and app completion may be connected. Independence is a probability relationship to justify with a mechanism or calculation.</p>"
        )),
        array("title" => "Dependence and Sequential Selection", "content" => array(
            "<p>Events are dependent when one changes the probability of another. Drawing two cards without replacement creates dependence because the first draw changes the deck. The probability of a second ace is 3/51 after an ace but 4/51 after a non-ace.</p>",
            "<p>With replacement often restores the original conditions and creates independent draws, assuming reshuffling. Without replacement is usually dependent. Avoid saying always: special event definitions can produce accidental independence, and repeated real-world attempts may change because of learning, fatigue, or changing conditions even when no physical item is removed.</p>",
            "<p>For dependent paths, use changing denominators and conditional probability. The probability of two aces without replacement is \\((4/52)(3/51)\\). Replacing the first card gives \\((4/52)(4/52)\\). The second factor records whether the first event changed the situation.</p>",
            array("type" => "example", "label" => "Read the mechanism", "html" => "<p>Ask whether the first outcome changes the available items, population composition, information, or success chance before the next event.</p>")
        )),
        array("title" => "Mutually Exclusive Is Not Independent", "content" => array(
            "<p>Mutually exclusive events cannot occur together, so \\(P(A\\cap B)=0\\). On one die roll, A=roll 2 and B=roll 5 are mutually exclusive. If A occurs, B becomes impossible. That is a very strong probability change, so positive-probability mutually exclusive events are dependent, not independent.</p>",
            "<p>Suppose A and B have positive probabilities. Independence would require \\(P(A\\cap B)=P(A)P(B)>0\\), but mutual exclusivity requires the intersection to equal zero. Both conditions cannot hold. The only exception is a zero-probability event.</p>",
            "<p>Independent events may occur together. An even die result and a coin head can happen in the same combined trial, and their joint probability is the product. Keep separate questions: \"Can they happen together?\" tests exclusivity. \"Does knowing one change the chance of the other?\" tests independence.</p>",
            array("type" => "warning", "label" => "Major distinction", "html" => "<p>Mutually exclusive means no overlap. Independent means no probability influence. For ordinary positive-probability events, no overlap creates dependence.</p>")
        )),
        array("title" => "Complementary Events", "content" => array(
            "<p>Event A and its complement \\(A^c\\) are complementary. They cannot occur together and together cover the entire sample space. Therefore, \\(P(A)+P(A^c)=1\\). On one die roll, \"even\" and \"not even\" are complementary.</p>",
            "<p>All complementary pairs are mutually exclusive, but not all mutually exclusive pairs are complementary. Rolling 2 and rolling 5 cannot happen together, yet they do not cover outcomes 1,3,4,6. Complementary events must satisfy both requirements: no overlap and full coverage.</p>",
            "<p>Complements are dependent except in degenerate zero-one cases. If A occurs, \\(A^c\\) has probability zero. Their importance comes from the complement rule, not independence.</p>"
        )),
        array("title" => "Testing Events From Data", "content" => array(
            "<p>To use the product test, calculate the observed joint proportion and compare it with the product of observed marginal proportions. If \\(P(A)=0.50\\), \\(P(B)=0.40\\), and \\(P(A\\cap B)=0.20\\), the equality holds and the events are independent in the stated model.</p>",
            "<p>With sample data, exact equality is rare. Conditional proportions that are close across groups suggest approximate independence, but a formal decision may require methods studied later. Always report the calculated values rather than declaring independence from visual similarity alone.</p>",
            "<p>Do not use the independent multiplication rule to test independence in a circle. First obtain \\(P(A\\cap B)\\) independently from a table, count, or model, then compare it with \\(P(A)P(B)\\). Assuming the product at the start assumes the conclusion.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Coin and die", "scenario" => "A is heads and B is rolling an even number.", "steps" => array("\\(P(A)=1/2\\) and \\(P(B)=3/6=1/2\\).", "The combined sample space has 12 equal outcomes; 3 are heads-even, so \\(P(A\\cap B)=3/12=1/4\\).", "\\(P(A)P(B)=1/4\\), matching the joint probability."), "conclusion" => "A and B are independent."),
        array("title" => "Cards without replacement", "scenario" => "A and B are first and second card both aces.", "steps" => array("First ace probability is \\(4/52\\).", "Given an ace first, second ace probability is \\(3/51\\), not \\(4/52\\).", "The first draw changed the second probability."), "conclusion" => "The events are dependent and the joint probability is \\((4/52)(3/51)\\)."),
        array("title" => "Exclusive events", "scenario" => "On one die roll, A is even and B is odd.", "steps" => array("No result is both even and odd, so intersection probability is zero.", "Together the events cover every die outcome, so they are complementary as well as mutually exclusive.", "If A occurs, B becomes impossible, so they are not independent."), "conclusion" => "A and B are complementary and dependent."),
    ),
    "misconceptions" => array(
        array("Different events are independent.", "Different labels do not guarantee no probability influence."), array("Mutually exclusive means independent.", "An occurring event makes the other impossible, creating dependence."),
        array("With replacement always guarantees independence.", "Replacement restores composition, but other mechanisms may still connect trials."), array("Without replacement always needs the same fractions.", "The counts and denominators change after selection."),
        array("Complementary means simply different.", "Complements must be disjoint and cover all outcomes."), array("Use the product rule to create the joint probability and then test it.", "The observed/modelled joint must be obtained independently before comparison.")
    ),
    "why" => array("Independence assumptions appear in repeated-trial probability, survey analysis, reliability, and statistical inference. An unjustified assumption can make an entire calculation wrong.", "Separating independence from exclusivity also improves ordinary reasoning: events can have no overlap, no influence, both only in special cases, or neither."),
    "knowledge_check" => array(
        stats_classify("kc1", "Flip a coin and roll a separate die.", $eventOptions, "a", "<p>The ideal outcomes do not influence one another, so they are independent.</p>", "Separate random devices.", "foundational", array("independent")),
        stats_classify("kc2", "Draw two cards without replacement.", $eventOptions, "b", "<p>The first draw changes the deck, so later probabilities depend on it.</p>", "Composition changes.", "foundational", array("dependent")),
        stats_classify("kc3", "On one roll, event A is 2 and event B is 6.", $eventOptions, "c", "<p>Both cannot occur on one roll, so they are mutually exclusive.</p>", "Can they happen together?", "foundational", array("exclusive"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "P(A)=0.4 and P(B)=0.5 for independent events. Find P(A and B).", 0.2, "<p>\\(0.4\\times0.5=0.20\\).</p>", "Independent product.", "foundational", array("independence")),
        stats_mc("g2", "P(B)=0.30 and P(B|A)=0.30. What does this support?", array("a" => "Independent", "b" => "Mutually exclusive", "c" => "Complementary", "d" => "Impossible"), "a", "<p>The condition A does not change B's probability, which is the conditional test for independence.</p>", "Compare conditional and marginal.", "proficient", array("test")),
        stats_mc("g3", "P(A)=0.5, P(B)=0.4, P(A and B)=0.1. Are A and B independent?", array("a" => "Yes", "b" => "No"), "b", "<p>\\(P(A)P(B)=0.20\\), not 0.10, so they are not independent.</p>", "Compare joint with product.", "proficient", array("test")),
        stats_written("g4", "short-response", "Explain why positive mutually exclusive events are dependent.", "<p><strong>Model answer:</strong> If A occurs, B's conditional probability becomes zero, different from its positive original probability. Therefore A changes B's chance.</p>", "Condition on A.", "proficient", array("exclusive", "independence")),
        stats_written("g5", "short-response", "Distinguish mutually exclusive from complementary.", "<p><strong>Model answer:</strong> Mutually exclusive events have no overlap. Complementary events also have no overlap but additionally cover the entire sample space.</p>", "Complements have a second condition.", "foundational", array("complementary")),
        stats_numeric("g6", "A bag has 5 red and 5 blue. Find P(two red without replacement), rounded to four decimals.", 0.2222, "<p>\\((5/10)(4/9)=20/90\\approx0.2222\\).</p>", "Change numerator and denominator.", "proficient", array("dependent"), 0.0001)
    ),
    "independent_practice" => array(
        stats_numeric("i1", "P(A)=0.2 and P(B)=0.7 independently. Find P(A and B).", 0.14, "<p>\\(0.2)(0.7)=0.14\\).</p>", "Product test model.", "foundational", array("independent")),
        stats_numeric("i2", "Find P(two heads) on two independent fair flips.", 0.25, "<p>\\((1/2)(1/2)=1/4\\).</p>", "Multiply path probabilities.", "foundational", array("independent")),
        stats_numeric("i3", "A bag has 8 items, 3 marked. Find P(two marked without replacement).", 0.1071, "<p>\\((3/8)(2/7)=6/56\\approx0.1071\\).</p>", "Counts change.", "proficient", array("dependent"), 0.0001),
        stats_classify("i4", "A is passing and B is not passing the same test.", $eventOptions, "d", "<p>The events are exact opposites and cover every outcome, so complementary is most specific.</p>", "One is not the other.", "foundational", array("complementary")),
        stats_written("i5", "short-response", "Can two positive-probability events be both independent and mutually exclusive?", "<p><strong>Model answer:</strong> No. Exclusivity gives joint probability zero, while independence requires the positive product \\(P(A)P(B)>0\\).</p>", "Compare joint requirements.", "proficient", array("comparison")),
        stats_written("i6", "error-analysis", "A student says two successive free throws are automatically independent. Evaluate.", "<p><strong>Model answer:</strong> Independence is a model assumption, not guaranteed. Fatigue, confidence, learning, or changing defence may alter the second-shot probability; justify whether a constant independent model is reasonable.</p>", "Repeated does not mean unchanged.", "advanced", array("assumptions")),
        stats_written("i7", "short-response", "Explain how replacement affects card-draw independence.", "<p><strong>Model answer:</strong> Replacing and reshuffling restores the original deck composition, so the second draw has the same probabilities regardless of the first. Without replacement, composition changes and draws are dependent.</p>", "Restore versus change composition.", "proficient", array("replacement")),
        stats_written("i8", "short-response", "Describe how to test approximate independence from a two-way table.", "<p><strong>Model answer:</strong> Compare conditional proportions across groups or compare the observed joint proportion with the product of marginals. Similar values suggest approximate independence, while meaningful differences suggest association.</p>", "Rows should show similar outcome rates.", "advanced", array("table test"))
    ),
    "summary" => array("Independent events do not change one another's probabilities.", "Dependent events require conditional probabilities, often after selection without replacement.", "Mutually exclusive events cannot occur together and are generally dependent.", "Complementary events are disjoint and exhaustive.", "Use conditional or product tests, supported by context, to evaluate independence."),
    "exit_ticket" => array(
        stats_mc("e1", "P(A)=0.6, P(B)=0.5, P(A and B)=0.3. Are A and B independent?", array("a" => "Yes", "b" => "No"), "a", "<p>\\(0.6)(0.5)=0.3\\), matching the joint probability.</p>", "Product test.", "proficient", array("independence")),
        stats_written("e2", "short-response", "State one sentence separating independence and exclusivity.", "<p><strong>Model answer:</strong> Independence means one event does not change the other's probability, while exclusivity means the events cannot happen together.</p>", "Influence versus overlap.", "proficient", array("comparison"))
    )
);
