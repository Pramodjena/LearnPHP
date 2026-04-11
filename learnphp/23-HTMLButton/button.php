<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Button Click</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Button Click Functionality</h1>
  <form action="" method="post">
    <input id="btn" name="btn" type="submit" value="Click" />
  </form>
  <br>
  <br>
</body>

</html>
<!-- isset() is a built-in PHP function used to check whether a variable:

exists, and
is not NULL

👉 Returns:

true → if variable is set and not null
false → if variable is not set or null -->

<?php if (isset($_REQUEST["btn"])) {
  btnClick();
}

function btnClick()
{
  // echo '<marquee id="marquee" behavior="" direction="">You just have boom the button !!!</marquee>';
  echo "<script>alert('You just clicked the button! 🚀');</script>";
}

?>