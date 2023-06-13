<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portofolio extends Model
{
    use HasFactory;

    protected $table = 'portofolios';

    protected $fillable = [
        'title',
        'describe',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id');
    }
}
