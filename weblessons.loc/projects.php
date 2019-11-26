<?php
require_once"html/header.html";


$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");


if (mysqli_connect_errno()){
    echo "filed conect to mysql".mysqli_connect_error();
}

//menq stanum enq bazaic publication tablican;
$result = mysqli_query( $con, "SELECT * FROM `table_lessons` ");


$link_img ='http://weblessons.loc/images/lessons/';
$link_page = 'http://weblessons.loc/pages/';

echo '<main class="project">';
echo '<div class="gallery">';

while ( $row = mysqli_fetch_array($result)) {
    $img_name = $row['photo_lesson'];
    $name_page =$row['link_page'];


        echo     '<div class="photo-itm">';
        echo '<a href="'.$link_page.$name_page.'" target="_blank" ><img src="'.$link_img.$img_name.'" alt="" height="171px" width="261px" >'.$row['name_lesson'].'</a>';

           echo '</div>';





}
echo '</div>';
echo  '</main>';





    require_once "html/footer.html";