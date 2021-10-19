# V11VmOpenApiServiceHour

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serviceHourType** | **string** | Type of service hour. Valid values are: DaysOfTheWeek, Exceptional or OverMidnight.  In version 7 and older: Standard, Exception or Special. | 
**validFrom** | [**\DateTime**](\DateTime.md) | Date time where from this entry is valid. | [optional] 
**validTo** | [**\DateTime**](\DateTime.md) | Date time to this entry is valid. | [optional] 
**isClosed** | **bool** | Set to true to present a time between the valid from and to times as closed. | [optional] 
**validForNow** | **bool** | Set to true to present that this entry is valid for now. | [optional] 
**isAlwaysOpen** | **bool** | Set to true to present a time between the valid from and to times as allways open. | [optional] 
**isReservation** | **bool** | Gets or sets a value indicating whether this instance is open on reservation. | [optional] 
**additionalInformation** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of additional information. (Max.Length: 150). | [optional] 
**openingHour** | [**\Tampere\PtvV11\PtvModel\V8VmOpenApiDailyOpeningTime[]**](V8VmOpenApiDailyOpeningTime.md) | Gets or sets the opening hour. | [optional] 
**orderNumber** | **int** | The order of service hours. | [optional] 
**ownerReferenceId** | **string** | Gets or sets the owner reference identifier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

