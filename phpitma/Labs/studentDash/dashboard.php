<?php
include("./include/header.php");

// LOGIN CHECK (using cookie instead of session)
if (!isset($_COOKIE['user'])) {
    echo "Please login first!";
    exit();
}

$user = $_COOKIE['user'];

// TODO COOKIE INIT
if (isset($_COOKIE['todo'])) {
    $todo = json_decode($_COOKIE['todo'], true);
} else {
    $todo = [];
}

// ADD TODO
if (isset($_POST['task']) && !empty($_POST['task'])) {
    $todo[] = $_POST['task'];

    // Update cookie
    setcookie("todo", json_encode($todo), time() + 3600);

    // Prevent duplicate submission on refresh
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <h3>Welcome <?php echo $user; ?></h3>

    <!-- IMAGE FROM COOKIE -->
    <?php
    if (isset($_COOKIE['photo'])) {
        echo "<img src='" . $_COOKIE['photo'] . "' width='150'><br><br>";
    } else {
        echo "No image found<br><br>";
    }
    ?>

    <h4>Mini Todo</h4>

    <form method="POST">
        <input type="text" name="task" placeholder="Enter task" required autocomplete="off">
        <button type="submit">Add</button>
    </form>

    <ul>
        <?php
        foreach ($todo as $task) {
            echo "<li>$task</li>";
        }
        ?>
    </ul>

    <a href="logout.php">Logout</a>

</body>

</html>
<?php include("./include/footer.php") ?>