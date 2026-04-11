<?php

for ($i = 0; $i < 5; $i++) {
    // include("hello.php"); // warnings only we can manage in production 
    // include_once("./hello.php");

    // require("./hello.php");  // Fatal error : cannot manage in production 
    require_once("./hello.php");
}
