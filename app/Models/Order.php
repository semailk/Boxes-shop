<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Order
 * @package App\Models
 * @property string $uuid
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $comment
 * @property integer $status
 * @property string $track_code
 * @property string $paid_amount
 */
class Order extends Model
{
    use HasFactory, CrudTrait;

    protected $fillable = [
        'uuid',
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'country',
        'city',
        'payment_type',
        'delivery_option',
        'address',
        'comment',
        'status',
        'track_code',
        'payment_time',
        'paid_amount',
        'payment_information'
    ];

    protected $dates = [
        'payment_time',
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot(
            'price', 'quantity'
        );
    }
}
