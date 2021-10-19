# Tampere\PtvV11\GeneralDescriptionApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV11GeneralDescriptionGet**](GeneralDescriptionApi.md#apiv11generaldescriptionget) | **GET** /api/v11/GeneralDescription | Gets all the statutory service general descriptions within PTV as a list of ids and names.  General descriptions created/modified after certain date can be fetched by adding date as query string parameter.  General descriptions created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11GeneralDescriptionIdGet**](GeneralDescriptionApi.md#apiv11generaldescriptionidget) | **GET** /api/v11/GeneralDescription/{id} | Fetches all the information related to a single statutory service general description.
[**apiV11GeneralDescriptionIdPut**](GeneralDescriptionApi.md#apiv11generaldescriptionidput) | **PUT** /api/v11/GeneralDescription/{id} | Updates the defined general description with the data provided as input.
[**apiV11GeneralDescriptionListGet**](GeneralDescriptionApi.md#apiv11generaldescriptionlistget) | **GET** /api/v11/GeneralDescription/list | Fetches all the information related to requested statutory service general descriptions.
[**apiV11GeneralDescriptionNewGdListGet**](GeneralDescriptionApi.md#apiv11generaldescriptionnewgdlistget) | **GET** /api/v11/GeneralDescription/newGdList | Gets the new statutory service general descriptions within PTV as a list of ids and names.
[**apiV11GeneralDescriptionPost**](GeneralDescriptionApi.md#apiv11generaldescriptionpost) | **POST** /api/v11/GeneralDescription | Creates a new general description with the data provided as input.

# **apiV11GeneralDescriptionGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11GeneralDescriptionGet($date, $dateBefore, $page)

Gets all the statutory service general descriptions within PTV as a list of ids and names.  General descriptions created/modified after certain date can be fetched by adding date as query string parameter.  General descriptions created/modified before certain date can be fetched by adding dateBefore as query string parameter.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                  \"Names\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\GeneralDescriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page to be fetched. Page numbering starts from one.

try {
    $result = $apiInstance->apiV11GeneralDescriptionGet($date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDescriptionApi->apiV11GeneralDescriptionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page to be fetched. Page numbering starts from one. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11GeneralDescriptionIdGet**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescription apiV11GeneralDescriptionIdGet($id, $showHeader)

Fetches all the information related to a single statutory service general description.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\GeneralDescriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Statutory service general description guid (id of the entity) to fetch.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11GeneralDescriptionIdGet($id, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDescriptionApi->apiV11GeneralDescriptionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Statutory service general description guid (id of the entity) to fetch. |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescription**](../Model/V10VmOpenApiGeneralDescription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11GeneralDescriptionIdPut**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescription apiV11GeneralDescriptionIdPut($id, $body)

Updates the defined general description with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                  \"Names\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\GeneralDescriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Statutory service general description identifier
$body = new \Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescriptionInBase(); // \Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescriptionInBase | The general description data.

try {
    $result = $apiInstance->apiV11GeneralDescriptionIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDescriptionApi->apiV11GeneralDescriptionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Statutory service general description identifier |
 **body** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescriptionInBase**](../Model/V10VmOpenApiGeneralDescriptionInBase.md)| The general description data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescription**](../Model/V10VmOpenApiGeneralDescription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11GeneralDescriptionListGet**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescription[] apiV11GeneralDescriptionListGet($guids, $showHeader)

Fetches all the information related to requested statutory service general descriptions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\GeneralDescriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$guids = "guids_example"; // string | Comma separated list of guids. Max 100 can be added into list.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11GeneralDescriptionListGet($guids, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDescriptionApi->apiV11GeneralDescriptionListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guids** | **string**| Comma separated list of guids. Max 100 can be added into list. | [optional]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescription[]**](../Model/V10VmOpenApiGeneralDescription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11GeneralDescriptionNewGdListGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11GeneralDescriptionNewGdListGet($page)

Gets the new statutory service general descriptions within PTV as a list of ids and names.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\GeneralDescriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The page to be fetched. Page numbering starts from one.

try {
    $result = $apiInstance->apiV11GeneralDescriptionNewGdListGet($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDescriptionApi->apiV11GeneralDescriptionNewGdListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to be fetched. Page numbering starts from one. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11GeneralDescriptionPost**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescription apiV11GeneralDescriptionPost($body)

Creates a new general description with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                  \"Names\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\GeneralDescriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescriptionIn(); // \Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescriptionIn | The general description data.

try {
    $result = $apiInstance->apiV11GeneralDescriptionPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralDescriptionApi->apiV11GeneralDescriptionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescriptionIn**](../Model/V10VmOpenApiGeneralDescriptionIn.md)| The general description data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiGeneralDescription**](../Model/V10VmOpenApiGeneralDescription.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

