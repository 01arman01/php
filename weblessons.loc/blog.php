<?php
require_once"html/header.html";


$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");


if (mysqli_connect_errno()){
    echo "filed conect to mysql".mysqli_connect_error();
}

//menq stanum enq bazaic publication tablican;
$result = mysqli_query( $con, "SELECT * FROM `news` ");


$link ='http://weblessons.loc/images/blog/';

echo '<main>';



// ays cikli mej menq men stanum enq yuraqanchyur kanchi arjeqner@:
while ( $row = mysqli_fetch_array($result)) {


         ?>


    <div class="blog-container">
        <div class="blog-heder">

                <img name="name_statya" class=".blog-cover"  src="<?php echo $link.$row['img'] ;  ?> " style="width: 100%;">

        </div>
        <div class="blog-body">
            <div class="blog-title">
                <h1><?php echo $row['name_news']   ;    ?></h1>
            </div>
            <div class="blog-text">
                <p> <?php   echo $row['content']  ?></php></p>
            </div>
            <div class="blog-tags">
                <ul>

                    <li><a><?php echo $row['author_name']  ?></a></li>
                </ul>
            </div>
        </div>

        <div class="blog-footer">
            <ul>
                <li class="published-date"><?php echo $row['date'] ?></li>
            </ul>
        </div>
    </div>
    <?php


}


echo'</main>';




require_once "html/footer.html";