<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Filter
 * @package App\Models
 * @property integer $category_id
 * @property string $title
 */
class Filter extends Model
{
    use HasFactory, CrudTrait;

    use NodeTrait, HasTranslations {
        HasTranslations::create insteadof NodeTrait;
    }

    protected $fillable = [
        'title',
        'category_id',
        'lft',
        'rgt',
        'parent_id',
        'depth',
    ];

    public $translatable = [
        'title',
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return HasMany
     */
    public function attributes(): HasMany
    {
        return $this->hasMany(Attribute::class);
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
