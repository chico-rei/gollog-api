<?php
/**
 * TrackingByCustomerDocument
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Central do desenvolvedor - Nexlog API
 *
 * De maneira pratica e rápida, entenda como conectar e consumir todas as informações necessárias para seu negócio. </br> <h2> Ambientes</h2> Os ambientes do gateway de integração são divididos atualmente em 2 ambientes:<br> &ensp;&ensp;&ensp;&ensp;&ensp;<b>QA</b>:&ensp;ambiente utilizado para desenvolvimento de novas integrações e testes com os clientes e parceiros.<br>&ensp;&ensp;&ensp;<b>Prod</b>:&ensp;ambiente de produção com todas os serviços expostos com certificação de qualidade. </br> <h2>Informações Adicionais</h2>                 A central do desenvolvedor conta com uma completa documentação referente a todos os APIs expostos, com exemplos de request/response, modelo e possibilidade de realizar testes direto no barramento. </br></br> Atualmente nossa central está separada com 2 dominios de integração:</br>&ensp;&ensp;&ensp; <b>- Account</b> <br> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Serviços para autenticação quando necessário.</br>&ensp;&ensp;&ensp; <b>- Sales</b> <br> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Disponibilização de serviços para utilização de rastreio, cotações, minutas e documentos autorizados.<br>&ensp;&ensp;&ensp; <b>- Operations</b> <br> &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Disponibilização de consulta de bases operacionais.<br>(*)Dependendo do endpoint utilizado, algumas informações são obrigatórias, como identificador da aplicação/cliente e token.<br><br> Dúvidas sobre como utilizar, entre em contato br-operations@ttinteractive.com
 *
 * OpenAPI spec version: V1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * TrackingByCustomerDocument Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TrackingByCustomerDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TrackingByCustomerDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_token' => 'string',
        'customer_document' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_token' => null,
        'customer_document' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'customer_token' => 'customerToken',
        'customer_document' => 'customerDocument'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_token' => 'setCustomerToken',
        'customer_document' => 'setCustomerDocument'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_token' => 'getCustomerToken',
        'customer_document' => 'getCustomerDocument'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['customer_token'] = isset($data['customer_token']) ? $data['customer_token'] : null;
        $this->container['customer_document'] = isset($data['customer_document']) ? $data['customer_document'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets customer_token
     *
     * @return string
     */
    public function getCustomerToken()
    {
        return $this->container['customer_token'];
    }

    /**
     * Sets customer_token
     *
     * @param string $customer_token customer_token
     *
     * @return $this
     */
    public function setCustomerToken($customer_token)
    {
        $this->container['customer_token'] = $customer_token;

        return $this;
    }

    /**
     * Gets customer_document
     *
     * @return string
     */
    public function getCustomerDocument()
    {
        return $this->container['customer_document'];
    }

    /**
     * Sets customer_document
     *
     * @param string $customer_document customer_document
     *
     * @return $this
     */
    public function setCustomerDocument($customer_document)
    {
        $this->container['customer_document'] = $customer_document;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


