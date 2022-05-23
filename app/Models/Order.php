<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const SIZE_SELECT = [
        '1' => 'Small',
        '2' => 'Medium',
        '3' => 'Large',
        '4' => 'X Large',
    ];

    public const STATUS_SELECT = [
        '0' => 'Pending',
        '1' => 'Processing',
        '2' => 'Completed',
        '3' => 'Delivered',
        '4' => 'Cancelled',
    ];

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'product_id',
        'size',
        'quantity',
        'name',
        'email',
        'phone_number',
        'shipping_address',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
