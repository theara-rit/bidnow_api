<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'created_by',
        'updated_by',
    ];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
