<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Ponponumi\PhpCssCreate\StyleCreate;

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
];

$option = [
  "selector" => ".box",
  "property" => [
    "background-color" => "#e321d2",
    "width" => "100%",
    "height" => "30px",
    "border-radius" => "5px",
  ],
];

// コンストラクタのテストを実行
$styleClass = new StyleCreate($options,true);
$styleClass2 = new StyleCreate($option);

// 追加のテストを実施
$option = [
  "selector" => "h2",
  "property" => [
    "color" => "#1275ab",
  ];
];

$styleClass->add($option);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php $styleClass->getStyle(true) ?>
  <?php $styleClass2->getStyle(true) ?>
</head>
<body>
