<?php
use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('vacancies');

$service->setQueryFields([
    'text' => 'Java',
]);

$data = $service->getData();
print_r($data);