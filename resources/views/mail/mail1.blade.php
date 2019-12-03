<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h3>{{ $loan->mainh1 }}</h3>

@if($loan->newsub)
<h2>РСЯ</h2>
@endif

<p>Рейтинг клиента: {{  $loan->rating }}</p>
<p>Шансы на получение денег: {{ $loan->chance }}</p>
<p>Источник заявки: {{ $loan->source }}</p>
<p>Имя и фамилия: {{ $loan->name }}</p>
<p>Телефон: {{ $loan->phone }}</p>
<p>Электронная почта: {{ $loan->email }}</p>
<p>Регион: {{ $loan->region }}</p>
<p>Сумма кредита: {{ $loan->summ  }}</p>
<p>Нужен расчет от АгроДохода: {{ $loan->needprice }}</p>
<p>Организационная форма: {{ $loan->orgform }}</p>
<p>Дата создания юридического лица: {{ $loan->dateur }}</p>
<p>Годовой баланс: {{ $loan->yearbalance }}</p>
<p>Кредитная история: {{ $loan->history }}</p>
<p>Залоги под кредит: {{ $loan->credit }}</p>
<p>Желаемые сроки для погашения кредита: {{ $loan->term }}</p>
<p>Цель привлечения средств: {{ $loan->target }}</p>
<p>Расчет доходности на текущий момент: {{ $loan->moment }}</p>
<p>Расчет доходности после получения кредита: {{ $loan->payment }}</p>
<p>Сейчас бухгалтерию ведет: {{ $loan->accounting }}</p>

</body>
</html>