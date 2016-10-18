<?php

// some heavy processing
$raw_data = file_get_contents('php://input');

$data = json_decode($raw_data, true);
$x =  $data['x'];
$y =  $data['y'];

// echo $x + $y;

// echo ' ', $x - $y, ' ', $x * $y, ' ', $x / $y;

header("Content-type: application/json");
echo json_encode([
  'sum' => $x + $y,
  'minus' => $x - $y,
  'multiple' => $x * $y,
  'devide' => $x / $y,
]);
