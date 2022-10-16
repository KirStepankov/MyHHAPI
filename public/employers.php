<?php

use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('employers');

$service->setQueryFields([
    'locale' => 'EN',
    'host' => 'hh.kz'
]);

$data = $service->getData();
print_r($data);