<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $fillable = [
        'name',
        'price',
        'amount',
        'img',
        'size',
        'sector',
        'user_id',
        'product_id',
    ];
    public function products(){
        return $this->hasMany(Product::class,'product_id','id');
    }
    public function User()
    {
        return $this->hasOne(User::class);
    }
}
