# VmOpenApiArea

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the area. Possible values are: Municipality, Region, BusinessSubRegion, HospitalDistrict.  In version 7 and older: Municipality, Province, BusinessRegions, HospitalRegions. | [optional] 
**code** | **string** | Code of the area. | [optional] 
**name** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of names for the area | [optional] 
**municipalities** | [**\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]**](VmOpenApiMunicipality.md) | List of municipalities including municipality code and a localized list of municipality names. | [optional] 
**ownerReferenceId** | **string** | Gets or sets the owner reference identifier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

