<!-- ============================================================ -->
<!-- BCA 5.1 Lab 3 - Form Page (form.html)                       -->
<!-- Design a web page to collect Name, Gender, and Email        -->
<!-- ============================================================ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3 - User Registration Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .form-container {
            background: white;
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #2d3748;
            margin-bottom: 8px;
            font-size: 24px;
            text-align: center;
        }

        .subtitle {
            color: #718096;
            text-align: center;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 8px;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.2s;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #667eea;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 8px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .radio-option input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: #667eea;
            cursor: pointer;
        }

        .radio-option span {
            font-size: 15px;
            color: #4a5568;
        }

        button[type="submit"] {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.1s;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            opacity: 0.92;
            transform: translateY(-1px);
        }

        .required {
            color: #e53e3e;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h1>📋 User Registration</h1>
        <p class="subtitle">BCA 5.1 Lab 3 — Fill in your details below</p>

        <!--
        Form action points to process.php (Lab 3 processing file)
        method="POST" sends data securely to the PHP handler
    -->
        <form action="lab3_process.php" method="POST">

            <!-- Name Field -->
            <div class="form-group">
                <label for="name">Full Name <span class="required">*</span></label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your full name"
                    required>
            </div>

            <!-- Gender Field -->
            <div class="form-group">
                <label>Gender <span class="required">*</span></label>
                <div class="radio-group">
                    <label class="radio-option">
                        <input type="radio" name="gender" value="Male" required>
                        <span>Male</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="gender" value="Female">
                        <span>Female</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="gender" value="Other">
                        <span>Other</span>
                    </label>
                </div>
            </div>

            <!-- Email Field -->
            <div class="form-group">
                <label for="email">Email Address <span class="required">*</span></label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email address"
                    required>
            </div>

            <button type="submit">Submit →</button>
        </form>
    </div>

</body>

</html>