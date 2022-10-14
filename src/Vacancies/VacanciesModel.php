<?php

namespace MyHHAPI\Vacancies;

class VacanciesModel
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
     * @var object
     */
    private object $schedule;
    /**
     * @var bool
     */
    private bool $accept_handicapped;
    /**
     * @var bool
     */
    private bool $accept_kids;
    /**
     * @var object
     */
    private object $experience;
    /**
     * @var object|null
     */
    private object|null $address;
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
     * @var object|null
     */
    private object|null $department;
    /**
     * @var object|null
     */
    private object|null $employment;
    /**
     * @var object|null
     */
    private object|null $salary;
    /**
     * @var bool
     */
    private bool $archived;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var object|null
     */
    private object|null $insider_interview;
    /**
     * @var object
     */
    private object $area;
    /**
     * @var string
     */
    private string $initial_created_at;
    /**
     * @var string
     */
    private string $created_at;
    /**
     * @var string
     */
    private string $published_at;
    /**
     * @var object|null
     */
    private object|null $employer;
    /**
     * @var bool
     */
    private bool $response_letter_required;
    /**
     * @var object
     */
    private object $type;
    /**
     * @var bool
     */
    private bool $has_test;
    /**
     * @var string|null
     */
    private string|null $response_url;
    /**
     * @var object|null
     */
    private object|null $test;
    /**
     * @var array
     */
    private array $specializations;
    /**
     * @var object|null
     */
    private object|null $contacts;
    /**
     * @var object
     */
    private object $billing_type;
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
     * @var object|null
     */
    private object|null $working_days;
    /**
     * @var object|null
     */
    private object|null $working_time_intervals;
    /**
     * @var object|null
     */
    private object|null $working_time_modes;
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
     * @param string $id
     * @return VacanciesModel
     */
    public function setId(string $id): VacanciesModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return VacanciesModel
     */
    public function setDescription(string $description): VacanciesModel
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrandedDescription(): ?string
    {
        return $this->branded_description;
    }

    /**
     * @param string|null $branded_description
     * @return VacanciesModel
     */
    public function setBrandedDescription(?string $branded_description): VacanciesModel
    {
        $this->branded_description = $branded_description;
        return $this;
    }

    /**
     * @return array
     */
    public function getKeySkills(): array
    {
        return $this->key_skills;
    }

    /**
     * @param array $key_skills
     * @return VacanciesModel
     */
    public function setKeySkills(array $key_skills): VacanciesModel
    {
        $this->key_skills = $key_skills;
        return $this;
    }

    /**
     * @return object
     */
    public function getSchedule(): object
    {
        return $this->schedule;
    }

    /**
     * @param object $schedule
     * @return VacanciesModel
     */
    public function setSchedule(object $schedule): VacanciesModel
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAcceptHandicapped(): bool
    {
        return $this->accept_handicapped;
    }

    /**
     * @param bool $accept_handicapped
     * @return VacanciesModel
     */
    public function setAcceptHandicapped(bool $accept_handicapped): VacanciesModel
    {
        $this->accept_handicapped = $accept_handicapped;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAcceptKids(): bool
    {
        return $this->accept_kids;
    }

    /**
     * @param bool $accept_kids
     * @return VacanciesModel
     */
    public function setAcceptKids(bool $accept_kids): VacanciesModel
    {
        $this->accept_kids = $accept_kids;
        return $this;
    }

    /**
     * @return object
     */
    public function getExperience(): object
    {
        return $this->experience;
    }

    /**
     * @param object $experience
     * @return VacanciesModel
     */
    public function setExperience(object $experience): VacanciesModel
    {
        $this->experience = $experience;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getAddress(): ?object
    {
        return $this->address;
    }

    /**
     * @param object|null $address
     * @return VacanciesModel
     */
    public function setAddress(?object $address): VacanciesModel
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlternateUrl(): string
    {
        return $this->alternate_url;
    }

    /**
     * @param string $alternate_url
     * @return VacanciesModel
     */
    public function setAlternateUrl(string $alternate_url): VacanciesModel
    {
        $this->alternate_url = $alternate_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getApplyAlternateUrl(): string
    {
        return $this->apply_alternate_url;
    }

    /**
     * @param string $apply_alternate_url
     * @return VacanciesModel
     */
    public function setApplyAlternateUrl(string $apply_alternate_url): VacanciesModel
    {
        $this->apply_alternate_url = $apply_alternate_url;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     * @return VacanciesModel
     */
    public function setCode(?string $code): VacanciesModel
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getDepartment(): ?object
    {
        return $this->department;
    }

    /**
     * @param object|null $department
     * @return VacanciesModel
     */
    public function setDepartment(?object $department): VacanciesModel
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getEmployment(): ?object
    {
        return $this->employment;
    }

    /**
     * @param object|null $employment
     * @return VacanciesModel
     */
    public function setEmployment(?object $employment): VacanciesModel
    {
        $this->employment = $employment;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getSalary(): ?object
    {
        return $this->salary;
    }

    /**
     * @param object|null $salary
     * @return VacanciesModel
     */
    public function setSalary(?object $salary): VacanciesModel
    {
        $this->salary = $salary;
        return $this;
    }

    /**
     * @return bool
     */
    public function isArchived(): bool
    {
        return $this->archived;
    }

    /**
     * @param bool $archived
     * @return VacanciesModel
     */
    public function setArchived(bool $archived): VacanciesModel
    {
        $this->archived = $archived;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return VacanciesModel
     */
    public function setName(string $name): VacanciesModel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getInsiderInterview(): ?object
    {
        return $this->insider_interview;
    }

    /**
     * @param object|null $insider_interview
     * @return VacanciesModel
     */
    public function setInsiderInterview(?object $insider_interview): VacanciesModel
    {
        $this->insider_interview = $insider_interview;
        return $this;
    }

    /**
     * @return object
     */
    public function getArea(): object
    {
        return $this->area;
    }

    /**
     * @param object $area
     * @return VacanciesModel
     */
    public function setArea(object $area): VacanciesModel
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return string
     */
    public function getInitialCreatedAt(): string
    {
        return $this->initial_created_at;
    }

    /**
     * @param string $initial_created_at
     * @return VacanciesModel
     */
    public function setInitialCreatedAt(string $initial_created_at): VacanciesModel
    {
        $this->initial_created_at = $initial_created_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     * @return VacanciesModel
     */
    public function setCreatedAt(string $created_at): VacanciesModel
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->published_at;
    }

    /**
     * @param string $published_at
     * @return VacanciesModel
     */
    public function setPublishedAt(string $published_at): VacanciesModel
    {
        $this->published_at = $published_at;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getEmployer(): ?object
    {
        return $this->employer;
    }

    /**
     * @param object|null $employer
     * @return VacanciesModel
     */
    public function setEmployer(?object $employer): VacanciesModel
    {
        $this->employer = $employer;
        return $this;
    }

    /**
     * @return bool
     */
    public function isResponseLetterRequired(): bool
    {
        return $this->response_letter_required;
    }

    /**
     * @param bool $response_letter_required
     * @return VacanciesModel
     */
    public function setResponseLetterRequired(bool $response_letter_required): VacanciesModel
    {
        $this->response_letter_required = $response_letter_required;
        return $this;
    }

    /**
     * @return object
     */
    public function getType(): object
    {
        return $this->type;
    }

    /**
     * @param object $type
     * @return VacanciesModel
     */
    public function setType(object $type): VacanciesModel
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasTest(): bool
    {
        return $this->has_test;
    }

    /**
     * @param bool $has_test
     * @return VacanciesModel
     */
    public function setHasTest(bool $has_test): VacanciesModel
    {
        $this->has_test = $has_test;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getResponseUrl(): ?string
    {
        return $this->response_url;
    }

    /**
     * @param string|null $response_url
     * @return VacanciesModel
     */
    public function setResponseUrl(?string $response_url): VacanciesModel
    {
        $this->response_url = $response_url;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getTest(): ?object
    {
        return $this->test;
    }

    /**
     * @param object|null $test
     * @return VacanciesModel
     */
    public function setTest(?object $test): VacanciesModel
    {
        $this->test = $test;
        return $this;
    }

    /**
     * @return array
     */
    public function getSpecializations(): array
    {
        return $this->specializations;
    }

    /**
     * @param array $specializations
     * @return VacanciesModel
     */
    public function setSpecializations(array $specializations): VacanciesModel
    {
        $this->specializations = $specializations;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getContacts(): ?object
    {
        return $this->contacts;
    }

    /**
     * @param object|null $contacts
     * @return VacanciesModel
     */
    public function setContacts(?object $contacts): VacanciesModel
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * @return object
     */
    public function getBillingType(): object
    {
        return $this->billing_type;
    }

    /**
     * @param object $billing_type
     * @return VacanciesModel
     */
    public function setBillingType(object $billing_type): VacanciesModel
    {
        $this->billing_type = $billing_type;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowMessages(): bool
    {
        return $this->allow_messages;
    }

    /**
     * @param bool $allow_messages
     * @return VacanciesModel
     */
    public function setAllowMessages(bool $allow_messages): VacanciesModel
    {
        $this->allow_messages = $allow_messages;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPremium(): bool
    {
        return $this->premium;
    }

    /**
     * @param bool $premium
     * @return VacanciesModel
     */
    public function setPremium(bool $premium): VacanciesModel
    {
        $this->premium = $premium;
        return $this;
    }

    /**
     * @return array
     */
    public function getDriverLicenseTypes(): array
    {
        return $this->driver_license_types;
    }

    /**
     * @param array $driver_license_types
     * @return VacanciesModel
     */
    public function setDriverLicenseTypes(array $driver_license_types): VacanciesModel
    {
        $this->driver_license_types = $driver_license_types;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAcceptIncompleteResumes(): bool
    {
        return $this->accept_incomplete_resumes;
    }

    /**
     * @param bool $accept_incomplete_resumes
     * @return VacanciesModel
     */
    public function setAcceptIncompleteResumes(bool $accept_incomplete_resumes): VacanciesModel
    {
        $this->accept_incomplete_resumes = $accept_incomplete_resumes;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getWorkingDays(): ?object
    {
        return $this->working_days;
    }

    /**
     * @param object|null $working_days
     * @return VacanciesModel
     */
    public function setWorkingDays(?object $working_days): VacanciesModel
    {
        $this->working_days = $working_days;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getWorkingTimeIntervals(): ?object
    {
        return $this->working_time_intervals;
    }

    /**
     * @param object|null $working_time_intervals
     * @return VacanciesModel
     */
    public function setWorkingTimeIntervals(?object $working_time_intervals): VacanciesModel
    {
        $this->working_time_intervals = $working_time_intervals;
        return $this;
    }

    /**
     * @return object|null
     */
    public function getWorkingTimeModes(): ?object
    {
        return $this->working_time_modes;
    }

    /**
     * @param object|null $working_time_modes
     * @return VacanciesModel
     */
    public function setWorkingTimeModes(?object $working_time_modes): VacanciesModel
    {
        $this->working_time_modes = $working_time_modes;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAcceptTemporary(): ?bool
    {
        return $this->accept_temporary;
    }

    /**
     * @param bool|null $accept_temporary
     * @return VacanciesModel
     */
    public function setAcceptTemporary(?bool $accept_temporary): VacanciesModel
    {
        $this->accept_temporary = $accept_temporary;
        return $this;
    }

    /**
     * @return array
     */
    public function getProfessionalRoles(): array
    {
        return $this->professional_roles;
    }

    /**
     * @param array $professional_roles
     * @return VacanciesModel
     */
    public function setProfessionalRoles(array $professional_roles): VacanciesModel
    {
        $this->professional_roles = $professional_roles;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getLanguages(): ?array
    {
        return $this->languages;
    }

    /**
     * @param array|null $languages
     * @return VacanciesModel
     */
    public function setLanguages(?array $languages): VacanciesModel
    {
        $this->languages = $languages;
        return $this;
    }
}