<?php
$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");

$photo_news = htmlspecialchars($_FILES['photo_news']['name']);
$name_news = htmlspecialchars($_POST['name_news']);
$content = htmlspecialchars($_POST['content']);
$author_name = htmlspecialchars($_POST['author_name']);

//echo "<br>".$photo_news."<br>".$name_news."<br>".$content."<br>".$author_name;


$query = "INSERT INTO news (`img`,`name_news`,`content`,`author_name`) VALUES ('$photo_news','$name_news','$content','$author_name');";
$info = mysqli_query($con,$query);
