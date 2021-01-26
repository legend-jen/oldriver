<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User as User;
use Illuminate\Support\Facades\Redis as Redis;
class UserController extends Controller {
// use User;
private $model;
/**
* Create a new controller instance.
*
* @return void
*/
public function __construct()
{
$this->model = new User();
}
/**
* Show 
*
* @return Response
*/
public function showUser($id)
{
$redis = Redis::connection('default');
$cacheUsers = $redis->get('userList');
if( $cacheUsers ){
$users = $cacheUsers;
print_r($users);
Log::info('獲取使用者列表，通過redis');
}else{
$users = $this->model->fetchAll();
$redis->set('userList', $users);
print_r($users);
Log::info('獲取使用者列表，通過msyql');
}
}
}