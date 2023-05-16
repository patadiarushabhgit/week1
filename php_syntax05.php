
<!-- PHP data types -->
<?php
//A string is a sequence of characters, like "Hello world!". string can be any text inside quotes. You can use single or double quotes:
echo "<h3>PHP Strings</h3><br>";
$x = "Hello Rushabh!";
$y = 'How May I help You!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";

//An  integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
echo " <h3>PHP Integers</h3><br>";

$x = 5985;
var_dump($x);
echo "<br>";


//A float (floating point number) is a number with a decimal point or a number in exponential form.
echo "<h3> PHP Float data type<h3><br>";
$x = 10.365;
var_dump($x);
echo "<br>";

//A Boolean represents two possible states: TRUE or FALSE.
echo "<h3> PHP Boolean data type<h3><br>";
$x = true;
$y = false;
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";

//PHP Array - An array stores multiple values in one single variable.
echo "<h3> PHP Array <h3><br>";
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br>";
echo "<h4>  $cars[0]</h4 <br>";
echo "<h4>  $cars[1]</h4 <br>";
echo "<h4>  $cars[2]</h4 <br>";

//indexed array
echo "<h3> Indexed Array</h3><br>";
 $bikes = array("Continental GT" , "Classic 350" , "Harley Davidson");
echo "<br>";
$cars = array("Continental GT", "Classic 350", "Harley Davidson");
echo "I like " . $bikes[0] . ", " . $bikes[1] . " and " . $bikes[2] . ".";
echo "<br>";

$bikes = array("Continental GT" , "Classic 350" , "Harley Davidson");
echo "<br>";
$arrlength = count($bikes);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
//Loop Through an Associative Array
echo "<h3>associative Array</h3><br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
//associative array
echo "<h3>associative array</h3><br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

//PHP Object
echo "<h3>PHP Object</h3> <br>";
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("black", "Volvo");
echo $myCar->message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar->message();
echo "<br>";

//PHP Constants
//A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

//A valid constant name starts with a letter or underscore (no $ sign before the constant name).

//Note: Unlike variables, constants are automatically global across the entire script.

echo "<h3>PHP Constants</h3><br>";

define("GREETING", "Welcome to Evolution Infosystems!");
echo GREETING;

echo "<br>";

// PHP Constant 
echo "<h3> PHP Constant  <br>";
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
echo "<br>";
echo cars[1];
echo "<br>";
echo cars[2];

echo "<br>";


//PHP - The if Statement 
//The if statement executes some code if one condition is true.
echo "<h3> PHP If statement</h3><br>";
$age = 25;
if ($age > 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
echo "<br>";
//if...elseif...else
echo "<h3>PHP if...elseif...else statement</h3><br>";
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";

//switch statements
echo "<h3> switch statements</h3><br>";
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";

//php loops
//while loops
echo "<h3>PHP while loops</h3><br> ";
$x = 1;
while ($x < 10) {
    echo "the number is : $x <br>";
    $x++;
}
echo "<br>";
//Do while loops
echo "<h3>Do while loop</h3><br>";
$x = 10;
do {
    echo " The number is : $x <br>";
    $x++;
}
while ($x <= 20);
echo "<br>";
//

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
//foreach loop 
echo "<h3> Foreach Loop</h3><br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
echo "<br>";

//php break
echo "<h3> break and continue</h3><br>";
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
echo  "<br>";
//continue
echo "<h3>continue</h3><br>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }











//php arithmatic operators
echo "<h3> PHP arithmatic Operators</h3><br>";
$x = 10;
$y = 20;
echo "addition of X and Y is = " . $x + $y . "<br>";
echo "Subtraction of X and Y is = " . $x - $y . "<br>";
echo "multiplication of X and Y is = " . $x * $y . "<br>";
echo "Division of X and Y is = " . $x / $y . "<br>";
echo "Modulo of X and Y is = " . $x % $y . "<br>";




//functions
echo "<h3>PHP Functions</h3><br>";
function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg(); // call the function
?>
