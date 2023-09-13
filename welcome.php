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
    myFunction(10, 4);

    function fullName($fname){
        echo "collins".$fname; 
    }
    fullName("kibet");

    $t = array("Volvo", "BMW", "Toyota");
    echo count($t);

    $car_models = array(
        "Toyota Camry",
        "Honda Civic",
        "Ford Mustang",
        "Chevrolet Silverado",
        "Tesla Model 3",
        "BMW 3 Series",
        "Audi A4",
        "Mercedes-Benz C-Class",
        "Volkswagen Jetta",
        "Nissan Altima",
        "Jeep Wrangler",
        "Subaru Outback",
        "Hyundai Elantra",
        "Kia Sportage",
        "Mazda CX-5",
        "Lexus RX",
        "Acura MDX",
        "Porsche 911",
        "Land Rover Range Rover",
        "Jaguar F-PACE",
        "Volvo XC90",
        "Cadillac Escalade",
        "Lincoln Navigator",
        "GMC Sierra",
        "Dodge Challenger",
        "Ram 1500",
        "Buick Enclave",
        "Chrysler 300",
        "Fiat 500",
        "Mini Cooper",
        "Tesla Model S",
        "Chevrolet Corvette",
        "Ford Explorer",
        "Jeep Grand Cherokee",
        "Toyota RAV4",
        "Subaru Forester",
        "Nissan Rogue",
        "Honda CR-V",
        "Mitsubishi Outlander",
        "Volkswagen Golf",
        "Audi Q5",
        "BMW X5",
        "Mercedes-Benz E-Class",
        "Lexus ES",
        "Acura TLX",
        "Hyundai Sonata",
        "Kia Forte",
        "Mazda3",
        "Nissan Sentra",
        "Ford Escape",
        "Chevrolet Equinox",
        "Toyota Highlander",
        "Jeep Cherokee",
        "Subaru Crosstrek",
        "GMC Terrain",
        "Ram 2500",
        "Dodge Charger",
        "Cadillac XT5",
        "Lincoln Aviator",
        "Tesla Model X",
        "Porsche Cayenne",
        "Land Rover Discovery",
        "Volvo S60",
        "Jaguar XE",
        "Chevrolet Tahoe",
        "Ford Expedition",
        "Nissan Pathfinder",
        "Honda HR-V",
        "Mazda CX-9",
        "Toyota Corolla",
        "Volkswagen Passat",
        "Audi A6",
        "BMW 5 Series",
        "Mercedes-Benz GLE",
        "Lexus NX",
        "Acura RDX",
        "Kia Sorento",
        "Hyundai Tucson",
        "Jeep Renegade",
        "Subaru Legacy",
        "GMC Acadia",
        "Dodge Durango",
        "Ram 3500",
        "Buick Encore",
        "Chrysler Pacifica",
        "Fiat 124 Spider",
        "Mini Countryman",
        "Tesla Model Y",
        "Chevrolet Blazer",
        "Ford Edge",
        "Jeep Compass",
        "Toyota Tacoma",
        "Nissan Titan",
        "Honda Fit",
        "Mazda MX-5 Miata",
        "Volkswagen Tiguan",
        "Audi Q7",
        "BMW X3",
        "Mercedes-Benz GLC",
        "Lexus RX",
        "Acura ILX",
        "Kia Soul",
        "Hyundai Santa Fe",
        "Jeep Gladiator",
        "Subaru Impreza",
        "GMC Canyon",
        "Dodge Journey",
        "Ram 4500",
        "Cadillac CT5",
        "Lincoln Corsair",
        "Tesla Cybertruck",
        "Porsche Panamera",
        "Land Rover Defender",
        "Jaguar F-TYPE",
        "Volvo XC60",
        "Chevrolet Camaro",
        "Ford Bronco",
        "Nissan Maxima",
        "Honda Accord",
        "Mazda6",
        "Volkswagen Atlas",
        "Audi A3",
        "BMW X7",
        "Mercedes-Benz GLA",
        "Lexus GX",
        "Acura NSX",
        "Kia Telluride",
        "Hyundai Kona",
        "Jeep Wagoneer",
        "Subaru Ascent",
        "GMC Yukon",
        "Dodge Grand Caravan",
        "Ram Promaster",
        "Buick Regal",
        "Chrysler Voyager",
        "Fiat 500X",
        "Mini Clubman",
        "Tesla Roadster",
        "Chevrolet Sonic",
        "Ford Ranger",
        "Jeep Trackhawk",
        "Toyota 4Runner",
        "Nissan Juke",
        "Honda Insight",
        "Mazda CX-3",
        "Volkswagen Beetle",
        "Audi A5",
        "BMW X1",
        "Mercedes-Benz GLB",
        "Lexus IS",
        "Acura RLX",
        "Kia Niro",
        "Hyundai Veloster",
        "Jeep Liberty",
        "Subaru BRZ",
        "GMC Savana",
        "Dodge Nitro",
        "Ram 5500",
        "Cadillac XT4",
        "Lincoln Nautilus",
        "Tesla Model C",
        "Porsche 718 Cayman",
        "Land Rover Range Rover Sport",
        "Jaguar I-PACE",
        "Volvo XC40",
        "Chevrolet Traverse",
        "Ford Flex",
        "Nissan Kicks",
        "Honda Odyssey",
        "Mazda CX-30",
        "Volkswagen Arteon",
        "Audi A7",
        "BMW X6",
        "Mercedes-Benz CLA",
        "Lexus LC",
        "Acura TL",
        "Kia Stinger",
        "Hyundai Ioniq",
        "Jeep Patriot",
        "Subaru XV Crosstrek",
        "GMC Sierra 2500HD",
        "Dodge Dart",
        "Ram 6500",
        "Buick Cascada",
        "Chrysler Sebring",
        "Fiat 500L",
        "Mini Convertible",
        "Tesla Model R",
        "Chevrolet Trax",
        "Ford Fiesta",
        "Jeep Commander",
        "Toyota Sienna",
        "Nissan Cube",
        "Honda CR-Z",
        "Mazda RX-8",
        "Volkswagen Jetta GLI",
        "Audi S4",
        "BMW X2",
        "Mercedes-Benz S-Class",
        "Lexus HS",
        "Acura SLX",
        "Kia Rio",
        "Hyundai Accent",
        "Jeep Comanche",
        "Subaru Baja",
        "GMC Sierra 3500HD",
        "Dodge Caliber",
        "Ram 7500",
        "Buick LaCrosse",
        "Chrysler Aspen",
        "Fiat 500e",
        "Mini Hardtop",
        "Tesla Model Z",
        "Chevrolet City Express",
        "Ford C-Max",
        "Jeep Scrambler",
        "Toyota C-HR",
        "Nissan Leaf",
        "Honda Clarity",
        "Mazda5",
        "Volkswagen e-Golf",
        "Audi RS5",
        "BMW i3",
        "Mercedes-Benz AMG GT",
        "Lexus LFA",
        "Acura ZDX",
        "Kia Cadenza",
        "Hyundai Genesis",
        "Jeep CJ",
        "Subaru SVX",
        "GMC Typhoon",
        "Dodge Viper",
        "Ram Dakota",
        "Buick Roadmaster",
        "Chrysler Voyager",
        "Fiat 500 Abarth",
        "Mini Paceman",
        "Tesla Model G",
        "Chevrolet SSR",
        "Ford GT",
        "Jeep Liberty",
        "Toyota FJ Cruiser",
        "Nissan Armada",
        "Honda Element",
        "Mazda2",
        "Volkswagen CC",
        "Audi S6",
        "BMW M2",
        "Mercedes-Benz Sprinter",
        "Lexus LX",
        "Acura Vigor",
        "Kia Amanti",
        "Hyundai Tiburon",
        "Jeep Willys",
        "Subaru Justy",
        "GMC Safari",
        "Dodge Stealth",
        "Ram ProMaster City",
        "Buick Verano",
        "Chrysler 200",
        "Fiat 500c",
        "Mini Roadster",
        "Tesla Model T",
        "Chevrolet HHR",
        "Ford Taurus",
        "Jeep Renegade",
        "Toyota Yaris",
        "Nissan Quest",
        "Honda Passport",
        "Mazda CX-7",
        "Volkswagen Passat CC",
        "Audi S8",
        "BMW M3",
        "Mercedes-Benz Metris",
        "Lexus SC",
        "Acura Integra",
        "Kia Borrego",
        "Hyundai XG",
        "Jeep Forward Control",
        "Subaru XT",
        "GMC Caballero",
        "Dodge Ram Van",
        "Ram ProMaster",
        "Buick Century",
        "Chrysler Crossfire",
        "Fiat 124 Sport Spider",
        "Mini Cooper Clubman",
        "Tesla Model W",
        "Chevrolet Uplander",
        "Ford Windstar",
        "Jeep DJ",
        "Toyota MR2",
        "Nissan 370Z",
        "Honda Crosstour",
        "Mazda Tribute",
        "Volkswagen Phaeton",
        "Audi S7",
        "BMW M4",
        "Mercedes-Benz Maybach",
        "Lexus RC",
        "Acura Legend",
        "Kia K900",
        "Hyundai Excel",
        "Jeepster Commando",
        "Subaru Alcyone",
        "GMC S-15",
        "Dodge Ramcharger",
        "Ram ProMaster Window Van",
        "Buick Skyhawk",
        "Chrysler Imperial",
        "Fiat 124",
        "Mini Cooper Coupe",
        "Tesla Model V",
        "Chevrolet Lumina APV",
        "Ford Probe",
        "Jeep Gladiator",
        "Toyota Paseo",
        "Nissan 300ZX",
        "Honda S2000",
        "Mazda Millenia",
        "Volkswagen Quantum",
        "Audi RS 3",
        "BMW M5",
        "Mercedes-Benz SL-Class",
        "Lexus GS",
        "Acura CL",
        "Kia Spectra",
        "Hyundai Scoupe",
        "Jeepster",
        "Subaru Leone",
        "GMC Rally",
        "Dodge Ram Wagon",
        "Ram ProMaster City Wagon",
        "Buick Estate",
        "Chrysler LeBaron",
        "Fiat 850",
        "Mini Cooper Roadster",
        "Tesla Model A",
        "Chevrolet Aveo",
        "Ford Aspire",
        "Jeepster Sport",
        "Toyota T100",
        "Nissan 200SX",
        "Honda Passport",
        "Mazda MPV",
        "Volkswagen Routan",
        "Audi RS 4",
        "BMW M6",
        "Mercedes-Benz SLK-Class",
        "Lexus CT",
        "Acura ILX",
        "Kia Sephia",
        "Hyundai Pony",
        "Jeep CJ-10",
        "Subaru RX",
        "GMC Sierra C3",
        "Dodge Spirit",
        "Ram ProMaster City Cargo",
        "Buick Reatta",
        "Chrysler Fifth Avenue",
        "Fiat Strada",
        "Mini Cooper Countryman",
        "Tesla Model M",
        "Chevrolet Metro",
        "Ford Aerostar",
        "Jeepster Commando",
        "Toyota Van",
        "Nissan Stanza",
        "Honda Del Sol",
        "Mazda Navajo",
        "Volkswagen EuroVan",
        "Audi TT RS",
        "BMW X6 M",
        "Mercedes-Benz SLR McLaren",
        "Lexus ES 300h",
        "Acura CSX",
        "Kia Optima",
        "Hyundai Stellar",
        "Jeep CJ-5",
        "Subaru GL",
        "GMC Sierra Denali",
        "Dodge Ram 50",
        "Ram ProMaster City Tradesman",
        "Buick Roadmaster Estate",
        "Chrysler Concorde",
        "Fiat X1/9",
        "Mini Cooper Paceman",
        "Tesla Model E",
        "Chevrolet Chevelle",
        "Ford Bronco II",
        "Jeep Wrangler Unlimited",
        "Toyota Van Wagon",
        "Nissan Stanza Wagon",
        "Honda CRX",
        "Mazda 323",
        "Volkswagen Golf GTI",
        "Audi TTS",
        "BMW X6 M",
        "Mercedes-Benz SLS AMG",
        "Lexus ES 350",
        "Acura EL",
        "Kia Sedona",
        "Hyundai Tiburon",
        "Jeep CJ-7",
        "Subaru Justy",
        "GMC Sprint",
        "Dodge Ram 150",
        "Ram ProMaster City SLT",
        "Buick Skyhawk",
        "Chrysler New Yorker",
        "Fiat 850 Spider",
        "Mini Cooper Clubman",
        "Tesla Model S Plaid",
        "Chevrolet Citation",
        "Ford Contour",
        "Jeep Wrangler",
        "Toyota Van Cargo Van",
        "Nissan Stanzas",
        "Honda Prelude",
        "Mazda 626",
        "Volkswagen GTI",
        "Audi Q2",
        "BMW X7 M",
        "Mercedes-Benz SLC",
        "Lexus GS 350",
        "Acura RDX",
        "Kia Forte Koup",
        "Hyundai Tucson Fuel Cell",
        "Jeep CJ-8",
        "Subaru XT6",
        "GMC S-15 Jimmy",
        "Dodge Ram 350",
        "Ram ProMaster City Van",
        "Buick Skyhawk",
        "Chrysler Newport",
        "Fiat Brava",
        "Mini Cooper Convertible",
        "Tesla Model S Plaid+",
        "Chevrolet Classic",
        "Ford"
    );
    foreach($car_models as $value){
        echo "$value"."<br>";
    }
    echo count($car_models);
    echo $car_models[12]."<br>";

    $car_lenght= count($car_models);

    for($i=0; $i < $car_lenght; $i++){
        echo $car_models[$i];
        echo "<br>";
        echo sort($car_models);
        echo rsort($car_models);
    }
    

    ?>
</body>
</html>