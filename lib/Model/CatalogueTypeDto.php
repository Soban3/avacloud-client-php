<?php
/**
 * CatalogueTypeDto
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
 * CatalogueTypeDto Class Doc Comment
 *
 * @category Class
 * @description This enumeration describes the type of a catalogue. Catalogues, or collections, hold information to categorize and describe items. For example, the German DIN 276 cost group standards describe different types of costs for building projects. When referencing the DIN 276 catalogue and providing an item key or identifier, it is possible to reference data in this catalogue.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogueTypeDto
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const LOCATION = 'Location';
    const DIN276 = 'DIN276';
    const COST_UNIT = 'CostUnit';
    const WORK_CATEGORY = 'WorkCategory';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::LOCATION,
            self::DIN276,
            self::COST_UNIT,
            self::WORK_CATEGORY,
        ];
    }
}


