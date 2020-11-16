<?php
/**
 * StandardReferenceTypeDto
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
 * StandardReferenceTypeDto Class Doc Comment
 *
 * @category Class
 * @description This enumeration identifies a pre-known standard used for referencing standardized descriptions.
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandardReferenceTypeDto
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const ST_LB = 'StLB';
    const ST_LK = 'StLK';
    const STLB_BAU_Z = 'STLBBauZ';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::ST_LB,
            self::ST_LK,
            self::STLB_BAU_Z,
        ];
    }
}


