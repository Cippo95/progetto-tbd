<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
    public function genres()
    {
        return $this->belongsTo(Genre::class);
    }
}
