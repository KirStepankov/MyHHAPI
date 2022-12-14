<?php

namespace MyHHAPI;

use MyHHAPI\Contract\MyHHAPIContract;
use MyHHAPI\Entity\Directories\Industries\Industries;
use MyHHAPI\Entity\Directories\Specializations\Specializations;
use MyHHAPI\Entity\Employers\Employer\Employer;
use MyHHAPI\Entity\Employers\Employers;
use MyHHAPI\Entity\Resume\Resume;
use MyHHAPI\Entity\Vacancies\Vacancies;
use MyHHAPI\Entity\Vacancies\VacanciesSimilar\VacanciesSimilar;
use MyHHAPI\Entity\Vacancies\Vacancy\Vacancy;

class MyHHAPIFactory
{
    public function getService($type): bool|MyHHAPIContract
    {
        $service = match ($type) {
            'vacancy' => new Vacancy(),
            'vacancies' => new Vacancies(),
            'vacanciesSimilar' => new VacanciesSimilar(),
            'employers' => new Employers(),
            'employer' => new Employer(),
            'specializations' => new Specializations(),
            'industries' => new Industries(),
            default => false,
        };

        return $service instanceof MyHHAPIContract ? $service : false;
    }
}