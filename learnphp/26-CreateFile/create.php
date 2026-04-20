<?php

// PHP File Handling
// File handling is an important part of any web application. You often need to open and process a file for different tasks.

// PHP has several built-in functions for creating, reading, uploading, and editing files.

// The core functions for file handling is:

// readfile() - reads a file and writes it to the output buffer
// fopen() - opens a file (gives you more options than the readfile() function)
// fread() - reads from a file
// fgets() - reads a single line from a file
// fgetc() - reads a single character from a file
// feof() - checks if the "end-of-file" (EOF) has been reached
// fwrite() - writes to a file
// fclose() - closes an open file
// unlink() - deletes a file


// AJAX = Asynchronous JavaScript and XML
// CSS = Cascading Style Sheets
// HTML = Hyper Text Markup Language
// PHP = PHP Hypertext Preprocessor
// SQL = Structured Query Language
// SVG = Scalable Vector Graphics
// XML = EXtensible Markup Language


// Mode	Description
// r	Read only. File pointer starts at the beginning of the file
// r+	Read/Write. File pointer starts at the beginning of the file. Existing data is preserved
// w	Write only. Erases the contents of the file, or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// w+	Read/Write. Erases the contents of the file, or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
// a	Append (write only). The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// a+	Append (read/write). The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
// x	Write only. Creates a new file. Returns FALSE and an error if file already exists
// x+	Read/Write. Creates a new file. Returns FALSE and an error if file already exists

if (isset($_POST["file"])) {
    $fileName = __DIR__ . "/" . $_POST["file"];
    $content = $_POST["content"];

    $file = fopen($fileName, "w") or die("Permission issue!");
    fwrite($file, $content);
    fclose($file);

    echo "File has been created!!!";
}



// Read multiple files inside one folder :

// $path = __DIR__;
// $items = scandir($path);
// $items = array_diff($items, array(".", ".."));
// foreach ($items as $item) {
    // echo "<a href='$path'>$item</a>" . "<br>";
//     echo $item . "<br>";
// }

?>

<form action="" method="post">
    <label for="file">Add file:</label>
    <input type="text" name="file" id="file">
    <br>
    <br>
    <label for="content">Add content:</label>
    <textarea name="content" id="content"></textarea>
    <br>
    <br>
    <input type="submit" value="Add">
</form>