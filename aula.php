<?php

echo date('d/m/Y') .  PHP_EOL;
echo '<br>';

$data = new DateTime();
var_dump($data);
echo '<br>';

echo $data->format('d-m-y') . PHP_EOL;
echo '<br>';

echo $data->format('d-m-y H:i:s') . PHP_EOL;
echo '<br>';

$intervalo = new DateInterval('PT5M'); //adiciona um período de 5 minutos
$data->add($intervalo);
var_dump($data);
echo '<br>';

$intervalo = new DateInterval('P5Y10M5DT10H50M10S');
//Subtrai um peíodo de 5 anos, 10 meses, 5 dias, 10 horas, 50 minutos, 10 segundos.
$data->sub($intervalo);
var_dump($data);
echo '<br>';

