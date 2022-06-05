<?php

namespace App\Models;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'content',
        'image',
        'user_id',
        'category_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Categorie::class, 'category_id', 'id'); //(nama kelas, foreign key, primary key package)
    }
    public function authors()
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); //(nama kelas, foreign key, primary key package)
    }
    // public function categories()
    // {
    //     return $this->belongsTo(Categorie::class, 'category_id', 'id');
    // }
}
