<?php

namespace App\Models\Content;

use App\Models\Content\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'content'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
