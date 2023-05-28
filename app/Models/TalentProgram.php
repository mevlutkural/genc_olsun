<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentProgram extends Model
{
    use HasFactory;

    protected $primaryKey = 'talent_program_id';
    protected $fillable = [
        'title',
        'short_description',
        'description',
        'image_url',
        'is_active',
    ];
}