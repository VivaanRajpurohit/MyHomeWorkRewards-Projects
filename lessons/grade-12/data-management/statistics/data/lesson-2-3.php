<?php
return array(
    "overview" => "The binomial theorem turns repeated multiplication into a predictable expansion. Pascal's triangle and combinations supply coefficients, while exponent patterns identify every term without multiplying brackets one at a time.",
    "objectives" => array("Recognize binomials and build Pascal's triangle.", "Explain why Pascal entries equal combination values.", "Expand \\((a+b)^n\\) and \\((a-b)^n\\) with correct signs and exponents.", "Find a specified term or coefficient without writing the whole expansion.", "Connect binomial coefficients to counting and introductory binomial probability."),
    "prerequisites" => array("Use exponents and multiply monomials.", "Evaluate combinations.", "Apply positive and negative signs through powers."),
    "vocabulary" => array(
        array("Binomial", "An algebraic expression with two terms."), array("Expansion", "An equivalent sum formed by multiplying factors."),
        array("Coefficient", "A numerical multiplier of a variable term."), array("Pascal's triangle", "A triangular array whose interior entries sum the two entries above."),
        array("Binomial coefficient", "The combination value \\(\\binom nr\\) used as an expansion coefficient."), array("General term", "A formula describing the term indexed by \\(r\\)."),
        array("Sigma notation", "The symbol \\(\\sum\\) for adding terms over an index."), array("Term number", "A position in the expansion; term \\(r+1\\) corresponds to index \\(r\\).")
    ),
    "sections" => array(
        array("title" => "Notice the Pattern Before the Formula", "content" => array(
            "<p>A binomial has two terms, such as \\(x+3\\), \\(a-b\\), or \\(2x+y\\). Small powers reveal the structure: \\((a+b)^2=a^2+2ab+b^2\\) and \\((a+b)^3=a^3+3a^2b+3ab^2+b^3\\). In each expansion, the exponent on \\(a\\) decreases while the exponent on \\(b\\) increases.</p>",
            "<p>The exponents in every term add to the original power. For a fifth power, terms have total degree five: \\(a^5,a^4b,a^3b^2,a^2b^3,ab^4,b^5\\). There are \\(n+1\\) terms in the expansion of a general \\(n\\)th power when like terms do not collapse.</p>",
            "<p>The coefficients 1,2,1 and 1,3,3,1 are not arbitrary. They count how many selections from the repeated factors produce the same algebraic term. Recognizing exponent and coefficient patterns provides checks against missing terms and reversed powers.</p>",
            array("type" => "example", "label" => "Exponent check", "html" => "<p>In a term from \\((a+b)^7\\), \\(a^4b^2\\) cannot occur because the exponents add to 6, not 7. The matching term would contain \\(a^4b^3\\).</p>")
        )),
        array("title" => "Pascal's Triangle", "content" => array(
            "<p>Pascal's triangle begins and ends every row with 1. Each interior entry is the sum of the two entries above it. Starting with row \\(n=0\\): 1; row 1: 1 1; row 2: 1 2 1; row 3: 1 3 3 1; row 4: 1 4 6 4 1; row 5: 1 5 10 10 5 1.</p>",
            "<p>Entry \\(r\\) in row \\(n\\), counting the first entry as \\(r=0\\), equals \\(\\binom nr\\). For row 5, the values are \\(\\binom50,\\binom51,\\ldots,\\binom55\\). The symmetry of each row reflects \\(\\binom nr=\\binom n{n-r}\\).</p>",
            "<p>The adding rule follows the combination identity \\(\\binom nr=\\binom{n-1}{r-1}+\\binom{n-1}r\\). To choose \\(r\\) items from \\(n\\), split into cases where one designated item is selected or not selected.</p>",
            array("type" => "formula", "label" => "Pascal identity", "html" => "<p>\\[\\binom nr=\\binom{n-1}{r-1}+\\binom{n-1}r\\]</p>")
        )),
        array("title" => "The Binomial Theorem", "content" => array(
            array("type" => "formula", "label" => "Binomial theorem", "html" => "<p>\\[(a+b)^n=\\sum_{r=0}^{n}\\binom nr a^{n-r}b^r\\]</p>"),
            "<p>The index \\(r\\) starts at 0 and ends at \\(n\\). The coefficient is \\(\\binom nr\\). The first term \\(a\\) has exponent \\(n-r\\), which falls from \\(n\\) to 0. The second term \\(b\\) has exponent \\(r\\), which rises from 0 to \\(n\\). Sigma notation means add every term created by those index values.</p>",
            "<p>To expand \\((x+2)^4\\), use coefficients 1,4,6,4,1 and terms \\(x^4, x^3(2), x^2(2^2), x(2^3), 2^4\\). Simplifying gives \\(x^4+8x^3+24x^2+32x+16\\). The second term must be raised to its changing power; forgetting that power is a common error.</p>",
            "<p>For \\((a-b)^n\\), treat the second term as \\(-b\\). Odd powers are negative and even powers positive, so signs alternate. Do not attach a single minus sign after the expansion; the sign belongs inside every power of the second term.</p>"
        )),
        array("title" => "Find One Term Efficiently", "content" => array(
            "<p>The general indexed term is \\(T_{r+1}=\\binom nr a^{n-r}b^r\\). It is called term \\(r+1\\) because the first term occurs at \\(r=0\\). To find a required variable power, set the relevant exponent equal to that power and solve for \\(r\\).</p>",
            "<p>For the coefficient of \\(x^3\\) in \\((2x+1)^5\\), a term is \\(\\binom5r(2x)^{5-r}(1)^r\\). Set \\(5-r=3\\), giving \\(r=2\\). The coefficient is \\(\\binom52 2^3=10\\times8=80\\).</p>",
            "<p>For \\((3x-2)^6\\), retain parentheses around \\(-2\\) and \\(3x\\). The power applies to the coefficient and variable: \\((3x)^k=3^kx^k\\). Write the unsimplified general term first; this prevents lost powers and signs.</p>",
            array("type" => "warning", "label" => "Index versus term number", "html" => "<p>The fourth term uses \\(r=3\\), not \\(r=4\\). Substitute \\(r=\\text{term number}-1\\).</p>")
        )),
        array("title" => "Why Combinations Appear", "content" => array(
            "<p>In \\((a+b)^n\\), imagine \\(n\\) separate factors. To produce \\(a^{n-r}b^r\\), choose the \\(b\\) term from exactly \\(r\\) of those factors and \\(a\\) from the rest. There are \\(\\binom nr\\) ways to choose which factors supply \\(b\\), so those identical products combine into that coefficient.</p>",
            "<p>The same logic previews binomial probability. In \\(n\\) independent trials with success probability \\(p\\), one particular sequence with \\(r\\) successes has probability \\(p^r(1-p)^{n-r}\\). There are \\(\\binom nr\\) positions for the successes, giving \\(\\binom nr p^r(1-p)^{n-r}\\).</p>",
            "<p>Algebra and probability therefore share the same structure: choose which repeated factors contribute the first or second outcome. This connection is why coefficients in \\((p+(1-p))^n=1\\) also sum to \\(2^n\\) when \\(p\\) and \\(1-p\\) are replaced by 1.</p>"
        ))
    ),
    "worked_examples" => array(
        array("title" => "Expand a positive binomial", "scenario" => "Expand \\((x+3)^4\\).", "steps" => array("Use row 4 coefficients: 1,4,6,4,1.", "Write \\(x^4+4x^3(3)+6x^2(3^2)+4x(3^3)+3^4\\).", "Simplify to \\(x^4+12x^3+54x^2+108x+81\\).", "Check five terms and total degree four."), "conclusion" => "\\((x+3)^4=x^4+12x^3+54x^2+108x+81\\)."),
        array("title" => "Expand with a negative term", "scenario" => "Expand \\((2x-y)^3\\).", "steps" => array("Use coefficients 1,3,3,1 and treat the second term as \\(-y\\).", "Write \\((2x)^3+3(2x)^2(-y)+3(2x)(-y)^2+(-y)^3\\).", "Simplify powers and signs."), "conclusion" => "\\(8x^3-12x^2y+6xy^2-y^3\\)."),
        array("title" => "Find a specific coefficient", "scenario" => "Find the coefficient of \\(x^3\\) in \\((2x+1)^5\\).", "steps" => array("General term: \\(\\binom5r(2x)^{5-r}\\).", "Set \\(5-r=3\\), so \\(r=2\\).", "Coefficient: \\(\\binom52 2^3=10\\times8=80\\)."), "conclusion" => "The \\(x^3\\) term is \\(80x^3\\)."),
    ),
    "misconceptions" => array(
        array("Only the variable receives the exponent.", "A grouped term such as \\((2x)^3\\) equals \\(8x^3\\)."), array("Both exponents increase.", "One exponent decreases while the other increases; their sum remains \\(n\\)."),
        array("Negative binomials have one negative term.", "The sign alternates according to odd and even powers of the negative term."), array("The fourth term uses r=4.", "Because indexing begins at zero, term four uses \\(r=3\\)."),
        array("Pascal's row number starts at one.", "The single 1 is row \\(n=0\\)."), array("A coefficient can be read without simplifying constants.", "Binomial coefficients must be multiplied by powers of numerical terms such as 2 or -3.")
    ),
    "why" => array("The theorem supports polynomial algebra, approximation, probability distributions, and repeated-trial models. It reveals a counting structure hidden inside multiplication.", "Using a general term also trains an important mathematical habit: solve only the part requested instead of performing a long expansion that creates extra opportunities for error."),
    "knowledge_check" => array(
        stats_numeric("kc1", "How many terms are in the full expansion of (a+b)^8?", 9, "<p>An \\(n\\)th power has \\(n+1\\) terms, so 9.</p>", "Index runs 0 through 8.", "foundational", array("structure")),
        stats_numeric("kc2", "What is the middle entry of Pascal row 4: 1, 4, __, 4, 1?", 6, "<p>The entry is \\(\\binom42=6\\), also \\(3+3\\) from the row above.</p>", "Add entries above.", "foundational", array("Pascal")),
        stats_numeric("kc3", "In the term indexed by r=3 of (a+b)^7, what is the exponent on a?", 4, "<p>The exponent is \\(n-r=7-3=4\\).</p>", "Use n-r.", "foundational", array("general term"))
    ),
    "guided_practice" => array(
        stats_numeric("g1", "Find C(6,2), a coefficient in Pascal row 6.", 15, "<p>\\(\\binom62=15\\).</p>", "Use 6x5/2.", "foundational", array("Pascal")),
        stats_written("g2", "short-response", "Expand (x+1)^3.", "<p><strong>Model answer:</strong> \\(x^3+3x^2+3x+1\\).</p>", "Use row 3.", "foundational", array("expansion")),
        stats_written("g3", "short-response", "Expand (x-2)^3.", "<p><strong>Model answer:</strong> \\(x^3-6x^2+12x-8\\). Treat -2 as the second term.</p>", "Signs alternate.", "proficient", array("negative binomial")),
        stats_numeric("g4", "Find the coefficient of x^2 in (x+3)^4.", 54, "<p>Set \\(4-r=2\\), so \\(r=2\\): \\(\\binom42 3^2=6\\times9=54\\).</p>", "Use the general term.", "proficient", array("coefficient")),
        stats_numeric("g5", "What is the coefficient of a^3b^2 in (a+b)^5?", 10, "<p>The coefficient is \\(\\binom52=10\\).</p>", "Power of b gives r.", "proficient", array("coefficient")),
        stats_written("g6", "error-analysis", "A student writes the second term of (2x+1)^4 as 4x^3. Correct it.", "<p><strong>Model answer:</strong> The term is \\(4(2x)^3(1)=4\\times8x^3=32x^3\\). The exponent applies to the coefficient 2 as well as x.</p>", "Expand (2x)^3.", "proficient", array("error analysis"))
    ),
    "independent_practice" => array(
        stats_written("i1", "short-response", "Write Pascal rows n=0 through n=5.", "<p><strong>Model answer:</strong> 1; 1 1; 1 2 1; 1 3 3 1; 1 4 6 4 1; 1 5 10 10 5 1.</p>", "Each interior sum comes from above.", "foundational", array("Pascal")),
        stats_written("i2", "short-response", "Expand (a+b)^4.", "<p><strong>Model answer:</strong> \\(a^4+4a^3b+6a^2b^2+4ab^3+b^4\\).</p>", "Row 4 and opposite exponent motion.", "foundational", array("expansion")),
        stats_written("i3", "short-response", "Expand (2x+3)^3.", "<p><strong>Model answer:</strong> \\(8x^3+36x^2+54x+27\\).</p>", "Raise both numerical terms to powers.", "proficient", array("expansion")),
        stats_written("i4", "short-response", "Expand (x-1)^5.", "<p><strong>Model answer:</strong> \\(x^5-5x^4+10x^3-10x^2+5x-1\\).</p>", "Use row 5 and alternate signs.", "proficient", array("negative binomial")),
        stats_numeric("i5", "Find the coefficient of x^4 in (x+2)^6.", 60, "<p>\\(6-r=4\\Rightarrow r=2\\). Coefficient \\(\\binom62 2^2=15\\times4=60\\).</p>", "Solve for r first.", "proficient", array("coefficient")),
        stats_numeric("i6", "Find the constant term in (3x+2)^5.", 32, "<p>The constant occurs when x exponent is 0, so choose 2 from all five factors: \\(2^5=32\\).</p>", "No x means r=5.", "proficient", array("specific term")),
        stats_written("i7", "short-response", "Write the fourth term of (a+2b)^6.", "<p><strong>Model answer:</strong> Fourth term uses \\(r=3\\): \\(\\binom63a^3(2b)^3=20\\times8a^3b^3=160a^3b^3\\).</p>", "Fourth term means r=3.", "advanced", array("specific term")),
        stats_written("i8", "short-response", "Explain why C(n,r) appears in the theorem.", "<p><strong>Model answer:</strong> To create a term with \\(r\\) copies of the second term, choose which \\(r\\) of the \\(n\\) factors supply it. There are \\(\\binom nr\\) such choices.</p>", "Choose factor positions.", "advanced", array("counting connection"))
    ),
    "summary" => array("Pascal's row \\(n\\) gives coefficients \\(\\binom n0\\) through \\(\\binom nn\\).", "In each term, one exponent decreases and the other increases; their sum is \\(n\\).", "The general term is \\(\\binom nr a^{n-r}b^r\\).", "Negative second terms alternate signs by parity.", "Combinations count which factors supply the second term and later count success positions in probability."),
    "exit_ticket" => array(
        stats_numeric("e1", "Find the coefficient of x^2 in (x+1)^5.", 10, "<p>Set \\(5-r=2\\), giving \\(r=3\\); coefficient \\(\\binom53=10\\).</p>", "Solve the x exponent.", "proficient", array("coefficient")),
        stats_written("e2", "short-response", "State two checks for a completed binomial expansion.", "<p><strong>Model answer:</strong> It should have \\(n+1\\) terms, and exponents in each term should sum to \\(n\\); the first exponent falls while the second rises, with signs handled through the actual second term.</p>", "Count terms and inspect exponents.", "proficient", array("verification"))
    )
);
