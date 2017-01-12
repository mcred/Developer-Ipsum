<?php
require(__DIR__."/vendor/autoload.php");
require(__DIR__."/src/autoload.php");
require(__DIR__."/config/vocab.php");

$factory = new IpsumFactory(new VOCAB());
$paragraphs = $factory->create('lists', 4, 8);
echo $paragraphs->generate();

?>
