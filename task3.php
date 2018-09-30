<?php

use OOP\Button;
use Composite\Composite;
use OOP\Image;
use OOP\Text;

require_once 'vendor/autoload.php';

//1st branch
$buttonBlock = new Composite();
$buttonBlock->add(new Button('Enter'), 'branch1');
$buttonBlock->add(new Button('Submit'), 'branch1');
$textBlock1 = new Composite();
$textBlock1->add(new Text('Hello world'), 'branch1');
$textBlock1->add($buttonBlock, 'branch1');
$textBlock = new Composite();
$textBlock->add(new Text('Test text'), 'branch1');
$textBlock->add($textBlock1, 'branch1');

//2nd branch
$newTextBlock = new Composite();
$textBlock2 = new Composite();
$textBlock2->add(new Text('child block of the 2nd block'), 'branch2');
$newTextBlock->add(new Text('2nd block'), 'branch2');
$newTextBlock->add($textBlock2, 'branch2');

//3rd branch
$img = new Composite();
$img->add(new Image('img/cat.jpg'), 'branch3');

//main composite
$tree = new Composite();
$tree->add($textBlock, 'tree');
$tree->add($newTextBlock, 'tree');
$tree->add($img, 'tree');

echo $tree->renderComposite();
echo '<hr>';
$tree->getStructure();

