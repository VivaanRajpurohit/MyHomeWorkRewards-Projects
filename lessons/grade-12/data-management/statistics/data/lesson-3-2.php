<?php
return array(
    "overview" => "The Central Limit Theorem explains why sample means often follow a normal pattern even when individual values do not. It also gives the centre and spread needed to measure how unusual a sample mean is.",
    "objectives" => array("State the Central Limit Theorem in plain language and notation.", "Find the mean and standard error of a sampling distribution of means.", "Explain how sample size affects shape and spread.", "Check random, independence, 10%, and normal/large-sample conditions.", "Use and interpret a z-score for a sample mean."),
    "prerequisites" => array("Distinguish population, sample, and sampling distributions.", "Calculate means, standard deviations, square roots, and z-scores.", "Recognize normal, skewed, uniform, and bimodal shapes."),
    "vocabulary" => array(
        array("Central Limit Theorem (CLT)", "A result describing the increasingly normal sampling distribution of the mean as sample size grows under appropriate conditions."),
        array("Population mean", "The mean of individual population values, written \\(\\mu\\)."), array("Population standard deviation", "The spread of individual population values, written \\(\\sigma\\)."),
        array("Sample mean", "The mean from one sample, written \\(\\bar{x}\\)."), array("Standard error", "The standard deviation of a sampling distribution."),
        array("10% condition", "When sampling without replacement, require \\(n\\le0.10N\\) as a practical independence guideline."),
        array("Approximately normal", "Close enough to a normal model for the intended calculation."), array("z-score", "A standardized distance from the mean in standard-error units.")
    ),
    "sections" => array(
        array("title" => "What the CLT Actually Says", "content" => array(
            "<p>Suppose a population has finite mean \\(\\mu\\) and standard deviation \\(\\sigma\\). Repeatedly select random samples of size \\(n\\) and calculate \\(\\bar{x}\\). As \\(n\\) becomes sufficiently large, the sampling distribution of \\(\\bar{x}\\) becomes approximately normal, even when the population itself is not normal.</p>",
            "<p>The theorem concerns the distribution of sample means, not the distribution of individual data in a sample. A right-skewed population remains right-skewed. A particular sample may still look irregular. It is the histogram of means from many samples that moves toward a bell shape.</p>",
            "<p>If the population is exactly normal, the sampling distribution of the mean is normal for every sample size. If the population is moderately nonnormal, a modest sample may be enough. Strong skewness, heavy tails, or extreme outliers require larger samples.</p>",
            array("type" => "warning", "label" => "No magical n=30", "html" => "<p>Thirty is a common rough guideline, not a universal switch. Required sample size depends on population shape and outliers.</p>")
        ), "simulation" => "sampling"),
        array("title" => "Centre: The Mean Stays Put", "content" => array(
            "<p>The sample mean is unbiased for the population mean under random sampling. Some random samples contain more high values and produce \\(\\bar{x}>\\mu\\); others contain more low values and produce \\(\\bar{x}<\\mu\\). Across all samples, these differences balance.</p>",
            array("type" => "formula", "label" => "Sampling-distribution mean", "html" => "<p>\\[\\mu_{\\bar{x}}=\\mu\\]</p>"),
            "<p>The symbol \\(\\mu_{\\bar{x}}\\) means the mean of all possible sample means. It is not the mean inside one sample. Increasing \\(n\\) does not move this centre; it makes means cluster more tightly around it.</p>",
            "<p>Unbiasedness assumes the sampling process itself is not systematically distorted. The formula does not rescue a convenience sample or a measuring instrument with a fixed error.</p>"
        )),
        array("title" => "Spread: Standard Error Shrinks", "content" => array(
            array("type" => "formula", "label" => "Standard error of the sample mean", "html" => "<p>\\[\\sigma_{\\bar{x}}=SE_{\\bar{x}}=\\frac{\\sigma}{\\sqrt n}\\]</p>"),
            "<p>The numerator \\(\\sigma\\) describes variation among individuals. Dividing by \\(\\sqrt n\\) gives variation among sample means. Averaging more independent observations makes extreme individual values balance, so means are less variable than individual observations.</p>",
            "<p>The square-root relationship creates diminishing returns. To cut standard error in half, multiply sample size by four. To reduce it to one-third, multiply sample size by nine. Doubling \\(n\\) multiplies standard error by \\(1/\\sqrt2\\approx0.707\\), not by one-half.</p>",
            "<p>For \\(\\sigma=12\\), sample sizes 9, 36, and 144 give standard errors 4, 2, and 1. The centre remains \\(\\mu\\), while the distribution narrows predictably.</p>"
        )),
        array("title" => "Check Conditions Before the Normal Model", "content" => array(
            "<p>The <strong>random condition</strong> asks whether data come from a random sample or suitable randomized process. The <strong>independence condition</strong> asks whether observations influence one another. Sampling every student from the same friend group or measuring repeated values from one person may violate independence.</p>",
            "<p>When sampling without replacement from a finite population, the 10% condition \\(n\\le0.10N\\) lets us treat draws as approximately independent. If 40 students are sampled, the population should contain at least 400 under this guideline.</p>",
            "<p>For shape, a normal population permits any \\(n\\). For a nonnormal or unknown population, judge sample size relative to skewness and outliers. A symmetric population without strong outliers may need less than 30; a severely skewed population may need much more.</p>",
            array("type" => "definition", "label" => "Condition conclusion", "html" => "<p>State the evidence: \"The sample was random; 40 is less than 10% of 2,000; and n=40 is reasonably large for the moderately skewed population, so a normal model for \\(\\bar{x}\\) is appropriate.\"</p>")
        )),
        array("title" => "Standardize a Sample Mean", "content" => array(
            "<p>When the sampling distribution is approximately normal, a z-score measures how many standard errors an observed sample mean lies from \\(\\mu\\):</p>",
            array("type" => "formula", "label" => "Sample-mean z-score", "html" => "<p>\\[z=\\frac{\\bar{x}-\\mu}{\\sigma/\\sqrt n}\\]</p>"),
            "<p>The numerator is the difference between observed and expected means. The denominator is standard error, not population standard deviation. If \\(\\mu=80\\), \\(\\sigma=12\\), \\(n=36\\), and \\(\\bar{x}=83\\), then \\(SE=2\\) and \\(z=(83-80)/2=1.5\\). The sample mean is 1.5 standard errors above the population mean.</p>",
            "<p>A z-score alone is not a probability. Use a standard normal table or calculator to convert it to an area, then interpret that area as a long-run proportion of random samples. Positive z lies above the mean; negative z lies below.</p>",
            "<p>The CLT does not permit biased data, dependent observations, infinite or undefined spread, or any sample size regardless of shape. It is a theorem with conditions, not a permission slip for every dataset.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Centre and spread", "scenario" => "A population has mean 80 and standard deviation 12. Random samples of 36 are taken.", "steps" => array("Centre: \\(\\mu_{\\bar{x}}=\\mu=80\\).", "Standard error: \\(12/\\sqrt{36}=12/6=2\\).", "If the population is normal or conditions support CLT, sample means follow an approximately normal distribution."), "conclusion" => "The sampling distribution is centred at 80 with standard error 2."),
        array("title" => "Compare sample sizes", "scenario" => "For sigma=18, compare n=9 and n=81.", "steps" => array("For n=9, \\(SE=18/3=6\\).", "For n=81, \\(SE=18/9=2\\).", "Sample size grew by nine, so standard error became one-third."), "conclusion" => "Both distributions share the population mean, but n=81 is three times as precise by standard error."),
        array("title" => "Check the 10% condition", "scenario" => "A random sample of 75 is drawn without replacement from 500 users.", "steps" => array("Ten percent of 500 is 50.", "The sample 75 exceeds 50, so \\(n\\le0.10N\\) fails.", "The ordinary standard-error formula may overstate spread; use a finite-population correction or redesign with a smaller sample if the course procedure requires independence."), "conclusion" => "The 10% condition is not satisfied."),
        array("title" => "z-score for a mean", "scenario" => "mu=50, sigma=10, n=25, and x-bar=54.", "steps" => array("Standard error: \\(10/\\sqrt{25}=2\\).", "Difference from centre: \\(54-50=4\\).", "Standardize: \\(z=4/2=2\\)."), "conclusion" => "The sample mean is two standard errors above the population mean."),
    ),
    "misconceptions" => array(
        array("The population becomes normal.", "The sampling distribution of means becomes approximately normal."), array("Every sample becomes normal.", "The theorem concerns sample means across repetitions."),
        array("Every sample mean equals mu.", "Means vary; their distribution is centred at mu."), array("Doubling n halves standard error.", "Quadrupling n halves it because of the square root."),
        array("n=30 always works.", "Needed size depends on skewness, tails, and outliers."), array("The CLT fixes biased sampling.", "It describes random-sampling behaviour under conditions; bias remains bias.")
    ),
    "why" => array("The CLT lets researchers use normal probabilities for sample means drawn from many nonnormal real populations. That is why normal-based inference appears throughout science, polling, quality control, and analytics.", "It also explains a practical truth: averages of larger groups are more stable. The square-root rule quantifies how much extra sample size is needed for a desired increase in precision."),
    "knowledge_check" => array(
        stats_numeric("kc1", "For mu=70, what is the mean of the sampling distribution?", 70, "<p>\\(\\mu_{\\bar{x}}=\\mu=70\\).</p>", "Centre stays put.", "foundational", array("centre")),
        stats_numeric("kc2", "For sigma=15 and n=25, find standard error.", 3, "<p>\\(15/5=3\\).</p>", "Divide by square root n.", "foundational", array("SE")),
        stats_mc("kc3", "To cut standard error in half, multiply n by...", array("a" => "2", "b" => "4", "c" => "8", "d" => "10"), "b", "<p>Because SE uses \\(\\sqrt n\\), multiplying n by 4 doubles the denominator.</p>", "Square-root rule.", "foundational", array("sample size"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "sigma=20, n=100. Find SE.", 2, "<p>\\(20/10=2\\).</p>", "Square root 100.", "foundational", array("SE")),
        stats_numeric("g2", "sigma=24, n=36. Find SE.", 4, "<p>\\(24/6=4\\).</p>", "Square root 36.", "foundational", array("SE")),
        stats_numeric("g3", "mu=100, sigma=16, n=64, x-bar=104. Find z.", 2, "<p>SE=2 and \\(z=(104-100)/2=2\\).</p>", "Find SE first.", "proficient", array("z-score")),
        stats_mc("g4", "n=40 from N=300 without replacement. Does 10% condition hold?", array("a" => "Yes", "b" => "No"), "b", "<p>Ten percent of 300 is 30; 40 exceeds 30.</p>", "Compare n with 0.10N.", "proficient", array("conditions")),
        stats_written("g5", "short-response", "Describe shape for samples of 8 from an exactly normal population.", "<p><strong>Model answer:</strong> The sampling distribution of the mean is exactly normal because the population is normal; a large sample is not required.</p>", "Population normality is sufficient.", "proficient", array("shape")),
        stats_written("g6", "error-analysis", "A student divides by sigma rather than sigma/sqrt(n) for a sample-mean z-score.", "<p><strong>Model answer:</strong> Sigma measures individual spread. Sample means vary less, so the denominator must be standard error \\(\\sigma/\\sqrt n\\). Using sigma understates how unusual an extreme mean is.</p>", "Individual versus mean spread.", "advanced", array("z-score"))
    ),
    "independent_practice" => array(
        stats_numeric("i1", "mu=42, sigma=12, n=36. Find sampling mean.", 42, "<p>The mean remains 42.</p>", "Unbiased centre.", "foundational", array("centre")),
        stats_numeric("i2", "Using the same values, find SE.", 2, "<p>\\(12/6=2\\).</p>", "Square root 36.", "foundational", array("SE")),
        stats_numeric("i3", "Using the same setting, find z for x-bar=45.", 1.5, "<p>\\((45-42)/2=1.5\\).</p>", "Difference over SE.", "proficient", array("z-score")),
        stats_numeric("i4", "sigma=30. What n gives SE=5?", 36, "<p>\\(30/\\sqrt n=5\\Rightarrow\\sqrt n=6\\Rightarrow n=36\\).</p>", "Solve for square root n.", "proficient", array("reverse sample size")),
        stats_mc("i5", "n=60 from N=1000. Does 10% hold?", array("a" => "Yes", "b" => "No"), "a", "<p>60 is at most 100, so the condition holds.</p>", "0.10N=100.", "foundational", array("conditions")),
        stats_written("i6", "short-response", "Compare sampling distributions for n=9, 36, and 144.", "<p><strong>Model answer:</strong> All are centred at mu. Their standard errors are sigma/3, sigma/6, and sigma/12, so spread narrows as n grows. For a nonnormal population, shape generally becomes more nearly normal as well.</p>", "Centre, spread, shape.", "proficient", array("sample size")),
        stats_written("i7", "short-response", "Why can a skewed population produce normal-looking sample means?", "<p><strong>Model answer:</strong> Means combine many independent observations. High and low values balance across samples, and the CLT describes the resulting aggregate distribution as n grows.</p>", "Averaging stabilizes.", "proficient", array("intuition")),
        stats_written("i8", "short-response", "List what the CLT does not say.", "<p><strong>Model answer:</strong> It does not make the population or one sample normal, force every mean to equal mu, validate biased or dependent data, or guarantee that a fixed n such as 30 is always enough.</p>", "Name at least three false claims.", "advanced", array("limitations"))
    ),
    "summary" => array("The CLT concerns the sampling distribution of sample means.", "Its centre is \\(\\mu\\) and standard error is \\(\\sigma/\\sqrt n\\).", "Larger n narrows spread and usually improves normal approximation.", "Check random, independence/10%, and population-shape conditions.", "A sample-mean z-score uses standard error in the denominator."),
    "exit_ticket" => array(
        stats_numeric("e1", "mu=60, sigma=18, n=81, x-bar=64. Find z, four decimals.", 2, "<p>SE=2 and \\(z=(64-60)/2=2\\).</p>", "Find SE first.", "proficient", array("z-score")),
        stats_written("e2", "short-response", "Correct: 'The CLT makes a large sample normal.'", "<p><strong>Model answer:</strong> The CLT says the distribution of sample means from many sufficiently large random samples becomes approximately normal; it does not say one sample's raw data become normal.</p>", "Distribution of what?", "proficient", array("CLT statement"))
    )
);
