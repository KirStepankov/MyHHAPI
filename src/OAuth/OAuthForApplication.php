<?php

namespace MyHHAPI\OAuth;

use Curl\Curl;
use Exception;
use MyHHAPI\Entity\Helpers\Helper;

class OAuthForApplication
{
    private string $grant_type;
    private string $client_id;
    private string $client_secret;

    /**
     * @param string $grant_type
     * @return OAuthForApplication
     */
    public function setGrantType(string $grant_type): OAuthForApplication
    {
        $this->grant_type = $grant_type;
        return $this;
    }

    /**
     * @param string $client_id
     * @return OAuthForApplication
     */
    public function setClientId(string $client_id): OAuthForApplication
    {
        $this->client_id = $client_id;
        return $this;
    }

    /**
     * @param string $client_secret
     * @return OAuthForApplication
     */
    public function setClientSecret(string $client_secret): OAuthForApplication
    {
        $this->client_secret = $client_secret;
        return $this;
    }


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
            'grant_type' => $this->grant_type,
            'client_id' => $this->client_id,
            'client_secret' => $this->client_secret
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
        if (empty($this->grant_type) || empty($this->client_id) || empty($this->client_secret)) {
            throw new Exception('Не заполнены обязательные свойства');
        }
    }
}