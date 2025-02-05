<?php
// Time Zone Converter & Calculator
function my_utility_tools_timezone_converter_shortcode($atts) {
    $atts = shortcode_atts(array(
        'from' => 'UTC',
        'to' => 'UTC',
        'time' => 'now'
    ), $atts);

    $from_time = new DateTime("now", new DateTimeZone($atts['from']));
    $from_time->setTimestamp(strtotime($atts['time']));

    $to_time = $from_time->setTimezone(new DateTimeZone($atts['to']));

    return "Converted Time: " . $to_time->format('Y-m-d H:i:s');
}
add_shortcode('timezone_converter', 'my_utility_tools_timezone_converter_shortcode');
