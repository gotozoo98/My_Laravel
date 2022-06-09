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

    // 每一筆商品資料

    public function imgs(){

        // 可以有很多張商品圖片
        // hasOne / hasMany 格式 (對照的model::class, '對方的欄位', '自己的欄位')
        return $this->hasMany(Product_img::class, 'product_id','id'); //因為是hasMany 所以使用的時候會輸出陣列
    }

    public function shoppingCart(){
        // 可以存在於很多個購物明細中
        return $this->hasMany(ShoppingCart::class, 'product_id','id');
    }


}
