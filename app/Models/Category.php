<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Class Category
 * @package App\Models
 * @property string $slug
 */
class Category extends Model
{
    use HasFactory, CrudTrait;

    use NodeTrait, HasTranslations {
        HasTranslations::create insteadof NodeTrait;
    }

    protected $fillable = [
        'name',
        'slug',
        'lft',
        'rgt',
        'parent_id',
        'depth',
    ];

    public $translatable = [
        'name',
    ];

    /**
     * @return HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function filters(): HasMany
    {
        return $this->hasMany(Filter::class);
    }

    public function getLftName()
    {
        return 'lft';
    }

    public function getRgtName()
    {
        return 'rgt';
    }

    public function getParentIdName()
    {
        return 'parent_id';
    }
}
