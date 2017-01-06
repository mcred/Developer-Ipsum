<?php
require(__DIR__."/vendor/autoload.php");
require(__DIR__."/src/autoload.php");
require(__DIR__."/config/vocab.php");

$vocab = new VOCAB();
$factory = new IpsumFactory($vocab);
$paragraphs = $factory->create('paragraphs', 4, 8);
echo $paragraphs->generate();

?>
