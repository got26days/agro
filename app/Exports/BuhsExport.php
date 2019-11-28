<?php

namespace App\Exports;

use App\Buh;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class BuhsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithChunkReading
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $downloads = [];

        $old_downs = Buh::orderBy('id', 'asc')->get();

        foreach($old_downs as $download){

            $down = [
                'request' => $download['form'],
                'title' => $download['title'],
                'slug' => 'http://buh.agrodohod.ru/' . $download["slug"],
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

    public function chunkSize(): int
    {
        return 1000;
    }
}
