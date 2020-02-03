# QuotationResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_quotation** | **string** |  | [optional] 
**origin_point_code** | **string** | Origin point(airport or office) code example \&quot;GRU\&quot;. | [optional] 
**origin_postal_code** | **string** | Origin postal code example \&quot;14000555\&quot;. | [optional] 
**origin_point_description** | **string** | Origin point name example \&quot;GRU - CARGAS S/A\&quot;, | [optional] 
**destination_point_code** | **string** | Destination point(airport or office) code example \&quot;REC\&quot;. | [optional] 
**destination_postal_code** | **string** | Destination postal code example \&quot;15000555\&quot;. | [optional] 
**destination_point_description** | **string** | Destination point name example \&quot;REC - CARGAS S/A\&quot;. | [optional] 
**service_code** | **string** | Service code example \&quot;NOR\&quot;. | [optional] 
**service_description** | **string** | Service name example \&quot;NORMAL FREIGHT\&quot;. | [optional] 
**declared_value** | **float** | Declared value example \&quot;\&quot;. | [optional] 
**payment_method_description** | **string** | Payment method name example \&quot;Pre Paid\&quot; | [optional] 
**agreement_info** | **string** | Agreement example \&quot;AGREEMENT XX\&quot; | [optional] 
**volumes** | [**\Swagger\Client\Model\Volume[]**](Volume.md) |  | [optional] 
**total_chargeable_weight** | **float** | Total chargeable weight example 3.000 | [optional] 
**freight_value** | **float** | Freight value without tax and charges. | [optional] 
**charges_value** | **float** | Charges and taxes. | [optional] 
**total_value** | **float** | Total value is a sum of freight value and charges | [optional] 
**infos** | [**\Swagger\Client\Model\Info**](Info.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


