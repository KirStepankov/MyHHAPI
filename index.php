<?php
require 'vendor/autoload.php';

const BASE_API = 'https://api.hh.ru/';
const BASE_USER_AGENT = 'User-Agent: MyHHAPI/1.0 (dev-stepankoff@mail.ru)';

require "public/$argv[1].php";
