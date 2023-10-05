<?php
function whoami() {
    $name = isset($_POST['name']) ? $_POST['name'] : "I have no name";
    $age = isset($_POST['age']) && is_numeric($_POST['age']) ? $_POST['age'] : "no age";

    if ($name !== "I have no name" && $age !== "no age") {
        echo "Hi, my name is $name and I'm $age years old.";
    } elseif ($name === "I have no name" && $age !== "no age") {
        echo "Hi, I have no name and I'm $age years old.";
    } elseif ($name !== "I have no name" && $age === "no age") {
        echo "Hi, my name is $name.";
    } else {
        echo "I have no name and no age.";
    }
}
?>
