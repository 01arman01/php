<?php
function formatSizeUnits($bytes)
{
    if ($bytes >= 1073741824)
    {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}




$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");

if (isset($_POST['php'])){
    $video_name = htmlspecialchars($_FILES['video_name']['name']);
    $name_lesson = htmlspecialchars($_POST['name_lesson']);


    $query = "INSERT INTO php7 (`name_video`,`name_lesson`) VALUES ('$video_name','$name_lesson');";
    $info = mysqli_query($con,$query);
}
else if (isset($_POST['js'])){
    $video_name = htmlspecialchars($_FILES['video_name']['name']);
    $name_lesson = htmlspecialchars($_POST['name_lesson']);


    $query = "INSERT INTO js (`name_video`,`name_lesson`) VALUES ('$video_name','$name_lesson');";
    $info = mysqli_query($con,$query);
}
else if (isset($_POST['JQuery'])){
    $video_name = htmlspecialchars($_FILES['video_name']['name']);
    $name_lesson = htmlspecialchars($_POST['name_lesson']);


    $query = "INSERT INTO JQuery (`name_video`,`name_lesson`) VALUES ('$video_name','$name_lesson');";
    $info = mysqli_query($con,$query);
}
else if (isset($_POST['React_JS'])){
    $video_name = htmlspecialchars($_FILES['video_name']['name']);
    $name_lesson = htmlspecialchars($_POST['name_lesson']);


    $query = "INSERT INTO React_JS (`name_video`,`name_lesson`) VALUES ('$video_name','$name_lesson');";
    $info = mysqli_query($con,$query);
}
else if (isset($_POST['FLEXBOX'])){
    $video_name = htmlspecialchars($_FILES['video_name']['name']);
    $name_lesson = htmlspecialchars($_POST['name_lesson']);


    $query = "INSERT INTO FLEXBOX (`name_video`,`name_lesson`) VALUES ('$video_name','$name_lesson');";
    $info = mysqli_query($con,$query);
}
else if (isset($_POST['CSS_Grid'])){
    $video_name = htmlspecialchars($_FILES['video_name']['name']);
    $name_lesson = htmlspecialchars($_POST['name_lesson']);


    $query = "INSERT INTO CSS_Grid (`name_video`,`name_lesson`) VALUES ('$video_name','$name_lesson');";
    $info = mysqli_query($con,$query);
}
else if (isset($_POST['Bootstrap4'])){
    $video_name = htmlspecialchars($_FILES['video_name']['name']);
    $name_lesson = htmlspecialchars($_POST['name_lesson']);


    $query = "INSERT INTO Bootstrap4 (`name_video`,`name_lesson`) VALUES ('$video_name','$name_lesson');";
    $info = mysqli_query($con,$query);
}
else if (isset($_POST['books'])){

    $name_book = htmlspecialchars($_FILES['book']['name']);
    $size_book = htmlspecialchars($_FILES['book']['size']);
    $img = htmlspecialchars($_FILES['img']['name']);

    $size_book = formatSizeUnits($size_book);


    $query = "INSERT INTO book (`img`,`name_book`,`size_book`) VALUES ('$img','$name_book','$size_book');";
    $info = mysqli_query($con,$query);
}




