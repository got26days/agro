<?php

namespace App\Exports;

use App\Finan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class FinansExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Finan::all();
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
            'Правовая форма собственности',
            'Сумма проекта',
            'Стадия проекта',
            'Бухгалтерский баланс',
            'Кредитная история',
            'Регион ведения деятельности',
            'Срок выплаты кредита',
            'Финансовая модель',
            'Залоги под финансирование',
            'Срок окупаемости проекта',
            'Презентация',
            'От суммы проекта имеются собственные средств',
            'Дата изменения',
            'Дата создания'
        ];
    }
}
