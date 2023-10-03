<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>

</head>
<body>
<?php
echo"<h2>Constants</h2>";
echo'A constant is a name or an identifier for a fixed value.<br>
Constants are defined using PHP define function, which accepts two arguments: 
the name of the constant, and its value. <br>Once defined the constant value can be accessed at any time just by referring to its name.';
echo"Constant function<br>Examples:<br>";
    define("MINSIZE", 50);
    echo'<br><br>';
    echo MINSIZE;
    echo constant("MINSIZE"); 
    echo'<br><br>';
// Defining constant

// Valid constant names
define("ONE", "first thing");
define("TWO2", "second thing");
define("THREE_3", "third thing");
echo ONE;
echo constant("ONE");

define("SITE_URL", "https://github.com/LyzzaP/PHPprojects/");
 
// Using constant
echo '<br><br>Thank you for visiting - ' . SITE_URL;





?>

</body>
</html>