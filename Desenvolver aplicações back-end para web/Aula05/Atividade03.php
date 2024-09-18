<?php
    function celsiusParaFahrenheit($celsius){
        return $celsius * 9/5 + 32;
    }
    function fahrenheitParaCelsius($fahrenheit){
        return ($fahrenheit - 32) * 5/9;
    }
    echo "Celsius: ".celsiusParaFahrenheit(10)."<br> Fahrenheit: ".fahrenheitParaCelsius(10);
?>