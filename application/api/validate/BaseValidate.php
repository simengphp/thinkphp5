<?php
    /**
     * Created by PhpStorm.
     * User: Administrator
     * Date: 2018/8/30
     * Time: 15:43
     */

namespace app\api\validate;

use app\lib\exception\BaseValidateException;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck()
    {
        $allData = Request::instance()->param();
        if ($this->batch()->check($allData) != true) {
            //dump($this->error);
            throw new BaseValidateException([
                'msg'=>is_array($this->error)? implode(';', $this->error) : $this->error
            ]);
        }
        return true;
    }
}
