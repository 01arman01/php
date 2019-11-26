<?php
$name = htmlspecialchars($_POST['name']);
$email = "papyan.arman95@mail.ru";
$email_posititel = htmlspecialchars($_POST['email']);
$text = htmlspecialchars($_POST['text']);

  $result =   mail($email, $name,$email_posititel, $text);
if ($result) {
    echo "հաղորթագրությունը ուղարկված է։";
}
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


