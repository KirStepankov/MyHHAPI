<?php
/**
 * Тут вся инфа по авторизации
 * https://github.com/hhru/api/blob/master/docs/authorization_for_application.md
 */
use MyHHAPI\OAuth\OAuthForApplication;

$oauth = new OAuthForApplication();

$oauth->setGrantType('');
$oauth->setClientId('');
$oauth->setClientSecret('');

$token = $oauth->getAccessToken();
print_r($token);