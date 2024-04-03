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
}
