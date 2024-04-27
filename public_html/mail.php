<?php 

$name = $_POST['name'];
$phone = $_POST['phone'];

//$to  = "<drpopovcev@yandex.ru>, "; 
$to  = "<Maksim_Popovcev@mail.ru>, "; 



$subject = "drpopovcev"; 

$message = 'Имя: '.$name.'<br>Телефон: '.$phone;

$headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
$headers .= "From: Заявка с сайта <drpopovcev@mail.com>\r\n"; 

if (mail($to, $subject, $message, $headers)) {
    header("Location: https://drpopovcev.ru/thanks");
    exit();
} else {
    echo 'Произошла ошибка';
}


?>