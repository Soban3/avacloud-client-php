<?php
/**
 * ServiceSpecificationGroupDto
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
use \Dangl\AVACloud\ObjectSerializer;

/**
 * ServiceSpecificationGroupDto Class Doc Comment
 *
 * @category Class
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceSpecificationGroupDto extends IElementDto 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceSpecificationGroupDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project_hourly_wage' => 'float',
        'project_tax_rate' => 'float',
        'project_price_components' => 'string[]',
        'project_item_number_schema' => '\Dangl\AVACloud\Model\ItemNumberSchemaDto',
        'elements' => '\Dangl\AVACloud\Model\IElementDto[]',
        'project_labour_time_label' => 'string',
        'contains_duplicate_item_numbers' => 'bool',
        'contains_duplicate_element_ids' => 'bool',
        'ignore_duplicate_item_numbers' => 'bool',
        'ignore_duplicate_element_ids' => 'bool',
        'total_price_gross_by_tax_rate' => '\Dangl\AVACloud\Model\GrossPriceComponentDto[]',
        'ignore_child_price_updates' => 'bool',
        'deducted_price' => 'float',
        'deduction_factor' => 'float',
        'total_price' => 'float',
        'total_price_gross' => 'float',
        'total_price_gross_deducted' => 'float',
        'price_type' => '\Dangl\AVACloud\Model\PriceTypeDto',
        'short_text' => 'string',
        'comission_status' => '\Dangl\AVACloud\Model\ComissionStatusDto',
        'item_number' => '\Dangl\AVACloud\Model\ItemNumberDto',
        'element_type' => 'string',
        'is_lot' => 'bool',
        'alternative_to' => 'string',
        'type' => 'string',
        'project_catalogues' => '\Dangl\AVACloud\Model\CatalogueDto[]',
        'catalogue_references' => '\Dangl\AVACloud\Model\CatalogueReferenceDto[]',
        'oenorm_properties' => '\Dangl\AVACloud\Model\OenormPropertiesDto',
        'hierarchy_level' => 'int',
        'addendum_status' => '\Dangl\AVACloud\Model\AddendumStatusDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project_hourly_wage' => 'decimal',
        'project_tax_rate' => 'decimal',
        'project_price_components' => null,
        'project_item_number_schema' => null,
        'elements' => null,
        'project_labour_time_label' => null,
        'contains_duplicate_item_numbers' => null,
        'contains_duplicate_element_ids' => null,
        'ignore_duplicate_item_numbers' => null,
        'ignore_duplicate_element_ids' => null,
        'total_price_gross_by_tax_rate' => null,
        'ignore_child_price_updates' => null,
        'deducted_price' => 'decimal',
        'deduction_factor' => 'decimal',
        'total_price' => 'decimal',
        'total_price_gross' => 'decimal',
        'total_price_gross_deducted' => 'decimal',
        'price_type' => null,
        'short_text' => null,
        'comission_status' => null,
        'item_number' => null,
        'element_type' => null,
        'is_lot' => null,
        'alternative_to' => 'guid',
        'type' => null,
        'project_catalogues' => null,
        'catalogue_references' => null,
        'oenorm_properties' => null,
        'hierarchy_level' => 'int32',
        'addendum_status' => null
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
        'project_hourly_wage' => 'projectHourlyWage',
        'project_tax_rate' => 'projectTaxRate',
        'project_price_components' => 'projectPriceComponents',
        'project_item_number_schema' => 'projectItemNumberSchema',
        'elements' => 'elements',
        'project_labour_time_label' => 'projectLabourTimeLabel',
        'contains_duplicate_item_numbers' => 'containsDuplicateItemNumbers',
        'contains_duplicate_element_ids' => 'containsDuplicateElementIds',
        'ignore_duplicate_item_numbers' => 'ignoreDuplicateItemNumbers',
        'ignore_duplicate_element_ids' => 'ignoreDuplicateElementIds',
        'total_price_gross_by_tax_rate' => 'totalPriceGrossByTaxRate',
        'ignore_child_price_updates' => 'ignoreChildPriceUpdates',
        'deducted_price' => 'deductedPrice',
        'deduction_factor' => 'deductionFactor',
        'total_price' => 'totalPrice',
        'total_price_gross' => 'totalPriceGross',
        'total_price_gross_deducted' => 'totalPriceGrossDeducted',
        'price_type' => 'priceType',
        'short_text' => 'shortText',
        'comission_status' => 'comissionStatus',
        'item_number' => 'itemNumber',
        'element_type' => 'elementType',
        'is_lot' => 'isLot',
        'alternative_to' => 'alternativeTo',
        'type' => 'type',
        'project_catalogues' => 'projectCatalogues',
        'catalogue_references' => 'catalogueReferences',
        'oenorm_properties' => 'oenormProperties',
        'hierarchy_level' => 'hierarchyLevel',
        'addendum_status' => 'addendumStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_hourly_wage' => 'setProjectHourlyWage',
        'project_tax_rate' => 'setProjectTaxRate',
        'project_price_components' => 'setProjectPriceComponents',
        'project_item_number_schema' => 'setProjectItemNumberSchema',
        'elements' => 'setElements',
        'project_labour_time_label' => 'setProjectLabourTimeLabel',
        'contains_duplicate_item_numbers' => 'setContainsDuplicateItemNumbers',
        'contains_duplicate_element_ids' => 'setContainsDuplicateElementIds',
        'ignore_duplicate_item_numbers' => 'setIgnoreDuplicateItemNumbers',
        'ignore_duplicate_element_ids' => 'setIgnoreDuplicateElementIds',
        'total_price_gross_by_tax_rate' => 'setTotalPriceGrossByTaxRate',
        'ignore_child_price_updates' => 'setIgnoreChildPriceUpdates',
        'deducted_price' => 'setDeductedPrice',
        'deduction_factor' => 'setDeductionFactor',
        'total_price' => 'setTotalPrice',
        'total_price_gross' => 'setTotalPriceGross',
        'total_price_gross_deducted' => 'setTotalPriceGrossDeducted',
        'price_type' => 'setPriceType',
        'short_text' => 'setShortText',
        'comission_status' => 'setComissionStatus',
        'item_number' => 'setItemNumber',
        'element_type' => 'setElementType',
        'is_lot' => 'setIsLot',
        'alternative_to' => 'setAlternativeTo',
        'type' => 'setType',
        'project_catalogues' => 'setProjectCatalogues',
        'catalogue_references' => 'setCatalogueReferences',
        'oenorm_properties' => 'setOenormProperties',
        'hierarchy_level' => 'setHierarchyLevel',
        'addendum_status' => 'setAddendumStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_hourly_wage' => 'getProjectHourlyWage',
        'project_tax_rate' => 'getProjectTaxRate',
        'project_price_components' => 'getProjectPriceComponents',
        'project_item_number_schema' => 'getProjectItemNumberSchema',
        'elements' => 'getElements',
        'project_labour_time_label' => 'getProjectLabourTimeLabel',
        'contains_duplicate_item_numbers' => 'getContainsDuplicateItemNumbers',
        'contains_duplicate_element_ids' => 'getContainsDuplicateElementIds',
        'ignore_duplicate_item_numbers' => 'getIgnoreDuplicateItemNumbers',
        'ignore_duplicate_element_ids' => 'getIgnoreDuplicateElementIds',
        'total_price_gross_by_tax_rate' => 'getTotalPriceGrossByTaxRate',
        'ignore_child_price_updates' => 'getIgnoreChildPriceUpdates',
        'deducted_price' => 'getDeductedPrice',
        'deduction_factor' => 'getDeductionFactor',
        'total_price' => 'getTotalPrice',
        'total_price_gross' => 'getTotalPriceGross',
        'total_price_gross_deducted' => 'getTotalPriceGrossDeducted',
        'price_type' => 'getPriceType',
        'short_text' => 'getShortText',
        'comission_status' => 'getComissionStatus',
        'item_number' => 'getItemNumber',
        'element_type' => 'getElementType',
        'is_lot' => 'getIsLot',
        'alternative_to' => 'getAlternativeTo',
        'type' => 'getType',
        'project_catalogues' => 'getProjectCatalogues',
        'catalogue_references' => 'getCatalogueReferences',
        'oenorm_properties' => 'getOenormProperties',
        'hierarchy_level' => 'getHierarchyLevel',
        'addendum_status' => 'getAddendumStatus'
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

        $this->container['project_hourly_wage'] = isset($data['project_hourly_wage']) ? $data['project_hourly_wage'] : null;
        $this->container['project_tax_rate'] = isset($data['project_tax_rate']) ? $data['project_tax_rate'] : null;
        $this->container['project_price_components'] = isset($data['project_price_components']) ? $data['project_price_components'] : null;
        $this->container['project_item_number_schema'] = isset($data['project_item_number_schema']) ? $data['project_item_number_schema'] : null;
        $this->container['elements'] = isset($data['elements']) ? $data['elements'] : null;
        $this->container['project_labour_time_label'] = isset($data['project_labour_time_label']) ? $data['project_labour_time_label'] : null;
        $this->container['contains_duplicate_item_numbers'] = isset($data['contains_duplicate_item_numbers']) ? $data['contains_duplicate_item_numbers'] : null;
        $this->container['contains_duplicate_element_ids'] = isset($data['contains_duplicate_element_ids']) ? $data['contains_duplicate_element_ids'] : null;
        $this->container['ignore_duplicate_item_numbers'] = isset($data['ignore_duplicate_item_numbers']) ? $data['ignore_duplicate_item_numbers'] : null;
        $this->container['ignore_duplicate_element_ids'] = isset($data['ignore_duplicate_element_ids']) ? $data['ignore_duplicate_element_ids'] : null;
        $this->container['total_price_gross_by_tax_rate'] = isset($data['total_price_gross_by_tax_rate']) ? $data['total_price_gross_by_tax_rate'] : null;
        $this->container['ignore_child_price_updates'] = isset($data['ignore_child_price_updates']) ? $data['ignore_child_price_updates'] : null;
        $this->container['deducted_price'] = isset($data['deducted_price']) ? $data['deducted_price'] : null;
        $this->container['deduction_factor'] = isset($data['deduction_factor']) ? $data['deduction_factor'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['total_price_gross'] = isset($data['total_price_gross']) ? $data['total_price_gross'] : null;
        $this->container['total_price_gross_deducted'] = isset($data['total_price_gross_deducted']) ? $data['total_price_gross_deducted'] : null;
        $this->container['price_type'] = isset($data['price_type']) ? $data['price_type'] : null;
        $this->container['short_text'] = isset($data['short_text']) ? $data['short_text'] : null;
        $this->container['comission_status'] = isset($data['comission_status']) ? $data['comission_status'] : null;
        $this->container['item_number'] = isset($data['item_number']) ? $data['item_number'] : null;
        $this->container['element_type'] = isset($data['element_type']) ? $data['element_type'] : null;
        $this->container['is_lot'] = isset($data['is_lot']) ? $data['is_lot'] : null;
        $this->container['alternative_to'] = isset($data['alternative_to']) ? $data['alternative_to'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['project_catalogues'] = isset($data['project_catalogues']) ? $data['project_catalogues'] : null;
        $this->container['catalogue_references'] = isset($data['catalogue_references']) ? $data['catalogue_references'] : null;
        $this->container['oenorm_properties'] = isset($data['oenorm_properties']) ? $data['oenorm_properties'] : null;
        $this->container['hierarchy_level'] = isset($data['hierarchy_level']) ? $data['hierarchy_level'] : null;
        $this->container['addendum_status'] = isset($data['addendum_status']) ? $data['addendum_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['project_hourly_wage'] === null) {
            $invalidProperties[] = "'project_hourly_wage' can't be null";
        }
        if ($this->container['project_tax_rate'] === null) {
            $invalidProperties[] = "'project_tax_rate' can't be null";
        }
        if ($this->container['contains_duplicate_item_numbers'] === null) {
            $invalidProperties[] = "'contains_duplicate_item_numbers' can't be null";
        }
        if ($this->container['contains_duplicate_element_ids'] === null) {
            $invalidProperties[] = "'contains_duplicate_element_ids' can't be null";
        }
        if ($this->container['ignore_duplicate_item_numbers'] === null) {
            $invalidProperties[] = "'ignore_duplicate_item_numbers' can't be null";
        }
        if ($this->container['ignore_duplicate_element_ids'] === null) {
            $invalidProperties[] = "'ignore_duplicate_element_ids' can't be null";
        }
        if ($this->container['ignore_child_price_updates'] === null) {
            $invalidProperties[] = "'ignore_child_price_updates' can't be null";
        }
        if ($this->container['deducted_price'] === null) {
            $invalidProperties[] = "'deducted_price' can't be null";
        }
        if ($this->container['deduction_factor'] === null) {
            $invalidProperties[] = "'deduction_factor' can't be null";
        }
        if ($this->container['total_price'] === null) {
            $invalidProperties[] = "'total_price' can't be null";
        }
        if ($this->container['total_price_gross'] === null) {
            $invalidProperties[] = "'total_price_gross' can't be null";
        }
        if ($this->container['total_price_gross_deducted'] === null) {
            $invalidProperties[] = "'total_price_gross_deducted' can't be null";
        }
        if ($this->container['price_type'] === null) {
            $invalidProperties[] = "'price_type' can't be null";
        }
        if ($this->container['comission_status'] === null) {
            $invalidProperties[] = "'comission_status' can't be null";
        }
        if ($this->container['is_lot'] === null) {
            $invalidProperties[] = "'is_lot' can't be null";
        }
        if ($this->container['hierarchy_level'] === null) {
            $invalidProperties[] = "'hierarchy_level' can't be null";
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
     * Gets project_hourly_wage
     *
     * @return float
     */
    public function getProjectHourlyWage()
    {
        return $this->container['project_hourly_wage'];
    }

    /**
     * Sets project_hourly_wage
     *
     * @param float $project_hourly_wage The hourly wage that is used within this ElementContainerBase. Will be propagated to child elements.
     *
     * @return $this
     */
    public function setProjectHourlyWage($project_hourly_wage)
    {
        $this->container['project_hourly_wage'] = $project_hourly_wage;

        return $this;
    }

    /**
     * Gets project_tax_rate
     *
     * @return float
     */
    public function getProjectTaxRate()
    {
        return $this->container['project_tax_rate'];
    }

    /**
     * Sets project_tax_rate
     *
     * @param float $project_tax_rate The tax rate that is used within this ElementContainerBase. Will be propagated to child elements.
     *
     * @return $this
     */
    public function setProjectTaxRate($project_tax_rate)
    {
        $this->container['project_tax_rate'] = $project_tax_rate;

        return $this;
    }

    /**
     * Gets project_price_components
     *
     * @return string[]
     */
    public function getProjectPriceComponents()
    {
        return $this->container['project_price_components'];
    }

    /**
     * Sets project_price_components
     *
     * @param string[] $project_price_components The price components that are used within this project. They are ignored during Json deserialization because they will be set from the parent project.
     *
     * @return $this
     */
    public function setProjectPriceComponents($project_price_components)
    {
        $this->container['project_price_components'] = $project_price_components;

        return $this;
    }

    /**
     * Gets project_item_number_schema
     *
     * @return \Dangl\AVACloud\Model\ItemNumberSchemaDto
     */
    public function getProjectItemNumberSchema()
    {
        return $this->container['project_item_number_schema'];
    }

    /**
     * Sets project_item_number_schema
     *
     * @param \Dangl\AVACloud\Model\ItemNumberSchemaDto $project_item_number_schema The ItemNumberSchema that is used within this project.
     *
     * @return $this
     */
    public function setProjectItemNumberSchema($project_item_number_schema)
    {
        $this->container['project_item_number_schema'] = $project_item_number_schema;

        return $this;
    }

    /**
     * Gets elements
     *
     * @return \Dangl\AVACloud\Model\IElementDto[]
     */
    public function getElements()
    {
        return $this->container['elements'];
    }

    /**
     * Sets elements
     *
     * @param \Dangl\AVACloud\Model\IElementDto[] $elements The IElements within this ElementContainerBase.
     *
     * @return $this
     */
    public function setElements($elements)
    {
        $this->container['elements'] = $elements;

        return $this;
    }

    /**
     * Gets project_labour_time_label
     *
     * @return string
     */
    public function getProjectLabourTimeLabel()
    {
        return $this->container['project_labour_time_label'];
    }

    /**
     * Sets project_labour_time_label
     *
     * @param string $project_labour_time_label The label used in the parent Project to mark labour time, e.g. \"Hours\" or \"Stunden\".
     *
     * @return $this
     */
    public function setProjectLabourTimeLabel($project_labour_time_label)
    {
        $this->container['project_labour_time_label'] = $project_labour_time_label;

        return $this;
    }

    /**
     * Gets contains_duplicate_item_numbers
     *
     * @return bool
     */
    public function getContainsDuplicateItemNumbers()
    {
        return $this->container['contains_duplicate_item_numbers'];
    }

    /**
     * Sets contains_duplicate_item_numbers
     *
     * @param bool $contains_duplicate_item_numbers Indicates if there are child IElements that have conflicting, duplicated ItemNumbers or if any child ElementContainerBase elements themselves contain duplicate ItemNumber s. Will always indicate false when told to ignore duplicate item numbers.
     *
     * @return $this
     */
    public function setContainsDuplicateItemNumbers($contains_duplicate_item_numbers)
    {
        $this->container['contains_duplicate_item_numbers'] = $contains_duplicate_item_numbers;

        return $this;
    }

    /**
     * Gets contains_duplicate_element_ids
     *
     * @return bool
     */
    public function getContainsDuplicateElementIds()
    {
        return $this->container['contains_duplicate_element_ids'];
    }

    /**
     * Sets contains_duplicate_element_ids
     *
     * @param bool $contains_duplicate_element_ids Indicates if there are child IElements that have conflicting, duplicated Ids or if any child ElementContainerBase elements themselves contain duplicate Id s. Will always indicate false when told to ignore duplicate item numbers.
     *
     * @return $this
     */
    public function setContainsDuplicateElementIds($contains_duplicate_element_ids)
    {
        $this->container['contains_duplicate_element_ids'] = $contains_duplicate_element_ids;

        return $this;
    }

    /**
     * Gets ignore_duplicate_item_numbers
     *
     * @return bool
     */
    public function getIgnoreDuplicateItemNumbers()
    {
        return $this->container['ignore_duplicate_item_numbers'];
    }

    /**
     * Sets ignore_duplicate_item_numbers
     *
     * @param bool $ignore_duplicate_item_numbers Indicate if duplicated ItemNumbers within child elements are to be ignored. Will not perform checks for duplicates if yes.
     *
     * @return $this
     */
    public function setIgnoreDuplicateItemNumbers($ignore_duplicate_item_numbers)
    {
        $this->container['ignore_duplicate_item_numbers'] = $ignore_duplicate_item_numbers;

        return $this;
    }

    /**
     * Gets ignore_duplicate_element_ids
     *
     * @return bool
     */
    public function getIgnoreDuplicateElementIds()
    {
        return $this->container['ignore_duplicate_element_ids'];
    }

    /**
     * Sets ignore_duplicate_element_ids
     *
     * @param bool $ignore_duplicate_element_ids Indicate if duplicated Ids within child elements are to be ignored. Will not perform checks for duplicates if yes.
     *
     * @return $this
     */
    public function setIgnoreDuplicateElementIds($ignore_duplicate_element_ids)
    {
        $this->container['ignore_duplicate_element_ids'] = $ignore_duplicate_element_ids;

        return $this;
    }

    /**
     * Gets total_price_gross_by_tax_rate
     *
     * @return \Dangl\AVACloud\Model\GrossPriceComponentDto[]
     */
    public function getTotalPriceGrossByTaxRate()
    {
        return $this->container['total_price_gross_by_tax_rate'];
    }

    /**
     * Sets total_price_gross_by_tax_rate
     *
     * @param \Dangl\AVACloud\Model\GrossPriceComponentDto[] $total_price_gross_by_tax_rate Price composition by tax rate.
     *
     * @return $this
     */
    public function setTotalPriceGrossByTaxRate($total_price_gross_by_tax_rate)
    {
        $this->container['total_price_gross_by_tax_rate'] = $total_price_gross_by_tax_rate;

        return $this;
    }

    /**
     * Gets ignore_child_price_updates
     *
     * @return bool
     */
    public function getIgnoreChildPriceUpdates()
    {
        return $this->container['ignore_child_price_updates'];
    }

    /**
     * Sets ignore_child_price_updates
     *
     * @param bool $ignore_child_price_updates Internally used to indicate that a propagation is currently done, this is done to not recalculate every single result from a lot of changes when it is sufficient to calculate the total price at once.
     *
     * @return $this
     */
    public function setIgnoreChildPriceUpdates($ignore_child_price_updates)
    {
        $this->container['ignore_child_price_updates'] = $ignore_child_price_updates;

        return $this;
    }

    /**
     * Gets deducted_price
     *
     * @return float
     */
    public function getDeductedPrice()
    {
        return $this->container['deducted_price'];
    }

    /**
     * Sets deducted_price
     *
     * @param float $deducted_price Net price after applied deductions.
     *
     * @return $this
     */
    public function setDeductedPrice($deducted_price)
    {
        $this->container['deducted_price'] = $deducted_price;

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
     * @param float $deduction_factor Factor of applied deductions to the total price. For example, \"0.03\" means that a 3% deduction is to be applied.
     *
     * @return $this
     */
    public function setDeductionFactor($deduction_factor)
    {
        $this->container['deduction_factor'] = $deduction_factor;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float $total_price Will return this ElementContainerBase's total price.
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets total_price_gross
     *
     * @return float
     */
    public function getTotalPriceGross()
    {
        return $this->container['total_price_gross'];
    }

    /**
     * Sets total_price_gross
     *
     * @param float $total_price_gross The total gross price for this ElementContainerBase including all child elements.
     *
     * @return $this
     */
    public function setTotalPriceGross($total_price_gross)
    {
        $this->container['total_price_gross'] = $total_price_gross;

        return $this;
    }

    /**
     * Gets total_price_gross_deducted
     *
     * @return float
     */
    public function getTotalPriceGrossDeducted()
    {
        return $this->container['total_price_gross_deducted'];
    }

    /**
     * Sets total_price_gross_deducted
     *
     * @param float $total_price_gross_deducted Total gross price after applied deductions.
     *
     * @return $this
     */
    public function setTotalPriceGrossDeducted($total_price_gross_deducted)
    {
        $this->container['total_price_gross_deducted'] = $total_price_gross_deducted;

        return $this;
    }

    /**
     * Gets price_type
     *
     * @return \Dangl\AVACloud\Model\PriceTypeDto
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param \Dangl\AVACloud\Model\PriceTypeDto $price_type Indicates the PriceType of this ElementContainerBase, whether it should factor into total costs or not.
     *
     * @return $this
     */
    public function setPriceType($price_type)
    {
        $this->container['price_type'] = $price_type;

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
     * @param string $short_text Description for this ServiceSpecificationGroup.
     *
     * @return $this
     */
    public function setShortText($short_text)
    {
        $this->container['short_text'] = $short_text;

        return $this;
    }

    /**
     * Gets comission_status
     *
     * @return \Dangl\AVACloud\Model\ComissionStatusDto
     */
    public function getComissionStatus()
    {
        return $this->container['comission_status'];
    }

    /**
     * Sets comission_status
     *
     * @param \Dangl\AVACloud\Model\ComissionStatusDto $comission_status Indicates if this service specification group is commissioned (and therefore should be executed), postponed for later or undefined.
     *
     * @return $this
     */
    public function setComissionStatus($comission_status)
    {
        $this->container['comission_status'] = $comission_status;

        return $this;
    }

    /**
     * Gets item_number
     *
     * @return \Dangl\AVACloud\Model\ItemNumberDto
     */
    public function getItemNumber()
    {
        return $this->container['item_number'];
    }

    /**
     * Sets item_number
     *
     * @param \Dangl\AVACloud\Model\ItemNumberDto $item_number The ItemNumber for this INumberedElement interface.
     *
     * @return $this
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

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
     * Gets is_lot
     *
     * @return bool
     */
    public function getIsLot()
    {
        return $this->container['is_lot'];
    }

    /**
     * Sets is_lot
     *
     * @param bool $is_lot This indicates if this group is the parent of a lot. See the documentation for more information about working with lots.
     *
     * @return $this
     */
    public function setIsLot($is_lot)
    {
        $this->container['is_lot'] = $is_lot;

        return $this;
    }

    /**
     * Gets alternative_to
     *
     * @return string
     */
    public function getAlternativeTo()
    {
        return $this->container['alternative_to'];
    }

    /**
     * Sets alternative_to
     *
     * @param string $alternative_to If this group is an alternative for a base group, then this property should point to the id of the group in this service specification that it can replace. If this is an alternative group to a base group, the PriceType should typically be set to \"WithoutTotal\" so this group does not factor into total costs. The PriceType is not changed when this property is set
     *
     * @return $this
     */
    public function setAlternativeTo($alternative_to)
    {
        $this->container['alternative_to'] = $alternative_to;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param \Dangl\AVACloud\Model\CatalogueDto[] $project_catalogues These are Catalogue that are used within this ElementContainerBase. Catalogue references are used to describe catalogues, or collections, that can be used to describe elements with commonly known properties. For example, QuantityAssignments use these to categorize themselves.
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
     * @param \Dangl\AVACloud\Model\CatalogueReferenceDto[] $catalogue_references Referenced catalogues for this QuantityAssignment.
     *
     * @return $this
     */
    public function setCatalogueReferences($catalogue_references)
    {
        $this->container['catalogue_references'] = $catalogue_references;

        return $this;
    }

    /**
     * Gets oenorm_properties
     *
     * @return \Dangl\AVACloud\Model\OenormPropertiesDto
     */
    public function getOenormProperties()
    {
        return $this->container['oenorm_properties'];
    }

    /**
     * Sets oenorm_properties
     *
     * @param \Dangl\AVACloud\Model\OenormPropertiesDto $oenorm_properties This class models special properties that only apply to some exchange scenarios where ÖNorm is used.
     *
     * @return $this
     */
    public function setOenormProperties($oenorm_properties)
    {
        $this->container['oenorm_properties'] = $oenorm_properties;

        return $this;
    }

    /**
     * Gets hierarchy_level
     *
     * @return int
     */
    public function getHierarchyLevel()
    {
        return $this->container['hierarchy_level'];
    }

    /**
     * Sets hierarchy_level
     *
     * @param int $hierarchy_level This is a zero based hierarchy level. It's set automatically when used in the context of a Project, and can be used to identify the hierarchy level of the current element.
     *
     * @return $this
     */
    public function setHierarchyLevel($hierarchy_level)
    {
        $this->container['hierarchy_level'] = $hierarchy_level;

        return $this;
    }

    /**
     * Gets addendum_status
     *
     * @return \Dangl\AVACloud\Model\AddendumStatusDto
     */
    public function getAddendumStatus()
    {
        return $this->container['addendum_status'];
    }

    /**
     * Sets addendum_status
     *
     * @param \Dangl\AVACloud\Model\AddendumStatusDto $addendum_status This indicates, if this element is part of an addendum an, if yes, with what status.
     *
     * @return $this
     */
    public function setAddendumStatus($addendum_status)
    {
        $this->container['addendum_status'] = $addendum_status;

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


