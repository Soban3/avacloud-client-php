<?php
/**
 * IElementDto
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
 * IElementDto Class Doc Comment
 *
 * @category Class
 * @description Base interface definition for elements within an ElementContainerBase.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IElementDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'elementTypeDiscriminator';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IElementDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'gaeb_xml_id' => 'string',
        'addendum_number' => 'string',
        'project_catalogues' => '\Dangl\AVACloud\Model\CatalogueDto[]',
        'catalogue_references' => '\Dangl\AVACloud\Model\CatalogueReferenceDto[]',
        'element_type_discriminator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'gaeb_xml_id' => null,
        'addendum_number' => null,
        'project_catalogues' => null,
        'catalogue_references' => null,
        'element_type_discriminator' => null
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
        'gaeb_xml_id' => 'gaebXmlId',
        'addendum_number' => 'addendumNumber',
        'project_catalogues' => 'projectCatalogues',
        'catalogue_references' => 'catalogueReferences',
        'element_type_discriminator' => 'elementTypeDiscriminator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'gaeb_xml_id' => 'setGaebXmlId',
        'addendum_number' => 'setAddendumNumber',
        'project_catalogues' => 'setProjectCatalogues',
        'catalogue_references' => 'setCatalogueReferences',
        'element_type_discriminator' => 'setElementTypeDiscriminator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'gaeb_xml_id' => 'getGaebXmlId',
        'addendum_number' => 'getAddendumNumber',
        'project_catalogues' => 'getProjectCatalogues',
        'catalogue_references' => 'getCatalogueReferences',
        'element_type_discriminator' => 'getElementTypeDiscriminator'
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
        $this->container['gaeb_xml_id'] = isset($data['gaeb_xml_id']) ? $data['gaeb_xml_id'] : null;
        $this->container['addendum_number'] = isset($data['addendum_number']) ? $data['addendum_number'] : null;
        $this->container['project_catalogues'] = isset($data['project_catalogues']) ? $data['project_catalogues'] : null;
        $this->container['catalogue_references'] = isset($data['catalogue_references']) ? $data['catalogue_references'] : null;
        $this->container['element_type_discriminator'] = isset($data['element_type_discriminator']) ? $data['element_type_discriminator'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('elementTypeDiscriminator', self::$attributeMap, true);
        $this->container[$discriminator] = static::$swaggerModelName;
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
        if ($this->container['element_type_discriminator'] === null) {
            $invalidProperties[] = "'element_type_discriminator' can't be null";
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
     * Gets gaeb_xml_id
     *
     * @return string
     */
    public function getGaebXmlId()
    {
        return $this->container['gaeb_xml_id'];
    }

    /**
     * Sets gaeb_xml_id
     *
     * @param string $gaeb_xml_id This is used to store the GAEB XML Id within this IElement. This data is not used for any calculations or evaluations but only for GAEB serialization and deserialization.
     *
     * @return $this
     */
    public function setGaebXmlId($gaeb_xml_id)
    {
        $this->container['gaeb_xml_id'] = $gaeb_xml_id;

        return $this;
    }

    /**
     * Gets addendum_number
     *
     * @return string
     */
    public function getAddendumNumber()
    {
        return $this->container['addendum_number'];
    }

    /**
     * Sets addendum_number
     *
     * @param string $addendum_number This optional string property is shared by all IElements, and indicates if the element is part of an addendum, a 'Nachtrag' in German.
     *
     * @return $this
     */
    public function setAddendumNumber($addendum_number)
    {
        $this->container['addendum_number'] = $addendum_number;

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
     * @param \Dangl\AVACloud\Model\CatalogueDto[] $project_catalogues project_catalogues
     *
     * @return $this
     */
    public function setProjectCatalogues($project_catalogues)
    {
        $this->container['project_catalogues'] = $project_catalogues;

        return $this;
    }

    /**
     * Gets catalogue_references
     *
     * @return \Dangl\AVACloud\Model\CatalogueReferenceDto[]
     */
    public function getCatalogueReferences()
    {
        return $this->container['catalogue_references'];
    }

    /**
     * Sets catalogue_references
     *
     * @param \Dangl\AVACloud\Model\CatalogueReferenceDto[] $catalogue_references catalogue_references
     *
     * @return $this
     */
    public function setCatalogueReferences($catalogue_references)
    {
        $this->container['catalogue_references'] = $catalogue_references;

        return $this;
    }

    /**
     * Gets element_type_discriminator
     *
     * @return string
     */
    public function getElementTypeDiscriminator()
    {
        return $this->container['element_type_discriminator'];
    }

    /**
     * Sets element_type_discriminator
     *
     * @param string $element_type_discriminator element_type_discriminator
     *
     * @return $this
     */
    public function setElementTypeDiscriminator($element_type_discriminator)
    {
        $this->container['element_type_discriminator'] = $element_type_discriminator;

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


