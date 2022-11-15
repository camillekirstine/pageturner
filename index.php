<?php
require "settings/init.php";

$books = $db->sql("SELECT * FROM books");

foreach ($books as $book){
    echo $book->bookName . "<br>";
}
?>

<!DOCTYPE html>
<html lang="da">


<head>

    <meta charset="utf-8">

    <title>Pageturner</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.typekit.net/gpr7ofz.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php include "includes/navbar.php"?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
