<?php
abstract class  index_site{
    public $id;
    public $icona;
    public $name_page;
    public $page_info;



    function  __construct($row)
    {
        $this->id = $row['id'];
        $this->icona = $row['icona'];
        $this->name_page = $row['name_page'];
        $this->page_info = $row['page_info'];

    }

    abstract  public  function  printItem();
}


class icona extends  index_site {
    public function printItem(){
        $link ='http://weblessons.loc/imges';
        echo '<div class="advantages__item" >';
        echo '<img src="'.$link.'/'.$this->icona.'"> ' ;
         echo'<h2>'.$this->name_page.'</h2>' ;
          echo '<p>'.$this->page_info.'</p>';
           echo'</div>';

    }


}

//class ArticlePublication extends publication {
//    public function printItem(){
//
//        echo"<br>"."սա ստատյա է։ ".$this->title;
//        echo "<br>"."հեղինակ: ".$this->author_name;
//        echo "<br><img src='http://adminka/PHP__OOP/polimorfizm/".$this->preview."'>";
//        echo "<hr>";
//    }
//
//}
//
//class PhotoReportPublication extends publication {
//    public function printItem(){
//
//        echo"<br>"."Սա ֆոտոատչոտ  է։";
//        echo "<br><img src='http://adminka/PHP__OOP/polimorfizm/".$this->preview."'>";
//        echo "<hr>";
//    }
//}
//
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>









