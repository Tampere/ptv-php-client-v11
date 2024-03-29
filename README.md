# OpenAPIClient-php

Here you can see listed all the PTV Open Api methods.

For more information, please visit [https://palveluhallinta.suomi.fi/fi/sivut/palvelutietovaranto/kayttoohjeet](https://palveluhallinta.suomi.fi/fi/sivut/palvelutietovaranto/kayttoohjeet).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Tampere/ptv-php-client-v11.git"
    }
  ],
  "require": {
    "Tampere/ptv-php-client-v11": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Tampere\PtvV11\Api\CodeListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | Area type

try {
    $result = $apiInstance->apiV11CodeListGetAreaCodesTypeTypeGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListApi->apiV11CodeListGetAreaCodesTypeTypeGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CodeListApi* | [**apiV11CodeListGetAreaCodesTypeTypeGet**](docs/Api/CodeListApi.md#apiv11codelistgetareacodestypetypeget) | **GET** /api/v11/CodeList/GetAreaCodes/type/{type} | Gets a list of area codes filtered by area type.
*CodeListApi* | [**apiV11CodeListGetCountryCodesGet**](docs/Api/CodeListApi.md#apiv11codelistgetcountrycodesget) | **GET** /api/v11/CodeList/GetCountryCodes | Gets a list of country codes.
*CodeListApi* | [**apiV11CodeListGetLanguageCodesGet**](docs/Api/CodeListApi.md#apiv11codelistgetlanguagecodesget) | **GET** /api/v11/CodeList/GetLanguageCodes | Gets a list of language codes.
*CodeListApi* | [**apiV11CodeListGetMunicipalityCodesGet**](docs/Api/CodeListApi.md#apiv11codelistgetmunicipalitycodesget) | **GET** /api/v11/CodeList/GetMunicipalityCodes | Gets a list of municipality codes.
*CodeListApi* | [**apiV11CodeListGetPostalCodesGet**](docs/Api/CodeListApi.md#apiv11codelistgetpostalcodesget) | **GET** /api/v11/CodeList/GetPostalCodes | Gets a list of postal codes.
*CommonApi* | [**apiV11CommonChannelsWithoutServicesGet**](docs/Api/CommonApi.md#apiv11commonchannelswithoutservicesget) | **GET** /api/v11/Common/ChannelsWithoutServices | Gets information of user&#39;s organization&#39;s channels that have no connections to services.
*CommonApi* | [**apiV11CommonEntitiesByOrganizationOrganizationIdGet**](docs/Api/CommonApi.md#apiv11commonentitiesbyorganizationorganizationidget) | **GET** /api/v11/Common/EntitiesByOrganization/{organizationId} | Gets a list of published services and service channels by organization.  Services/channels created/modified after certain date can be fetched by adding date as query string parameter.  Services/channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*CommonApi* | [**apiV11CommonExpiringServiceChannelsGet**](docs/Api/CommonApi.md#apiv11commonexpiringservicechannelsget) | **GET** /api/v11/Common/ExpiringServiceChannels | Gets information of user&#39;s organization&#39;s expiring service channels.
*CommonApi* | [**apiV11CommonNotMaintainedServiceChannelsGet**](docs/Api/CommonApi.md#apiv11commonnotmaintainedservicechannelsget) | **GET** /api/v11/Common/NotMaintainedServiceChannels | Gets information of user&#39;s organization&#39;s not updated channels.
*CommonApi* | [**apiV11CommonNotMaintainedServicesGet**](docs/Api/CommonApi.md#apiv11commonnotmaintainedservicesget) | **GET** /api/v11/Common/NotMaintainedServices | Gets information of user&#39;s organization&#39;s not updated services.
*CommonApi* | [**apiV11CommonServicesWithoutChannelsGet**](docs/Api/CommonApi.md#apiv11commonserviceswithoutchannelsget) | **GET** /api/v11/Common/ServicesWithoutChannels | Gets information of user&#39;s organization&#39;s services that have no connections to channels.
*CommonApi* | [**apiV11CommonTranslationGet**](docs/Api/CommonApi.md#apiv11commontranslationget) | **GET** /api/v11/Common/Translation | Gets information of translation processes within PTV.  Translation items created/modified after certain date can be fetched by adding date as query string parameter.  Translation items created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ConnectionApi* | [**apiV11ConnectionASTIServiceChannelIdServiceChannelIdPut**](docs/Api/ConnectionApi.md#apiv11connectionastiservicechannelidservicechannelidput) | **PUT** /api/v11/Connection/ASTI/serviceChannelId/{serviceChannelId} | Updates connections between a service channel and services with extra data.  Request includes services for one certain service channel and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI connections for a service channel set &#39;deleteAllServiceRelations&#39; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
*ConnectionApi* | [**apiV11ConnectionASTIServiceIdServiceIdPut**](docs/Api/ConnectionApi.md#apiv11connectionastiserviceidserviceidput) | **PUT** /api/v11/Connection/ASTI/serviceId/{serviceId} | Updates connections between a service and service channels with extra data.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service, set &#39;deleteAllChannelRelations&#39; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
*ConnectionApi* | [**apiV11ConnectionASTIServiceSourceIdServiceSourceIdPut**](docs/Api/ConnectionApi.md#apiv11connectionastiservicesourceidservicesourceidput) | **PUT** /api/v11/Connection/ASTI/serviceSourceId/{serviceSourceId} | Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service set &#39;deleteAllChannelRelations&#39; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
*ConnectionApi* | [**apiV11ConnectionPost**](docs/Api/ConnectionApi.md#apiv11connectionpost) | **POST** /api/v11/Connection | Creates a connections between services and service channels with extra data.
*ConnectionApi* | [**apiV11ConnectionServiceIdServiceIdPut**](docs/Api/ConnectionApi.md#apiv11connectionserviceidserviceidput) | **PUT** /api/v11/Connection/serviceId/{serviceId} | Updates connections between a service and service channels with extra data.  Request includes service channels for one certain service so regular connections missing from request are removed.  ASTI connections are left as they are.  To delete all regular service channel connections for a service, set &#39;deleteAllChannelRelations&#39; property to true.
*ConnectionApi* | [**apiV11ConnectionServiceSourceIdServiceSourceIdPut**](docs/Api/ConnectionApi.md#apiv11connectionservicesourceidservicesourceidput) | **PUT** /api/v11/Connection/serviceSourceId/{serviceSourceId} | Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel connections for a service set &#39;deleteAllChannelRelations&#39; property to true.  ASTI connections are not removed - data for those connections can be updated though.
*ConnectionApi* | [**apiV11ConnectionSourcePost**](docs/Api/ConnectionApi.md#apiv11connectionsourcepost) | **POST** /api/v11/Connection/Source | Creates a connections between services and service channels with extra data. External source ids are used.
*GeneralDescriptionApi* | [**apiV11GeneralDescriptionGet**](docs/Api/GeneralDescriptionApi.md#apiv11generaldescriptionget) | **GET** /api/v11/GeneralDescription | Gets all the statutory service general descriptions within PTV as a list of ids and names.  General descriptions created/modified after certain date can be fetched by adding date as query string parameter.  General descriptions created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*GeneralDescriptionApi* | [**apiV11GeneralDescriptionIdGet**](docs/Api/GeneralDescriptionApi.md#apiv11generaldescriptionidget) | **GET** /api/v11/GeneralDescription/{id} | Fetches all the information related to a single statutory service general description.
*GeneralDescriptionApi* | [**apiV11GeneralDescriptionIdPut**](docs/Api/GeneralDescriptionApi.md#apiv11generaldescriptionidput) | **PUT** /api/v11/GeneralDescription/{id} | Updates the defined general description with the data provided as input.
*GeneralDescriptionApi* | [**apiV11GeneralDescriptionListGet**](docs/Api/GeneralDescriptionApi.md#apiv11generaldescriptionlistget) | **GET** /api/v11/GeneralDescription/list | Fetches all the information related to requested statutory service general descriptions.
*GeneralDescriptionApi* | [**apiV11GeneralDescriptionNewGdListGet**](docs/Api/GeneralDescriptionApi.md#apiv11generaldescriptionnewgdlistget) | **GET** /api/v11/GeneralDescription/newGdList | Gets the new statutory service general descriptions within PTV as a list of ids and names.
*GeneralDescriptionApi* | [**apiV11GeneralDescriptionPost**](docs/Api/GeneralDescriptionApi.md#apiv11generaldescriptionpost) | **POST** /api/v11/GeneralDescription | Creates a new general description with the data provided as input.
*OrganizationApi* | [**apiV11OrganizationAreaAreaCodeCodeGet**](docs/Api/OrganizationApi.md#apiv11organizationareaareacodecodeget) | **GET** /api/v11/Organization/area/{area}/code/{code} | Gets a list of published organizations related to defined area and code.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*OrganizationApi* | [**apiV11OrganizationBusinesscodeCodeGet**](docs/Api/OrganizationApi.md#apiv11organizationbusinesscodecodeget) | **GET** /api/v11/Organization/businesscode/{code} | Fetches all the information related to organizations with defined business identity code.
*OrganizationApi* | [**apiV11OrganizationGet**](docs/Api/OrganizationApi.md#apiv11organizationget) | **GET** /api/v11/Organization | Gets all the published organizations within PTV as a list of organization ids and names.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as &#39;Archived&#39; and withdrawn items can be fetched by setting status parameter as &#39;Withdrawn&#39;.
*OrganizationApi* | [**apiV11OrganizationHierarchyGet**](docs/Api/OrganizationApi.md#apiv11organizationhierarchyget) | **GET** /api/v11/Organization/Hierarchy | Gets a list of published organizations that do not have a parent organization.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.  Organizations created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*OrganizationApi* | [**apiV11OrganizationHierarchyIdGet**](docs/Api/OrganizationApi.md#apiv11organizationhierarchyidget) | **GET** /api/v11/Organization/Hierarchy/{id} | Get a single organization hierarchy. Returns the complete hierarchy starting from  the root organization and including all the child and grandchild organizations.
*OrganizationApi* | [**apiV11OrganizationIdGet**](docs/Api/OrganizationApi.md#apiv11organizationidget) | **GET** /api/v11/Organization/{id} | Fetches all the information related to a single organization.
*OrganizationApi* | [**apiV11OrganizationIdPut**](docs/Api/OrganizationApi.md#apiv11organizationidput) | **PUT** /api/v11/Organization/{id} | Updates organization.
*OrganizationApi* | [**apiV11OrganizationListAreaAreaCodeCodeGet**](docs/Api/OrganizationApi.md#apiv11organizationlistareaareacodecodeget) | **GET** /api/v11/Organization/list/area/{area}/code/{code} | Fetches all the information of the organizations related to certain area.
*OrganizationApi* | [**apiV11OrganizationListGet**](docs/Api/OrganizationApi.md#apiv11organizationlistget) | **GET** /api/v11/Organization/list | Fetches all the information related to requested organizations.
*OrganizationApi* | [**apiV11OrganizationOidOidGet**](docs/Api/OrganizationApi.md#apiv11organizationoidoidget) | **GET** /api/v11/Organization/oid/{oid} | Fetches all the information related to a single organization with defined Oid.
*OrganizationApi* | [**apiV11OrganizationPost**](docs/Api/OrganizationApi.md#apiv11organizationpost) | **POST** /api/v11/Organization | Creates a new organization with the data provided as input.
*OrganizationApi* | [**apiV11OrganizationSahaGet**](docs/Api/OrganizationApi.md#apiv11organizationsahaget) | **GET** /api/v11/Organization/saha | Gets main organizations and two sub levels of organizations. Returns both published and archived organizations.  NOTE! This is a restricted endpoint.
*OrganizationApi* | [**apiV11OrganizationSahaIdGet**](docs/Api/OrganizationApi.md#apiv11organizationsahaidget) | **GET** /api/v11/Organization/saha/{id} | Fetches Saha related information of a single organization.  NOTE! This is a restricted endpoint.
*OrganizationApi* | [**apiV11OrganizationSourceIdSourceIdPut**](docs/Api/OrganizationApi.md#apiv11organizationsourceidsourceidput) | **PUT** /api/v11/Organization/sourceId/{sourceId} | Updates organization.
*ServiceApi* | [**apiV11ServiceActiveGet**](docs/Api/ServiceApi.md#apiv11serviceactiveget) | **GET** /api/v11/Service/active | Gets all services within PTV as a list of service ids and names. Also services with draft and modified versions are included.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.  NOTE! This is a restricted endpoint.
*ServiceApi* | [**apiV11ServiceActiveIdGet**](docs/Api/ServiceApi.md#apiv11serviceactiveidget) | **GET** /api/v11/Service/active/{id} | Fetches all the information related to a single service. Also services with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.
*ServiceApi* | [**apiV11ServiceArchivedListGet**](docs/Api/ServiceApi.md#apiv11servicearchivedlistget) | **GET** /api/v11/Service/archived/list | Fetches automatically/manually archived services
*ServiceApi* | [**apiV11ServiceAreaAreaCodeCodeGet**](docs/Api/ServiceApi.md#apiv11serviceareaareacodecodeget) | **GET** /api/v11/Service/area/{area}/code/{code} | Gets a list of published services related to defined area and code.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceApi* | [**apiV11ServiceGet**](docs/Api/ServiceApi.md#apiv11serviceget) | **GET** /api/v11/Service | Gets all the published services within PTV as a list of service ids and names.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as &#39;Archived&#39; and withdrawn items can be fetched by setting status parameter as &#39;Withdrawn&#39;.
*ServiceApi* | [**apiV11ServiceIdGet**](docs/Api/ServiceApi.md#apiv11serviceidget) | **GET** /api/v11/Service/{id} | Fetches all the information related to a single service.
*ServiceApi* | [**apiV11ServiceIdPut**](docs/Api/ServiceApi.md#apiv11serviceidput) | **PUT** /api/v11/Service/{id} | Updates the defined service with the data provided as input.
*ServiceApi* | [**apiV11ServiceIndustrialClassGet**](docs/Api/ServiceApi.md#apiv11serviceindustrialclassget) | **GET** /api/v11/Service/industrialClass | Gets a list of published services for defined industrial class.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceApi* | [**apiV11ServiceListAreaAreaCodeCodeGet**](docs/Api/ServiceApi.md#apiv11servicelistareaareacodecodeget) | **GET** /api/v11/Service/list/area/{area}/code/{code} | Fetches all the information of published services related to certain area and code.  User can set serviceWithGD parameter to true to include possible attached general description data into the service data.  In this case general description related descriptions are marked with prefix &#39;GD_&#39; to separate them from service related descriptions.
*ServiceApi* | [**apiV11ServiceListGet**](docs/Api/ServiceApi.md#apiv11servicelistget) | **GET** /api/v11/Service/list | Fetches all the information related to requested services.
*ServiceApi* | [**apiV11ServiceListOrganizationGet**](docs/Api/ServiceApi.md#apiv11servicelistorganizationget) | **GET** /api/v11/Service/list/organization | Fetches all the information of the services related to certain organization. Either organizationId, code or oid needs to be added as a parameter.  User can also set serviceWithGD parameter to true to include possible attached general description data into the service data.  In this case general description related descriptions are marked with prefix &#39;GD_&#39; to separate them from service related descriptions.
*ServiceApi* | [**apiV11ServicePost**](docs/Api/ServiceApi.md#apiv11servicepost) | **POST** /api/v11/Service | Creates a new service with the data provided as input.
*ServiceApi* | [**apiV11ServiceServiceChannelServiceChannelIdGet**](docs/Api/ServiceApi.md#apiv11serviceservicechannelservicechannelidget) | **GET** /api/v11/Service/serviceChannel/{serviceChannelId} | Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.  Services joined to service channel before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceApi* | [**apiV11ServiceServiceClassGet**](docs/Api/ServiceApi.md#apiv11serviceserviceclassget) | **GET** /api/v11/Service/serviceClass | Gets a list of published services for defined service class.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceApi* | [**apiV11ServiceServiceWithGDIdGet**](docs/Api/ServiceApi.md#apiv11serviceservicewithgdidget) | **GET** /api/v11/Service/serviceWithGD/{id} | Fetches all the information related to a single service. If general description is attached also general description data is returned within the service data.  General description related descriptions are marked with prefix &#39;GD_&#39; to separate them from service related descriptions.
*ServiceApi* | [**apiV11ServiceServiceWithGDListGet**](docs/Api/ServiceApi.md#apiv11serviceservicewithgdlistget) | **GET** /api/v11/Service/serviceWithGD/list | Fetches all the information related to requests services. If general description is attached to a service also general description data is returned within the service data.  General description related descriptions are marked with prefix &#39;GD_&#39; to separate them from service related descriptions.
*ServiceApi* | [**apiV11ServiceSourceIdSourceIdPut**](docs/Api/ServiceApi.md#apiv11servicesourceidsourceidput) | **PUT** /api/v11/Service/sourceId/{sourceId} | Updates the defined service with the data provided as input.
*ServiceApi* | [**apiV11ServiceTargetGroupGet**](docs/Api/ServiceApi.md#apiv11servicetargetgroupget) | **GET** /api/v11/Service/targetGroup | Gets a list of published services for defined target group.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceApi* | [**apiV11ServiceTypeTypeGet**](docs/Api/ServiceApi.md#apiv11servicetypetypeget) | **GET** /api/v11/Service/type/{type} | Gets a list of published services of defined service type.  Services created/modified after certain date can be fetched by adding date as query string parameter.  Services created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceChannelApi* | [**apiV11ServiceChannelActiveGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannelactiveget) | **GET** /api/v11/ServiceChannel/active | Gets all service channels within PTV as a list of service channel ids and names. Also service channels with draft and modified versions are included.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Certain type of service channels can be fetched by setting query string parameter type.  NOTE! This is a restricted endpoint.
*ServiceChannelApi* | [**apiV11ServiceChannelActiveIdGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannelactiveidget) | **GET** /api/v11/ServiceChannel/active/{id} | Fetches all the information related to a single service channel. Also service channels with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.
*ServiceChannelApi* | [**apiV11ServiceChannelArchivedListGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannelarchivedlistget) | **GET** /api/v11/ServiceChannel/archived/list | Fetches automatically/manually archived service channels
*ServiceChannelApi* | [**apiV11ServiceChannelAreaAreaCodeCodeGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannelareaareacodecodeget) | **GET** /api/v11/ServiceChannel/area/{area}/code/{code} | Gets a list of service channels related to defined area and code.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceChannelApi* | [**apiV11ServiceChannelEChannelIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelechannelidput) | **PUT** /api/v11/ServiceChannel/EChannel/{id} | Updates electronic channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelEChannelPost**](docs/Api/ServiceChannelApi.md#apiv11servicechannelechannelpost) | **POST** /api/v11/ServiceChannel/EChannel | Creates a new electronic channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelEChannelSourceIdSourceIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelechannelsourceidsourceidput) | **PUT** /api/v11/ServiceChannel/EChannel/sourceId/{sourceId} | Updates electronic channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannelget) | **GET** /api/v11/ServiceChannel | Gets all published service channels within PTV as a list of service channel ids and names.  Service channels created/modified after certain date can be fetched by adding date as query string parameter  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting status parameter as &#39;Archived&#39; and withdrawn items can be fetched by setting status parameter as &#39;Withdrawn&#39;.
*ServiceChannelApi* | [**apiV11ServiceChannelIdGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannelidget) | **GET** /api/v11/ServiceChannel/{id} | Fetches all the information related to a single service channel.
*ServiceChannelApi* | [**apiV11ServiceChannelListAreaAreaCodeCodeGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannellistareaareacodecodeget) | **GET** /api/v11/ServiceChannel/list/area/{area}/code/{code} | Gets a list of service channels related to defined area and code.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceChannelApi* | [**apiV11ServiceChannelListGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannellistget) | **GET** /api/v11/ServiceChannel/list | Fetches all the information related to requested service channels.
*ServiceChannelApi* | [**apiV11ServiceChannelListOrganizationGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannellistorganizationget) | **GET** /api/v11/ServiceChannel/list/organization | Fetches all the information of service channels related to certain organization. Either organizationId, code or oid needs to be added as a parameter.
*ServiceChannelApi* | [**apiV11ServiceChannelOrganizationOrganizationIdGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannelorganizationorganizationidget) | **GET** /api/v11/ServiceChannel/organization/{organizationId} | Gets a list of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceChannelApi* | [**apiV11ServiceChannelOrganizationOrganizationIdTypeTypeGet**](docs/Api/ServiceChannelApi.md#apiv11servicechannelorganizationorganizationidtypetypeget) | **GET** /api/v11/ServiceChannel/organization/{organizationId}/type/{type} | Gets a list of certain type of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceChannelApi* | [**apiV11ServiceChannelPhoneIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelphoneidput) | **PUT** /api/v11/ServiceChannel/Phone/{id} | Updates phone channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelPhonePost**](docs/Api/ServiceChannelApi.md#apiv11servicechannelphonepost) | **POST** /api/v11/ServiceChannel/Phone | Creates a new phone channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelPhoneSourceIdSourceIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelphonesourceidsourceidput) | **PUT** /api/v11/ServiceChannel/Phone/sourceId/{sourceId} | Updates phone channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelPrintableFormIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelprintableformidput) | **PUT** /api/v11/ServiceChannel/PrintableForm/{id} | Updates printable form channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelPrintableFormPost**](docs/Api/ServiceChannelApi.md#apiv11servicechannelprintableformpost) | **POST** /api/v11/ServiceChannel/PrintableForm | Creates a new printable form channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelPrintableFormSourceIdSourceIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelprintableformsourceidsourceidput) | **PUT** /api/v11/ServiceChannel/PrintableForm/sourceId/{sourceId} | Updates printable form channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelServiceLocationIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelservicelocationidput) | **PUT** /api/v11/ServiceChannel/ServiceLocation/{id} | Updates service location channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelServiceLocationPost**](docs/Api/ServiceChannelApi.md#apiv11servicechannelservicelocationpost) | **POST** /api/v11/ServiceChannel/ServiceLocation | Creates a new service location channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelServiceLocationSourceIdSourceIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelservicelocationsourceidsourceidput) | **PUT** /api/v11/ServiceChannel/ServiceLocation/sourceId/{sourceId} | Updates service location channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelTypeTypeGet**](docs/Api/ServiceChannelApi.md#apiv11servicechanneltypetypeget) | **GET** /api/v11/ServiceChannel/type/{type} | Gets a list of certain type of published service channels.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.  Service channels created/modified before certain date can be fetched by adding dateBefore as query string parameter.
*ServiceChannelApi* | [**apiV11ServiceChannelWebPageIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelwebpageidput) | **PUT** /api/v11/ServiceChannel/WebPage/{id} | Updates webpage channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelWebPagePost**](docs/Api/ServiceChannelApi.md#apiv11servicechannelwebpagepost) | **POST** /api/v11/ServiceChannel/WebPage | Creates a new web page channel with the data provided as input.
*ServiceChannelApi* | [**apiV11ServiceChannelWebPageSourceIdSourceIdPut**](docs/Api/ServiceChannelApi.md#apiv11servicechannelwebpagesourceidsourceidput) | **PUT** /api/v11/ServiceChannel/WebPage/sourceId/{sourceId} | Updates webpage channel with the data provided as input.
*ServiceCollectionApi* | [**apiV11ServiceCollectionGet**](docs/Api/ServiceCollectionApi.md#apiv11servicecollectionget) | **GET** /api/v11/ServiceCollection | Gets all the published service collections within PTV as a list of service collection ids and names.  Service collections created after certain date can be fetched by adding date as query string parameter.  Service collections created before certain date can be fetched by adding dateBefore as query string parameter.  Archived items can be fetched by setting parameter archived to true.
*ServiceCollectionApi* | [**apiV11ServiceCollectionIdGet**](docs/Api/ServiceCollectionApi.md#apiv11servicecollectionidget) | **GET** /api/v11/ServiceCollection/{id} | Fetches all the information related to a single service collection.
*ServiceCollectionApi* | [**apiV11ServiceCollectionIdPut**](docs/Api/ServiceCollectionApi.md#apiv11servicecollectionidput) | **PUT** /api/v11/ServiceCollection/{id} | Updates the defined service collection with the data provided as input.
*ServiceCollectionApi* | [**apiV11ServiceCollectionOrganizationGet**](docs/Api/ServiceCollectionApi.md#apiv11servicecollectionorganizationget) | **GET** /api/v11/ServiceCollection/organization | Gets the published service collections within PTV related to certain organization. Either organizationId or code needs to be added as a parameter.
*ServiceCollectionApi* | [**apiV11ServiceCollectionPost**](docs/Api/ServiceCollectionApi.md#apiv11servicecollectionpost) | **POST** /api/v11/ServiceCollection | Creates a new service collection with the data provided as input.
*ServiceCollectionApi* | [**apiV11ServiceCollectionSourceIdSourceIdPut**](docs/Api/ServiceCollectionApi.md#apiv11servicecollectionsourceidsourceidput) | **PUT** /api/v11/ServiceCollection/sourceId/{sourceId} | Updates the defined service collection with the data provided as input.

## Models

- [ArchivingType](docs/Model/ArchivingType.md)
- [ISecurityOwnOrganization](docs/Model/ISecurityOwnOrganization.md)
- [IVmError](docs/Model/IVmError.md)
- [V10VmOpenApiGeneralDescription](docs/Model/V10VmOpenApiGeneralDescription.md)
- [V10VmOpenApiGeneralDescriptionIn](docs/Model/V10VmOpenApiGeneralDescriptionIn.md)
- [V10VmOpenApiGeneralDescriptionInBase](docs/Model/V10VmOpenApiGeneralDescriptionInBase.md)
- [V10VmOpenApiOrganization](docs/Model/V10VmOpenApiOrganization.md)
- [V10VmOpenApiOrganizationService](docs/Model/V10VmOpenApiOrganizationService.md)
- [V10VmOpenApiOrganizationsWithPaging](docs/Model/V10VmOpenApiOrganizationsWithPaging.md)
- [V10VmOpenApiPrintableFormChannelIn](docs/Model/V10VmOpenApiPrintableFormChannelIn.md)
- [V10VmOpenApiPrintableFormChannelInBase](docs/Model/V10VmOpenApiPrintableFormChannelInBase.md)
- [V10VmOpenApiServiceCollectionItem](docs/Model/V10VmOpenApiServiceCollectionItem.md)
- [V10VmOpenApiServiceCollectionsWithPaging](docs/Model/V10VmOpenApiServiceCollectionsWithPaging.md)
- [V10VmOpenApiWebPageChannelIn](docs/Model/V10VmOpenApiWebPageChannelIn.md)
- [V10VmOpenApiWebPageChannelInBase](docs/Model/V10VmOpenApiWebPageChannelInBase.md)
- [V11VmOpenApiChannelServicesIn](docs/Model/V11VmOpenApiChannelServicesIn.md)
- [V11VmOpenApiElectronicChannel](docs/Model/V11VmOpenApiElectronicChannel.md)
- [V11VmOpenApiElectronicChannelIn](docs/Model/V11VmOpenApiElectronicChannelIn.md)
- [V11VmOpenApiElectronicChannelInBase](docs/Model/V11VmOpenApiElectronicChannelInBase.md)
- [V11VmOpenApiPhoneChannel](docs/Model/V11VmOpenApiPhoneChannel.md)
- [V11VmOpenApiPhoneChannelIn](docs/Model/V11VmOpenApiPhoneChannelIn.md)
- [V11VmOpenApiPhoneChannelInBase](docs/Model/V11VmOpenApiPhoneChannelInBase.md)
- [V11VmOpenApiPrintableFormChannel](docs/Model/V11VmOpenApiPrintableFormChannel.md)
- [V11VmOpenApiService](docs/Model/V11VmOpenApiService.md)
- [V11VmOpenApiServiceAndChannelIn](docs/Model/V11VmOpenApiServiceAndChannelIn.md)
- [V11VmOpenApiServiceAndChannelRelationAstiInBase](docs/Model/V11VmOpenApiServiceAndChannelRelationAstiInBase.md)
- [V11VmOpenApiServiceAndChannelRelationBySource](docs/Model/V11VmOpenApiServiceAndChannelRelationBySource.md)
- [V11VmOpenApiServiceAndChannelRelationBySourceAsti](docs/Model/V11VmOpenApiServiceAndChannelRelationBySourceAsti.md)
- [V11VmOpenApiServiceAndChannelRelationBySourceInBase](docs/Model/V11VmOpenApiServiceAndChannelRelationBySourceInBase.md)
- [V11VmOpenApiServiceAndChannelRelationInBase](docs/Model/V11VmOpenApiServiceAndChannelRelationInBase.md)
- [V11VmOpenApiServiceChannelService](docs/Model/V11VmOpenApiServiceChannelService.md)
- [V11VmOpenApiServiceChannelServiceInBase](docs/Model/V11VmOpenApiServiceChannelServiceInBase.md)
- [V11VmOpenApiServiceChannels](docs/Model/V11VmOpenApiServiceChannels.md)
- [V11VmOpenApiServiceChannelsWithPaging](docs/Model/V11VmOpenApiServiceChannelsWithPaging.md)
- [V11VmOpenApiServiceCollection](docs/Model/V11VmOpenApiServiceCollection.md)
- [V11VmOpenApiServiceCollectionIn](docs/Model/V11VmOpenApiServiceCollectionIn.md)
- [V11VmOpenApiServiceCollectionInBase](docs/Model/V11VmOpenApiServiceCollectionInBase.md)
- [V11VmOpenApiServiceHour](docs/Model/V11VmOpenApiServiceHour.md)
- [V11VmOpenApiServiceLocationChannel](docs/Model/V11VmOpenApiServiceLocationChannel.md)
- [V11VmOpenApiServiceLocationChannelIn](docs/Model/V11VmOpenApiServiceLocationChannelIn.md)
- [V11VmOpenApiServiceLocationChannelInBase](docs/Model/V11VmOpenApiServiceLocationChannelInBase.md)
- [V11VmOpenApiServiceServiceChannel](docs/Model/V11VmOpenApiServiceServiceChannel.md)
- [V11VmOpenApiServiceServiceChannelAstiInBase](docs/Model/V11VmOpenApiServiceServiceChannelAstiInBase.md)
- [V11VmOpenApiServiceServiceChannelBySource](docs/Model/V11VmOpenApiServiceServiceChannelBySource.md)
- [V11VmOpenApiServiceServiceChannelBySourceAsti](docs/Model/V11VmOpenApiServiceServiceChannelBySourceAsti.md)
- [V11VmOpenApiServiceServiceChannelInBase](docs/Model/V11VmOpenApiServiceServiceChannelInBase.md)
- [V11VmOpenApiServicesWithPaging](docs/Model/V11VmOpenApiServicesWithPaging.md)
- [V11VmOpenApiWebPageChannel](docs/Model/V11VmOpenApiWebPageChannel.md)
- [V3VmOpenApiGuidPage](docs/Model/V3VmOpenApiGuidPage.md)
- [V4VmOpenApiEmail](docs/Model/V4VmOpenApiEmail.md)
- [V4VmOpenApiFintoItem](docs/Model/V4VmOpenApiFintoItem.md)
- [V4VmOpenApiLaw](docs/Model/V4VmOpenApiLaw.md)
- [V4VmOpenApiOntologyTerm](docs/Model/V4VmOpenApiOntologyTerm.md)
- [V4VmOpenApiPhone](docs/Model/V4VmOpenApiPhone.md)
- [V4VmOpenApiPhoneSimple](docs/Model/V4VmOpenApiPhoneSimple.md)
- [V4VmOpenApiPhoneWithType](docs/Model/V4VmOpenApiPhoneWithType.md)
- [V4VmOpenApiWebPage](docs/Model/V4VmOpenApiWebPage.md)
- [V6VmOpenApiServiceOrganization](docs/Model/V6VmOpenApiServiceOrganization.md)
- [V6VmOpenApiServiceServiceChannel](docs/Model/V6VmOpenApiServiceServiceChannel.md)
- [V7VmOpenApiAddressContact](docs/Model/V7VmOpenApiAddressContact.md)
- [V7VmOpenApiAddressContactIn](docs/Model/V7VmOpenApiAddressContactIn.md)
- [V7VmOpenApiFintoItemWithDescription](docs/Model/V7VmOpenApiFintoItemWithDescription.md)
- [V8VmOpenApiAddressDelivery](docs/Model/V8VmOpenApiAddressDelivery.md)
- [V8VmOpenApiAddressDeliveryIn](docs/Model/V8VmOpenApiAddressDeliveryIn.md)
- [V8VmOpenApiDailyOpeningTime](docs/Model/V8VmOpenApiDailyOpeningTime.md)
- [V8VmOpenApiOrganizationGuidPage](docs/Model/V8VmOpenApiOrganizationGuidPage.md)
- [V8VmOpenApiOrganizationItem](docs/Model/V8VmOpenApiOrganizationItem.md)
- [V9VmOpenApiAddress](docs/Model/V9VmOpenApiAddress.md)
- [V9VmOpenApiAddressIn](docs/Model/V9VmOpenApiAddressIn.md)
- [V9VmOpenApiAddressLocation](docs/Model/V9VmOpenApiAddressLocation.md)
- [V9VmOpenApiAddressLocationIn](docs/Model/V9VmOpenApiAddressLocationIn.md)
- [V9VmOpenApiContactDetails](docs/Model/V9VmOpenApiContactDetails.md)
- [V9VmOpenApiContactDetailsIn](docs/Model/V9VmOpenApiContactDetailsIn.md)
- [V9VmOpenApiContactDetailsInBase](docs/Model/V9VmOpenApiContactDetailsInBase.md)
- [V9VmOpenApiEntrance](docs/Model/V9VmOpenApiEntrance.md)
- [V9VmOpenApiExtraType](docs/Model/V9VmOpenApiExtraType.md)
- [V9VmOpenApiOrganizationIn](docs/Model/V9VmOpenApiOrganizationIn.md)
- [V9VmOpenApiOrganizationInBase](docs/Model/V9VmOpenApiOrganizationInBase.md)
- [V9VmOpenApiServiceIn](docs/Model/V9VmOpenApiServiceIn.md)
- [V9VmOpenApiServiceInBase](docs/Model/V9VmOpenApiServiceInBase.md)
- [V9VmOpenApiServiceProducerIn](docs/Model/V9VmOpenApiServiceProducerIn.md)
- [V9VmOpenApiServiceVoucher](docs/Model/V9VmOpenApiServiceVoucher.md)
- [V9VmOpenApiWebPage](docs/Model/V9VmOpenApiWebPage.md)
- [VmOpenApiAccessibilityClassification](docs/Model/VmOpenApiAccessibilityClassification.md)
- [VmOpenApiAccessibilityContactInfo](docs/Model/VmOpenApiAccessibilityContactInfo.md)
- [VmOpenApiAccessibilitySentence](docs/Model/VmOpenApiAccessibilitySentence.md)
- [VmOpenApiAddressOther](docs/Model/VmOpenApiAddressOther.md)
- [VmOpenApiAddressOtherIn](docs/Model/VmOpenApiAddressOtherIn.md)
- [VmOpenApiAddressPostOfficeBox](docs/Model/VmOpenApiAddressPostOfficeBox.md)
- [VmOpenApiAddressPostOfficeBoxIn](docs/Model/VmOpenApiAddressPostOfficeBoxIn.md)
- [VmOpenApiAddressStreet](docs/Model/VmOpenApiAddressStreet.md)
- [VmOpenApiAddressStreetIn](docs/Model/VmOpenApiAddressStreetIn.md)
- [VmOpenApiAddressStreetWithCoordinates](docs/Model/VmOpenApiAddressStreetWithCoordinates.md)
- [VmOpenApiAddressStreetWithCoordinatesIn](docs/Model/VmOpenApiAddressStreetWithCoordinatesIn.md)
- [VmOpenApiArchivedServiceBase](docs/Model/VmOpenApiArchivedServiceBase.md)
- [VmOpenApiArchivedServiceChannelBase](docs/Model/VmOpenApiArchivedServiceChannelBase.md)
- [VmOpenApiArea](docs/Model/VmOpenApiArea.md)
- [VmOpenApiAreaIn](docs/Model/VmOpenApiAreaIn.md)
- [VmOpenApiAttachment](docs/Model/VmOpenApiAttachment.md)
- [VmOpenApiAttachmentWithType](docs/Model/VmOpenApiAttachmentWithType.md)
- [VmOpenApiCodeListItem](docs/Model/VmOpenApiCodeListItem.md)
- [VmOpenApiCodeListPage](docs/Model/VmOpenApiCodeListPage.md)
- [VmOpenApiCoordinates](docs/Model/VmOpenApiCoordinates.md)
- [VmOpenApiDialCodeListItem](docs/Model/VmOpenApiDialCodeListItem.md)
- [VmOpenApiEntityGuidPage](docs/Model/VmOpenApiEntityGuidPage.md)
- [VmOpenApiEntityItem](docs/Model/VmOpenApiEntityItem.md)
- [VmOpenApiExpiringTask](docs/Model/VmOpenApiExpiringTask.md)
- [VmOpenApiExtraType](docs/Model/VmOpenApiExtraType.md)
- [VmOpenApiItem](docs/Model/VmOpenApiItem.md)
- [VmOpenApiLanguageItem](docs/Model/VmOpenApiLanguageItem.md)
- [VmOpenApiLocalizedListItem](docs/Model/VmOpenApiLocalizedListItem.md)
- [VmOpenApiMunicipality](docs/Model/VmOpenApiMunicipality.md)
- [VmOpenApiNameTypeByLanguage](docs/Model/VmOpenApiNameTypeByLanguage.md)
- [VmOpenApiNotUpdatedTask](docs/Model/VmOpenApiNotUpdatedTask.md)
- [VmOpenApiOrganizationEInvoicing](docs/Model/VmOpenApiOrganizationEInvoicing.md)
- [VmOpenApiOrganizationHierarchy](docs/Model/VmOpenApiOrganizationHierarchy.md)
- [VmOpenApiOrganizationParent](docs/Model/VmOpenApiOrganizationParent.md)
- [VmOpenApiOrganizationSaha](docs/Model/VmOpenApiOrganizationSaha.md)
- [VmOpenApiOrganizationSahaGuidPage](docs/Model/VmOpenApiOrganizationSahaGuidPage.md)
- [VmOpenApiOrganizationSub](docs/Model/VmOpenApiOrganizationSub.md)
- [VmOpenApiSentenceValue](docs/Model/VmOpenApiSentenceValue.md)
- [VmOpenApiServiceCollectionChannel](docs/Model/VmOpenApiServiceCollectionChannel.md)
- [VmOpenApiServiceCollectionService](docs/Model/VmOpenApiServiceCollectionService.md)
- [VmOpenApiServiceProducer](docs/Model/VmOpenApiServiceProducer.md)
- [VmOpenApiServiceServiceCollection](docs/Model/VmOpenApiServiceServiceCollection.md)
- [VmOpenApiTask](docs/Model/VmOpenApiTask.md)
- [VmOpenApiTasks](docs/Model/VmOpenApiTasks.md)
- [VmOpenApiTranslationItem](docs/Model/VmOpenApiTranslationItem.md)
- [VmOpenApiTranslationItemsPage](docs/Model/VmOpenApiTranslationItemsPage.md)

## Authorization

Authentication schemes defined for the API:
### oauth2

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://palveluhallinta.suomi.fi/api/auth/connect/authorize`
- **Scopes**: 
    - **dataEventRecords**: Access event records

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v11`
    - Package version: `2.0.0`
    - Build date: `2023-06-30T11:12:38.413080+03:00[Europe/Helsinki]`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
