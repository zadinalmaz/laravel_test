<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ["title", "author", "author_name"];

    public function authors() {
        return $this->belongsTo(Author::class, 'author', 'name');
    }
}
