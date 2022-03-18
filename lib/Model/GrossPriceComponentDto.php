<?php
/**
 * GrossPriceComponentDto
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
 * GrossPriceComponentDto Class Doc Comment
 *
 * @category Class
 * @description This is used in an ElementContainerBase to hold the price composition.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GrossPriceComponentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GrossPriceComponentDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tax_rate' => 'float',
        'deduction_factor' => 'float',
        'total_net' => 'float',
        'total_deducted' => 'float',
        'total_tax' => 'float',
        'total_gross' => 'float',
        'total_gross_deducted' => 'float',
        'total_tax_deducted' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tax_rate' => 'decimal',
        'deduction_factor' => 'decimal',
        'total_net' => 'decimal',
        'total_deducted' => 'decimal',
        'total_tax' => 'decimal',
        'total_gross' => 'decimal',
        'total_gross_deducted' => 'decimal',
        'total_tax_deducted' => 'decimal'
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
        'tax_rate' => 'taxRate',
        'deduction_factor' => 'deductionFactor',
        'total_net' => 'totalNet',
        'total_deducted' => 'totalDeducted',
        'total_tax' => 'totalTax',
        'total_gross' => 'totalGross',
        'total_gross_deducted' => 'totalGrossDeducted',
        'total_tax_deducted' => 'totalTaxDeducted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tax_rate' => 'setTaxRate',
        'deduction_factor' => 'setDeductionFactor',
        'total_net' => 'setTotalNet',
        'total_deducted' => 'setTotalDeducted',
        'total_tax' => 'setTotalTax',
        'total_gross' => 'setTotalGross',
        'total_gross_deducted' => 'setTotalGrossDeducted',
        'total_tax_deducted' => 'setTotalTaxDeducted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tax_rate' => 'getTaxRate',
        'deduction_factor' => 'getDeductionFactor',
        'total_net' => 'getTotalNet',
        'total_deducted' => 'getTotalDeducted',
        'total_tax' => 'getTotalTax',
        'total_gross' => 'getTotalGross',
        'total_gross_deducted' => 'getTotalGrossDeducted',
        'total_tax_deducted' => 'getTotalTaxDeducted'
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
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['deduction_factor'] = isset($data['deduction_factor']) ? $data['deduction_factor'] : null;
        $this->container['total_net'] = isset($data['total_net']) ? $data['total_net'] : null;
        $this->container['total_deducted'] = isset($data['total_deducted']) ? $data['total_deducted'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total_gross'] = isset($data['total_gross']) ? $data['total_gross'] : null;
        $this->container['total_gross_deducted'] = isset($data['total_gross_deducted']) ? $data['total_gross_deducted'] : null;
        $this->container['total_tax_deducted'] = isset($data['total_tax_deducted']) ? $data['total_tax_deducted'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tax_rate'] === null) {
            $invalidProperties[] = "'tax_rate' can't be null";
        }
        if ($this->container['deduction_factor'] === null) {
            $invalidProperties[] = "'deduction_factor' can't be null";
        }
        if ($this->container['total_net'] === null) {
            $invalidProperties[] = "'total_net' can't be null";
        }
        if ($this->container['total_deducted'] === null) {
            $invalidProperties[] = "'total_deducted' can't be null";
        }
        if ($this->container['total_tax'] === null) {
            $invalidProperties[] = "'total_tax' can't be null";
        }
        if ($this->container['total_gross'] === null) {
            $invalidProperties[] = "'total_gross' can't be null";
        }
        if ($this->container['total_gross_deducted'] === null) {
            $invalidProperties[] = "'total_gross_deducted' can't be null";
        }
        if ($this->container['total_tax_deducted'] === null) {
            $invalidProperties[] = "'total_tax_deducted' can't be null";
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
     * @param float $tax_rate This components tax rate.
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

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
     * @param float $deduction_factor This is the factor of applied deductions for this component
     *
     * @return $this
     */
    public function setDeductionFactor($deduction_factor)
    {
        $this->container['deduction_factor'] = $deduction_factor;

        return $this;
    }

    /**
     * Gets total_net
     *
     * @return float
     */
    public function getTotalNet()
    {
        return $this->container['total_net'];
    }

    /**
     * Sets total_net
     *
     * @param float $total_net The total net price for all components of a given tax rate.
     *
     * @return $this
     */
    public function setTotalNet($total_net)
    {
        $this->container['total_net'] = $total_net;

        return $this;
    }

    /**
     * Gets total_deducted
     *
     * @return float
     */
    public function getTotalDeducted()
    {
        return $this->container['total_deducted'];
    }

    /**
     * Sets total_deducted
     *
     * @param float $total_deducted The resulting price component after applied deductions
     *
     * @return $this
     */
    public function setTotalDeducted($total_deducted)
    {
        $this->container['total_deducted'] = $total_deducted;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return float
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param float $total_tax The total tax amount for all components of a given tax rate.
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total_gross
     *
     * @return float
     */
    public function getTotalGross()
    {
        return $this->container['total_gross'];
    }

    /**
     * Sets total_gross
     *
     * @param float $total_gross The total gross price for all components of a given tax rate.
     *
     * @return $this
     */
    public function setTotalGross($total_gross)
    {
        $this->container['total_gross'] = $total_gross;

        return $this;
    }

    /**
     * Gets total_gross_deducted
     *
     * @return float
     */
    public function getTotalGrossDeducted()
    {
        return $this->container['total_gross_deducted'];
    }

    /**
     * Sets total_gross_deducted
     *
     * @param float $total_gross_deducted The total gross price for all components of a given tax rate, after applied deductions.
     *
     * @return $this
     */
    public function setTotalGrossDeducted($total_gross_deducted)
    {
        $this->container['total_gross_deducted'] = $total_gross_deducted;

        return $this;
    }

    /**
     * Gets total_tax_deducted
     *
     * @return float
     */
    public function getTotalTaxDeducted()
    {
        return $this->container['total_tax_deducted'];
    }

    /**
     * Sets total_tax_deducted
     *
     * @param float $total_tax_deducted The total tax amount for all components of a given tax rate, after applied deductions.
     *
     * @return $this
     */
    public function setTotalTaxDeducted($total_tax_deducted)
    {
        $this->container['total_tax_deducted'] = $total_tax_deducted;

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


