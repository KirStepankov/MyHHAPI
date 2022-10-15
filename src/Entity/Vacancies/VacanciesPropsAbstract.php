<?php

namespace MyHHAPI\Entity\Vacancies;

use MyHHAPI\MyHHAPIAbstract;

/**
 * Дока по полям
 * https://github.com/hhru/api/blob/master/docs/vacancies.md#%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81
 *
 * При указании параметров пагинации (page, per_page) работает ограничение:
 * глубина возвращаемых результатов не может быть больше 2000.
 * Например, возможен запрос per_page=10&page=199 (выдача с 1991 по 2000 вакансию),
 * но запрос с per_page=10&page=200 вернёт ошибку (выдача с 2001 до 2010 вакансию).
 */
abstract class VacanciesPropsAbstract extends MyHHAPIAbstract
{
    /**
     * @var string
     * текстовое поле.
     * Переданное значение ищется в полях вакансии,
     * указанных в параметре search_field.
     */
    protected string $text = '';
    /**
     * @var
     * область поиска.
     * Справочник с возможными значениями:
     * vacancy_search_fields в /dictionaries.
     * По умолчанию, используются все поля.
     * Возможно указание нескольких значений.
     */
    protected array $search_field = [];

    /**
     * @var
     * опыт работы.
     * Необходимо передавать id из справочника experience в /dictionaries.
     * Возможно указание нескольких значений
     */
    protected array $experience = [];

    /**
     * @var
     * тип занятости.
     * Необходимо передавать id из справочника employment в /dictionaries.
     * Возможно указание нескольких значений.
     */
    protected array $employment = [];

    /**
     * @var
     * график работы.
     * Необходимо передавать id из справочника schedule в /dictionaries.
     * Возможно указание нескольких значений.
     */
    protected array $schedule = [];

    /**
     * @var
     * регион.
     * Необходимо передавать id из справочника /areas.
     * Возможно указание нескольких значений.
     */
    protected array $area = [];

    /**
     * @var
     * ветка или станция метро.
     * Необходимо передавать id из справочника /metro.
     * Возможно указание нескольких значений.
     */
    protected array $metro = [];

    /**
     * @var
     * профобласть или специализация.
     * Необходимо передавать id из справочника /specializations.
     * Возможно указание нескольких значений.
     * Будет заменен профессиональными ролями(параметр professional_role),
     * в настоящее время работает в режиме обратной совместимости.
     */
    protected array $specialization = [];

    /**
     * @var
     * профессиональная область.
     * Необходимо передавать id из справочника /professional_roles
     */
    protected int $professional_role = 0;

    /**
     * @var
     * индустрия компании, разместившей вакансию.
     * Необходимо передавать id из справочника /industries.
     * Возможно указание нескольких значений.
     */
    protected array $industry = [];

    /**
     * @var
     * идентификатор компании.
     * Возможно указание нескольких значений.
     */
    protected array $employer_id = [];

    /**
     * @var
     * код валюты.
     * Справочник с возможными значениями:
     * currency (ключ code) в /dictionaries.
     * Имеет смысл указывать только совместно с параметром salary.
     * TODO  понять какой тип
     */
    protected $currency = '';

    /**
     * @var
     * размер заработной платы.
     * Если указано это поле, но не указано currency,
     * то используется значение RUR у currency.
     *
     * При указании значения будут найдены вакансии,
     * в которых вилка зарплаты близка к указанной в запросе.
     * При этом значения пересчитываются по текущим курсам ЦБ РФ.
     * Например, при указании salary=100&currency=EUR будут найдены вакансии,
     * где вилка зарплаты указана в рублях
     * и после пересчёта в Евро близка к 100 EUR.
     * По умолчанию будут также найдены вакансии,
     * в которых вилка зарплаты не указана,
     * чтобы такие вакансии отфильтровать,
     * используйте only_with_salary=true.
     */
    protected string $salary = '';

    /**
     * @var
     * фильтр по меткам вакансий.
     * Необходимо передавать id из справочника vacancy_label в /dictionaries.
     * Возможно указание нескольких значений.
     */
    protected array $label = [];

    /**
     * @var
     * показывать вакансии только с указанием зарплаты.
     * Возможные значения: true или false.
     * По умолчанию, используется false.
     */
    protected bool $only_with_salary = false;

    /**
     * @var
     * количество дней, в пределах которых нужно найти вакансии.
     * Максимальное значение: 30.
     */
    protected int $period = 0;

    /**
     * @var
     * дата, которая ограничивает снизу диапазон дат публикации вакансий.
     * Нельзя передавать вместе с параметром period.
     * Значение указывается в формате ISO 8601 - YYYY-MM-DD
     * или с точность до секунды YYYY-MM-DDThh:mm:ss±hhmm.
     * Указанное значение будет округлено до ближайших 5 минут.
     */
    protected string $date_from = '';

    /**
     * @var
     * дата, которая ограничивает сверху диапазон дат публикации вакансий.
     * Необходимо передавать только в паре с параметром date_from.
     * Нельзя передавать вместе с параметром period.
     * Значение указывается в формате ISO 8601 - YYYY-MM-DD
     * или с точность до секунды YYYY-MM-DDThh:mm:ss±hhmm.
     * Указанное значение будет округлено до ближайших 5 минут.
     */
    protected string $date_to = '';

    /**
     * @var float
     * значение гео-координат.
     * При поиске используется значение указанного в вакансии адреса.
     * Принимаемое значение — градусы в виде десятичной дроби.
     * Необходимо передавать одновременно все четыре параметра гео-координат,
     * иначе вернется ошибка.
     */
    protected float $top_lat = 0;
    protected float $bottom_lat = 0;
    protected float $left_lng = 0;
    protected float $right_lng = 0;

    /**
     * @var
     * сортировка списка вакансий.
     * Справочник с возможными значениями:
     * vacancy_search_order в /dictionaries.
     * Если выбрана сортировка по удалённости от гео-точки distance,
     * необходимо также задать её координаты sort_point_lat,sort_point_lng.
     */
    protected string $order_by = '';

    /**
     * @var
     * значение гео-координат точки,
     * по расстоянию от которой будут отсортированы вакансии.
     * Необходимо указывать только, если order_by установлено в distance.
     * TODO понять какой тип
     */
    protected $sort_point_lat = '';
    protected $sort_point_lng = '';

    /**
     * @var bool
     * возвращать ли кластеры для данного поиска,
     * по умолчанию: false.
     */
    protected bool $clusters = false;

    /**
     * @var
     * возвращать ли описание использованных параметров поиска,
     * по умолчанию: false.
     */
    protected bool $describe_arguments = false;

    /**
     * @var
     * параметры пагинации.
     * Параметр per_page ограничен значением в 100.
     */
    protected int $per_page = 0;
    protected int $page = 0;

    /**
     * @var
     * Если значение true – отключить автоматическое преобразование вакансий.
     * При включённом автоматическом преобразовании,
     * будет предпринята попытка изменить текстовый запрос пользователя
     * на набор параметров.Например, запрос text=москва бухгалтер 100500
     * будет преобразован в
     * text=бухгалтер&only_with_salary=true&area=1&salary=100500.
     *
     * По умолчанию – false.
     */
    protected bool $no_magic = false;

    /**
     * @var bool
     * Если значение true – в сортировке вакансий будет учтены премиум вакансии.
     * Такая сортировка используется на сайте.
     * По умолчанию – false.
     */
    protected bool $premium = false;

    /**
     * @var bool
     * Если значение true – включить дополнительное поле counters
     * с количеством откликов для вакансии.
     * По-умолчанию – false.
     */
    protected bool $responses_count_enabled = false;

    /**
     * @var
     * Вакансии для подработки. Возможные значения:
     *  все элементы из working_days в /dictionaries.
     *  все элементы из working_time_intervals в /dictionaries.
     *  все элементы из working_time_modes в /dictionaries.
     *  элементы part или project из employment в /dictionaries.
     *  элемент accept_temporary, показывает вакансии только с временным трудоустройством.
     * Возможно указание нескольких значений.
     */
    protected array $part_time = [];

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return array
     */
    public function getSearchField(): array
    {
        return $this->search_field;
    }

    /**
     * @return array
     */
    public function getExperience(): array
    {
        return $this->experience;
    }

    /**
     * @return array
     */
    public function getEmployment(): array
    {
        return $this->employment;
    }

    /**
     * @return array
     */
    public function getSchedule(): array
    {
        return $this->schedule;
    }

    /**
     * @return array
     */
    public function getArea(): array
    {
        return $this->area;
    }

    /**
     * @return array
     */
    public function getMetro(): array
    {
        return $this->metro;
    }

    /**
     * @return array
     */
    public function getSpecialization(): array
    {
        return $this->specialization;
    }

    /**
     * @return int
     */
    public function getProfessionalRole(): int
    {
        return $this->professional_role;
    }

    /**
     * @return array
     */
    public function getIndustry(): array
    {
        return $this->industry;
    }

    /**
     * @return array
     */
    public function getEmployerId(): array
    {
        return $this->employer_id;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getSalary(): string
    {
        return $this->salary;
    }

    /**
     * @return array
     */
    public function getLabel(): array
    {
        return $this->label;
    }

    /**
     * @return bool
     */
    public function isOnlyWithSalary(): bool
    {
        return $this->only_with_salary;
    }

    /**
     * @return int
     */
    public function getPeriod(): int
    {
        return $this->period;
    }

    /**
     * @return string
     */
    public function getDateFrom(): string
    {
        return $this->date_from;
    }

    /**
     * @return string
     */
    public function getDateTo(): string
    {
        return $this->date_to;
    }

    /**
     * @return float
     */
    public function getTopLat(): float
    {
        return $this->top_lat;
    }

    /**
     * @return float
     */
    public function getBottomLat(): float
    {
        return $this->bottom_lat;
    }

    /**
     * @return float
     */
    public function getLeftLng(): float
    {
        return $this->left_lng;
    }

    /**
     * @return float
     */
    public function getRightLng(): float
    {
        return $this->right_lng;
    }

    /**
     * @return string
     */
    public function getOrderBy(): string
    {
        return $this->order_by;
    }

    /**
     * @return mixed
     */
    public function getSortPointLat()
    {
        return $this->sort_point_lat;
    }

    /**
     * @return mixed
     */
    public function getSortPointLng()
    {
        return $this->sort_point_lng;
    }

    /**
     * @return bool
     */
    public function isClusters(): bool
    {
        return $this->clusters;
    }

    /**
     * @return bool
     */
    public function isDescribeArguments(): bool
    {
        return $this->describe_arguments;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->per_page;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return bool
     */
    public function isNoMagic(): bool
    {
        return $this->no_magic;
    }

    /**
     * @return bool
     */
    public function isPremium(): bool
    {
        return $this->premium;
    }

    /**
     * @return bool
     */
    public function isResponsesCountEnabled(): bool
    {
        return $this->responses_count_enabled;
    }

    /**
     * @return array
     */
    public function getPartTime(): array
    {
        return $this->part_time;
    }
}