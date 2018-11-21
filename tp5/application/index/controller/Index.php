<?php
namespace app\index\controller;
use \think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {

            return view('index1'/*,[
          'email' => '123435@gmail.com'
    ]*/);
//       return $this ->fetch('index',[
//           'email' => '123@qq.com'
//           ]);*/*/

//            dump(config('database'));
        /*$res = Db::connect();
        dump($res);*/
        //使用sql语句方式查询
     /*  $res = Db::query("select * from chengyu_1002 WHERE ID =?",[1]);
       dump($res);*/
    }
}
