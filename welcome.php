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
    <?php
    class Car {
        public $color ;
        public $model ;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;

        }
        public function message(){
            return "My Car is a  ". $this->color. "   ". $this->model;;
        }
    }
    $myCar = new Car("Black", "Volvo");
    echo $myCar -> message();
    echo "<br>";
    $s = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum temporibus assumenda explicabo sapiente incidunt, nemo ipsam animi. Nam aliquam ipsum libero! Dolor illum laborum molestiae laboriosam similique deleniti impedit. Qui?"."<br>";
    echo "$s"."<br>";
    echo strlen($s)."<br>";
    echo str_word_count($s)."<br>";
    
    echo strpos($s, "animi")."<br>";
    echo str_replace("nemo","kibet",$s);

    $x = 5985;
    var_dump(is_numeric($x))."<br>";

    $x = "5985";
    var_dump(is_numeric($x))."<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x))."<br>";

    $x = "Hello";
    var_dump(is_numeric($x))."<br>";
    echo(rand());

    define("KIBET","Welcome home Now");
    echo KIBET."<br>";
    $w= date("H");
    echo "$w"."<br>";
    if (2<1) {
        echo "Have A Good Evening";
    }
    else{
        echo "Enjoy a Good MOrning";
    }
    $x = 1;

    while($x <= 5) {
        echo "The number is: $x <br>";
  $x++;
}
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
    $age = array(10, 14,89,72,34,45,67);
    foreach($age as $value){
        echo "$value"."<br>";
    }

    function myFunction($a, $b){
        echo $a * $b;
    }
    myFunction(10, 4)

    ?>
</body>
</html>