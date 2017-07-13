<?php
	//Принимаем постовые данные
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	//Тут указываем на какой ящик посылать письмо
	$to = "rashewskii@yandex.ru", "rashewskii@gmail.com";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Сообщение с сайта";
	// Сообщение письма
	$message = "
	Имя пользователя: ".htmlspecialchars($name)."<br />
	email: ".htmlspecialchars($email)."<br />
	Сообщение: ".htmlspecialchars($message);
	// Отправляем письмо при помощи функции mail();
	$headers = "From: rashevskii.sl <mail@srashevskii.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	mail ($to, $subject, $message, $headers);
	echo "Письмо отправлено";
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	exit();
?>