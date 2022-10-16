<?php
use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('employer');

$service->setQueryFields([
    'employer_id' => 4699646,
    'locale' => 'EN',
    'host' => 'hh.kz'
]);

$data = $service->getData();
print_r($data);