<?php
/**
 * AuEssRosterShiftActionResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Australia
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: AU
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use ArrayAccess;
use Swagger\Client\ObjectSerializer;

/**
 * AuEssRosterShiftActionResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuEssRosterShiftActionResponse implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuEssRosterShiftActionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shift' => '\Swagger\Client\Model\AuEssRosterShiftModel',
        'pending_shift_count' => 'int',
        'proposed_swap_count' => 'int',
        'not_accepted_shifts_count' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shift' => null,
        'pending_shift_count' => 'int32',
        'proposed_swap_count' => 'int32',
        'not_accepted_shifts_count' => 'int32',
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
        'shift' => 'shift',
        'pending_shift_count' => 'pendingShiftCount',
        'proposed_swap_count' => 'proposedSwapCount',
        'not_accepted_shifts_count' => 'notAcceptedShiftsCount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shift' => 'setShift',
        'pending_shift_count' => 'setPendingShiftCount',
        'proposed_swap_count' => 'setProposedSwapCount',
        'not_accepted_shifts_count' => 'setNotAcceptedShiftsCount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shift' => 'getShift',
        'pending_shift_count' => 'getPendingShiftCount',
        'proposed_swap_count' => 'getProposedSwapCount',
        'not_accepted_shifts_count' => 'getNotAcceptedShiftsCount',
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
        $this->container['shift'] = isset($data['shift']) ? $data['shift'] : null;
        $this->container['pending_shift_count'] = isset($data['pending_shift_count']) ? $data['pending_shift_count'] : null;
        $this->container['proposed_swap_count'] = isset($data['proposed_swap_count']) ? $data['proposed_swap_count'] : null;
        $this->container['not_accepted_shifts_count'] = isset($data['not_accepted_shifts_count']) ? $data['not_accepted_shifts_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets shift
     *
     * @return \Swagger\Client\Model\AuEssRosterShiftModel
     */
    public function getShift()
    {
        return $this->container['shift'];
    }

    /**
     * Sets shift
     *
     * @param \Swagger\Client\Model\AuEssRosterShiftModel $shift
     *
     * @return $this
     */
    public function setShift($shift)
    {
        $this->container['shift'] = $shift;

        return $this;
    }

    /**
     * Gets pending_shift_count
     *
     * @return int
     */
    public function getPendingShiftCount()
    {
        return $this->container['pending_shift_count'];
    }

    /**
     * Sets pending_shift_count
     *
     * @param int $pending_shift_count
     *
     * @return $this
     */
    public function setPendingShiftCount($pending_shift_count)
    {
        $this->container['pending_shift_count'] = $pending_shift_count;

        return $this;
    }

    /**
     * Gets proposed_swap_count
     *
     * @return int
     */
    public function getProposedSwapCount()
    {
        return $this->container['proposed_swap_count'];
    }

    /**
     * Sets proposed_swap_count
     *
     * @param int $proposed_swap_count
     *
     * @return $this
     */
    public function setProposedSwapCount($proposed_swap_count)
    {
        $this->container['proposed_swap_count'] = $proposed_swap_count;

        return $this;
    }

    /**
     * Gets not_accepted_shifts_count
     *
     * @return int
     */
    public function getNotAcceptedShiftsCount()
    {
        return $this->container['not_accepted_shifts_count'];
    }

    /**
     * Sets not_accepted_shifts_count
     *
     * @param int $not_accepted_shifts_count
     *
     * @return $this
     */
    public function setNotAcceptedShiftsCount($not_accepted_shifts_count)
    {
        $this->container['not_accepted_shifts_count'] = $not_accepted_shifts_count;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int $offset Offset
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
     * @param int $offset Offset
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
