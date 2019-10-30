<?php
/**
 * SubDescriptionDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.12.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.12.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
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
 * SubDescriptionDto Class Doc Comment
 *
 * @category Class
 * @description This is appended to a Position and is used to separate the complete Position into smaller amounts to be described separately, for example concrete walls could be attached to different building storeys.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubDescriptionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubDescriptionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'quantity' => 'float',
        'quantity_components' => '\Dangl\AVACloud\Model\CalculationDto[]',
        'amount_to_be_entered_by_bidder' => 'bool',
        'identifier' => 'string',
        'short_text' => 'string',
        'long_text' => 'string',
        'html_long_text' => 'string',
        'addition_type' => '\Dangl\AVACloud\Model\AdditionTypeDto',
        'standardized_description' => '\Dangl\AVACloud\Model\StandardizedDescriptionDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'quantity' => 'decimal',
        'quantity_components' => null,
        'amount_to_be_entered_by_bidder' => null,
        'identifier' => null,
        'short_text' => null,
        'long_text' => null,
        'html_long_text' => null,
        'addition_type' => null,
        'standardized_description' => null
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
        'quantity' => 'quantity',
        'quantity_components' => 'quantityComponents',
        'amount_to_be_entered_by_bidder' => 'amountToBeEnteredByBidder',
        'identifier' => 'identifier',
        'short_text' => 'shortText',
        'long_text' => 'longText',
        'html_long_text' => 'htmlLongText',
        'addition_type' => 'additionType',
        'standardized_description' => 'standardizedDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'quantity' => 'setQuantity',
        'quantity_components' => 'setQuantityComponents',
        'amount_to_be_entered_by_bidder' => 'setAmountToBeEnteredByBidder',
        'identifier' => 'setIdentifier',
        'short_text' => 'setShortText',
        'long_text' => 'setLongText',
        'html_long_text' => 'setHtmlLongText',
        'addition_type' => 'setAdditionType',
        'standardized_description' => 'setStandardizedDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'quantity' => 'getQuantity',
        'quantity_components' => 'getQuantityComponents',
        'amount_to_be_entered_by_bidder' => 'getAmountToBeEnteredByBidder',
        'identifier' => 'getIdentifier',
        'short_text' => 'getShortText',
        'long_text' => 'getLongText',
        'html_long_text' => 'getHtmlLongText',
        'addition_type' => 'getAdditionType',
        'standardized_description' => 'getStandardizedDescription'
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_components'] = isset($data['quantity_components']) ? $data['quantity_components'] : null;
        $this->container['amount_to_be_entered_by_bidder'] = isset($data['amount_to_be_entered_by_bidder']) ? $data['amount_to_be_entered_by_bidder'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['short_text'] = isset($data['short_text']) ? $data['short_text'] : null;
        $this->container['long_text'] = isset($data['long_text']) ? $data['long_text'] : null;
        $this->container['html_long_text'] = isset($data['html_long_text']) ? $data['html_long_text'] : null;
        $this->container['addition_type'] = isset($data['addition_type']) ? $data['addition_type'] : null;
        $this->container['standardized_description'] = isset($data['standardized_description']) ? $data['standardized_description'] : null;
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
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['amount_to_be_entered_by_bidder'] === null) {
            $invalidProperties[] = "'amount_to_be_entered_by_bidder' can't be null";
        }
        if ($this->container['addition_type'] === null) {
            $invalidProperties[] = "'addition_type' can't be null";
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
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity Returns the total calculated sum of all quantity assignments. Will return the result rounded to three decimal places.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_components
     *
     * @return \Dangl\AVACloud\Model\CalculationDto[]
     */
    public function getQuantityComponents()
    {
        return $this->container['quantity_components'];
    }

    /**
     * Sets quantity_components
     *
     * @param \Dangl\AVACloud\Model\CalculationDto[] $quantity_components Holds quantity information for this sub description. Quantity is listening to changes here and is reporting the total sum of all quantity components.
     *
     * @return $this
     */
    public function setQuantityComponents($quantity_components)
    {
        $this->container['quantity_components'] = $quantity_components;

        return $this;
    }

    /**
     * Gets amount_to_be_entered_by_bidder
     *
     * @return bool
     */
    public function getAmountToBeEnteredByBidder()
    {
        return $this->container['amount_to_be_entered_by_bidder'];
    }

    /**
     * Sets amount_to_be_entered_by_bidder
     *
     * @param bool $amount_to_be_entered_by_bidder Indicates if the bidder is asked to specify an amount.
     *
     * @return $this
     */
    public function setAmountToBeEnteredByBidder($amount_to_be_entered_by_bidder)
    {
        $this->container['amount_to_be_entered_by_bidder'] = $amount_to_be_entered_by_bidder;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Identifier for this SubDescription.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets short_text
     *
     * @return string
     */
    public function getShortText()
    {
        return $this->container['short_text'];
    }

    /**
     * Sets short_text
     *
     * @param string $short_text Short description for this DescriptionBase element.
     *
     * @return $this
     */
    public function setShortText($short_text)
    {
        $this->container['short_text'] = $short_text;

        return $this;
    }

    /**
     * Gets long_text
     *
     * @return string
     */
    public function getLongText()
    {
        return $this->container['long_text'];
    }

    /**
     * Sets long_text
     *
     * @param string $long_text Detailed description for this DescriptionBase element. When the HtmlLongText is set, this is automatically overwritten and filled with the appropriate plain text representation of the Html text. Vice versa, setting this property overrides the HtmlLongText.
     *
     * @return $this
     */
    public function setLongText($long_text)
    {
        $this->container['long_text'] = $long_text;

        return $this;
    }

    /**
     * Gets html_long_text
     *
     * @return string
     */
    public function getHtmlLongText()
    {
        return $this->container['html_long_text'];
    }

    /**
     * Sets html_long_text
     *
     * @param string $html_long_text This contains the Html representation of the Longtext. When the LongText is set, this is automatically overwritten and filled with the appropriate Html representation of the plaintext. Vice versa, setting this property overrides the LongText. GAEB 90 and GAEB 2000 exports do not support any image functionality. In GAEB XML, only images that use an embedded Base64 data uri are exported, regular url references are cleared before written out.
     *
     * @return $this
     */
    public function setHtmlLongText($html_long_text)
    {
        $this->container['html_long_text'] = $html_long_text;

        return $this;
    }

    /**
     * Gets addition_type
     *
     * @return \Dangl\AVACloud\Model\AdditionTypeDto
     */
    public function getAdditionType()
    {
        return $this->container['addition_type'];
    }

    /**
     * Sets addition_type
     *
     * @param \Dangl\AVACloud\Model\AdditionTypeDto $addition_type Indicates if this DescriptionBase element contains Buyer or Bidder additions to the text.
     *
     * @return $this
     */
    public function setAdditionType($addition_type)
    {
        $this->container['addition_type'] = $addition_type;

        return $this;
    }

    /**
     * Gets standardized_description
     *
     * @return \Dangl\AVACloud\Model\StandardizedDescriptionDto
     */
    public function getStandardizedDescription()
    {
        return $this->container['standardized_description'];
    }

    /**
     * Sets standardized_description
     *
     * @param \Dangl\AVACloud\Model\StandardizedDescriptionDto $standardized_description This represents a standardized description. This means that instead of solely relying on texts to describe a service, external standards and definitions are referenced for a common understanding.
     *
     * @return $this
     */
    public function setStandardizedDescription($standardized_description)
    {
        $this->container['standardized_description'] = $standardized_description;

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


