<?php
use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('vacancies');

$service->setQueryFields([
    'text' => 'Программист',
    'period' => 30,
    'no_magic' => true,
    'page' => 1,
    'per_page' => 100
]);

$data = $service->getData();
print_r($data);