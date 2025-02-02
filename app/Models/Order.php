<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'product_id',
        'user_id',
        'quantity',
        'address',
        'sub_total',
        'delivery_charge',
        'status',
        'total_amount',
        'first_name',
        'last_name',
        'country',
        'country_id',
        'post_code',
        'additional_adress',
        'phone',
        'email',
        'payment_method',
        'delivery_method',
        'payment_status',
        'shipping_id',
        'coupon'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function cart_info(){
        //return $this->hasMany('App\Models\Cart','order_id','id');
        return $this->hasMany(Cart::class,'order_id','id');
    }

    public static function getAllOrder($id){
        return Order::with('cart_info')->find($id);
    }

    public static function countActiveOrder(){

        /*
        $data=Order::count();
        if($data){
            return $data;
        }
        return 0;
        */
        return Order::count();
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id');
    }

}
