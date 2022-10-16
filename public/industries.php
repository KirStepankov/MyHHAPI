<?php
use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('industries');

$data = $service->getData();
print_r($data);