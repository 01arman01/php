<?php
require_once"html/header.html";


$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");


if (mysqli_connect_errno()){
    echo "filed conect to mysql".mysqli_connect_error();
}

//menq stanum enq bazaic publication tablican;
$result = mysqli_query( $con, "SELECT * FROM `book` ");


$link_book ='http://weblessons.loc/file/book/';
$link_img ='http://weblessons.loc/file/book_img/';

echo '<main>';



// ays cikli mej menq men stanum enq yuraqanchyur kanchi arjeqner@:
while ( $row = mysqli_fetch_array($result)) {


    ?>


    <div class="about-container">
        <p class="book-left" > <img src=" <?php echo $link_img.$row['img'];   ?>" alt=""></p>
        <p class="book-text">
            <a class="silka-girq" href="<?php echo $link_book.$row['name_book'];   ?>" target="_blank" >
                <img class="book-icona-text" src="<?php echo $link_img."file.png";   ?>">
                <span class="hexinak"><?php echo $row['name_book'];   ?></span><br>
                <span class="mb">20.9 Mb</span>
            </a>
        </p>
    </div>
    <?php


}


echo'</main>';




require_once "html/footer.html";