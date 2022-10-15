<?php

namespace MyHHAPI;

use MyHHAPI\Contract\MyHHAPIContract;
use MyHHAPI\Entity\Resume\Resume;
use MyHHAPI\Entity\Vacancies\Vacancies;
use MyHHAPI\Entity\VacanciesSimilar\VacanciesSimilar;
use MyHHAPI\Entity\Vacancy\Vacancy;

class MyHHAPIFactory
{
    public function getService($type): bool|MyHHAPIContract
    {
        $service = match ($type) {
            'vacancy' => new Vacancy(),
            'vacancies' => new Vacancies(),
            'resume' => new Resume(),
            'vacanciesSimilar' => new VacanciesSimilar(),
            default => false,
        };

        return $service instanceof MyHHAPIContract ? $service : false;
    }
}