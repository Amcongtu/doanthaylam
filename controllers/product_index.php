<?php
include 'C:/wamp/www/online_book/models/product.php';
include 'C:/wamp/www/online_book/database/dbhelper.php';
 $conn = new Database(null,null,null,null);
 $list_product = new Product("","","","","","","");
 $row =$list_product->selectAllLatestBook();
?>