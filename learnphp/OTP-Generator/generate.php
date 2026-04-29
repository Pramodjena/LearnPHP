<?php
if (isset($_POST['generate'])) {
    $otp = random_int(1000, 9999);
    $expiry = time() + 15;

    setcookie("otp", $otp, $expiry);
    setcookie("otp_expiry", $expiry, $expiry);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Generate OTP</title>
</head> 

<body>

    <h2>Generate OTP</h2>

    <form method="post">
        <button type="submit" name="generate">Generate OTP</button>
    </form>

    <?php if (isset($otp)): ?>
        <h3>Your OTP: <?php echo $otp; ?></h3>
        <p id="timer">Valid for: 15 seconds</p>

        <script>
            let timeLeft = 15;
            let timer = document.getElementById("timer");

            let countdown = setInterval(() => {
                timeLeft--;
                timer.innerHTML = "Valid for: " + timeLeft + " seconds";

                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    timer.innerHTML = "⛔ OTP expired!";
                }
            }, 1000);
        </script>

        <br>
        <a href="verify.php">Go to Verify Page</a>
    <?php endif; ?>

</body>

</html>