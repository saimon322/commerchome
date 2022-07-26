<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    
    /**
     * @var string[]
     */
    protected $casts = [
        'extras' => 'array',
    ];
    
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'slug',
        'extras',
    ];
}
