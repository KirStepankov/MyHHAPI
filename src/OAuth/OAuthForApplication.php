<?php

namespace MyHHAPI\OAuth;

use Curl\Curl;
use Exception;
use MyHHAPI\Entity\Helpers\Helper;

class OAuthForApplication
{
    /**
     * @return array
     */
    public function getAccessToken(): array
    {
        return $this->response();
    }

    /**
     * @return array
     */
    private function response(): array
    {
        try {
            $this->checkRequiredFields();
            $data = $this->request();
            return Helper::returnResponse($data);
        } catch (Exception $e) {
            return Helper::returnResponse($e);
        }
    }

    /**
     * @throws Exception
     */
    private function request()
    {
        $url = 'https://hh.ru/oauth/token';

        $curl = new Curl();
        $curl->setUserAgent($_ENV['BASE_USER_AGENT']);
        $curl->post($url, [
            'grant_type' => $_ENV['GRANT_TYPE'],
            'client_id' => $_ENV['CLIENT_ID'],
            'client_secret' => $_ENV['CLIENT_SECRET']
        ]);

        return $curl->error
            ? throw new Exception("Ошибка при запросе в АПИ HH: $curl->error_code")
            : json_decode($curl->response, true);
    }

    /**
     * @throws Exception
     */
    private function checkRequiredFields(): void
    {
        if (empty($_ENV['GRANT_TYPE']) || empty($_ENV['CLIENT_ID']) || empty($_ENV['CLIENT_SECRET'])) {
            throw new Exception('В env файле не указаны обязательные параметры для автормзации');
        }
    }
}