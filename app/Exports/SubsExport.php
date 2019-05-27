<?php

namespace App\Exports;

use App\Sub;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SubsExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sub::all();
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
            'Организационная форма',
            'Тип хозяйства',
            'Сейчас бухгалтерию ведет',
            'Получение субсидий ранее',
            'Размер понесенных затрат к возмещению',
            'Нужен расчет от АгроДохода',
            'Обоснование затрат к возмещению',
            'Задолженность по налогам',
            'Процедура банкротства',
            'Дата изменения',
            'Дата создания'
        ];
    }
}
