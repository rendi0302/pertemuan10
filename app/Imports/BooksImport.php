<?php

namespace App\Imports;

use App\book;
use Maatwebsite\Excel\Concerns\ToModel;

class BooksImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new BooksImport([
            'judul' => $row[0],
            'penulis' => $row[1],
            'tahun' => $row[2],
            'penerbit' => $row[3],
        ]);
    }
}
