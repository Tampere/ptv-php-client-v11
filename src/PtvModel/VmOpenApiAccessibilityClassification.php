<?php
/**
 * VmOpenApiAccessibilityClassification
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
 * VmOpenApiAccessibilityClassification Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of type by language
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VmOpenApiAccessibilityClassification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VmOpenApiAccessibilityClassification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accessibilityClassificationLevel' => 'string',
'wcagLevel' => 'string',
'accessibilityStatementWebPageName' => 'string',
'accessibilityStatementWebPage' => 'string',
'language' => 'string',
'id' => 'string',
'ownerReferenceId' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accessibilityClassificationLevel' => null,
'wcagLevel' => null,
'accessibilityStatementWebPageName' => null,
'accessibilityStatementWebPage' => null,
'language' => null,
'id' => 'uuid',
'ownerReferenceId' => 'uuid'    ];

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
        'accessibilityClassificationLevel' => 'accessibilityClassificationLevel',
'wcagLevel' => 'wcagLevel',
'accessibilityStatementWebPageName' => 'accessibilityStatementWebPageName',
'accessibilityStatementWebPage' => 'accessibilityStatementWebPage',
'language' => 'language',
'id' => 'id',
'ownerReferenceId' => 'ownerReferenceId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessibilityClassificationLevel' => 'setAccessibilityClassificationLevel',
'wcagLevel' => 'setWcagLevel',
'accessibilityStatementWebPageName' => 'setAccessibilityStatementWebPageName',
'accessibilityStatementWebPage' => 'setAccessibilityStatementWebPage',
'language' => 'setLanguage',
'id' => 'setId',
'ownerReferenceId' => 'setOwnerReferenceId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessibilityClassificationLevel' => 'getAccessibilityClassificationLevel',
'wcagLevel' => 'getWcagLevel',
'accessibilityStatementWebPageName' => 'getAccessibilityStatementWebPageName',
'accessibilityStatementWebPage' => 'getAccessibilityStatementWebPage',
'language' => 'getLanguage',
'id' => 'getId',
'ownerReferenceId' => 'getOwnerReferenceId'    ];

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
        $this->container['accessibilityClassificationLevel'] = isset($data['accessibilityClassificationLevel']) ? $data['accessibilityClassificationLevel'] : null;
        $this->container['wcagLevel'] = isset($data['wcagLevel']) ? $data['wcagLevel'] : null;
        $this->container['accessibilityStatementWebPageName'] = isset($data['accessibilityStatementWebPageName']) ? $data['accessibilityStatementWebPageName'] : null;
        $this->container['accessibilityStatementWebPage'] = isset($data['accessibilityStatementWebPage']) ? $data['accessibilityStatementWebPage'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ownerReferenceId'] = isset($data['ownerReferenceId']) ? $data['ownerReferenceId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['accessibilityClassificationLevel'] === null) {
            $invalidProperties[] = "'accessibilityClassificationLevel' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
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
     * Gets accessibilityClassificationLevel
     *
     * @return string
     */
    public function getAccessibilityClassificationLevel()
    {
        return $this->container['accessibilityClassificationLevel'];
    }

    /**
     * Sets accessibilityClassificationLevel
     *
     * @param string $accessibilityClassificationLevel Gets or sets the accessibility classification level.
     *
     * @return $this
     */
    public function setAccessibilityClassificationLevel($accessibilityClassificationLevel)
    {
        $this->container['accessibilityClassificationLevel'] = $accessibilityClassificationLevel;

        return $this;
    }

    /**
     * Gets wcagLevel
     *
     * @return string
     */
    public function getWcagLevel()
    {
        return $this->container['wcagLevel'];
    }

    /**
     * Sets wcagLevel
     *
     * @param string $wcagLevel Gets or sets the wcag level.
     *
     * @return $this
     */
    public function setWcagLevel($wcagLevel)
    {
        $this->container['wcagLevel'] = $wcagLevel;

        return $this;
    }

    /**
     * Gets accessibilityStatementWebPageName
     *
     * @return string
     */
    public function getAccessibilityStatementWebPageName()
    {
        return $this->container['accessibilityStatementWebPageName'];
    }

    /**
     * Sets accessibilityStatementWebPageName
     *
     * @param string $accessibilityStatementWebPageName Gets or sets the accessibility classification web page name. (Max.Length: 100).
     *
     * @return $this
     */
    public function setAccessibilityStatementWebPageName($accessibilityStatementWebPageName)
    {
        $this->container['accessibilityStatementWebPageName'] = $accessibilityStatementWebPageName;

        return $this;
    }

    /**
     * Gets accessibilityStatementWebPage
     *
     * @return string
     */
    public function getAccessibilityStatementWebPage()
    {
        return $this->container['accessibilityStatementWebPage'];
    }

    /**
     * Sets accessibilityStatementWebPage
     *
     * @param string $accessibilityStatementWebPage Gets or sets the accessibility classification web page url. (Max.Length: 500).
     *
     * @return $this
     */
    public function setAccessibilityStatementWebPage($accessibilityStatementWebPage)
    {
        $this->container['accessibilityStatementWebPage'] = $accessibilityStatementWebPage;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language code.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Gets or sets the identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ownerReferenceId
     *
     * @return string
     */
    public function getOwnerReferenceId()
    {
        return $this->container['ownerReferenceId'];
    }

    /**
     * Sets ownerReferenceId
     *
     * @param string $ownerReferenceId Gets or sets the owner reference identifier.
     *
     * @return $this
     */
    public function setOwnerReferenceId($ownerReferenceId)
    {
        $this->container['ownerReferenceId'] = $ownerReferenceId;

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
