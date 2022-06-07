<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentsImport implements ToCollection,WithStartRow
{

    private $year;

    public function __construct($year)
    {
        $this->year =$year;

    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $students=[];

        foreach ($collection as $row){

            $students[]=[
                "academic_year"=>$this->year,
                "index_number"=>$row[1],
                "name"=>$row[2],
                "gender"=>$row[3],
                "aggregate"=>$row[4],
                "programme"=>$row[5],
                "track"=>$row[6],
                "status"=>$row[7],
                "uuid"=>Str::uuid()
            ];


        }

        Student::insert($students);


    }


    public function startRow(): int
    {
        return 3;
    }
}
