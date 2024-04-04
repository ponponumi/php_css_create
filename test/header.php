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
$styleClass3 = new StyleCreate($option);
$styleClass4 = new StyleCreate($option);
$styleClass5 = new StyleCreate();
$styleClass6 = new StyleCreate();

// 削除のテスト
$styleClass4->delete();

// 追加のテストを実施
$option = [
  "selector" => "h2",
  "property" => [
    "color" => "#1275ab",
  ],
];

$styleClass->add($option);

$option = [
  "selector" => "span",
  "property" => [
    "color" => "#57f405",
  ],
];

$styleClass3->overwrite($option);

$styleClass6->addSeparately(["color" => "black"],"h3");
$styleClass6->addSeparatelyProperty("color","#ff8000","h4");

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php $styleClass->getStyle(true) ?>
  <?php $styleClass2->getStyle(true) ?>
  <?php $styleClass3->getStyle(true) ?>
</head>
<body>
