<?php

include_once "Stack.php";
include_once "Books.php";

$books = new Books(3);
$books ->push("van hoc 12");
$books ->push("toan 12");
$books ->push("su 12");
var_dump($books->getStack());