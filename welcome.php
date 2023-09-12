<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first Php code</h1>
    <?php
    echo "Hello World";
    echo "Date is:" ." ".date("j-m-y,h:i:s"). "<br>";
    $color = "Red";"<br>";
    echo "$color" ."<br>";
    $today = "Monday" ."<br>";
    echo "Today is on a". " ".$today;

    $x= 10;
    $y= 6.5;
    echo "the value of x and y is"." ".$x+$y;
    echo "<h2>this is fun</h2>"."<br>";
    echo "Hello World"."<br>";
    print "Hello World"."<br>";
    print "<h2>Studying php is fun and cool</h2>";
    $x1 = 1234;
    echo "$x1"."<br>";
    var_dump($x1)."<br>";
    $y2= 2.3;
    print "$y2"."<br>";
    var_dump($y2)."<br>";
    $cars = array("Volvo", "Mercedes", "BMW", "Toyota")."<br>";
    var_dump($cars);
    echo ($cars)
    ?>
</body>
</html>