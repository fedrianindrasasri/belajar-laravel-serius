<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classroom extends Model
{
    use HasFactory;
    protected $table = 'class';

    // cara membuat relasi 1 to many 
    public function student(): HasMany
    {
        return $this->hasMany(Student::class, 'class_id', 'id');
    }
}
