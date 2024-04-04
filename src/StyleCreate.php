<?php

namespace Ponponumi\PhpCssCreate;

class StyleCreate{
  public string $css = "";

  public function __construct(array $option=[],$listMode=false) {
    if($listMode){
      $this->addList($option);
    }else{
      $this->add($option);
    }
  }

  public function add(array $option) {
    // CSSを追加する
    if(!array_key_exists("selector",$option)) {
      // セレクタがなければ
      $option["selector"] = '*';
    }

    if(!array_key_exists("property",$option)) {
      // プロパティがなければ
      $option["property"] = [];
    }

    if($option["property"] !== []) {
      // プロパティがあれば
      $css = $option["selector"];
      $css .= "{";

      foreach ($option["property"] as $key => $value) {
        $css .= $key . ":" . $value . ";";
      }

      $css .= "}";

      $this->css .= $css;
    }
  }

  public function addList(array $options) {
    // CSSをリストで追加する
    foreach ($options as $option) {
      $this->add($option);
    }
  }

  public function addSeparately(array $property,string $selector="") {
    // プロパティとセレクタを別々に追加する
    if($selector === ""){
      $selector = "*";
    }

    $option = [
      "selector" => $selector,
      "property" => $property,
    ];

    $this->add($option);
  }

  public function get($echo=false) {
    // CSSを取得する
    if($echo){
      echo $this->css;
    }

    return $this->css;
  }

  public function getStyle($echo=false) {
    // CSSをstyleタグで囲って取得する
    $css = '<style>' . $this->get() . '</style>';

    if($echo){
      echo $css;
    }

    return $css;
  }

  public function delete(){
    // CSSを削除する
    $this->css = "";
  }

  public function overwrite(array $option){
    // CSSを上書きする
    $this->delete();
    $this->add($option);
  }

  public function overwriteList(array $options){
    // CSSをリストで上書きする
    $this->delete();
    $this->addList($option);
  }

  public function overwriteSeparately(array $property,string $selector=""){
    // プロパティとセレクタを別々に渡し、CSSを上書きする
    $this->delete();
    $this->addSeparately($property,$selector);
  }
}
