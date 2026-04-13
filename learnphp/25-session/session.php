<?php
// STEP 1: Start session (VERY IMPORTANT - always at top)
session_start();

$message = "";

// STEP 2: SET SESSION
if (isset($_POST['set'])) {
    $name = $_POST['username'];

    if (!empty($name)) {
        $_SESSION['username'] = $name;
        $message = "✅ Session has been set successfully!";
    } else {
        $message = "⚠️ Please enter a name!";
    }
}

// STEP 3: GET SESSION
if (isset($_POST['get'])) {
    if (isset($_SESSION['username'])) {
        $message = "👤 Stored Session Value: " . $_SESSION['username'];
    } else {
        $message = "❌ No session found!";
    }
}

// STEP 4: DELETE SESSION
if (isset($_POST['delete'])) {
    if (isset($_SESSION['username'])) {
        session_unset();   // remove all session variables
        session_destroy(); // destroy session completely
        $message = "🗑️ Session deleted successfully!";
    } else {
        $message = "⚠️ No session to delete!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Session Manager</title>
</head>

<body>

    <h2>🔐 PHP Session Manager (Beginner Project)</h2>

    <form method="post">
        <label>Enter Name:</label><br>
        <input type="text" name="username" placeholder="Enter username"><br><br>

        <button type="submit" name="set">Set Session</button>
        <button type="submit" name="get">Get Session</button>
        <button type="submit" name="delete">Delete Session</button>
    </form>

    <h3><?php echo $message; ?></h3>

</body>

</html>




<!-- What is a Session? -->

<!-- 👉 Definition (Exam Ready): -->
<!-- A session is a server-side mechanism used to store user data temporarily across multiple web pages using a unique session ID. -->

<!-- Maintain user login state
Store temporary data
Improve security (compared to cookies) -->

<!-- Login system
Shopping cart
User preferences (secure ones) -->


<!-- How Session Works (Flow)
User visits website
PHP creates a unique session ID
ID is stored in browser (cookie → PHPSESSID)
Actual data is stored on server
Every request → ID is sent → data is fetched

👉 Think:

Browser = ID card holder
Server = database -->

<!-- session_start() :

👉 Must be:

At the top of the file
Before any HTML output -->

session_unset(); // remove all session variables
session_destroy(); // destroy session completely