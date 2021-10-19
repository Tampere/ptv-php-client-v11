# Tampere\PtvV11\ServiceChannelApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV11ServiceChannelActiveGet**](ServiceChannelApi.md#apiv11servicechannelactiveget) | **GET** /api/v11/ServiceChannel/active | Gets all service channels within PTV as a list of service channel ids and names. Also service channels with draft and modified versions are included.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Certain type of service channels can be fetched by setting query string parameter type.  NOTE! This is a restricted endpoint.
[**apiV11ServiceChannelActiveIdGet**](ServiceChannelApi.md#apiv11servicechannelactiveidget) | **GET** /api/v11/ServiceChannel/active/{id} | Fetches all the information related to a single service channel. Also service channels with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.
[**apiV11ServiceChannelArchivedListGet**](ServiceChannelApi.md#apiv11servicechannelarchivedlistget) | **GET** /api/v11/ServiceChannel/archived/list | Fetches automatically/manually archived service channels
[**apiV11ServiceChannelAreaAreaCodeCodeGet**](ServiceChannelApi.md#apiv11servicechannelareaareacodecodeget) | **GET** /api/v11/ServiceChannel/area/{area}/code/{code} | Gets a list of service channels related to defined area and code.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceChannelEChannelIdPut**](ServiceChannelApi.md#apiv11servicechannelechannelidput) | **PUT** /api/v11/ServiceChannel/EChannel/{id} | Updates electronic channel with the data provided as input.
[**apiV11ServiceChannelEChannelPost**](ServiceChannelApi.md#apiv11servicechannelechannelpost) | **POST** /api/v11/ServiceChannel/EChannel | Creates a new electronic channel with the data provided as input.
[**apiV11ServiceChannelEChannelSourceIdSourceIdPut**](ServiceChannelApi.md#apiv11servicechannelechannelsourceidsourceidput) | **PUT** /api/v11/ServiceChannel/EChannel/sourceId/{sourceId} | Updates electronic channel with the data provided as input.
[**apiV11ServiceChannelGet**](ServiceChannelApi.md#apiv11servicechannelget) | **GET** /api/v11/ServiceChannel | Gets all published service channels within PTV as a list of service channel ids and names.  Service channels created/modified after certain date can be fetched by adding date as query string parameter  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as &#x27;Archived&#x27; and withdrawn items can be fetched by setting status parameter as &#x27;Withdrawn&#x27;.
[**apiV11ServiceChannelIdGet**](ServiceChannelApi.md#apiv11servicechannelidget) | **GET** /api/v11/ServiceChannel/{id} | Fetches all the information related to a single service channel.
[**apiV11ServiceChannelListAreaAreaCodeCodeGet**](ServiceChannelApi.md#apiv11servicechannellistareaareacodecodeget) | **GET** /api/v11/ServiceChannel/list/area/{area}/code/{code} | Gets a list of service channels related to defined area and code.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceChannelListGet**](ServiceChannelApi.md#apiv11servicechannellistget) | **GET** /api/v11/ServiceChannel/list | Fetches all the information related to requested service channels.
[**apiV11ServiceChannelListOrganizationGet**](ServiceChannelApi.md#apiv11servicechannellistorganizationget) | **GET** /api/v11/ServiceChannel/list/organization | Fetches all the information of service channels related to certain organization. Either organizationId, code or oid needs to be added as a parameter.
[**apiV11ServiceChannelOrganizationOrganizationIdGet**](ServiceChannelApi.md#apiv11servicechannelorganizationorganizationidget) | **GET** /api/v11/ServiceChannel/organization/{organizationId} | Gets a list of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceChannelOrganizationOrganizationIdTypeTypeGet**](ServiceChannelApi.md#apiv11servicechannelorganizationorganizationidtypetypeget) | **GET** /api/v11/ServiceChannel/organization/{organizationId}/type/{type} | Gets a list of certain type of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceChannelPhoneIdPut**](ServiceChannelApi.md#apiv11servicechannelphoneidput) | **PUT** /api/v11/ServiceChannel/Phone/{id} | Updates phone channel with the data provided as input.
[**apiV11ServiceChannelPhonePost**](ServiceChannelApi.md#apiv11servicechannelphonepost) | **POST** /api/v11/ServiceChannel/Phone | Creates a new phone channel with the data provided as input.
[**apiV11ServiceChannelPhoneSourceIdSourceIdPut**](ServiceChannelApi.md#apiv11servicechannelphonesourceidsourceidput) | **PUT** /api/v11/ServiceChannel/Phone/sourceId/{sourceId} | Updates phone channel with the data provided as input.
[**apiV11ServiceChannelPrintableFormIdPut**](ServiceChannelApi.md#apiv11servicechannelprintableformidput) | **PUT** /api/v11/ServiceChannel/PrintableForm/{id} | Updates printable form channel with the data provided as input.
[**apiV11ServiceChannelPrintableFormPost**](ServiceChannelApi.md#apiv11servicechannelprintableformpost) | **POST** /api/v11/ServiceChannel/PrintableForm | Creates a new printable form channel with the data provided as input.
[**apiV11ServiceChannelPrintableFormSourceIdSourceIdPut**](ServiceChannelApi.md#apiv11servicechannelprintableformsourceidsourceidput) | **PUT** /api/v11/ServiceChannel/PrintableForm/sourceId/{sourceId} | Updates printable form channel with the data provided as input.
[**apiV11ServiceChannelServiceLocationIdPut**](ServiceChannelApi.md#apiv11servicechannelservicelocationidput) | **PUT** /api/v11/ServiceChannel/ServiceLocation/{id} | Updates service location channel with the data provided as input.
[**apiV11ServiceChannelServiceLocationPost**](ServiceChannelApi.md#apiv11servicechannelservicelocationpost) | **POST** /api/v11/ServiceChannel/ServiceLocation | Creates a new service location channel with the data provided as input.
[**apiV11ServiceChannelServiceLocationSourceIdSourceIdPut**](ServiceChannelApi.md#apiv11servicechannelservicelocationsourceidsourceidput) | **PUT** /api/v11/ServiceChannel/ServiceLocation/sourceId/{sourceId} | Updates service location channel with the data provided as input.
[**apiV11ServiceChannelTypeTypeGet**](ServiceChannelApi.md#apiv11servicechanneltypetypeget) | **GET** /api/v11/ServiceChannel/type/{type} | Gets a list of certain type of published service channels.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11ServiceChannelWebPageIdPut**](ServiceChannelApi.md#apiv11servicechannelwebpageidput) | **PUT** /api/v11/ServiceChannel/WebPage/{id} | Updates webpage channel with the data provided as input.
[**apiV11ServiceChannelWebPagePost**](ServiceChannelApi.md#apiv11servicechannelwebpagepost) | **POST** /api/v11/ServiceChannel/WebPage | Creates a new web page channel with the data provided as input.
[**apiV11ServiceChannelWebPageSourceIdSourceIdPut**](ServiceChannelApi.md#apiv11servicechannelwebpagesourceidsourceidput) | **PUT** /api/v11/ServiceChannel/WebPage/sourceId/{sourceId} | Updates webpage channel with the data provided as input.

# **apiV11ServiceChannelActiveGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceChannelActiveGet($date, $dateBefore, $type, $page)

Gets all service channels within PTV as a list of service channel ids and names. Also service channels with draft and modified versions are included.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Certain type of service channels can be fetched by setting query string parameter type.  NOTE! This is a restricted endpoint.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"date\": [                   \"The value '-5' is not valid for Nullable`1.\",                   \"The date parameter is invalid.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$type = "type_example"; // string | Service channel type
$page = 1; // int | The page to be fetched.

try {
    $result = $apiInstance->apiV11ServiceChannelActiveGet($date, $dateBefore, $type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelActiveGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **type** | **string**| Service channel type | [optional]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelActiveIdGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannels apiV11ServiceChannelActiveIdGet($id, $showHeader)

Fetches all the information related to a single service channel. Also service channels with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.

<br>Notice! The returned object is one of the following: <i>V11VmOpenApiElectronicChannel</i> or <i>V11VmOpenApiPhoneChannel</i> or               <i>V11VmOpenApiPrintableFormChannel</i> or <i>V11VmOpenApiServiceLocationChannel</i> or <i>V11mOpenApiWebPageChannel</i>  <br>The returned object depends on the type of the channel. For example if the channel is phone channel then V11VmOpenApiPhoneChannel object is returned.  <br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"id\": [                     \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Guid
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceChannelActiveIdGet($id, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelActiveIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannels**](../Model/V11VmOpenApiServiceChannels.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelArchivedListGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiArchivedServiceChannelBase[] apiV11ServiceChannelArchivedListGet($archivingType, $organizationId, $take, $minArchivingDate, $maxArchivingDate, $skip)

Fetches automatically/manually archived service channels

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$archivingType = new \Tampere\PtvV11\PtvModel\ArchivingType(); // \Tampere\PtvV11\PtvModel\ArchivingType | How channel was archived.
$organizationId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Return only channels belonging to this organization.
$take = 56; // int | How many channels to return.
$minArchivingDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return only channels archived after this time.  ISO 8601 format (e.g. 2020-10-26T05:24:11+00:00).
$maxArchivingDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return only channels archived before this time.  ISO 8601 format (e.g. 2020-10-26T05:24:11+00:00).
$skip = 56; // int | Skip the first n channels.

try {
    $result = $apiInstance->apiV11ServiceChannelArchivedListGet($archivingType, $organizationId, $take, $minArchivingDate, $maxArchivingDate, $skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelArchivedListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **archivingType** | [**\Tampere\PtvV11\PtvModel\ArchivingType**](../Model/.md)| How channel was archived. |
 **organizationId** | [**string**](../Model/.md)| Return only channels belonging to this organization. |
 **take** | **int**| How many channels to return. |
 **minArchivingDate** | **\DateTime**| Return only channels archived after this time.  ISO 8601 format (e.g. 2020-10-26T05:24:11+00:00). | [optional]
 **maxArchivingDate** | **\DateTime**| Return only channels archived before this time.  ISO 8601 format (e.g. 2020-10-26T05:24:11+00:00). | [optional]
 **skip** | **int**| Skip the first n channels. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiArchivedServiceChannelBase[]**](../Model/VmOpenApiArchivedServiceChannelBase.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelAreaAreaCodeCodeGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceChannelAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $date, $dateBefore, $page)

Gets a list of service channels related to defined area and code.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"type\": [                     \"The field is invalid. Please use one of these: 'EChannel, WebPage, PrintableForm, Phone, ServiceLocation'.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area = "area_example"; // string | The area type
$code = "code_example"; // string | The area code
$includeWholeCountry = true; // bool | Indicates if service channels marked for whole country (or whole country except Åland) should be included.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page to be fetched.

try {
    $result = $apiInstance->apiV11ServiceChannelAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelAreaAreaCodeCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area** | **string**| The area type |
 **code** | **string**| The area code |
 **includeWholeCountry** | **bool**| Indicates if service channels marked for whole country (or whole country except Åland) should be included. | [optional]
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelEChannelIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel apiV11ServiceChannelEChannelIdPut($id, $body)

Updates electronic channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | electronic channel id
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelInBase | electronic channel data

try {
    $result = $apiInstance->apiV11ServiceChannelEChannelIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelEChannelIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| electronic channel id |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelInBase**](../Model/V11VmOpenApiElectronicChannelInBase.md)| electronic channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel**](../Model/V11VmOpenApiElectronicChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelEChannelPost**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel apiV11ServiceChannelEChannelPost($body)

Creates a new electronic channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelIn(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelIn | The electronic channel data.

try {
    $result = $apiInstance->apiV11ServiceChannelEChannelPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelEChannelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelIn**](../Model/V11VmOpenApiElectronicChannelIn.md)| The electronic channel data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel**](../Model/V11VmOpenApiElectronicChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelEChannelSourceIdSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel apiV11ServiceChannelEChannelSourceIdSourceIdPut($sourceId, $body)

Updates electronic channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sourceId = "sourceId_example"; // string | electronic channel external source id
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelInBase | electronic channel data

try {
    $result = $apiInstance->apiV11ServiceChannelEChannelSourceIdSourceIdPut($sourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelEChannelSourceIdSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceId** | **string**| electronic channel external source id |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannelInBase**](../Model/V11VmOpenApiElectronicChannelInBase.md)| electronic channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel**](../Model/V11VmOpenApiElectronicChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceChannelGet($date, $dateBefore, $organizationId, $code, $oid, $isVisibleForAll, $page, $status)

Gets all published service channels within PTV as a list of service channel ids and names.  Service channels created/modified after certain date can be fetched by adding date as query string parameter  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as 'Archived' and withdrawn items can be fetched by setting status parameter as 'Withdrawn'.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"date\": [                   \"The value '-5' is not valid for Nullable`1.\",                   \"The date parameter is invalid.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC)
$organizationId = "organizationId_example"; // string | You can restrict the result set by setting organization guid.
$code = "code_example"; // string | You can restrict the result set by setting organization business code.
$oid = "oid_example"; // string | You can restrict the result set by setting organization oid.
$isVisibleForAll = false; // bool | When set to true only service channels marked as isVisibleForAll are returned.
$page = 1; // int | The page to be fetched.
$status = "Published"; // string | Set status to get items either in published, archived or withdrawn state.

try {
    $result = $apiInstance->apiV11ServiceChannelGet($date, $dateBefore, $organizationId, $code, $oid, $isVisibleForAll, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC) | [optional]
 **organizationId** | **string**| You can restrict the result set by setting organization guid. | [optional]
 **code** | **string**| You can restrict the result set by setting organization business code. | [optional]
 **oid** | **string**| You can restrict the result set by setting organization oid. | [optional]
 **isVisibleForAll** | **bool**| When set to true only service channels marked as isVisibleForAll are returned. | [optional] [default to false]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]
 **status** | **string**| Set status to get items either in published, archived or withdrawn state. | [optional] [default to Published]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelIdGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannels apiV11ServiceChannelIdGet($id, $showHeader)

Fetches all the information related to a single service channel.

<br>Notice! The returned object is one of the following: <i>V11VmOpenApiElectronicChannel</i> or <i>V11VmOpenApiPhoneChannel</i> or               <i>V11VmOpenApiPrintableFormChannel</i> or <i>V11VmOpenApiServiceLocationChannel</i> or <i>V11VmOpenApiWebPageChannel</i>  <br>The returned object depends on the type of the channel. For example if the channel is phone channel then V11VmOpenApiPhoneChannel object is returned.  <br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"id\": [                     \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Guid
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceChannelIdGet($id, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannels**](../Model/V11VmOpenApiServiceChannels.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelListAreaAreaCodeCodeGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannelsWithPaging apiV11ServiceChannelListAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $page, $showHeader)

Gets a list of service channels related to defined area and code.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.

<br>Notice! The returned itemList object includes items which can be one of the following: <i>V11VmOpenApiElectronicChannel</i> or <i>V11VmOpenApiPhoneChannel</i> or               <i>V11VmOpenApiPrintableFormChannel</i> or <i>V11VmOpenApiServiceLocationChannel</i> or <i>V11VmOpenApiWebPageChannel</i>  <br>The returned item type within itemList depends on the type of the channel. For example if the channel is phone channel then V11VmOpenApiPhoneChannel object is returned.  <br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"type\": [                     \"The field is invalid. Please use one of these: 'EChannel, WebPage, PrintableForm, Phone, ServiceLocation'.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area = "area_example"; // string | The area type
$code = "code_example"; // string | The area code
$includeWholeCountry = true; // bool | Indicates if service channels marked for whole country (or whole country except Åland) should be included.
$page = 1; // int | The page to be fetched.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceChannelListAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $page, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelListAreaAreaCodeCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area** | **string**| The area type |
 **code** | **string**| The area code |
 **includeWholeCountry** | **bool**| Indicates if service channels marked for whole country (or whole country except Åland) should be included. | [optional]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannelsWithPaging**](../Model/V11VmOpenApiServiceChannelsWithPaging.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelListGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannels[] apiV11ServiceChannelListGet($guids, $showHeader)

Fetches all the information related to requested service channels.

<br>Notice! The returned object is one of the following: <i>V11VmOpenApiElectronicChannel</i> or <i>V11VmOpenApiPhoneChannel</i> or               <i>V11VmOpenApiPrintableFormChannel</i> or <i>V11VmOpenApiServiceLocationChannel</i> or <i>V11VmOpenApiWebPageChannel</i>  <br>The returned object depends on the type of the channel. For example if the channel is phone channel then V11VmOpenApiPhoneChannel object is returned.  <br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"id\": [                     \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$guids = "guids_example"; // string | Comma separated list of guids. Max 100 can be added into list.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceChannelListGet($guids, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guids** | **string**| Comma separated list of guids. Max 100 can be added into list. | [optional]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannels[]**](../Model/V11VmOpenApiServiceChannels.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelListOrganizationGet**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannelsWithPaging apiV11ServiceChannelListOrganizationGet($organizationId, $code, $oid, $page, $showHeader)

Fetches all the information of service channels related to certain organization. Either organizationId, code or oid needs to be added as a parameter.

<br>Notice! The returned itemList object includes items which can be one of the following: <i>V11VmOpenApiElectronicChannel</i> or <i>V11VmOpenApiPhoneChannel</i> or               <i>V11VmOpenApiPrintableFormChannel</i> or <i>V11VmOpenApiServiceLocationChannel</i> or <i>V11VmOpenApiWebPageChannel</i>  <br>The returned item type within itemList depends on the type of the channel. For example if the channel is phone channel then V11VmOpenApiPhoneChannel object is returned.  <br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"id\": [                     \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationId = "organizationId_example"; // string | Organization guid.
$code = "code_example"; // string | Organization business code.
$oid = "oid_example"; // string | Organization oid.
$page = 1; // int | The page to be fetched.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11ServiceChannelListOrganizationGet($organizationId, $code, $oid, $page, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelListOrganizationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Organization guid. | [optional]
 **code** | **string**| Organization business code. | [optional]
 **oid** | **string**| Organization oid. | [optional]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannelsWithPaging**](../Model/V11VmOpenApiServiceChannelsWithPaging.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelOrganizationOrganizationIdGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceChannelOrganizationOrganizationIdGet($organizationId, $date, $dateBefore, $page)

Gets a list of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"date\": [                     \"The value '-2' is not valid for Nullable`1.\",                     \"The date parameter is invalid.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationId = "organizationId_example"; // string | Guid
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page to be fetched.

try {
    $result = $apiInstance->apiV11ServiceChannelOrganizationOrganizationIdGet($organizationId, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelOrganizationOrganizationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Guid |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelOrganizationOrganizationIdTypeTypeGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceChannelOrganizationOrganizationIdTypeTypeGet($organizationId, $type, $date, $dateBefore, $page)

Gets a list of certain type of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"type\": [                     \"The field is invalid. Please use one of these: 'EChannel, WebPage, PrintableForm, Phone, ServiceLocation'.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organizationId = "organizationId_example"; // string | Guid
$type = "type_example"; // string | Service channel type
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page to be fetched.

try {
    $result = $apiInstance->apiV11ServiceChannelOrganizationOrganizationIdTypeTypeGet($organizationId, $type, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelOrganizationOrganizationIdTypeTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organizationId** | **string**| Guid |
 **type** | **string**| Service channel type |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelPhoneIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel apiV11ServiceChannelPhoneIdPut($id, $body)

Updates phone channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | phone channel id
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelInBase | phone channel data

try {
    $result = $apiInstance->apiV11ServiceChannelPhoneIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelPhoneIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| phone channel id |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelInBase**](../Model/V11VmOpenApiPhoneChannelInBase.md)| phone channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel**](../Model/V11VmOpenApiPhoneChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelPhonePost**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel apiV11ServiceChannelPhonePost($body)

Creates a new phone channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelIn(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelIn | The phone channel data.

try {
    $result = $apiInstance->apiV11ServiceChannelPhonePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelPhonePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelIn**](../Model/V11VmOpenApiPhoneChannelIn.md)| The phone channel data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel**](../Model/V11VmOpenApiPhoneChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelPhoneSourceIdSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel apiV11ServiceChannelPhoneSourceIdSourceIdPut($sourceId, $body)

Updates phone channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sourceId = "sourceId_example"; // string | phone channel external id
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelInBase | phone channel data

try {
    $result = $apiInstance->apiV11ServiceChannelPhoneSourceIdSourceIdPut($sourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelPhoneSourceIdSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceId** | **string**| phone channel external id |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannelInBase**](../Model/V11VmOpenApiPhoneChannelInBase.md)| phone channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel**](../Model/V11VmOpenApiPhoneChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelPrintableFormIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel apiV11ServiceChannelPrintableFormIdPut($id, $body)

Updates printable form channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | printable form channel id
$body = new \Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelInBase(); // \Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelInBase | printable form channel data

try {
    $result = $apiInstance->apiV11ServiceChannelPrintableFormIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelPrintableFormIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| printable form channel id |
 **body** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelInBase**](../Model/V10VmOpenApiPrintableFormChannelInBase.md)| printable form channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel**](../Model/V11VmOpenApiPrintableFormChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelPrintableFormPost**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel apiV11ServiceChannelPrintableFormPost($body)

Creates a new printable form channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelIn(); // \Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelIn | The printable form channel data.

try {
    $result = $apiInstance->apiV11ServiceChannelPrintableFormPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelPrintableFormPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelIn**](../Model/V10VmOpenApiPrintableFormChannelIn.md)| The printable form channel data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel**](../Model/V11VmOpenApiPrintableFormChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelPrintableFormSourceIdSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel apiV11ServiceChannelPrintableFormSourceIdSourceIdPut($sourceId, $body)

Updates printable form channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sourceId = "sourceId_example"; // string | printable form channel external source id
$body = new \Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelInBase(); // \Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelInBase | printable form channel data

try {
    $result = $apiInstance->apiV11ServiceChannelPrintableFormSourceIdSourceIdPut($sourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelPrintableFormSourceIdSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceId** | **string**| printable form channel external source id |
 **body** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiPrintableFormChannelInBase**](../Model/V10VmOpenApiPrintableFormChannelInBase.md)| printable form channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel**](../Model/V11VmOpenApiPrintableFormChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelServiceLocationIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel apiV11ServiceChannelServiceLocationIdPut($id, $body)

Updates service location channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | service location channel id
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelInBase | service location channel data.

try {
    $result = $apiInstance->apiV11ServiceChannelServiceLocationIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelServiceLocationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| service location channel id |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelInBase**](../Model/V11VmOpenApiServiceLocationChannelInBase.md)| service location channel data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel**](../Model/V11VmOpenApiServiceLocationChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelServiceLocationPost**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel apiV11ServiceChannelServiceLocationPost($body)

Creates a new service location channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelIn(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelIn | The service location channel data.

try {
    $result = $apiInstance->apiV11ServiceChannelServiceLocationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelServiceLocationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelIn**](../Model/V11VmOpenApiServiceLocationChannelIn.md)| The service location channel data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel**](../Model/V11VmOpenApiServiceLocationChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelServiceLocationSourceIdSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel apiV11ServiceChannelServiceLocationSourceIdSourceIdPut($sourceId, $body)

Updates service location channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sourceId = "sourceId_example"; // string | service location channel external source id
$body = new \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelInBase(); // \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelInBase | service location channel data

try {
    $result = $apiInstance->apiV11ServiceChannelServiceLocationSourceIdSourceIdPut($sourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelServiceLocationSourceIdSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceId** | **string**| service location channel external source id |
 **body** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannelInBase**](../Model/V11VmOpenApiServiceLocationChannelInBase.md)| service location channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel**](../Model/V11VmOpenApiServiceLocationChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelTypeTypeGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11ServiceChannelTypeTypeGet($type, $date, $dateBefore, $page)

Gets a list of certain type of published service channels.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                 \"type\": [                     \"The field is invalid. Please use one of these: 'EChannel, WebPage, PrintableForm, Phone, ServiceLocation'.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string | Service channel type
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page to be fetched.

try {
    $result = $apiInstance->apiV11ServiceChannelTypeTypeGet($type, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelTypeTypeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Service channel type |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage**](../Model/V3VmOpenApiGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelWebPageIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel apiV11ServiceChannelWebPageIdPut($id, $body)

Updates webpage channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | web page channel id
$body = new \Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelInBase(); // \Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelInBase | web page channel data

try {
    $result = $apiInstance->apiV11ServiceChannelWebPageIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelWebPageIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| web page channel id |
 **body** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelInBase**](../Model/V10VmOpenApiWebPageChannelInBase.md)| web page channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel**](../Model/V11VmOpenApiWebPageChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelWebPagePost**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel apiV11ServiceChannelWebPagePost($body)

Creates a new web page channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelIn(); // \Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelIn | The web page channel data.

try {
    $result = $apiInstance->apiV11ServiceChannelWebPagePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelWebPagePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelIn**](../Model/V10VmOpenApiWebPageChannelIn.md)| The web page channel data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel**](../Model/V11VmOpenApiWebPageChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11ServiceChannelWebPageSourceIdSourceIdPut**
> \Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel apiV11ServiceChannelWebPageSourceIdSourceIdPut($sourceId, $body)

Updates webpage channel with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\ServiceChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sourceId = "sourceId_example"; // string | web page channel external source id
$body = new \Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelInBase(); // \Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelInBase | web page channel data

try {
    $result = $apiInstance->apiV11ServiceChannelWebPageSourceIdSourceIdPut($sourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceChannelApi->apiV11ServiceChannelWebPageSourceIdSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceId** | **string**| web page channel external source id |
 **body** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiWebPageChannelInBase**](../Model/V10VmOpenApiWebPageChannelInBase.md)| web page channel data | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel**](../Model/V11VmOpenApiWebPageChannel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

