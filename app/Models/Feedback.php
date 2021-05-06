<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Feedback
 * @package App\Models
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 */
class Feedback extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
