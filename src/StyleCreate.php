<?php

namespace Ponponumi\PhpCssCreate;

class StyleCreate{
  public string $css = "";

  public function __construct(array $option) {
    //
  }

  public function add(array $option) {
    // CSSを追加する
    if(!array_key_exists("selector",$option)) {
      // セレクタがなければ
      $option["selector"] = '*';
    }

    $css = $option["selector"];
    $css .= "{";

    if($option["property"] !== []) {
      // プロパティがあれば
      foreach ($option["property"] as $key => $value) {
        $css .= $key . ":" . $value . ";";
      }
    }

    $css .= "}";

    $this->css .= $css;
  }

  public function addList(array $options) {
    // CSSをリストで追加する
    foreach ($options as $option) {
      $this->add($option);
    }
  }
}
