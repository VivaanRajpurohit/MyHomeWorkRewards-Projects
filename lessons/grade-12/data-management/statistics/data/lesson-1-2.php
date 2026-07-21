<?php
$methodOptions = array("a" => "Simple random sample", "b" => "Stratified random sample", "c" => "Cluster sample", "d" => "Systematic sample", "e" => "Convenience sample", "f" => "Multistage sample");

return array(
    "overview" => "A sample can only speak for a population when its selection process gives the population a fair chance to be represented. This lesson compares the main probability-sampling methods and explains when each one is practical.",
    "objectives" => array(
        "Describe simple random, stratified, cluster, systematic, and multistage sampling.",
        "Distinguish stratified sampling from cluster sampling using who is selected from which groups.",
        "Design a sampling procedure with a genuine chance mechanism.",
        "Explain advantages, disadvantages, periodicity, and sampling with or without replacement.",
        "Distinguish random sampling from random assignment."
    ),
    "prerequisites" => array(
        "Identify a population and a sample.",
        "Understand that a sample statistic estimates a population parameter.",
        "Read ratios and calculate a whole-number sampling interval."
    ),
    "vocabulary" => array(
        array("Sampling frame", "The list or source used to identify members who can be selected."),
        array("Simple random sample (SRS)", "A sample for which every possible group of the required size has an equal chance of selection."),
        array("Stratum", "A subgroup whose members share a relevant characteristic; some individuals are sampled from every stratum."),
        array("Cluster", "A natural group intended to resemble a small version of the population; only selected clusters are studied."),
        array("Systematic sample", "A sample selected at a regular interval after a random starting point."),
        array("Sampling interval", "The step size, often written \\(k\\), between systematic selections."),
        array("Multistage sample", "A design that combines sampling methods in two or more stages."),
        array("Periodicity", "A repeating pattern in an ordered list that can line up with a systematic interval."),
        array("With replacement", "A selected item is returned and may be selected again."),
        array("Without replacement", "A selected individual or item cannot be selected a second time.")
    ),
    "sections" => array(
        array("title" => "Representativeness Comes From the Method", "content" => array(
            "<p>A representative sample reflects important features of the population closely enough to support the intended conclusion. There is no requirement that the sample look exactly like the population in every detail. Random variation will produce small differences. The goal is to avoid a selection rule that systematically favours one type of individual.</p>",
            "<p>A random sampling method uses chance to choose individuals. Random does not mean careless, spontaneous, or \"whoever happens to be nearby.\" A defensible random procedure identifies the population, creates a sampling frame when needed, and uses a random-number generator, shuffled labels, or another chance device. The method used is usually more important than the percentage of the population included.</p>",
            array("type" => "warning", "label" => "Two meanings of random", "html" => "<p><strong>Random sampling</strong> selects people from a population and supports generalization. <strong>Random assignment</strong> places experimental units into treatments and supports cause-and-effect conclusions. They solve different problems.</p>"),
            "<p>The sampling frame also matters. A perfect random selection from an incomplete list is random only with respect to that list. If a school uses an old enrolment file that omits newly arrived students, those students cannot be selected. Chance reduces researcher choice, but it cannot repair missing population members.</p>"
        )),
        array("title" => "Simple Random Samples", "content" => array(
            "<p>In a <strong>simple random sample</strong>, abbreviated SRS, every possible sample of the chosen size has the same chance of selection. This is stronger than saying each person has the same individual chance. Imagine four students A, B, C, and D and a sample of two. An SRS gives AB, AC, AD, BC, BD, and CD equal chances. A procedure that always selects one student from AB and one from CD gives each student a one-half chance, but the pairs AB and CD can never occur, so it is not an SRS.</p>",
            "<p>To select 100 students from 1,200, assign the students numbers 1 through 1,200 and use a random-number generator to choose 100 different numbers. Sampling without replacement prevents duplicates. An SRS is conceptually clean and usually straightforward to analyse, but it requires a complete population list. Selected participants may also be geographically spread out, and a small subgroup can be missed by chance.</p>",
            array("type" => "example", "label" => "A complete procedure", "html" => "<p>Do not write only \"choose students randomly.\" State the frame, labels, chance tool, number selected, and treatment of duplicates: \"Number all 1,200 students, generate 100 different integers from 1 to 1,200, and survey the corresponding students.\"</p>")
        )),
        array("title" => "Stratified and Cluster Sampling", "content" => array(
            "<p>A <strong>stratified random sample</strong> divides the population into meaningful subgroups called strata and randomly samples individuals from <em>every</em> stratum. Members within a stratum share a characteristic such as grade, region, department, or subscription type. Stratification guarantees that every chosen subgroup is represented and can improve precision when members within each stratum are similar.</p>",
            "<p>In proportional stratified sampling, each stratum contributes the same percentage of the sample that it contributes to the population. If 30% of a school is in Grade 12, then about 30% of the sample should be Grade 12. Disproportionate sampling may deliberately take equal numbers from small and large groups so comparisons are possible, but final population estimates then require weighting.</p>",
            "<p>A <strong>cluster sample</strong> divides the population into natural groups, randomly selects only some clusters, and studies everyone or many individuals in those chosen clusters. Classrooms, schools, blocks, stores, and teams can be clusters. An ideal cluster is a mixed miniature of the population. Cluster sampling saves travel and administrative cost, but people in one cluster may be unusually alike, reducing precision.</p>",
            array("type" => "definition", "label" => "The decisive comparison", "html" => "<p><strong>Stratified:</strong> sample some individuals from every group. <strong>Cluster:</strong> select some whole groups and leave the other groups out. Strata are internally similar; good clusters are internally mixed.</p>")
        )),
        array("title" => "Systematic and Multistage Sampling", "content" => array(
            "<p>A <strong>systematic sample</strong> chooses a random starting position and then selects every \\(k\\)th member. A rough interval is \\(k=N/n\\), where \\(N\\) is population size and \\(n\\) is desired sample size. For 2,000 records and a sample of 100, \\(k=2000/100=20\\). Randomly choose a start from 1 through 20, perhaps 7, and select positions 7, 27, 47, and so on.</p>",
            "<p>The random start is essential because always beginning with the first person favours a fixed position. Researchers must also inspect the ordering for <strong>periodicity</strong>. If every twentieth production item follows a machine reset and the interval is 20, the sample will overrepresent post-reset products. Randomly shuffling the list or choosing another method can prevent that pattern from controlling selection.</p>",
            "<p>A <strong>multistage sample</strong> makes selections in stages. A national school survey might randomly select provinces, then districts within provinces, then schools within districts, then students within schools. The stages may combine cluster, stratified, and simple random sampling. Large studies use this approach because a single list of every individual may not exist.</p>",
            array("type" => "formula", "label" => "Approximate systematic interval", "html" => "<p>\\[k=\\frac{N}{n}\\]</p><p>Round sensibly and plan how to stop once the desired number of selections is reached.</p>")
        )),
        array("title" => "Replacement, Tradeoffs, and Design Choices", "content" => array(
            "<p>Sampling <strong>with replacement</strong> returns a selected item to the pool, allowing it to appear again. Sampling <strong>without replacement</strong> removes it from future selections. Surveys usually sample people without replacement because interviewing the same student twice does not add a new individual. Probability models sometimes use replacement to keep the probability unchanged from one draw to the next.</p>",
            "<p>No sampling method is universally best. An SRS is simple to justify when a complete list exists. Stratification is valuable when subgroup representation or subgroup comparison matters. Clustering is efficient for dispersed populations. Systematic sampling is fast for an ordered stream when periodicity is not a concern. Multistage sampling balances cost and coverage for very large populations.</p>",
            "<p>A complete design should state exactly how chance is used and identify practical weaknesses. For example, a stratified survey may still have nonresponse, and a cluster survey may select unusually similar clusters. Good statistical writing does not claim perfection. It explains why a method is reasonable for the question and what uncertainty remains.</p>"
        ))
    ),
    "activities" => array("random-sample"),
    "worked_examples" => array(
        array("title" => "Simple random student survey", "scenario" => "A principal needs an SRS of 80 students from a complete list of 1,600.", "steps" => array("Number the students from 1 to 1,600.", "Use a random-number generator to select 80 distinct integers in that range.", "Contact the matching students. Do not replace a selected number because the survey requires 80 different individuals."), "conclusion" => "Every possible group of 80 has an equal chance when the random-number generator samples distinct labels uniformly."),
        array("title" => "Proportional stratification", "scenario" => "A school has 400 freshmen, 350 sophomores, 300 juniors, and 250 seniors. It wants a proportional sample of 130.", "steps" => array("The population size is \\(400+350+300+250=1300\\). The sample fraction is \\(130/1300=0.10\\).", "Take 10% from every grade: 40 freshmen, 35 sophomores, 30 juniors, and 25 seniors.", "Randomly select the required number within each grade list."), "conclusion" => "Every grade is represented in its population proportion; the grade levels are strata."),
        array("title" => "Cluster or stratified?", "scenario" => "A district randomly selects five classrooms and surveys every student in those rooms.", "steps" => array("Classrooms are natural groups.", "Only five classrooms are selected; the other classrooms contribute no students.", "Everyone in each selected classroom is surveyed."), "conclusion" => "This is cluster sampling. If students had been randomly selected from every classroom, it would be stratified sampling."),
        array("title" => "Systematic customer sample", "scenario" => "A store expects 900 customers and wants 60 responses.", "steps" => array("Calculate the interval: \\(k=900/60=15\\).", "Randomly select a start from 1 through 15; suppose it is 4.", "Survey the 4th, 19th, 34th, and every fifteenth customer after that.", "Check that customer order has no fifteen-customer cycle connected to the question."), "conclusion" => "The method is systematic sampling with interval 15 and a random start of 4."),
        array("title" => "Multistage national survey", "scenario" => "Researchers select 6 regions, 4 schools per region, and 20 students per school using chance at every stage.", "steps" => array("Regions are selected first, so the design begins by clustering geographically.", "Schools are sampled within each selected region.", "Students are then randomly sampled within each chosen school.", "Because several sampling steps are combined, a single label such as cluster does not describe the entire design."), "conclusion" => "This is a multistage sample with \\(6\\times4\\times20=480\\) selected students."),
    ),
    "misconceptions" => array(
        array("Random means unplanned.", "Random sampling follows a planned chance process. Convenience or spontaneous selection is not random."),
        array("Equal individual chances guarantee an SRS.", "An SRS requires equal chances for every possible sample of the chosen size, not only equal marginal chances for individuals."),
        array("Cluster and stratified sampling are interchangeable.", "Stratified sampling uses every stratum; cluster sampling selects only some clusters."),
        array("A systematic sample can always begin at position 1.", "The starting point should be chosen randomly from the first interval."),
        array("A larger sample repairs a poor selection process.", "Larger size reduces random variability but can preserve or magnify systematic undercoverage."),
        array("Random sampling and random assignment are the same.", "Sampling selects from a population; assignment allocates treatments after units are in an experiment.")
    ),
    "why" => array(
        "Sampling decisions determine whose experiences can influence a result. Schools, election pollsters, product teams, and medical researchers all need methods that do not silently erase important groups.",
        "Knowing the tradeoffs also prevents method names from becoming empty labels. A student who can describe exactly who is selected, from where, and by what chance process can evaluate a real study instead of guessing from keywords."
    ),
    "knowledge_check" => array(
        stats_classify("kc1", "A school randomly chooses 20 students from every grade.", $methodOptions, "b", "<p>Every grade is used, and some students are sampled from each. That is stratified random sampling.</p>", "Every group or only some groups?", "foundational", array("sampling methods")),
        stats_classify("kc2", "A district randomly chooses four schools and surveys every student in them.", $methodOptions, "c", "<p>Only selected whole schools are studied, so the schools are clusters.</p>", "Whole natural groups are selected.", "foundational", array("sampling methods")),
        stats_numeric("kc3", "A list has 2,400 names and the desired systematic sample is 120. Find the interval k.", 20, "<p>\\(k=N/n=2400/120=20\\). A random start should be chosen from 1 through 20.</p>", "Divide population size by sample size.", "foundational", array("systematic"))
    ),
    "guided_practice" => array(
        stats_classify("g1", "A researcher numbers all users and randomly generates 300 different numbers.", $methodOptions, "a", "<p>A complete list is numbered and one group is selected directly by chance, giving an SRS.</p>", "There are no subgroups or intervals.", "foundational", array("SRS")),
        stats_classify("g2", "A researcher surveys the first 50 people entering a mall.", $methodOptions, "e", "<p>The easiest available people are selected without chance, so this is convenience sampling.</p>", "First available is a warning sign.", "foundational", array("convenience")),
        stats_classify("g3", "After a random start, a factory inspects every 25th product.", $methodOptions, "d", "<p>A regular interval after a random start defines systematic sampling.</p>", "Look for every kth item.", "foundational", array("systematic")),
        stats_classify("g4", "A city samples residents randomly within every neighbourhood.", $methodOptions, "b", "<p>Every neighbourhood contributes randomly chosen individuals, so the neighbourhoods are strata.</p>", "Some from every group.", "proficient", array("stratified")),
        stats_classify("g5", "A company selects three store locations and interviews all workers at those stores.", $methodOptions, "c", "<p>Only selected natural groups are included and all workers there are studied, so it is cluster sampling.</p>", "Some complete groups.", "proficient", array("cluster")),
        stats_classify("g6", "A study chooses states, then districts within states, then households within districts.", $methodOptions, "f", "<p>Selection occurs through several nested stages, so it is multistage sampling.</p>", "Count the separate levels of selection.", "proficient", array("multistage")),
        stats_written("g7", "error-analysis", "A student calls a sample stratified because the population was divided into classrooms and three entire classrooms were surveyed. Correct the student.", "<p><strong>Model answer:</strong> This is cluster sampling because only some classrooms were selected and every person in those selected groups was surveyed. Stratified sampling would randomly select some students from every classroom.</p>", "Focus on whether every group contributes people.", "proficient", array("stratified", "cluster")),
        stats_written("g8", "short-response", "Explain why a systematic sample needs a random start and a periodicity check.", "<p><strong>Model answer:</strong> The random start prevents a fixed position from always being favoured. A periodicity check makes sure the interval does not match a repeating list pattern that would overrepresent one type of item.</p>", "Name one risk for the start and one for the interval.", "advanced", array("systematic", "periodicity"))
    ),
    "independent_practice" => array(
        stats_classify("i1", "From an alphabetized roster, software selects 75 distinct names uniformly at random.", $methodOptions, "a", "<p>Uniformly selecting distinct names from the complete roster creates an SRS.</p>", "No subgroups or fixed spacing are used.", "foundational", array("SRS")),
        stats_classify("i2", "A school randomly selects two homerooms per grade and surveys everyone in those selected rooms.", $methodOptions, "f", "<p>The design first accounts for every grade, then selects clusters within grades. Because methods are combined in stages, multistage is the best description.</p>", "More than one selection layer is present.", "advanced", array("multistage")),
        stats_classify("i3", "A website surveys every 100th visit after randomly choosing one of the first 100 visits.", $methodOptions, "d", "<p>This is a systematic sample with interval 100 and a random start.</p>", "Regular interval.", "foundational", array("systematic")),
        stats_classify("i4", "A sports league samples 12 athletes randomly from each team.", $methodOptions, "b", "<p>Every team contributes sampled athletes, so teams are strata.</p>", "Some from every team.", "foundational", array("stratified")),
        stats_classify("i5", "A poll is posted publicly and anyone may respond.", $methodOptions, "e", "<p>Among these choices, convenience is closest because there is no probability selection. More precisely, this is a voluntary-response sample, a source of bias studied next.</p>", "No chance mechanism selects respondents.", "proficient", array("nonprobability")),
        stats_written("i6", "short-response", "Design an SRS of 40 from 800 students.", "<p><strong>Model answer:</strong> Obtain the complete roster, label students 001 through 800, and use a random-number generator to select 40 distinct labels. Survey the corresponding students and follow up with selected nonresponders.</p>", "State the list, labels, random tool, and duplicates rule.", "proficient", array("design")),
        stats_written("i7", "short-response", "Design a proportional stratified sample of 100 from a school that is 40% Grade 9, 30% Grade 10, 20% Grade 11, and 10% Grade 12.", "<p><strong>Model answer:</strong> Randomly select 40 Grade 9, 30 Grade 10, 20 Grade 11, and 10 Grade 12 students from separate grade rosters.</p>", "Apply each population percentage to 100.", "proficient", array("stratified", "design")),
        stats_written("i8", "short-response", "Compare one advantage of cluster sampling with one advantage of stratified sampling.", "<p><strong>Model answer:</strong> Cluster sampling can reduce travel and listing costs by concentrating data collection in selected groups. Stratified sampling guarantees representation of every chosen subgroup and may improve precision.</p>", "Think efficiency versus representation.", "proficient", array("compare")),
        stats_written("i9", "error-analysis", "A researcher inspects every tenth item but does not randomize the first item. Explain and repair the flaw.", "<p><strong>Model answer:</strong> A fixed first item may favour one list position. Randomly choose a start from 1 through 10, then inspect that item and every tenth item after it. Also check for a ten-item production cycle.</p>", "A systematic design has two protections.", "advanced", array("systematic", "error analysis")),
        stats_written("i10", "short-response", "Explain why randomly assigning volunteers to two treatments does not make the volunteers a random sample of all students.", "<p><strong>Model answer:</strong> Random assignment balances the treatment groups among the volunteers, but the volunteers chose to enter and may differ from all students. Assignment supports causation inside the experiment; it does not create population representativeness.</p>", "Separate entry into the study from placement within it.", "advanced", array("sampling", "assignment"))
    ),
    "summary" => array(
        "An SRS gives every possible sample of the required size an equal chance.",
        "Stratified sampling selects some individuals from every similar subgroup; cluster sampling studies only selected mixed groups.",
        "Systematic sampling needs a random start and a check for repeating patterns.",
        "Multistage designs combine methods to reach large, dispersed populations.",
        "Random sampling supports generalization, while random assignment serves a different experimental purpose."
    ),
    "exit_ticket" => array(
        stats_classify("e1", "A district randomly chooses 3 schools, then randomly chooses 2 classes in each school, then surveys all students in those classes.", $methodOptions, "f", "<p>There are several chance-based selection stages, so this is multistage sampling.</p>", "Count how many levels are selected.", "proficient", array("multistage")),
        stats_written("e2", "short-response", "In two sentences, distinguish stratified from cluster sampling.", "<p><strong>Model answer:</strong> Stratified sampling randomly selects some individuals from every stratum to guarantee representation. Cluster sampling randomly selects only some natural groups and studies everyone or many people within those groups for efficiency.</p>", "Use the phrases every group and only some groups.", "proficient", array("stratified", "cluster"))
    )
);
