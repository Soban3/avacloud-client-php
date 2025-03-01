<?php
/**
 * PriceComponentTypeDto
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
use \Dangl\AVACloud\ObjectSerializer;

/**
 * PriceComponentTypeDto Class Doc Comment
 *
 * @category Class
 * @description This enumeration models types of price components for better classification.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PriceComponentTypeDto
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const WAGES = 'Wages';
    const MATERIALS = 'Materials';
    const PLANT = 'Plant';
    const MISCELLANEOUS = 'Miscellaneous';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::WAGES,
            self::MATERIALS,
            self::PLANT,
            self::MISCELLANEOUS,
        ];
    }
}


