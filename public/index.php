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
//$category5 = \hw6_2\src\Model\Category::find(22);
//$category5 ->delete();
//4
$post1 = new \hw6_2\src\Model\Post();
$post1 -> title = '1.1';
$post1 -> slug = '1.2';
$post1 -> body = '1.3';
$post1 -> category_id ='10';
//$post1 -> save();
$post2 = new \hw6_2\src\Model\Post();
$post2 -> title = '2.1';
$post2 -> slug = '2.2';
$post2 -> body = '2.3';
$post2 -> category_id ='11';
//$post2->save();
$post3 = new \hw6_2\src\Model\Post();
$post3 -> title = '3.1';
$post3 -> slug = '3.2';
$post3 -> body = '3.3';
$post3 -> category_id ='12';
//$post3->save();
$post4 = new \hw6_2\src\Model\Post();
$post4 -> title = '4.1';
$post4 -> slug = '4.2';
$post4 -> body = '4.3';
$post4 -> category_id ='13';
//$post4->save();
$post5 = new \hw6_2\src\Model\Post();
$post5 -> title = '5.1';
$post5 -> slug = '5.2';
$post5 -> body = '5.3';
$post5 -> category_id ='15';
//$post5->save();
$post6 = new \hw6_2\src\Model\Post();
$post6 -> title = '6.1';
$post6 -> slug = '6.2';
$post6 -> body = '6.3';
$post6-> category_id ='16';
//$post6->save();
$post7 = new \hw6_2\src\Model\Post();
$post7 -> title = '7.1';
$post7 -> slug = '7.2';
$post7 -> body = '7.3';
$post7 -> category_id ='17';
//$post7->save();
$post8 = new \hw6_2\src\Model\Post();
$post8 -> title = '8.1';
$post8 -> slug = '8.2';
$post8 -> body = '8.3';
$post8 -> category_id ='18';
//$post8->save();
$post9 = new \hw6_2\src\Model\Post();
$post9 -> title = '9.1';
$post9 -> slug = '9.2';
$post9 -> body = '9.3';
$post9 -> category_id ='19';
//$post9->save();
$post10 = new \hw6_2\src\Model\Post();
$post10 -> title = '10.1';
$post10 -> slug = '10.2';
$post10 -> body = '10.3';
$post10 -> category_id ='20';
//$post10->save();
//5
//$post5 = \hw6_2\src\Model\Post::find(6);
$post5 -> title = '52.2';
$post5 -> slug = '532.4';
$post5 -> body = '513.6';
$post5 -> category_id ='24';
//$post5 ->save();
//6
//$post9 = \hw6_2\src\Model\Post::find(10);
//$post9 -> delete();
//7
$tag1 = new \hw6_2\src\Model\Tags();
$tag1 -> title = '1.1';
$tag1 -> slug = '1.2';
$tag1 -> save();
$tag2 = new \hw6_2\src\Model\Tags();
$tag2 -> title = '2.1';
$tag2 -> slug = '2.2';
$tag2 -> save();
$tag3 = new \hw6_2\src\Model\Tags();
$tag3 -> title = '3.1';
$tag3 -> slug = '3.2';
$tag3 -> save();
$tag4 = new \hw6_2\src\Model\Tags();
$tag4 -> title = '4.1';
$tag4 -> slug = '4.2';
$tag4 -> save();
$tag5 = new \hw6_2\src\Model\Tags();
$tag5 -> title = '5.1';
$tag5 -> slug = '5.2';
$tag5 -> save();
$tag6 = new \hw6_2\src\Model\Tags();
$tag6 -> title = '6.1';
$tag6 -> slug = '6.2';
$tag6 -> save();
$tag7 = new \hw6_2\src\Model\Tags();
$tag7 -> title = '7.1';
$tag7 -> slug = '7.2';
$tag7 -> save();
$tag8 = new \hw6_2\src\Model\Tags();
$tag8 -> title = '8.1';
$tag8 -> slug = '8.2';
$tag8 -> save();
$tag9 = new \hw6_2\src\Model\Tags();
$tag9 -> title = '9.1';
$tag9 -> slug = '9.2';
$tag9 -> save();
$tag10 = new \hw6_2\src\Model\Tags();
$tag10 -> title = '10.1';
$tag10 -> slug = '10.2';
$tag10 -> save();
//8











