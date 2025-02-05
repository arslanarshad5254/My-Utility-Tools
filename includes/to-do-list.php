<?php
// To-Do List Widget
function my_utility_tools_todo_list_widget() {
    ?>
    <div class="todo-list">
        <form method="post">
            <input type="text" name="task" placeholder="New Task">
            <input type="submit" value="Add Task">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['task'])) {
            // Save task to database or session
            echo "<p>Task added: " . $_POST['task'] . "</p>";
        }
        ?>
    </div>
    <?php
}
add_action('wp_dashboard_setup', function() {
    wp_add_dashboard_widget('my_utility_tools_todo_list_widget', 'To-Do List', 'my_utility_tools_todo_list_widget');
});
