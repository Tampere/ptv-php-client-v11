<?php
/**
 * VmOpenApiAccessibilitySentence
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PTV Open Api version 11
 *
 * Here you can see listed all the PTV Open Api methods.
 *
 * OpenAPI spec version: v11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tampere\PtvV11\PtvModel;

use \ArrayAccess;
use \Tampere\PtvV11\ObjectSerializer;

/**
 * VmOpenApiAccessibilitySentence Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of accessibility sentences.
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VmOpenApiAccessibilitySentence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VmOpenApiAccessibilitySentence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sentenceGroup' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'sentences' => '\Tampere\PtvV11\PtvModel\VmOpenApiSentenceValue[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sentenceGroup' => null,
'sentences' => null    ];

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
        'sentenceGroup' => 'sentenceGroup',
'sentences' => 'sentences'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sentenceGroup' => 'setSentenceGroup',
'sentences' => 'setSentences'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sentenceGroup' => 'getSentenceGroup',
'sentences' => 'getSentences'    ];

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
        $this->container['sentenceGroup'] = isset($data['sentenceGroup']) ? $data['sentenceGroup'] : null;
        $this->container['sentences'] = isset($data['sentences']) ? $data['sentences'] : null;
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
     * Gets sentenceGroup
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getSentenceGroup()
    {
        return isset($this->container['sentenceGroup']) ? $this->container['sentenceGroup'] : null;
    }

    /**
     * Sets sentenceGroup
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $sentenceGroup List of localized sentence group names.
     *
     * @return $this
     */
    public function setSentenceGroup($sentenceGroup)
    {
        $this->container['sentenceGroup'] = $sentenceGroup;

        return $this;
    }

    /**
     * Gets sentences
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiSentenceValue[]
     */
    public function getSentences()
    {
        return isset($this->container['sentences']) ? $this->container['sentences'] : null;
    }

    /**
     * Sets sentences
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiSentenceValue[] $sentences List of localized sentences.
     *
     * @return $this
     */
    public function setSentences($sentences)
    {
        $this->container['sentences'] = $sentences;

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
