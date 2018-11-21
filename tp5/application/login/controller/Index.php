<?php
namespace app\login\controller;
use think\Controller;
use app\login\model\User;
use app\login\model\Person as PersonModel;
use app\login\validate\Person as PersonValidate;
/**
 * Created by PhpStorm.
 * User: syq
 * Date: 2018/11/10
 * Time: 9:24
 */
class Index extends Controller
{
    public function register()
    {
        return $this->fetch();
    }
    public function login()
    {
        return $this ->fetch();
    }
    public function wan_shan()
    {
        return $this->fetch();
    }
    public function check()
    {
        $data = input('post.');
        $user = new User();
        $result = $user->where('name', $data['name'])->find();
        if ($result) {
            if ($result['password'] === ($data['password'])) {
                session('name', $data['name']);
                    echo'登陆成功';
            } else {
                $this->error('密码错误');
            }
        } else {
            $this->error('用户名不存在');
            exit();
        }

    }
    public function add()
    {
        $data = input('post.');

        $val = new PersonValidate();
        if (!$val->check($data)) {
            $this->error($val->getError());
            exit();
        }

        $user = new PersonModel($data);
        $ret = $user->allowField(true)->save();
        if ($ret) {
            $this->success('恭喜您注册成功');
        } else {
            $this->error('用户注册失败');
        }
    }

}