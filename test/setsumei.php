<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Ponponumi\PhpCssCreate\StyleCreate;

$styleCreate = new StyleCreate();

$variableList = [
  "theme-color" => "#15f132",
  "text_color" => "#222",
  "--link-color" => "#52e3f2",
  "__link_hover_color" => "#52e3f2",
];

$styleCreate->addVariable($variableList,false);
$css = $styleCreate->get();

var_dump($css);

// 出力結果 string(97) ":root{--theme-color:#15f132;--text_color:#222;--link-color:#52e3f2;--__link_hover_color:#52e3f2;}"
