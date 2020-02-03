# Swagger\Client\SalesApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quotationCalculateQuotation**](SalesApi.md#quotationCalculateQuotation) | **POST** /sales/transportorder/quotation | Retun a freight quotation based on parameters
[**salesTransportorderCancelPost**](SalesApi.md#salesTransportorderCancelPost) | **POST** /sales/transportorder/cancel | Cancel a booking.
[**salesTransportorderDacteDocumentNumberGet**](SalesApi.md#salesTransportorderDacteDocumentNumberGet) | **GET** /sales/transportorder/dacte/{documentNumber} | Get a transport order DACTE by document number
[**salesTransportorderMinutePost**](SalesApi.md#salesTransportorderMinutePost) | **POST** /sales/transportorder/minute | Create a freight book based on parameters.
[**salesTransportorderTrackingCustomerdocumentPost**](SalesApi.md#salesTransportorderTrackingCustomerdocumentPost) | **POST** /sales/transportorder/tracking/customerdocument | Return last action from  transport orders what had status change in the last 3 days by customer document number
[**trackingTrackTransportOrder**](SalesApi.md#trackingTrackTransportOrder) | **POST** /sales/transportorder/tracking | Return all transport order tracking events
[**xmlTransportOrder**](SalesApi.md#xmlTransportOrder) | **POST** /sales/transportorder/xml | Return a CTe XML string by Document Number and Customer Document


# **quotationCalculateQuotation**
> \Swagger\Client\Model\QuotationResponse quotationCalculateQuotation($company_key, $model)

Retun a freight quotation based on parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$model = new \Swagger\Client\Model\QuotationRequest(); // \Swagger\Client\Model\QuotationRequest | 

try {
    $result = $apiInstance->quotationCalculateQuotation($company_key, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->quotationCalculateQuotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **model** | [**\Swagger\Client\Model\QuotationRequest**](../Model/QuotationRequest.md)|  |

### Return type

[**\Swagger\Client\Model\QuotationResponse**](../Model/QuotationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, text/plain, text/html
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesTransportorderCancelPost**
> salesTransportorderCancelPost($company_key, $minute, $session_id, $session_token, $user_id, $token, $station)

Cancel a booking.

To use this method you should use sessionId and sessionToken or userId,token and station.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$minute = new \Swagger\Client\Model\CancelRequest(); // \Swagger\Client\Model\CancelRequest | 
$session_id = 8.14; // float | Session id example \"50836\"
$session_token = 8.14; // float | Session token example \"3213SADADSAD3121GASAGASDSADADA\"
$user_id = 8.14; // float | Example \"50836\"
$token = "token_example"; // string | Example \"ease3dsadas1\"
$station = "station_example"; // string | Example \"GRU\"

try {
    $apiInstance->salesTransportorderCancelPost($company_key, $minute, $session_id, $session_token, $user_id, $token, $station);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesTransportorderCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **minute** | [**\Swagger\Client\Model\CancelRequest**](../Model/CancelRequest.md)|  |
 **session_id** | **float**| Session id example \&quot;50836\&quot; | [optional]
 **session_token** | **float**| Session token example \&quot;3213SADADSAD3121GASAGASDSADADA\&quot; | [optional]
 **user_id** | **float**| Example \&quot;50836\&quot; | [optional]
 **token** | **string**| Example \&quot;ease3dsadas1\&quot; | [optional]
 **station** | **string**| Example \&quot;GRU\&quot; | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesTransportorderDacteDocumentNumberGet**
> \SplFileObject salesTransportorderDacteDocumentNumberGet($document_number, $company_key, $session_id, $session_token, $user_id, $token, $station)

Get a transport order DACTE by document number

To use this method you should use sessionId and sessionToken or userId,token and station.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$document_number = "document_number_example"; // string | The transport order document number.
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$session_id = 8.14; // float | Session id example \"50836\"
$session_token = 8.14; // float | Session token example \"3213SADADSAD3121GASAGASDSADADA\"
$user_id = 8.14; // float | Example \"50836\"
$token = "token_example"; // string | Example \"ease3dsadas1\"
$station = "station_example"; // string | Example \"GRU\"

try {
    $result = $apiInstance->salesTransportorderDacteDocumentNumberGet($document_number, $company_key, $session_id, $session_token, $user_id, $token, $station);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesTransportorderDacteDocumentNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_number** | **string**| The transport order document number. |
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **session_id** | **float**| Session id example \&quot;50836\&quot; | [optional]
 **session_token** | **float**| Session token example \&quot;3213SADADSAD3121GASAGASDSADADA\&quot; | [optional]
 **user_id** | **float**| Example \&quot;50836\&quot; | [optional]
 **token** | **string**| Example \&quot;ease3dsadas1\&quot; | [optional]
 **station** | **string**| Example \&quot;GRU\&quot; | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesTransportorderMinutePost**
> \Swagger\Client\Model\MinuteResponse salesTransportorderMinutePost($company_key, $minute, $session_id, $session_token, $user_id, $token, $station)

Create a freight book based on parameters.

To use this method you should use sessionId and sessionToken or userId,token and station.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$minute = new \Swagger\Client\Model\Minute(); // \Swagger\Client\Model\Minute | 
$session_id = 8.14; // float | Session id example \"50836\"
$session_token = 8.14; // float | Session token example \"3213SADADSAD3121GASAGASDSADADA\"
$user_id = 8.14; // float | Example \"50836\"
$token = "token_example"; // string | Example \"ease3dsadas1\"
$station = "station_example"; // string | Example \"GRU\"

try {
    $result = $apiInstance->salesTransportorderMinutePost($company_key, $minute, $session_id, $session_token, $user_id, $token, $station);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesTransportorderMinutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **minute** | [**\Swagger\Client\Model\Minute**](../Model/Minute.md)|  |
 **session_id** | **float**| Session id example \&quot;50836\&quot; | [optional]
 **session_token** | **float**| Session token example \&quot;3213SADADSAD3121GASAGASDSADADA\&quot; | [optional]
 **user_id** | **float**| Example \&quot;50836\&quot; | [optional]
 **token** | **string**| Example \&quot;ease3dsadas1\&quot; | [optional]
 **station** | **string**| Example \&quot;GRU\&quot; | [optional]

### Return type

[**\Swagger\Client\Model\MinuteResponse**](../Model/MinuteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesTransportorderTrackingCustomerdocumentPost**
> \Swagger\Client\Model\TrackTransportOrderCustomrDocumentResponse salesTransportorderTrackingCustomerdocumentPost($company_key, $model)

Return last action from  transport orders what had status change in the last 3 days by customer document number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$model = new \Swagger\Client\Model\TrackingByCustomerDocument(); // \Swagger\Client\Model\TrackingByCustomerDocument | 

try {
    $result = $apiInstance->salesTransportorderTrackingCustomerdocumentPost($company_key, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->salesTransportorderTrackingCustomerdocumentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **model** | [**\Swagger\Client\Model\TrackingByCustomerDocument**](../Model/TrackingByCustomerDocument.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TrackTransportOrderCustomrDocumentResponse**](../Model/TrackTransportOrderCustomrDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackingTrackTransportOrder**
> \Swagger\Client\Model\TrackTransportOrderResponse trackingTrackTransportOrder($company_key, $model)

Return all transport order tracking events

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$model = new \Swagger\Client\Model\TrackTransportOrderRequest(); // \Swagger\Client\Model\TrackTransportOrderRequest | 

try {
    $result = $apiInstance->trackingTrackTransportOrder($company_key, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->trackingTrackTransportOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **model** | [**\Swagger\Client\Model\TrackTransportOrderRequest**](../Model/TrackTransportOrderRequest.md)|  |

### Return type

[**\Swagger\Client\Model\TrackTransportOrderResponse**](../Model/TrackTransportOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded, text/plain, text/html
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xmlTransportOrder**
> \Swagger\Client\Model\XMLResponse xmlTransportOrder($company_key, $model)

Return a CTe XML string by Document Number and Customer Document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$model = new \Swagger\Client\Model\XMLRequest(); // \Swagger\Client\Model\XMLRequest | 

try {
    $result = $apiInstance->xmlTransportOrder($company_key, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->xmlTransportOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **model** | [**\Swagger\Client\Model\XMLRequest**](../Model/XMLRequest.md)|  |

### Return type

[**\Swagger\Client\Model\XMLResponse**](../Model/XMLResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

