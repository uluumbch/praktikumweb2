<?php
$celcius = 37.841;
$fahrenheit = $celcius * 1.8 + 32;
$reamur = $celcius * 0.8;
$kelvin = $celcius + 273.15;


echo "Fahrenheit(F) = ", number_format($fahrenheit, 4, ","), "<br>";
echo "Reamur(R) = ", number_format($reamur, 4, ","), "<br>";
printf("Kelvin(K) = %.4f", $kelvin);
