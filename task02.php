<?php
function render_body($page) {
    $allowed_pages = array("home", "php", "sql");
    
    if (in_array($page, $allowed_pages)) {
        $file_path = $page . ".html";
        if (file_exists($file_path)) {
            return file_get_contents($file_path);
        } else {
            return "<p>Page not found</p>";
        }
    } else {
        return "<p>Unknown page</p>";
    }
}
?>
