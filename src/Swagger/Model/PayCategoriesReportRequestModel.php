<?php
/**
 * PayCategoriesReportRequestModel
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
 * PayCategoriesReportRequestModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayCategoriesReportRequestModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayCategoriesReportRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pay_schedule_id' => 'int',
        'employee_id' => 'int',
        'group_by_earnings_location' => 'bool',
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'location_id' => 'int',
        'employing_entity_id' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pay_schedule_id' => 'int32',
        'employee_id' => 'int32',
        'group_by_earnings_location' => null,
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'location_id' => 'int32',
        'employing_entity_id' => 'int32',
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
        'pay_schedule_id' => 'payScheduleId',
        'employee_id' => 'employeeId',
        'group_by_earnings_location' => 'groupByEarningsLocation',
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'location_id' => 'locationId',
        'employing_entity_id' => 'employingEntityId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pay_schedule_id' => 'setPayScheduleId',
        'employee_id' => 'setEmployeeId',
        'group_by_earnings_location' => 'setGroupByEarningsLocation',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'location_id' => 'setLocationId',
        'employing_entity_id' => 'setEmployingEntityId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pay_schedule_id' => 'getPayScheduleId',
        'employee_id' => 'getEmployeeId',
        'group_by_earnings_location' => 'getGroupByEarningsLocation',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'location_id' => 'getLocationId',
        'employing_entity_id' => 'getEmployingEntityId',
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
        $this->container['pay_schedule_id'] = isset($data['pay_schedule_id']) ? $data['pay_schedule_id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['group_by_earnings_location'] = isset($data['group_by_earnings_location']) ? $data['group_by_earnings_location'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['employing_entity_id'] = isset($data['employing_entity_id']) ? $data['employing_entity_id'] : null;
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
     * Gets pay_schedule_id
     *
     * @return int
     */
    public function getPayScheduleId()
    {
        return $this->container['pay_schedule_id'];
    }

    /**
     * Sets pay_schedule_id
     *
     * @param int $pay_schedule_id
     *
     * @return $this
     */
    public function setPayScheduleId($pay_schedule_id)
    {
        $this->container['pay_schedule_id'] = $pay_schedule_id;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int $employee_id
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets group_by_earnings_location
     *
     * @return bool
     */
    public function getGroupByEarningsLocation()
    {
        return $this->container['group_by_earnings_location'];
    }

    /**
     * Sets group_by_earnings_location
     *
     * @param bool $group_by_earnings_location
     *
     * @return $this
     */
    public function setGroupByEarningsLocation($group_by_earnings_location)
    {
        $this->container['group_by_earnings_location'] = $group_by_earnings_location;

        return $this;
    }

    /**
     * Gets from_date
     *
     * @return \DateTime
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     *
     * @param \DateTime $from_date
     *
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     *
     * @return \DateTime
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     *
     * @param \DateTime $to_date
     *
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets employing_entity_id
     *
     * @return int
     */
    public function getEmployingEntityId()
    {
        return $this->container['employing_entity_id'];
    }

    /**
     * Sets employing_entity_id
     *
     * @param int $employing_entity_id
     *
     * @return $this
     */
    public function setEmployingEntityId($employing_entity_id)
    {
        $this->container['employing_entity_id'] = $employing_entity_id;

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
