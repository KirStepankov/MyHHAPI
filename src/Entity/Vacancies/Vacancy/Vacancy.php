<?php

namespace MyHHAPI\Entity\Vacancies\Vacancy;

use MyHHAPI\Contract\MyHHAPIContract;

class Vacancy extends VacancyPropsAbstract implements MyHHAPIContract
{
    /**
     * @var string
     */
    const METHOD = 'vacancies';

    /**
     * @var array|string[]
     */
    protected array $requiredFields = [
        'idVacancy'
    ];

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->responseWithGET();
    }

    /**
     * @return string
     */
    protected function getBuildUrl(): string
    {
        return self::METHOD . "/$this->idVacancy";
    }

    /**
     * @return array|string[]
     */
    protected function getRequiredFields(): array
    {
        return $this->requiredFields;
    }

    /**
     * @return array
     */
    protected function arrQuery(): array
    {
        return [];
    }
}