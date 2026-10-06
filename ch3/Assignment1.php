<?php



$student = array (
    "CA234"=>array("name" => "hafsa mahamud","phone"=>"614156065","Address" => "holwadaag"),
    "CA224"=>array("name" => "aisha ali","phone"=>"614156066","Address" =>"wartanabadda"),
    "CA221"=>array("name" => "hafsa mahamud","phone"=>"614156065","Address" =>"holwadaag"),
);

// echo $student ["CA234"]["Address"];

// print_r($student);

// echo '<table style="margin:auto; border-collapse:collapse; background:white; color:black;">';

echo "<table border = '1'>";

foreach ($student as $info) {
      echo '<tr>';
    foreach ($info as $value) {
        echo '<td style="border:1px solid #999; padding:8px; text-align:center;">';
        echo "$value, ";
         echo '</td>';
    }
    echo '</tr>';
    echo "<br>";
}

echo '</table>';

?>