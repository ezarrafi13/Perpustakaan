<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
    ];

    public function Book()
    {
        return $this->hasMany(Book::class);
    }
}
