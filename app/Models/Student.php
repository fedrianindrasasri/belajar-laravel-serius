<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // bila nama table sudah sesuai dengan best practice laravel maka dibawah ini bisa tidak dibuat
    protected $table = 'students';

    // public $incrementing = false; => untuk mematikan auto increment
    //public $keyType = 'string'; => Jenis Primary Key

    protected $fillable = ['name', 'gender', 'nim', 'class_id'];
}
