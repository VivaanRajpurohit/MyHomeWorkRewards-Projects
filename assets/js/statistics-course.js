(function () {
    "use strict";

    function parseAnswer(question) {
        try {
            return JSON.parse(question.dataset.answer || '""');
        } catch (error) {
            return question.dataset.answer || "";
        }
    }

    function normalized(value) {
        return String(value).trim().toLowerCase().replace(/\s+/g, " ");
    }

    function studentAnswer(question) {
        var type = question.dataset.questionType;
        if (type === "multiple-choice" || type === "classification") {
            var selected = question.querySelector('input[type="radio"]:checked');
            return selected ? selected.value : "";
        }
        if (type === "multiple-select") {
            return Array.from(question.querySelectorAll('input[type="checkbox"]:checked')).map(function (input) {
                return input.value;
            }).sort();
        }
        var input = question.querySelector(".answer-input");
        return input ? input.value : "";
    }

    function isCorrect(student, answer, type) {
        if (type === "multiple-select") {
            var expected = Array.isArray(answer) ? answer.slice().sort() : [];
            return JSON.stringify(student) === JSON.stringify(expected);
        }
        if (type === "numeric") {
            var expectedNumber = typeof answer === "object" ? Number(answer.value) : Number(answer);
            var tolerance = typeof answer === "object" && answer.tolerance !== undefined ? Number(answer.tolerance) : 0.001;
            return student !== "" && Math.abs(Number(student) - expectedNumber) <= tolerance;
        }
        return normalized(student) === normalized(answer);
    }

    function setExpanded(button, panel, expanded, openText, closeText) {
        button.setAttribute("aria-expanded", expanded ? "true" : "false");
        panel.hidden = !expanded;
        button.textContent = expanded ? closeText : openText;
    }

    function updateLessonProgress() {
        var body = document.body;
        if (!body.dataset.lessonId) return;
        var questions = Array.from(document.querySelectorAll(".course-question"));
        var answered = questions.filter(function (q) { return q.dataset.answered === "true"; }).length;
        var completeKey = "stats-complete-" + body.dataset.lessonId;
        var markedComplete = localStorage.getItem(completeKey) === "true";
        var percent = questions.length ? Math.round((answered / questions.length) * 80) : 0;
        if (markedComplete) percent = 100;
        var label = document.querySelector("[data-progress-label]");
        var bar = document.querySelector("[data-progress-bar]");
        if (label) label.textContent = percent + "% complete";
        if (bar) bar.style.width = percent + "%";
        var completeButton = document.querySelector("[data-complete-lesson]");
        if (completeButton) {
            completeButton.textContent = markedComplete ? "Lesson completed" : "Mark lesson complete";
            completeButton.setAttribute("aria-pressed", markedComplete ? "true" : "false");
        }
    }

    function setupQuestions() {
        document.querySelectorAll(".course-question").forEach(function (question) {
            var solutionButton = question.querySelector(".reveal-solution");
            var solution = question.querySelector(".question-solution");
            var hintButton = question.querySelector(".reveal-hint");
            var hint = question.querySelector(".question-hint");

            if (hintButton && hint) {
                hintButton.addEventListener("click", function () {
                    setExpanded(hintButton, hint, hint.hidden, "Show hint", "Hide hint");
                });
            }
            if (solutionButton && solution) {
                solutionButton.addEventListener("click", function () {
                    setExpanded(solutionButton, solution, solution.hidden, "Show full solution", "Hide full solution");
                });
            }

            var compareButton = question.querySelector(".compare-answer");
            if (compareButton) {
                compareButton.addEventListener("click", function () {
                    var input = question.querySelector(".answer-input");
                    var feedback = question.querySelector(".question-feedback");
                    if (!input || normalized(input.value).length < 8) {
                        feedback.className = "question-feedback incorrect";
                        feedback.textContent = "Add a complete thought first. Name the concept and explain how it applies to this situation.";
                        return;
                    }
                    question.dataset.answered = "true";
                    question.classList.add("needs-review");
                    feedback.className = "question-feedback correct";
                    feedback.textContent = "Good: you committed to an explanation. Compare your reasoning with the model and revise anything missing.";
                    solutionButton.hidden = false;
                    setExpanded(solutionButton, solution, true, "Show full solution", "Hide full solution");
                    updateLessonProgress();
                });
            }

            var checkButton = question.querySelector(".check-answer");
            if (!checkButton) return;
            checkButton.addEventListener("click", function () {
                var type = question.dataset.questionType;
                var response = studentAnswer(question);
                var answer = parseAnswer(question);
                var feedback = question.querySelector(".question-feedback");
                var attempts = Number(question.dataset.attempts || 0) + 1;
                question.dataset.attempts = String(attempts);

                var empty = Array.isArray(response) ? response.length === 0 : response === "";
                if (empty) {
                    feedback.className = "question-feedback incorrect";
                    feedback.textContent = "Choose or enter an answer first. Then this check can respond to your reasoning.";
                    return;
                }

                if (isCorrect(response, answer, type)) {
                    question.dataset.answered = "true";
                    question.classList.remove("needs-review");
                    question.classList.add("is-correct");
                    feedback.className = "question-feedback correct";
                    feedback.textContent = "Correct. Your choice matches the structure of the situation, not just a keyword.";
                    solutionButton.hidden = false;
                    setExpanded(solutionButton, solution, true, "Show full solution", "Hide full solution");
                    updateLessonProgress();
                } else {
                    question.classList.add("needs-review");
                    feedback.className = "question-feedback incorrect";
                    feedback.textContent = attempts === 1
                        ? "That answer follows a common first instinct, but one detail in the situation changes the method. Use the hint and try again."
                        : "Not yet. Compare the quantities, groups, or conditions named in the question. The full solution is now available, and you may still retry.";
                    if (hintButton && hint && attempts === 1) setExpanded(hintButton, hint, true, "Show hint", "Hide hint");
                    if (attempts >= 2) solutionButton.hidden = false;
                }
            });
        });
    }

    function setupRevealables() {
        document.querySelectorAll(".reveal-example").forEach(function (button) {
            var panel = button.parentElement.querySelector(".example-solution");
            button.addEventListener("click", function () {
                setExpanded(button, panel, panel.hidden, "Show step-by-step solution", "Hide step-by-step solution");
            });
        });
    }

    function drawAxes(context, width, height, title, xLabel) {
        context.clearRect(0, 0, width, height);
        context.fillStyle = "#ffffff";
        context.fillRect(0, 0, width, height);
        context.strokeStyle = "#ded9e3";
        context.lineWidth = 1;
        for (var y = 40; y < height - 40; y += 40) {
            context.beginPath(); context.moveTo(50, y); context.lineTo(width - 20, y); context.stroke();
        }
        context.strokeStyle = "#333333";
        context.lineWidth = 2;
        context.beginPath(); context.moveTo(50, 24); context.lineTo(50, height - 38); context.lineTo(width - 20, height - 38); context.stroke();
        context.fillStyle = "#333333";
        context.font = "14px Helvetica Neue, Arial";
        context.textAlign = "center";
        context.fillText(title, width / 2, 18);
        context.fillText(xLabel, width / 2, height - 10);
    }

    function setupSamplingSimulation(simulation) {
        var canvas = simulation.querySelector("canvas");
        var context = canvas.getContext("2d");
        var values = [];
        var status = simulation.querySelector(".simulation-status");
        var sampleSize = simulation.querySelector("[data-sample-size]");

        function populationValue() {
            return -Math.log(1 - Math.random()) * 10;
        }
        function sampleMean(n) {
            var total = 0;
            for (var i = 0; i < n; i += 1) total += populationValue();
            return total / n;
        }
        function render() {
            var width = canvas.width;
            var height = canvas.height;
            drawAxes(context, width, height, "Distribution of simulated sample means", "sample mean");
            var bins = new Array(24).fill(0);
            values.forEach(function (value) {
                var index = Math.max(0, Math.min(23, Math.floor(value / 1.25)));
                bins[index] += 1;
            });
            var maximum = Math.max.apply(null, bins.concat([1]));
            var chartHeight = height - 76;
            var barWidth = (width - 78) / bins.length;
            bins.forEach(function (count, index) {
                var barHeight = (count / maximum) * (chartHeight - 18);
                context.fillStyle = "#5b0a9f";
                context.fillRect(52 + index * barWidth, height - 40 - barHeight, Math.max(2, barWidth - 2), barHeight);
            });
            context.strokeStyle = "#16746f";
            context.setLineDash([6, 5]);
            var meanX = 52 + (10 / 30) * (width - 78);
            context.beginPath(); context.moveTo(meanX, 28); context.lineTo(meanX, height - 38); context.stroke();
            context.setLineDash([]);
            status.textContent = values.length + (values.length === 1 ? " sample drawn" : " samples drawn");
        }
        simulation.querySelectorAll("[data-draw]").forEach(function (button) {
            button.addEventListener("click", function () {
                var repetitions = Number(button.dataset.draw);
                var n = Number(sampleSize.value);
                for (var i = 0; i < repetitions; i += 1) values.push(sampleMean(n));
                render();
            });
        });
        simulation.querySelector("[data-reset]").addEventListener("click", function () { values = []; render(); });
        sampleSize.addEventListener("change", function () { values = []; render(); });
        render();
    }

    function setupProbabilitySimulation(simulation) {
        var canvas = simulation.querySelector("canvas");
        var context = canvas.getContext("2d");
        var probabilityInput = simulation.querySelector("[data-probability]");
        var output = simulation.querySelector("output");
        var status = simulation.querySelector(".simulation-status");
        var points = [];
        var successes = 0;
        var trials = 0;

        function render() {
            var width = canvas.width;
            var height = canvas.height;
            drawAxes(context, width, height, "Cumulative experimental probability", "number of trials");
            var probability = Number(probabilityInput.value);
            var yTheory = 25 + (1 - probability) * (height - 66);
            context.strokeStyle = "#16746f";
            context.setLineDash([7, 5]);
            context.beginPath(); context.moveTo(50, yTheory); context.lineTo(width - 20, yTheory); context.stroke();
            context.setLineDash([]);
            if (points.length > 1) {
                context.strokeStyle = "#5b0a9f";
                context.lineWidth = 3;
                context.beginPath();
                points.forEach(function (point, index) {
                    var x = 50 + (index / Math.max(1, points.length - 1)) * (width - 72);
                    var y = 25 + (1 - point) * (height - 66);
                    if (index === 0) context.moveTo(x, y); else context.lineTo(x, y);
                });
                context.stroke();
            }
            status.textContent = trials + (trials === 1 ? " trial" : " trials");
            output.textContent = probability.toFixed(2);
        }
        simulation.querySelectorAll("[data-trials]").forEach(function (button) {
            button.addEventListener("click", function () {
                var amount = Number(button.dataset.trials);
                var probability = Number(probabilityInput.value);
                for (var i = 0; i < amount; i += 1) {
                    trials += 1;
                    if (Math.random() < probability) successes += 1;
                    if (trials <= 150 || trials % 10 === 0) points.push(successes / trials);
                }
                render();
            });
        });
        probabilityInput.addEventListener("input", function () { trials = 0; successes = 0; points = []; render(); });
        simulation.querySelector("[data-reset]").addEventListener("click", function () { trials = 0; successes = 0; points = []; render(); });
        render();
    }

    function setupVenn(simulation) {
        var feedback = simulation.querySelector(".venn-feedback");
        var messages = {
            union: "A or B includes every point in either circle, including the overlap.",
            intersection: "A and B is only the overlap: outcomes belonging to both events.",
            "a-only": "A but not B keeps the part of A outside the overlap.",
            neither: "Neither means the part of the sample space outside both circles."
        };
        simulation.querySelectorAll("[data-region]").forEach(function (button) {
            button.addEventListener("click", function () {
                simulation.dataset.active = button.dataset.region;
                feedback.textContent = messages[button.dataset.region];
            });
        });
    }

    function setupClassification(simulation) {
        var items = Array.prototype.slice.call(simulation.querySelectorAll("[data-classification-item]"));
        var zones = Array.prototype.slice.call(simulation.querySelectorAll("[data-classification-zone]"));
        var status = simulation.querySelector(".simulation-status");
        var feedback = simulation.querySelector(".classification-feedback");
        var bank = simulation.querySelector('[data-classification-zone="unplaced"]');
        var draggedItem = null;

        function updateStatus() {
            var placed = items.filter(function (item) {
                return item.parentElement.dataset.classificationZone !== "unplaced";
            }).length;
            status.textContent = placed + " of " + items.length + " placed";
        }

        function moveTo(item, zoneName) {
            var zone = simulation.querySelector('[data-classification-zone="' + zoneName + '"]');
            if (zone) zone.appendChild(item);
            item.classList.remove("correct", "incorrect");
            feedback.textContent = "Keep sorting, then check your classifications.";
            updateStatus();
        }

        items.forEach(function (item) {
            item.addEventListener("dragstart", function (event) {
                draggedItem = item;
                event.dataTransfer.setData("text/plain", item.dataset.classificationItem);
                event.dataTransfer.effectAllowed = "move";
            });
            item.addEventListener("dragend", function () { draggedItem = null; });
            item.addEventListener("keydown", function (event) {
                if (event.key !== "Enter" && event.key !== " ") return;
                event.preventDefault();
                var current = item.parentElement.dataset.classificationZone;
                moveTo(item, current === "unplaced" ? "categorical" : current === "categorical" ? "quantitative" : "unplaced");
                item.focus();
            });
        });

        zones.forEach(function (zone) {
            zone.addEventListener("dragover", function (event) {
                event.preventDefault();
                zone.classList.add("drag-over");
            });
            zone.addEventListener("dragleave", function () { zone.classList.remove("drag-over"); });
            zone.addEventListener("drop", function (event) {
                event.preventDefault();
                zone.classList.remove("drag-over");
                if (draggedItem) moveTo(draggedItem, zone.dataset.classificationZone);
            });
        });

        simulation.querySelector("[data-check-classification]").addEventListener("click", function () {
            var placed = 0;
            var correct = 0;
            items.forEach(function (item) {
                var actual = item.parentElement.dataset.classificationZone;
                if (actual !== "unplaced") placed += 1;
                var matches = actual === item.dataset.expected;
                item.classList.toggle("correct", matches);
                item.classList.toggle("incorrect", actual !== "unplaced" && !matches);
                if (matches) correct += 1;
            });
            if (placed < items.length) {
                feedback.textContent = "Place all six variables before checking. " + placed + " are currently classified.";
            } else if (correct === items.length) {
                feedback.textContent = "All six are correct. You classified each variable by meaning rather than appearance.";
            } else {
                feedback.textContent = correct + " of " + items.length + " are correct. Reconsider the highlighted variables and try again.";
            }
        });

        simulation.querySelector("[data-reset]").addEventListener("click", function () {
            items.forEach(function (item) {
                item.classList.remove("correct", "incorrect");
                bank.appendChild(item);
            });
            feedback.textContent = "Place all six variables, then check your reasoning.";
            updateStatus();
        });
        updateStatus();
    }

    function setupRandomSample(simulation) {
        var sizeInput = simulation.querySelector("[data-random-sample-size]");
        var result = simulation.querySelector(".sample-result");
        var explanation = simulation.querySelector(".sample-explanation");
        var status = simulation.querySelector(".simulation-status");

        function showSample(values, method, detail) {
            result.innerHTML = "";
            values.forEach(function (value) {
                var item = document.createElement("li");
                item.textContent = String(value).padStart(3, "0");
                result.appendChild(item);
            });
            status.textContent = method + " of " + values.length + " students";
            explanation.textContent = detail;
        }

        simulation.querySelectorAll("[data-sample-method]").forEach(function (button) {
            button.addEventListener("click", function () {
                var n = Math.max(5, Math.min(24, Number(sizeInput.value) || 12));
                sizeInput.value = n;
                if (button.dataset.sampleMethod === "srs") {
                    var population = Array.from({length: 120}, function (_, index) { return index + 1; });
                    for (var i = population.length - 1; i > 0; i -= 1) {
                        var j = Math.floor(Math.random() * (i + 1));
                        var temporary = population[i]; population[i] = population[j]; population[j] = temporary;
                    }
                    showSample(population.slice(0, n).sort(function (a, b) { return a - b; }), "SRS", "Every possible group of " + n + " students had the same chance before the numbers were generated.");
                } else {
                    var interval = Math.floor(120 / n);
                    var start = 1 + Math.floor(Math.random() * interval);
                    var values = Array.from({length: n}, function (_, index) { return start + index * interval; });
                    showSample(values, "Systematic sample", "The random start was " + start + " and the interval was " + interval + ". Notice the regular spacing.");
                }
            });
        });
        simulation.querySelector("[data-reset]").addEventListener("click", function () {
            result.innerHTML = "";
            status.textContent = "No sample generated";
            explanation.textContent = "The selected student numbers will appear here.";
        });
    }

    function setupSimulations() {
        document.querySelectorAll('[data-simulation="sampling"]').forEach(setupSamplingSimulation);
        document.querySelectorAll('[data-simulation="probability"]').forEach(setupProbabilitySimulation);
        document.querySelectorAll('[data-simulation="venn"]').forEach(setupVenn);
        document.querySelectorAll('[data-simulation="classification"]').forEach(setupClassification);
        document.querySelectorAll('[data-simulation="random-sample"]').forEach(setupRandomSample);
    }

    function setupCompletion() {
        var button = document.querySelector("[data-complete-lesson]");
        if (!button || !document.body.dataset.lessonId) return;
        button.addEventListener("click", function () {
            var key = "stats-complete-" + document.body.dataset.lessonId;
            var next = localStorage.getItem(key) !== "true";
            localStorage.setItem(key, next ? "true" : "false");
            updateLessonProgress();
        });
    }

    function setupUnitProgress() {
        document.querySelectorAll("[data-unit-progress]").forEach(function (element) {
            var ids = (element.dataset.lessonIds || "").split(",").filter(Boolean);
            var done = ids.filter(function (id) { return localStorage.getItem("stats-complete-" + id) === "true"; }).length;
            element.textContent = done + " of " + ids.length + " lessons completed";
        });
        document.querySelectorAll("[data-lesson-status]").forEach(function (element) {
            if (localStorage.getItem("stats-complete-" + element.dataset.lessonStatus) === "true") {
                element.classList.add("complete");
            }
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        setupRevealables();
        setupQuestions();
        setupSimulations();
        setupCompletion();
        setupUnitProgress();
        updateLessonProgress();
    });
}());
