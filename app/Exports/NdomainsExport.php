<?php

namespace App\Exports;

use App\Ndomain;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class NdomainsExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $downloads = [];

        $old_downs = Ndomain::orderBy('id', 'asc')->get();

        foreach($old_downs as $download){

            $down = [
                'request' => $download['form'],
                'title' => $download['title'],
                'slug' => 'http://' . env('APP_THIRD_DOMAIN') . '/' . $download["slug"],
            ];

            array_push($downloads, $down);
        }
        $downloads = collect($downloads);

        return $downloads;
    }

    public function headings(): array
    {
        return [
            'Запрос',
            'Заголовок',
            'Ссылка',
        ];
    }
}
