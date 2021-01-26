<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'amount', 'pic','num'];
    protected $guarded = ['id'];
    public $timestamps = false;
    public function fetchAll(){
        $products = $this->all()->toJson();
        
        return $products;
        }
}
