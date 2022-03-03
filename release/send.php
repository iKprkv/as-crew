<?php
// Файлы phpmailer
require 'phpmailer/phpmailer.php';
require 'phpmailer/smtp.php';
require 'phpmailer/exception.php';


// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$file = $_FILES['myfile'];
$service = '';
if(isset($_POST['service'])) {
   foreach($_POST['service'] as $area) {
      $service .= $area . "; ";
   }
}
else {
  $service = 'not chosen';
}
// проверяем
// if ($name == null) {
//   // code...
// }

// Формирование самого письма
$title = "New request for a project to A.S.Crew";
$body = "
<h2>New request for a project</h2>
<b>Name:</b> $name<br>
<b>Mail:</b> $email<br><br>
<b>Services:</b> $service<br><br>
<b>About my project:</b><br>$text
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    //$mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.yandex.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'ikopryakov@yandex.ru'; // Логин на почте
    $mail->Password   = 'witbxadocoaxelii'; // Пароль на почте
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->setFrom('hey@as-crew.com', 'A.S.Crew Request Form'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('ikopryakov@hotmail.com');
    $mail->addAddress('hey@as-crew.com'); // Ещё один, если нужен

    // Прикрипление файлов к письму
if (!empty($file['name'][0])) {
    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
        $filename = $file['name'][$ct];
        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
            $rfile[] = "Файл $filename прикреплён";
        } else {
            $rfile[] = "Не удалось прикрепить файл $filename";
        }
    }
}
else {
  $rfile[] = null;
}
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";}
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
