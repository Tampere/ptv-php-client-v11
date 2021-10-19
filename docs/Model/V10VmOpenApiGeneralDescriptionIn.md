# V10VmOpenApiGeneralDescriptionIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | External system identifier. User needs to be logged in to be able to get/set value. | [optional] 
**requirements** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**legislation** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiLaw[]**](V4VmOpenApiLaw.md) | Laws that a general description is based on. | [optional] 
**generalDescriptionTypeId** | **string** | General description type id. Used internally to check the restrictions for usage.  In older versions: Default general description is Municipality. | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**id** | **string** | Entity Guid identifier. | [optional] 
**lifeEvents** | **string[]** | List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017 | [optional] 
**industrialClasses** | **string[]** | List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt). | [optional] 
**currentPublishingStatus** | **string** | Current version publishing status. | [optional] 
**requiredPropertiesAvailableLanguages** | **string[]** | Internal property to check the languages within required lists: Names and Descriptions | [optional] 
**type** | **string** | Service type. Possible values are: Service, PermitOrObligation or ProfessionalQualification. | [optional] 
**serviceChargeType** | **string** | Service charge type. Possible values are:  Chargeable or FreeOfCharge. | [optional] 
**names** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of name entities. Possible type values are: Name, AlternativeName.   Sample single JSON object: {\&quot;language\&quot;: \&quot;fi\&quot;, \&quot;value\&quot;: \&quot;Perhepäivähoito esiopetusikäisille\&quot;, \&quot;type\&quot;: \&quot;Name\&quot;}. | 
**descriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of description entities. Requires two entities where ones type is \&quot;Description\&quot; or \&quot;BackgroundDescription\&quot; and the other ones type is \&quot;Summary\&quot;.  Sample single JSON object: {\&quot;language\&quot;: \&quot;fi\&quot;, \&quot;value\&quot;: \&quot;Lyhyen kuvauksen kuvaus esimerkki teksti.\&quot;, \&quot;type\&quot;: \&quot;Summary\&quot;}.  Other optional description types are UserInstruction, ChargeTypeAdditionalInfo, DeadLine, ProcessingTime, ValidityTime, GeneralDescriptionTypeAdditionalInformation. | 
**serviceClasses** | **string[]** | List of service class urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v1065 | 
**ontologyTerms** | **string[]** | List of ontology term urls. Sample url: http://www.yso.fi/onto/koko/p2435 | 
**targetGroups** | **string[]** | List of target group urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v2004 | 
**generalDescriptionType** | **string** | General description type. Possible values are: Municipality, BusinessSubregion, Church. | 
**publishingStatus** | **string** | Publishing status. Possible values are: Draft or Published. | 
**deleteAllIndustrialClasses** | **bool** | Set to true to delete all existing industrial classes (the IndustrialClasses collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllLaws** | **bool** | Set to true to delete all existing laws within legislation (the legislation collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllLifeEvents** | **bool** | Set to true to delete all existing life events (the LifeEvents collection for this object should be empty collection when this option is used). | [optional] 
**deleteServiceChargeType** | **bool** | Set to true to delete service charge type (ServiceChargeType property for this object should be empty when this option is used). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

