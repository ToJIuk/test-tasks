<?php

use OOP\Button;
use OOP\Text;
use Strategy\CommentStrategy;
use Strategy\InnerBlockStrategy;
use Strategy\Strategy;

require_once 'vendor/autoload.php';

echo '<body>';

$text = new Text('Hello world!');
$a = new Strategy(new CommentStrategy($text));
$a->renderBlock();

$button = new Button('Submit');
$a->setPlugin(new InnerBlockStrategy($text, $button));
$a->renderBlock();