<?php
// AJAX handler
if(isset($_POST['otp'])) {

    $enteredOtp = $_POST['otp'];

    if(isset($_COOKIE['otp']) && isset($_COOKIE['otp_expiry'])) {

        if(time() > $_COOKIE['otp_expiry']) {
           echo "⛔ OTP expired!";
        } 
        else if($enteredOtp == $_COOKIE['otp']) {
             echo "✅ OTP Verified Successfully!";
        }  
        else {
            echo "❌ Invalid OTP!";
        }

    } else {
         echo "⚠️ No OTP found!";
    }

    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
    <style>
        .otp {
            width: 40px;
            height: 40px;
            font-size: 20px;
            text-align: center;
            margin: 5px;
        }
    </style>
</head>
<body>

<h2>Enter OTP</h2>

<div>
    <input type="text" maxlength="1" class="otp">
    <input type="text" maxlength="1" class="otp">
    <input type="text" maxlength="1" class="otp">
    <input type="text" maxlength="1" class="otp">
</div>

<br>
<button onclick="checkOTP()">Submit</button>

<p id="result"></p>

<script>
const inputs = document.querySelectorAll(".otp");

// 👉 Move forward + allow only numbers
inputs.forEach((input, index) => {

    input.addEventListener("input", (e) => {
        e.target.value = e.target.value.replace(/[^0-9]/g, '');

        if (e.target.value && index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    });

    // 👉 Backspace goes back
    input.addEventListener("keydown", (e) => {
        if (e.key === "Backspace" && input.value === "" && index > 0) {
            inputs[index - 1].focus();
        }
    });

    // 👉 Paste full OTP
    input.addEventListener("paste", (e) => {
        let paste = e.clipboardData.getData("text").replace(/[^0-9]/g, '');

        if (paste.length === 4) {
            inputs.forEach((inp, i) => inp.value = paste[i]);
        }
    });

});


// 👉 Combine all inputs
function getOTP() {
    return [...inputs].map(i => i.value).join('');
}


// 👉 AJAX submit (no refresh)
function checkOTP() {

    let otp = getOTP();

    if (otp.length !== 4) {
        alert("Enter complete OTP");
        return;
    }

    fetch("verify.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "otp=" + otp
    })
    .then(res => res.text())
    .then(data => {
        document.getElementById("result").innerHTML = data;
    });
}
</script>

</body>
</html>