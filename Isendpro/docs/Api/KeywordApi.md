# Isendpro\KeywordApi

All URIs are relative to *https://apirest.isendpro.com/cgi-bin*

Method | HTTP request | Description
------------- | ------------- | -------------
[**keywordEdit**](KeywordApi.md#keywordEdit) | **GET** /keyword | Deposer ou supprimer un mot clé


# **keywordEdit**
> \Isendpro\Model\KeywordResponse keywordEdit($keyid, $keyword_edit, $keyword_label)

Deposer ou supprimer un mot clé

Ajoute ou supprime

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Isendpro\Api\KeywordApi();
$keyid = "keyid_example"; // string | Clé API
$keyword_edit = "keyword_edit_example"; // string | add pour ajouer, del pour supprimer
$keyword_label = "keyword_label_example"; // string | Mot clé à réserver

try {
    $result = $api_instance->keywordEdit($keyid, $keyword_edit, $keyword_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KeywordApi->keywordEdit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keyid** | **string**| Clé API |
 **keyword_edit** | **string**| add pour ajouer, del pour supprimer |
 **keyword_label** | **string**| Mot clé à réserver |

### Return type

[**\Isendpro\Model\KeywordResponse**](../Model/KeywordResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

