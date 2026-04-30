
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['name'])) {
        $name = htmlspecialchars(trim($_POST['name']));
        echo "<h1>Hello, {$name}</h1>";
    } else {
        echo "<h1>Please enter your name</h1>";
    }
}

?> 