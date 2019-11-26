

      <!doctype html>
      <html>
      <head>
          <meta charset="UTF-8">
          <title>Document</title>
          <link rel="stylesheet" type="text/css" href="../main.css">
      </head>
      <body>
      <div>
          <h1>update login</h1>
          <form   action="instrukcia/update.php"  enctype="multipart/form-data" method="post">
              <p><input type="text" name="login" placeholder="login"></p>
              <p><input type="text" name="new_login" placeholder="new login"></p>
              <p><input type="text" name="new_login2" placeholder="repeat new login"></p>
              <input type="submit" name="login">
          </form>

      </div>
      <div class="home">
          <h1>Home Ավելացնել էջի նկարագրություն</h1>
          <form action="instrukcia/admin.php" method="POST" enctype="multipart/form-data">
              <p class="icona">նկար<label><input type="file" name="icona"></label></p>
              <p><label><input type="text" name="name_page" placeholder="Name page"></label></p>
              <p><label><input type="text" name="page_info" placeholder="information for page"></label></p>
              <input type="reset">
              <input type="submit">
          </form>
      </div>
      <div class="lessons">
          <h1>lessons Ավելացնել ծրագրավորման առարկաներ</h1>
          <form action="instrukcia/lessson_setings.php" method="POST" enctype="multipart/form-data">
              <p>նկար<label><input type="file" name="photo_lesson"></label></p>
              <p><label><input type="text" name="name_lesson" placeholder="Name Lesson"></label></p>
              <p><label>Դասի վիդեոների էջը <input type="file" name="link_page"></label></p>
              <input type="reset">
              <input type="submit">
          </form>

      </div>
      </div>
      <div class="lessons">
          <h1>Blog Ավելացնել նորություններ</h1>
          <form action="instrukcia/news.php" method="POST" enctype="multipart/form-data">
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
          <form action="instrukcia/php7.php" method="POST" enctype="multipart/form-data">
              <p><label>Վիդեո<input type="file" name="video_name"></label></p>
              <p><label>դասի անունը<input type="text" name="name_lesson" placeholder="Name lesson"></label></p>
              <input type="reset">
              <input type="submit">
          </form>

      </div>

      </body>
      </html>

