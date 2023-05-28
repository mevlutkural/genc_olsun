<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoungUniversity extends Model
{
    use HasFactory;

    protected $primaryKey = 'young_university_id';
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'image_url',
        'is_active',
    ];
}