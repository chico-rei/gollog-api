# Swagger\Client\AccountApi

All URIs are relative to *http://localhost/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountSignIn**](AccountApi.md#accountSignIn) | **POST** /account/signin | Log user into the system
[**accountSignOut**](AccountApi.md#accountSignOut) | **POST** /account/signout | Log out current logged in user session


# **accountSignIn**
> \Swagger\Client\Model\SignInResponse accountSignIn($company_key, $model)

Log user into the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code \"example G1\"
$model = new \Swagger\Client\Model\Model(); // \Swagger\Client\Model\Model | Sigin model with login information

try {
    $result = $apiInstance->accountSignIn($company_key, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountSignIn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code \&quot;example G1\&quot; |
 **model** | [**\Swagger\Client\Model\Model**](../Model/Model.md)| Sigin model with login information |

### Return type

[**\Swagger\Client\Model\SignInResponse**](../Model/SignInResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountSignOut**
> accountSignOut($company_key, $session_id, $session_token)

Log out current logged in user session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$company_key = "company_key_example"; // string | IATA company code example \"G1\"
$session_id = 8.14; // float | Session id example \"50836\"
$session_token = "session_token_example"; // string | Session token example \"d29608a44094429b8b40723018cd201\"

try {
    $apiInstance->accountSignOut($company_key, $session_id, $session_token);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountSignOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_key** | **string**| IATA company code example \&quot;G1\&quot; |
 **session_id** | **float**| Session id example \&quot;50836\&quot; |
 **session_token** | **string**| Session token example \&quot;d29608a44094429b8b40723018cd201\&quot; |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

