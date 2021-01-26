<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item as Item;
class ItemController extends Controller {
private $model;
public function __construct()
{
$this->model = new Item();
}
public function showItem($id)
{
$users = $this->model->fetchAll();
echo json_encode($users);
Log::info('獲取使用者列表，通過msyql');
}
}