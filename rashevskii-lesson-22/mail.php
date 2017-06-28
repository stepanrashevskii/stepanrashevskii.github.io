<?php
	//Принимаем постовые данные
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$whatever=$_POST['whatever'];
	//Тут указываем на какой ящик посылать письмо
	$to = "rashewskii@yandex.ru";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Сообщение с сайта";
	// Сообщение письма
	$message = "
	Имя пользователя: ".htmlspecialchars($name)."<br />
	Email: ".htmlspecialchars($email)."<br />
	Сообщение: ".htmlspecialchars($message)."<br />
	Форма: ".htmlspecialchars($whatever);
	// Отправляем письмо при помощи функции mail();
	$headers = "From: rashevskii.sl <mail@srashevskii.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	exit();
?>