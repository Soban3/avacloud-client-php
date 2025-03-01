<?php
/**
 * PostGaebDestinationOptions
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
 * PostGaebDestinationOptions Class Doc Comment
 *
 * @category Class
 * @description Options for conversions to GAEB
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PostGaebDestinationOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PostGaebDestinationOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_gaeb_type' => '\Dangl\AVACloud\Model\DestinationGaebType',
        'target_exchange_phase_transform' => '\Dangl\AVACloud\Model\DestinationGaebExchangePhase',
        'enforce_strict_offer_phase_long_text_output' => 'bool',
        'export_quantity_determination' => 'bool',
        'remove_unprintable_characters_from_texts' => 'bool',
        'force_include_descriptions' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_gaeb_type' => null,
        'target_exchange_phase_transform' => null,
        'enforce_strict_offer_phase_long_text_output' => null,
        'export_quantity_determination' => null,
        'remove_unprintable_characters_from_texts' => null,
        'force_include_descriptions' => null
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
        'destination_gaeb_type' => 'destinationGaebType',
        'target_exchange_phase_transform' => 'targetExchangePhaseTransform',
        'enforce_strict_offer_phase_long_text_output' => 'enforceStrictOfferPhaseLongTextOutput',
        'export_quantity_determination' => 'exportQuantityDetermination',
        'remove_unprintable_characters_from_texts' => 'removeUnprintableCharactersFromTexts',
        'force_include_descriptions' => 'forceIncludeDescriptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_gaeb_type' => 'setDestinationGaebType',
        'target_exchange_phase_transform' => 'setTargetExchangePhaseTransform',
        'enforce_strict_offer_phase_long_text_output' => 'setEnforceStrictOfferPhaseLongTextOutput',
        'export_quantity_determination' => 'setExportQuantityDetermination',
        'remove_unprintable_characters_from_texts' => 'setRemoveUnprintableCharactersFromTexts',
        'force_include_descriptions' => 'setForceIncludeDescriptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_gaeb_type' => 'getDestinationGaebType',
        'target_exchange_phase_transform' => 'getTargetExchangePhaseTransform',
        'enforce_strict_offer_phase_long_text_output' => 'getEnforceStrictOfferPhaseLongTextOutput',
        'export_quantity_determination' => 'getExportQuantityDetermination',
        'remove_unprintable_characters_from_texts' => 'getRemoveUnprintableCharactersFromTexts',
        'force_include_descriptions' => 'getForceIncludeDescriptions'
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
        $this->container['destination_gaeb_type'] = isset($data['destination_gaeb_type']) ? $data['destination_gaeb_type'] : null;
        $this->container['target_exchange_phase_transform'] = isset($data['target_exchange_phase_transform']) ? $data['target_exchange_phase_transform'] : null;
        $this->container['enforce_strict_offer_phase_long_text_output'] = isset($data['enforce_strict_offer_phase_long_text_output']) ? $data['enforce_strict_offer_phase_long_text_output'] : null;
        $this->container['export_quantity_determination'] = isset($data['export_quantity_determination']) ? $data['export_quantity_determination'] : null;
        $this->container['remove_unprintable_characters_from_texts'] = isset($data['remove_unprintable_characters_from_texts']) ? $data['remove_unprintable_characters_from_texts'] : null;
        $this->container['force_include_descriptions'] = isset($data['force_include_descriptions']) ? $data['force_include_descriptions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['destination_gaeb_type'] === null) {
            $invalidProperties[] = "'destination_gaeb_type' can't be null";
        }
        if ($this->container['target_exchange_phase_transform'] === null) {
            $invalidProperties[] = "'target_exchange_phase_transform' can't be null";
        }
        if ($this->container['enforce_strict_offer_phase_long_text_output'] === null) {
            $invalidProperties[] = "'enforce_strict_offer_phase_long_text_output' can't be null";
        }
        if ($this->container['export_quantity_determination'] === null) {
            $invalidProperties[] = "'export_quantity_determination' can't be null";
        }
        if ($this->container['remove_unprintable_characters_from_texts'] === null) {
            $invalidProperties[] = "'remove_unprintable_characters_from_texts' can't be null";
        }
        if ($this->container['force_include_descriptions'] === null) {
            $invalidProperties[] = "'force_include_descriptions' can't be null";
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
     * Gets destination_gaeb_type
     *
     * @return \Dangl\AVACloud\Model\DestinationGaebType
     */
    public function getDestinationGaebType()
    {
        return $this->container['destination_gaeb_type'];
    }

    /**
     * Sets destination_gaeb_type
     *
     * @param \Dangl\AVACloud\Model\DestinationGaebType $destination_gaeb_type Defaults to GAEB XML V3.2
     *
     * @return $this
     */
    public function setDestinationGaebType($destination_gaeb_type)
    {
        $this->container['destination_gaeb_type'] = $destination_gaeb_type;

        return $this;
    }

    /**
     * Gets target_exchange_phase_transform
     *
     * @return \Dangl\AVACloud\Model\DestinationGaebExchangePhase
     */
    public function getTargetExchangePhaseTransform()
    {
        return $this->container['target_exchange_phase_transform'];
    }

    /**
     * Sets target_exchange_phase_transform
     *
     * @param \Dangl\AVACloud\Model\DestinationGaebExchangePhase $target_exchange_phase_transform Defaults to none, meaning no transformation will be done
     *
     * @return $this
     */
    public function setTargetExchangePhaseTransform($target_exchange_phase_transform)
    {
        $this->container['target_exchange_phase_transform'] = $target_exchange_phase_transform;

        return $this;
    }

    /**
     * Gets enforce_strict_offer_phase_long_text_output
     *
     * @return bool
     */
    public function getEnforceStrictOfferPhaseLongTextOutput()
    {
        return $this->container['enforce_strict_offer_phase_long_text_output'];
    }

    /**
     * Sets enforce_strict_offer_phase_long_text_output
     *
     * @param bool $enforce_strict_offer_phase_long_text_output Defaults to false. If this is enabled, exported long texts to GAEB XML that use text additions will be strictly schema compliant. If this is not enabled, any text that is marked to contain a text addition is exported in full to ensure that incorrectly used text additions are still preserved in the export.
     *
     * @return $this
     */
    public function setEnforceStrictOfferPhaseLongTextOutput($enforce_strict_offer_phase_long_text_output)
    {
        $this->container['enforce_strict_offer_phase_long_text_output'] = $enforce_strict_offer_phase_long_text_output;

        return $this;
    }

    /**
     * Gets export_quantity_determination
     *
     * @return bool
     */
    public function getExportQuantityDetermination()
    {
        return $this->container['export_quantity_determination'];
    }

    /**
     * Sets export_quantity_determination
     *
     * @param bool $export_quantity_determination Defaults to false. If this is enabled, quantities are exported in detail in GAEB XML targets via the 'QtyDeterm' (Quantity Determination, or Quantity Take Off) fields. To control this, you can set custom quantity calculations in the 'QuantityComponents' property of positions. Please see the entry for 'Quantity Determination' in the Dangl.AVA HowTo documentation section. Please be advised that enabling this might export data that was not intended to be exported, like internal quantity calculation details, depending on what data you put in the 'QuantityComponents' property.
     *
     * @return $this
     */
    public function setExportQuantityDetermination($export_quantity_determination)
    {
        $this->container['export_quantity_determination'] = $export_quantity_determination;

        return $this;
    }

    /**
     * Gets remove_unprintable_characters_from_texts
     *
     * @return bool
     */
    public function getRemoveUnprintableCharactersFromTexts()
    {
        return $this->container['remove_unprintable_characters_from_texts'];
    }

    /**
     * Sets remove_unprintable_characters_from_texts
     *
     * @param bool $remove_unprintable_characters_from_texts If this is enabled, unprintable characters are removed from text elements. Otherwise, the conversion might fail in case some text content contains characters that are not allowed in XML output formats.
     *
     * @return $this
     */
    public function setRemoveUnprintableCharactersFromTexts($remove_unprintable_characters_from_texts)
    {
        $this->container['remove_unprintable_characters_from_texts'] = $remove_unprintable_characters_from_texts;

        return $this;
    }

    /**
     * Gets force_include_descriptions
     *
     * @return bool
     */
    public function getForceIncludeDescriptions()
    {
        return $this->container['force_include_descriptions'];
    }

    /**
     * Sets force_include_descriptions
     *
     * @param bool $force_include_descriptions If this is enabled, all description elements like texts and execution descriptions will be output to the result. This is mostly only applicable to GAEB exports to phase 84 - Offer, which does typically not include descriptions.
     *
     * @return $this
     */
    public function setForceIncludeDescriptions($force_include_descriptions)
    {
        $this->container['force_include_descriptions'] = $force_include_descriptions;

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


