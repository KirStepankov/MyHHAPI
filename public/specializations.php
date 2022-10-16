<?php

use MyHHAPI\MyHHAPIFactory;

$factory = new MyHHAPIFactory();
$service = $factory->getService('specializations');

$data = $service->getData();
print_r($data);