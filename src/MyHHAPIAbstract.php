<?php

namespace MyHHAPI;

use Curl\Curl;
use Exception;
use MyHHAPI\Contract\MyHHAPIModelContract;
use MyHHAPI\Entity\Helpers\Helper;

abstract class MyHHAPIAbstract
{
    /**
     * @return array
     */
    abstract protected function getRequiredFields(): array;

    /**
     * @return MyHHAPIModelContract
     */
    abstract protected function getModel(): MyHHAPIModelContract;

    /**
     * @return string
     */
    abstract protected function getBuildUrl(): string;

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
            echo $url . PHP_EOL;
            die;
            $response = $this->requestWithGET($url);
            $model = $this->getModel();
            $model->mapFields($response);

            return Helper::returnResponse($model);
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
        $curl->setHeader('User-Agent', $_ENV['BASE_USER_AGENT']);
        $curl->get($url);

        return $curl->error
            ? throw new Exception("Ошибка при запросе в АПИ HH: $curl->error_code")
            : json_decode($curl->response, true);
    }
}