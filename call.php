<?php
{
  $mail="repvol2015@gmail.com, smirenina@rambler.ru"; // e-mail куда уйдет письмо
  $title="Заявка с сайта Град Строй ".$_SERVER["SERVER_NAME"]; // заголовок(тема) письма
  $purpose=$_POST["purpose"];
  $phone=$_POST["user_phone"]; 
  $mess="<b>Пользователь оставил заявку, его (ее) телефон:</b> $phone<br>";
  $mess.="<b>Желает получить:</b> $purpose<br>";
  
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