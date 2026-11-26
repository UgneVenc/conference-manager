<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = [
        'title',
        'description',
        'conference_date',
        'address',
    ];

    protected function casts(): array
    {
        return [
            'conference_date' => 'date',
        ];
    }
}