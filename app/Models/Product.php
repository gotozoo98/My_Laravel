<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $img_path
 * @property string $product_name
 * @property string $product_detail
 * @property integer $product_qty
 * @property integer $product_price
 * @property mixed $created_at
 * @property mixed $updated_at
 */
class Product extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['img_path', 'product_name', 'product_detail', 'product_qty', 'product_price', 'created_at', 'updated_at'];

    public function imgs(){
        return $this->hasMany(Product_img::class,'product_id','id');
    }
}
