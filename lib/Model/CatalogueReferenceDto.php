<?php
/**
 * CatalogueReferenceDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.30.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.30.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dangl\AVACloud\Model;

use \ArrayAccess;
use \Dangl\AVACloud\ObjectSerializer;

/**
 * CatalogueReferenceDto Class Doc Comment
 *
 * @category Class
 * @description This class is used to link data between catalogues and objects.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogueReferenceDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CatalogueReferenceDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'catalogue_reference_key' => 'string',
        'catalogue_reference_id' => 'string',
        'project_catalogues' => '\Dangl\AVACloud\Model\CatalogueDto[]',
        'catalogue' => '\Dangl\AVACloud\Model\CatalogueDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'catalogue_reference_key' => null,
        'catalogue_reference_id' => 'guid',
        'project_catalogues' => null,
        'catalogue' => null
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
        'id' => 'id',
        'catalogue_reference_key' => 'catalogueReferenceKey',
        'catalogue_reference_id' => 'catalogueReferenceId',
        'project_catalogues' => 'projectCatalogues',
        'catalogue' => 'catalogue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'catalogue_reference_key' => 'setCatalogueReferenceKey',
        'catalogue_reference_id' => 'setCatalogueReferenceId',
        'project_catalogues' => 'setProjectCatalogues',
        'catalogue' => 'setCatalogue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'catalogue_reference_key' => 'getCatalogueReferenceKey',
        'catalogue_reference_id' => 'getCatalogueReferenceId',
        'project_catalogues' => 'getProjectCatalogues',
        'catalogue' => 'getCatalogue'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['catalogue_reference_key'] = isset($data['catalogue_reference_key']) ? $data['catalogue_reference_key'] : null;
        $this->container['catalogue_reference_id'] = isset($data['catalogue_reference_id']) ? $data['catalogue_reference_id'] : null;
        $this->container['project_catalogues'] = isset($data['project_catalogues']) ? $data['project_catalogues'] : null;
        $this->container['catalogue'] = isset($data['catalogue']) ? $data['catalogue'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['catalogue_reference_id'] === null) {
            $invalidProperties[] = "'catalogue_reference_id' can't be null";
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
     * @param string $id Elements GUID identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets catalogue_reference_key
     *
     * @return string
     */
    public function getCatalogueReferenceKey()
    {
        return $this->container['catalogue_reference_key'];
    }

    /**
     * Sets catalogue_reference_key
     *
     * @param string $catalogue_reference_key This points to the item in the catalogue itself. This means that, for example when this quantity assignment references a \"DIN 276\" catalogue, this property indicates the number / identifier / key in DIN 276 that is referenced.
     *
     * @return $this
     */
    public function setCatalogueReferenceKey($catalogue_reference_key)
    {
        $this->container['catalogue_reference_key'] = $catalogue_reference_key;

        return $this;
    }

    /**
     * Gets catalogue_reference_id
     *
     * @return string
     */
    public function getCatalogueReferenceId()
    {
        return $this->container['catalogue_reference_id'];
    }

    /**
     * Sets catalogue_reference_id
     *
     * @param string $catalogue_reference_id The Id of the CatalogueReference that is targeted by this item. Set this property to set the referenced catalogue.
     *
     * @return $this
     */
    public function setCatalogueReferenceId($catalogue_reference_id)
    {
        $this->container['catalogue_reference_id'] = $catalogue_reference_id;

        return $this;
    }

    /**
     * Gets project_catalogues
     *
     * @return \Dangl\AVACloud\Model\CatalogueDto[]
     */
    public function getProjectCatalogues()
    {
        return $this->container['project_catalogues'];
    }

    /**
     * Sets project_catalogues
     *
     * @param \Dangl\AVACloud\Model\CatalogueDto[] $project_catalogues These are CatalogueReference that are used within this ServiceSpecification. Catalogue references are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves.
     *
     * @return $this
     */
    public function setProjectCatalogues($project_catalogues)
    {
        $this->container['project_catalogues'] = $project_catalogues;

        return $this;
    }

    /**
     * Gets catalogue
     *
     * @return \Dangl\AVACloud\Model\CatalogueDto
     */
    public function getCatalogue()
    {
        return $this->container['catalogue'];
    }

    /**
     * Sets catalogue
     *
     * @param \Dangl\AVACloud\Model\CatalogueDto $catalogue This returns the referenced catalogue. Will return null if there is no reference or the catalogue is not present in the ProjectCatalogues.
     *
     * @return $this
     */
    public function setCatalogue($catalogue)
    {
        $this->container['catalogue'] = $catalogue;

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


