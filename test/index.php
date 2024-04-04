<?php require_once "header.php" ?>

<h1>これはテストです</h1>

<p>テキストテキスト</p>
<p class="hello">Hello World!!</p>

<h2>ボックスのテスト</h2>
<div class="box"></div>

<p><span>hello world</span></p>

<pre><?php var_dump($styleClass4->get()) ?></pre>
<pre><?php var_dump($styleClass5->get()) ?></pre>
<pre><?php var_dump($styleClass6->get()) ?></pre>
<pre><?php var_dump($styleClass7->get()) ?></pre>
<pre><?php var_dump(htmlspecialchars($styleClass7->getStyle())) ?></pre>

<?php

$styleClass6->overwriteSeparately(["border" => "1px solid #f00"],"p");
$styleClass7->overwriteSeparatelyProperty("border","1px solid #f00","p");

?>

<pre><?php var_dump($styleClass6->get()) ?></pre>
<pre><?php var_dump($styleClass7->get()) ?></pre>

<?php require_once "footer.php" ?>
