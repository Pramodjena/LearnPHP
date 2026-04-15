<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Click</title>
</head>

<body>
    <h1>HTML ONCLICK</h1>
    <form action="" method="post">
        <button type="submit" id="btn" name="btn">Click Me</button>
    </form>
</body>

</html>


<?php

// isset()  : If a variable exist or not.
// true : if variable exist 
// false : if variable not exist 

if (isset($_REQUEST["btn"])) {
    buttonClick();
}


function buttonClick()
{
    echo "<script>
        
       alert('Boom !! You clicked me');


</script>";
}
?>