<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipPost extends Model
{
    use HasFactory;

    protected $primaryKey = 'scholarship_post_id';
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'image_url',
        'is_active',
    ];
}