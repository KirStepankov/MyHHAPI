<?php

namespace MyHHAPI\Entity\Helpers;

use Exception;

class Helper
{
    public static function toCamelCase(string $str): string
    {
        return str_replace('_', '', ucwords($str, ' /_'));
    }

    public static function returnResponse($dataOrExcep): array
    {
        return $dataOrExcep instanceof Exception
            ? ['error' => true, 'data' => $dataOrExcep]
            : ['error' => false, 'data' => $dataOrExcep];
    }
}