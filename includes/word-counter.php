<?php
// Word Counter & Read Time Estimator
function my_utility_tools_word_counter_shortcode($atts, $content = null) {
    $word_count = str_word_count(strip_tags($content));
    $character_count = strlen(strip_tags($content));
    $paragraph_count = substr_count($content, "\n");

    // Estimate reading time (based on average 200 words per minute)
    $reading_time = ceil($word_count / 200);

    return "<p>Words: $word_count</p>
            <p>Characters: $character_count</p>
            <p>Paragraphs: $paragraph_count</p>
            <p>Estimated Reading Time: $reading_time min</p>";
}
add_shortcode('word_counter', 'my_utility_tools_word_counter_shortcode');
