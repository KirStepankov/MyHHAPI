# MyHHAPI

С помощью данного репозитория вы можете получить доступ к любым методам
HH, которые описанны в офф документации.

# Предисловие

Перед началом работы **вам необходимо** зарегистрировать ваше пришложение
на сайте HH. Подробно описано тут https://github.com/hhru/api/blob/master/docs/authorization_for_application.md .
Далее необходимо записать полученные данные в файл .env

# Список всех сервисов
:heavy_exclamation_mark: Ссылки ведут на доку HH
- vacancy ([Поиск резюме](https://github.com/hhru/api/blob/master/docs/resumes_search.md))

# Документация

### Получение токена
:heavy_exclamation_mark: Данный этап **не сработает** если вы не заполнили нужные поля в .env файле
```php
use MyHHAPI\OAuth\OAuthForApplication;

$oauth = new OAuthForApplication();
$token = $oauth->getAccessToken();
var_dump($token);
```
### Получуние конкретной вакансии по id
Вызываем фабрику
```php
use MyHHAPI\MyHHAPIFactory;
$factory = new MyHHAPIFactory();
```
В метод getService необходимо передать id сервиса. Все сервиси
описаны в п **"Список всех сервисов"**
```php
$service = $factory->getService('vacancy');
```
Заполняем объект обязательными и необязательными параметрами
```php
$service->setRequiredFields([
    'idVacancy' => 00000000,
    'accessToken' => ''
]);
```
Выводим полученные данные от АПИ
```php
$data = $service->getData();
var_dump($data);
```