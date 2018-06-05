<?php
/**
 * Created by PhpStorm.
 * User: neverbehave
 * Date: 2018/6/5
 * Time: 上午11:36
 */

namespace Utils;


class Formatter
{
    /**
     * Format Response and exit
     *
     * @param null $data
     * @param int $status
     * @param string $message
     */
    public static function jsonFormat($data = NULL, $status = 200, $message = 'success')
    {
        echo json_encode([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ]);
        exit();
    }
}