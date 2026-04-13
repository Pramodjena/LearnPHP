<?php

// Cookies : 
// A cookie is a small piece of data stored in the user’s browser by the server.

// 👉 Used for:
// Login sessions
// User preferences
// Tracking users

// setcookie(name, value, expiry, path, domain, secure, httponly);

// setcookie("username", "Pramod", time() + 3600);

// "username" → cookie name
// "Pramod" → value
// time() + 3600 → expires in 1 hour


// Set cookie
// setcookie("user", "Pramod", time() + 3600);

// Access cookie :
// if (isset($_COOKIE["user"])) {
//     echo "Welcome " . $_COOKIE["user"];
// }

$message = "";

// SET COOKIE
if (isset($_POST['set'])) {
    $name = "username";
    $value = "Pramod";
    setcookie($name, $value, time() + 3600); // 1 hour
    $message = "✅ Cookie has been set!";
}

// GET COOKIE
if (isset($_POST['get'])) {
    if (isset($_COOKIE['username'])) {
        $message = "👤 Cookie Value: " . $_COOKIE['username'];
    } else {
        $message = "⚠️ Cookie not found!";
    }
}

// DELETE COOKIE
if (isset($_POST['delete'])) {
    setcookie("username", "", time() - 3600);
    $message = "❌ Cookie deleted!";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Cookie Project</title>
</head>

<body>

    <h2>🍪 PHP Cookie Manager</h2>

    <form method="post">
        <button type="submit" name="set">Set Cookie</button>
        <button type="submit" name="get">Get Cookie</button>
        <button type="submit" name="delete">Delete Cookie</button>
    </form>

    <h3><?php echo $message; ?></h3>

</body>

</html>


<!-- What is a Cookie?

👉 Definition (Exam Ready):
A cookie is a small piece of data stored in the user’s browser used to remember information across web pages. -->

Why Cookies are Used
<!-- Remember user preferences (theme, language)
Auto-fill login (remember me)
Track user activity (analytics)

Example:

“Remember Me” login
Dark mode setting
Last visited page -->

<!-- How Cookies Work (Flow)
Server sends cookie using setcookie()
Cookie is stored in browser
Browser sends cookie back on every request
Server reads cookie

<!-- 👉 Think:

Cookie = data stored in user’s device
Browser = storage manager -->

Where Cookies are Stored?

👉 In browser:

Open DevTools:
Application → Storage → Cookies

Example:

username = Pramod

👉 You can:

View
Edit
Delete manually -->

<!-- setcookie(name, value, expiry, path, domain, secure, httponly); -->

<!-- expiry → time limit
secure → HTTPS only
httponly → block JS access -->

<!-- Limitations of Cookies
Max size ≈ 4KB
Stored on client → less secure
Can be modified by user -->