<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @if($subd)
    <h3>Сообщение с сайта с пометкой {{ $subd }}</h3>
    @else
    <h3>Сообщение с сайта</h3>
    @endif
    
    @if($title)
        <p>Заголовок: {{  $title }}</p>
    @endif
    @if($name)
        <p>Имя: {{  $name }}</p>
    @endif
    @if($email)
        <p>Email: {{  $email }}</p>
    @endif
    @if($tel)
        <p>Телефон: {{  $tel }}</p>
    @endif
    @if($text)
        <p>Сообщение: {{  $text }}</p>
    @endif

</body>
</html>