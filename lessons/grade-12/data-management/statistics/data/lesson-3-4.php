<?php
return array(
    "overview" => "A sample proportion changes from sample to sample, but its long-run distribution is centred at the true population proportion. This lesson develops its centre, standard error, normal conditions, z-scores, probabilities, and count interpretations.",
    "objectives" => array("Distinguish a success count \\(x\\), sample size \\(n\\), sample proportion \\(\\hat p\\), and population proportion \\(p\\).", "Check random, independence/10%, and large-counts conditions.", "Find the centre and standard error of \\(\\hat p\\).", "Calculate probabilities and cutoffs for sample proportions.", "Explain how sample size changes variability and extreme outcomes."),
    "prerequisites" => array("Convert counts to proportions.", "Use normal z-scores and tail areas.", "Understand repeated sampling and standard error."),
    "vocabulary" => array(
        array("Success", "The outcome being counted; the word does not necessarily mean something desirable."), array("Success count", "The number of sampled successes, written \\(x\\)."),
        array("Population proportion", "The true population fraction with the characteristic, written \\(p\\)."), array("Sample proportion", "The sample fraction \\(\\hat p=x/n\\), read p-hat."),
        array("Large-counts condition", "The checks \\(np\\ge10\\) and \\(n(1-p)\\ge10\\)."), array("Standard error of p-hat", "The spread \\(\\sqrt{p(1-p)/n}\\) when p is known."),
        array("Unbiased", "Centred at the target: \\(\\mu_{\\hat p}=p\\)."), array("Proportion z-score", "Standardized distance of \\(\\hat p\\) from \\(p\\).")
    ),
    "sections" => array(
        array("title" => "From a Count to a Proportion", "content" => array(
            "<p>For a yes/no characteristic, define one outcome as success. Success may mean completed a goal, prefers option A, has a defect, or answered yes. In a sample of size \\(n\\), let \\(x\\) be the number of successes. The sample proportion is \\(\\hat p=x/n\\).</p>",
            "<p>If 52 of 80 users complete a task, \\(\\hat p=52/80=0.65\\). The count is 52; the proportion is 0.65 or 65%. The true fraction among all users is \\(p\\), usually unknown. Hat notation reminds us that the sample value estimates the population value.</p>",
            "<p>Changing the success definition changes both \\(p\\) and \\(\\hat p\\). State the characteristic in words so 1-p has a clear meaning as the non-success proportion.</p>",
            array("type" => "formula", "label" => "Sample proportion", "html" => "<p>\\[\\hat p=\\frac{x}{n}\\]</p>")
        )),
        array("title" => "Centre and Standard Error", "content" => array(
            "<p>Across random samples of fixed size, \\(\\hat p\\) varies. Its sampling-distribution mean equals the population proportion: \\(\\mu_{\\hat p}=p\\). The sample proportion is therefore an unbiased estimator under random sampling.</p>",
            "<p>When observations are independent, its standard deviation or standard error is:</p>",
            array("type" => "formula", "label" => "Known-p standard error", "html" => "<p>\\[\\sigma_{\\hat p}=SE_{\\hat p}=\\sqrt{\\frac{p(1-p)}{n}}\\]</p>"),
            "<p>The product \\(p(1-p)\\) reflects variation in a binary outcome. Dividing by \\(n\\) and taking the square root gives sample-to-sample spread. As \\(n\\) increases, centre remains p while spread decreases at the square-root rate.</p>",
            "<p>For \\(p=0.60\\) and \\(n=100\\), \\(SE=\\sqrt{0.60(0.40)/100}=\\sqrt{0.0024}\\approx0.0490\\). Sample proportions typically vary by several percentage points around 0.60.</p>"
        )),
        array("title" => "Conditions for a Normal Approximation", "content" => array(
            "<p>Use a random sample or randomized process. For sampling without replacement, check \\(n\\le0.10N\\) so observations are approximately independent. Then check expected successes and failures:</p>",
            array("type" => "formula", "label" => "Large counts", "html" => "<p>\\[np\\ge10\\qquad\\text{and}\\qquad n(1-p)\\ge10\\]</p>"),
            "<p>These conditions keep the distribution away from a heavily skewed boundary at 0 or 1. For \\(p=0.20\\), \\(n=30\\) gives \\(np=6\\), so the normal approximation is not appropriate even though \\(n(1-p)=24\\).</p>",
            "<p>Both checks are required. A large n may still fail when p is very close to 0 or 1. Some courses use different cutoffs, but this course uses 10 consistently.</p>",
            array("type" => "warning", "label" => "Use p in probability models", "html" => "<p>When the true p is supplied for a sampling-distribution probability, use p in expected counts and standard error. Estimated standard error using p-hat belongs to estimation settings discussed in the standard-error lesson.</p>")
        )),
        array("title" => "Probability for a Sample Proportion", "content" => array(
            "<p>When conditions hold, standardize a sample proportion with:</p>",
            array("type" => "formula", "label" => "Proportion z-score", "html" => "<p>\\[z=\\frac{\\hat p-p}{\\sqrt{p(1-p)/n}}\\]</p>"),
            "<p>Suppose \\(p=0.60\\), \\(n=100\\), and we want \\(P(\\hat p>0.68)\\). Conditions hold because \\(np=60\\) and \\(n(1-p)=40\\). With \\(SE\\approx0.0490\\), \\(z=(0.68-0.60)/0.0490\\approx1.63\\). The upper-tail area is about 0.0516.</p>",
            "<p>Interpretation: about 5.16% of random samples of 100 would have more than 68% successes when the true proportion is 60%. This is a statement about sample proportions, not the probability one individual succeeds.</p>",
            "<p>Between-value and lower-tail problems follow the same five steps as sample means: identify, describe, standardize, calculate, interpret.</p>"
        )),
        array("title" => "Cutoffs, Counts, and Sample Size", "content" => array(
            "<p>A proportion cutoff can be converted to a count: \\(x=n\\hat p\\). In a sample of 100, \\(\\hat p=0.68\\) corresponds to 68 successes. With \\(n=80\\), 52 successes correspond to 0.65. Keep units clear because a count and proportion cannot be substituted directly into the same z numerator.</p>",
            "<p>For a percentile cutoff, use \\(\\hat p=p+z^*SE\\). If p=0.50, n=400, then SE=0.025. The approximate 95th-percentile cutoff uses z*=1.6449: \\(0.50+1.6449(0.025)\\approx0.5411\\).</p>",
            "<p>Larger samples narrow the distribution and make large deviations from p less likely. Doubling n does not halve SE; quadrupling n does. A narrow sampling distribution means more precise proportions, but it does not eliminate bias in who was sampled.</p>",
            array("type" => "formula", "label" => "Cutoff", "html" => "<p>\\[\\hat p_{cut}=p+z^*\\sqrt{\\frac{p(1-p)}{n}}\\]</p>")
        ))
    ),
    "worked_examples" => array(
        array("title" => "Compute p-hat", "scenario" => "In a sample of 80 users, 52 complete a task.", "steps" => array("Success count is x=52 and sample size is n=80.", "\\(\\hat p=x/n=52/80=0.65\\)."), "conclusion" => "The sample completion proportion is 0.65, or 65%."),
        array("title" => "Describe the distribution", "scenario" => "True p=0.60 and random samples have n=100.", "steps" => array("Centre: \\(\\mu_{\\hat p}=0.60\\).", "SE: \\(\\sqrt{0.6(0.4)/100}\\approx0.0490\\).", "Large counts: 60 and 40, both at least 10; check random and 10% conditions as well."), "conclusion" => "The sampling distribution is approximately normal, centred at 0.60 with SE 0.0490."),
        array("title" => "Upper-tail proportion", "scenario" => "For p=0.60 and n=100, find P(p-hat>0.68).", "steps" => array("Use SE=0.0490.", "\\(z=(0.68-0.60)/0.0490\\approx1.63\\).", "Upper-tail normal area is approximately 0.0516."), "conclusion" => "About 5.16% of such samples exceed 68% completion."),
        array("title" => "A failed large-count check", "scenario" => "p=0.04 and n=100.", "steps" => array("Expected successes: \\(np=4\\).", "Expected failures: \\(n(1-p)=96\\).", "The success count is below 10, so the sampling distribution remains strongly right-skewed near zero."), "conclusion" => "Do not use the ordinary normal approximation for p-hat here."),
    ),
    "misconceptions" => array(
        array("x and p-hat are interchangeable.", "x is a count; p-hat is x/n."), array("p-hat is the population truth.", "It is a sample statistic estimating p."),
        array("Only np must be checked.", "Both expected successes and failures must be at least 10."), array("Use the mean formula for proportions.", "Proportion SE is sqrt[p(1-p)/n]."),
        array("A larger sample moves the centre.", "It narrows spread while centre remains p."), array("Low standard error removes bias.", "Selection bias can remain tightly concentrated around the wrong value.")
    ),
    "why" => array("Polls, conversion rates, defect rates, approval percentages, and goal completion are proportions. Sampling-distribution reasoning separates ordinary sample fluctuation from a genuinely unusual observed rate.", "Conditions matter because proportions live between 0 and 1. The large-counts check tells us when a symmetric normal curve is a reasonable approximation to that bounded statistic."),
    "knowledge_check" => array(
        stats_numeric("kc1", "42 of 150 students say yes. Find p-hat.", 0.28, "<p>\\(42/150=0.28\\).</p>", "Count over sample size.", "foundational", array("p-hat")),
        stats_numeric("kc2", "For p=0.4 and n=100, find the sampling mean.", 0.4, "<p>\\(\\mu_{\\hat p}=p=0.4\\).</p>", "Unbiased centre.", "foundational", array("centre")),
        stats_numeric("kc3", "For p=0.25 and n=100, find SE, four decimals.", 0.0433, "<p>\\(\\sqrt{0.25(0.75)/100}\\approx0.0433\\).</p>", "Use p and 1-p.", "foundational", array("SE"), 0.0001)
    ),
    "guided_practice" => array(
        stats_numeric("g1", "36 successes in n=120. Find p-hat.", 0.3, "<p>\\(36/120=0.30\\).</p>", "x/n.", "foundational", array("p-hat")),
        stats_mc("g2", "p=0.2, n=40. Do large counts hold?", array("a" => "Yes", "b" => "No"), "b", "<p>np=8, below 10, so no.</p>", "Check both expected counts.", "foundational", array("conditions")),
        stats_mc("g3", "p=0.2, n=80. Do large counts hold?", array("a" => "Yes", "b" => "No"), "a", "<p>np=16 and n(1-p)=64, both at least 10.</p>", "Check 16 and 64.", "foundational", array("conditions")),
        stats_numeric("g4", "p=0.5, n=100. Find SE.", 0.05, "<p>\\(\\sqrt{0.25/100}=0.05\\).</p>", "Square root 0.0025.", "foundational", array("SE")),
        stats_numeric("g5", "Using p=0.5, n=100, find z for p-hat=0.60.", 2, "<p>\\((0.60-0.50)/0.05=2\\).</p>", "Difference over SE.", "proficient", array("z")),
        stats_written("g6", "error-analysis", "A student checks only n>=30 for a proportion. Explain.", "<p><strong>Model answer:</strong> Proportion normality depends on expected successes and failures. Check \\(np\\ge10\\) and \\(n(1-p)\\ge10\\); n alone can be misleading when p is near 0 or 1.</p>", "Boundaries matter.", "advanced", array("conditions"))
    ),
    "independent_practice" => array(
        stats_numeric("i1", "75 successes out of 300. Find p-hat.", 0.25, "<p>\\(75/300=0.25\\).</p>", "x/n.", "foundational", array("p-hat")),
        stats_numeric("i2", "p=0.3, n=200. Find expected successes.", 60, "<p>\\(np=200(0.3)=60\\).</p>", "n times p.", "foundational", array("conditions")),
        stats_numeric("i3", "Same setting: expected failures.", 140, "<p>\\(n(1-p)=200(0.7)=140\\).</p>", "Use 1-p.", "foundational", array("conditions")),
        stats_numeric("i4", "p=0.3, n=200. Find SE, four decimals.", 0.0324, "<p>\\(\\sqrt{0.3(0.7)/200}\\approx0.0324\\).</p>", "Known-p SE.", "proficient", array("SE"), 0.0001),
        stats_numeric("i5", "Using SE=0.0324, find z for p-hat=0.365, two decimals.", 2.01, "<p>\\((0.365-0.30)/0.0324\\approx2.01\\).</p>", "Difference over SE.", "proficient", array("z"), 0.01),
        stats_numeric("i6", "For n=80, convert p-hat=0.65 to success count.", 52, "<p>\\(x=n\\hat p=80(0.65)=52\\).</p>", "Multiply n and p-hat.", "foundational", array("count")),
        stats_written("i7", "short-response", "Explain why quadrupling n halves proportion SE.", "<p><strong>Model answer:</strong> n is under a square root in the denominator. Replacing n by 4n doubles the denominator, so SE is divided by two.</p>", "Square-root rule.", "proficient", array("sample size")),
        stats_written("i8", "short-response", "Interpret a proportion SE of 0.03.", "<p><strong>Model answer:</strong> Sample proportions from repeated random samples of the stated size typically vary by a few hundredths around the population proportion; it is not a 3% error guarantee for every sample.</p>", "Typical sample-to-sample spread.", "proficient", array("interpretation"))
    ),
    "summary" => array("The sample proportion is p-hat=x/n and estimates population p.", "Its sampling distribution is centred at p with SE sqrt[p(1-p)/n].", "Check random sampling, 10% independence, and both large counts.", "Proportion z-scores compare p-hat with p in standard-error units.", "Larger n improves precision without changing p or removing bias."),
    "exit_ticket" => array(
        stats_numeric("e1", "p=0.4, n=400. Find SE, four decimals.", 0.0245, "<p>\\(\\sqrt{0.4(0.6)/400}\\approx0.0245\\).</p>", "Known-p formula.", "proficient", array("SE"), 0.0001),
        stats_written("e2", "short-response", "State the three condition categories for a normal p-hat model.", "<p><strong>Model answer:</strong> Random sampling/process, approximate independence including the 10% condition when sampling without replacement, and large counts np>=10 and n(1-p)>=10.</p>", "Random, independence, shape.", "proficient", array("conditions"))
    )
);
