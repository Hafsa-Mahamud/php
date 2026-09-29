<?php

echo '<h1 style="color:white; background:linear-gradient(135deg,#141e30,#243b55); padding:20px; text-align:center; border-radius:15px; font-family:Arial,sans-serif; box-shadow:0 5px 15px rgba(0,0,0,0.2);">PHP Assignments</h1>';

$a = 10;
$b = 20;
$c = 30;

$Max = $a;
$Min = $a;

if ($b > $Max) {
    $Max = $b;
}

if ($c > $Max) {
    $Max = $c;
}

if ($b < $Min) {
    $Min = $b;
}

if ($c < $Min) {
    $Min = $c;
}

echo '<div style="text-align:center; background:linear-gradient(135deg,#6a11cb,#2575fc); color:white; padding:25px; margin:20px auto; width:350px; border-radius:20px; font-family:Arial; box-shadow:0 6px 15px rgba(0,0,0,0.25);">';

echo '<h2 style="margin-top:0;">Assignment 1</h2>';
echo "<p>Numbers: $a, $b, $c</p>";
echo "<p>Max = $Max</p>";
echo "<p>Min = $Min</p>";

echo '</div>';





$number = 10;

if ($number % 3 == 0 && $number % 5 == 0) {
    $result = "$number is divisible by both 3 and 5.";
}
elseif ($number % 3 == 0) {
    $result = "$number is divisible by 3 only.";
}
elseif ($number % 5 == 0) {
    $result = "$number is divisible by 5 only.";
}
else {
    $result = "$number is not divisible by 3 or 5.";
}

echo '<div style="text-align:center; background:linear-gradient(135deg,#11998e,#38ef7d); color:white; padding:25px; margin:20px auto; width:350px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';
echo '<h2>Assignment 2</h2>';
echo "<p>$result</p>";
echo '</div>';


echo '<div style="text-align:center; background:linear-gradient(135deg,#ff512f,#dd2476); color:white; padding:25px; margin:20px auto; width:400px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';

echo '<h2>Assignment 3</h2>';

echo '<h3>Odd Numbers from 2 to 20</h3>';

for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo "$i ";
    }
}

echo '<h3>Even Numbers from 35 to 7</h3>';

for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}

echo '</div>';


echo '<div style="text-align:center; background:linear-gradient(135deg,#00c6ff,#0072ff); color:white; padding:25px; margin:20px auto; width:400px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';

echo '<h2>Assignment 4</h2>';

echo '<h3>Numbers Divisible by 2 and 5</h3>';

for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo "$i ";
    }
}

echo '</div>';


$number = 12345;
$reverse = 0;
$temp = $number;

while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = ($reverse * 10) + $digit;
    $temp = (int)($temp / 10);
}

echo '<div style="text-align:center; background:linear-gradient(135deg,#f7971e,#ffd200); color:white; padding:25px; margin:20px auto; width:400px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';

echo '<h2>Assignment 5</h2>';
echo "<p>Original Number: $number</p>";
echo "<p>Reverse Number: $reverse</p>";

echo '</div>';

$num1 = 12;
$num2 = 8;

if ($num1 > $num2) {
    $lcm = $num1;
} else {
    $lcm = $num2;
}

while (true) {
    if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
        break;
    }

    $lcm++;
}

echo '<div style="text-align:center; background:linear-gradient(135deg,#8e2de2,#4a00e0); color:white; padding:25px; margin:20px auto; width:400px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';

echo '<h2>Assignment 6</h2>';
echo "<p>Number 1: $num1</p>";
echo "<p>Number 2: $num2</p>";
echo "<p>LCM = $lcm</p>";

echo '</div>';

$num1 = 18;
$num2 = 24;

$hcf = 1;

for ($i = 1; $i <= $num1 && $i <= $num2; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}

echo '<div style="text-align:center; background:linear-gradient(135deg,#11998e,#38ef7d); color:white; padding:25px; margin:20px auto; width:400px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';

echo '<h2>Assignment 7</h2>';
echo "<p>Number 1: $num1</p>";
echo "<p>Number 2: $num2</p>";
echo "<p>HCF = $hcf</p>";

echo '</div>';


echo '<div style="text-align:center; background:linear-gradient(135deg,#ff416c,#ff4b2b); color:white; padding:25px; margin:20px auto; width:600px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';

echo '<h2>Assignment 8</h2>';
echo '<h3>Multiplication Table 1 - 12</h3>';

echo '<table style="margin:auto; border-collapse:collapse; background:white; color:black;">';

for ($i = 1; $i <= 12; $i++) {

    echo '<tr>';

    for ($j = 1; $j <= 12; $j++) {

        echo '<td style="border:1px solid #999; padding:8px; text-align:center;">';
        echo $i * $j;
        echo '</td>';

    }

    echo '</tr>';
}

echo '</table>';

echo '</div>';


$number = 10;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
}
else {
    for ($i = 2; $i < $number; $i++) {

        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

echo '<div style="text-align:center; background:linear-gradient(135deg,#fc4a1a,#f7b733); color:white; padding:25px; margin:20px auto; width:400px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';

echo '<h2>Assignment 9</h2>';

if ($isPrime) {
    echo "<p>$number is a Prime Number</p>";
}
else {
    echo "<p>$number is a Non-Prime Number</p>";
}

echo '</div>';

echo '<div style="text-align:center; background:linear-gradient(135deg,#00b09b,#96c93d); color:white; padding:25px; margin:20px auto; width:400px; border-radius:15px; font-family:Arial; box-shadow:0 5px 15px rgba(0,0,0,0.2);">';

echo '<h2>Assignment 10</h2>';
echo '<h3>Prime Numbers from 10 to 50</h3>';

for ($number = 10; $number <= 50; $number++) {

    $isPrime = true;

    for ($i = 2; $i < $number; $i++) {

        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "$number ";
    }
}

echo '</div>';

?>