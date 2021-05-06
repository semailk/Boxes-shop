<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Review
 * @package App\Models
 * @property string $name
 * @property string $email
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $rating
 * @property string $review
 */
class Review extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'name',
        'email',
        'user_id',
        'product_id',
        'rating',
        'review',
    ];

    /**
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
