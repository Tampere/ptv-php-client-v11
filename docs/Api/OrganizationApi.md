# Tampere\PtvV11\OrganizationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV11OrganizationAreaAreaCodeCodeGet**](OrganizationApi.md#apiv11organizationareaareacodecodeget) | **GET** /api/v11/Organization/area/{area}/code/{code} | Gets a list of published organizations related to defined area and code.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11OrganizationBusinesscodeCodeGet**](OrganizationApi.md#apiv11organizationbusinesscodecodeget) | **GET** /api/v11/Organization/businesscode/{code} | Fetches all the information related to organizations with defined business identity code.
[**apiV11OrganizationGet**](OrganizationApi.md#apiv11organizationget) | **GET** /api/v11/Organization | Gets all the published organizations within PTV as a list of organization ids and names.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as &#x27;Archived&#x27; and withdrawn items can be fetched by setting status parameter as &#x27;Withdrawn&#x27;.
[**apiV11OrganizationHierarchyGet**](OrganizationApi.md#apiv11organizationhierarchyget) | **GET** /api/v11/Organization/Hierarchy | Gets a list of published organizations that do not have a parent organization.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.
[**apiV11OrganizationHierarchyIdGet**](OrganizationApi.md#apiv11organizationhierarchyidget) | **GET** /api/v11/Organization/Hierarchy/{id} | Get a single organization hierarchy. Returns the complete hierarchy starting from  the root organization and including all the child and grandchild organizations.
[**apiV11OrganizationIdGet**](OrganizationApi.md#apiv11organizationidget) | **GET** /api/v11/Organization/{id} | Fetches all the information related to a single organization.
[**apiV11OrganizationIdPut**](OrganizationApi.md#apiv11organizationidput) | **PUT** /api/v11/Organization/{id} | Updates organization.
[**apiV11OrganizationListAreaAreaCodeCodeGet**](OrganizationApi.md#apiv11organizationlistareaareacodecodeget) | **GET** /api/v11/Organization/list/area/{area}/code/{code} | Fetches all the information of the organizations related to certain area.
[**apiV11OrganizationListGet**](OrganizationApi.md#apiv11organizationlistget) | **GET** /api/v11/Organization/list | Fetches all the information related to requested organizations.
[**apiV11OrganizationOidOidGet**](OrganizationApi.md#apiv11organizationoidoidget) | **GET** /api/v11/Organization/oid/{oid} | Fetches all the information related to a single organization with defined Oid.
[**apiV11OrganizationPost**](OrganizationApi.md#apiv11organizationpost) | **POST** /api/v11/Organization | Creates a new organization with the data provided as input.
[**apiV11OrganizationSahaGet**](OrganizationApi.md#apiv11organizationsahaget) | **GET** /api/v11/Organization/saha | Gets main organizations and two sub levels of organizations. Returns both published and archived organizations.  NOTE! This is a restricted endpoint.
[**apiV11OrganizationSahaIdGet**](OrganizationApi.md#apiv11organizationsahaidget) | **GET** /api/v11/Organization/saha/{id} | Fetches Saha related information of a single organization.  NOTE! This is a restricted endpoint.
[**apiV11OrganizationSourceIdSourceIdPut**](OrganizationApi.md#apiv11organizationsourceidsourceidput) | **PUT** /api/v11/Organization/sourceId/{sourceId} | Updates organization.

# **apiV11OrganizationAreaAreaCodeCodeGet**
> \Tampere\PtvV11\PtvModel\V8VmOpenApiOrganizationGuidPage apiV11OrganizationAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $date, $dateBefore, $page)

Gets a list of published organizations related to defined area and code.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area = "area_example"; // string | The area type.
$code = "code_example"; // string | The code related to area
$includeWholeCountry = true; // bool | Indicates if organizations marked to provide services for whole country (or whole country except Åland) should be included.
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11OrganizationAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationAreaAreaCodeCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area** | **string**| The area type. |
 **code** | **string**| The code related to area |
 **includeWholeCountry** | **bool**| Indicates if organizations marked to provide services for whole country (or whole country except Åland) should be included. | [optional]
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\V8VmOpenApiOrganizationGuidPage**](../Model/V8VmOpenApiOrganizationGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationBusinesscodeCodeGet**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization[] apiV11OrganizationBusinesscodeCodeGet($code, $showHeader)

Fetches all the information related to organizations with defined business identity code.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"code\": [                   \"The field code must match the regular expression '^[0-9]{7}-[0-9]{1}$'.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | Finnish business identity code (Y-tunnus).
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11OrganizationBusinesscodeCodeGet($code, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationBusinesscodeCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Finnish business identity code (Y-tunnus). |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization[]**](../Model/V10VmOpenApiOrganization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationGet**
> \Tampere\PtvV11\PtvModel\V8VmOpenApiOrganizationGuidPage apiV11OrganizationGet($date, $dateBefore, $page, $status)

Gets all the published organizations within PTV as a list of organization ids and names.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as 'Archived' and withdrawn items can be fetched by setting status parameter as 'Withdrawn'.

NOTICE! When fetching published organizations, only organizations that have published services or published channels attached are returned!                <br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.<code>  {     \"date\": [       \"The value '-2' is not valid for Nullable`1.\",       \"The date parameter is invalid.\"     ]  }  </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.
$status = "Published"; // string | Set status to get items either in published, archived or withdrawn state.

try {
    $result = $apiInstance->apiV11OrganizationGet($date, $dateBefore, $page, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationGet: ', $e->getMessage(), PHP_EOL;
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

[**\Tampere\PtvV11\PtvModel\V8VmOpenApiOrganizationGuidPage**](../Model/V8VmOpenApiOrganizationGuidPage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationHierarchyGet**
> \Tampere\PtvV11\PtvModel\V3VmOpenApiGuidPage apiV11OrganizationHierarchyGet($date, $dateBefore, $page)

Gets a list of published organizations that do not have a parent organization.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11OrganizationHierarchyGet($date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationHierarchyGet: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationHierarchyIdGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiOrganizationHierarchy apiV11OrganizationHierarchyIdGet($id)

Get a single organization hierarchy. Returns the complete hierarchy starting from  the root organization and including all the child and grandchild organizations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Guid

try {
    $result = $apiInstance->apiV11OrganizationHierarchyIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationHierarchyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiOrganizationHierarchy**](../Model/VmOpenApiOrganizationHierarchy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationIdGet**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization apiV11OrganizationIdGet($id, $showHeader)

Fetches all the information related to a single organization.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"id\": [                   \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Guid
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11OrganizationIdGet($id, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization**](../Model/V10VmOpenApiOrganization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationIdPut**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization apiV11OrganizationIdPut($id, $body)

Updates organization.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"propertyname\": [                   \"The field propertyname has invalid characters.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | organization entity id
$body = new \Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationInBase(); // \Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationInBase | organization values

try {
    $result = $apiInstance->apiV11OrganizationIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| organization entity id |
 **body** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationInBase**](../Model/V9VmOpenApiOrganizationInBase.md)| organization values | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization**](../Model/V10VmOpenApiOrganization.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationListAreaAreaCodeCodeGet**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationsWithPaging apiV11OrganizationListAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $page, $showHeader)

Fetches all the information of the organizations related to certain area.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"id\": [                   \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$area = "area_example"; // string | The area type.
$code = "code_example"; // string | The code related to area
$includeWholeCountry = true; // bool | Indicates if organizations marked to provide services for whole country (or whole country except Åland) should be included.
$page = 1; // int | The page number to be fetched.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11OrganizationListAreaAreaCodeCodeGet($area, $code, $includeWholeCountry, $page, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationListAreaAreaCodeCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **area** | **string**| The area type. |
 **code** | **string**| The code related to area |
 **includeWholeCountry** | **bool**| Indicates if organizations marked to provide services for whole country (or whole country except Åland) should be included. | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationsWithPaging**](../Model/V10VmOpenApiOrganizationsWithPaging.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationListGet**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization[] apiV11OrganizationListGet($guids, $showHeader)

Fetches all the information related to requested organizations.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"id\": [                   \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$guids = "guids_example"; // string | Comma separated list of guids. Max 100 can be added into list.
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11OrganizationListGet($guids, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **guids** | **string**| Comma separated list of guids. Max 100 can be added into list. | [optional]
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization[]**](../Model/V10VmOpenApiOrganization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationOidOidGet**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization apiV11OrganizationOidOidGet($oid, $showHeader)

Fetches all the information related to a single organization with defined Oid.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"oid\": [                   \"The field oid must match the regular expression '^[A-Za-z0-9.-]*$'.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oid = "oid_example"; // string | Oid identifier
$showHeader = false; // bool | 

try {
    $result = $apiInstance->apiV11OrganizationOidOidGet($oid, $showHeader);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationOidOidGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oid** | **string**| Oid identifier |
 **showHeader** | **bool**|  | [optional] [default to false]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization**](../Model/V10VmOpenApiOrganization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationPost**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization apiV11OrganizationPost($body)

Creates a new organization with the data provided as input.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.  <code>              {                  \"Addresses[1].StreetAddress\": [                      \"The StreetAddress field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationIn(); // \Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationIn | The organization data.

try {
    $result = $apiInstance->apiV11OrganizationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationIn**](../Model/V9VmOpenApiOrganizationIn.md)| The organization data. | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization**](../Model/V10VmOpenApiOrganization.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationSahaGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiOrganizationSahaGuidPage apiV11OrganizationSahaGet($date, $dateBefore, $page)

Gets main organizations and two sub levels of organizations. Returns both published and archived organizations.  NOTE! This is a restricted endpoint.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"date\": [                   \"The value '-2' is not valid for Nullable`1.\",                   \"The date parameter is invalid.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$dateBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC)
$page = 1; // int | The page number to be fetched.

try {
    $result = $apiInstance->apiV11OrganizationSahaGet($date, $dateBefore, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationSahaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **dateBefore** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC) | [optional]
 **page** | **int**| The page number to be fetched. | [optional] [default to 1]

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiOrganizationSahaGuidPage**](../Model/VmOpenApiOrganizationSahaGuidPage.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationSahaIdGet**
> \Tampere\PtvV11\PtvModel\VmOpenApiOrganizationSaha apiV11OrganizationSahaIdGet($id)

Fetches Saha related information of a single organization.  NOTE! This is a restricted endpoint.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"id\": [                   \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Guid

try {
    $result = $apiInstance->apiV11OrganizationSahaIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationSahaIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |

### Return type

[**\Tampere\PtvV11\PtvModel\VmOpenApiOrganizationSaha**](../Model/VmOpenApiOrganizationSaha.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV11OrganizationSourceIdSourceIdPut**
> \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization apiV11OrganizationSourceIdSourceIdPut($sourceId, $body)

Updates organization.

<br>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.  <code>              {                 \"propertyname\": [                   \"The field propertyname has invalid characters.\"                 ]              }              </code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Tampere\PtvV11\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Tampere\PtvV11\PtvApi\OrganizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sourceId = "sourceId_example"; // string | organization external id
$body = new \Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationInBase(); // \Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationInBase | organization values

try {
    $result = $apiInstance->apiV11OrganizationSourceIdSourceIdPut($sourceId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->apiV11OrganizationSourceIdSourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sourceId** | **string**| organization external id |
 **body** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiOrganizationInBase**](../Model/V9VmOpenApiOrganizationInBase.md)| organization values | [optional]

### Return type

[**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganization**](../Model/V10VmOpenApiOrganization.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

