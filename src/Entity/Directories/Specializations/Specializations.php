<?php

namespace MyHHAPI\Entity\Directories\Specializations;

use MyHHAPI\Contract\MyHHAPIContract;

class Specializations extends SpecializationsPropsAbstract implements MyHHAPIContract
{
    private string $method = 'specializations';

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