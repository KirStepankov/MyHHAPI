<?php

namespace MyHHAPI\Entity\Vacancies\VacanciesSimilar;

use MyHHAPI\Contract\MyHHAPIContract;

class VacanciesSimilar extends VacanciesSimilarPropsAbstract implements MyHHAPIContract
{
    /**
     * @var string
     */
    protected string $method = 'vacancies/{vacancy_id}/similar_vacancies';

    /**
     * @var array|string[]
     */
    protected array $requiredFields = [
        'idVacancy'
    ];

    protected function getRequiredFields(): array
    {
        return $this->requiredFields;
    }

    protected function getBuildUrl(): string
    {
        $method = str_replace('{vacancy_id}', $this->idVacancy, $this->method);
        return "{$_ENV['BASE_API']}$method";
    }

    public function getData(): array
    {
        return $this->responseWithGET();
    }
}