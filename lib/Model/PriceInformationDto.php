<?php
/**
 * PriceInformationDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.26.0
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.26.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
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
 * PriceInformationDto Class Doc Comment
 *
 * @category Class
 * @description Holds global price information for a ServiceSpecification
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceInformationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PriceInformationDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'hourly_wage' => 'float',
        'deduction_factor' => 'float',
        'flat_sum' => 'float',
        'tax_rate' => 'float',
        'trade_discounts' => '\Dangl\AVACloud\Model\TradeDiscountDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'guid',
        'hourly_wage' => 'decimal',
        'deduction_factor' => 'decimal',
        'flat_sum' => 'decimal',
        'tax_rate' => 'decimal',
        'trade_discounts' => null
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
        'hourly_wage' => 'hourlyWage',
        'deduction_factor' => 'deductionFactor',
        'flat_sum' => 'flatSum',
        'tax_rate' => 'taxRate',
        'trade_discounts' => 'tradeDiscounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'hourly_wage' => 'setHourlyWage',
        'deduction_factor' => 'setDeductionFactor',
        'flat_sum' => 'setFlatSum',
        'tax_rate' => 'setTaxRate',
        'trade_discounts' => 'setTradeDiscounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'hourly_wage' => 'getHourlyWage',
        'deduction_factor' => 'getDeductionFactor',
        'flat_sum' => 'getFlatSum',
        'tax_rate' => 'getTaxRate',
        'trade_discounts' => 'getTradeDiscounts'
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
        $this->container['hourly_wage'] = isset($data['hourly_wage']) ? $data['hourly_wage'] : null;
        $this->container['deduction_factor'] = isset($data['deduction_factor']) ? $data['deduction_factor'] : null;
        $this->container['flat_sum'] = isset($data['flat_sum']) ? $data['flat_sum'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['trade_discounts'] = isset($data['trade_discounts']) ? $data['trade_discounts'] : null;
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
        if ($this->container['hourly_wage'] === null) {
            $invalidProperties[] = "'hourly_wage' can't be null";
        }
        if ($this->container['deduction_factor'] === null) {
            $invalidProperties[] = "'deduction_factor' can't be null";
        }
        if ($this->container['flat_sum'] === null) {
            $invalidProperties[] = "'flat_sum' can't be null";
        }
        if ($this->container['tax_rate'] === null) {
            $invalidProperties[] = "'tax_rate' can't be null";
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
     * Gets hourly_wage
     *
     * @return float
     */
    public function getHourlyWage()
    {
        return $this->container['hourly_wage'];
    }

    /**
     * Sets hourly_wage
     *
     * @param float $hourly_wage The amount of currency per one hour of manual labour work in this project.
     *
     * @return $this
     */
    public function setHourlyWage($hourly_wage)
    {
        $this->container['hourly_wage'] = $hourly_wage;

        return $this;
    }

    /**
     * Gets deduction_factor
     *
     * @return float
     */
    public function getDeductionFactor()
    {
        return $this->container['deduction_factor'];
    }

    /**
     * Sets deduction_factor
     *
     * @param float $deduction_factor The final, total price will be deducted by this rate.
     *
     * @return $this
     */
    public function setDeductionFactor($deduction_factor)
    {
        $this->container['deduction_factor'] = $deduction_factor;

        return $this;
    }

    /**
     * Gets flat_sum
     *
     * @return float
     */
    public function getFlatSum()
    {
        return $this->container['flat_sum'];
    }

    /**
     * Sets flat_sum
     *
     * @param float $flat_sum This is given when there is only one flat price for the whole service specification.
     *
     * @return $this
     */
    public function setFlatSum($flat_sum)
    {
        $this->container['flat_sum'] = $flat_sum;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate Global tax rate for the project. Note that certain elements may have a different, specific tax rate.
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets trade_discounts
     *
     * @return \Dangl\AVACloud\Model\TradeDiscountDto[]
     */
    public function getTradeDiscounts()
    {
        return $this->container['trade_discounts'];
    }

    /**
     * Sets trade_discounts
     *
     * @param \Dangl\AVACloud\Model\TradeDiscountDto[] $trade_discounts Trade discounts for offered in this ServiceSpecification.
     *
     * @return $this
     */
    public function setTradeDiscounts($trade_discounts)
    {
        $this->container['trade_discounts'] = $trade_discounts;

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


