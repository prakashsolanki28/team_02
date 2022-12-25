<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cources;

class Syllabus extends Model
{
    use HasFactory;
    public function course()
    {
        return $this->belongsTo(Cources::class,'cource_id');
    }
}
