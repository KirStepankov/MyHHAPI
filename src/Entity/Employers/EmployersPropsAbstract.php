<?php

namespace MyHHAPI\Entity\Employers;

use MyHHAPI\MyHHAPIAbstract;

abstract class EmployersPropsAbstract extends MyHHAPIAbstract
{
    /**
     * @var string
     * Текст для поиска. Переданное значение ищется в названии и описании работодателя
     */
    protected string $text = '';

    /**
     * @var string
     * Идентификатор региона работодателя, множественный параметр.
     * Идентификаторы регионов можно узнать в справочнике регионов
     */
    protected string $area = '';

    /**
     * @var string
     * Тип работодателя, множественный параметр.
     * Разрешенные значения перечислены в справочнике в поле employer_type
     */
    protected string $type = '';

    /**
     * @var bool
     * Возвращать только работодателей у которых есть вданный момент
     * открытые вакансии (true) или же всех (false). По умолчанию — false
     */
    protected bool $only_with_vacancies = false;

    /**
     * @var int
     * Номер страницы с работодателями (считается от 0, по умолчанию — 0
     */
    protected int $page = 0;

    /**
     * @var int
     * Количество элементов на страницу (по умолчанию — 20, максимум — 100 )
     */
    protected int $per_page = 20;

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
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getArea(): string
    {
        return $this->area;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isOnlyWithVacancies(): bool
    {
        return $this->only_with_vacancies;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->per_page;
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