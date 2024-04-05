# Link Create

このパッケージは、連想配列からCSSを生成するPHPパッケージです。

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

// 出力結果 string(15) "h1{color:#f00;}p{color:#0f0;}"
```

## ライセンスについて

このパッケージは、MITライセンスとして作成されています。
