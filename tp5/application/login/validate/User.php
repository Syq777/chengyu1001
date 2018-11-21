<?php
/**
 * Created by PhpStorm.
 * User: pan 潘宏远
 * Date: 2018/8/17
 * Time: 15:31
 * email: i@panhongyuan.com
 */

namespace app\login\validate;


use think\Validate;

class User extends Validate
{
    protected $rule = [
        'name|用户名' => 'require|min:3|unique:',
        'password|密码' => 'require|min:6'

    ];

    protected $message = [
        'name.require' => '用户名不能为空',
        'name.min' => '用户名长度不能小于3',
        'password.require' => '密码不能为空',

    ];
}