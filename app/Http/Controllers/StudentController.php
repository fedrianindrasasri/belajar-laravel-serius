<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $dataStudent = Student::all();
        // return view('student', compact('dataStudent'));

        // ============>Query Builder<=============
        // $student = DB::table('students')->get();
        // DB::table('students')->insert(
        //     [
        //         'name' => 'Query Builder',
        //         'gender' => 'L',
        //         'nim' => '16553010',
        //         'class_id' => 1,
        //     ]
        // );
        // DB::table('students')->where('id', 22)->update(
        //     [
        //         'name' => 'Query Builder Update',
        //         'gender' => 'L',
        //         'nim' => '16553010',
        //         'class_id' => 3,
        //     ]
        // );
        // DB::table('students')->where('id', 22)->delete();

        // ============>Eloquent<=============
        // $student = Student::all();
        // Student::create(
        //     [
        //         'name' => 'Eloquent',
        //         'gender' => 'L',
        //         'nim' => '16553011',
        //         'class_id' => 2,
        //     ]
        // );
        // Student::findOrFail(23)->update([
        //     'name' => 'Eloquent Update',
        //     'gender' => 'L',
        //     'nim' => '16553011',
        //     'class_id' => 1,
        // ]);
        // Student::findOrFail(23)->delete();

        // dd($student);

        // // ====================>Data Collection<=========================
        // $nilai = [9, 6, 7, 5, 4, 6, 7,  6, 8, 9, 10];
        // // method collection average => nilai rata-rata
        // $nilaiRataRata = collect($nilai)->avg();

        // // method collection contains => cek apakah sebuah array memiliki nilai yang dicari
        // $cekNilai = collect($nilai)->contains(10);
        // $cekNilaiRemedial = collect($nilai)->contains(function ($value) {
        //     return $value < 6;
        // });

        // // method collection diff => mencari nilai yang berbeda yang tidak ada di array lainnya
        // $restaurantA = ['burger', 'siomay', 'pizza', 'spaghetti'];
        // $restaurantB = ['pizza', 'fried chicken', 'martabak', 'sayur asem'];
        // $mauMakanA = collect($restaurantA)->diff($restaurantB);
        // $mauMakanB = collect($restaurantB)->diff($restaurantA);

        // // method collection filter => 
        // $filters = collect($nilai)->filter(function ($value) {
        //     return $value > 7;
        // });

        // // method collection pluck => mengambil salah satu index array
        // $biodata = [
        //     ['name' => 'budi', 'umur' => 17],
        //     ['name' => 'ani', 'umur' => 16],
        //     ['name' => 'siti', 'umur' => 17],
        //     ['name' => 'rudi', 'umur' => 20],
        // ];
        // $pluckBiodata = collect($biodata)->pluck('name')->all();

        // // method collection map => mapping data
        // // $nilaiKaliDua = [];
        // // foreach ($nilai as $value) {
        // //     array_push($nilaiKaliDua, $value * 2);
        // // }
        // $nilaiKaliDua = collect($nilai)->map(function ($value) {
        //     return $value * 2;
        // })->all();

        // dd($nilaiKaliDua);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
