<?php
$csv = fopen("quotes.csv", "r") or die("Unable to open file!");
$row = fgetcsv($csv, 0, "|");
$i = 0;
$xmlData = "<quotes>
        <record id='<?php echo $i ?>'>
            <quote><?php echo $row[0] ?></quote>
            <source><?php echo $row[1] ?></source>
            <dob-dod><?php echo $row[2] ?></dob-dod>
            <wplink><?php echo $row[3] ?></wplink>
            <wpimg><?php echo $row[4] ?></wpimg>
            <category><?php echo $row[5] ?></category>
        </record>
    </quotes>";

while (!feof($csv) ) {
$row = fgetcsv($csv, 0, "|");
    
$xml = simplexml_load_string($xmlData) or die("Error: Cannot create object");
print_r($xml);   
$i = $i + 1;
}
?>