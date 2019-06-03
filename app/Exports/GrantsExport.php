<?php

namespace App\Exports;

use App\Grant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class GrantsExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Grant::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'Рейтинг клиента',
            'Шансы на получение денег',
            'Источник заявки',
            'Имя и фамилия',
            'Телефон',
            'Электронная почта',
            'Должность',
            'Регион',
            'Статус',
            'Сумма',
            'Наличие 10% от запрашиваемой суммы',
            'Цель получения гранта',
            'Тип хозяйства',
            'Членство в кооперативе',
            'Расчет доходности хозяйства на текущий момент',
            'Расчет доходности после получения гранта',
            'Дата изменения',
            'Дата создания'
        ];
    }
}
