<?php

include_once "connect.php";
include "functions.php";

read_itOnClick();
wish_to_readOnClick();
readDeleteOnClick();
wishDeleteOnClick(); 
updateOnClick();

$stmtread_it = $conn->prepare("SELECT id, book_name, author, descriptions FROM read_it");
$stmtread_it->execute(); 
$stmtread_it->setFetchMode(PDO::FETCH_ASSOC); 
$booksR = $stmtread_it->fetchAll();

$stmtwish_to_read = $conn->prepare("SELECT id, book_name, author, descriptions FROM wish_to_read");
$stmtwish_to_read->execute();
$stmtwish_to_read->setFetchMode(PDO::FETCH_ASSOC);
$booksW = $stmtwish_to_read->fetchAll();

?>