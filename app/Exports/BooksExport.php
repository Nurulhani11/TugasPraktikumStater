<?php

namespace App\Exports;

use App\Modals\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class BookExport implements FromCollection
{
    public function collection()
    {
        return Book::all();
    }
}

class BooksExport implements FromArray, WithHeadings, ShouldAutoSize
{
    public function array(): array
    {
        return Book::getDataBooks();
    }

    public function headings(): array
    {
        return [
            'No',
            'Judul',
            'Penulis',
            'Tahun',
            'Penerbit'
        ];
    }
}

