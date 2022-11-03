<?php

namespace MyHHAPI\Entity\Employers;

use MyHHAPI\Contract\MyHHAPIContract;

class Employers extends EmployersPropsAbstract implements MyHHAPIContract
{
    /**
     * @var string
     */
    const METHOD = 'employers';

    /**
     * @var array|string[]
     */
    protected array $requiredFields = [];

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
        return !empty($this->getQuery()) ? self::METHOD . "/?{$this->getQuery()}" : self::METHOD;
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
        $arr = [
            'text' => $this->getText(),
            'area' => $this->getArea(),
            'type' => $this->getType(),
            'only_with_vacancies' => $this->isOnlyWithVacancies(),
            'per_page' => $this->getPerPage(),
            'page' => $this->getPage(),
            'locale' => $this->getLocale(),
            'host' => $this->getHost()
        ];

        return $this->arrayClear($arr);
    }
}