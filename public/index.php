<?php

use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('vacancy');

$service->setRequiredFields([
    'idVacancy' => 70394655,
    'accessToken' => ''
]);

$data = $service->getData();
print_r($data);