
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document VS</title>
</head>
<body>
    <?php

    $Var1 = 1;
    $Var2 = 3;
    $Var3 = "Caracteres";
    $suma = ++$Var2;
    $resta = --$Var2;
    $mult = $Var2 * $Var1;
    $div = $Var1/$Var2;
    $modu = $Var1%$Var2;

    echo "La suma es ".$suma."<br>"."La resta es ".$resta."<br>"."La mult es ".$mult."<br>"."La div es ".$div."<br>"."El modulo es ".$modu."<br>";
    if ($Var1 >= $Var2) {
        echo "Es mayor";
    } else {
        echo "Es menor"."<br>";
    }
    $OP=3;
    switch ($OP){
        case 1:
            echo "Caso Uno";
            break;
        case 2:
            echo "Caso Dos";
            break;
        case 3:
            echo "Caso Tres";
            break;
        default:
            echo "No existe case ";
            break;

    }

    for ($i=0;$i<10;$i++){
        echo $i;
    }

    ?>
</body>
</html>