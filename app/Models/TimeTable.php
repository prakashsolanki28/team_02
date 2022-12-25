<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeTable extends Model
{
    use HasFactory;
    public function timeTable()
    {
        return $this->belongsTo(Cources::class,'cource_id');
    }
}
