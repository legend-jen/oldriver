<?php namespace App;
use Illuminate\Database\Eloquent\Model;
class Item extends Model {
protected $fillable = ['name', 'price'];
protected $guarded = ['id'];
/**
* The database table used by the model.
* default: tbl_items
* @var string
*/
// protected $table = 'tbl_items';
public function fetchAll(){
$items = $this->all()->toJson();
return $items;
}
}