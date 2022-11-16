<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'content',
        'excerpt',
        'category_id',
        'status',
        'author_id',
        'publish_date',
        'expired_date',
        'created_by',
        'updated_by',
        'images',
    ];

    public function categories(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
