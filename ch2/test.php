<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>variables</h1>
    <?php
    

        $x=7;
        $y=4;
        $z= $x * $y;


        echo "x = $x ";
        print "<br>";
        
        echo "y = $y ";

        print "<br>";
        print "<br>";

        print("using print");
        print "<br>";

        print(" z = $x * $y = $z");

        print "<br>";
        print "<br>";

        print("using echo and double quoto");

        print "<br>";

        echo "$x * $y = $z";

        print "<br>";print "<br>";

        

        print("using echo and single quoto");

        print "<br>";

        echo '$x * $y = $z';

         print "<br>";print "<br>"; print "<br>";print "<br>";


         $name = "hafsa mahamud warsame";
         //echo "The Length of this String \"$message\" is " . strlen($message);

         echo strlen($name);
          print "<br>";print "<br>";
         echo str_word_count($name);

          print "<br>";print "<br>";

          echo $name[4];

          print "<br>";print "<br>";

          echo $name;

          print "<br>";print "<br>";

          echo str_replace("warsame", "diriye",$name);

          print "<br>";print "<br>";

          echo strpos($name , "mahamud");



          
define("PI", 3.14);
$radius = 6;
echo "<br>";
$area = PI * $radius * $radius;

echo "The Area of Circle: ", $area;


$age = 14;
echo "<br>";
($age > 18) ? print "Adult" : print "Child";
echo "<br>";
echo ($age > 18) ? "Adult" : "Child";


$x = 5;
$y = 4;
echo "<br>";
// echo $x++;
echo ++$x;


echo "<br>";
echo $x > $y ? "$x is greater $y" : "$x is less than $y";

echo "<br>";
echo "The result is ", 1 + 5 * 3 - (6/2) > 10 && 5 < 3 || !(6 < 8);





echo false;

echo "<br>";
echo "<br>";
echo "<br>";



$month = "March";

if ($month == "March")
    echo "It's Spring Time!";

echo "<br>";
$x = 5;
$y = 8;

if ($x > $y) {
    echo "$x is greater than $y";
}

if ($x < $y) {
    echo "$x is less than $y";
}

echo "<br>";
$mark = 45;

if ($mark >= 50)
echo "PASSED";
else
echo "FAILED";

echo "<br>";
$mark = 85;

if ($mark >= 90)
echo "Your grade is A";
elseif ($mark >= 80)
echo "Your grade is B";
else if ($mark >= 70)
echo "Your grade is C";
else if ($mark >= 60)
echo "Your grade is D";
else if ($mark >= 50)
echo "Your grade is E";
else
echo "Your grade is F";

echo "<br>";
$month = "jdfgkdfg";

switch ($month) {
    case "January":
    case "February":
    case "March":
        echo "It's Winter time!";
        break;
    case "April":
    case "May":
    case "June":
        echo "It's Spring time!";
        break;
    case "July":
        echo "It's Summer time!";
        break;
    default:
        echo "Invalid Month";
        break;
}

echo "<br>";
$page = "About";

switch ($page):
case "Home":
echo "You selected Home Page";
break;
case "About":
echo "You selected About Page";
break;
case "News":
echo "You selected News Page";
break;
case "Contact":
echo "You selected Contact Page";
break;
case "Contact":
echo "You selected Contact Page";
break;
default:
echo "Invalid Page";
endswitch;


echo "<br>";
$mark = 65;

switch ($mark) {
case ($mark >= 90):
echo "Your grade is A";
break;
case ($mark >= 80):
echo "Your grade is B";
break;
case ($mark >= 70):
echo "Your grade is C";
break;
case ($mark >= 60):
echo "Your grade is D";
break;
case ($mark >= 50):
echo "Your grade is E";
break;
default:
echo "Your grade is F";

}


echo "<br>";
$fuel = 1;

echo ($fuel <= 1) ? "Fill Tank Now" : "It's Enough Fuel";

echo "<br>";

$mark = 35;
$message = ($mark >= 50) ? "PASSED" : "FAILED";

echo $message


?>
          
          



    ?>
</body>
</html>