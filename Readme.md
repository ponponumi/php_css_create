# PHP CSS Create

このパッケージは、連想配列からCSSを生成するPHPパッケージです。

本パッケージを使うと、サーバーへの負荷が増える可能性があるため、動的に生成するCSS以外は本パッケージを使って生成しない事をおすすめします。

## Composerでのインストールについて

次のコマンドを実行する事で、インストール可能です。

```bash
composer require ponponumi/php_css_create
```

## インスタンスの作成方法について

本パッケージでは、インスタンスの作成が必要です。

次の方法で、インスタンスの作成が可能です。

```php
use Ponponumi\PhpCssCreate\StyleCreate;

$styleCreate = new StyleCreate();
```

## インスタンス作成時にデータを渡す方法について

本パッケージでは、インスタンス作成時、データを渡す事が出来ます。

```php
use Ponponumi\PhpCssCreate\StyleCreate;

$data = [
  "selector" => "h2",
  "property" => [
    "color" => "#00f"
  ]
];

$styleCreate = new StyleCreate($data);

$css = $styleCreate->get();

var_dump($css);

// 出力結果 string(15) "h2{color:#00f;}"
```

複数のデータを渡したい場合は、このようにする事で、渡す事が出来ます。

```php
use Ponponumi\PhpCssCreate\StyleCreate;

$data = [
  [
    "selector" => "h1",
    "property" => [
      "color" => "#f00"
    ]
  ],
  [
    "selector" => "p",
    "property" => [
      "color" => "#0f0"
    ]
  ],
];

$styleCreate = new StyleCreate($data,true);

$css = $styleCreate->get();

var_dump($css);

// 出力結果 string(29) "h1{color:#f00;}p{color:#0f0;}"
```

## データを追加する方法について

```php
use Ponponumi\PhpCssCreate\StyleCreate;

$data = [
  "selector" => "h2",
  "property" => [
    "color" => "#00f"
  ]
];

$styleCreate = new StyleCreate($data);

$addData = [
  "selector" => ".text",
  "property" => [
    "font-size" => "17px"
  ]
];

$styleCreate->add($addData);

$css = $styleCreate->get();

var_dump($css);

// 出力結果 string(37) "h2{color:#00f;}.text{font-size:17px;}"
```

複数のデータを渡したい場合は、次の方法で渡す事が出来ます。

```php
use Ponponumi\PhpCssCreate\StyleCreate;

$data = [
  "selector" => "h2",
  "property" => [
    "color" => "#00f"
  ]
];

$styleCreate = new StyleCreate($data);

$addList = [
  [
    "selector" => ".text",
    "property" => [
      "font-size" => "17px"
    ]
  ],
  [
    "selector" => ".hello",
    "property" => [
      "color" => "#04f"
    ]
  ],
];

$styleCreate->addList($addList);

$css = $styleCreate->get();

var_dump($css);

// 出力結果 string(56) "h2{color:#00f;}.text{font-size:17px;}.hello{color:#04f;}"
```

更に、次の方法でも追加する事が出来ます。

```php
use Ponponumi\PhpCssCreate\StyleCreate;

$styleCreate = new StyleCreate();

$propertyList = [
  "color" => "#03e",
  "border-bottom" => "1px solid #03e",
];

$styleCreate->addSeparately($propertyList,"a");

$css = $styleCreate->get();

var_dump($css);

// 出力結果 string(43) "a{color:#03e;border-bottom:1px solid #03e;}"
```

## データを削除する方法について

追加したデータは、次の方法で削除する事が出来ますが、個別に削除する事は出来ませんのでご注意下さい。

```php
use Ponponumi\PhpCssCreate\StyleCreate;

$styleCreate = new StyleCreate();

$propertyList = [
  "color" => "#03e",
  "border-bottom" => "1px solid #03e",
];

$styleCreate->addSeparately($propertyList,"a");
$styleCreate->delete();

$css = $styleCreate->get();

var_dump($css);

// 出力結果 string(0) ""
```

## CSS変数を追加する方法について

次の方法で、追加する事が出来ます。

## ライセンスについて

このパッケージは、MITライセンスとして作成されています。
