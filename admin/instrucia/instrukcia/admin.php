<?php



$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");



// glavni eji ellementneri avelacman hamaar naxatesvac kod
$link ='http://proectUxaki';
$icona = htmlspecialchars($_FILES['icona']['name']) ;
$name_page =  htmlspecialchars($_POST['name_page']) ;
$page_info = htmlspecialchars($_POST['page_info']);

$query = "INSERT INTO index_site (`icona`,`name_page`,`page_info`) VALUES ('$icona','$name_page','$page_info');";
$info = mysqli_query($con,$query);





//dassseri dasakargman eji nkarnern u nyutern avellacnelu hamar naxatesvac kod
$photo_lesson = htmlspecialchars($_FILES['photo_lesson']['name']);
print_r($photo_lesson) ;

