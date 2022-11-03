<?php

namespace MyHHAPI\Contract;

use Exception;
use MyHHAPI\MyHHAPIAbstract;

interface MyHHAPIContract
{
    /**
     * @return array
     */
    public function getData():array;

    /**
     * @param array $fields
     * @return MyHHAPIAbstract|Exception
     */
    public function setQueryFields(array $fields): MyHHAPIAbstract|Exception;

    public function setToken(string $token): MyHHAPIAbstract;
    public function setUserAgent(string $userAgent): MyHHAPIAbstract;
}