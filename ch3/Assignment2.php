<?php

echo "<h1 style='text-align:center;font-size:32px;font-family:Arial;color:#333;margin-bottom:20px;'>Assignments</h1>";

echo "<div style='display:flex; background:cyan; flex-wrap:wrap; gap:20px; align-items:flex-start; justify-content:center; border:2px solid black; padding:50px; border-radius:15px;'>";




$number = array(5, -7, 12, 10, -7, 11, -6, 12, -7, 2, 9);

echo "<table border='1' style='text-align:center; font-family:Arial;'>";

echo "<tr style='background:#d9d9d9;'>";
echo "<th colspan='2' style='padding:8px;'>Array Results</th>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='2' style='padding:8px;'>";

foreach ($number as $num) {
    echo $num . " , ";
}

echo "</td>";
echo "</tr>";

$total = 0;

for ($i = 0; $i < count($number); $i++) {
    $total += $number[$i];
}

echo "<tr><td style='padding:5px;'>Total</td><td style='padding:5px;'><b>$total</b></td></tr>";

$even = 0;

for ($i = 0; $i < count($number); $i++) {
    if ($number[$i] % 2 == 0) {
        $even += $number[$i];
    }
}

echo "<tr><td style='padding:5px;'>Even Total</td><td style='padding:5px;'><b>$even</b></td></tr>";

$odd = 0;

for ($i = 0; $i < count($number); $i++) {
    if ($number[$i] % 2 != 0) {
        $odd += $number[$i];
    }
}

echo "<tr><td style='padding:5px;'>Odd Total</td><td style='padding:5px;'><b>$odd</b></td></tr>";

$min = min($number);

for ($i = 0; $i < count($number); $i++) {
    if ($number[$i] == $min) {
        echo "<tr><td style='padding:5px;'>Min</td><td style='padding:5px;'><b>$min</b> position = <b>$i</b></td></tr>";
    }
}

$max = max($number);

for ($i = 0; $i < count($number); $i++) {
    if ($number[$i] == $max) {
        echo "<tr><td style='padding:5px;'>Max</td><td style='padding:5px;'><b>$max</b> position = <b>$i</b></td></tr>";
    }
}

echo "</table>";




$colors = array(
    "Light" => array("Red" => "Light Red","Green" => "Light Green","Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red","Green" => "Normal Green","Blue" => "Normal Blue"),
    "Dark" => array("Red" => "Dark Red","Green" => "Dark Green","Blue" => "Dark Blue")
);

echo "<table border='1' style='text-align:center;'>";

echo "<tr style='background:#d9d9d9;'>";
echo "<th style='padding:5px;'>colors</th>";

foreach ($colors["Light"] as $k => $v) {
    echo "<th style='padding:5px;'>$k</th>";
}

echo "</tr>";

foreach ($colors as $i => $s) {

    echo "<tr>";

    echo "<th style='background:#d9d9d9;'>$i</th>";

    foreach ($s as $k => $v) {
        echo "<td >$v</td>";
    }

    echo "</tr>";
}

echo "</table>";

$square = array(
    array(-2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6)
);

echo "<table border='1' style=' text-align:center;'>";

echo "<tr style='background:#d9d9d9;'>";
echo "<th colspan='5' style='padding:8px;'>Square Array Results</th>";
echo "</tr>";

$oddTotal = 0;

foreach ($square as $row) {
    foreach ($row as $value) {
        if ($value % 2 != 0) {
            $oddTotal += $value;
        }
    }
}

echo "<tr>";
echo "<td colspan='5' style=''><b>Total odd elements = $oddTotal</b></td>";
echo "</tr>";

$evenTotal = 0;

foreach ($square as $row) {
    foreach ($row as $value) {
        if ($value % 2 == 0) {
            $evenTotal += $value;
        }
    }
}

echo "<tr>";
echo "<td colspan='5'><b>Total even elements = $evenTotal</b></td>";
echo "</tr>";

foreach ($square as $row) {

    $total = 0;

    echo "<tr>";

    foreach ($row as $value) {

        $total += $value;

        echo "<td>$value</td>";
    }

    echo "<td style='padding:8px; background:#d9d9d9;'><b>$total</b></td>";

    echo "</tr>";
}

echo "<tr>";

for ($col = 0; $col < 3; $col++) {

    $total = 0;

    for ($row = 0; $row < 3; $row++) {
        $total += $square[$row][$col];
    }

    echo "<td style='padding:8px; background:#d9d9d9;'><b>$total</b></td>";
}

echo "<td></td>";
echo "<td></td>";
echo "</tr>";

$total = 0;

foreach ($square as $row) {
    foreach ($row as $value) {
        $total += $value;
    }
}

echo "<tr>";
echo "<td colspan='5'><b>Total all elements = $total</b></td>";
echo "</tr>";

$diagonal1 = 0;

for ($i = 0; $i < 3; $i++) {
    $diagonal1 += $square[$i][$i];
}

$diagonal2 = 0;

for ($i = 0; $i < 3; $i++) {
    $diagonal2 += $square[$i][2 - $i];
}

echo "<tr>";
echo "<td colspan='5'>";
echo "Diagonal 1 = <b>$diagonal1</b><br>";
echo "Diagonal 2 = <b>$diagonal2</b>";
echo "</td>";
echo "</tr>";

$min = $square[0][0];

foreach ($square as $row) {
    foreach ($row as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
}

echo "<tr>";
echo "<td colspan='5'>";
echo "Minimum = <b>$min</b><br>";

foreach ($square as $i => $row) {
    foreach ($row as $j => $value) {
        if ($value == $min) {
            echo "[$i,$j] ";
        }
    }
}

echo "</td>";
echo "</tr>";

$max = $square[0][0];

foreach ($square as  $row) {
    foreach ($row as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
}

echo "<tr>";
echo "<td colspan='5'>";
echo "Maximum = <b>$max</b><br>";

foreach ($square as $i => $row) {
    foreach ($row as $j => $value) {
        if ($value == $max) {
            echo "[$i,$j] ";
        }
    }
}

echo "</td>";
echo "</tr>";

echo "</table>";

$students = array(
    "CA221" => array("name" => "hafsa","phone" => "61411551","address" => "bakaro"),
    "CA223" => array("name" => "suad","phone" => "73637337","address" => "geedjacayl"),
    "CA224" => array("name" => "hafsa","phone" => "74444433","address" => "laba dhagax")
);

echo "<table border='1' style='text-align:center;'>";

echo "<tr style='background:#d9d9d9;'>";
echo "<th style='padding:5px;'>Classes</th>";

foreach ($students["CA221"] as $k => $v) {
    echo "<th style='padding:5px;'>$k</th>";
}

echo "</tr>";

foreach ($students as $i => $s) {

    echo "<tr>";

    echo "<th style='background:#d9d9d9;'>$i</th>";

    foreach ($s as $k => $v) {
        echo "<td >$v</td>";
    }

    echo "</tr>";
}

echo "</table>";




$semister = array(
    "semister1" => array(
        array("course" => "subject1","cw1" => 9,"midterm" => 26,"cw2" => 10,"final" => 40,"total" => 85,"status" => "pass"),
        array("course" => "subject2","cw1" => 9,"midterm" => 26,"cw2" => 10,"final" => 40,"total" => 85,"status" => "pass"),
        array("course" => "subject3","cw1" => 9,"midterm" => 26,"cw2" => 10,"final" => 40,"total" => 85,"status" => "pass")
    ),

    "semister2" => array(
        array("course" => "subject1","cw1" => 9,"midterm" => 26,"cw2" => 10,"final" => 0,"total" => 45,"status" => "fail"),
        array("course" => "subject2","cw1" => 9,"midterm" => 26,"cw2" => 10,"final" => 40,"total" => 85,"status" => "pass"),
        array("course" => "subject3","cw1" => 9,"midterm" => 26,"cw2" => 10,"final" => 40,"total" => 85,"status" => "pass")
    )
);


echo "<table border='1' style='text-align:center;'>";

echo "<tr>";
echo "<th>Semester</th>";

foreach ($semister["semister1"][0] as $key => $value) {
    echo "<th>" . ucfirst($key) . "</th>";
}

echo "</tr>";

foreach ($semister as $semester => $courses) {

    foreach ($courses as $key => $course) {

        echo "<tr>";

        if ($key == 0) {
            echo "<td rowspan='3'>$semester</td>";
        }

        foreach ($course as $value) {
            echo "<td>" . $value . "</td>";
        }

        echo "</tr>";
    }
}

echo "</table>";

echo "</div>";

?>