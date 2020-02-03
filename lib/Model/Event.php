<?php
/**
 * Event
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
 * Event Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agent' => 'string',
        'pid' => 'string',
        'station' => 'string',
        'event_date_time_lt' => 'string',
        'event_date_time_gmt' => 'string',
        'status' => '\Swagger\Client\Model\Status'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agent' => null,
        'pid' => null,
        'station' => null,
        'event_date_time_lt' => null,
        'event_date_time_gmt' => null,
        'status' => null
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
        'agent' => 'agent',
        'pid' => 'pid',
        'station' => 'station',
        'event_date_time_lt' => 'eventDateTimeLT',
        'event_date_time_gmt' => 'eventDateTimeGMT',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agent' => 'setAgent',
        'pid' => 'setPid',
        'station' => 'setStation',
        'event_date_time_lt' => 'setEventDateTimeLt',
        'event_date_time_gmt' => 'setEventDateTimeGmt',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agent' => 'getAgent',
        'pid' => 'getPid',
        'station' => 'getStation',
        'event_date_time_lt' => 'getEventDateTimeLt',
        'event_date_time_gmt' => 'getEventDateTimeGmt',
        'status' => 'getStatus'
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
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['station'] = isset($data['station']) ? $data['station'] : null;
        $this->container['event_date_time_lt'] = isset($data['event_date_time_lt']) ? $data['event_date_time_lt'] : null;
        $this->container['event_date_time_gmt'] = isset($data['event_date_time_gmt']) ? $data['event_date_time_gmt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets agent
     *
     * @return string
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param string $agent Agent
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return string
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param string $pid pid
     *
     * @return $this
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets station
     *
     * @return string
     */
    public function getStation()
    {
        return $this->container['station'];
    }

    /**
     * Sets station
     *
     * @param string $station Station example \"GRU\".
     *
     * @return $this
     */
    public function setStation($station)
    {
        $this->container['station'] = $station;

        return $this;
    }

    /**
     * Gets event_date_time_lt
     *
     * @return string
     */
    public function getEventDateTimeLt()
    {
        return $this->container['event_date_time_lt'];
    }

    /**
     * Sets event_date_time_lt
     *
     * @param string $event_date_time_lt Event date time (Local time) Sao Paulo (GMT-3)
     *
     * @return $this
     */
    public function setEventDateTimeLt($event_date_time_lt)
    {
        $this->container['event_date_time_lt'] = $event_date_time_lt;

        return $this;
    }

    /**
     * Gets event_date_time_gmt
     *
     * @return string
     */
    public function getEventDateTimeGmt()
    {
        return $this->container['event_date_time_gmt'];
    }

    /**
     * Sets event_date_time_gmt
     *
     * @param string $event_date_time_gmt Event date time GMT
     *
     * @return $this
     */
    public function setEventDateTimeGmt($event_date_time_gmt)
    {
        $this->container['event_date_time_gmt'] = $event_date_time_gmt;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Swagger\Client\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Swagger\Client\Model\Status $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


