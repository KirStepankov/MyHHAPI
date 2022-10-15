<?php
use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('vacanciesSimilar');

$service->setQueryFields([
    'idVacancy' => 70394655,
]);

$data = $service->getData();
print_r($data);