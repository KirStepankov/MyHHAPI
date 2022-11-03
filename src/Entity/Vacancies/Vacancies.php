<?php

namespace MyHHAPI\Entity\Vacancies;

use MyHHAPI\Contract\MyHHAPIContract;
use MyHHAPI\Contract\MyHHAPIModelContract;

class Vacancies extends VacanciesPropsAbstract implements MyHHAPIContract
{
    /**
     * @var string
     */
    const METHOD = 'vacancies';

    /**
     * @var array|string[]
     */
    protected array $requiredFields = [];

    public function getData(): array
    {
        return $this->responseWithGET();
    }

    protected function getRequiredFields(): array
    {
        return $this->requiredFields;
    }

    protected function getBuildUrl(): string
    {
        return !empty($this->getQuery()) ? self::METHOD . "/?{$this->getQuery()}" : self::METHOD;
    }

    //TODO Реализовать передачу координат
    // top_lat, bottom_lat, left_lng, right_lng, sort_point_lat, sort_point_lng
    protected function arrQuery(): array
    {
        $arr = [
            'text' => $this->getText(),
            'search_field' => $this->getSearchField(),
            'experience' => $this->getExperience(),
            'employment' => $this->getEmployment(),
            'schedule' => $this->getSchedule(),
            'area' => $this->getArea(),
            'metro' => $this->getMetro(),
            'specialization' => $this->getSpecialization(),
            'professional_role' => $this->getProfessionalRole(),
            'industry' => $this->getIndustry(),
            'employer_id' => $this->getEmployerId(),
            'currency' => $this->getCurrency(),
            'salary' => $this->getSalary(),
            'label' => $this->getLabel(),
            'only_with_salary' => $this->isOnlyWithSalary(),
            'period' => $this->getPeriod(),
            'date_from' => $this->getDateFrom(),
            'date_to' => $this->getDateTo(),
            'order_by' => $this->getOrderBy(),
            'clusters' => $this->isClusters(),
            'describe_arguments' => $this->isDescribeArguments(),
            'per_page' => $this->getPerPage(),
            'page' => $this->getPage(),
            'no_magic' => $this->isNoMagic(),
            'premium' => $this->isPremium(),
            'responses_count_enabled' => $this->isResponsesCountEnabled(),
            'part_time' => $this->getPartTime(),
        ];

        return $this->arrayClear($arr);
    }
}