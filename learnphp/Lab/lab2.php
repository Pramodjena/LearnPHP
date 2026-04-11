<?php
// ============================================================
// BCA 5.1 Lab 2 - Web Development with PHP
// Programs: Letters/Words in Name | Reverse Name | Date/Time/Age
// ============================================================
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 - PHP Name & DOB Programs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0fff4;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2d3748;
            text-align: center;
        }

        h2 {
            color: #276749;
            border-bottom: 2px solid #48bb78;
            padding-bottom: 8px;
        }

        input[type="text"],
        input[type="date"] {
            padding: 8px;
            margin: 5px;
            border: 1px solid #9ae6b4;
            border-radius: 5px;
            width: 250px;
        }

        button {
            background: #48bb78;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #38a169;
        }

        .result {
            background: #f0fff4;
            border-left: 4px solid #48bb78;
            padding: 12px;
            margin-top: 15px;
            border-radius: 4px;
            color: #276749;
        }

        .result p {
            margin: 5px 0;
        }

        label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 130px;
        }
    </style>
</head>

<body>

    <h1>📝 BCA 5.1 - Lab 2: Name & Date of Birth Programs</h1>

    <!-- ============================================================ -->
    <!-- PROGRAM 2a, 2b, 2c: All based on Name + DOB input           -->
    <!-- ============================================================ -->
    <div class="card">
        <h2>Enter Your Name & Date of Birth</h2>
        <form method="POST" action="">
            <label>Full Name:</label>
            <input type="text" name="full_name" placeholder="e.g. Pramod Kumar" value="<?= isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : '' ?>" required>
            <br><br>
            <label>Date of Birth:</label>
            <input type="date" name="dob" value="<?= isset($_POST['dob']) ? htmlspecialchars($_POST['dob']) : '' ?>" required>
            <br>
            <button type="submit" name="submit_info">Submit</button>
        </form>

        <?php
        if (isset($_POST['submit_info'])) {
            $full_name = trim($_POST['full_name']);
            $dob       = $_POST['dob'];

            // -------------------------------------------------------
            // 2a. Find the number of letters and words in the name
            // -------------------------------------------------------
            // Count words by splitting on spaces
            $words       = explode(' ', $full_name);
            $word_count  = count($words);

            // Count only alphabetic characters (letters), ignoring spaces
            $letter_count = 0;
            for ($i = 0; $i < strlen($full_name); $i++) {
                if (ctype_alpha($full_name[$i])) {
                    $letter_count++;
                }
            }

            // -------------------------------------------------------
            // 2b. Display the Name in Reverse Order
            // -------------------------------------------------------
            $reversed_name = strrev($full_name);

            // -------------------------------------------------------
            // 2c. Print the current date, time, and age of the user
            // -------------------------------------------------------
            $current_datetime = date('d-m-Y H:i:s');  // Current date and time

            // Calculate age
            $dob_date   = new DateTime($dob);
            $today      = new DateTime();
            $age_diff   = $today->diff($dob_date);
            $age_years  = $age_diff->y;
            $age_months = $age_diff->m;
            $age_days   = $age_diff->d;

            // Display all results
            echo "
        <div class='result'>
            <h3>📊 Results:</h3>

            <p><strong>2a. Name Analysis:</strong></p>
            <p>🔤 Number of Letters in \"$full_name\": <strong>$letter_count</strong></p>
            <p>📝 Number of Words in \"$full_name\": <strong>$word_count</strong></p>

            <hr>
            <p><strong>2b. Name in Reverse Order:</strong></p>
            <p>🔄 Reversed Name: <strong>$reversed_name</strong></p>

            <hr>
            <p><strong>2c. Current Date, Time & Age:</strong></p>
            <p>📅 Current Date & Time: <strong>$current_datetime</strong></p>
            <p>🎂 Date of Birth: <strong>" . date('d-m-Y', strtotime($dob)) . "</strong></p>
            <p>👤 Your Age: <strong>$age_years years, $age_months months, $age_days days</strong></p>
        </div>";
        }
        ?>
    </div>

</body>

</html>