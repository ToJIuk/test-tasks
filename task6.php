<?php

use TemplateMethod\AbstractBlock;

require_once 'vendor/autoload.php';

$block = new AbstractBlock('Hello world!');
$block->addPrefix('Prefix block');
$block->addPostfix('Postfix block');
$block->templateMethod();