<?php
return array(
    "overview" => "Once a sampling distribution of means is described, normal probabilities answer how often random samples produce means above, below, or between cutoffs. This lesson turns a context into a five-step probability solution.",
    "objectives" => array("Describe the centre, spread, and shape of a sample-mean distribution.", "Calculate one-tail and between-value probabilities.", "Distinguish an individual z-score from a sample-mean z-score.", "Find a sample-mean cutoff from a percentile.", "Compare probability behaviour as sample size changes."),
    "prerequisites" => array("Use the CLT and standard error of a mean.", "Calculate and interpret z-scores.", "Use a standard normal table or normal calculator."),
    "vocabulary" => array(
        array("Sampling distribution of means", "The distribution of \\(\\bar{x}\\) over all random samples of size \\(n\\)."), array("Lower-tail probability", "The area below a cutoff."),
        array("Upper-tail probability", "The area above a cutoff."), array("Between probability", "The area between two cutoffs."),
        array("Percentile cutoff", "A value with a stated proportion of the distribution below it."), array("Inverse normal", "Finding a value from a probability instead of probability from a value."),
        array("Finite population correction", "An optional adjustment when sampling a substantial fraction without replacement."), array("Contextual interpretation", "A statement about the long-run proportion of random samples meeting the event.")
    ),
    "sections" => array(
        array("title" => "A Five-Step Probability Procedure", "content" => array(
            "<p><strong>Step 1:</strong> Identify population mean \\(\\mu\\), population standard deviation \\(\\sigma\\), sample size \\(n\\), and the requested sample-mean event. <strong>Step 2:</strong> describe the sampling distribution: centre \\(\\mu_{\\bar{x}}=\\mu\\), spread \\(\\sigma_{\\bar{x}}=\\sigma/\\sqrt n\\), and shape after checking conditions.</p>",
            "<p><strong>Step 3:</strong> convert the sample-mean cutoff to \\(z=(\\bar{x}-\\mu)/(\\sigma/\\sqrt n)\\). <strong>Step 4:</strong> use the standard normal distribution to find the requested area. <strong>Step 5:</strong> interpret it as the proportion of random samples of size \\(n\\) whose means meet the condition.</p>",
            "<p>Writing the distribution before the z-score prevents denominator errors and creates a place to justify normality. Draw a small bell curve and shade the requested side or interval so the calculator area matches the words.</p>",
            array("type" => "formula", "label" => "Model", "html" => "<p>\\[\\bar X\\approx N\\left(\\mu,\\frac{\\sigma}{\\sqrt n}\\right)\\]</p><p>This notation says the sample mean is approximately normal with centre \\(\\mu\\) and standard error \\(\\sigma/\\sqrt n\\).</p>")
        )),
        array("title" => "One-Tail Probabilities", "content" => array(
            "<p>For an upper tail, standardize the cutoff and find area to the right. If assignment time has \\(\\mu=42\\), \\(\\sigma=12\\), and \\(n=36\\), then \\(SE=2\\). A sample mean above 45 has \\(z=(45-42)/2=1.5\\). Standard normal area above 1.5 is about 0.0668.</p>",
            "<p>Interpretation: in repeated random samples of 36 students, about 6.68% of sample means would exceed 45 minutes, assuming conditions and the population model are appropriate. It does not mean 6.68% of individual students exceed 45 minutes.</p>",
            "<p>For a lower tail, use area to the left. The same setting gives \\(P(\\bar X\\lt39)\\) with \\(z=-1.5\\), also 0.0668 by symmetry.</p>",
            array("type" => "warning", "label" => "Tail direction", "html" => "<p>Greater than means right tail; less than means left tail. A correct z-score with the wrong tail gives the complement of the answer.</p>")
        )),
        array("title" => "Probabilities Between Two Means", "content" => array(
            "<p>For \\(P(a\\lt\\bar X\\lt b)\\), standardize both endpoints and subtract cumulative areas. In the assignment example, 40 to 44 minutes corresponds to z-scores \\((40-42)/2=-1\\) and \\((44-42)/2=1\\). The standard normal area between -1 and 1 is about 0.6827.</p>",
            "<p>Draw both cutoffs and shade the centre. Calculator functions may accept lower bound, upper bound, mean, and standard deviation directly; even then, write the standard error so the model is visible.</p>",
            "<p>Continuous normal probability assigns zero area to an exact point, so \\(P(a\\lt\\bar X\\lt b)\\) and \\(P(a\\le\\bar X\\le b)\\) are equal under the model. Do not confuse this with discrete counts.</p>",
            array("type" => "formula", "label" => "Two z-scores", "html" => "<p>\\[z_a=\\frac{a-\\mu}{\\sigma/\\sqrt n},\\qquad z_b=\\frac{b-\\mu}{\\sigma/\\sqrt n}\\]</p>")
        )),
        array("title" => "Individuals and Sample Means Use Different Spread", "content" => array(
            "<p>An individual value uses \\(z=(x-\\mu)/\\sigma\\). A sample mean uses \\(z=(\\bar{x}-\\mu)/(\\sigma/\\sqrt n)\\). The numerator may look identical, but the reference distributions differ.</p>",
            "<p>If individual scores have \\(\\mu=70\\) and \\(\\sigma=12\\), an individual score of 76 has z=0.5. For a sample mean of 76 from \\(n=36\\), SE=2 and z=3. The average of 36 being six points high is much rarer than one individual being six points high.</p>",
            "<p>Before choosing a denominator, ask what the random variable represents: one person or the mean of \\(n\\) people. Labels such as \\(X\\) and \\(\\bar X\\) should remain distinct.</p>"
        )),
        array("title" => "Cutoffs and Sample-Size Effects", "content" => array(
            "<p>Inverse-normal questions provide an area and ask for a sample-mean cutoff. If the highest 10% is requested, the cutoff is the 90th percentile, with \\(z\\approx1.2816\\). Convert back using \\(\\bar{x}=\\mu+z(\\sigma/\\sqrt n)\\).</p>",
            "<p>For \\(\\mu=50\\), \\(\\sigma=10\\), and \\(n=25\\), SE=2. The highest-10% cutoff is \\(50+1.2816(2)\\approx52.56\\). About 10% of random-sample means exceed this value.</p>",
            "<p>As \\(n\\) increases, centre stays fixed, standard error decreases, and a fixed cutoff away from \\(\\mu\\) has a larger absolute z-score. Extreme sample means therefore become less likely. When sampling a substantial fraction of finite \\(N\\), an enrichment adjustment multiplies SE by \\(\\sqrt{(N-n)/(N-1)}\\).</p>",
            array("type" => "formula", "label" => "Inverse cutoff", "html" => "<p>\\[\\bar{x}=\\mu+z^*\\left(\\frac{\\sigma}{\\sqrt n}\\right)\\]</p>")
        ))
    ),
    "worked_examples" => array(
        array("title" => "Upper-tail assignment time", "scenario" => "mu=42, sigma=12, n=36. Find P(x-bar>45).", "steps" => array("SE=12/6=2; conditions support a normal mean model.", "z=(45-42)/2=1.5.", "Upper-tail area P(Z>1.5)=0.0668."), "conclusion" => "About 6.68% of random samples of 36 have mean time above 45 minutes."),
        array("title" => "Between two means", "scenario" => "Using the same model, find the probability that x-bar is between 40 and 44.", "steps" => array("z for 40 is -1; z for 44 is 1.", "Area between -1 and 1 is 0.6827."), "conclusion" => "About 68.27% of sample means fall from 40 to 44 minutes."),
        array("title" => "Highest 10% cutoff", "scenario" => "mu=50, sigma=10, n=25. Find the sample mean separating the top 10%.", "steps" => array("SE=10/5=2.", "Top 10% begins at the 90th percentile, z*=1.2816.", "Cutoff=50+1.2816(2)=52.5632."), "conclusion" => "A sample mean of about 52.56 marks the highest 10%."),
    ),
    "misconceptions" => array(
        array("Use sigma for every z-score.", "Sample means use standard error sigma/sqrt(n)."), array("P(x-bar>c) describes individuals.", "It describes a long-run proportion of samples."),
        array("A z-score is already a probability.", "Convert standardized distance to normal area."), array("Greater than uses left-tail area.", "Greater than shades right."),
        array("Between needs one z-score.", "Standardize both endpoints."), array("Larger n changes the population mean.", "It narrows sampling spread and changes probabilities, not the centre.")
    ),
    "why" => array("Sample-mean probabilities help quality-control teams set alert thresholds, schools interpret class averages, and businesses judge whether an observed average is unusual rather than ordinary sampling variation.", "The five-step structure is reusable: identify, describe, standardize, calculate, interpret. It becomes the backbone of later confidence intervals and hypothesis tests."),
    "knowledge_check" => array(
        stats_numeric("kc1", "mu=40, sigma=10, n=25. Find SE.", 2, "<p>\\(10/5=2\\).</p>", "Square root n.", "foundational", array("SE")),
        stats_numeric("kc2", "Using the same model, find z for x-bar=44.", 2, "<p>\\((44-40)/2=2\\).</p>", "Difference over SE.", "foundational", array("z")),
        stats_mc("kc3", "For P(x-bar>44), which tail is used?", array("a" => "Left", "b" => "Right", "c" => "Both", "d" => "Neither"), "b", "<p>Greater than shades the right tail.</p>", "Read the inequality.", "foundational", array("tail"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "mu=100, sigma=15, n=25. Find SE.", 3, "<p>\\(15/5=3\\).</p>", "Square root 25.", "foundational", array("SE")),
        stats_numeric("g2", "Using that model, find z for x-bar=106.", 2, "<p>\\((106-100)/3=2\\).</p>", "Difference over 3.", "foundational", array("z")),
        stats_numeric("g3", "Approximate P(x-bar>106) using P(Z>2)=0.0228.", 0.0228, "<p>The standardized upper-tail area is 0.0228.</p>", "Right tail at z=2.", "proficient", array("probability"), 0.0001),
        stats_numeric("g4", "If z cutoffs are -1 and 1, use area 0.6827 for between probability.", 0.6827, "<p>The area between -1 and 1 is 0.6827.</p>", "Central area.", "foundational", array("between"), 0.0001),
        stats_written("g5", "short-response", "Interpret P(x-bar>106)=0.0228 in context of random samples of 25 scores.", "<p><strong>Model answer:</strong> About 2.28% of random samples of 25 would have a mean above 106 under this population model and the stated conditions.</p>", "Mention samples, size, event, long run.", "proficient", array("interpretation")),
        stats_written("g6", "error-analysis", "A student uses 15 instead of 3 as the z denominator. Explain the effect.", "<p><strong>Model answer:</strong> Fifteen is individual spread; means of 25 have SE=3. Using 15 gives z=0.4 instead of 2 and makes the sample mean look much less unusual.</p>", "Compare reference distributions.", "advanced", array("error analysis"))
    ),
    "independent_practice" => array(
        stats_numeric("i1", "mu=30, sigma=8, n=16. Find SE.", 2, "<p>\\(8/4=2\\).</p>", "Square root 16.", "foundational", array("SE")),
        stats_numeric("i2", "Using that model, find z for x-bar=34.", 2, "<p>\\((34-30)/2=2\\).</p>", "Difference over SE.", "foundational", array("z")),
        stats_numeric("i3", "Use P(Z>2)=0.0228 to find P(x-bar>34).", 0.0228, "<p>The right-tail probability is 0.0228.</p>", "Right tail.", "proficient", array("one-tail"), 0.0001),
        stats_numeric("i4", "Find the probability that x-bar is between 28 and 32 if this maps to Z between -1 and 1.", 0.6827, "<p>The central area is 0.6827.</p>", "Between symmetric z-scores.", "proficient", array("between"), 0.0001),
        stats_numeric("i5", "For mu=70, sigma=12, n=36, find top-10% cutoff using z*=1.2816, two decimals.", 72.56, "<p>SE=2; cutoff \\(=70+1.2816(2)=72.5632\\approx72.56\\).</p>", "Convert z back.", "advanced", array("inverse"), 0.01),
        stats_written("i6", "short-response", "Compare an individual value 76 and sample mean 76 when mu=70, sigma=12, n=36.", "<p><strong>Model answer:</strong> Individual z=(76-70)/12=0.5. Sample-mean SE=2 and z=(76-70)/2=3. The mean is far more unusual because averages vary less.</p>", "Two denominators.", "proficient", array("individual versus mean")),
        stats_written("i7", "short-response", "Explain how increasing n changes P(x-bar>fixed cutoff above mu).", "<p><strong>Model answer:</strong> SE decreases, so the cutoff lies more standard errors above mu. The right-tail probability becomes smaller while centre stays fixed.</p>", "Narrower distribution.", "proficient", array("sample size")),
        stats_written("i8", "short-response", "State the five probability steps.", "<p><strong>Model answer:</strong> Identify population values and event; describe centre, spread, shape; calculate z; find normal area; interpret in context.</p>", "Use the first section.", "proficient", array("procedure"))
    ),
    "summary" => array("Describe the sampling distribution before calculating probability.", "Sample-mean z-scores divide by standard error.", "One-tail direction and between-endpoint areas must match the event.", "Inverse-normal problems convert a percentile z-score back to a sample-mean cutoff.", "Larger samples make fixed extreme means less likely."),
    "exit_ticket" => array(
        stats_numeric("e1", "mu=50, sigma=20, n=100, x-bar=54. Find z.", 2, "<p>SE=2 and z=2.</p>", "Find SE.", "proficient", array("z")),
        stats_written("e2", "short-response", "Interpret an upper-tail probability of 0.03 for samples of 50.", "<p><strong>Model answer:</strong> About 3% of random samples of 50 would produce a sample mean above the stated cutoff under the population model and conditions.</p>", "Samples, size, event.", "proficient", array("interpretation"))
    )
);
