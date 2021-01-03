<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>
<br>

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>
<br>

<?php
define("WOW", "Welcome to W3Schools.com!");

function myTest() {
  echo WOW;
}
 
myTest();
?>


</body>
</html>