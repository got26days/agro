<?php

namespace App\Exports;

use App\Download;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DownloadsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Download::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'Заголовок seo 1',
            'Заголовок seo 2',
            'Текст seo',
            'заголовок 1',
            'заголовок 2',
            'текст',
            'Отображаемая ссылка',
            'Дата создания',
            'Дата изменения'
        ];
    }
}
