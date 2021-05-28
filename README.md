# Redsys query PHP

Allow query order transactions done into spanish gateway banks that uses Sermepa/Redsys.

This is used into webservice located in /apl02/services/SerClsWSConsulta.

The spanish documentation is located in 'Consultas SOAP HMAC SHA256 2.5', in root folder.

@IMPORTANT: Right now, the only services covered by this library are  'Transacción Simple' and 'Monitor Masiva'.

## Installation

Use composer:
```bash
composer require codibit/redsys-query-php
```

## Examples

### Get single transaction
This service allows get the redsys transactions by id. 

Example (also available in examples/get_transaction.php:


```php

<?php
require './vendor/autoload.php';

use RedsysConsultasPHP\Client\Client;

$url = 'https://sis-t.redsys.es:25443/apl02/services/SerClsWSConsulta';
$logger = new \Monolog\Logger;('log');
$logger->pushHandler(new \Monolog\Handler\RotatingFileHandler('dir_to_log/name_of_log.log'));
$config = [
  'logger' => $logger,
  'logger_format' => '{request}',
];
$client = new Client($url, 'Introduce your merchant password', $config);

$order = 'Introduce your order';
$terminal = 'Introduce your terminal';
$merchant_code = 'Introduce your merchant code';
$response = $client->getTransaction($order, $terminal, $merchant_code);

print_r($response);

```
### Get multiple transactions
This service allows get the redsys transactions between two dates. 

Example:
```php

<?php
require './vendor/autoload.php';

use RedsysConsultasPHP\Client\Client;

$url = 'https://sis-t.redsys.es:25443/apl02/services/SerClsWSConsulta';
$logger = new \Monolog\Logger;('log');
$logger->pushHandler(new \Monolog\Handler\RotatingFileHandler('dir_to_log/name_of_log.log'));
$config = [
  'logger' => $logger,
  'logger_format' => '{request}',
];
$client = new Client($url, 'Introduce your merchant password', $config);

$terminal = 'Introduce your terminal';
$merchant_code = 'Introduce your merchant code';
// Note: Period shouldn't be bigger than 15 days and start date can't be older than 1 year.
$start_date = "2021-05-01-00.00.00.000000"; // Y-m-d-H.i.s.000000
$end_date = "2021-05-14-23.59.59.000000"; // Y-m-d-H.i.s.000000


$response = $client->getMonitorMasiva($terminal, $merchant_code, $start_date, $end_date);

print_r($response);

```

