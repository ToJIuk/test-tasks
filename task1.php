<?php

use OOP\Button;
use OOP\Image;
use OOP\Text;

require_once 'vendor/autoload.php';

$text = new Text('hello world!');
$text->render();

echo '<hr>';

$image = new Image(
    'img/cat.jpg',
    [
        'width' => '50px',
        'height' => '50px',
        'alt' => 'cat img',
    ]
);
$image->render();

echo '<hr>';

$button = new Button(
    'Enter',
    [
        'name' => 'button',
        'value' => 'test',
        'type' => 'submit',
    ]
);
$button->render();
