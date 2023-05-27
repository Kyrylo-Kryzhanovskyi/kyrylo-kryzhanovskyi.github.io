<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Формируем текст сообщения
    $mailMessage = "Имя: $name\n";
    $mailMessage .= "Email: $email\n";
    $mailMessage .= "Телефон: $phone\n";
    $mailMessage .= "Сообщение: $message\n";

    // Укажите ваш адрес электронной почты
    $to = 'sprminion@gmail.com';
    $subject = 'Новая заявка с формы';

    // Отправка сообщения
    $headers = "From: $name <$email>";

    if (mail($to, $subject, $mailMessage, $headers)) {
        echo "Спасибо! Ваше сообщение отправлено.";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>
