<?php
/**
 * DestinationGaebExchangePhase
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
use \Dangl\AVACloud\ObjectSerializer;

/**
 * DestinationGaebExchangePhase Class Doc Comment
 *
 * @category Class
 * @description The GAEB exchange phase to transform to
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinationGaebExchangePhase
{
    /**
     * Possible values of this enum
     */
    const NONE = 'None';
    const BASE = 'Base';
    const OFFER_REQUEST = 'OfferRequest';
    const OFFER = 'Offer';
    const GRANT = 'Grant';
    const COST_ESTIMATE = 'CostEstimate';
    const SIDE_OFFER = 'SideOffer';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::BASE,
            self::OFFER_REQUEST,
            self::OFFER,
            self::GRANT,
            self::COST_ESTIMATE,
            self::SIDE_OFFER,
        ];
    }
}


