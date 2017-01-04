<?php
require(__DIR__."/vendor/autoload.php");
require(__DIR__."/src/autoload.php");

$paragraphs = new Paragraphs(new Assembler(new Vocabulary()), 4, 8);
echo $paragraphs->generate();
?>
