<?php

namespace MyHHAPI;

use MyHHAPI\Contract\MyHHAPIContract;
use MyHHAPI\Entity\Resume\Resume;
use MyHHAPI\Entity\Vacancy\Vacancy;

class MyHHAPIFactory
{
    public function getService($type): bool|MyHHAPIContract
    {
        $service = match ($type) {
            'vacancy' => new Vacancy(),
            'resume' => new Resume(),
            default => false,
        };

        return $service instanceof MyHHAPIContract ? $service : false;
    }
}