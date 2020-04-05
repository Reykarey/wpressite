<?php
include "components/head.php";
?>
<main>
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="/book/store">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
</main>
<?php
include "components/footer.php";
