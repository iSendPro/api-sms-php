<?php
/**
 * HlrApi
 * PHP version 5
 *
 * @category Class
 * @package  Isendpro
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API iSendPro
 *
 * [1] Liste des fonctionnalités : - envoi de SMS à un ou plusieurs destinataires, - lookup HLR, - récupération des récapitulatifs de campagne, - gestion des répertoires, - ajout en liste noire. - comptage du nombre de caractères des SMS  [2] Pour utiliser cette API vous devez: - Créer un compte iSendPro sur https://isendpro.com/ - Créditer votre compte      - Remarque: obtention d'un crédit de test possible sous conditions - Noter votre clé de compte (keyid)   - Elle vous sera indispensable à l'utilisation de l'API   - Vous pouvez la trouver dans le rubrique mon \"compte\", sous-rubrique \"mon API\" - Configurer le contrôle IP   - Le contrôle IP est configurable dans le rubrique mon \"compte\", sous-rubrique \"mon API\"   - Il s'agit d'un système de liste blanche, vous devez entrer les IP utilisées pour appeler l'API   - Vous pouvez également désactiver totalement le contrôle IP
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@isendpro.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Isendpro\Api;

use \Isendpro\ApiClient;
use \Isendpro\ApiException;
use \Isendpro\Configuration;
use \Isendpro\ObjectSerializer;

/**
 * HlrApi Class Doc Comment
 *
 * @category Class
 * @package  Isendpro
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HlrApi
{
    /**
     * API Client
     *
     * @var \Isendpro\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Isendpro\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Isendpro\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Isendpro\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Isendpro\ApiClient $apiClient set the API client
     *
     * @return HlrApi
     */
    public function setApiClient(\Isendpro\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getHlr
     *
     * Vérifier la validité d'un numéro
     *
     * @param \Isendpro\Model\HLRrequest $hlrrequest  (required)
     * @throws \Isendpro\ApiException on non-2xx response
     * @return \Isendpro\Model\HLRReponse
     */
    public function getHlr($hlrrequest)
    {
        list($response) = $this->getHlrWithHttpInfo($hlrrequest);
        return $response;
    }

    /**
     * Operation getHlrWithHttpInfo
     *
     * Vérifier la validité d'un numéro
     *
     * @param \Isendpro\Model\HLRrequest $hlrrequest  (required)
     * @throws \Isendpro\ApiException on non-2xx response
     * @return array of \Isendpro\Model\HLRReponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHlrWithHttpInfo($hlrrequest)
    {
        // verify the required parameter 'hlrrequest' is set
        if ($hlrrequest === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hlrrequest when calling getHlr');
        }
        // parse inputs
        $resourcePath = "/hlr";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($hlrrequest)) {
            $_tempBody = $hlrrequest;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Isendpro\Model\HLRReponse',
                '/hlr'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Isendpro\Model\HLRReponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Isendpro\Model\HLRReponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Isendpro\Model\Erreur', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
