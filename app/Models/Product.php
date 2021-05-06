<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;

/**
 * Class Product
 * @package App\Models
 * @property string $slug
 * @property float $regular_price
 * @property float $sale_percentage
 * @property float $adjusted_price
 * @property integer $stock_status
 * @property integer $stock_quantity
 * @property string $sku
 * @property string $xls_tag
 */
class Product extends Model
{
    use HasFactory, HasTranslations, CrudTrait;

    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'slug',
        'annotation',
        'description',
        'tags',
        'regular_price',
        'sale_percentage',
        'adjusted_price',
        'stock_status',
        'stock_quantity',
        'gallery',
        'sku',
        'xls_tag',
        'mete_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'tags' => 'array',
        'gallery' => 'array',
    ];

    public $translatable = [
        'name',
        'annotation',
        'description',
        'mete_title',
        'meta_description',
        'meta_keywords',
    ];


    /**
     * @return BelongsTo
     */
    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsToMany
     */
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('quantity', 'price');
    }

    /**
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * @return BelongsToMany
     */
    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class);
    }

    public function setGalleryAttribute($value)
    {
        $attribute_name = "gallery";
        $disk = "public";
        $destination_path = "";
        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);

        // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }

    public function uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path)
    {
        $request = \Request::instance();
        $attribute_value = (array)$this->{$attribute_name};
        $files_to_clear = $request->get('clear_' . ($attribute_name));
        if ($files_to_clear) {
            $attribute_value = (array)$this->{$attribute_name};
            foreach ($files_to_clear as $key => $filename) {
                \Storage::disk($disk)->delete($filename);
                $attribute_value = array_where($attribute_value, function ($value, $key) use ($filename) {
                    return $value != $filename;
                });
            }
        }
        if ($request->hasFile($attribute_name)) {
            foreach ($request->file($attribute_name) as $file) {
                if ($file->isValid()) {
                    // 1. Generate a new file name
                    $new_file_name = md5($file->getClientOriginalName()) . '.' . 'jpg';
                    $file_path = $file->storeAs('', $new_file_name, $disk);
                    // 3. Add the public path to the database
                    $attribute_value[] = $file_path;
                }
            }
        }
        $this->attributes[$attribute_name] = json_encode($attribute_value);
    }
}
