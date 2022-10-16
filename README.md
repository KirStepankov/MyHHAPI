[![Maintainability](https://api.codeclimate.com/v1/badges/745476ed0324828def23/maintainability)](https://codeclimate.com/github/KirStepankov/MyHHAPI/maintainability)
<a href="https://codeclimate.com/github/KirStepankov/MyHHAPI/test_coverage"><img src="https://api.codeclimate.com/v1/badges/745476ed0324828def23/test_coverage" /></a>

<pre>
composer require kirstepankov/myhhapi
</pre>
#### :octocat: Ведётся разработка новых сервисов! Список будет пополняться со временем

# My Headhunter API

С помощью данного репозитория вы можете получить доступ к любым методам
HH, которые описанны в офф документации.

# Предисловие

Перед началом работы с некоторыми методами **вам необходимо** зарегистрировать ваше пришложение
на сайте HH. Подробно описано тут https://github.com/hhru/api/blob/master/docs/authorization_for_application.md .
Далее необходимо записать полученные данные в файл .env

# Навигация
- [Получение вакансии по id](https://github.com/KirStepankov/MyHHAPI#%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D1%83%D0%BD%D0%B8%D0%B5-%D0%BA%D0%BE%D0%BD%D0%BA%D1%80%D0%B5%D1%82%D0%BD%D0%BE%D0%B9-%D0%B2%D0%B0%D0%BA%D0%B0%D0%BD%D1%81%D0%B8%D0%B8-%D0%BF%D0%BE-id)
- [Получение нескольких вакансий по условиям](https://github.com/KirStepankov/MyHHAPI#%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D1%83%D0%BD%D0%B8%D0%B5-%D0%B2%D0%B0%D0%BA%D0%B0%D0%BD%D1%81%D0%B8%D0%B9-%D0%BF%D0%BE-%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F%D0%BC)
- [Получение похожих вакансий относительно другой вакансии](https://github.com/KirStepankov/MyHHAPI#%D0%BF%D0%BE%D0%BB%D1%83%D1%87%D1%83%D0%BD%D0%B8%D0%B5-%D0%BF%D0%BE%D1%85%D0%BE%D0%B6%D0%B8%D1%85-%D0%B2%D0%B0%D0%BA%D0%B0%D0%BD%D1%81%D0%B8%D0%B9)
- [Поиск работодателей по параметрам](https://github.com/KirStepankov/MyHHAPI#%D0%BF%D0%BE%D0%B8%D1%81%D0%BA-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BE%D0%B4%D0%B0%D1%82%D0%B5%D0%BB%D1%8F)
- [Поиск работодателя по id](https://github.com/KirStepankov/MyHHAPI#%D0%BF%D0%BE%D0%B8%D1%81%D0%BA-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BE%D0%B4%D0%B0%D1%82%D0%B5%D0%BB%D1%8F-%D0%BF%D0%BE-id)
- [Получение всех спициальностей]()

# Список всех сервисов
:heavy_exclamation_mark: Ссылки ведут на доку HH
- vacancy ([Поиск резюме по id](https://github.com/hhru/api/blob/master/docs/vacancies.md#%D0%BF%D1%80%D0%BE%D1%81%D0%BC%D0%BE%D1%82%D1%80-%D0%B2%D0%B0%D0%BA%D0%B0%D0%BD%D1%81%D0%B8%D0%B8))
- vacancies ([Поиск вакансии по условиям](https://github.com/hhru/api/blob/master/docs/vacancies.md#%D0%BF%D0%BE%D0%B8%D1%81%D0%BA-%D0%BF%D0%BE-%D0%B2%D0%B0%D0%BA%D0%B0%D0%BD%D1%81%D0%B8%D1%8F%D0%BC))
- vacanciesSimilar ([Поисх похожих вакансий](https://github.com/hhru/api/blob/master/docs/vacancies.md#%D0%BF%D0%BE%D0%B8%D1%81%D0%BA-%D0%BF%D0%BE-%D0%B2%D0%B0%D0%BA%D0%B0%D0%BD%D1%81%D0%B8%D1%8F%D0%BC-%D0%BF%D0%BE%D1%85%D0%BE%D0%B6%D0%B8%D0%BC-%D0%BD%D0%B0-%D0%B2%D0%B0%D0%BA%D0%B0%D0%BD%D1%81%D0%B8%D1%8E))
- employers ([Поиск работодателя](https://api.hh.ru/openapi/redoc#tag/Rabotodatel/paths/~1employers/get))
- employer ([Поиск работодателя по id](https://api.hh.ru/openapi/redoc#tag/Rabotodatel/paths/~1employers~1%7Bemployer_id%7D/get))
- specializations ([Специализации](https://github.com/hhru/api/blob/master/docs/specializations.md))
- industries ([Отрасли компаний](https://api.hh.ru/openapi/redoc#tag/Obshie-spravochniki/paths/~1industries/get))

# Документация

### Получение токена
:heavy_exclamation_mark: Данный этап **не сработает** если вы не заполнили нужные поля в .env файле
```php
use MyHHAPI\OAuth\OAuthForApplication;

$oauth = new OAuthForApplication();
$token = $oauth->getAccessToken();
var_dump($token);
```

______
### Получуние конкретной вакансии по id
Вызываем фабрику
```php
use MyHHAPI\MyHHAPIFactory;
$factory = new MyHHAPIFactory();
```
В метод `getService` необходимо передать id сервиса. Все сервиси
описаны в п [**"Список всех сервисов"**](https://github.com/KirStepankov/MyHHAPI#%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B2%D1%81%D0%B5%D1%85-%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BE%D0%B2)
```php
$service = $factory->getService('vacancy');
```
В объект добавляем id вакансии с ключом `idVacancy`
```php
$service->setQueryFields([
    'idVacancy' => 00000000,
]);
```
Выводим полученные данные от АПИ
```php
$data = $service->getData();
var_dump($data);
```
______
### Получуние вакансий по условиям
Вызываем фабрику
```php
use MyHHAPI\MyHHAPIFactory;
$factory = new MyHHAPIFactory();
```
В метод `getService` необходимо передать id сервиса. Все сервиси
описаны в п [**"Список всех сервисов"**](https://github.com/KirStepankov/MyHHAPI#%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B2%D1%81%D0%B5%D1%85-%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BE%D0%B2)
```php
$service = $factory->getService('vacancies');
```
Заполняем объект обязательными и необязательными [параметрами](https://github.com/hhru/api/blob/master/docs/vacancies.md#%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81)
```php
$service->setQueryFields([
    'text' => 'Java',
]);
```
Выводим полученные данные от АПИ
```php
$data = $service->getData();
var_dump($data);
```
______
### Получуние похожих вакансий
Вызываем фабрику
```php
use MyHHAPI\MyHHAPIFactory;
$factory = new MyHHAPIFactory();
```
В метод `getService` необходимо передать id сервиса. Все сервиси
описаны в п [**"Список всех сервисов"**](https://github.com/KirStepankov/MyHHAPI#%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B2%D1%81%D0%B5%D1%85-%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BE%D0%B2)
```php
$service = $factory->getService('vacanciesSimilar');
```
В объект добавляем id вакансии с ключом `idVacancy`
```php
$service->setQueryFields([
    'idVacancy' => 00000000,
]);
```
Выводим полученные данные от АПИ
```php
$data = $service->getData();
var_dump($data);
```
______
### Поиск работодателей по параметрам
Вызываем фабрику
```php
use MyHHAPI\MyHHAPIFactory;
$factory = new MyHHAPIFactory();
```
В метод `getService` необходимо передать id сервиса. Все сервиси
описаны в п [**"Список всех сервисов"**](https://github.com/KirStepankov/MyHHAPI#%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B2%D1%81%D0%B5%D1%85-%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BE%D0%B2)
```php
$service = $factory->getService('employers');
```
В объект добавляем нужные [параметры](https://api.hh.ru/openapi/redoc#tag/Rabotodatel/paths/~1employers/get)
```php
$service->setQueryFields([
    'locale' => 'EN',
    'host' => 'hh.kz'
]);
```
Выводим полученные данные от АПИ
```php
$data = $service->getData();
var_dump($data);
```
______
### Поиск работодателя по id
Вызываем фабрику
```php
use MyHHAPI\MyHHAPIFactory;
$factory = new MyHHAPIFactory();
```
В метод `getService` необходимо передать id сервиса. Все сервиси
описаны в п [**"Список всех сервисов"**](https://github.com/KirStepankov/MyHHAPI#%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B2%D1%81%D0%B5%D1%85-%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BE%D0%B2)
```php
$service = $factory->getService('employer');
```
В объект добавляем нужные [параметры](https://api.hh.ru/openapi/redoc#tag/Rabotodatel/paths/~1employers/get). Причём `employer_id` является обязательным, а другие поля нет
```php
$service->setQueryFields([
    'employer_id' => 0000000,
    'locale' => 'EN',
    'host' => 'hh.kz'
]);
```
Выводим полученные данные от АПИ
```php
$data = $service->getData();
var_dump($data);
```
______
### Получение всех специальностей
Вызываем фабрику
```php
use MyHHAPI\MyHHAPIFactory;
$factory = new MyHHAPIFactory();
```
В метод `getService` необходимо передать id сервиса. Все сервиси
описаны в п [**"Список всех сервисов"**](https://github.com/KirStepankov/MyHHAPI#%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B2%D1%81%D0%B5%D1%85-%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BE%D0%B2)
```php
$service = $factory->getService('specializations');
```
Выводим полученные данные от АПИ
```php
$data = $service->getData();
var_dump($data);
```
______
### Получение всех отраслей компаний
Вызываем фабрику
```php
use MyHHAPI\MyHHAPIFactory;
$factory = new MyHHAPIFactory();
```
В метод `getService` необходимо передать id сервиса. Все сервиси
описаны в п [**"Список всех сервисов"**](https://github.com/KirStepankov/MyHHAPI#%D1%81%D0%BF%D0%B8%D1%81%D0%BE%D0%BA-%D0%B2%D1%81%D0%B5%D1%85-%D1%81%D0%B5%D1%80%D0%B2%D0%B8%D1%81%D0%BE%D0%B2)
```php
$service = $factory->getService('industries');
```
Выводим полученные данные от АПИ
```php
$data = $service->getData();
var_dump($data);
```