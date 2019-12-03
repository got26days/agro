<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>{{ $grant->mainh1 }}</h3>
    @if($grant->newsub)
    <h2>РСЯ</h2>
    @endif
    <p>Рейтинг клиента: {{  $grant->rating }}</p>
    <p>Шансы на получение денег: {{  $grant->chance }}</p>
    <p>Источник заявки: {{  $grant->source }}</p>
    <p>Имя и фамилия: {{  $grant->name }}</p>
    <p>Телефон: {{  $grant->phone }}</p>
    <p>Электронная почта: {{  $grant->email }}</p>
    <p>Должность: {{  $grant->position }}</p>
    <p>Регион: {{  $grant->region }}</p>
    <p>Статус: {{  $grant->status }}</p>
    <p>Сумма: {{  $grant->summ }}</p>
    <p>Наличие 10% от запрашиваемой суммы: {{  $grant->have }}</p>
    <p>Цель получения гранта: {{  $grant->target }}</p>
    <p>Тип хозяйства: {{  $grant->type }}</p>
    <p>Членство в кооперативе: {{  $grant->chlen }}</p>
    <p>Расчет доходности хозяйства на текущий момент: {{  $grant->term }}</p>
    <p>Расчет доходности после получения гранта: {{  $grant->raschet }}</p>

</body>
</html>