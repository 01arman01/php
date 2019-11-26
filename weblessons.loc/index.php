<?php
require_once"html/header.html";


$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");


if (mysqli_connect_errno()){
    echo "filed conect to mysql".mysqli_connect_error();
}

//menq stanum enq bazaic publication tablican;
$result = mysqli_query( $con, "SELECT * FROM `index_site` ");


$link ='http://weblessons.loc/images/';

echo '<main>';
echo '<p class="img-index"><img src="images/web.png"  class="mv-100"/></p>';

echo '<div class="advantages__container" >';
echo '<div class="advantages" >';

// ays cikli mej menq men stanum enq yuraqanchyur kanchi arjeqner@:
     while ( $row = mysqli_fetch_array($result)) {
       $link2 = $row['icona'];


    echo '<div class="advantages__item" >';

    echo '<img src="'.$link.$link2. '">';
    echo'<h2>'.$row['name_page'].'</h2>' ;
    echo '<p>'.$row['page_info'].'</p>';
    echo'</div>';


}

    echo'</div>';
    echo'</div>';
    echo'</main>';




require_once "html/footer.html";