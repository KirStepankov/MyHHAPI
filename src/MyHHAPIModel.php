<?php

namespace MyHHAPI;

use MyHHAPI\Contract\MyHHAPIModelContract;

class MyHHAPIModel implements MyHHAPIModelContract
{
    /**
     * @param array $response
     * @return void
     */
    public function mapFields(array $response): void
    {
        foreach ($response as $key => $item) {
            $this->{$key} = $item;
        }
    }
}