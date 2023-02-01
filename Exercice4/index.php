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
function word_digit($word) {
    // explode() function qui retourne un tableau de chaînes de caractères
    $string = explode(';',$word);
    $result = '';
    foreach($string as $value){
        //trim() function qui retourne la chaîne string
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
                
              
        }
    }
    return $result;
}

echo word_digit("zero;three;one")."\n";

?>
</body>
</html>