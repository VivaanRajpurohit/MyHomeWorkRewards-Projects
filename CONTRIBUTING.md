# Contributing

Thank you for helping improve the MyHomeworkRewards lesson library.

## Before You Begin

1. Check existing issues and pull requests for related work.
2. Create a focused branch from `main`.
3. Keep lesson content accurate, student-friendly, and consistent with the surrounding grade level.

## Lesson Standards

- Define unfamiliar vocabulary before using it heavily.
- Explain why a method works, not only which formula to enter.
- Include realistic worked examples and complete solutions.
- Use MathJax delimiters for mathematical notation.
- Preserve the established MyHomeworkRewards page layout.
- Ensure links, revealable answers, and interactive tools work with a keyboard.
- Avoid unsupported claims, ambiguous questions, and unexplained calculator output.

## File Organization

Place lessons under `lessons/<grade>/<subject>/<topic>/`. Use lowercase kebab-case filenames, such as `sampling-techniques.php`. Shared assets belong in `assets`, while reusable PHP fragments belong in `includes` or the relevant curriculum collection's `includes` directory.

Do not commit server logs, editor state, secrets, or generated dependency folders.

## Validation

Run PHP syntax checks before submitting:

```powershell
Get-ChildItem -Recurse -Filter *.php | ForEach-Object { php -l $_.FullName }
```

Start the local server with `php -S localhost:8000 -t .`, then inspect the changed pages at desktop and mobile widths. Test every link and answer control you changed.

## Pull Requests

Describe the learning goal, files changed, and checks completed. Screenshots are helpful for visible layout changes. Keep unrelated curriculum or formatting changes out of the same pull request.
