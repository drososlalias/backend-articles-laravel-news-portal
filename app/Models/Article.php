<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
