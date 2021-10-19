# Tampere\PtvV11\ConnectionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV11ConnectionASTIServiceChannelIdServiceChannelIdPut**](ConnectionApi.md#apiv11connectionastiservicechannelidservicechannelidput) | **PUT** /api/v11/Connection/ASTI/serviceChannelId/{serviceChannelId} | Updates connections between a service channel and services with extra data.  Request includes services for one certain service channel and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI connections for a service channel set &#x27;deleteAllServiceRelations&#x27; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
[**apiV11ConnectionASTIServiceIdServiceIdPut**](ConnectionApi.md#apiv11connectionastiserviceidserviceidput) | **PUT** /api/v11/Connection/ASTI/serviceId/{serviceId} | Updates connections between a service and service channels with extra data.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service, set &#x27;deleteAllChannelRelations&#x27; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
[**apiV11ConnectionASTIServiceSourceIdServiceSourceIdPut**](ConnectionApi.md#apiv11connectionastiservicesourceidservicesourceidput) | **PUT** /api/v11/Connection/ASTI/serviceSourceId/{serviceSourceId} | Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service set &#x27;deleteAllChannelRelations&#x27; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
[**apiV11ConnectionPost**](ConnectionApi.md#apiv11connectionpost) | **POST** /api/v11/Connection | Creates a connections between services and service channels with extra data.
[**apiV11ConnectionServiceIdServiceIdPut**](ConnectionApi.md#apiv11connectionserviceidserviceidput) | **PUT** /api/v11/Connection/serviceId/{serviceId} | Updates connections between a service and service channels with extra data.  Request includes service channels for one certain service so regular connections missing from request are removed.  ASTI connections are left as they are.  To delete all regular service channel connections for a service, set &#x27;deleteAllChannelRelations&#x27; property to true.
[**apiV11ConnectionServiceSourceIdServiceSourceIdPut**](ConnectionApi.md#apiv11connectionservicesourceidservicesourceidput) | **PUT** /api/v11/Connection/serviceSourceId/{serviceSourceId} | Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel connections for a service set &#x27;deleteAllChannelRelations&#x27; property to true.  ASTI connections are not removed - data for those connections can be updated though.
[**apiV11ConnectionSourcePost**](ConnectionApi.md#apiv11connectionsourcepost) | **POST** /api/v11/Connection/Source | Creates a connections between services and service channels with extra data. External source ids are used.

# **apiV11ConnectionASTIServiceChannelIdServiceChannelIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannels apiV11ConnectionASTIServiceChannelIdServiceChannelIdPut($serviceChannelId, $body)

Updates connections between a service channel and services with extra data.  Request includes services for one certain service channel and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI connections for a service channel set 'deleteAllServiceRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceChannelId = "serviceChannelId_example"; // string | Service channel identifier
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiChannelServicesIn(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiChannelServicesIn | A list of service channels.

try {
    $result = $apiInstance->apiV11ConnectionASTIServiceChannelIdServiceChannelIdPut($serviceChannelId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->apiV11ConnectionASTIServiceChannelIdServiceChannelIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceChannelId** | **string**| Service channel identifier |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiChannelServicesIn**](../Model/V11VmOpenApiChannelServicesIn.md)| A list of service channels. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannels**](../Model/V11VmOpenApiServiceChannels.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ConnectionASTIServiceIdServiceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ConnectionASTIServiceIdServiceIdPut($serviceId, $body)

Updates connections between a service and service channels with extra data.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service, set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceId = "serviceId_example"; // string | Service identifier
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationAstiInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationAstiInBase | A list of service channels.

try {
    $result = $apiInstance->apiV11ConnectionASTIServiceIdServiceIdPut($serviceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->apiV11ConnectionASTIServiceIdServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceId** | **string**| Service identifier |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationAstiInBase**](../Model/V11VmOpenApiServiceAndChannelRelationAstiInBase.md)| A list of service channels. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ConnectionASTIServiceSourceIdServiceSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ConnectionASTIServiceSourceIdServiceSourceIdPut($serviceSourceId, $body)

Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceSourceId = "serviceSourceId_example"; // string | External source identifier for service
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySourceAsti(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySourceAsti | A list of service channels.

try {
    $result = $apiInstance->apiV11ConnectionASTIServiceSourceIdServiceSourceIdPut($serviceSourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->apiV11ConnectionASTIServiceSourceIdServiceSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceSourceId** | **string**| External source identifier for service |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySourceAsti**](../Model/V11VmOpenApiServiceAndChannelRelationBySourceAsti.md)| A list of service channels. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ConnectionPost**
> string[] apiV11ConnectionPost($body)

Creates a connections between services and service channels with extra data.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelIn()); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelIn[] | A list of services and service channels.

try {
    $result = $apiInstance->apiV11ConnectionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->apiV11ConnectionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelIn[]**](../Model/V11VmOpenApiServiceAndChannelIn.md)| A list of services and service channels. | [optional]

### Return type

**string[]**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ConnectionServiceIdServiceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ConnectionServiceIdServiceIdPut($serviceId, $body)

Updates connections between a service and service channels with extra data.  Request includes service channels for one certain service so regular connections missing from request are removed.  ASTI connections are left as they are.  To delete all regular service channel connections for a service, set 'deleteAllChannelRelations' property to true.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceId = "serviceId_example"; // string | Service identifier
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationInBase | A list of service channels.

try {
    $result = $apiInstance->apiV11ConnectionServiceIdServiceIdPut($serviceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->apiV11ConnectionServiceIdServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceId** | **string**| Service identifier |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationInBase**](../Model/V11VmOpenApiServiceAndChannelRelationInBase.md)| A list of service channels. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ConnectionServiceSourceIdServiceSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ConnectionServiceSourceIdServiceSourceIdPut($serviceSourceId, $body)

Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel connections for a service set 'deleteAllChannelRelations' property to true.  ASTI connections are not removed - data for those connections can be updated though.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$serviceSourceId = "serviceSourceId_example"; // string | External source identifier for service
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySourceInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySourceInBase | A list of service channels.

try {
    $result = $apiInstance->apiV11ConnectionServiceSourceIdServiceSourceIdPut($serviceSourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->apiV11ConnectionServiceSourceIdServiceSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceSourceId** | **string**| External source identifier for service |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySourceInBase**](../Model/V11VmOpenApiServiceAndChannelRelationBySourceInBase.md)| A list of service channels. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ConnectionSourcePost**
> string[] apiV11ConnectionSourcePost($body)

Creates a connections between services and service channels with extra data. External source ids are used.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySource()); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySource[] | A list of services and service channels.

try {
    $result = $apiInstance->apiV11ConnectionSourcePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionApi->apiV11ConnectionSourcePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceAndChannelRelationBySource[]**](../Model/V11VmOpenApiServiceAndChannelRelationBySource.md)| A list of services and service channels. | [optional]

### Return type

**string[]**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

