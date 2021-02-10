<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../src/Model/Category.php';
require_once '../src/Model/Tags.php';
require_once '../src/Model/Post.php';

//1
$category1 = new \hw6_2\src\Model\Category();
$category1  -> title = '1.1';
$category1  -> slug = '1.2';
//$category1 -> save();

$category2 = new \hw6_2\src\Model\Category();
$category2  -> title = '2.1';
$category2  -> slug = '2.2';
//$category2 ->save();

$category3 = new \hw6_2\src\Model\Category();
$category3 ->title ='3.1';
$category3 ->slug = '3.2';
//$category3 ->save();

$category4 = new \hw6_2\src\Model\Category();
$category4 ->title = '4.1';
$category4 ->slug = '4.2';
//$category4 ->save();

$category5 = new \hw6_2\src\Model\Category();
$category5 ->title = '5.1';
$category5 ->slug = '5.2';
//$category5 ->save();
//2

//$category3 = \hw6_2\src\Model\Category::find(11);
$category3 -> slug = '11';
//$category3 -> save();
//3
$category5 = \hw6_2\src\Model\Category::find(14);
$category5 ->delete();
//4









