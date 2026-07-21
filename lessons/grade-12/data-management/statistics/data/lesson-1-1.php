<?php
$variableOptions = array("a" => "Categorical nominal", "b" => "Categorical ordinal", "c" => "Quantitative discrete", "d" => "Quantitative continuous");
$roleOptions = array("a" => "Population", "b" => "Sample", "c" => "Parameter", "d" => "Statistic");

return array(
    "overview" => "Statistics starts by deciding exactly what group we want to understand and what information we will record. This lesson builds the language needed to describe a study before any calculations begin.",
    "objectives" => array(
        "Distinguish a population from a sample and explain when a census is practical.",
        "Distinguish a population parameter from a sample statistic.",
        "Identify individuals, variables, and recorded data in a study.",
        "Classify variables as categorical or quantitative and then by subtype.",
        "Identify explanatory and response variables in a research question."
    ),
    "prerequisites" => array(
        "Read percentages, averages, and simple tables.",
        "Recognize that a conclusion should refer to a clearly named group.",
        "No previous statistics course is required."
    ),
    "vocabulary" => array(
        array("Population", "The complete group of people, objects, events, or records a researcher wants to understand."),
        array("Census", "A data collection that attempts to measure every member of a population."),
        array("Sample", "A smaller group selected from the population and actually measured."),
        array("Parameter", "A numerical description of a population; it is often unknown."),
        array("Statistic", "A numerical description calculated from a sample and used to estimate a parameter."),
        array("Individual", "One person, object, event, or record on which data are collected; also called an observational unit."),
        array("Variable", "A characteristic that can take different values from one individual to another."),
        array("Data", "The recorded values of one or more variables."),
        array("Categorical variable", "A variable whose values place individuals into groups or labels."),
        array("Quantitative variable", "A numerical variable for which arithmetic has a meaningful interpretation.")
    ),
    "sections" => array(
        array(
            "title" => "Start With the Research Question",
            "content" => array(
                "<p>A statistical investigation begins with a question about a group. Suppose a rewards application wants to know how many assignments its users complete in a typical week. The group of interest is not the handful of users who answer a survey; it is every user whose behaviour the company hopes to understand. That entire group is the <strong>population</strong>. A population does not have to contain people. It can be all batteries produced during one shift, all basketball games in a season, all website visits in June, or all transactions processed by a store.</p>",
                "<p>The <strong>individual</strong>, or observational unit, is one member of that population. In the rewards example, one user is an individual. In a quality-control study, one helmet may be the individual. In a study of checkout times, one transaction may be the individual. Naming the individual matters because it tells us what one row of a data table should represent. If one row mixes several students or several days, the structure of the data becomes unclear.</p>",
                array("type" => "definition", "label" => "A useful first sentence", "html" => "<p>The population is <em>the complete group the conclusion is meant to describe</em>. The sample is <em>the part of that group from which data were collected</em>.</p>"),
                "<p>A <strong>variable</strong> is the characteristic recorded for each individual. For a student, variables might include grade level, hours of sleep, test score, or preferred study location. The actual values, such as Grade 12, 7.5 hours, 84%, and library, are the <strong>data</strong>. A variable is the question or column heading; data are the answers stored below it.</p>"
            )
        ),
        array(
            "title" => "Census or Sample?",
            "content" => array(
                "<p>A <strong>census</strong> attempts to collect information from every member of the population. Because no one is intentionally left out, a successful census can provide detailed information about small subgroups and does not have sampling error. A school with 80 graduating students might reasonably ask every graduate about postsecondary plans. A website can also analyse every logged event if the records are already collected automatically.</p>",
                "<p>However, a census is not automatically perfect. People may refuse to respond, records may be wrong, questions may be confusing, and the population may change before the work is complete. Cost and time can also make a census impossible. Some measurements are destructive: a helmet manufacturer cannot test the breaking strength of every helmet because every tested helmet would be ruined. In those situations, measuring a carefully selected <strong>sample</strong> is more useful.</p>",
                "<p>A sample does not need to contain most of the population. What matters most is how it was selected and whether it represents the population relevant to the conclusion. A random sample of 500 users from a well-maintained list can reveal more about 50,000 users than a convenience sample of 10,000 highly active users. Sample size affects precision, but a large size cannot repair a method that consistently excludes certain people.</p>",
                array("type" => "warning", "label" => "Do not confuse size with quality", "html" => "<p>A larger sample usually reduces random sample-to-sample variation. It does not automatically remove undercoverage, nonresponse, misleading wording, or other sources of bias.</p>")
            )
        ),
        array(
            "title" => "Parameters and Statistics",
            "content" => array(
                "<p>Researchers usually want a numerical fact about the population. A numerical description of a population is a <strong>parameter</strong>. Examples include the true average weekly study time of all students in a district, the true proportion of all voters who support a proposal, and the true standard deviation of battery lifetimes from a month of production. A parameter is fixed for a particular population at a particular time, but it is often unknown because measuring everyone is difficult.</p>",
                "<p>A numerical description calculated from a sample is a <strong>statistic</strong>. If 200 sampled students report an average of 6.3 study hours, then 6.3 is a statistic. Another random sample would probably produce a slightly different average. Statistics therefore vary from sample to sample and are used as estimates of population parameters.</p>",
                array("type" => "formula", "label" => "Common notation", "html" => "<p>Population mean: \\(\\mu\\) &nbsp; Population proportion: \\(p\\) &nbsp; Population standard deviation: \\(\\sigma\\)</p><p>Sample mean: \\(\\bar{x}\\) &nbsp; Sample proportion: \\(\\hat{p}\\) &nbsp; Sample standard deviation: \\(s\\)</p>"),
                "<p>The Greek letter \\(\\mu\\), pronounced \"mu,\" represents a population mean. The symbol \\(\\bar{x}\\), read \"x-bar,\" represents a sample mean. The symbols are labels that tell us where a number came from; they are not extra calculations. At first, focus on the words population and sample. The notation becomes natural after repeated use.</p>"
            )
        ),
        array(
            "title" => "Classifying Variables",
            "content" => array(
                "<p>A <strong>categorical variable</strong> sorts individuals into groups. A nominal categorical variable has no natural order: device type, favourite sport, payment method, and school attended are examples. An ordinal categorical variable has categories that can be ranked: beginner, intermediate, advanced; poor, fair, good, excellent; or Grade 9 through Grade 12. The gaps between ordinal categories are not necessarily equal, so ordinary arithmetic may not be meaningful.</p>",
                "<p>A <strong>quantitative variable</strong> records a numerical amount for which arithmetic makes sense. Quantitative variables are often divided into discrete and continuous types. A discrete variable usually comes from counting and takes separated values, such as the number of goals, purchases, siblings, or completed assignments. A continuous variable usually comes from measurement and can theoretically take any value in an interval, such as height, time, temperature, distance, or battery life.</p>",
                "<p>Numbers do not automatically make a variable quantitative. Jersey number 23, postal code 90210, and a device ID are labels, so they are categorical nominal. A one-to-five satisfaction scale may be stored using numbers, but the numbers represent ordered labels; depending on the intended analysis, it is usually treated as ordinal categorical data. Ask whether adding or averaging the values has a sensible real-world meaning.</p>",
                array("type" => "example", "label" => "The arithmetic test", "html" => "<p>Averaging the heights of students has meaning, so height is quantitative. Averaging phone model codes does not describe a useful model, so model code is categorical even if every code contains digits.</p>")
            )
        ),
        array(
            "title" => "Explanatory and Response Variables",
            "content" => array(
                "<p>Many studies examine whether one variable helps explain or predict another. The <strong>explanatory variable</strong> is the possible predictor or influence. The <strong>response variable</strong> is the measured outcome. If a researcher studies whether hours of sleep are related to test scores, sleep is explanatory and score is the response. In an experiment, these may also be called the independent and dependent variables.</p>",
                "<p>The roles come from the research question, not from the variable itself. Test score could be a response when studying the effect of sleep, but it could be explanatory when predicting admission to a program. State both variables in context rather than writing only \"x\" and \"y.\" Also remember that calling a variable explanatory does not prove that it causes the response to change. Causal conclusions require careful experimental design.</p>",
                "<p>Some questions simply describe one variable and have no explanatory-response pair. A survey estimating the proportion of students who use public transit is descriptive. Do not force two roles into a study that only asks about one characteristic. When two variables are present, read the wording: \"Does A affect B?\" or \"Can A predict B?\" usually identifies A as explanatory and B as response.</p>"
            )
        )
    ),
    "activities" => array("classification"),
    "worked_examples" => array(
        array("title" => "Rewards-program activity", "scenario" => "A company wants the average number of assignments completed each week by its 50,000 users. It randomly selects 500 users, whose mean is 8.4 assignments.", "steps" => array("The conclusion concerns all 50,000 users, so they form the population. The 500 selected users form the sample.", "The unknown population mean is the parameter. In notation it could be written as \\(\\mu\\).", "The observed sample mean, \\(\\bar{x}=8.4\\), is the statistic.", "One user is an individual. Assignments completed per week is a quantitative discrete variable because assignments are counted."), "conclusion" => "The statistic 8.4 estimates the unknown average for all 50,000 users."),
        array("title" => "Three school variables", "scenario" => "A school records each student's grade level, backpack weight, and preferred lunch option.", "steps" => array("Grade level consists of ordered categories, so it is categorical ordinal.", "Backpack weight is measured and can take decimal values, so it is quantitative continuous.", "Preferred lunch option is a set of labels with no natural order, so it is categorical nominal."), "conclusion" => "How values are recorded and interpreted determines variable type; the presence of numbers alone does not."),
        array("title" => "Battery-life estimate", "scenario" => "A company tests 75 randomly selected phone batteries and obtains an average battery life of 14.2 hours.", "steps" => array("The 75 tested batteries are a sample from the larger production population.", "The number 14.2 was calculated from those 75 batteries only.", "A number calculated from a sample is a statistic. The true average for every battery produced would be a parameter."), "conclusion" => "The 14.2-hour sample mean is a statistic used to estimate the population mean battery life.")
    ),
    "misconceptions" => array(
        array("A population must be people.", "A population may contain products, games, clicks, purchases, animals, measurements, or any complete collection relevant to the question."),
        array("Any recorded number is quantitative.", "Numbers used as labels, such as student IDs or postal codes, are categorical because arithmetic with them has no useful interpretation."),
        array("A statistic describes the population.", "A statistic is calculated from a sample. It is used to estimate a population parameter."),
        array("A census has no possible errors.", "A census avoids sampling error, but it can still suffer from missing responses, poor measurement, incorrect records, or biased wording."),
        array("A sample must include most of the population.", "A well-selected smaller sample can be useful. Representativeness and sampling method matter more than the percentage selected alone.")
    ),
    "why" => array(
        "Every later statistical method depends on correctly identifying the population, sample, variable, and target parameter. If those pieces are vague, even flawless calculations can answer the wrong question.",
        "These distinctions also help students evaluate claims in elections, medical studies, product testing, school surveys, and app analytics. Asking \"Who was actually measured?\" is often the fastest way to spot an unsupported conclusion."
    ),
    "knowledge_check" => array(
        stats_mc("kc1", "A district surveys 300 of its 12,000 students. Which group is the sample?", array("a" => "All 12,000 students", "b" => "The 300 surveyed students", "c" => "Only students who answered every question", "d" => "The average response"), "b", "<p>The sample is the group from which data were actually collected: the 300 surveyed students.</p>", "Find the smaller measured group.", "foundational", array("population", "sample")),
        stats_mc("kc2", "A report says 62% of the 500 surveyed users completed a goal. What is 62%?", $roleOptions, "d", "<p>The percentage was calculated from the 500 sampled users, so it is a sample statistic.</p>", "Was the number calculated from everyone or from a selected group?", "foundational", array("parameter", "statistic")),
        stats_classify("kc3", "Classify the variable: number of text messages sent yesterday.", $variableOptions, "c", "<p>Messages are counted in whole numbers, so this is quantitative discrete.</p>", "Counting usually suggests discrete data.", "foundational", array("variables"))
    ),
    "guided_practice" => array(
        stats_classify("g1", "All Grade 12 students in a province are studied through 1,200 selected students. Classify the 1,200 selected students.", $roleOptions, "b", "<p>They are the measured subset, so they form the sample.</p>", "The word selected signals a subset.", "foundational", array("sample")),
        stats_classify("g2", "The true average height of every player in a basketball league is 198.4 cm. Classify 198.4 cm.", $roleOptions, "c", "<p>It describes the entire league population, so it is a parameter.</p>", "The phrase every player points to the population.", "foundational", array("parameter")),
        stats_classify("g3", "Classify the variable: preferred video-game genre.", $variableOptions, "a", "<p>Genre names are unordered labels, making the variable categorical nominal.</p>", "Can the categories be placed in a meaningful order?", "foundational", array("variables")),
        stats_classify("g4", "Classify the variable: satisfaction reported as poor, fair, good, or excellent.", $variableOptions, "b", "<p>The values are categories with a meaningful rank, so the variable is categorical ordinal.</p>", "The categories have an order but unequal gaps.", "foundational", array("variables")),
        stats_classify("g5", "Classify the variable: time in seconds needed to load a website.", $variableOptions, "d", "<p>Time is measured and can take decimal values, so it is quantitative continuous.</p>", "Measurement usually suggests continuous data.", "foundational", array("variables")),
        stats_written("g6", "short-response", "A school studies whether weekly study hours predict final marks. Identify the explanatory and response variables.", "<p><strong>Model answer:</strong> Weekly study hours are the explanatory variable because they are used to predict. Final mark is the response variable because it is the outcome being explained.</p>", "Ask which variable is the possible predictor.", "proficient", array("explanatory", "response")),
        stats_written("g7", "error-analysis", "A student says, 'Jersey number is quantitative because it is written with a number.' Explain the error.", "<p><strong>Model answer:</strong> A jersey number identifies a player; it does not measure an amount. Arithmetic with jersey numbers has no useful meaning, so the variable is categorical nominal.</p>", "Apply the arithmetic test: would an average jersey number describe a player?", "proficient", array("variables", "error analysis")),
        stats_mc("g8", "Why might a helmet company use a sample rather than a census for breaking-strength tests?", array("a" => "A sample always has no bias", "b" => "The test destroys each helmet", "c" => "A census can only include people", "d" => "A statistic is always exact"), "b", "<p>Testing every helmet would destroy the entire population of products. Destructive testing is a practical reason to sample.</p>", "Think about what happens to a helmet during the test.", "proficient", array("census", "sample"))
    ),
    "independent_practice" => array(
        stats_classify("i1", "A factory has 90,000 bulbs. The entire group of 90,000 bulbs is the...", $roleOptions, "a", "<p>The complete group relevant to the study is the population.</p>", "Complete group means population.", "foundational", array("population")),
        stats_classify("i2", "The average lifespan of 400 tested bulbs is 1,140 hours. Classify 1,140 hours.", $roleOptions, "d", "<p>It was calculated from a sample of 400 bulbs, so it is a statistic.</p>", "Look for the group used in the calculation.", "foundational", array("statistic")),
        stats_classify("i3", "Classify the variable: operating system used on a phone.", $variableOptions, "a", "<p>Operating systems are unordered categories.</p>", "These are names, not amounts.", "foundational", array("variables")),
        stats_classify("i4", "Classify the variable: number of goals scored in a match.", $variableOptions, "c", "<p>Goals are counted in whole numbers, so the variable is quantitative discrete.</p>", "Count or measure?", "foundational", array("variables")),
        stats_classify("i5", "Classify the variable: distance travelled to school.", $variableOptions, "d", "<p>Distance is measured and may take any value in an interval, so it is continuous.</p>", "A decimal distance is possible.", "foundational", array("variables")),
        stats_classify("i6", "Classify the variable: contest placement of first, second, or third.", $variableOptions, "b", "<p>The categories have a meaningful order, making them categorical ordinal.</p>", "The values rank outcomes.", "proficient", array("variables")),
        stats_written("i7", "short-response", "A streaming service records device type and minutes watched for each session. Identify the individual and both variables with their types.", "<p><strong>Model answer:</strong> One viewing session is the individual. Device type is categorical nominal. Minutes watched is quantitative continuous because time is measured.</p>", "One row of the data would describe what?", "proficient", array("individual", "variables")),
        stats_written("i8", "short-response", "Explain one advantage and one limitation of a census.", "<p><strong>Model answer:</strong> A census attempts to include the entire population and can describe small subgroups. It may still be expensive, slow, incomplete because of nonresponse, or impossible when measurement is destructive.</p>", "Avoid claiming that a census is automatically perfect.", "proficient", array("census")),
        stats_written("i9", "short-response", "A study asks whether notification frequency is related to assignments completed. Identify the explanatory and response variables.", "<p><strong>Model answer:</strong> Notification frequency is explanatory. Number of assignments completed is the response outcome.</p>", "The wording 'is related to' still has a predictor and outcome here.", "proficient", array("explanatory", "response")),
        stats_written("i10", "short-response", "Design a study description for a school homework survey. Name the population, sample, individual, variable, parameter, and statistic.", "<p><strong>Model answer:</strong> Population: all 2,400 students. Sample: 200 randomly selected students. Individual: one student. Variable: weekly homework minutes. Parameter: the true mean for all 2,400. Statistic: the sample mean calculated from the 200 responses. Other coherent designs are acceptable.</p>", "Use one consistent group and one clearly measured variable throughout.", "advanced", array("research scenario"))
    ),
    "summary" => array(
        "A population is the whole group a conclusion describes; a sample is the measured subset.",
        "A parameter describes a population, while a statistic describes a sample and estimates a parameter.",
        "Individuals are the observational units, variables are the characteristics recorded, and data are the recorded values.",
        "Categorical variables are labels; quantitative variables are meaningful numerical amounts.",
        "Explanatory variables may predict responses, but those labels alone do not establish causation."
    ),
    "exit_ticket" => array(
        stats_written("e1", "short-response", "In one clear sentence, distinguish a parameter from a statistic and include an example.", "<p><strong>Model answer:</strong> A parameter describes a whole population, such as the true mean study time of all students, while a statistic describes a sample, such as the mean for 100 surveyed students.</p>", "Use the words population and sample.", "proficient", array("parameter", "statistic")),
        stats_classify("e2", "Classify a five-star product rating when the stars represent ordered satisfaction categories.", $variableOptions, "b", "<p>The stars are ordered categories. Unless a particular analysis justifies treating gaps as equal, the safest classification is categorical ordinal.</p>", "Ordered does not automatically mean quantitative.", "proficient", array("variables"))
    )
);
