<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2018/8/30
     * Time: 15:51
     */

namespace app\api\validate;

class IdMustValidate extends BaseValidate
{
    /**在Validate这个类里面已经定义了这个属性，我们直接重写*/
    protected $rule = [
        'id' => 'require|idMust',
    ];

    /**上面和require一起定义的一个函数*/
    public function idMust($value, $rule = '', $data = '', $filed = '')
    {
        if (is_numeric($value) && $value) {
            return true;
        } else {
            return $filed.'格式错误';
        }
    }
}
