<?php
$A = filter_input(INPUT_POST, 'A');
$B = filter_input(INPUT_POST, 'B');
$plus = $A + $B ;
$minus = $A - $B ;
$multiply = $A * $B ;
if ($B == 0 || $A == 0) {
    $divided = "nelze dělit nulou";}
else {
    $divided = $A / $B ;  
} 

$arterplus = $B + $A ;
$arterminus = $B - $A ;
$artermultiply = $B * $A ;
if ($B == 0 || $A == 0) {
    $arterdivided = "nelze dělit nulou";}
else {
    $arterdivided  = $B / $A ;  
} 

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Formulář byl odeslán</p>
    <ul>
    <li>sčítání : <?= $A ?> + <?= $B ?> = <?=$plus ?></li>
    <li>odčítání : <?= $A ?> - <?= $B ?> = <?=$minus ?></li>
    <li>násobení : <?= $A ?> X <?= $B ?> = <?=$multiply ?></li>
    <li>Dělení : <?= $A ?> : <?= $B ?> = <?=$divided ?> </li>

    <p>Obrácené výpočty</p>

    <li>Sčítání : <?= $B ?> + <?= $A ?> = <?=$arterplus ?></li>
    <li>odčítání : <?= $B ?> - <?= $A ?> = <?=$arterminus ?></li>
    <li>násobení : <?= $B ?> X <?= $A ?> = <?=$artermultiply ?></li>
    <li>Děleno : <?= $B ?> : <?= $A ?> = <?=$arterdivided ?></li>
        
    </ul>
</body>
</html>