# QuotationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_token** | **string** | To indentify de customer, should use customerToken and customerDocument. | [optional] 
**customer_document** | **string** | To indentify de customer, should use customerToken and customerDocument. | [optional] 
**origin_point_code** | **string** | Origin point(airport or office) code example \&quot;GRU\&quot;. | [optional] 
**origin_postal_code** | **string** | Origin postal code example \&quot;14000555\&quot;. | [optional] 
**destination_point_code** | **string** | Destination point(airport or office) code example \&quot;REC\&quot;. | [optional] 
**destination_postal_code** | **string** | Destination postal code example \&quot;15000555\&quot;. | [optional] 
**to_collect** | **bool** | Set true if is to collect false if not. | [optional] 
**to_delivery** | **bool** | Set true if is to delivery false if not. | [optional] 
**declared_value** | **int** | Goods total value for insurance purpose. | [optional] 
**insurance_type** | **int** | Insurance Type:  * 0 - Customer  * 1 - Company  * 2 - Uninsured | [optional] 
**volumes** | [**\Swagger\Client\Model\QuotationVolume[]**](QuotationVolume.md) |  | [optional] 
**products** | **string[]** | Array of services code to quote example \&quot;NOR, DGS\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


