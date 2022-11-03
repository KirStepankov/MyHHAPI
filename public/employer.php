<?php
use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('employer');

$service->setToken('I2O65PRQJDHJPEV8HP94TGVLBJAJL53B8CAPSVCKTR3K5RPQVQ0MV8FID39LMAR4');
$service->setUserAgent('MyHHAPI/1.0 (dev-stepankoff@mail.ru)');

$service->setQueryFields([
    'employer_id' => 4699646,
    'locale' => 'EN',
    'host' => 'hh.kz'
]);

$data = $service->getData();
print_r($data);