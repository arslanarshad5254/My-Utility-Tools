<?php
// SEO Keyword Analyzer
function my_utility_tools_seo_analyzer_shortcode($content) {
    $keyword_count = substr_count(strtolower($content), 'keyword'); // Replace 'keyword' with dynamic keywords
    $total_words = str_word_count(strip_tags($content));

    $density = ($keyword_count / $total_words) * 100;
    return "<p>Keyword Density: $density%</p>";
}
add_shortcode('seo_analyzer', 'my_utility_tools_seo_analyzer_shortcode');
