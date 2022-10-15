<?php

namespace MyHHAPI\Entity\Vacancy;

use Curl\Curl;
use Exception;
use MyHHAPI\Contract\MyHHAPIContract;
use MyHHAPI\Entity\Helpers\Helper;
use MyHHAPI\MyHHAPIAbstract;

class Vacancy extends MyHHAPIAbstract implements MyHHAPIContract
{
    protected array $requiredFields = [
        'idVacancy'
    ];

    private string $method = 'vacancies';

    public function __construct()
    {
        //$this->requiredFields[] = 'accessToken';
    }

    /**
     * @var int
     */
    protected int $idVacancy;

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->response();
    }

    /**
     * @return array
     */
    private function response(): array
    {
        try {
            $response = $this->request();

            $model = new VacancyModel();
            $model->mapFields($response);

            return Helper::returnResponse($model);
        } catch (Exception $e) {
            return Helper::returnResponse($e);
        }
    }

    /**
     * @throws Exception
     */
    private function request(): array
    {
        $url = "{$_ENV['BASE_API']}$this->method/$this->idVacancy";
        $curl = new Curl();
        $curl->setHeader('User-Agent', $_ENV['BASE_USER_AGENT']);
        $curl->get($url);

        return $curl->error
            ? throw new Exception("Ошибка при запросе в АПИ HH: $curl->error_code")
            : json_decode($curl->response, true);
    }
}