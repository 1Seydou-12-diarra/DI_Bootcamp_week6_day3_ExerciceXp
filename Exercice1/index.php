<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1 php</title>
</head>
<body>
<?php
function check_vote() //funnction a été declaré
{
    $nom = "ADAci2023";
    $age = 25 ;
    if ($age >= 18) {
        echo $nom . ", vous êtes admissible au vote";
    } else {
        echo $nom . ", vous n' êtes pas admissible au vote. ";
    }
}
return check_vote(); //funnction a été declaré


?>

</body>
</html>