<?php
// Security Checker
function my_utility_tools_security_checker() {
    $plugins = get_plugins();
    foreach ($plugins as $plugin_name => $plugin) {
        if (version_compare($plugin['Version'], '1.0', '<')) { // Example version check
            echo "<p>Outdated Plugin: $plugin_name. Please update.</p>";
        }
    }
}
add_action('admin_notices', 'my_utility_tools_security_checker');
