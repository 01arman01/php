<?php
require_once"../html/header.html";


$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");


if (mysqli_connect_errno()){
    echo "filed conect to mysql".mysqli_connect_error();
}

//menq stanum enq bazaic publication tablican;
$result = mysqli_query( $con, "SELECT * FROM `php7` ");


$link ='http://weblessons.loc/pages/videos/php7_product/';

echo '<main>';


// ays cikli mej menq men stanum enq yuraqanchyur kanchi arjeqner@:
while ( $row = mysqli_fetch_array($result)) {
    ?>

    <div  style=" ; width: 67%; margin:  40px auto 40px auto; ">
    <video controls width="65%" style="min-width: 270px;">
           <source src="<?php  echo $link.$row['name_video'];?>" >
    </video>
        <h3 style="width: 65%; min-width: 270px;"><?php   echo $row['id'].'.) '.$row['name_lesson'];?> </h3>
    </div>
    <?php
}
echo'</main>';
require_once "../html/footer.html";