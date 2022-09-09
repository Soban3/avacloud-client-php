<?php
/**
 * AddendumStatusDto
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
 * AddendumStatusDto Class Doc Comment
 *
 * @category Class
 * @description This enumeration represents the status of an addendum, &#39;Nachtrag&#39; in German
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddendumStatusDto
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
    const RECOGNIZED = 'Recognized';
    const FILED = 'Filed';
    const OFFERED = 'Offered';
    const WITHDRAWN = 'Withdrawn';
    const REJECTED = 'Rejected';
    const REJECTION_OBJECTED = 'RejectionObjected';
    const FORMALLY_ACKNOWLEDGED = 'FormallyAcknowledged';
    const APPROVED = 'Approved';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::RECOGNIZED,
            self::FILED,
            self::OFFERED,
            self::WITHDRAWN,
            self::REJECTED,
            self::REJECTION_OBJECTED,
            self::FORMALLY_ACKNOWLEDGED,
            self::APPROVED,
        ];
    }
}


