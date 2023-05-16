<style>
    body {
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
        padding: 5px;
        margin: 5px;
    }
    h5 {
        color: #0054a6;
        font-size: 22px;
        margin-top: 40px;
    }
    h4 {
        color: #333;
        font-size: 18px;
        margin-top: 20px;
    }
    h5:hover {
        color: #ff5500;
    }
    h4:hover {
        color: #ff5500;}
    p {
        color: #333;
        font-size: 16px;
        margin-bottom: 20px;
    }
    code {
        background-color: #eee;
        font-family: Courier, monospace;
        padding: 2px;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        border: 1px solid #ddd;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        padding: 20px;
        background-color: #fff;
    }
</style>
<div class="container">
    <h2>PHP Data Types</h2>
    <h5>Strings</h5>
<?php
$x = "Hello Rushabh!";
$y = 'How may I help you?';

echo "<p>$x</p>";
echo "<p>$y</p>";
?>

<h5>Integers</h5>
<?php
$x = 5985;
echo "<p>Value: $x</p>";
?>

<h5>Float</h5>
<?php
$x = 10.365;
echo "<p>Value: $x</p>";
?>

<h5>Boolean</h5>
<?php
$x = true;
$y = false;
echo "<p>Value: ";
var_dump($x);
echo "</p><p>Value: ";
var_dump($y);
echo "</p>";
?>

<h5>Array</h5>
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "<p>";
var_dump($cars);
echo "</p><h4>$cars[0]</h4><h4>$cars[1]</h4><h4>$cars[2]</h4>";

$bikes = array("Continental GT", "Classic 350", "Harley Davidson");
echo "<p>I like " . $bikes[0] . ", " . $bikes[1] . ", and " . $bikes[2] . ".</p>";
?>

<h5>Object</h5>
<?php
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
echo "<p>" . $myCar->message() . "</p>";

$myCar = new Car("red", "Toyota");
echo "<p>" . $myCar->message() . "</p>";
?>

<h5>Constants</h5>
<?php
define("GREETING", "Welcome to Evolution Infosystems!");
echo "<p>" . GREETING . "</p>";

define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo "
<p>" . cars[0] . "</p>
<p>" . cars[1] . "</p>
<p>" . cars[2] . "</p>";
?>
\<h5>If Statement</h5>
<?php
$age = 25;
if ($age > 18) {
    echo "<p>You are an adult.</p>";
} else {
    echo "<p>You are a minor.</p>";
}
?>

<h5>If...Elseif...Else Statement</h5>
<?php
$t = date("H");
if ($t < "10") {
    echo "<p>Have a good morning!</p>";
} elseif ($t < "20") {
    echo "<p>Have a good day!</p>";
} else {
    echo "<p>Have a good night!</p>";
}
?>

<h5>Switch Statements</h5>
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "<p>Your favorite color is red!</p>";
        break;
    case "blue":
        echo "<p>Your favorite color is blue!</p>";
        break;
    case "green":
        echo "<p>Your favorite color is green!</p>";
        break;
    default:
        echo "<p>Your favorite color is neither red, blue, nor green!</p>";
}
?>

<h5>Loops</h5>
<h5>While Loop</h5>
<?php
$x = 1;
while ($x < 10) {
    echo "<p>The number is: $x</p>";
    $x++;
}
?>

<h5>Do...While Loop</h5>
<?php
$x = 10;
do {
    echo "<p>The number is: $x</p>";
    $x++;
} while ($x <= 20);
?>

<h5>For Loop</h5>
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "<p>The number is: $x</p>";
}
?>

<h5>Foreach Loop</h5>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "<p>$value</p>";
}
?>

<h5>Break and Continue</h5>
<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "<p>The number is: $x</p>";
}

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "<p>The number is: $x</p>";
}
?>

<h5>Arithmetic Operators</h5>
<?php
$x = 10;
$y = 20;
echo "<p>Addition of X and Y is: " . ($x + $y) . "</p>";
echo "<p>Subtraction of X and Y is: " . ($x - $y) . "</p>";
echo "<p>Multiplication of X and Y is: " . ($x * $y) . "</p>";
echo "<p>Division of X and Y is: " . ($x / $y) . "</p>";
echo "<p>Modulo of X and Y is: " . ($x % $y) . "</p>";
?>

</div>

