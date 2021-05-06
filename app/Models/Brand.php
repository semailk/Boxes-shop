<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;

/**
 * Class Brand
 * @package App\Models
 */
class Brand extends Model
{
    use HasFactory, HasTranslations, CrudTrait;

    protected $fillable = [
        'name'
    ];

    public $translatable = [
        'name'
    ];

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
