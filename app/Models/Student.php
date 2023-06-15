<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    // bila nama table sudah sesuai dengan best practice laravel maka dibawah ini bisa tidak dibuat
    protected $table = 'students';

    // public $incrementing = false; => untuk mematikan auto increment
    //public $keyType = 'string'; => Jenis Primary Key

    protected $fillable = ['name', 'gender', 'nim', 'class_id'];

    // membuat relasi untuk many to one
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class, 'class_id', 'id');
    }

    public function extracurriculer(): BelongsToMany
    {
        return $this->belongsToMany(Extracurriculer::class, 'student_extracurriculers', 'student_id', 'extracurriculer_id');
    }

   
}
