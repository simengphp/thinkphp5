<?php
    /**
     * Created by PhpStorm.
     * User: simengphp
     * Date: 2018/9/7
     * Time: 9:53
     */

namespace app\api\controller;

use app\lib\exception\SignException;
use think\Controller;
use think\Request;

class BaseController extends Controller
{
    public function _initialize()
    {
        $this->checkSignAuth();
    }

    /**验证是否是正常的请求*/
    private function checkSignAuth()
    {
        $headers = Request::instance()->header();
        if (empty($headers['sign'])) {
            throw new SignException();
        }
    }
}
