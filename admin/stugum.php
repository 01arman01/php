<!doctype html>
<html >
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




<?

$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars( $_POST['password']);

if (mysqli_connect_errno()){
    echo "filed conect to mysql".mysqli_connect_error();
}
//$login = htmlspecialchars($_POST['login']);
//$password = htmlspecialchars($_POST['password']);





if (isset( $_POST['submit']))
{
    if(empty($_POST['login']))
    {
        echo 'Вы не ввели логин';
    }
    elseif(empty($_POST['password']))
    {
        echo 'Вы не ввели пароль';
    }

    else
    {
        $login = $_POST['login'];
        $password = $_POST['password'];
        $result = mysqli_query( $con, "SELECT * FROM `admin` ;");
        while ( $row = mysqli_fetch_array($result)) {
            $login1 = $row['login'];
            $password1 = $row['password'];

            $value1 = preg_match("/$login/",$login1);
            $value2 = preg_match("/$password/",$password1);
            if(1== $value1 and  1== $value2) {
//                include("instrucia/home.php");
                ?>


                <!doctype html>
                <html>
                <head>
                    <meta charset="UTF-8">
                    <title>Document</title>
                    <link rel="stylesheet" type="text/css" href="main.css">
                </head>
                <body style="background-color: black;">
                <div>
                    <h1>update login</h1>
                    <form   action="instrucia/instrukcia/update.php"  enctype="multipart/form-data" method="post">
                        <p><input type="text" name="login" placeholder="login"></p>
                        <p><input type="text" name="new_login" placeholder="new login"></p>
                        <p><input type="text" name="new_login2" placeholder="repeat new login"></p>
                        <input type="submit" name="update">
                    </form>

                </div>
                <div>
                    <h1>update password</h1>
                    <form   action="instrucia/instrukcia/update.php"  enctype="multipart/form-data" method="post">
                        <p><input type="password" name="password" placeholder="password"></p>
                        <p><input type="password" name="new_password" placeholder="new password"></p>
                        <p><input type="password" name="new_password2" placeholder="repeat new password"></p>
                        <input type="submit" name="password_update">
                    </form>
                </div>
                <div class="home">
                    <h1>Home Ավելացնել էջի նկարագրություն</h1>
                    <form action="instrucia/instrukcia/admin.php" method="POST" enctype="multipart/form-data">
                        <p class="icona">նկար<label><input type="file" name="icona"></label></p>
                        <p><label><input type="text" name="name_page" placeholder="Name page"></label></p>
                        <p><label><input type="text" name="page_info" placeholder="information for page"></label></p>
                        <input type="reset">
                        <input type="submit">
                    </form>
                </div>
                <div class="lessons">
                    <h1>lessons Ավելացնել ծրագրավորման առարկաներ</h1>
                    <form action="instrucia/instrukcia/lessson_setings.php" method="POST" enctype="multipart/form-data">
                        <p>նկար<label><input type="file" name="photo_lesson"></label></p>
                        <p><label><input type="text" name="name_lesson" placeholder="Name Lesson"></label></p>
                        <p><label>Դասի վիդեոների էջը <input type="file" name="link_page"></label></p>
                        <input type="reset">
                        <input type="submit">
                    </form>

                </div>

                <div class="lessons">
                    <h1>Blog Ավելացնել նորություններ</h1>
                    <form action="instrucia/instrukcia/news.php" method="POST" enctype="multipart/form-data">
                        <p>նկար<label><input type="file" name="photo_news"></label></p>
                        <p><label><input type="text" name="name_news" placeholder="Name News"></label></p>
                        <p><label><textarea class="content" name="content" placeholder="content news"
                                            style="font-size: 19px; width: 550px; height: 400px;"></textarea></label></p>
                        <p><label><input type="text" name="author_name" placeholder="Author name"></label></p>
                        <input type="reset">
                        <input type="submit">
                    </form>

                </div>

                <div class="lessons">
                    <h1>lessons php7 ավելացնել դասեր</h1>
                    <form action="instrucia/instrukcia/php7.php" method="POST" enctype="multipart/form-data">
                        <p><label>Վիդեո<input type="file" name="video_name"></label></p>
                        <p><label>դասի անունը<input type="text" name="name_lesson" placeholder="Name lesson"></label></p>
                        <input type="reset">
                        <input type="submit" name="php">
                    </form>

                </div>
                <div class="lessons">
                    <h1>lessons JS ավելացնել դասեր</h1>
                    <form action="instrucia/instrukcia/php7.php" method="POST" enctype="multipart/form-data">
                        <p><label>Վիդեո<input type="file" name="video_name"></label></p>
                        <p><label>դասի անունը<input type="text" name="name_lesson" placeholder="Name lesson"></label></p>
                        <input type="reset">
                        <input type="submit" name="js">
                    </form>
                </div>
                <div class="lessons">
                    <h1>lessons JQuery ավելացնել դասեր</h1>
                    <form action="instrucia/instrukcia/php7.php" method="POST" enctype="multipart/form-data">
                        <p><label>Վիդեո<input type="file" name="video_name"></label></p>
                        <p><label>դասի անունը<input type="text" name="name_lesson" placeholder="Name lesson"></label></p>
                        <input type="reset">
                        <input type="submit" name="JQuery">
                    </form>
                </div>
                <div class="lessons">
                    <h1>lessons React JS ավելացնել դասեր</h1>
                    <form action="instrucia/instrukcia/php7.php" method="POST" enctype="multipart/form-data">
                        <p><label>Վիդեո<input type="file" name="video_name"></label></p>
                        <p><label>դասի անունը<input type="text" name="name_lesson" placeholder="Name lesson"></label></p>
                        <input type="reset">
                        <input type="submit" name="React_JS">
                    </form>
                </div>
                <div class="lessons">
                    <h1>lessons FLEXBOX  ավելացնել դասեր</h1>
                    <form action="instrucia/instrukcia/php7.php" method="POST" enctype="multipart/form-data">
                        <p><label>Վիդեո<input type="file" name="video_name"></label></p>
                        <p><label>դասի անունը<input type="text" name="name_lesson" placeholder="Name lesson"></label></p>
                        <input type="reset">
                        <input type="submit" name="FLEXBOX">
                    </form>
                </div>
                <div class="lessons">
                    <h1>lessons CSS Grid  ավելացնել դասեր</h1>
                    <form action="instrucia/instrukcia/php7.php" method="POST" enctype="multipart/form-data">
                        <p><label>Վիդեո<input type="file" name="video_name"></label></p>
                        <p><label>դասի անունը<input type="text" name="name_lesson" placeholder="Name lesson"></label></p>
                        <input type="reset">
                        <input type="submit" name="CSS_Grid">
                    </form>
                </div>
                <div class="lessons">
                    <h1>lessons Bootstrap 4 ավելացնել դասեր</h1>
                    <form action="instrucia/instrukcia/php7.php" method="POST" enctype="multipart/form-data">
                        <p><label>Վիդեո<input type="file" name="video_name"></label></p>
                        <p><label>դասի անունը<input type="text" name="name_lesson" placeholder="Name lesson"></label></p>
                        <input type="reset">
                        <input type="submit" name="Bootstrap4">
                    </form>
                </div>
                <div class="book">
                    <h1>book ավելացնել գրքեր</h1>
                    <form action="instrucia/instrukcia/php7.php" method="POST" enctype="multipart/form-data">
                        <p><label>գրքի նկարը<input type="file" name="img"></label></p>
                        <p><label>գիրքը<input type="file" name="book"></label></p>
                        <input type="reset">
                        <input type="submit" name="books">
                    </form>
                </div>


                </body>
                </html>







                <?php




            }
            else
            {

                echo "Неверний логин или парол.";

            }

        }
    }
}
?>