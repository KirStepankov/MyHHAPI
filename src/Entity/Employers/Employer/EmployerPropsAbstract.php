<?php

namespace MyHHAPI\Entity\Employers\Employer;

use MyHHAPI\MyHHAPIAbstract;

abstract class EmployerPropsAbstract extends MyHHAPIAbstract
{
    protected int $employer_id;

    /**
     * @var string
     * Default: "RU"
     * Example: locale=EN
     * Идентификатор локали (см. Локализация)
     */
    protected string $locale = 'RU';

    /**
     * @var string
     * Default: "hh.ru"
     * Enum: "hh.ru" "grc.ua" "rabota.by" "hh1.az" "hh.uz" "hh.kz" "headhunter.ge" "headhunter.kg"
     * Example: host=hh.ru
     * Доменное имя сайта (см. Выбор сайта)
     */
    protected string $host = 'hh.ru';

    /**
     * @return int
     */
    public function getEmployerId(): int
    {
        return $this->employer_id;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
}