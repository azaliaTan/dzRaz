<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>массив</title>
</head>
<body>
    
<?php 


If(isset($_GET['page'])){
    $page=$_GET['page'];
    if($page=='1zadanie'){include('page/zadan.php');}
    if($page=='2zadanie'){include('page/2zadan.php');}
    if($page=='3zadanie'){include('page/3zadan.php');}

} else{
    
include('start.php');}




?>


</body>
</html>