<?php
require_once"html/header.html";
?>
    <main>
        <form class="form" action="email/email.php" enctype="multipart/form-data">
            <p><input type="text" name="name" class="feedback-input"  placeholder="Name" id="name"></p>
            <p><input type="email" name="email" class="feedback-input"  placeholder="Email" id="email"></p>
            <p><textarea name="text" id="coment" class="feedback-input" cols="30" rows="10" placeholder="Message"></textarea></p>
            <input type="submit" value="Submit" class="button-submit" >
            <div class="ease"></div>
        </form>


    </main>




<?php




require_once "html/footer.html";