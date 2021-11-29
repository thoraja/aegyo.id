<?php

namespace App\Models\Content;

use App\Models\Content\Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
