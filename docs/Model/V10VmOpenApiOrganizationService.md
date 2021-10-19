# V10VmOpenApiOrganizationService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**roleType** | **string** | Role type, valid values Responsible or Producer. In version 7 and upper also OtherResponsible role type is used. | 
**provisionType** | **string** | Provision type, valid values SelfProduced, PurchaseServices, Other or VoucherServices. Required if RoleType value is Producer. | [optional] 
**additionalInformation** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of additional information. | [optional] 
**service** | [**\Tampere\PtvV11\PtvModel\VmOpenApiItem**](VmOpenApiItem.md) |  | [optional] 
**organizationId** | **string** | PTV organization identifier (organization related to the service). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

