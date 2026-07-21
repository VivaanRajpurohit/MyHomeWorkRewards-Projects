<?php
return array(
    "overview" => "Probability word problems become manageable when language is translated into events before calculation. The SCOPE framework turns and, or, given, neither, at least, and exactly into diagrams and formulas with clear interpretations.",
    "objectives" => array("Define events and translate probability language into notation.", "Choose among lists, tables, Venn diagrams, trees, counting, complements, and formulas.", "Solve dependent and independent multi-stage problems.", "Combine counting with probability.", "Check reasonableness and explain answers in context."),
    "prerequisites" => array("Use counting, permutations, and combinations.", "Apply addition, multiplication, complement, and conditional rules.", "Read Venn diagrams, tables, and trees."),
    "vocabulary" => array(
        array("SCOPE", "State events, Clarify the question, Organize information, Perform the calculation, Explain the result."), array("And", "Usually intersection \\(A\\cap B\\)."),
        array("Inclusive or", "Union \\(A\\cup B\\), including overlap."), array("Given", "Conditional probability, with the condition after the bar."),
        array("Neither", "The complement of the union, \\((A\\cup B)^c\\)."), array("At least", "A lower-bound phrase including that value and all larger allowed values."),
        array("At most", "An upper-bound phrase including zero through the stated value."), array("Exactly", "Only the stated count, no more and no less.")
    ),
    "sections" => array(
        array("title" => "S: State the Events", "content" => array(
            "<p>Begin by assigning short symbols to meaningful events: \\(R\\)=user activates reminders and \\(C\\)=user completes the assignment. This step prevents long sentences from changing meaning midway through a solution. Define symbols in words; unexplained letters are not communication.</p>",
            "<p>For repeated trials, define a success and count variable, such as \\(X\\)=number of successful shots in five attempts. For counting problems, define what one outcome looks like and whether order, replacement, or repetition matters.</p>",
            "<p>Do not calculate before the event is clear. The same numbers can produce different answers for \\(P(R\\cap C)\\), \\(P(R\\cup C)\\), and \\(P(R|C)\\).</p>",
            array("type" => "definition", "label" => "SCOPE", "html" => "<p><strong>S</strong>tate events, <strong>C</strong>larify the question, <strong>O</strong>rganize information, <strong>P</strong>erform calculation, <strong>E</strong>xplain the result.</p>")
        )),
        array("title" => "C: Clarify the Language", "content" => array(
            "<p>And means intersection. Inclusive or means union. Given means conditional probability, and the phrase after given is the new reference group. Neither means outside both events. One but not both means the two non-overlapping only regions.</p>",
            "<p>At least two means 2,3,4,... up to the maximum. At most two means 0,1,2. Exactly two means only 2. The complement of at least one is none; the complement of at least two is at most one.</p>",
            "<p>When order words appear, inspect the context. First, second, roles, arrangements, and sequences usually make order matter. Committees and unranked groups usually do not. Replacement controls dependence and changing denominators.</p>",
            array("type" => "warning", "label" => "Translate before choosing a formula", "html" => "<p>A keyword suggests a relationship but does not replace reading the entire scenario. For example, or requires an overlap check and and requires a conditional factor unless independence is justified.</p>")
        )),
        array("title" => "O: Organize the Information", "content" => array(
            "<p>Choose the smallest representation that exposes structure. Use an organized list for a small sample space, a table for two categorical variables, a Venn diagram for overlapping sets, a tree for sequential conditions, the counting principle for stages, and combinations or permutations for selections.</p>",
            "<p>A complement is efficient for at least one, none, and neither. Casework handles restrictions such as exactly two seniors or several nonoverlapping routes. Write known probabilities next to the relevant region or branch instead of holding them mentally.</p>",
            "<p>Check whether events are independent, dependent, or mutually exclusive. This determines whether probabilities multiply directly, require a conditional factor, or have zero overlap.</p>"
        )),
        array("title" => "P: Perform and Check", "content" => array(
            "<p>Substitute into a named rule and retain enough intermediate precision. For a tree, multiply along paths before adding. For a table, write numerator and denominator. For counting probability, make sure favourable and total outcomes are counted under the same rules.</p>",
            "<p>Reasonableness checks catch many mistakes: probability must be from 0 to 1; a conditional denominator should be the conditioned group; a union should not exceed 1; an intersection cannot exceed either marginal; a without-replacement denominator should change; and a combination should not count reordered copies.</p>",
            "<p>Round only at the end unless instructed otherwise. State the requested precision and keep exact fractions when they clarify structure.</p>",
            array("type" => "formula", "label" => "Core translation", "html" => "<p>and \\(\\rightarrow\\cap\\); or \\(\\rightarrow\\cup\\); given \\(\\rightarrow |\\); at least one \\(\\rightarrow1-P(\\text{none})\\)</p>")
        )),
        array("title" => "E: Explain in Context", "content" => array(
            "<p>A final decimal without meaning is incomplete. Write: \"There is approximately a 0.184 probability that both selected students are seniors, assuming selection is random without replacement.\" Name the event, population or process, and relevant condition.</p>",
            "<p>Do not convert probability into certainty. A 2% event can happen, and a 98% event can fail. Do not claim causation from a probability table unless the study design supports it.</p>",
            "<p>For error analysis, identify the mistaken assumption, replace it with the correct structure, calculate when possible, and explain the impact. This demonstrates understanding more clearly than only giving a different answer.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "At least one defective item", "scenario" => "Three independent items each have defect probability 0.04. Find at least one defect.", "steps" => array("Let D be defect; at least one uses the no-defect complement.", "One item is not defective with probability 0.96.", "All three nondefective: \\(0.96^3=0.884736\\).", "Subtract: \\(1-0.884736=0.115264\\)."), "conclusion" => "There is about an 11.53% probability of at least one defect."),
        array("title" => "Two students without replacement", "scenario" => "From 8 seniors and 12 juniors, select two students. Find both seniors.", "steps" => array("Selection is without replacement, so events are dependent.", "First senior: \\(8/20\\); second senior given first: \\(7/19\\).", "Multiply: \\((8/20)(7/19)=56/380\\approx0.1474\\)."), "conclusion" => "The probability both selected students are seniors is about 14.74%."),
        array("title" => "Counting plus probability", "scenario" => "A five-person committee is chosen uniformly from 7 seniors and 5 juniors. Find exactly two juniors.", "steps" => array("Total committees: \\(\\binom{12}5=792\\).", "Favourable: choose 2 of 5 juniors and 3 of 7 seniors: \\(\\binom52\\binom73=10(35)=350\\).", "Probability: \\(350/792\\approx0.4419\\)."), "conclusion" => "About 44.19% of possible committees contain exactly two juniors."),
    ),
    "misconceptions" => array(
        array("And means multiply raw probabilities.", "Use a conditional second factor unless independence is justified."), array("Or means add without correction.", "Subtract overlap unless events are mutually exclusive."),
        array("Given is extra wording.", "It changes the sample space and denominator."), array("At least two means exactly two.", "It includes every allowed count from two upward."),
        array("Without replacement keeps probabilities constant.", "Counts and denominators change after selection."), array("A correct decimal needs no explanation.", "Interpret event, context, and assumptions.")
    ),
    "why" => array("Real probability questions rarely announce the rule. Translating language into structure is the difference between memorizing formulas and solving unfamiliar situations.", "SCOPE is also a communication framework: another reader can follow the event definitions, representation, calculation, and conclusion and locate any disagreement."),
    "knowledge_check" => array(
        stats_mc("kc1", "Which notation means A given B?", array("a" => "P(A union B)", "b" => "P(A intersection B)", "c" => "P(A|B)", "d" => "P(B|A)"), "c", "<p>The event before the bar is requested; B after the bar is the condition.</p>", "Read the vertical bar as given.", "foundational", array("translation")),
        stats_mc("kc2", "What is the complement of at least two successes?", array("a" => "None", "b" => "At most one", "c" => "Exactly two", "d" => "At least one"), "b", "<p>Not at least two means fewer than two: zero or one.</p>", "List counts.", "foundational", array("complement")),
        stats_mc("kc3", "Best organizer for sequential conditional probabilities?", array("a" => "Tree diagram", "b" => "Scatter plot", "c" => "Box plot", "d" => "Histogram"), "a", "<p>A tree exposes stages and conditional branches.</p>", "Think branching paths.", "foundational", array("representation"))
    ),
    "guided_practice" => array(
        stats_written("g1", "short-response", "Translate 'neither A nor B' into notation.", "<p><strong>Model answer:</strong> \\((A\\cup B)^c\\), equivalently \\(A^c\\cap B^c\\).</p>", "Outside the union.", "foundational", array("translation")),
        stats_numeric("g2", "P(A)=0.5, P(B)=0.4, P(A and B)=0.2. Find P(A or B).", 0.7, "<p>\\(0.5+0.4-0.2=0.7\\).</p>", "Union rule.", "foundational", array("or")),
        stats_numeric("g3", "P(A and B)=0.18 and P(B)=0.30. Find P(A|B).", 0.6, "<p>\\(0.18/0.30=0.60\\).</p>", "Joint over condition.", "foundational", array("given")),
        stats_numeric("g4", "Two draws from 5 red and 5 blue without replacement: P(two red), four decimals.", 0.2222, "<p>\\((5/10)(4/9)=0.2222\\).</p>", "Changing counts.", "proficient", array("dependent"), 0.0001),
        stats_written("g5", "short-response", "Choose a representation for overlapping clubs and justify.", "<p><strong>Model answer:</strong> A Venn diagram or two-way table shows the overlap, only regions, and neither group clearly. A Venn diagram is especially direct for union and intersection language.</p>", "Sets or sequence?", "proficient", array("organize")),
        stats_written("g6", "error-analysis", "A student reports probability 1.24. What checks should follow?", "<p><strong>Model answer:</strong> Probability cannot exceed 1. Check for double-counted overlap, incorrectly added path branches, percentages entered as whole numbers, or a denominator smaller than the numerator.</p>", "Use the probability scale.", "proficient", array("reasonableness"))
    ),
    "independent_practice" => array(
        stats_written("i1", "short-response", "Translate 'one but not both A and B.'", "<p><strong>Model answer:</strong> \\((A\\cap B^c)\\cup(A^c\\cap B)\\).</p>", "Two only regions.", "proficient", array("translation")),
        stats_numeric("i2", "P(A or B)=0.75 and P(A and B)=0.20. If P(A)=0.45, find P(B).", 0.5, "<p>\\(0.75=0.45+P(B)-0.20\\), so \\(P(B)=0.50\\).</p>", "Rearrange addition rule.", "proficient", array("or")),
        stats_numeric("i3", "Four independent trials have p=0.25. Find at least one success, four decimals.", 0.6836, "<p>\\(1-0.75^4=0.6836\\).</p>", "No-success complement.", "proficient", array("at least"), 0.0001),
        stats_numeric("i4", "From 10 items with 3 special, choose two without replacement. Find both special, four decimals.", 0.0667, "<p>\\((3/10)(2/9)=0.0667\\).</p>", "Dependent path.", "proficient", array("dependent"), 0.0001),
        stats_numeric("i5", "Choose 3 from 8 uniformly. Probability two specified people are both chosen, four decimals.", 0.1071, "<p>Favourable committees include both and one of remaining 6: \\(6\\). Total \\(\\binom83=56\\). Probability \\(6/56=0.1071\\).</p>", "Count favourable and total under same rules.", "advanced", array("counting probability"), 0.0001),
        stats_written("i6", "short-response", "Explain why P(A|B) may exceed P(A).", "<p><strong>Model answer:</strong> If A is more common inside group B than in the full sample space, restricting to B raises its probability. This indicates positive association, not an arithmetic contradiction.</p>", "Condition can concentrate A.", "proficient", array("conditional")),
        stats_written("i7", "error-analysis", "A student uses combinations to award first and second prize. Correct the method.", "<p><strong>Model answer:</strong> Prize order matters, so use a permutation. From n finalists, there are \\(P(n,2)=n(n-1)\\) assignments.</p>", "Swap winners.", "proficient", array("counting")),
        stats_written("i8", "short-response", "Solve a scenario using all five SCOPE steps: 60% use reminders and 75% of those complete. Find reminder and complete.", "<p><strong>Model answer:</strong> S: R=reminder, C=complete. C: 'and' means intersection. O: one tree path. P: \\(P(R\\cap C)=0.60(0.75)=0.45\\). E: 45% of all users are expected to both use reminders and complete under the model.</p>", "Label every SCOPE step.", "advanced", array("SCOPE"))
    ),
    "summary" => array("SCOPE separates translation from calculation.", "And, or, given, neither, at least, at most, and exactly name different event structures.", "Choose a representation that exposes overlap, sequence, or counting restrictions.", "Use probability-scale, denominator, overlap, dependence, and order checks.", "End with an interpretation naming the event and assumptions."),
    "exit_ticket" => array(
        stats_written("e1", "short-response", "Write the five SCOPE steps from memory.", "<p><strong>Model answer:</strong> State events, Clarify the question, Organize information, Perform the calculation, Explain the result.</p>", "Use the acronym.", "proficient", array("SCOPE")),
        stats_numeric("e2", "P(A and B)=0.12 and P(B)=0.30. Find P(A|B).", 0.4, "<p>\\(0.12/0.30=0.40\\).</p>", "Given B changes denominator.", "proficient", array("conditional"))
    )
);
