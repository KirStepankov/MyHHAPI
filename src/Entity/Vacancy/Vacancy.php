<?php

namespace MyHHAPI\Entity\Vacancy;

use Curl\Curl;
use Exception;
use MyHHAPI\Contract\MyHHAPIContract;
use MyHHAPI\Contract\MyHHAPIModelContract;
use MyHHAPI\Entity\Helpers\Helper;
use MyHHAPI\MyHHAPIAbstract;

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
     * @return MyHHAPIModelContract
     */
    protected function getModel(): MyHHAPIModelContract
    {
        return new VacancyModel();
    }
}