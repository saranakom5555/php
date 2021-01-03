<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = 10;  
$y = 6;

echo $x + $y;
?>  
<br>

<?php
$x = 10;  
echo $x;
?>  
<br>

<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>  
<br>

<?php
$x = 10;  
echo ++$x;
?> 
<br>

<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>  
<br>

<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>  
<br>

<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>  
<br>

<?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>  
</body>
</html>