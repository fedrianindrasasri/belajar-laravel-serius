<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Schema::disableForeignKeyConstraints();
        // Student::truncate();
        // Schema::enableForeignKeyConstraints();
        // $dataMurid = [
        //     [
        //         'name' => 'Fedrian Indra Sasri',
        //         'gender' => 'L',
        //         'nim' => '1655301091',
        //         'class_id' => 1,
        //     ],
        //     [
        //         'name' => 'Indra Sasri',
        //         'gender' => 'L',
        //         'nim' => '1655301092',
        //         'class_id' => 2,
        //     ]
        // ];
        // foreach ($dataMurid as $value) {
        //     Student::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nim' => $value['nim'], 
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        Student::factory()->count(20)->create();
    }
}
