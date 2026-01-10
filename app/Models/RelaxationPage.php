<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelaxationPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'youtube_url',
        'title',
        'subtitle',
        'description',
        'quote',
        'benefit_1',
        'benefit_2',
        'benefit_3',
    ];
}
