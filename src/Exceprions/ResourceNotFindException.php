<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/7/27
 * Time: 上午11:34
 */

namespace SimpleShop\Commons\Exceptions;

use Throwable;

class ResourceNotFindException extends Exception
{
    public function __construct($message = "没有找到资源", $code = 0, Throwable $previous = null)
    {
        $this->setStatusCode(404);
        parent::__construct($message, $code, $previous);
    }
}