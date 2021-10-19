# Tampere\PtvV11\CodeListApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV11CodeListGetAreaCodesTypeTypeGet**](CodeListApi.md#apiv11codelistgetareacodestypetypeget) | **GET** /api/v11/CodeList/GetAreaCodes/type/{type} | Gets a list of area codes filtered by area type.
[**apiV11CodeListGetCountryCodesGet**](CodeListApi.md#apiv11codelistgetcountrycodesget) | **GET** /api/v11/CodeList/GetCountryCodes | Gets a list of country codes.
[**apiV11CodeListGetLanguageCodesGet**](CodeListApi.md#apiv11codelistgetlanguagecodesget) | **GET** /api/v11/CodeList/GetLanguageCodes | Gets a list of language codes.
[**apiV11CodeListGetMunicipalityCodesGet**](CodeListApi.md#apiv11codelistgetmunicipalitycodesget) | **GET** /api/v11/CodeList/GetMunicipalityCodes | Gets a list of municipality codes.
[**apiV11CodeListGetPostalCodesGet**](CodeListApi.md#apiv11codelistgetpostalcodesget) | **GET** /api/v11/CodeList/GetPostalCodes | Gets a list of postal codes.

# **apiV11CodeListGetAreaCodesTypeTypeGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiCodeListItem[] apiV11CodeListGetAreaCodesTypeTypeGet($type)

Gets a list of area codes filtered by area type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\CodeListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | Area type

try {
    $result = $apiInstance->apiV11CodeListGetAreaCodesTypeTypeGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListApi->apiV11CodeListGetAreaCodesTypeTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Area type |

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiCodeListItem[]**](../Model/VmOpenApiCodeListItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CodeListGetCountryCodesGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiDialCodeListItem[] apiV11CodeListGetCountryCodesGet()

Gets a list of country codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\CodeListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV11CodeListGetCountryCodesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListApi->apiV11CodeListGetCountryCodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiDialCodeListItem[]**](../Model/VmOpenApiDialCodeListItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CodeListGetLanguageCodesGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiCodeListItem[] apiV11CodeListGetLanguageCodesGet()

Gets a list of language codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\CodeListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV11CodeListGetLanguageCodesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListApi->apiV11CodeListGetLanguageCodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiCodeListItem[]**](../Model/VmOpenApiCodeListItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CodeListGetMunicipalityCodesGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiCodeListItem[] apiV11CodeListGetMunicipalityCodesGet()

Gets a list of municipality codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\CodeListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->apiV11CodeListGetMunicipalityCodesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListApi->apiV11CodeListGetMunicipalityCodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiCodeListItem[]**](../Model/VmOpenApiCodeListItem.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CodeListGetPostalCodesGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiCodeListPage apiV11CodeListGetPostalCodesGet($page)

Gets a list of postal codes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\CodeListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | The page to be fetched.

try {
    $result = $apiInstance->apiV11CodeListGetPostalCodesGet($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListApi->apiV11CodeListGetPostalCodesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiCodeListPage**](../Model/VmOpenApiCodeListPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

