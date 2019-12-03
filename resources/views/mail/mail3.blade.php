<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>{{ $finan->mainh1 }}</h3>
    @if($finan->newsub)
    <h2>РСЯ</h2>
    @endif
    <p>Рейтинг клиента: {{  $finan->rating }}</p>
    <p>Шансы на получение денег: {{  $finan->chance }}</p>
    <p>Источник заявки: {{  $finan->source }}</p>
    <p>Имя и фамилия: {{  $finan->name }}</p>
    <p>Телефон: {{  $finan->phone }}</p>
    <p>Электронная почта: {{  $finan->email }}</p>
    <p>Должность: {{  $finan->position }}</p>
    <p>Правовая форма собственности: {{  $finan->form }}</p>
    <p>Сумма проекта: {{  $finan->summ }}</p>
    <p>Стадия проекта: {{  $finan->studia }}</p>
    <p>Бухгалтерский баланс: {{  $finan->balance }}</p>
    <p>Кредитная история: {{  $finan->history }}</p>
    <p>Регион ведения деятельности: {{  $finan->region }}</p>
    <p>Срок выплаты кредита: {{  $finan->srok }}</p>
    <p>Финансовая модель: {{  $finan->finance }}</p>
    <p>Залоги под финансирование: {{  $finan->zalog }}</p>
    <p>Срок окупаемости проекта: {{  $finan->secondsrok }}</p>
    <p>Презентация: {{  $finan->present }}</p>
    <p>От суммы проекта имеются собственные средств: {{  $finan->sredstva }}</p>

</body>
</html>