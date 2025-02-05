<?php
// Unit Converter - Convert value into feet and inches
function my_utility_tools_unit_converter_shortcode($atts) {
    ob_start(); ?>
    <form method="post">
        <input type="number" name="value" placeholder="Value in inches">
        <input type="submit" value="Convert to Feet & Inches">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['value'])) {
        $value = $_POST['value'];

        // Ensure the input is a number
        if (is_numeric($value) && $value > 0) {
            // Conversion logic: Convert inches to feet and inches
            $feet = floor($value / 12); // Get the number of full feet
            $inches = $value % 12;      // Get the remaining inches

            echo "<p>$value inches is equivalent to $feet feet and $inches inches.</p>";
        } else {
            echo "<p>Please enter a valid number.</p>";
        }
    }

    return ob_get_clean();
}
add_shortcode('unit_converter', 'my_utility_tools_unit_converter_shortcode');
