<?php

$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");


$photo_lesson = htmlspecialchars($_FILES['photo_lesson']['name']);
$name_lesson = htmlspecialchars($_POST['name_lesson']);
$link_page = htmlspecialchars($_FILES['link_page']['name']);

$query = "INSERT INTO table_lessons (`photo_lesson`,`name_lesson`,`link_page`) VALUES ('$photo_lesson','$name_lesson','$link_page'); ";
$info = mysqli_query($con,$query);