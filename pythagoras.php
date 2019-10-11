<?php

// obsah obdelníku
$a = 5;
$b = 4;
$obdelnikobsah = $a * $b;

// obsah trojúhelníku
$strana = 6;
$uhel = 60;
$vyska = sin(deg2rad(60)) * $strana;
$trojuhelnikobsah = round($vyska * $strana / 2);
?>

Obsah obdelníku o stranách <?php echo $a; ?>cm a <?php echo $b; ?>cm je <?php echo $obdelnikobsah; ?>cm².<br>

Obsah rovnostranného trojúhelníku o straně délky <?php echo $strana; ?>cm a úhlu <?php echo $uhel; ?>° je <?php echo $trojuhelnikobsah; ?>cm².