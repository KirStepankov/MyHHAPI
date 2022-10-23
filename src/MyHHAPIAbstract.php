<?php

namespace MyHHAPI;

use Curl\Curl;
use Exception;
use MyHHAPI\Contract\MyHHAPIModelContract;
use MyHHAPI\Entity\Helpers\Helper;

abstract class MyHHAPIAbstract
{
    const BASE_API = 'https://api.hh.ru/';
    const BASE_USER_AGENT = 'User-Agent: MyHHAPI/1.0 (dev-stepankoff@mail.ru)';

    private MyHHAPIModel $model;

    /**
     * @return array
     */
    abstract protected function getRequiredFields(): array;

    /**
     * @return string
     */
    abstract protected function getBuildUrl(): string;

    /**
     * @return array
     */
    abstract protected function arrQuery(): array;

    public function __construct()
    {
        $this->model = new MyHHAPIModel();
    }

    /**
     * @param array $fields
     * @return Exception|$this
     */
    public function setQueryFields(array $fields): MyHHAPIAbstract|Exception
    {
        try {
            $this->checkRequiredFields($fields);

            foreach ($fields as $prop => $value) {
                $this->{"$prop"} = $value;
            }

            return $this;
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * @throws Exception
     */
    private function checkRequiredFields(array $fields): void
    {
        foreach ($this->getRequiredFields() as $rField) {
            if (!isset($fields[$rField])) {
                throw new Exception('Не заполнены обязательные поля');
            }
        }
    }

    /**
     * @return array
     */
    protected function responseWithGET(): array
    {
        try {
            $url = $this->getBuildUrl();
            $response = $this->requestWithGET($url);
            $this->model->mapFields($response);

            return Helper::returnResponse($this->model);
        } catch (Exception $e) {
            return Helper::returnResponse($e);
        }
    }

    /**
     * @throws Exception
     */
    protected function requestWithGET($url): array
    {
        $curl = new Curl();
        $curl->setHeader('User-Agent', self::BASE_USER_AGENT);
        $curl->get(self::BASE_API . $url);

        return $curl->error
            ? throw new Exception("Ошибка при запросе в АПИ HH: $curl->error_code")
            : json_decode($curl->response, true);
    }

    /**
     * @return string
     */
    protected function getQuery(): string
    {
        return $this->formattedQueryArr(
            $this->arrQuery()
        );
    }

    protected function arrayClear($arr)
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
    protected function formattedQueryArr($arr): string
    {
        $query = '';
        foreach ($arr as $key => $item) {
            if (!is_array($item)) {
                if (Helper::isRussian($item)) {
                    $item = urlencode($item);
                }

                $query .= "&$key=$item";
                continue;
            }

            foreach ($item as $value) {
                if (Helper::isRussian($value)) {
                    $value = urlencode($value);
                }

                $query .= "&$key=$value";
            }
        }
        return $query;
    }
}