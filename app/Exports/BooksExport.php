<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BooksExport implements FromCollection, FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Book::all();
    }

    public function array(): array
    {
        return Book::getDataBooks();
    }

    public function headings(): array
    {
        return [
            'id',           
            'title',        
            'author',       
            'year',      
            'publisher',    
            'city',         
            'quantity',     
            'cover',        
            'creat_at',     
            'update_at',    
            'bookshelf_id',  
        ];
    } 
}