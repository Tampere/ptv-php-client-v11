# Tampere\PtvV11\CommonApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV11CommonChannelsWithoutServicesGet**](CommonApi.md#apiv11commonchannelswithoutservicesget) | **GET** /api/v11/Common/ChannelsWithoutServices | Gets information of user&#x27;s organization&#x27;s channels that have no connections to services.
[**apiV11CommonEntitiesByOrganizationOrganizationIdGet**](CommonApi.md#apiv11commonentitiesbyorganizationorganizationidget) | **GET** /api/v11/Common/EntitiesByOrganization/{organizationId} | Gets a list of published services and service channels by organization.  Services/channels created/modified after certain date can be fetched by adding date as query string parameter.  Services/channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11CommonExpiringServiceChannelsGet**](CommonApi.md#apiv11commonexpiringservicechannelsget) | **GET** /api/v11/Common/ExpiringServiceChannels | Gets information of user&#x27;s organization&#x27;s expiring service channels.
[**apiV11CommonNotMaintainedServiceChannelsGet**](CommonApi.md#apiv11commonnotmaintainedservicechannelsget) | **GET** /api/v11/Common/NotMaintainedServiceChannels | Gets information of user&#x27;s organization&#x27;s not updated channels.
[**apiV11CommonNotMaintainedServicesGet**](CommonApi.md#apiv11commonnotmaintainedservicesget) | **GET** /api/v11/Common/NotMaintainedServices | Gets information of user&#x27;s organization&#x27;s not updated services.
[**apiV11CommonServicesWithoutChannelsGet**](CommonApi.md#apiv11commonserviceswithoutchannelsget) | **GET** /api/v11/Common/ServicesWithoutChannels | Gets information of user&#x27;s organization&#x27;s services that have no connections to channels.
[**apiV11CommonTranslationGet**](CommonApi.md#apiv11commontranslationget) | **GET** /api/v11/Common/Translation | Gets information of translation processes within PTV.  Translation items created/modified after certain date can be fetched by adding date as query string parameter.  Translation items created/modified before certain date can be fetched by adding dateBefore as query string parameter.

# **apiV11CommonChannelsWithoutServicesGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiTasks apiV11CommonChannelsWithoutServicesGet($page)

Gets information of user's organization's channels that have no connections to services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11CommonChannelsWithoutServicesGet($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV11CommonChannelsWithoutServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiTasks**](../Model/VmOpenApiTasks.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CommonEntitiesByOrganizationOrganizationIdGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiEntityGuidPage apiV11CommonEntitiesByOrganizationOrganizationIdGet($organizationId, $date, $dateBefore, $page)

Gets a list of published services and service channels by organization.  Services/channels created/modified after certain date can be fetched by adding date as query string parameter.  Services/channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationId = "organizationId_example"; // string | Guid
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11CommonEntitiesByOrganizationOrganizationIdGet($organizationId, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV11CommonEntitiesByOrganizationOrganizationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Guid |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiEntityGuidPage**](../Model/VmOpenApiEntityGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CommonExpiringServiceChannelsGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiExpiringTask apiV11CommonExpiringServiceChannelsGet($page, $status)

Gets information of user's organization's expiring service channels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number to be fetched.
$status = "Published"; // string | Set status to get items either in published or draft state.

try {
    $result = $apiInstance->apiV11CommonExpiringServiceChannelsGet($page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV11CommonExpiringServiceChannelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]
 **status** | **string**| Set status to get items either in published or draft state. | [optional] [default to Published]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiExpiringTask**](../Model/VmOpenApiExpiringTask.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CommonNotMaintainedServiceChannelsGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiNotUpdatedTask apiV11CommonNotMaintainedServiceChannelsGet($page, $status)

Gets information of user's organization's not updated channels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number to be fetched.
$status = "Published"; // string | Set status to get items either in published or draft state.

try {
    $result = $apiInstance->apiV11CommonNotMaintainedServiceChannelsGet($page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV11CommonNotMaintainedServiceChannelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]
 **status** | **string**| Set status to get items either in published or draft state. | [optional] [default to Published]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiNotUpdatedTask**](../Model/VmOpenApiNotUpdatedTask.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CommonNotMaintainedServicesGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiNotUpdatedTask apiV11CommonNotMaintainedServicesGet($page, $status)

Gets information of user's organization's not updated services.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number to be fetched.
$status = "Published"; // string | Set status to get items either in published or draft state.

try {
    $result = $apiInstance->apiV11CommonNotMaintainedServicesGet($page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV11CommonNotMaintainedServicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]
 **status** | **string**| Set status to get items either in published or draft state. | [optional] [default to Published]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiNotUpdatedTask**](../Model/VmOpenApiNotUpdatedTask.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CommonServicesWithoutChannelsGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiTasks apiV11CommonServicesWithoutChannelsGet($page)

Gets information of user's organization's services that have no connections to channels.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11CommonServicesWithoutChannelsGet($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV11CommonServicesWithoutChannelsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiTasks**](../Model/VmOpenApiTasks.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11CommonTranslationGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiTranslationItemsPage apiV11CommonTranslationGet($date, $dateBefore, $page)

Gets information of translation processes within PTV.  Translation items created/modified after certain date can be fetched by adding date as query string parameter.  Translation items created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\CommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11CommonTranslationGet($date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommonApi->apiV11CommonTranslationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiTranslationItemsPage**](../Model/VmOpenApiTranslationItemsPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

