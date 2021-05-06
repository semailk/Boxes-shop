<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscriber
 * @package App\Models
 * @property string $email
 */
class Subscriber extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'email',
    ];
}
