# Tampere\PtvV11\ServiceApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV11ServiceActiveGet**](ServiceApi.md#apiv11serviceactiveget) | **GET** /api/v11/Service/active | Gets all services within PTV as a list of service ids and names. Also services with draft and modified versions are included.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.  NOTE! This is a restricted endpoint.
[**apiV11ServiceActiveIdGet**](ServiceApi.md#apiv11serviceactiveidget) | **GET** /api/v11/Service/active/{id} | Fetches all the information related to a single service. Also services with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.
[**apiV11ServiceArchivedListGet**](ServiceApi.md#apiv11servicearchivedlistget) | **GET** /api/v11/Service/archived/list | Fetches automatically/manually archived services
[**apiV11ServiceAreaAreaCodeCodeGet**](ServiceApi.md#apiv11serviceareaareacodecodeget) | **GET** /api/v11/Service/area/{area}/code/{code} | Gets a list of published services related to defined area and code.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceGet**](ServiceApi.md#apiv11serviceget) | **GET** /api/v11/Service | Gets all the published services within PTV as a list of service ids and names.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as &#x27;Archived&#x27; and withdrawn items can be fetched by setting status parameter as &#x27;Withdrawn&#x27;.
[**apiV11ServiceIdGet**](ServiceApi.md#apiv11serviceidget) | **GET** /api/v11/Service/{id} | Fetches all the information related to a single service.
[**apiV11ServiceIdPut**](ServiceApi.md#apiv11serviceidput) | **PUT** /api/v11/Service/{id} | Updates the defined service with the data provided as input.
[**apiV11ServiceIndustrialClassGet**](ServiceApi.md#apiv11serviceindustrialclassget) | **GET** /api/v11/Service/industrialClass | Gets a list of published services for defined industrial class.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceListAreaAreaCodeCodeGet**](ServiceApi.md#apiv11servicelistareaareacodecodeget) | **GET** /api/v11/Service/list/area/{area}/code/{code} | Fetches all the information of published services related to certain area and code.  User can set serviceWithGD parameter to true to include possible attached general description data into the service data.  In this case general description related descriptions are marked with prefix &#x27;GD_&#x27; to separate them from service related descriptions.
[**apiV11ServiceListGet**](ServiceApi.md#apiv11servicelistget) | **GET** /api/v11/Service/list | Fetches all the information related to requested services.
[**apiV11ServiceListOrganizationGet**](ServiceApi.md#apiv11servicelistorganizationget) | **GET** /api/v11/Service/list/organization | Fetches all the information of the services related to certain organization. Either organizationId, code or oid needs to be added as a parameter.  User can also set serviceWithGD parameter to true to include possible attached general description data into the service data.  In this case general description related descriptions are marked with prefix &#x27;GD_&#x27; to separate them from service related descriptions.
[**apiV11ServicePost**](ServiceApi.md#apiv11servicepost) | **POST** /api/v11/Service | Creates a new service with the data provided as input.
[**apiV11ServiceServiceChannelServiceChannelIdGet**](ServiceApi.md#apiv11serviceservicechannelservicechannelidget) | **GET** /api/v11/Service/serviceChannel/{serviceChannelId} | Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.  Services joined to service channel before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceServiceClassGet**](ServiceApi.md#apiv11serviceserviceclassget) | **GET** /api/v11/Service/serviceClass | Gets a list of published services for defined service class.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceServiceWithGDIdGet**](ServiceApi.md#apiv11serviceservicewithgdidget) | **GET** /api/v11/Service/serviceWithGD/{id} | Fetches all the information related to a single service. If general description is attached also general description data is returned within the service data.  General description related descriptions are marked with prefix &#x27;GD_&#x27; to separate them from service related descriptions.
[**apiV11ServiceServiceWithGDListGet**](ServiceApi.md#apiv11serviceservicewithgdlistget) | **GET** /api/v11/Service/serviceWithGD/list | Fetches all the information related to requests services. If general description is attached to a service also general description data is returned within the service data.  General description related descriptions are marked with prefix &#x27;GD_&#x27; to separate them from service related descriptions.
[**apiV11ServiceSourceIdSourceIdPut**](ServiceApi.md#apiv11servicesourceidsourceidput) | **PUT** /api/v11/Service/sourceId/{sourceId} | Updates the defined service with the data provided as input.
[**apiV11ServiceTargetGroupGet**](ServiceApi.md#apiv11servicetargetgroupget) | **GET** /api/v11/Service/targetGroup | Gets a list of published services for defined target group.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceTypeTypeGet**](ServiceApi.md#apiv11servicetypetypeget) | **GET** /api/v11/Service/type/{type} | Gets a list of published services of defined service type.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.

# **apiV11ServiceActiveGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceActiveGet($date, $dateBefore, $page)

Gets all services within PTV as a list of service ids and names. Also services with draft and modified versions are included.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.  NOTE! This is a restricted endpoint.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"date\": [                      \"The value 'rfsd' is not valid for Nullable`1.\",                      \"The date parameter is invalid.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11ServiceActiveGet($date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceActiveGet: ', $e->getMessage(), PHP_EOL;
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

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceActiveIdGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ServiceActiveIdGet($id, $showHeader)

Fetches all the information related to a single service. Also services with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Guid
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceActiveIdGet($id, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceActiveIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceArchivedListGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiArchivedServiceBase[] apiV11ServiceArchivedListGet($archivingType, $organizationId, $take, $minArchivingDate, $maxArchivingDate, $skip)

Fetches automatically/manually archived services

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$archivingType = new \Tampere\PtvV11\PtvModel\ArchivingType(); // \Tampere\PtvV11\PtvModel\ArchivingType | How service was archived.
$organizationId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return only services belonging to this organization.
$take = 56; // int | How many services to return.
$minArchivingDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return only services archived after this time.  ISO 8601 format (e.g. 2020-10-26T05:24:11+00:00).
$maxArchivingDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return only services archived before this time.  ISO 8601 format (e.g. 2020-10-26T05:24:11+00:00).
$skip = 56; // int | Skip the first n services.

try {
    $result = $apiInstance->apiV11ServiceArchivedListGet($archivingType, $organizationId, $take, $minArchivingDate, $maxArchivingDate, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceArchivedListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **archivingType** | [**\Tampere\PtvV11\PtvModel\ArchivingType**](../Model/.md)| How service was archived. |
 **organizationId** | [**string**](../Model/.md)| Return only services belonging to this organization. |
 **take** | **int**| How many services to return. |
 **minArchivingDate** | **\DateTime**| Return only services archived after this time.  ISO 8601 format (e.g. 2020-10-26T05:24:11+00:00). | [optional]
 **maxArchivingDate** | **\DateTime**| Return only services archived before this time.  ISO 8601 format (e.g. 2020-10-26T05:24:11+00:00). | [optional]
 **skip** | **int**| Skip the first n services. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiArchivedServiceBase[]**](../Model/VmOpenApiArchivedServiceBase.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceAreaAreaCodeCodeGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $date, $dateBefore, $page)

Gets a list of published services related to defined area and code.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area = "area_example"; // string | The area type
$code = "code_example"; // string | The code related to area
$includeWholeCountry = true; // bool | Indicates if services marked for whole country (or whole country except Åland) should be included.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11ServiceAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceAreaAreaCodeCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area** | **string**| The area type |
 **code** | **string**| The code related to area |
 **includeWholeCountry** | **bool**| Indicates if services marked for whole country (or whole country except Åland) should be included. | [optional]
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceGet($date, $dateBefore, $page, $status)

Gets all the published services within PTV as a list of service ids and names.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as 'Archived' and withdrawn items can be fetched by setting status parameter as 'Withdrawn'.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"date\": [                      \"The value 'rfsd' is not valid for Nullable`1.\",                      \"The date parameter is invalid.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.
$status = "Published"; // string | Set status to get items either in published, archived or withdrawn state.

try {
    $result = $apiInstance->apiV11ServiceGet($date, $dateBefore, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]
 **status** | **string**| Set status to get items either in published, archived or withdrawn state. | [optional] [default to Published]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceIdGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ServiceIdGet($id, $showHeader)

Fetches all the information related to a single service.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Guid
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceIdGet($id, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ServiceIdPut($id, $body, $attachProposedChannels)

Updates the defined service with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceNames[0].Type\": [                      \"The Type field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Service identifier
$body = new \Tampere\PtvV11\PtvModel\V9VmOpenApiServiceInBase(); // \Tampere\PtvV11\PtvModel\V9VmOpenApiServiceInBase | The service data
$attachProposedChannels = true; // bool | Indicates if service channels attached into general description should automatically be attached into the service.

try {
    $result = $apiInstance->apiV11ServiceIdPut($id, $body, $attachProposedChannels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Service identifier |
 **body** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiServiceInBase**](../Model/V9VmOpenApiServiceInBase.md)| The service data | [optional]
 **attachProposedChannels** | **bool**| Indicates if service channels attached into general description should automatically be attached into the service. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceIndustrialClassGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceIndustrialClassGet($uri, $date, $dateBefore, $page)

Gets a list of published services for defined industrial class.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uri = "uri_example"; // string | Industrial class uri, e.g. http://www.stat.fi/meta/luokitukset/toimiala/001-2008/46909
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11ServiceIndustrialClassGet($uri, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceIndustrialClassGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uri** | **string**| Industrial class uri, e.g. http://www.stat.fi/meta/luokitukset/toimiala/001-2008/46909 | [optional]
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceListAreaAreaCodeCodeGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServicesWithPaging apiV11ServiceListAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $serviceWithGD, $page, $showHeader)

Fetches all the information of published services related to certain area and code.  User can set serviceWithGD parameter to true to include possible attached general description data into the service data.  In this case general description related descriptions are marked with prefix 'GD_' to separate them from service related descriptions.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area = "area_example"; // string | The area type.
$code = "code_example"; // string | The code related to area.
$includeWholeCountry = false; // bool | Indicates if services marked to provide services for whole country (or whole country except Åland) should be included.
$serviceWithGD = false; // bool | Indicates if general description data should be attached within the service data.
$page = 1; // int | The page to be fetched.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceListAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $serviceWithGD, $page, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceListAreaAreaCodeCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area** | **string**| The area type. |
 **code** | **string**| The code related to area. |
 **includeWholeCountry** | **bool**| Indicates if services marked to provide services for whole country (or whole country except Åland) should be included. | [optional] [default to false]
 **serviceWithGD** | **bool**| Indicates if general description data should be attached within the service data. | [optional] [default to false]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServicesWithPaging**](../Model/V11VmOpenApiServicesWithPaging.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceListGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService[] apiV11ServiceListGet($guids, $showHeader)

Fetches all the information related to requested services.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$guids = "guids_example"; // string | Comma separated list of guids. Max 100 can be added into list.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceListGet($guids, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guids** | **string**| Comma separated list of guids. Max 100 can be added into list. | [optional]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService[]**](../Model/V11VmOpenApiService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceListOrganizationGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServicesWithPaging apiV11ServiceListOrganizationGet($organizationId, $code, $oid, $serviceWithGD, $page, $showHeader)

Fetches all the information of the services related to certain organization. Either organizationId, code or oid needs to be added as a parameter.  User can also set serviceWithGD parameter to true to include possible attached general description data into the service data.  In this case general description related descriptions are marked with prefix 'GD_' to separate them from service related descriptions.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationId = "organizationId_example"; // string | Organization guid.
$code = "code_example"; // string | Organization business code.
$oid = "oid_example"; // string | Organization oid.
$serviceWithGD = false; // bool | Indicates if general description data should be attached within the service data.
$page = 1; // int | The page to be fetched.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceListOrganizationGet($organizationId, $code, $oid, $serviceWithGD, $page, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceListOrganizationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization guid. | [optional]
 **code** | **string**| Organization business code. | [optional]
 **oid** | **string**| Organization oid. | [optional]
 **serviceWithGD** | **bool**| Indicates if general description data should be attached within the service data. | [optional] [default to false]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServicesWithPaging**](../Model/V11VmOpenApiServicesWithPaging.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServicePost**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ServicePost($body, $attachProposedChannels)

Creates a new service with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceNames\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V9VmOpenApiServiceIn(); // \Tampere\PtvV11\PtvModel\V9VmOpenApiServiceIn | The service data.
$attachProposedChannels = true; // bool | Indicates if service channels attached into general description should automatically be attached into the service.

try {
    $result = $apiInstance->apiV11ServicePost($body, $attachProposedChannels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiServiceIn**](../Model/V9VmOpenApiServiceIn.md)| The service data. | [optional]
 **attachProposedChannels** | **bool**| Indicates if service channels attached into general description should automatically be attached into the service. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceServiceChannelServiceChannelIdGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceServiceChannelServiceChannelIdGet($serviceChannelId, $date, $dateBefore, $page)

Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.  Services joined to service channel before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serviceChannelId = "serviceChannelId_example"; // string | Guid
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11ServiceServiceChannelServiceChannelIdGet($serviceChannelId, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceServiceChannelServiceChannelIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **serviceChannelId** | **string**| Guid |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceServiceClassGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceServiceClassGet($uri, $date, $dateBefore, $page)

Gets a list of published services for defined service class.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uri = "uri_example"; // string | Service class uri, e.g. http://urn.fi/URN:NBN:fi:au:ptvl:v1065
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11ServiceServiceClassGet($uri, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceServiceClassGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uri** | **string**| Service class uri, e.g. http://urn.fi/URN:NBN:fi:au:ptvl:v1065 | [optional]
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceServiceWithGDIdGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ServiceServiceWithGDIdGet($id, $showHeader)

Fetches all the information related to a single service. If general description is attached also general description data is returned within the service data.  General description related descriptions are marked with prefix 'GD_' to separate them from service related descriptions.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Guid
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceServiceWithGDIdGet($id, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceServiceWithGDIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceServiceWithGDListGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService[] apiV11ServiceServiceWithGDListGet($guids, $showHeader)

Fetches all the information related to requests services. If general description is attached to a service also general description data is returned within the service data.  General description related descriptions are marked with prefix 'GD_' to separate them from service related descriptions.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$guids = "guids_example"; // string | Comma separated list of guids. Max 100 can be added into list.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceServiceWithGDListGet($guids, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceServiceWithGDListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guids** | **string**| Comma separated list of guids. Max 100 can be added into list. | [optional]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService[]**](../Model/V11VmOpenApiService.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceSourceIdSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiService apiV11ServiceSourceIdSourceIdPut($sourceId, $body, $attachProposedChannels)

Updates the defined service with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceNames[0].Type\": [                      \"The Type field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sourceId = "sourceId_example"; // string | External source identifier
$body = new \Tampere\PtvV11\PtvModel\V9VmOpenApiServiceInBase(); // \Tampere\PtvV11\PtvModel\V9VmOpenApiServiceInBase | The service data
$attachProposedChannels = true; // bool | Indicates if service channels attached into general description should automatically be attached into the service.

try {
    $result = $apiInstance->apiV11ServiceSourceIdSourceIdPut($sourceId, $body, $attachProposedChannels);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceSourceIdSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceId** | **string**| External source identifier |
 **body** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiServiceInBase**](../Model/V9VmOpenApiServiceInBase.md)| The service data | [optional]
 **attachProposedChannels** | **bool**| Indicates if service channels attached into general description should automatically be attached into the service. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiService**](../Model/V11VmOpenApiService.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceTargetGroupGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceTargetGroupGet($uri, $date, $dateBefore, $page)

Gets a list of published services for defined target group.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uri = "uri_example"; // string | Target group uri, e.g. http://urn.fi/URN:NBN:fi:au:ptvl:v2001
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11ServiceTargetGroupGet($uri, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceTargetGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uri** | **string**| Target group uri, e.g. http://urn.fi/URN:NBN:fi:au:ptvl:v2001 | [optional]
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceTypeTypeGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceTypeTypeGet($type, $date, $dateBefore, $page)

Gets a list of published services of defined service type.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | Service type
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11ServiceTypeTypeGet($type, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->apiV11ServiceTypeTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Service type |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

