<?php
/**
 * Created by PhpStorm.
 * User: simengphp
 * Date: 2018/9/6
 * Time: 14:57
 */

namespace app\api\validate;

class TokenValidate extends BaseValidate
{
    protected $rule = [
        'code'  =>'require|isEmpty'
    ];

    protected $message = [
        'code'  =>'没有code是不能获取token'
    ];
}
