<?php

// получаем данные с элементов формы

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// обрабатываем полученные данные

$name = htmlspecialchars($name); // преобразование символов в сущьности (мненоники)
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

$name = urldecode($name); // декодирование URL
$email = urldecode($email);
$message = urldecode($message);

$name = trim($name); // удаление пробельных символов с обоих сторон 
$email = trim($email);
$message = trim($message);

// отправляем данные на почту

if(mail("slava.maskaev@yandex.ru",
"Новое письмо с сайта",
"Имя: ".$name."\n".
"Email: ".$email."\n".
"Сообщение: ".$message."\n".
"From: no-reply@mydomain.ru \r\n")

) {
    echo ('Письмо успешно отправлено!');
}

else {
    echo ('Есть ошибки, проверьте данные...');
}

?>