<?php

{



 $mail="levakiril@yandex.ru, urban_stroy@mail.ru"; // e-mail куда уйдет письмо

  $title="Заявка с сайта с сайта ".$_SERVER["SERVER_NAME"]; // заголовок(тема) письма

  $phone = $_POST['user_phone'];

  $floor = $_POST['floor'];

  $distance = $_POST['distance'];

  $square = $_POST['square'];

  $season = $_POST['season']; 

  $mess="<b>Пользователь прошел тест, его телефон </b> $phone<br>";  

  $mess.="<b>Ему (ей) нужен дом, этажность:</b> $floor<br>";

  $mess.="<b>Удаленность от Москвы:</b> $distance<br>";

  $mess.="<b>Площадь:</b> $square<br>";

  $mess.="<b>Начало строительства:</b> $season<br>";  

  $headers="MIME-Version: 1.0\r\n";

  $headers.="Content-type: text/html; charset=utf-8\r\n"; //кодировка

  $headers.="From: admin@".$_SERVER["SERVER_NAME"]; // откуда письмо (необязательнакя строка)

  mail($mail, $title, $mess, $headers); // отправляем



  // выводим уведомление и перезагружаем страничку

print"

<script language='Javascript' type='text/javascript'>

<!--



function reload()

{location = \"/thanks.html\"}; 

setTimeout('reload()',0);

-->

</script>";

}

?>