<?php
namespace app\admin\controller;
use think\Db;
/**
 * Created by PhpStorm.
 * User: syq
 * Date: 2018/11/5
 * Time: 18:18
 */
class Index
{
     public function db()
     {
        $result = Db::execute('insert into user (name,password) VALUES ("syq456",123)');
        dump($result);
     }

}