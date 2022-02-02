<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise2, Vjatšeslav Semjonov</title>
</head>
<body>

<h1>Exercise 3</h1>
<h2>Task 1</h2>
<?php
$d = date("F");
if ($d == "August"){
    echo "It's August, so it's still holiday. <br>";
}
else {
    echo "Not August, This is $d so i don't have any holidays <br>";
}
?>
<h2>Task 2</h2>
<?php
$color = "red";
if ($color == "red"){
    echo "The color is red.  <br>";
}
else {
    echo "The color is not red. <br>";
}
#nothing changed
?>
<h2>Task 3</h2>
<?php
$x = 75;
switch ($x) {
    case $x>80:
        echo "Excellent";
        echo "<br>";
        break;
    case $x>70 && $x<80:
        echo "Great";
        echo "<br>";
        break;
    case $x>60 && $x<70:
        echo "Good";
        echo "<br>";
        break;
    case $x>50 && $x<60:
        echo "Pass";
        echo "<br>";
        break;
    case $x<50:
            echo "Fail";
            echo "<br>";
            break;
}
?>
<h2>Task 4</h2>
<form action="site.php" method="get">
<?php
$a = (int)readline('Enter your age: ');
if ($a >= 18){
    echo "You are eligible for voting.  <br>";
}
else {
    echo "You aren't eligible for voting. <br>";
}

?>
<h2>Task 5</h2>
<?php
#part1 = 'Vjatšeslav "
#Parse error: syntax error, unexpected token "=" in /var/www/html/exercise2.php on line 37
?>
<h2>Task 6</h2>
<?php
echo "\" It is Markku's car.\"<br />", 'Random characters: del c:\*.* "'
?>
<h2>Task 7</h2>
<?php
$x = 298;
$y = 234;
$z = 46;
echo "The sum of x, y and z is : ". ($x+$y+$z) ."<br />";
?>
<h2>Task 8</h2>
<?php
$a = 87;
$b = 44;
$c = 200;
$d = 15;
$e = 10;
echo "(87 + 44)+(200 * 15) / 10 = ". (($a + $b)+($c * $d) / $e) ."<br />";
?>
</body>
</html>