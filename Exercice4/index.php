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
        //trim() function qui suprime les espaces du debut et a la fin d'une chaîne 
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
             case 'five':
                $result .='5';
            case   'six':
                $result.= '6';
                break;
             case 'seven':
                $result.= '7';
                break;
              case 'eight':
                $result.= '8';
                break;
                case 'nine':
                $result.= '9';
                break;     
        
        }
    }
    return $result;
}

echo word_digit("nine;five;three;one;six;eight")."\n";
echo word_digit("one;five;eight")."\n";

?>
</body>
</html>