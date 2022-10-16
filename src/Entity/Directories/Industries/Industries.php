<?php

namespace MyHHAPI\Entity\Directories\Industries;

use MyHHAPI\Contract\MyHHAPIContract;

class Industries extends IndustriesPropsAbstract implements MyHHAPIContract
{
    private string $method = 'industries';

    protected function getRequiredFields(): array
    {
        return [];
    }

    protected function getBuildUrl(): string
    {
        return $this->method;
    }

    protected function arrQuery(): array
    {
        return [];
    }

    public function getData(): array
    {
        return $this->responseWithGET();
    }
}