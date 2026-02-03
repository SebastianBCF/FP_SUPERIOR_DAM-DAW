<?php
echo "Ingrese el mes al que quiera saber cuantos dias tiene";
$mes = trim(fgets(STDIN));

switch ($mes) {
    case "enero":
    case "marzo":
    case "mayo":
    case "julio":
    case "agosto":
    case "octubre":
    case "diciembre":
        echo "El mes de $mes tiene 31 días";
        break;
    case "abril":
    case "junio":
    case "septiembre":
    case "noviembre":
        echo "El mes de $mes tiene 30 días";
        break;
    case "febrero":
        echo "El mes de $mes tiene 28 o 29 días";
        break;
    default:
        echo "Mes no válido";
        break;
}