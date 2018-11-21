<?php
/**
 * Created by PhpStorm.
 * User: pan syq
 * Date: 2018/8/19
 * Time: 15:01
 */

namespace app\login\validate;

use think\Validate;


class Person extends Validate
{
    protected $rule = [
        'name|用户名' => 'require|min:3',
        'password|密码' => 'require|min:6'
    ];

    protected $message = [
        'name.require' => '用户名不能为空',
        'name.min' => '用户名长度不能小于3',
        'password.require' => '密码不能为空'
    ];
}