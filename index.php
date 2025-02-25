<?php

require_once "classes/LibraryItem.php";
require_once "classes/Book.php";
require_once "classes/Magazine.php";
require_once "classes/DVD.php";



$item = new LibraryItem("Library Item 1", "J.K Rowling", 2025);

echo $item->getDetails();

$book = new Book("sample Title", "sample author", 2010, "1234567890123", 200);

echo $book->getDetails();

$magazine = new Magazine("Weekly NBA", "NBA - ESPN", 2024, 38, "Sports Illustrated");

echo $magazine->getDetails();

$dvd = new DVD("Allstar game highlights", "By Me", "2016", 400, "mp4");

echo $dvd->getDetails();

?>


