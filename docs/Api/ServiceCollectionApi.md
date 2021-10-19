# Tampere\PtvV11\ServiceCollectionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV11ServiceCollectionGet**](ServiceCollectionApi.md#apiv11servicecollectionget) | **GET** /api/v11/ServiceCollection | Gets all the published service collections within PTV as a list of service collection ids and names.  Service collections created after certain date can be fetched by adding date as query string parameter.  Service collections created before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting parameter archived to true.
[**apiV11ServiceCollectionIdGet**](ServiceCollectionApi.md#apiv11servicecollectionidget) | **GET** /api/v11/ServiceCollection/{id} | Fetches all the information related to a single service collection.
[**apiV11ServiceCollectionIdPut**](ServiceCollectionApi.md#apiv11servicecollectionidput) | **PUT** /api/v11/ServiceCollection/{id} | Updates the defined service collection with the data provided as input.
[**apiV11ServiceCollectionOrganizationGet**](ServiceCollectionApi.md#apiv11servicecollectionorganizationget) | **GET** /api/v11/ServiceCollection/organization | Gets the published service collections within PTV related to certain organization. Either organizationId or code needs to be added as a parameter.
[**apiV11ServiceCollectionPost**](ServiceCollectionApi.md#apiv11servicecollectionpost) | **POST** /api/v11/ServiceCollection | Creates a new service collection with the data provided as input.
[**apiV11ServiceCollectionSourceIdSourceIdPut**](ServiceCollectionApi.md#apiv11servicecollectionsourceidsourceidput) | **PUT** /api/v11/ServiceCollection/sourceId/{sourceId} | Updates the defined service collection with the data provided as input.

# **apiV11ServiceCollectionGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceCollectionGet($date, $dateBefore, $page, $archived)

Gets all the published service collections within PTV as a list of service collection ids and names.  Service collections created after certain date can be fetched by adding date as query string parameter.  Service collections created before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting parameter archived to true.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"date\": [                      \"The value 'rfsd' is not valid for Nullable`1.\",                      \"The date parameter is invalid.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC)
$page = 1; // int | The page number to be fetched.
$archived = false; // bool | Get archived items by setting archived to true.

try {
    $result = $apiInstance->apiV11ServiceCollectionGet($date, $dateBefore, $page, $archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCollectionApi->apiV11ServiceCollectionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC) | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]
 **archived** | **bool**| Get archived items by setting archived to true. | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceCollectionIdGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollection apiV11ServiceCollectionIdGet($id, $showHeader)

Fetches all the information related to a single service collection.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Guid
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceCollectionIdGet($id, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCollectionApi->apiV11ServiceCollectionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollection**](../Model/V11VmOpenApiServiceCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceCollectionIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollection apiV11ServiceCollectionIdPut($id, $body)

Updates the defined service collection with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceCollectionNames[0].Type\": [                      \"The Type field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Service collection identifier
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionInBase | The service collection data

try {
    $result = $apiInstance->apiV11ServiceCollectionIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCollectionApi->apiV11ServiceCollectionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Service collection identifier |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionInBase**](../Model/V11VmOpenApiServiceCollectionInBase.md)| The service collection data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollection**](../Model/V11VmOpenApiServiceCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceCollectionOrganizationGet**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiServiceCollectionsWithPaging apiV11ServiceCollectionOrganizationGet($organizationId, $code, $page)

Gets the published service collections within PTV related to certain organization. Either organizationId or code needs to be added as a parameter.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationId = "organizationId_example"; // string | Organization guid.
$code = "code_example"; // string | Organization business code.
$page = 1; // int | The page to be fetched.

try {
    $result = $apiInstance->apiV11ServiceCollectionOrganizationGet($organizationId, $code, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCollectionApi->apiV11ServiceCollectionOrganizationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization guid. | [optional]
 **code** | **string**| Organization business code. | [optional]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiServiceCollectionsWithPaging**](../Model/V10VmOpenApiServiceCollectionsWithPaging.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceCollectionPost**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollection apiV11ServiceCollectionPost($body)

Creates a new service collection with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceCollectionNames\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionIn(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionIn | The service collection data.

try {
    $result = $apiInstance->apiV11ServiceCollectionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCollectionApi->apiV11ServiceCollectionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionIn**](../Model/V11VmOpenApiServiceCollectionIn.md)| The service collection data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollection**](../Model/V11VmOpenApiServiceCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceCollectionSourceIdSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollection apiV11ServiceCollectionSourceIdSourceIdPut($sourceId, $body)

Updates the defined service collection with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceCollectionNames[0].Type\": [                      \"The Type field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceCollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sourceId = "sourceId_example"; // string | External source identifier
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionInBase | The service collection data

try {
    $result = $apiInstance->apiV11ServiceCollectionSourceIdSourceIdPut($sourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceCollectionApi->apiV11ServiceCollectionSourceIdSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceId** | **string**| External source identifier |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollectionInBase**](../Model/V11VmOpenApiServiceCollectionInBase.md)| The service collection data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceCollection**](../Model/V11VmOpenApiServiceCollection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

