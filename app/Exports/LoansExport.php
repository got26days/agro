<?php

namespace App\Exports;

use App\Loan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LoansExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Loan::all();
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
            'Регоин',
            'Сумма кредита',
            'Нужен расчет от АгроДохода',
            'Организационная форма',
            'Дата создания юридического лица',
            'Годовой баланс',
            'Кредитная история',
            'Залоги под кредит',
            'Желаемые сроки для погашения кредита',
            'Цель привлечения средств',
            'Расчет доходности на текущий момент',
            'Расчет доходности после получения кредита',
            'Сейчас бухгалтерию ведет',
            'Дата изменения',
            'Дата создания'
        ];
    }
}
