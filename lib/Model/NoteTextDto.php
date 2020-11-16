<?php
/**
 * NoteTextDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * AVACloud API 1.16.7
 *
 * AVACloud API specification
 *
 * OpenAPI spec version: 1.16.7
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dangl\AVACloud\Model;
use \Dangl\AVACloud\ObjectSerializer;

/**
 * NoteTextDto Class Doc Comment
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NoteTextDto extends IElementDto 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NoteTextDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_opening_text' => 'bool',
        'is_closing_text' => 'bool',
        'short_text' => 'string',
        'addition_type' => '\Dangl\AVACloud\Model\AdditionTypeDto',
        'long_text' => 'string',
        'html_long_text' => 'string',
        'identifier' => 'string',
        'standardized_description' => '\Dangl\AVACloud\Model\StandardizedDescriptionDto',
        'element_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_opening_text' => null,
        'is_closing_text' => null,
        'short_text' => null,
        'addition_type' => null,
        'long_text' => null,
        'html_long_text' => null,
        'identifier' => null,
        'standardized_description' => null,
        'element_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'is_opening_text' => 'isOpeningText',
        'is_closing_text' => 'isClosingText',
        'short_text' => 'shortText',
        'addition_type' => 'additionType',
        'long_text' => 'longText',
        'html_long_text' => 'htmlLongText',
        'identifier' => 'identifier',
        'standardized_description' => 'standardizedDescription',
        'element_type' => 'elementType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_opening_text' => 'setIsOpeningText',
        'is_closing_text' => 'setIsClosingText',
        'short_text' => 'setShortText',
        'addition_type' => 'setAdditionType',
        'long_text' => 'setLongText',
        'html_long_text' => 'setHtmlLongText',
        'identifier' => 'setIdentifier',
        'standardized_description' => 'setStandardizedDescription',
        'element_type' => 'setElementType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_opening_text' => 'getIsOpeningText',
        'is_closing_text' => 'getIsClosingText',
        'short_text' => 'getShortText',
        'addition_type' => 'getAdditionType',
        'long_text' => 'getLongText',
        'html_long_text' => 'getHtmlLongText',
        'identifier' => 'getIdentifier',
        'standardized_description' => 'getStandardizedDescription',
        'element_type' => 'getElementType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['is_opening_text'] = isset($data['is_opening_text']) ? $data['is_opening_text'] : null;
        $this->container['is_closing_text'] = isset($data['is_closing_text']) ? $data['is_closing_text'] : null;
        $this->container['short_text'] = isset($data['short_text']) ? $data['short_text'] : null;
        $this->container['addition_type'] = isset($data['addition_type']) ? $data['addition_type'] : null;
        $this->container['long_text'] = isset($data['long_text']) ? $data['long_text'] : null;
        $this->container['html_long_text'] = isset($data['html_long_text']) ? $data['html_long_text'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['standardized_description'] = isset($data['standardized_description']) ? $data['standardized_description'] : null;
        $this->container['element_type'] = isset($data['element_type']) ? $data['element_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['is_opening_text'] === null) {
            $invalidProperties[] = "'is_opening_text' can't be null";
        }
        if ($this->container['is_closing_text'] === null) {
            $invalidProperties[] = "'is_closing_text' can't be null";
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
     * Gets is_opening_text
     *
     * @return bool
     */
    public function getIsOpeningText()
    {
        return $this->container['is_opening_text'];
    }

    /**
     * Sets is_opening_text
     *
     * @param bool $is_opening_text If this is set to true, this text is meant to not be seen as part of the regular elements hierarchy but as a special opening text at the beginning of the project. For example, in GAEB XML, this would map to the GAEB.Award.AddText. Typically, such texts describe project-wide contractual definitions. If this is set to true, this NoteText should be placed at the top of the elements hierarchy directly in the ServiceSpecification.Elements group, otherwise it will likely not be treated correctly when exporting to GAEB. You can only set IsOpeningText or IsClosingText to true.
     *
     * @return $this
     */
    public function setIsOpeningText($is_opening_text)
    {
        $this->container['is_opening_text'] = $is_opening_text;

        return $this;
    }

    /**
     * Gets is_closing_text
     *
     * @return bool
     */
    public function getIsClosingText()
    {
        return $this->container['is_closing_text'];
    }

    /**
     * Sets is_closing_text
     *
     * @param bool $is_closing_text If this is set to true, this text is meant to not be seen as part of the regular elements hierarchy but as a special closing text at the end of the project. For Example, in GAEB XML, this would map to the GAEB.AddText. Typically, such texts are used to describe project wide finishing descriptions. If this is set to true, this NoteText should be placed at the top of the elements hierarchy directly in the ServiceSpecification.Elements group, otherwise it will likely not be treated correctly when exporting to GAEB. You can only set IsOpeningText or IsClosingText to true.
     *
     * @return $this
     */
    public function setIsClosingText($is_closing_text)
    {
        $this->container['is_closing_text'] = $is_closing_text;

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
     * @param string $identifier This is an optional internal identifier that may be used to add additional information to this NoteText. It is not supported in GAEB import or export.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

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
     * Gets element_type
     *
     * @return string
     */
    public function getElementType()
    {
        return $this->container['element_type'];
    }

    /**
     * Sets element_type
     *
     * @param string $element_type element_type
     *
     * @return $this
     */
    public function setElementType($element_type)
    {
        $this->container['element_type'] = $element_type;

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


