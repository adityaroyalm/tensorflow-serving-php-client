
## tensorflow-serving-php-client

`tensorflow-serving-php-client` is a framework agnostic library helps with calling machine learning models served by [tensorflow serving](https://github.com/tensorflow/serving)  from your `php application`.


## Requirements
`tensorflow-serving-php-client` requires [grpc](https://github.com/grpc/grpc/tree/master/src/php) extension which you can install by running the command below:
```zsh
sudo pecl install grpc
```

## Installation
you can install the library via `composer` by running the following command inside your project root dir
```zsh
composer require harranali/tensorflow-serving-php-client
```

## Usage

#### an example in laravel
```php
use Harranali\Tfserving\Client;
use Harranali\Tfserving\PredictMessage;
use Harranali\Tfserving\DataTypes;

Route::get('/', function () {
    $host = '192.168.99.100:9000';
    $modelName = 'simple';
    $modelVersion = 1;
    $tfsClient = new Client($host, $modelName, $modelVersion);

    $predictmessage = new PredictMessage;
    $predictmessage->setInputTensorName('a')
                   ->setInputTensorType(DataTypes::DT_INT32)
                   ->setInputTensorValue([1]);

    $response = $tfsClient->predict($predictmessage);
    return $response;
});
```

- **First** import the following classes:
```php
use Harranali\Tfserving\Client;
use Harranali\Tfserving\PredictMessage;
use Harranali\Tfserving\DataTypes;
```
- **Second** initiate the client by providing the parameters `host:port`, `modelName`, and `modelVersion`
```php
$hostPort = 'localhost:9000';
$modelName = 'simple';
$modelVersion = 1;
$tfsClient = new Client($hostPort, $modelName, $modelVersion);
```
- **Third** prepare the `predict` request message object
```php
$predictmessage = new PredictMessage;
$predictmessage->setInputTensorName('a')
               ->setInputTensorType(DataTypes::DT_INT32)
               ->setInputTensorValue([1]);
```
here is a list of all data types available in the class `DataTypes`
```php
DataTypes::DT_FLOAT
DataTypes::DT_DOUBLE
DataTypes::DT_INT32
DataTypes::DT_UINT8
DataTypes::DT_INT16
DataTypes::DT_INT8
DataTypes::DT_STRING
DataTypes::DT_COMPLEX64
DataTypes::DT_INT64
DataTypes::DT_BOOL
DataTypes::DT_QINT8
DataTypes::DT_QUINT8
DataTypes::DT_QINT32
DataTypes::DT_BFLOAT16
DataTypes::DT_QINT16
DataTypes::DT_QUINT16
DataTypes::DT_UINT16
DataTypes::DT_COMPLEX128
DataTypes::DT_HALF
DataTypes::DT_RESOURCE
DataTypes::DT_FLOAT_REF
DataTypes::DT_DOUBLE_REF
DataTypes::DT_INT32_REF
DataTypes::DT_UINT8_REF
DataTypes::DT_INT16_REF
DataTypes::DT_INT8_REF
DataTypes::DT_STRING_REF
DataTypes::DT_COMPLEX64_REF
DataTypes::DT_INT64_REF
DataTypes::DT_BOOL_REF
DataTypes::DT_QINT8_REF
DataTypes::DT_QUINT8_REF
DataTypes::DT_QINT32_REF
DataTypes::DT_BFLOAT16_REF
DataTypes::DT_QINT16_REF
DataTypes::DT_QUINT16_REF
DataTypes::DT_UINT16_REF
DataTypes::DT_COMPLEX128_REF
DataTypes::DT_HALF_REF
DataTypes::DT_RESOURCE_REF
```
- **Fourth** Making the call to the server
```php
$response = $tfsClient->predict($predictmessage);
return $response;
```
## Contributing
all kind of contributions are welcomed.
## License
`tensorflow-serving-php-client` is licensed under the [MIT license](https://opensource.org/licenses/MIT).