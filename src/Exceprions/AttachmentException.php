<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/8/22
 * Time: 上午9:37
 */

namespace SimpleShop\Commons\Exceptions;

use Throwable;

class AttachmentException extends Exception
{
    public function __construct($message = "上传的文件有问题", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}