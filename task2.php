<?php

use Decorator\BorderDecorator;
use Decorator\CommentsDecorator;
use OOP\Button;
use OOP\Image;
use OOP\Text;

require_once 'vendor/autoload.php';

echo '<body>';

$text = new Text('test text');
$comment = new CommentsDecorator($text);
$comment->render();
$border = new BorderDecorator($text, 3, 'red');
$border->render();

echo '<hr>';

$image = new Image('img/cat.jpg', ['width' => '50px']);
$comment = new CommentsDecorator($image);
$comment->render();
$border = new BorderDecorator($image, 2, 'green');
$border->render();

echo '<hr>';

$button = new Button('Enter');
$comment = new CommentsDecorator($button);
$comment->render();
$border = new BorderDecorator($button);
$border->render();
