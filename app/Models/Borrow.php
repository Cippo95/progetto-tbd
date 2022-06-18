<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function students()
    {
        return $this->belongsTo(Student::class);
    }
    public function books()
    {
        return $this->belongsTo(Books::class);
    }
}
