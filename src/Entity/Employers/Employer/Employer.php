<?php

namespace MyHHAPI\Entity\Employers\Employer;

use MyHHAPI\Contract\MyHHAPIContract;

class Employer extends EmployerPropsAbstract implements MyHHAPIContract
{
    /**
     * @var string
     */
    const METHOD = 'employers';

    /**
     * @var array|string[]
     */
    protected array $requiredFields = [
        'employer_id'
    ];

    /**
     * @return array|string[]
     */
    protected function getRequiredFields(): array
    {
        return $this->requiredFields;
    }

    /**
     * @return string
     */
    protected function getBuildUrl(): string
    {
        return self::METHOD . "/$this->employer_id";
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->responseWithGET();
    }

    /**
     * @return array
     */
    protected function arrQuery(): array
    {
        return [];
    }
}