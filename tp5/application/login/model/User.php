<?php
/**
 * Created by PhpStorm.
 * User: syq
 * Date: 2018/11/11
 * Time: 10:24
 */
namespace app\login\model;
use think\Model;

class User extends Model
{
    protected function setPasswordAttr($value)
    {
        return md5($value);
    }
}
