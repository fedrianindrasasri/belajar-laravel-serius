<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Extracurriculer extends Model
{
    use HasFactory;

    public function student(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_extracurriculers', 'extracurriculer_id', 'student_id');
    }
}
