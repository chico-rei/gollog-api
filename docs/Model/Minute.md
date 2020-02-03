# Minute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_third_party_company_order** | **string** | A control number from the third party company order | [optional] 
**origin_point_code** | **string** | Origin point(office, airport) code example \&quot;GRU\&quot; | [optional] 
**origin_postal_code** | **string** | Destination point name example \&quot;GRU - CARGAS S/A\&quot;. | [optional] 
**destination_point_code** | **string** | Destination point(airport or office) code example \&quot;REC\&quot;. | [optional] 
**destination_postal_code** | **string** | Destination point name example \&quot;REC - CARGAS S/A\&quot;. | [optional] 
**service_code** | **string** | Service code example \&quot;NOR\&quot;. | [optional] 
**to_delivery** | **bool** | Set true if is to delivery false if not. | [optional] 
**to_collect** | **bool** | Set true if is to collect false if not. | [optional] 
**contract_information** | [**\Swagger\Client\Model\ContratctInformation**](ContratctInformation.md) |  | [optional] 
**insurance_type** | **int** | Insurance Type:  * 0 - Customer  * 1 - Company  * 2 - Uninsured | [optional] 
**declared_value** | **float** | Goods total value for insurance purpose. | [optional] 
**previous_documents** | [**\Swagger\Client\Model\Documents**](Documents.md) |  | [optional] 
**sender** | [**\Swagger\Client\Model\Participant**](Participant.md) |  | [optional] 
**receiver** | [**\Swagger\Client\Model\Participant**](Participant.md) |  | [optional] 
**shipper** | [**\Swagger\Client\Model\Participant**](Participant.md) |  | [optional] 
**consignee** | [**\Swagger\Client\Model\Participant**](Participant.md) |  | [optional] 
**volumes** | [**\Swagger\Client\Model\Volume[]**](Volume.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


