<?php
$con = mysqli_connect("localhost","root","","kursain");
mysqli_set_charset($con,"utf-8");




if (isset($_POST['update'])){
    $login = htmlspecialchars($_POST['login']);
    $new_login = htmlspecialchars($_POST['new_login']);
    $new_login2 = htmlspecialchars($_POST['new_login2']);
    echo $new_login2;
    echo"<br>".$login;
    echo"<br>".$new_login;



    $result = mysqli_query( $con, "SELECT * FROM `admin` ;");
    while ( $row = mysqli_fetch_array($result)) {
        $login1 = $row['login'];
        $value1 = preg_match("/$login/",$login1);
        $value2 = preg_match("/$new_login/",$new_login2);

        if (1== $value1 and 1 == $value2){
//            $query = "UPDATE `admin` SET `login` = '$login' WHERE `admin`.`id` = 1;";
//            $info = mysqli_query($con,$query);
            $query = "UPDATE `admin` SET `login` = '$new_login' WHERE `id`= 1;";
            mysqli_query($con,$query);
        }




    }

};


if (isset($_POST['password_update'])){
    $password = htmlspecialchars($_POST['password']);
    $new_password= htmlspecialchars($_POST['new_password']);
    $new_password2 = htmlspecialchars($_POST['new_password2']);


$result = mysqli_query( $con, "SELECT * FROM `admin` ;");




while ( $row = mysqli_fetch_array($result)) {
$password1 = $row['password'];
$value1 = preg_match("/$password/",$password1);
$value2 = preg_match("/$new_password/",$new_password2);

if (1== $value1 and 1 == $value2){
//            $query = "UPDATE `admin` SET `login` = '$login' WHERE `admin`.`id` = 1;";
//            $info = mysqli_query($con,$query);
$query = "UPDATE `admin` SET `password` = '$new_password' WHERE `id`= 1;";
mysqli_query($con,$query);
}




}

};

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
