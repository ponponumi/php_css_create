<?php

require_once __DIR__ . "/../vendor/autoload.php";

$options = [
  [
    "selector" => "h1",
    "property" => [
      "color" => "red",
      "border-bottom" => "1px solid #000",
    ],
  ],
  [
    "selector" => "p",
    "property" => [
      "color" => "green",
    ],
  ],
  [
    "selector" => ".hello",
    "property" => [
      "color" => "blue",
    ],
  ],
]

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
