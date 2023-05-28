<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentClub extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_club_id';
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'facebook',
        'instagram',
        'discord',
        'linkedin',
        'youtube',
        'whatsapp',
        'telegram',
        'telegram',
        'web_site',
        'is_active',
    ];
}