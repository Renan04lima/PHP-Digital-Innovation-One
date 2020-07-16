<?php


//echo $data->format('d/m/Y')."\n";

/*
 * -> P representação de período: vem antes de dia, mês, ano e semana
 * Y anos
 * M meses
 * D dias
 * W semanas
 *
 * -> T representação de tempo: vem antes de hora, minuto e segundo
 * H horas
 * M minutos
 * S segundos
*/

$data = new DateTime();
$intervalo = new DateInterval("PT5M"); //add um período de 5 minutos

$data->add($intervalo);

var_dump($data);
