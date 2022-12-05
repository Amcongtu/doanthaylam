<?php

include 'C:/wamp/www/online_book/models/product.php';
include 'C:/wamp/www/online_book/database/dbhelper.php';
 $conn = new Database(null,null,null,null);
 $list_product = new Product("","","","","","","");
 $row =$list_product->getAllBook();

//  session_start();
//  $book_isbn = $_GET['bookisbn'];
//  // connecto database
//  $book = new Product("","","","","","","");
//  $book->id = $book_isbn;
//  $row_book = $book->getBook();



?>