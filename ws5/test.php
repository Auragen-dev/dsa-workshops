<?php
$str = file_get_contents("http://www.martynhicks.uk/weather/clientraw.txt");
$array = explode(" ", $str);
echo $array[74];?><br><?php
echo $array[4];?><br><?php
echo $array[74];?><br><?php
?>