<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$base = fopen('legumes.csv', 'r');
$tableau_base = array();
$rangee = 0;
if ($base !== FALSE)
{
    while(($ligne = fgetcsv($base, 100, ',')) !== FALSE)
    {
    $tableau_base[$rangee] = $ligne;
    $rangee++;
    };
};
//var_dump($tableau_base);

fclose($base);
?>
</body>
</html>