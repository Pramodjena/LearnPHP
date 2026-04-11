<?php
// ============================================================
// BCA 5.1 Lab 3 - Process Page (lab3_process.php)
// Collects data from form (lab3_form.html) and displays it
// ============================================================

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve and sanitize form data
    // htmlspecialchars() prevents XSS attacks by converting special characters
    $name   = htmlspecialchars(trim($_POST['name']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $email  = htmlspecialchars(trim($_POST['email']));

    // Validate that all fields are filled
    $errors = [];
    if (empty($name))   $errors[] = "Name is required.";
    if (empty($gender)) $errors[] = "Gender is required.";
    if (empty($email))  $errors[] = "Email is required.";
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
} else {
    // If someone visits this page directly without form submission
    header('Location: lab3_form.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3 - Submitted Details</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #48bb78 0%, #276749 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .result-container {
            background: white;
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #2d3748;
            text-align: center;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #718096;
            text-align: center;
            margin-bottom: 30px;
            font-size: 14px;
        }

        /* Success card styling */
        .success-icon {
            font-size: 60px;
            text-align: center;
            margin-bottom: 20px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            border-bottom: 1px solid #e2e8f0;
        }

        .detail-row:last-of-type {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: #718096;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .detail-value {
            font-size: 16px;
            color: #2d3748;
            font-weight: 500;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 25px;
            padding: 12px;
            background: linear-gradient(135deg, #48bb78, #276749);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            transition: opacity 0.2s;
        }

        .back-btn:hover {
            opacity: 0.9;
        }

        /* Error box styling */
        .error-box {
            background: #fff5f5;
            border: 2px solid #fc8181;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .error-box p {
            color: #c53030;
            margin: 4px 0;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="result-container">

        <?php if (!empty($errors)): ?>
            <!-- SHOW ERRORS if validation failed -->
            <h1>⚠️ Oops!</h1>
            <p class="subtitle">Please fix the following errors:</p>
            <div class="error-box">
                <?php foreach ($errors as $error): ?>
                    <p>❌ <?= $error ?></p>
                <?php endforeach; ?>
            </div>
            <a href="lab3_form.html" class="back-btn">← Go Back & Fix</a>

        <?php else: ?>
            <!-- SHOW SUCCESS and display submitted data -->
            <div class="success-icon">🎉</div>
            <h1>Details Submitted!</h1>
            <p class="subtitle">Here's what you entered in the form:</p>

            <div class="detail-row">
                <span class="detail-label">👤 Name</span>
                <span class="detail-value"><?= $name ?></span>
            </div>

            <div class="detail-row">
                <span class="detail-label">⚧ Gender</span>
                <span class="detail-value"><?= $gender ?></span>
            </div>

            <div class="detail-row">
                <span class="detail-label">📧 Email</span>
                <span class="detail-value"><?= $email ?></span>
            </div>

            <a href="lab3_form.html" class="back-btn">← Submit Another Response</a>

        <?php endif; ?>

    </div>

</body>

</html>