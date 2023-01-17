<?php

echo 'hello';

echo "<p class=\"title\">goodbye</p>";

echo '<p>goode</p>';

$num1 = 5;

$num2 = "a";

   // $num3 = $num1 * $num2;
echo "$num1 * $num2";

//var_dump($_SERVER);

$greeting = "<p>Welcome ";

$first_name = "Myah";
$last_name = "Grieve";

$full_name = "$first_name $last_name";

//$greeting = $greeting . $full_name;
$greeting .= $full_name;

$greeting .= " to DMIT2025</p>";

echo $greeting;
?> 