<?php
/**
 * HttpStatusCode
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
 * HttpStatusCode Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Dangl\AVACloud
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HttpStatusCode
{
    /**
     * Possible values of this enum
     */
    const _CONTINUE = 'Continue';
    const SWITCHING_PROTOCOLS = 'SwitchingProtocols';
    const PROCESSING = 'Processing';
    const EARLY_HINTS = 'EarlyHints';
    const OK = 'OK';
    const CREATED = 'Created';
    const ACCEPTED = 'Accepted';
    const NON_AUTHORITATIVE_INFORMATION = 'NonAuthoritativeInformation';
    const NO_CONTENT = 'NoContent';
    const RESET_CONTENT = 'ResetContent';
    const PARTIAL_CONTENT = 'PartialContent';
    const MULTI_STATUS = 'MultiStatus';
    const ALREADY_REPORTED = 'AlreadyReported';
    const IM_USED = 'IMUsed';
    const AMBIGUOUS = 'Ambiguous';
    const MOVED = 'Moved';
    const REDIRECT = 'Redirect';
    const REDIRECT_METHOD = 'RedirectMethod';
    const NOT_MODIFIED = 'NotModified';
    const USE_PROXY = 'UseProxy';
    const UNUSED = 'Unused';
    const TEMPORARY_REDIRECT = 'TemporaryRedirect';
    const PERMANENT_REDIRECT = 'PermanentRedirect';
    const BAD_REQUEST = 'BadRequest';
    const UNAUTHORIZED = 'Unauthorized';
    const PAYMENT_REQUIRED = 'PaymentRequired';
    const FORBIDDEN = 'Forbidden';
    const NOT_FOUND = 'NotFound';
    const METHOD_NOT_ALLOWED = 'MethodNotAllowed';
    const NOT_ACCEPTABLE = 'NotAcceptable';
    const PROXY_AUTHENTICATION_REQUIRED = 'ProxyAuthenticationRequired';
    const REQUEST_TIMEOUT = 'RequestTimeout';
    const CONFLICT = 'Conflict';
    const GONE = 'Gone';
    const LENGTH_REQUIRED = 'LengthRequired';
    const PRECONDITION_FAILED = 'PreconditionFailed';
    const REQUEST_ENTITY_TOO_LARGE = 'RequestEntityTooLarge';
    const REQUEST_URI_TOO_LONG = 'RequestUriTooLong';
    const UNSUPPORTED_MEDIA_TYPE = 'UnsupportedMediaType';
    const REQUESTED_RANGE_NOT_SATISFIABLE = 'RequestedRangeNotSatisfiable';
    const EXPECTATION_FAILED = 'ExpectationFailed';
    const MISDIRECTED_REQUEST = 'MisdirectedRequest';
    const UNPROCESSABLE_ENTITY = 'UnprocessableEntity';
    const LOCKED = 'Locked';
    const FAILED_DEPENDENCY = 'FailedDependency';
    const UPGRADE_REQUIRED = 'UpgradeRequired';
    const PRECONDITION_REQUIRED = 'PreconditionRequired';
    const TOO_MANY_REQUESTS = 'TooManyRequests';
    const REQUEST_HEADER_FIELDS_TOO_LARGE = 'RequestHeaderFieldsTooLarge';
    const UNAVAILABLE_FOR_LEGAL_REASONS = 'UnavailableForLegalReasons';
    const INTERNAL_SERVER_ERROR = 'InternalServerError';
    const NOT_IMPLEMENTED = 'NotImplemented';
    const BAD_GATEWAY = 'BadGateway';
    const SERVICE_UNAVAILABLE = 'ServiceUnavailable';
    const GATEWAY_TIMEOUT = 'GatewayTimeout';
    const HTTP_VERSION_NOT_SUPPORTED = 'HttpVersionNotSupported';
    const VARIANT_ALSO_NEGOTIATES = 'VariantAlsoNegotiates';
    const INSUFFICIENT_STORAGE = 'InsufficientStorage';
    const LOOP_DETECTED = 'LoopDetected';
    const NOT_EXTENDED = 'NotExtended';
    const NETWORK_AUTHENTICATION_REQUIRED = 'NetworkAuthenticationRequired';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_CONTINUE,
            self::SWITCHING_PROTOCOLS,
            self::PROCESSING,
            self::EARLY_HINTS,
            self::OK,
            self::CREATED,
            self::ACCEPTED,
            self::NON_AUTHORITATIVE_INFORMATION,
            self::NO_CONTENT,
            self::RESET_CONTENT,
            self::PARTIAL_CONTENT,
            self::MULTI_STATUS,
            self::ALREADY_REPORTED,
            self::IM_USED,
            self::AMBIGUOUS,
            self::MOVED,
            self::REDIRECT,
            self::REDIRECT_METHOD,
            self::NOT_MODIFIED,
            self::USE_PROXY,
            self::UNUSED,
            self::TEMPORARY_REDIRECT,
            self::PERMANENT_REDIRECT,
            self::BAD_REQUEST,
            self::UNAUTHORIZED,
            self::PAYMENT_REQUIRED,
            self::FORBIDDEN,
            self::NOT_FOUND,
            self::METHOD_NOT_ALLOWED,
            self::NOT_ACCEPTABLE,
            self::PROXY_AUTHENTICATION_REQUIRED,
            self::REQUEST_TIMEOUT,
            self::CONFLICT,
            self::GONE,
            self::LENGTH_REQUIRED,
            self::PRECONDITION_FAILED,
            self::REQUEST_ENTITY_TOO_LARGE,
            self::REQUEST_URI_TOO_LONG,
            self::UNSUPPORTED_MEDIA_TYPE,
            self::REQUESTED_RANGE_NOT_SATISFIABLE,
            self::EXPECTATION_FAILED,
            self::MISDIRECTED_REQUEST,
            self::UNPROCESSABLE_ENTITY,
            self::LOCKED,
            self::FAILED_DEPENDENCY,
            self::UPGRADE_REQUIRED,
            self::PRECONDITION_REQUIRED,
            self::TOO_MANY_REQUESTS,
            self::REQUEST_HEADER_FIELDS_TOO_LARGE,
            self::UNAVAILABLE_FOR_LEGAL_REASONS,
            self::INTERNAL_SERVER_ERROR,
            self::NOT_IMPLEMENTED,
            self::BAD_GATEWAY,
            self::SERVICE_UNAVAILABLE,
            self::GATEWAY_TIMEOUT,
            self::HTTP_VERSION_NOT_SUPPORTED,
            self::VARIANT_ALSO_NEGOTIATES,
            self::INSUFFICIENT_STORAGE,
            self::LOOP_DETECTED,
            self::NOT_EXTENDED,
            self::NETWORK_AUTHENTICATION_REQUIRED,
        ];
    }
}


