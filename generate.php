<?php
require(__DIR__."/vendor/autoload.php");
require(__DIR__."/src/autoload.php");

$paragraphs = IpsumFactory::create('paragraphs', 4, 8);
echo $paragraphs->generate();
?>
