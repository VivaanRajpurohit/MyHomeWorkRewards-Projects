<?php
$spreadOptions = array("a" => "Standard deviation", "b" => "Standard error");
return array(
    "overview" => "Standard error measures how much an estimator changes across random samples. It is not a record of mistakes. This lesson connects standard error for means and proportions with sample size, precision, bias, simulation, and future margins of error.",
    "objectives" => array("Distinguish standard deviation from standard error.", "Calculate standard error for means and proportions with known or estimated population quantities.", "Interpret standard error as sampling variability.", "Solve sample-size comparison and reverse sample-size problems.", "Explain why precision does not guarantee accuracy and connect standard error to margin of error."),
    "prerequisites" => array("Understand sampling distributions of means and proportions.", "Use square roots and solve simple equations.", "Distinguish bias from variability."),
    "vocabulary" => array(
        array("Standard deviation", "Spread among individual observations in a population or sample."), array("Standard error", "Spread of a statistic across repeated random samples."),
        array("Estimated standard error", "A standard error using sample quantities when population values are unknown."), array("Precision", "Stability of an estimator across samples; greater precision means smaller standard error."),
        array("Accuracy", "Closeness to the true target, involving bias as well as variability."), array("Margin of error", "A critical value multiplied by standard error."),
        array("Critical value", "A multiplier chosen for a confidence level or probability rule."), array("Sampling variability", "Natural sample-to-sample change in a statistic.")
    ),
    "sections" => array(
        array("title" => "Two Different Kinds of Spread", "content" => array(
            "<p><strong>Standard deviation</strong> describes variation among individual observations. If students' study times range widely, the population standard deviation \\(\\sigma\\) or sample standard deviation \\(s\\) is large. <strong>Standard error</strong> describes variation among statistics, such as means from many samples of 50 students.</p>",
            "<p>Ask what the observations in the distribution are. If they are individual times, use standard deviation language. If they are sample means, proportions, slopes, or other estimates, their spread is a standard error.</p>",
            "<p>Standard error is not the number of data-entry mistakes or a rating of researcher competence. A large standard error means the estimator naturally changes substantially across samples. That may result from high individual variability, a small sample, or a proportion near its highest-variability range.</p>",
            array("type" => "definition", "label" => "Memory sentence", "html" => "<p>Standard deviation spreads <strong>people or observations</strong>; standard error spreads <strong>statistics or estimates</strong>.</p>")
        )),
        array("title" => "Standard Error of a Mean", "content" => array(
            "<p>When the population standard deviation is known, the sample-mean standard error is \\(SE_{\\bar{x}}=\\sigma/\\sqrt n\\). If \\(\\sigma\\) is unknown, it is commonly estimated by substituting the sample standard deviation: \\(SE_{\\bar{x}}=s/\\sqrt n\\).</p>",
            array("type" => "formula", "label" => "Mean standard error", "html" => "<p>\\[SE_{\\bar{x}}=\\frac{\\sigma}{\\sqrt n}\\qquad\\text{or estimate}\\qquad \\widehat{SE}_{\\bar{x}}=\\frac{s}{\\sqrt n}\\]</p>"),
            "<p>If \\(s=18\\) from a sample of 36, estimated SE is \\(18/6=3\\). The individual observations have standard deviation 18 units, while means from repeated samples of 36 would typically vary by about 3 units.</p>",
            "<p>When \\(\\sigma\\) is unknown and estimated by \\(s\\), later inference often uses a t-distribution to account for extra uncertainty. This lesson focuses on interpreting and calculating the standard error itself.</p>"
        )),
        array("title" => "Standard Error of a Proportion", "content" => array(
            "<p>For probability calculations under a known population proportion, use \\(SE_{\\hat p}=\\sqrt{p(1-p)/n}\\). For estimating an unknown proportion from sample data, substitute \\(\\hat p\\):</p>",
            array("type" => "formula", "label" => "Proportion standard error", "html" => "<p>\\[SE_{\\hat p}=\\sqrt{\\frac{p(1-p)}n}\\qquad\\text{or estimate}\\qquad \\widehat{SE}_{\\hat p}=\\sqrt{\\frac{\\hat p(1-\\hat p)}n}\\]</p>"),
            "<p>Use p when a model states the true rate and asks about repeated samples. Use p-hat when the true rate is unknown and the goal is to estimate uncertainty from one observed sample. For p-hat=0.60 and n=400, estimated SE is \\(\\sqrt{0.60(0.40)/400}\\approx0.0245\\).</p>",
            "<p>The proportion formula is largest near 0.50 and smaller near 0 or 1 for fixed n. Normal approximation conditions still matter; a small estimated SE does not make a highly skewed small-count distribution normal.</p>"
        )),
        array("title" => "Sample Size and Precision", "content" => array(
            "<p>Both mean and proportion standard errors contain \\(1/\\sqrt n\\). Quadrupling n halves SE, multiplying n by nine reduces it to one-third, and doubling n multiplies it by about 0.707. Precision improves with diminishing returns.</p>",
            "<p>To reach a target mean SE \\(E\\), solve \\(E=\\sigma/\\sqrt n\\), giving \\(n=(\\sigma/E)^2\\). With \\(\\sigma=24\\) and target SE=3, \\(n=(24/3)^2=64\\). Always round sample size up when a non-integer result appears because rounding down would miss the precision target.</p>",
            "<p>For a proportion with known planning value p, solve \\(E^2=p(1-p)/n\\), so \\(n=p(1-p)/E^2\\). When p is unknown at planning time, p=0.50 gives the largest conservative standard error.</p>",
            array("type" => "formula", "label" => "Mean sample-size target", "html" => "<p>\\[n=\\left(\\frac{\\sigma}{E}\\right)^2\\]</p>")
        )),
        array("title" => "Precision, Bias, and Margin of Error", "content" => array(
            "<p>Smaller standard error means estimates cluster more tightly, so the estimator is more precise. It does not guarantee accuracy. A convenience sample can produce a low-SE estimate centred away from the population truth. Standard error measures random sampling variation under the method; it does not include every source of bias or measurement error.</p>",
            "<p>A standard error of 2.4 points means sample statistics typically vary by a few points around their sampling-distribution centre. It does not mean every estimate lies exactly 2.4 points from the truth or that the study made 2.4 errors.</p>",
            "<p>Simulation estimates standard error by taking the standard deviation of many simulated sample statistics. As repetitions grow, this simulated spread stabilizes near the theoretical value when the model is correct.</p>",
            array("type" => "formula", "label" => "Preview of margin of error", "html" => "<p>\\[\\text{margin of error}=\\text{critical value}\\times\\text{standard error}\\]</p>"),
            "<p>This connection explains why smaller SE creates narrower confidence intervals and stronger ability to detect departures in hypothesis tests. Those procedures come later, but their precision begins here.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Mean SE with known sigma", "scenario" => "Population sigma=20 and n=100.", "steps" => array("Use \\(SE=\\sigma/\\sqrt n\\).", "\\(SE=20/10=2\\).", "This is spread of sample means, not individuals."), "conclusion" => "Means from samples of 100 typically vary by about 2 units around the population mean."),
        array("title" => "Estimated proportion SE", "scenario" => "A sample of 400 has p-hat=0.60.", "steps" => array("The true p is not supplied, so use p-hat for estimated SE.", "\\(\\sqrt{0.60(0.40)/400}=\\sqrt{0.0006}\\approx0.0245\\)."), "conclusion" => "The estimated sampling spread of the sample proportion is about 0.0245, or 2.45 percentage points."),
        array("title" => "Reverse sample size", "scenario" => "Population sigma=30; desired mean SE is at most 4.", "steps" => array("Solve \\(n=(30/4)^2=56.25\\).", "Sample size must be a whole number and must meet, not exceed, the target SE.", "Round up to 57."), "conclusion" => "At least 57 independent observations are needed under the formula."),
        array("title" => "Precision without accuracy", "scenario" => "A huge voluntary online poll has SE 0.002 but omits people without internet access.", "steps" => array("The very small SE indicates low random variation among repeated polls using the same method.", "Undercoverage and voluntary response may shift the centre.", "The reported SE does not measure that systematic shift."), "conclusion" => "The poll can be highly precise and still inaccurate for the target population."),
    ),
    "misconceptions" => array(
        array("Standard error measures mistakes.", "It measures natural sampling variability."), array("Standard deviation and SE are interchangeable.", "They describe different distributions: individuals versus statistics."),
        array("Increasing n changes population standard deviation.", "Sigma belongs to the population and remains fixed; SE changes."), array("Low SE eliminates bias.", "Bias shifts the centre and is not included in ordinary SE."),
        array("Doubling n halves SE.", "Quadrupling n halves it."), array("SE becomes exactly zero for a large finite n.", "It approaches zero as n grows under the model but is not zero for an ordinary finite sample with positive variability.")
    ),
    "why" => array("Standard error converts the vague idea of 'samples differ' into a measurable spread. It is the engine behind margins of error, confidence intervals, hypothesis tests, and claims of statistical precision.", "It also encourages honest reporting: a large sample may produce a precise estimate, but selection and measurement still determine whether that estimate targets the right value."),
    "knowledge_check" => array(
        stats_classify("kc1", "Spread of individual student study times.", $spreadOptions, "a", "<p>Individuals are the observations, so this is standard deviation.</p>", "What does one value represent?", "foundational", array("SD versus SE")),
        stats_classify("kc2", "Spread of sample means from samples of 50 students.", $spreadOptions, "b", "<p>The values are statistics, so their spread is standard error.</p>", "Statistics across samples.", "foundational", array("SD versus SE")),
        stats_numeric("kc3", "sigma=12, n=36. Find mean SE.", 2, "<p>\\(12/6=2\\).</p>", "Square root n.", "foundational", array("mean SE"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "s=15, n=25. Estimate mean SE.", 3, "<p>\\(15/5=3\\).</p>", "Use s when sigma unknown.", "foundational", array("mean SE")),
        stats_numeric("g2", "p=0.4, n=100. Find proportion SE, four decimals.", 0.049, "<p>\\(\\sqrt{0.4(0.6)/100}\\approx0.0490\\).</p>", "Known-p formula.", "foundational", array("proportion SE"), 0.0001),
        stats_numeric("g3", "p-hat=0.25, n=100. Estimate proportion SE, four decimals.", 0.0433, "<p>\\(\\sqrt{0.25(0.75)/100}\\approx0.0433\\).</p>", "Use p-hat for estimation.", "proficient", array("proportion SE"), 0.0001),
        stats_mc("g4", "If n is multiplied by 9, SE is multiplied by...", array("a" => "1/9", "b" => "1/3", "c" => "3", "d" => "9"), "b", "<p>Square root of 9 is 3, so SE becomes one-third.</p>", "Square-root rule.", "foundational", array("sample size")),
        stats_numeric("g5", "sigma=24 and target mean SE=3. Find required n.", 64, "<p>\\((24/3)^2=64\\).</p>", "Ratio then square.", "proficient", array("reverse n")),
        stats_written("g6", "error-analysis", "A student says low SE proves an unbiased sample. Explain.", "<p><strong>Model answer:</strong> Low SE only means repeated estimates under that method are tightly clustered. If the method undercovers a group, the cluster can be centred away from the true parameter.</p>", "Spread does not locate centre.", "advanced", array("precision", "bias"))
    ),
    "independent_practice" => array(
        stats_classify("i1", "Variation among individual battery lifetimes.", $spreadOptions, "a", "<p>This is standard deviation of observations.</p>", "Individuals.", "foundational", array("SD versus SE")),
        stats_classify("i2", "Variation among average battery lifetimes from repeated samples.", $spreadOptions, "b", "<p>This is standard error of sample means.</p>", "Statistics.", "foundational", array("SD versus SE")),
        stats_numeric("i3", "sigma=18, n=81. Find mean SE.", 2, "<p>\\(18/9=2\\).</p>", "Square root 81.", "foundational", array("mean SE")),
        stats_numeric("i4", "s=20, n=64. Estimate mean SE.", 2.5, "<p>\\(20/8=2.5\\).</p>", "Use s over sqrt n.", "foundational", array("mean SE")),
        stats_numeric("i5", "p=0.5, n=400. Find proportion SE.", 0.025, "<p>\\(\\sqrt{0.25/400}=0.025\\).</p>", "Maximum-variability p.", "proficient", array("proportion SE")),
        stats_numeric("i6", "sigma=16, target SE=2. Find n.", 64, "<p>\\((16/2)^2=64\\).</p>", "Solve and square.", "proficient", array("reverse n")),
        stats_numeric("i7", "Current n=100. What n roughly halves SE?", 400, "<p>Multiply sample size by four: 400.</p>", "Quadruple.", "foundational", array("sample size")),
        stats_written("i8", "short-response", "Interpret SE=2.4 points without calling it error count.", "<p><strong>Model answer:</strong> Across repeated random samples of the stated size, the sample statistic typically varies by a few points around its sampling-distribution centre.</p>", "Typical spread.", "proficient", array("interpretation")),
        stats_written("i9", "short-response", "Explain the margin-of-error connection.", "<p><strong>Model answer:</strong> A margin of error multiplies standard error by a critical value. Smaller SE therefore produces a narrower interval at the same confidence level.</p>", "Multiplier times SE.", "proficient", array("margin of error")),
        stats_written("i10", "short-response", "How could simulation estimate SE?", "<p><strong>Model answer:</strong> Repeatedly draw samples under the model, calculate the statistic each time, then calculate the standard deviation of those simulated statistics.</p>", "Spread of simulated estimates.", "proficient", array("simulation"))
    ),
    "summary" => array("Standard deviation describes individuals; standard error describes sample statistics.", "Mean SE is sigma/sqrt(n), estimated with s when sigma is unknown.", "Proportion SE uses p for a known model and p-hat for estimation.", "SE decreases by the square root of sample-size growth.", "Smaller SE means greater precision, not automatic freedom from bias."),
    "exit_ticket" => array(
        stats_numeric("e1", "sigma=25 and desired SE=2.5. Find n.", 100, "<p>\\((25/2.5)^2=100\\).</p>", "Ratio then square.", "proficient", array("reverse n")),
        stats_written("e2", "short-response", "Distinguish accuracy and precision in a sampling distribution.", "<p><strong>Model answer:</strong> Accuracy concerns whether the distribution is centred near the true parameter; precision concerns how narrowly estimates cluster around their centre.</p>", "Centre versus spread.", "proficient", array("bias", "precision"))
    )
);
