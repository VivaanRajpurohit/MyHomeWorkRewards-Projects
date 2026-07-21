<p align="center">
  <a href="https://app.myhomeworkrewards.com/">
    <img src="assets/images/favicon.png" width="112" alt="MyHomeworkRewards logo">
  </a>
</p>

<h1 align="center">MyHomeworkRewards Learning Projects</h1>

<p align="center">
  Interactive, student-friendly mathematics lessons built for the MyHomeworkRewards learning platform.
</p>

<p align="center">
  <img alt="PHP" src="https://img.shields.io/badge/PHP-8%2B-777BB4?logo=php&logoColor=white">
  <img alt="Curriculum" src="https://img.shields.io/badge/Curriculum-Grades%208%20%26%2012-5B0A9F">
  <img alt="Lessons" src="https://img.shields.io/badge/Statistics-21%20lessons-16746F">
  <img alt="Status" src="https://img.shields.io/badge/status-active-2E7D32">
</p>

## About

This repository contains mathematics lesson pages developed for MyHomeworkRewards. The lessons pair textbook-style explanations with worked examples, MathJax notation, practice questions, and revealable solutions. The code intentionally stays close to the existing PHP and Bootstrap website so lesson files can be integrated into the platform without rebuilding its interface.

## Project at a Glance

| Measure | Current scope |
|---|---|
| Audience | Grade 8 and Grade 12 students |
| Published lesson pages | 32 across radicals, complex numbers, and statistics |
| Practice | 6 review sets, including 106 cumulative Grade 12 questions |
| Interactive elements | Venn diagrams, tree diagrams, sampling tools, probability simulations, hints, and revealable solutions |
| Delivery | Reusable PHP lesson pages integrated with an existing learning platform |

## Curriculum

| Grade | Subject | Collection | Included material |
|---|---|---|---|
| Grade 8 | Mathematics | [Radicals and complex numbers](lessons/grade-8/math/radicals/) | 11 lesson pages and 3 practice sets |
| Grade 12 | Data Management | [Statistics](lessons/grade-12/data-management/statistics/) | 21 lessons, 3 units, and 106 cumulative review questions |

The full lesson-by-lesson index is available in [docs/CURRICULUM.md](docs/CURRICULUM.md).

## Learning Experience

- Clear explanations written for students encountering a topic for the first time
- Worked examples with step-by-step reasoning
- Revealable hints and complete answers
- MathJax-rendered notation and formulas
- Interactive Venn diagrams, tree diagrams, sampling tools, and probability simulations
- Responsive layouts that preserve the original MyHomeworkRewards lesson format
- Structured statistics data that makes future units easier to add

## Repository Structure

```text
.
|-- assets/                         Shared styles, scripts, and images
|-- includes/                       Site-wide header and footer
|-- lessons/
|   |-- grade-8/math/radicals/      Grade 8 lesson sequence and practice
|   `-- grade-12/data-management/
|       `-- statistics/
|           |-- unit-1/             Data collection and experimental design
|           |-- unit-2/             Counting and probability
|           |-- unit-3/             Sampling distributions
|           |-- practice/           Cumulative unit reviews
|           |-- data/               Structured lesson content
|           `-- includes/           Reusable lesson renderers and components
|-- docs/                            Curriculum and project documentation
`-- archive/                         Preserved legacy material
```

## Run Locally

PHP 8 or newer is recommended.

```powershell
git clone https://github.com/VivaanRajpurohit/MyHomeWorkRewards-Projects.git
cd MyHomeWorkRewards-Projects
php -S localhost:8000 -t .
```

Then open one of these pages:

- [Grade 8: Simplifying Expressions with Roots](http://localhost:8000/lessons/grade-8/math/radicals/lesson-01-simplifying-roots.php)
- [Grade 12: Sampling and Data Foundations](http://localhost:8000/lessons/grade-12/data-management/statistics/unit-1/sampling-foundations.php)
- [Grade 12: Permutations and Combinations](http://localhost:8000/lessons/grade-12/data-management/statistics/unit-2/permutations-and-combinations.php)
- [Grade 12: Central Limit Theorem](http://localhost:8000/lessons/grade-12/data-management/statistics/unit-3/central-limit-theorem.php)

## Quality Checks

Every push and pull request runs PHP syntax checks through GitHub Actions. To run the same check locally:

```powershell
Get-ChildItem -Recurse -Filter *.php | ForEach-Object { php -l $_.FullName }
```

For content changes, also open the affected lesson at desktop and mobile widths and test every `Show Answer` control.

## Contributing

Contributions that improve accuracy, clarity, accessibility, or practice coverage are welcome. Read [CONTRIBUTING.md](CONTRIBUTING.md) before opening a pull request.

## Project Links

- [MyHomeworkRewards](https://app.myhomeworkrewards.com/)
- [Curriculum index](docs/CURRICULUM.md)
- [Report a problem](https://github.com/VivaanRajpurohit/MyHomeWorkRewards-Projects/issues/new/choose)

<p align="center"><strong>Built to make difficult mathematics feel learnable.</strong></p>
