<?php
return array(
    "overview" => "This lesson deepens independence from a label into a model: verify it from products, conditionals, and tables, extend it to complements, and use it for repeated-trial and at-least-one calculations.",
    "objectives" => array("Test independence with joint and conditional probabilities.", "Evaluate approximate independence in two-way data.", "Explain independence of complements.", "Model repeated independent trials and at least one success.", "Connect exact-success probability with combinations."),
    "prerequisites" => array("Distinguish independent, dependent, and mutually exclusive events.", "Use conditional probability and complements.", "Calculate combinations and powers."),
    "vocabulary" => array(
        array("Independent trials", "Repeated trials with unchanged success probability and no outcome influence."), array("Bernoulli trial", "One trial with two modelled outcomes, success and failure."),
        array("Constant probability", "The same success probability \\(p\\) on every trial."), array("At least one", "One or more successes, often calculated through no successes."),
        array("Exactly k successes", "A count event requiring \\(k\\) successes and \\(n-k\\) failures."), array("Approximate independence", "Conditional proportions in observed data are close but not necessarily exactly equal."),
        array("Pairwise independence", "Each pair in a collection is independent."), array("Mutual independence", "All required intersections across a collection factor into products.")
    ),
    "sections" => array(
        array("title" => "Prove Independence Rather Than Guess", "content" => array(
            "<p>Conceptually, A and B are independent when A provides no information about B. Mathematically, verify \\(P(A\\cap B)=P(A)P(B)\\) or \\(P(B|A)=P(B)\\). These tests say the same thing because \\(P(B|A)=P(A\\cap B)/P(A)\\).</p>",
            "<p>Suppose \\(P(A)=0.40\\), \\(P(B)=0.25\\), and \\(P(A\\cap B)=0.10\\). Since \\(0.40(0.25)=0.10\\), the events are independent. If the joint probability were 0.06, A and B would be associated.</p>",
            "<p>Obtain the joint value from data or a model independently. If you calculate it as \\(P(A)P(B)\\) first, you have already assumed independence and cannot use that same value as evidence.</p>",
            array("type" => "formula", "label" => "Two tests", "html" => "<p>\\[P(A\\cap B)=P(A)P(B)\\qquad P(B|A)=P(B)\\]</p>")
        )),
        array("title" => "Independence From Tables", "content" => array(
            "<p>In a two-way table, compare the same response proportion across groups. If 60% complete among reminder users and 60% among non-reminder users, reminder status provides no information about completion in that table. If the rates are 72% and 45%, the variables are associated.</p>",
            "<p>Sample data rarely produce exact equality even when a population model is independent. Small differences may reflect sampling variability. At this stage, describe rates as approximately equal or different and avoid claiming proof about a population without an inference method.</p>",
            "<p>You may also compare a cell's joint proportion with the product of marginals. Both methods must use the same dataset and carefully checked totals. Conditional-rate comparisons are often easier to explain in context.</p>",
            array("type" => "example", "label" => "Context sentence", "html" => "<p>Write: \"Completion was 61% in the mobile group and 60% in the desktop group, so device and completion appear approximately independent in this sample.\"</p>")
        )),
        array("title" => "Complements Preserve Independence", "content" => array(
            "<p>If A and B are independent, then A is also independent of \\(B^c\\), \\(A^c\\) is independent of B, and \\(A^c\\) is independent of \\(B^c\\). Intuitively, if knowing A gives no information about B, it also gives no information about not-B.</p>",
            "<p>Algebraically, \\(P(A\\cap B^c)=P(A)-P(A\\cap B)=P(A)-P(A)P(B)=P(A)[1-P(B)]=P(A)P(B^c)\\). The same argument extends to other complement pairs.</p>",
            "<p>This result simplifies repeated-trial calculations. If success events are independent, failure events are independent as well, allowing the probability of all failures to be written as a product.</p>"
        )),
        array("title" => "Repeated Trials and At Least One", "content" => array(
            "<p>A repeated independent-trial model requires a fixed number \\(n\\) of trials, two outcomes per trial, independence, and constant success probability \\(p\\). Coin flips are a standard idealization. Free throws may be approximated this way only when conditions and skill remain stable.</p>",
            "<p>The probability of no success in \\(n\\) trials is \\((1-p)^n\\). Therefore:</p>",
            array("type" => "formula", "label" => "At least one success", "html" => "<p>\\[P(\\text{at least one})=1-(1-p)^n\\]</p>"),
            "<p>For five independent attempts with success probability 0.30, the probability of at least one is \\(1-0.70^5\\approx0.8319\\). Multiplying \\(5(0.30)\\) would give 1.5, which is impossible and ignores overlap among success positions.</p>"
        )),
        array("title" => "Exactly k Successes", "content" => array(
            "<p>One particular sequence with \\(k\\) successes and \\(n-k\\) failures has probability \\(p^k(1-p)^{n-k}\\). However, successes can occupy \\(\\binom nk\\) different position sets. Multiply by that count:</p>",
            array("type" => "formula", "label" => "Binomial probability preview", "html" => "<p>\\[P(X=k)=\\binom nk p^k(1-p)^{n-k}\\]</p>"),
            "<p>For exactly two successes in five trials with \\(p=0.30\\), \\(P(X=2)=\\binom52(0.30)^2(0.70)^3\\approx0.3087\\). The combination counts the ten orders such as SSFFF and SFSFF.</p>",
            "<p>Check the model before using the formula. Drawing without replacement from a small set changes \\(p\\), and performance that improves with practice may not have constant probability. A formula is only as valid as its assumptions.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Product test", "scenario" => "P(A)=0.6, P(B)=0.4, and P(A and B)=0.24.", "steps" => array("Calculate the product: \\(0.6(0.4)=0.24\\).", "Compare with the stated joint probability 0.24.", "The values match."), "conclusion" => "A and B are independent in this model."),
        array("title" => "At least one reward", "scenario" => "Four independent weekly chances each succeed with probability 0.25.", "steps" => array("Failure probability is 0.75.", "All four fail with \\(0.75^4=0.31640625\\).", "Subtract: \\(1-0.31640625=0.68359375\\)."), "conclusion" => "The chance of at least one reward is about 68.36%."),
        array("title" => "Exactly three hits", "scenario" => "Six independent attempts have hit probability 0.40. Find exactly three hits.", "steps" => array("Choose hit positions: \\(\\binom63=20\\).", "One pattern probability: \\(0.4^3(0.6)^3\\).", "Multiply: \\(20(0.4)^3(0.6)^3=0.27648\\)."), "conclusion" => "The probability of exactly three hits is 0.27648."),
    ),
    "misconceptions" => array(
        array("Separate-looking events are independent.", "Use a mechanism or probability test."), array("A small table difference proves dependence.", "Sample variation can create small differences; describe approximate patterns carefully."),
        array("Repeated means independent.", "Trials also need no influence and constant probability."), array("At least one equals np.", "Use the complement; \\(np\\) is an expected count, not this probability."),
        array("One success order is enough for exactly k.", "Multiply by \\(\\binom nk\\) possible success positions."), array("Without replacement can use constant p.", "The probability generally changes after each draw.")
    ),
    "why" => array("Independent-trial models describe reliability, game attempts, quality checks, and conversion experiments. They also form the foundation of binomial distributions and later inference.", "The discipline of checking assumptions before multiplying is more important than memorizing a formula. It prevents a clean calculation from representing the wrong process."),
    "knowledge_check" => array(
        stats_mc("kc1", "P(A)=0.5, P(B)=0.3, P(A and B)=0.15. Independent?", array("a" => "Yes", "b" => "No"), "a", "<p>The product \\(0.5(0.3)=0.15\\) matches the joint.</p>", "Product test.", "foundational", array("test")),
        stats_numeric("kc2", "Three independent trials have p=0.2. Find P(no successes).", 0.512, "<p>\\((1-0.2)^3=0.8^3=0.512\\).</p>", "All failures.", "foundational", array("repeated trials")),
        stats_numeric("kc3", "Use the previous setting to find P(at least one).", 0.488, "<p>\\(1-0.512=0.488\\).</p>", "Complement.", "foundational", array("at least one"))
    ),
    "guided_practice" => array(
        stats_mc("g1", "P(B)=0.4 and P(B|A)=0.4. What relationship is supported?", array("a" => "Independent", "b" => "Mutually exclusive", "c" => "Complementary"), "a", "<p>A does not change B's probability.</p>", "Conditional test.", "foundational", array("independence")),
        stats_numeric("g2", "P(A)=0.7 and P(B)=0.2 independently. Find P(A and B).", 0.14, "<p>\\(0.7)(0.2)=0.14\\).</p>", "Product.", "foundational", array("independence")),
        stats_numeric("g3", "Five independent trials have p=0.1. Find P(at least one), rounded to five decimals.", 0.40951, "<p>\\(1-0.9^5=0.40951\\).</p>", "No-success complement.", "proficient", array("at least one"), 0.00001),
        stats_numeric("g4", "Four trials with p=0.5: find P(exactly two successes).", 0.375, "<p>\\(\\binom42(0.5)^2(0.5)^2=6/16=0.375\\).</p>", "Count success positions.", "proficient", array("exactly k")),
        stats_written("g5", "short-response", "Explain approximate independence in sample data.", "<p><strong>Model answer:</strong> Conditional proportions are close enough that the observed variable gives little information about the other, while small differences may be due to sampling variability. Exact population independence is not proved.</p>", "Close, not identical.", "proficient", array("tables")),
        stats_written("g6", "error-analysis", "A student calculates at least one as 5(0.3). Explain.", "<p><strong>Model answer:</strong> That sum double-counts outcomes with multiple successes and even exceeds 1. Use \\(1-(0.7)^5\\).</p>", "Subtract all failures.", "proficient", array("error analysis"))
    ),
    "independent_practice" => array(
        stats_mc("i1", "P(A)=0.4, P(B)=0.6, P(A and B)=0.30. Independent?", array("a" => "Yes", "b" => "No"), "b", "<p>The product is 0.24, not 0.30.</p>", "Compare values.", "foundational", array("test")),
        stats_numeric("i2", "Six independent trials have p=0.2. Find P(no successes), rounded to six decimals.", 0.262144, "<p>\\(0.8^6=0.262144\\).</p>", "All failures.", "foundational", array("repeated"), 0.000001),
        stats_numeric("i3", "Use the previous setting for P(at least one).", 0.737856, "<p>\\(1-0.262144=0.737856\\).</p>", "Complement.", "proficient", array("at least one"), 0.000001),
        stats_numeric("i4", "Five trials with p=0.4: find exactly one success, rounded to five decimals.", 0.2592, "<p>\\(\\binom51(0.4)(0.6)^4=0.2592\\).</p>", "Choose one success position.", "proficient", array("exactly k"), 0.00001),
        stats_numeric("i5", "Five trials with p=0.4: find exactly three successes, rounded to five decimals.", 0.2304, "<p>\\(\\binom53(0.4)^3(0.6)^2=0.2304\\).</p>", "Combination times one pattern.", "proficient", array("exactly k"), 0.00001),
        stats_written("i6", "short-response", "Why does independence of A and B imply independence of A and B^c?", "<p><strong>Model answer:</strong> If A gives no information about B, it gives no information about not-B. Algebraically, \\(P(A\\cap B^c)=P(A)-P(A\\cap B)=P(A)[1-P(B)]\\).</p>", "Subtract the joint from A.", "advanced", array("complements")),
        stats_written("i7", "short-response", "List four binomial-model conditions.", "<p><strong>Model answer:</strong> Fixed number of trials, two outcomes per trial, independent trials, and constant success probability.</p>", "Number, outcomes, influence, p.", "foundational", array("conditions")),
        stats_written("i8", "error-analysis", "A student uses a binomial model for five cards drawn without replacement from ten. Evaluate.", "<p><strong>Model answer:</strong> Without replacement from a small deck changes the success probability and makes draws dependent, violating binomial conditions.</p>", "Check independence and constant p.", "advanced", array("conditions"))
    ),
    "summary" => array("Independence can be tested through products or unchanged conditional probabilities.", "Observed tables may show approximate rather than exact independence.", "Complements of independent events remain independent.", "At least one success is \\(1-(1-p)^n\\).", "Exactly k successes is \\(\\binom nkp^k(1-p)^{n-k}\\) under valid repeated-trial conditions."),
    "exit_ticket" => array(
        stats_numeric("e1", "Four independent attempts each succeed with p=0.3. Find P(at least one), rounded to four decimals.", 0.7599, "<p>\\(1-0.7^4=0.7599\\).</p>", "Complement.", "proficient", array("at least one"), 0.0001),
        stats_written("e2", "short-response", "Why must p stay constant in a repeated-trial model?", "<p><strong>Model answer:</strong> The powers \\(p^k(1-p)^{n-k}\\) assume every success and failure position uses the same probabilities; changing p would require path-specific factors.</p>", "Formula assumption.", "proficient", array("conditions"))
    )
);
