<?php
/*
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name', 'price', 'units', 'description', 'image'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
*/


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Product extends Model
{
    protected $fillable = [
                            'title',
                            'parent_item_id',
                            'summary',
                            'description',
                            'cat_id',
                            'additional_cats_ids',
                            'price',
                            'brand_id',
                            'discount',
                            'status',
                            'photo',
                            'default_img',
                            'img_gallery_id',
                            'size',
                            'stock',
                            'units',
                            'is_featured',
                            'condition'
    ];



    public function cat_info()
    {
        //return $this->hasOne('App\Models\Category', 'id', 'cat_id');
        return $this->hasOne(Category::class, 'id', 'cat_id');
    }
    public function sub_cat_info()
    {
        //return $this->hasOne('App\Models\Category', 'id', 'child_cat_id');
        return $this->hasOne(Category::class, 'id', 'child_cat_id');
    }
    public static function getAllProduct()
    {
        return Product::with(['cat_info', 'sub_cat_info'])->orderBy('id', 'desc')->paginate(10);
    }
    public function rel_prods()
    {
        //return $this->hasMany('App\Models\Product', 'cat_id', 'cat_id')->where('status', 'active')->orderBy('id', 'DESC')->limit(8);
        return $this->hasMany(Product::class, 'cat_id', 'cat_id')->where('status', 'active')->orderBy('id', 'DESC')->limit(8);

    }
    public function getReview()
    {
        //return $this->hasMany('App\Models\ProductReview', 'product_id', 'id')->with('user_info')->where('status', 'active')->orderBy('id', 'DESC');
        return $this->hasMany(ProductReview::class, 'product_id', 'id')->with('user_info')->where('status', 'active')->orderBy('id', 'DESC');

    }
    public static function getProductBySlug($slug)
    {
        return Product::with(['cat_info', 'rel_prods', 'getReview'])->where('slug', $slug)->first();
    }
    public static function countActiveProduct()
    {
        /*
        $data = Product::where('status', 'active')->count();
        if ($data) {
            return $data;
        }
        return 0;
        */
        return Product::where('status', 'active')->count();
    }

    public function carts()
    {
        return $this->hasMany(Cart::class)->whereNotNull('order_id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class)->whereNotNull('cart_id');
    }
}
