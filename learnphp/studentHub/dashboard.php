<?php
session_start();
include("includes/header.php");

// SESSION CHECK
if (!isset($_SESSION['name'])) {
    echo "Please login first!";
    exit();
}

// COOKIE
$user = isset($_COOKIE['user']) ? $_COOKIE['user'] : "Guest";

// TODO SESSION ARRAY
if (!isset($_SESSION['todo'])) {
    $_SESSION['todo'] = [];
}

// ADD TODO
if (isset($_POST['task'])) {
    $_SESSION['todo'][] = $_POST['task'];
}
?>

<h3>Welcome <?php echo $user; ?></h3>

<img src="<?php echo $_SESSION['photo']; ?>" width="150"><br><br>

<h4>Mini Todo</h4>

<form method="POST">
    <input type="text" name="task" placeholder="Enter task">
    <button type="submit">Add</button>
</form>

<ul>
    <?php
    foreach ($_SESSION['todo'] as $task) {
        echo "<li>$task</li>";
    }
    ?>
</ul>

<a href="logout.php">Logout</a>

<?php include("includes/footer.php"); ?>