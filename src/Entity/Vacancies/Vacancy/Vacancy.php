<?php

namespace MyHHAPI\Entity\Vacancies\Vacancy;

use MyHHAPI\Contract\MyHHAPIContract;

class Vacancy extends VacancyPropsAbstract implements MyHHAPIContract
{
    /**
     * @var string
     */
    protected string $method = 'vacancies';

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
        return "{$_ENV['BASE_API']}$this->method/$this->idVacancy";
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