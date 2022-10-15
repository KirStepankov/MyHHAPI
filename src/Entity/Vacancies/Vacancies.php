<?php

namespace MyHHAPI\Entity\Vacancies;

use MyHHAPI\Contract\MyHHAPIContract;
use MyHHAPI\Contract\MyHHAPIModelContract;

class Vacancies extends VacanciesPropsAbstract implements MyHHAPIContract
{
    /**
     * @var string
     */
    protected string $method = 'vacancies';

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

    protected function getModel(): MyHHAPIModelContract
    {
        return new VacanciesModel();
    }

    protected function getBuildUrl(): string
    {
        $url = "{$_ENV['BASE_API']}$this->method";

        if (!empty($this->getQuery())) {
            $url .= "/?{$this->getQuery()}";
        }

        return $url;
    }


    private function getQuery(): string
    {
        return $this->formattedQueryArr(
            $this->arrQuery()
        );
    }

    //TODO Реализовать передачу координат
    // top_lat, bottom_lat, left_lng, right_lng, sort_point_lat, sort_point_lng
    private function arrQuery(): array
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

    private function arrayClear($arr)
    {
        foreach ($arr as $key => $item) {
            if ($item == 0) {
                unset($arr[$key]);
            }

            if ($item == '') {
                unset($arr[$key]);
            }
        }

        return $arr;
    }

    /**
     * @param $arr
     * @return string
     *
     * Некоторые параметры принимают множественные значения: key=value&key=value.
     */
    private function formattedQueryArr($arr): string
    {
        $query = '';
        foreach ($arr as $key => $item) {
            if (!is_array($item)) {
                $query .= "&$key=$item";
                continue;
            }

            foreach ($item as $value) {
                $query .= "&$key=$value";
            }
        }
        return $query;
    }
}