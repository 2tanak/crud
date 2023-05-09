<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'disk',
        'dir',
        'path',
        'size',
        'mime_type',
        'name',
		'original',
        'original_name',
        'description',
        'is_deleted',
		'large',
		'medium',
		'small',
		'extralarge',
		'user_id',
		'extension',
		'date',
		'size_2000'
    ];

    protected $casts = [
        'is_deleted' => 'boolean',
    ];
}
