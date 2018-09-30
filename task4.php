<?php

use OOP\Button;
use OOP\Text;
use Composite\Composite;
use Iterator\CompositeIterator;
use Iterator\SimpleIterator;

require_once 'vendor/autoload.php';

$tree = new Composite();
$tree->add(new Text('test text1'), 'text');
$tree->add(new Text('test text2'), 'text');
$branch = new Composite();
$branch->add(new Text('child text1'), 'branch');
$branch->add(new Text('child text2'), 'branch');
$branch->add(new Text('child text3'), 'branch');
$childOfBranch = new Composite();
$childOfBranch->add(new Button('Enter'), 'child_of_branch');
$branch->add($childOfBranch, 'branch');
$tree->add($branch, 'text');

echo '<pre>';
$iterator = new CompositeIterator($tree);

$iterator->recursive();

echo '<hr>';

$iterator->byLevel(2);
