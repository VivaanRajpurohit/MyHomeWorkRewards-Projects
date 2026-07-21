<?php
return array(
    "overview" => "Probability diagrams make invisible sets and denominators visible. Venn diagrams show overlap, two-way tables organize counts, and area models connect multiplication with conditional regions.",
    "objectives" => array("Represent unions, intersections, and complements in Venn diagrams.", "Calculate joint, marginal, and conditional probabilities from two-way tables.", "Complete missing table totals and compare conditional proportions.", "Interpret area models and uniform interval probability.", "Recognize common visual misreadings."),
    "prerequisites" => array("Use addition, complement, and conditional rules.", "Read fractions and percentages.", "Understand events as sets of outcomes."),
    "vocabulary" => array(
        array("Venn diagram", "A sample-space rectangle containing event regions."), array("Joint probability", "The probability of two category conditions together."),
        array("Marginal probability", "A probability from a row or column total relative to the grand total."), array("Conditional probability", "A probability within one selected row, column, or event."),
        array("Two-way table", "A grid crossing categories of two variables."), array("Area model", "A rectangle whose subregion areas represent probabilities."),
        array("Uniform distribution", "A model assigning equal probability per equal interval length."), array("Inclusive or", "A union containing A only, B only, and their overlap.")
    ),
    "sections" => array(
        array("title" => "Read Regions Before Numbers", "content" => array(
            "<p>A Venn diagram places the sample space inside a rectangle and events inside circles. The overlap is \\(A\\cap B\\), the intersection. Everything in either circle is \\(A\\cup B\\), the union. The part outside circle A is \\(A^c\\), and the area outside both circles represents neither A nor B.</p>",
            "<p>Probability uses inclusive or: A or B includes the overlap. \"A but not B\" is the part of A outside B. \"Exactly one\" includes A-only and B-only but excludes the overlap. Translate the phrase into a region before calculating.</p>",
            "<p>Area is conceptual unless the diagram is drawn to scale. Do not estimate probability from circle size unless the graphic explicitly says areas are proportional. Labels and given counts control calculations.</p>",
            array("type" => "formula", "label" => "Region identities", "html" => "<p>Neither: \\((A\\cup B)^c\\) &nbsp; A only: \\(A\\cap B^c\\) &nbsp; Exactly one: \\((A\\cap B^c)\\cup(A^c\\cap B)\\)</p>")
        ), "simulation" => "venn"),
        array("title" => "Build a Two-Way Table", "content" => array(
            "<p>A two-way table crosses categories of two variables. Interior cells are joint counts, edge totals are marginal counts, and the bottom-right value is the grand total. Every row total equals its interior cells, every column total does the same, and row totals add to the grand total.</p>",
            "<table><thead><tr><th></th><th>Completed</th><th>Did not complete</th><th>Total</th></tr></thead><tbody><tr><th>Reminder</th><td>72</td><td>28</td><td>100</td></tr><tr><th>No reminder</th><td>45</td><td>55</td><td>100</td></tr><tr><th>Total</th><td>117</td><td>83</td><td>200</td></tr></tbody></table>",
            "<p>Check totals before probabilities. One arithmetic error can affect several later denominators. Counts, overall percentages, row percentages, and column percentages are different table forms; label which one is displayed.</p>",
            array("type" => "note", "label" => "Table-to-Venn connection", "html" => "<p>For two yes/no events, the four interior regions are both, A only, B only, and neither. Those same four disjoint groups fill the 2-by-2 table.</p>")
        )),
        array("title" => "Joint, Marginal, and Conditional", "content" => array(
            "<p>A joint probability uses an interior count over the grand total. From the table, \\(P(R\\cap C)=72/200=0.36\\). A marginal probability uses a row or column total over the grand total: \\(P(R)=100/200=0.50\\) and \\(P(C)=117/200=0.585\\).</p>",
            "<p>A conditional probability changes the denominator to the conditioned row or column. \\(P(C|R)=72/100=0.72\\), while \\(P(R|C)=72/117\\approx0.615\\). The same numerator can answer two different questions because the reference groups differ.</p>",
            "<p>To compare groups, compare conditional proportions with the same response. Completion is 72/100=72% among reminder users and 45/100=45% among non-reminder users. The 27-point difference shows association in this table; causal interpretation still depends on study design.</p>"
        )),
        array("title" => "Area Models", "content" => array(
            "<p>An area model begins with a rectangle of area 1. Splitting 60% into reminder users creates a region of width 0.60. If 75% of that region completes, the joint reminder-and-complete area is \\(0.60\\times0.75=0.45\\). Multiplication along a tree path and area within a branch express the same idea.</p>",
            "<p>Area models are especially useful for conditional probability because the condition becomes the new whole. Inside the reminder strip, the completed part occupies 75%, even though it occupies 45% of the original rectangle.</p>",
            "<p>When categories partition the sample space, adding subregion areas gives total probability. Reminder-complete and no-reminder-complete are disjoint paths, so their areas add to overall completion.</p>"
        )),
        array("title" => "Uniform Interval Probability", "content" => array(
            "<p>For a value chosen uniformly on an interval, equal lengths have equal probability. Probability is favourable length divided by total length. If a number is selected uniformly from 0 to 10, the probability it lies from 2 to 5 is \\((5-2)/(10-0)=3/10\\).</p>",
            "<p>Individual exact points have zero probability in a continuous model, so including or excluding endpoints does not change interval probability. The distinction matters conceptually even though it does not change the length calculation.</p>",
            "<p>Visual mistakes include shading the entire circle for an intersection, excluding overlap from or, using the grand total for a conditional probability, and comparing raw counts when group totals differ. Name the requested region and denominator before using arithmetic.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Three table probabilities", "scenario" => "Use the reminder table with 72 reminder-completers, 100 reminder users, 117 completers, and 200 users.", "steps" => array("Joint: \\(P(R\\cap C)=72/200=0.36\\).", "Marginal: \\(P(C)=117/200=0.585\\).", "Conditional: \\(P(C|R)=72/100=0.72\\).", "Each denominator matches a different reference group."), "conclusion" => "Joint, marginal, and conditional probabilities cannot be interchanged."),
        array("title" => "Venn counts", "scenario" => "In 120 students, 70 take math, 45 take coding, and 25 take both.", "steps" => array("Math only: \\(70-25=45\\).", "Coding only: \\(45-25=20\\).", "Union: \\(70+45-25=90\\).", "Neither: \\(120-90=30\\)."), "conclusion" => "The four regions are 45 math-only, 25 both, 20 coding-only, and 30 neither."),
        array("title" => "Uniform time interval", "scenario" => "A random arrival is uniform from 0 to 30 minutes. Find P(8 to 14 minutes).", "steps" => array("Favourable length is \\(14-8=6\\).", "Total length is \\(30-0=30\\).", "Probability is \\(6/30=0.20\\)."), "conclusion" => "There is a 20% probability of an arrival in that six-minute interval."),
    ),
    "misconceptions" => array(
        array("Or means only one event.", "Inclusive or includes the overlap."), array("A drawn circle's size is its probability.", "Use labelled values unless area is explicitly proportional."),
        array("Conditional probability uses the grand total.", "It uses the conditioned row or column total."), array("P(A|B) equals P(B|A).", "The reference group changes."),
        array("Compare group counts directly.", "Use conditional proportions when group sizes differ."), array("A continuous endpoint adds probability.", "A single point has zero area in a continuous uniform model.")
    ),
    "why" => array("Visual structures reduce abstract symbol errors and make denominators visible. They are used in survey dashboards, medical-test explanations, website experiments, and business segmentation.", "A correct visual also supports communication: readers can see overlap, group size, and conditional comparison rather than trusting a single percentage without context."),
    "knowledge_check" => array(
        stats_numeric("kc1", "From the reminder table, find P(reminder and complete).", 0.36, "<p>Use the joint cell over grand total: \\(72/200=0.36\\).</p>", "Interior over total.", "foundational", array("joint")),
        stats_numeric("kc2", "From the table, find P(complete|reminder).", 0.72, "<p>Condition on reminder: \\(72/100=0.72\\).</p>", "Reminder row total.", "foundational", array("conditional")),
        stats_numeric("kc3", "From the table, find P(complete).", 0.585, "<p>Use the completion column total: \\(117/200=0.585\\).</p>", "Marginal total over grand total.", "foundational", array("marginal"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "Of 150 students, 90 take art, 70 take music, and 40 take both. How many take art only?", 50, "<p>\\(90-40=50\\).</p>", "Remove overlap from art total.", "foundational", array("Venn")),
        stats_numeric("g2", "Using the same data, how many take art or music?", 120, "<p>\\(90+70-40=120\\).</p>", "Subtract overlap once.", "foundational", array("union")),
        stats_numeric("g3", "Using the same data, how many take neither?", 30, "<p>\\(150-120=30\\).</p>", "Complement of union.", "foundational", array("neither")),
        stats_numeric("g4", "In a group of 80 console users, 52 complete. Find completion conditional on console.", 0.65, "<p>\\(52/80=0.65\\).</p>", "Group total is denominator.", "foundational", array("conditional")),
        stats_written("g5", "short-response", "Explain the difference between a joint and marginal probability.", "<p><strong>Model answer:</strong> A joint probability refers to an interior combination of two categories. A marginal probability refers to one category total across the other variable.</p>", "Interior versus edge total.", "proficient", array("table")),
        stats_written("g6", "error-analysis", "A student calculates P(C|R)=72/200. Explain.", "<p><strong>Model answer:</strong> Given reminders restricts the group to 100 reminder users. The correct probability is \\(72/100=0.72\\); 72/200 is the joint probability.</p>", "Change the denominator.", "proficient", array("conditional"))
    ),
    "independent_practice" => array(
        stats_numeric("i1", "A table cell has 32 of 160 total. Find its joint probability.", 0.2, "<p>\\(32/160=0.20\\).</p>", "Cell over total.", "foundational", array("joint")),
        stats_numeric("i2", "A row total is 80 and its success cell is 28. Find row success proportion.", 0.35, "<p>\\(28/80=0.35\\).</p>", "Condition on row.", "foundational", array("conditional")),
        stats_numeric("i3", "A column total is 90 of 300. Find marginal probability.", 0.3, "<p>\\(90/300=0.30\\).</p>", "Column total over grand total.", "foundational", array("marginal")),
        stats_numeric("i4", "Uniform from 0 to 20: find the probability that X is between 3 and 9.", 0.3, "<p>Favourable length 6 over total 20 gives 0.30.</p>", "Interval lengths.", "foundational", array("uniform")),
        stats_written("i5", "short-response", "Describe the Venn region for exactly one of A or B.", "<p><strong>Model answer:</strong> Shade A-only and B-only, but leave the intersection and the outside region unshaded.</p>", "Exclude overlap.", "proficient", array("Venn")),
        stats_written("i6", "short-response", "Two groups have 45/100 and 72/200 successes. Which has the higher rate?", "<p><strong>Model answer:</strong> The first rate is 45%; the second is 36%. The first group has the higher conditional proportion even though both have different counts.</p>", "Compare proportions, not counts.", "proficient", array("comparison")),
        stats_written("i7", "error-analysis", "A student shades only the non-overlapping pieces for A or B. Correct it.", "<p><strong>Model answer:</strong> Probability uses inclusive or, so the overlap belongs to the union unless the question says exactly one.</p>", "Or includes both.", "proficient", array("union")),
        stats_written("i8", "short-response", "Explain why a table can show association but not necessarily causation.", "<p><strong>Model answer:</strong> Different conditional proportions show that variables are related in the data. Causation depends on whether treatments were randomly assigned and confounding was controlled, information the table alone does not provide.</p>", "Display versus design.", "advanced", array("association"))
    ),
    "summary" => array("Venn diagrams represent events as regions of a sample space.", "Interior table cells are joint counts; edge totals are marginal counts.", "Conditional probabilities use the conditioned group total.", "Area models connect path multiplication with subregion area.", "Uniform interval probability is favourable length divided by total length."),
    "exit_ticket" => array(
        stats_numeric("e1", "In 100 students, 60 take A, 50 take B, and 25 take both. Find neither.", 15, "<p>Union \\(=60+50-25=85\\); neither \\(=100-85=15\\).</p>", "Find union, then complement.", "proficient", array("Venn")),
        stats_written("e2", "short-response", "What denominator answers P(A|B)?", "<p><strong>Model answer:</strong> The total count or probability of B, because the condition restricts the reference group to outcomes in B.</p>", "After the bar is the new whole.", "proficient", array("conditional"))
    )
);
