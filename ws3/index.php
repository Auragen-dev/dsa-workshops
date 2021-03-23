<!doctype html>
<html lang="en">

<head>
    <?php $csv = fopen("quotes.csv", "w") or die("Unable to open file!");?>
    <meta charset="utf-8">
    <title>wc3</title>
    <meta name="description" content="PHP Bullshit">
    <meta name="author" content="Lewis Ingram">
    <style>
        #quote {
         width:25%   
        }
        td{
            border: solid 1px
        }

    </style>
</head>

<body>
    <table style="width:100%">
        <?php
    
while (!feof($csv) ) {

$row = fgetcsv($csv, 0, "|");
    
echo "<tr>" . "<td id='quote'>" . $row[0]."</td>" . "<td>" . $row[1]."</td>" . "<td>" . $row[2]."</td>" . "<td>" . $row[3]."</td>" . "<td>" . $row[5]."<td>" . "</tr>";
    
}
fclose($csv);
?>
    </table>
</body>

</html>
