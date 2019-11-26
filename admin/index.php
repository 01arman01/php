

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background: #111111;
        
        }
        div {
            width: 300px;
            margin-top: 200px;
            margin-left: auto;
            margin-right: auto;
            height: auto;
            border: 3px solid;
            border-color: aqua;
            border-radius: 6px;
            
            padding: 15px;
            background:#F1F3F4;
            border
            
        }
        input{
            font-size: 18px;
        }
      
    
    </style>
    <div>
        <form action="stugum.php" enctype="multipart/form-data" method="POST">
    <p><input type="text" name="login" placeholder="Login"></p>
    <p><input type="password" name="password" placeholder="password"></p>
    <input type="submit" name="submit">
</form>
    
    </div>


</body>
</html>

