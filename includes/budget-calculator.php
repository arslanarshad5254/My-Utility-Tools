<?php
// Budget Calculator
function my_utility_tools_budget_calculator_shortcode($atts) {
    ob_start(); ?>
    <form method="post">
        <input type="number" name="income" placeholder="Monthly Income">
        <input type="number" name="expenses" placeholder="Monthly Expenses">
        <input type="number" name="goal" placeholder="Savings Goal">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $income = $_POST['income'];
        $expenses = $_POST['expenses'];
        $goal = $_POST['goal'];

        $remaining = $income - ($expenses + $goal);
        $savings_percentage = ($goal / $income) * 100;
        $expenses_percentage = ($expenses / $income) * 100;

        echo "<p>Remaining Income: $remaining</p>";
        echo "<p>Savings Goal Percentage: $savings_percentage%</p>";
        echo "<p>Expenses Percentage: $expenses_percentage%</p>";
    }

    return ob_get_clean();
}
add_shortcode('budget_calculator', 'my_utility_tools_budget_calculator_shortcode');
