<?php
/**
 * ShiftSwappingReportExportModel
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
 * ShiftSwappingReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShiftSwappingReportExportModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShiftSwappingReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from_employee_id' => 'int',
        'from_employee_name' => 'string',
        'to_employee_id' => 'int',
        'to_employee_name' => 'string',
        'start' => '\DateTime',
        'start_time' => 'string',
        'end' => '\DateTime',
        'end_time' => 'string',
        'location_id' => 'string',
        'location' => 'string',
        'work_type_id' => 'string',
        'work_type' => 'string',
        'status' => 'string',
        'old_cost' => 'double',
        'new_cost' => 'double',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from_employee_id' => 'int32',
        'from_employee_name' => null,
        'to_employee_id' => 'int32',
        'to_employee_name' => null,
        'start' => 'date-time',
        'start_time' => null,
        'end' => 'date-time',
        'end_time' => null,
        'location_id' => null,
        'location' => null,
        'work_type_id' => null,
        'work_type' => null,
        'status' => null,
        'old_cost' => 'double',
        'new_cost' => 'double',
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
        'from_employee_id' => 'fromEmployeeId',
        'from_employee_name' => 'fromEmployeeName',
        'to_employee_id' => 'toEmployeeId',
        'to_employee_name' => 'toEmployeeName',
        'start' => 'start',
        'start_time' => 'startTime',
        'end' => 'end',
        'end_time' => 'endTime',
        'location_id' => 'locationId',
        'location' => 'location',
        'work_type_id' => 'workTypeId',
        'work_type' => 'workType',
        'status' => 'status',
        'old_cost' => 'oldCost',
        'new_cost' => 'newCost',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_employee_id' => 'setFromEmployeeId',
        'from_employee_name' => 'setFromEmployeeName',
        'to_employee_id' => 'setToEmployeeId',
        'to_employee_name' => 'setToEmployeeName',
        'start' => 'setStart',
        'start_time' => 'setStartTime',
        'end' => 'setEnd',
        'end_time' => 'setEndTime',
        'location_id' => 'setLocationId',
        'location' => 'setLocation',
        'work_type_id' => 'setWorkTypeId',
        'work_type' => 'setWorkType',
        'status' => 'setStatus',
        'old_cost' => 'setOldCost',
        'new_cost' => 'setNewCost',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_employee_id' => 'getFromEmployeeId',
        'from_employee_name' => 'getFromEmployeeName',
        'to_employee_id' => 'getToEmployeeId',
        'to_employee_name' => 'getToEmployeeName',
        'start' => 'getStart',
        'start_time' => 'getStartTime',
        'end' => 'getEnd',
        'end_time' => 'getEndTime',
        'location_id' => 'getLocationId',
        'location' => 'getLocation',
        'work_type_id' => 'getWorkTypeId',
        'work_type' => 'getWorkType',
        'status' => 'getStatus',
        'old_cost' => 'getOldCost',
        'new_cost' => 'getNewCost',
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
        $this->container['from_employee_id'] = isset($data['from_employee_id']) ? $data['from_employee_id'] : null;
        $this->container['from_employee_name'] = isset($data['from_employee_name']) ? $data['from_employee_name'] : null;
        $this->container['to_employee_id'] = isset($data['to_employee_id']) ? $data['to_employee_id'] : null;
        $this->container['to_employee_name'] = isset($data['to_employee_name']) ? $data['to_employee_name'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['work_type_id'] = isset($data['work_type_id']) ? $data['work_type_id'] : null;
        $this->container['work_type'] = isset($data['work_type']) ? $data['work_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['old_cost'] = isset($data['old_cost']) ? $data['old_cost'] : null;
        $this->container['new_cost'] = isset($data['new_cost']) ? $data['new_cost'] : null;
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
     * Gets from_employee_id
     *
     * @return int
     */
    public function getFromEmployeeId()
    {
        return $this->container['from_employee_id'];
    }

    /**
     * Sets from_employee_id
     *
     * @param int $from_employee_id
     *
     * @return $this
     */
    public function setFromEmployeeId($from_employee_id)
    {
        $this->container['from_employee_id'] = $from_employee_id;

        return $this;
    }

    /**
     * Gets from_employee_name
     *
     * @return string
     */
    public function getFromEmployeeName()
    {
        return $this->container['from_employee_name'];
    }

    /**
     * Sets from_employee_name
     *
     * @param string $from_employee_name
     *
     * @return $this
     */
    public function setFromEmployeeName($from_employee_name)
    {
        $this->container['from_employee_name'] = $from_employee_name;

        return $this;
    }

    /**
     * Gets to_employee_id
     *
     * @return int
     */
    public function getToEmployeeId()
    {
        return $this->container['to_employee_id'];
    }

    /**
     * Sets to_employee_id
     *
     * @param int $to_employee_id
     *
     * @return $this
     */
    public function setToEmployeeId($to_employee_id)
    {
        $this->container['to_employee_id'] = $to_employee_id;

        return $this;
    }

    /**
     * Gets to_employee_name
     *
     * @return string
     */
    public function getToEmployeeName()
    {
        return $this->container['to_employee_name'];
    }

    /**
     * Sets to_employee_name
     *
     * @param string $to_employee_name
     *
     * @return $this
     */
    public function setToEmployeeName($to_employee_name)
    {
        $this->container['to_employee_name'] = $to_employee_name;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param string $start_time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime $end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param string $end_time
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string $location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets work_type_id
     *
     * @return string
     */
    public function getWorkTypeId()
    {
        return $this->container['work_type_id'];
    }

    /**
     * Sets work_type_id
     *
     * @param string $work_type_id
     *
     * @return $this
     */
    public function setWorkTypeId($work_type_id)
    {
        $this->container['work_type_id'] = $work_type_id;

        return $this;
    }

    /**
     * Gets work_type
     *
     * @return string
     */
    public function getWorkType()
    {
        return $this->container['work_type'];
    }

    /**
     * Sets work_type
     *
     * @param string $work_type
     *
     * @return $this
     */
    public function setWorkType($work_type)
    {
        $this->container['work_type'] = $work_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets old_cost
     *
     * @return float
     */
    public function getOldCost()
    {
        return $this->container['old_cost'];
    }

    /**
     * Sets old_cost
     *
     * @param float $old_cost
     *
     * @return $this
     */
    public function setOldCost($old_cost)
    {
        $this->container['old_cost'] = $old_cost;

        return $this;
    }

    /**
     * Gets new_cost
     *
     * @return float
     */
    public function getNewCost()
    {
        return $this->container['new_cost'];
    }

    /**
     * Sets new_cost
     *
     * @param float $new_cost
     *
     * @return $this
     */
    public function setNewCost($new_cost)
    {
        $this->container['new_cost'] = $new_cost;

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
