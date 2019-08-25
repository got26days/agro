<?php
if (isset($_POST['title'])) {$title = $_POST['title'];} 
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}   
if (isset($_POST['email'])) {$email = $_POST['email'];}   
if (isset($_POST['text'])) {$text = $_POST['text'];}   

  
$address  = 'test@gmail.com';
$mes = "Форма: $title\nИмя: $name\nТелефон: $tel\nEmail: $email\nТекст: $text";   
$sub='Заявка с сайта AnnexPro'; 
$email='annex-pro@info.ru'; 
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");  
?> 