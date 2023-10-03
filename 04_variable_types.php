<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable types</title>
</head>


<body>
<?php
echo"<h2>Variables Types</h2>";
echo"Integers<br> ";
        
    $int_var = 12345;
    $another_int = -12345 + 12345;

    echo $int_var;
    echo"<br>";
    print($another_int);
        ?>
        
<?php
echo"<br><br>Doubles<br>";

   $many = 2.2888800;
   $many_2 = 2.2111200;
   $few = $many + $many_2;
   
   print("$many + $many_2 = $few ");
?>

<?php
echo"<br><br>Strings<br>";
   $variable = "name";
   $literally = 'My $variable will not print!';
   
   print($literally);
   print "<br>";
   
   $literally = "My $variable will print!<br>";
   print($literally);
   
?>

<?php
echo"<br>Here Document<br>";
   $channel =<<<_XML_
   
   <channel>
   
      <title>What's For Dinner </title><br>
      <link>http://menu.example.com/ </link>
      <description>Choose what to eat tonight.</description>
   </channel>
_XML_;
   echo <<<END
   This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
 <br/>
END;

    print $channel;
?> 
    <?php
echo"<br><br>Local Variables<br>";


    $x = 4;
    function assignx () {
    
$x = 0;
print "\$x inside function is $x.<br/>
";
}
assignx();
print "\$x outside of function is $x.<br/>
";?>      

<?php
echo"<br>PHP Function Parameters<br>";
// multiply a value by 10 and return it to the caller
function multiply ($value) {
 $value = $value * 10;
 return $value;
}
$retval = multiply (10);
Print "Return value is $retval\n";
?>


<?php
echo"<br><br>PHP Global Variables<br>";
$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();
?>
        


        <?php
echo"<br><br>PHP Static Variables<br>";

function keep_track() {
 STATIC $count = 0;
 $count++;
 print $count;
 print "
";

}
keep_track();
keep_track();
keep_track();
?>
</body>
</html>