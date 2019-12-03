<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>{{ $sub->mainh1 }}</h3>
    @if($sub->newsub)
    <h2>РСЯ</h2>
    @endif
    <p>Рейтинг клиента: {{  $sub->rating }}</p>
    <p>Шансы на получение денег: {{  $sub->chance }}</p>
    <p>Источник заявки: {{  $sub->source }}</p>
    <p>Имя и фамилия: {{  $sub->name }}</p>
    <p>Телефон: {{  $sub->phone }}</p>
    <p>Электронная почта: {{  $sub->email }}</p>
    <p>Должность: {{  $sub->position }}</p>
    <p>Регион: {{  $sub->region }}</p>
    <p>Организационная форма: {{  $sub->form }}</p>
    <p>Тип хозяйства: {{  $sub->type }}</p>
    <p>Сейчас бухгалтерию ведет: {{  $sub->buhgalrer }}</p>
    <p>Получение субсидий ранее: {{  $sub->geter }}</p>
    <p>Размер понесенных затрат к возмещению: {{  $sub->summ }}</p>
    <p>Нужен расчет от АгроДохода: {{  $sub->need }}</p>
    <p>Обоснование затрат к возмещению: {{  $sub->answer }}</p>
    <p>Задолженность по налогам: {{  $sub->dolg }}</p>
    <p>Процедура банкротства: {{  $sub->proc }}</p>

</body>
</html>