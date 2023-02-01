<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>
<body>
<?php
function terneray_operator($nombre){
$result = $nombre > 30
? "est plus grand que 30"
: ($nombre > 20
? "est plus grand que 20"
: ($nombre >10
? "est plus grand que 10"
: "Entrez un nombre au moins supérieur à 10 !")); 
echo $nombre." : ".$result."\n";
}
terneray_operator(32);
terneray_operator(21);
terneray_operator(12);
terneray_operator(3);

?>
    
</body>
</html>