<?php
class Book {
var $title;
var $author;
var $pages;

function __construct(){
    echo'new book created'.'<br>';
}
}
$book1 = new Book;
$book1->title ="harry Potter";
$book1->author ="kk rowling";
$book1->pages = 400;

$book2 = new Book;
$book2->title ="Lord of rings";
$book2->author ="jk ling";
$book2->pages = 600;

echo $book2->pages;
?>