<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Attribute extends Model
{
    use HasFactory, CrudTrait;

    use NodeTrait, HasTranslations {
        HasTranslations::create insteadof NodeTrait;
    }

    protected $fillable = [
        'filter_id',
        'title',
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
    public function filter(): BelongsTo
    {
        return $this->belongsTo(Filter::class);
    }

    /**
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'attribute_product');
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
