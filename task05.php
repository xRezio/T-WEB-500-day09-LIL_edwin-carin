<?php
function form_is_submitted() {
    return isset($_POST['submit']);
}

function whoami() {
    $name = isset($_POST['name']) ? $_POST['name'] : "I have no name";
    $age = isset($_POST['age']) && is_numeric($_POST['age']) ? $_POST['age'] : "no age";
    $curriculum = isset($_POST['curriculum']) ? $_POST['curriculum'] : "";

    $intro = "Hi, my name is $name";
    if ($age !== "no age") {
        $intro .= " and I'm $age years old.";
    }
    if (!empty($curriculum)) {
        $intro .= ". I'm a student of $curriculum.";
    }

    echo $intro;
}
?>
