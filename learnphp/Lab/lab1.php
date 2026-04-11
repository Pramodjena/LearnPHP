<?php
// ============================================================
// BCA 5.1 Lab 1 - Web Development with PHP
// Programs: Greatest of 3 Numbers | Sum M to N | Factorial
// ============================================================
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - PHP Math Programs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
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
            color: #4a5568;
            border-bottom: 2px solid #667eea;
            padding-bottom: 8px;
        }

        input[type="number"] {
            padding: 8px;
            margin: 5px;
            border: 1px solid #cbd5e0;
            border-radius: 5px;
            width: 120px;
        }

        button {
            background: #667eea;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #5a67d8;
        }

        .result {
            background: #ebf8ff;
            border-left: 4px solid #4299e1;
            padding: 10px;
            margin-top: 15px;
            border-radius: 4px;
            color: #2b6cb0;
            font-weight: bold;
        }

        label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>

<body>

    <h1>🔬 BCA 5.1 - Lab 1: PHP Math Programs</h1>

    <!-- ============================================================ -->
    <!-- PROGRAM 1a: Find Greatest Among Three Numbers                -->
    <!-- ============================================================ -->
    <div class="card">
        <h2>1a. Greatest Among Three Numbers</h2>
        <form method="POST" action="">
            <label>Number 1:</label>
            <input type="number" name="n1" value="<?= isset($_POST['n1']) ? htmlspecialchars($_POST['n1']) : '' ?>" required>
            <label>Number 2:</label>
            <input type="number" name="n2" value="<?= isset($_POST['n2']) ? htmlspecialchars($_POST['n2']) : '' ?>" required>
            <label>Number 3:</label>
            <input type="number" name="n3" value="<?= isset($_POST['n3']) ? htmlspecialchars($_POST['n3']) : '' ?>" required>
            <br>
            <button type="submit" name="find_greatest">Find Greatest</button>
        </form>

        <?php
        if (isset($_POST['find_greatest'])) {
            $n1 = (float)$_POST['n1'];
            $n2 = (float)$_POST['n2'];
            $n3 = (float)$_POST['n3'];

            // Logic: Compare all three numbers
            if ($n1 >= $n2 && $n1 >= $n3) {
                $greatest = $n1;
            } elseif ($n2 >= $n1 && $n2 >= $n3) {
                $greatest = $n2;
            } else {
                $greatest = $n3;
            }

            echo "<div class='result'>✅ Greatest Number among ($n1, $n2, $n3) is: <strong>$greatest</strong></div>";
        }
        ?>
    </div>


    <!-- ============================================================ -->
    <!-- PROGRAM 1b: Print Sum of Numbers from M to N                -->
    <!-- ============================================================ -->
    <div class="card">
        <h2>1b. Sum of Numbers from M to N</h2>
        <form method="POST" action="">
            <label>M (Start):</label>
            <input type="number" name="m" value="<?= isset($_POST['m']) ? htmlspecialchars($_POST['m']) : '' ?>" required>
            <label>N (End):</label>
            <input type="number" name="n" value="<?= isset($_POST['n']) ? htmlspecialchars($_POST['n']) : '' ?>" required>
            <br>
            <button type="submit" name="find_sum">Calculate Sum</button>
        </form>

        <?php
        if (isset($_POST['find_sum'])) {
            $m = (int)$_POST['m'];
            $n = (int)$_POST['n'];

            if ($m > $n) {
                echo "<div class='result'>⚠️ M must be less than or equal to N.</div>";
            } else {
                $sum = 0;
                // Loop from M to N and accumulate sum
                for ($i = $m; $i <= $n; $i++) {
                    $sum += $i;
                }
                echo "<div class='result'>✅ Sum of numbers from $m to $n = <strong>$sum</strong></div>";
            }
        }
        ?>
    </div>


    <!-- ============================================================ -->
    <!-- PROGRAM 1c: Find Factorial of a Number                       -->
    <!-- ============================================================ -->
    <div class="card">
        <h2>1c. Factorial of a Number</h2>
        <form method="POST" action="">
            <label>Enter Number:</label>
            <input type="number" name="fact_num" min="0" max="20" value="<?= isset($_POST['fact_num']) ? htmlspecialchars($_POST['fact_num']) : '' ?>" required>
            <br>
            <button type="submit" name="find_factorial">Find Factorial</button>
        </form>

        <?php
        if (isset($_POST['find_factorial'])) {
            $num = (int)$_POST['fact_num'];

            if ($num < 0) {
                echo "<div class='result'>⚠️ Factorial is not defined for negative numbers.</div>";
            } else {
                // Calculate factorial using a loop
                $factorial = 1;
                for ($i = 1; $i <= $num; $i++) {
                    $factorial *= $i;
                }
                echo "<div class='result'>✅ Factorial of $num = <strong>$factorial</strong></div>";
            }
        }
        ?>
    </div>

</body>

</html>