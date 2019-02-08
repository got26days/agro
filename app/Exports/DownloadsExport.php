<?php

namespace App\Exports;

use App\Domain;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DownloadsExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $downloads = [];

        $old_downs = Domain::latest()->get();

        foreach($old_downs as $download){

            $down = [
                'request' => $download['request'],
                'title' => $download['title'],
                'slug' => 'http://' . env('APP_SUB_DOMAIN') . '/' . $download["slug"],
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
