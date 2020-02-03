# Swagger\Client\OperationsApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**operationsPoints**](OperationsApi.md#operationsPoints) | **GET** /operations/points/ | Return operational points


# **operationsPoints**
> \Swagger\Client\Model\PointResponse operationsPoints($company_key, $code)

Return operational points

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$code = "code_example"; // string | Station Code.

try {
    $result = $apiInstance->operationsPoints($company_key, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->operationsPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **code** | **string**| Station Code. | [optional]

### Return type

[**\Swagger\Client\Model\PointResponse**](../Model/PointResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

