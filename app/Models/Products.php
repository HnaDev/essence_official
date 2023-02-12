<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name','price','sale_price','description','size_id','color_id','image','status','category_id','brand_id','origin','year','stock'];
    public $timestamps = false;

    public function getCategoryName()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function getBrandName()
    {
        return $this->belongsTo(Brands::class,'brand_id');
    }

    public function getTypeName()
    {
        return $this->belongsTo(Category_type::class,'type');
    }
    public function scopeSearch($query){
        $query = $query->where('name','like','%'.request()->keyword.'%');
        return $query;
    }
    public function imgs()
    {
        return $this ->hasMany(Product_images::class,'product_id');
    }
    public function attrs()
    {
        return $this->hasMany(product_attrs::class,'product_id');
    }

     public function getAtS($attr_id,$id_pro)
    {
        return $at = DB::table('product_attrs')->where('product_id',$id_pro)->where('attribute_size_id',$attr_id)->first();

    }
     public function getAtC($attr_id,$id_pro)
    {
        return $at = DB::table('product_attrs')->where('product_id',$id_pro)->where('attribute_color_id',$attr_id)->first();

    }
}


