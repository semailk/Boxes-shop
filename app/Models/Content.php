<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Content
 * @package App\Models
 * @property string $name
 * @property string $key
 * @property string $schema
 * @property string $content
 */
class Content extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'name',
        'key',
        'schema',
        'content',
    ];

    protected $translatable = [
        'content',
    ];

    protected $casts = [
//        'schema' => 'array',
    ];
}
