# Developer-Ipsum
[![Build Status](https://travis-ci.org/mcred/Developer-Ipsum.svg?branch=master)](https://travis-ci.org/mcred/Developer-Ipsum)
[![Code Climate](https://codeclimate.com/github/mcred/Developer-Ipsum/badges/gpa.svg)](https://codeclimate.com/github/mcred/Developer-Ipsum)
[![Test Coverage](https://codeclimate.com/github/mcred/Developer-Ipsum/badges/coverage.svg)](https://codeclimate.com/github/mcred/Developer-Ipsum/coverage)
<p>Developer Ipsum is an Ipsum generator based on the terms used by the software development team at my work. Shout out to <a href="https://payscape.com" target="_blank">Payscape</a>.</p>
### Requirements
* [PHP 7.1](http://php.net/)
* [Apache Ant](http://ant.apache.org/)
* [Composer](https://getcomposer.org/)

### Installation
```
$ git clone https://github.com/mcred/Developer-Ipsum.git
$ cd Developer-Ipsum/
$ composer install
$ ant
```
### Usage
<p>Implementation example is located in the `generate.php` file. Require the `vendor` and `src` autoload files. A vocab file is required to construct the main `IpsumFactory`. You can replace the vocab file with your own, if you like. Once the `IpsumFactory` has been instantiated, create the type of Ipsum you would like, how many entities you want and how many items each entity should contain. The example below would create 4 paragraphs with 8 sentences each. Run `php generate.php` to see your output.</p>
```php
<?php
require(__DIR__."/vendor/autoload.php");
require(__DIR__."/src/autoload.php");
require(__DIR__."/config/vocab.php");

$factory = new IpsumFactory(new VOCAB());
$paragraphs = $factory->create('paragraphs', 4, 8);
echo $paragraphs->generate();
?>
```
