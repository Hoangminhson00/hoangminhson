<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "tbworker";
    protected $primaryKey ='id';
    public $incrementting = false;
    protected $keyType = 'string';
    
    public function hasOrderDetail(){
        return $this->hasMany(OrderDetailModel::class,'id','name');
    }
}
