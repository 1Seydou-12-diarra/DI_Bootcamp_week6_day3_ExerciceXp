<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerice2</title>
</head>
<body>
<?php
function aire_rectangle($length = 2, $width = 4) //declaration de la function  qui permet de calculer l'aire du triangle
{
    $aire = $length * $width;
    echo "l'Aire du rectangle avec longueur " . $length . " et la largeur " . $width . " est " . $aire  . " m²";
}
aire_rectangle(); // appel a la function 

?>
</body>
</html>