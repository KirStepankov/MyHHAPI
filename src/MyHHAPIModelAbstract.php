<?php

namespace MyHHAPI;

abstract class MyHHAPIModelAbstract
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