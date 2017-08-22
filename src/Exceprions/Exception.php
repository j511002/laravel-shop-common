<?php
/**
 * Created by PhpStorm.
 * User: coffeekizoku
 * Date: 2017/8/22
 * Time: 上午9:32
 */

namespace SimpleShop\Commons\Exceptions;


class Exception extends \RuntimeException
{
    /**
     * 状态码
     *
     * @var int
     */
    protected $statusCode = 500;

    /**
     * @param int $statusCode
     */
    public function setStatusCode(int $statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function returnResponse()
    {
        return response()->json([
            'code' => $this->code,
            'message' => $this->message,
        ], $this->statusCode);
    }
}