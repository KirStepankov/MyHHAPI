<?php

namespace MyHHAPI\Entity\Employers\Employer;

use MyHHAPI\Contract\MyHHAPIContract;

class Employer extends EmployerPropsAbstract implements MyHHAPIContract
{
    /**
     * @var string
     */
    protected string $method = 'employers';

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
        $url = "{$_ENV['BASE_API']}$this->method";

        if (!empty($this->getQuery())) {
            $url .= "/$this->employer_id/?{$this->getQuery()}";
        }

        return $url;
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
            'locale' => $this->getLocale(),
            'host' => $this->getHost()
        ];

        return $this->arrayClear($arr);
    }
}