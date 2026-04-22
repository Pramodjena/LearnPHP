<?php

$stu_id = $_GET["id"];

include "./config.php";

$sql = "DELETE FROM student WHERE sid = {$stu_id}";

$result =  mysqli_query($conn, $sql) or die("query unsuccessful!!");

header("Location: http://localhost/learnphp/CRUD_Starter/index.php");

mysqli_close($conn);
