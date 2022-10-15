<?php

namespace MyHHAPI\Entity\Vacancy;

use MyHHAPI\Entity\Helpers\Helper;

class VacancyModel
{
    /**
     * @var string
     */
    private string $id;
    /**
     * @var string
     */
    private string $description;
    /**
     * @var string|null
     */
    private string|null $branded_description;
    /**
     * @var array
     */
    private array $key_skills;
    /**
     * @var array
     */
    private array $schedule;
    /**
     * @var bool
     */
    private bool $accept_handicapped;
    /**
     * @var bool
     */
    private bool $accept_kids;
    /**
     * @var array
     */
    private array $experience;
    /**
     * @var array|null
     */
    private array|null $address;
    /**
     * @var string
     */
    private string $alternate_url;
    /**
     * @var string
     */
    private string $apply_alternate_url;
    /**
     * @var string|null
     */
    private string|null $code;
    /**
     * @var array|null
     */
    private array|null $department;
    /**
     * @var array|null
     */
    private array|null $employment;
    /**
     * @var array|null
     */
    private array|null $salary;
    /**
     * @var bool
     */
    private bool $archived;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var array|null
     */
    private array|null $insider_interview;
    /**
     * @var array
     */
    private array $area;
    /**
     * @var string
     */
    private string $initial_created_at;
    /**
     * @var string
     */
    private string $created_at;
    /**
     * @var array
     */
    private array $relations;
    /**
     * @var string
     */
    private string $published_at;
    /**
     * @var array|null
     */
    private array|null $employer;
    /**
     * @var bool
     */
    private bool $response_letter_required;
    /**
     * @var array
     */
    private array $type;
    /**
     * @var bool
     */
    private bool $has_test;
    /**
     * @var string|null
     */
    private string|null $response_url;
    /**
     * @var array|null
     */
    private array|null $test;
    /**
     * @var array
     */
    private array $specializations;
    /**
     * @var array|null
     */
    private array|null $contacts;
    /**
     * @var array
     */
    private array $billing_type;
    /**
     * @var bool
     */
    private bool $allow_messages;
    /**
     * @var bool
     */
    private bool $premium;
    /**
     * @var array
     */
    private array $driver_license_types;
    /**
     * @var bool
     */
    private bool $accept_incomplete_resumes;
    /**
     * @var array|null
     */
    private array|null $working_days;
    /**
     * @var array|null
     */
    private array|null $working_time_intervals;
    /**
     * @var array|null
     */
    private array|null $working_time_modes;
    /**
     * @var bool|null
     */
    private bool|null $accept_temporary;
    /**
     * @var array
     */
    private array $professional_roles;
    /**
     * @var array|null
     */
    private array|null $languages;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getBrandedDescription(): ?string
    {
        return $this->branded_description;
    }

    /**
     * @return array
     */
    public function getKeySkills(): array
    {
        return $this->key_skills;
    }

    /**
     * @return array
     */
    public function getSchedule(): array
    {
        return $this->schedule;
    }

    /**
     * @return bool
     */
    public function isAcceptHandicapped(): bool
    {
        return $this->accept_handicapped;
    }

    /**
     * @return bool
     */
    public function isAcceptKids(): bool
    {
        return $this->accept_kids;
    }

    /**
     * @return array
     */
    public function getExperience(): array
    {
        return $this->experience;
    }

    /**
     * @return array|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getAlternateUrl(): string
    {
        return $this->alternate_url;
    }

    /**
     * @return string
     */
    public function getApplyAlternateUrl(): string
    {
        return $this->apply_alternate_url;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @return array|null
     */
    public function getDepartment(): ?array
    {
        return $this->department;
    }

    /**
     * @return array|null
     */
    public function getEmployment(): ?array
    {
        return $this->employment;
    }

    /**
     * @return array|null
     */
    public function getSalary(): ?array
    {
        return $this->salary;
    }

    /**
     * @return bool
     */
    public function isArchived(): bool
    {
        return $this->archived;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array|null
     */
    public function getInsiderInterview(): ?array
    {
        return $this->insider_interview;
    }

    /**
     * @return array
     */
    public function getArea(): array
    {
        return $this->area;
    }

    /**
     * @return string
     */
    public function getInitialCreatedAt(): string
    {
        return $this->initial_created_at;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return array
     */
    public function getRelations(): array
    {
        return $this->relations;
    }

    /**
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->published_at;
    }

    /**
     * @return array|null
     */
    public function getEmployer(): ?array
    {
        return $this->employer;
    }

    /**
     * @return bool
     */
    public function isResponseLetterRequired(): bool
    {
        return $this->response_letter_required;
    }

    /**
     * @return array
     */
    public function getType(): array
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isHasTest(): bool
    {
        return $this->has_test;
    }

    /**
     * @return string|null
     */
    public function getResponseUrl(): ?string
    {
        return $this->response_url;
    }

    /**
     * @return array|null
     */
    public function getTest(): ?array
    {
        return $this->test;
    }

    /**
     * @return array
     */
    public function getSpecializations(): array
    {
        return $this->specializations;
    }

    /**
     * @return array|null
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }

    /**
     * @return array
     */
    public function getBillingType(): array
    {
        return $this->billing_type;
    }

    /**
     * @return bool
     */
    public function isAllowMessages(): bool
    {
        return $this->allow_messages;
    }

    /**
     * @return bool
     */
    public function isPremium(): bool
    {
        return $this->premium;
    }

    /**
     * @return array
     */
    public function getDriverLicenseTypes(): array
    {
        return $this->driver_license_types;
    }

    /**
     * @return bool
     */
    public function isAcceptIncompleteResumes(): bool
    {
        return $this->accept_incomplete_resumes;
    }

    /**
     * @return array|null
     */
    public function getWorkingDays(): ?array
    {
        return $this->working_days;
    }

    /**
     * @return array|null
     */
    public function getWorkingTimeIntervals(): ?array
    {
        return $this->working_time_intervals;
    }

    /**
     * @return array|null
     */
    public function getWorkingTimeModes(): ?array
    {
        return $this->working_time_modes;
    }

    /**
     * @return bool|null
     */
    public function getAcceptTemporary(): ?bool
    {
        return $this->accept_temporary;
    }

    /**
     * @return array
     */
    public function getProfessionalRoles(): array
    {
        return $this->professional_roles;
    }

    /**
     * @return array|null
     */
    public function getLanguages(): ?array
    {
        return $this->languages;
    }

    /**
     * @param array $response
     * @return void
     */
    public function mapFields(array $response): void
    {
        foreach ($response as $key => $item) {
            $this->{$key} = $item;
        }
    }
}