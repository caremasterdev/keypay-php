<?php
/**
 * AuTimeAndAttendanceShiftModel
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
 * AuTimeAndAttendanceShiftModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuTimeAndAttendanceShiftModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuTimeAndAttendanceShiftModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'classification_id' => 'int',
        'classification_name' => 'string',
        'id' => 'int',
        'start_time_local' => '\DateTime',
        'start_time_utc' => '\DateTime',
        'end_time_utc' => '\DateTime',
        'end_time_local' => '\DateTime',
        'location_id' => 'int',
        'location_fully_qualified_name' => 'string',
        'work_type_id' => 'int',
        'work_type_name' => 'string',
        'kiosk_id' => 'int',
        'kiosk_name' => 'string',
        'timesheet_line_id' => 'int',
        'employee' => '\Swagger\Client\Model\BasicKioskEmployeeModel',
        'breaks' => '\Swagger\Client\Model\TimeAndAttendanceBreakModel[]',
        'shift_conditions' => '\Swagger\Client\Model\ShiftConditionModel[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'classification_id' => 'int32',
        'classification_name' => null,
        'id' => 'int32',
        'start_time_local' => 'date-time',
        'start_time_utc' => 'date-time',
        'end_time_utc' => 'date-time',
        'end_time_local' => 'date-time',
        'location_id' => 'int32',
        'location_fully_qualified_name' => null,
        'work_type_id' => 'int32',
        'work_type_name' => null,
        'kiosk_id' => 'int32',
        'kiosk_name' => null,
        'timesheet_line_id' => 'int32',
        'employee' => null,
        'breaks' => null,
        'shift_conditions' => null,
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
        'classification_id' => 'classificationId',
        'classification_name' => 'classificationName',
        'id' => 'id',
        'start_time_local' => 'startTimeLocal',
        'start_time_utc' => 'startTimeUtc',
        'end_time_utc' => 'endTimeUtc',
        'end_time_local' => 'endTimeLocal',
        'location_id' => 'locationId',
        'location_fully_qualified_name' => 'locationFullyQualifiedName',
        'work_type_id' => 'workTypeId',
        'work_type_name' => 'workTypeName',
        'kiosk_id' => 'kioskId',
        'kiosk_name' => 'kioskName',
        'timesheet_line_id' => 'timesheetLineId',
        'employee' => 'employee',
        'breaks' => 'breaks',
        'shift_conditions' => 'shiftConditions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classification_id' => 'setClassificationId',
        'classification_name' => 'setClassificationName',
        'id' => 'setId',
        'start_time_local' => 'setStartTimeLocal',
        'start_time_utc' => 'setStartTimeUtc',
        'end_time_utc' => 'setEndTimeUtc',
        'end_time_local' => 'setEndTimeLocal',
        'location_id' => 'setLocationId',
        'location_fully_qualified_name' => 'setLocationFullyQualifiedName',
        'work_type_id' => 'setWorkTypeId',
        'work_type_name' => 'setWorkTypeName',
        'kiosk_id' => 'setKioskId',
        'kiosk_name' => 'setKioskName',
        'timesheet_line_id' => 'setTimesheetLineId',
        'employee' => 'setEmployee',
        'breaks' => 'setBreaks',
        'shift_conditions' => 'setShiftConditions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classification_id' => 'getClassificationId',
        'classification_name' => 'getClassificationName',
        'id' => 'getId',
        'start_time_local' => 'getStartTimeLocal',
        'start_time_utc' => 'getStartTimeUtc',
        'end_time_utc' => 'getEndTimeUtc',
        'end_time_local' => 'getEndTimeLocal',
        'location_id' => 'getLocationId',
        'location_fully_qualified_name' => 'getLocationFullyQualifiedName',
        'work_type_id' => 'getWorkTypeId',
        'work_type_name' => 'getWorkTypeName',
        'kiosk_id' => 'getKioskId',
        'kiosk_name' => 'getKioskName',
        'timesheet_line_id' => 'getTimesheetLineId',
        'employee' => 'getEmployee',
        'breaks' => 'getBreaks',
        'shift_conditions' => 'getShiftConditions',
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
        $this->container['classification_id'] = isset($data['classification_id']) ? $data['classification_id'] : null;
        $this->container['classification_name'] = isset($data['classification_name']) ? $data['classification_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['start_time_local'] = isset($data['start_time_local']) ? $data['start_time_local'] : null;
        $this->container['start_time_utc'] = isset($data['start_time_utc']) ? $data['start_time_utc'] : null;
        $this->container['end_time_utc'] = isset($data['end_time_utc']) ? $data['end_time_utc'] : null;
        $this->container['end_time_local'] = isset($data['end_time_local']) ? $data['end_time_local'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['location_fully_qualified_name'] = isset($data['location_fully_qualified_name']) ? $data['location_fully_qualified_name'] : null;
        $this->container['work_type_id'] = isset($data['work_type_id']) ? $data['work_type_id'] : null;
        $this->container['work_type_name'] = isset($data['work_type_name']) ? $data['work_type_name'] : null;
        $this->container['kiosk_id'] = isset($data['kiosk_id']) ? $data['kiosk_id'] : null;
        $this->container['kiosk_name'] = isset($data['kiosk_name']) ? $data['kiosk_name'] : null;
        $this->container['timesheet_line_id'] = isset($data['timesheet_line_id']) ? $data['timesheet_line_id'] : null;
        $this->container['employee'] = isset($data['employee']) ? $data['employee'] : null;
        $this->container['breaks'] = isset($data['breaks']) ? $data['breaks'] : null;
        $this->container['shift_conditions'] = isset($data['shift_conditions']) ? $data['shift_conditions'] : null;
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
     * Gets classification_id
     *
     * @return int
     */
    public function getClassificationId()
    {
        return $this->container['classification_id'];
    }

    /**
     * Sets classification_id
     *
     * @param int $classification_id
     *
     * @return $this
     */
    public function setClassificationId($classification_id)
    {
        $this->container['classification_id'] = $classification_id;

        return $this;
    }

    /**
     * Gets classification_name
     *
     * @return string
     */
    public function getClassificationName()
    {
        return $this->container['classification_name'];
    }

    /**
     * Sets classification_name
     *
     * @param string $classification_name
     *
     * @return $this
     */
    public function setClassificationName($classification_name)
    {
        $this->container['classification_name'] = $classification_name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets start_time_local
     *
     * @return \DateTime
     */
    public function getStartTimeLocal()
    {
        return $this->container['start_time_local'];
    }

    /**
     * Sets start_time_local
     *
     * @param \DateTime $start_time_local
     *
     * @return $this
     */
    public function setStartTimeLocal($start_time_local)
    {
        $this->container['start_time_local'] = $start_time_local;

        return $this;
    }

    /**
     * Gets start_time_utc
     *
     * @return \DateTime
     */
    public function getStartTimeUtc()
    {
        return $this->container['start_time_utc'];
    }

    /**
     * Sets start_time_utc
     *
     * @param \DateTime $start_time_utc
     *
     * @return $this
     */
    public function setStartTimeUtc($start_time_utc)
    {
        $this->container['start_time_utc'] = $start_time_utc;

        return $this;
    }

    /**
     * Gets end_time_utc
     *
     * @return \DateTime
     */
    public function getEndTimeUtc()
    {
        return $this->container['end_time_utc'];
    }

    /**
     * Sets end_time_utc
     *
     * @param \DateTime $end_time_utc
     *
     * @return $this
     */
    public function setEndTimeUtc($end_time_utc)
    {
        $this->container['end_time_utc'] = $end_time_utc;

        return $this;
    }

    /**
     * Gets end_time_local
     *
     * @return \DateTime
     */
    public function getEndTimeLocal()
    {
        return $this->container['end_time_local'];
    }

    /**
     * Sets end_time_local
     *
     * @param \DateTime $end_time_local
     *
     * @return $this
     */
    public function setEndTimeLocal($end_time_local)
    {
        $this->container['end_time_local'] = $end_time_local;

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
     * Gets location_fully_qualified_name
     *
     * @return string
     */
    public function getLocationFullyQualifiedName()
    {
        return $this->container['location_fully_qualified_name'];
    }

    /**
     * Sets location_fully_qualified_name
     *
     * @param string $location_fully_qualified_name
     *
     * @return $this
     */
    public function setLocationFullyQualifiedName($location_fully_qualified_name)
    {
        $this->container['location_fully_qualified_name'] = $location_fully_qualified_name;

        return $this;
    }

    /**
     * Gets work_type_id
     *
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->container['work_type_id'];
    }

    /**
     * Sets work_type_id
     *
     * @param int $work_type_id
     *
     * @return $this
     */
    public function setWorkTypeId($work_type_id)
    {
        $this->container['work_type_id'] = $work_type_id;

        return $this;
    }

    /**
     * Gets work_type_name
     *
     * @return string
     */
    public function getWorkTypeName()
    {
        return $this->container['work_type_name'];
    }

    /**
     * Sets work_type_name
     *
     * @param string $work_type_name
     *
     * @return $this
     */
    public function setWorkTypeName($work_type_name)
    {
        $this->container['work_type_name'] = $work_type_name;

        return $this;
    }

    /**
     * Gets kiosk_id
     *
     * @return int
     */
    public function getKioskId()
    {
        return $this->container['kiosk_id'];
    }

    /**
     * Sets kiosk_id
     *
     * @param int $kiosk_id
     *
     * @return $this
     */
    public function setKioskId($kiosk_id)
    {
        $this->container['kiosk_id'] = $kiosk_id;

        return $this;
    }

    /**
     * Gets kiosk_name
     *
     * @return string
     */
    public function getKioskName()
    {
        return $this->container['kiosk_name'];
    }

    /**
     * Sets kiosk_name
     *
     * @param string $kiosk_name
     *
     * @return $this
     */
    public function setKioskName($kiosk_name)
    {
        $this->container['kiosk_name'] = $kiosk_name;

        return $this;
    }

    /**
     * Gets timesheet_line_id
     *
     * @return int
     */
    public function getTimesheetLineId()
    {
        return $this->container['timesheet_line_id'];
    }

    /**
     * Sets timesheet_line_id
     *
     * @param int $timesheet_line_id
     *
     * @return $this
     */
    public function setTimesheetLineId($timesheet_line_id)
    {
        $this->container['timesheet_line_id'] = $timesheet_line_id;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return \Swagger\Client\Model\BasicKioskEmployeeModel
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param \Swagger\Client\Model\BasicKioskEmployeeModel $employee
     *
     * @return $this
     */
    public function setEmployee($employee)
    {
        $this->container['employee'] = $employee;

        return $this;
    }

    /**
     * Gets breaks
     *
     * @return \Swagger\Client\Model\TimeAndAttendanceBreakModel[]
     */
    public function getBreaks()
    {
        return $this->container['breaks'];
    }

    /**
     * Sets breaks
     *
     * @param \Swagger\Client\Model\TimeAndAttendanceBreakModel[] $breaks
     *
     * @return $this
     */
    public function setBreaks($breaks)
    {
        $this->container['breaks'] = $breaks;

        return $this;
    }

    /**
     * Gets shift_conditions
     *
     * @return \Swagger\Client\Model\ShiftConditionModel[]
     */
    public function getShiftConditions()
    {
        return $this->container['shift_conditions'];
    }

    /**
     * Sets shift_conditions
     *
     * @param \Swagger\Client\Model\ShiftConditionModel[] $shift_conditions
     *
     * @return $this
     */
    public function setShiftConditions($shift_conditions)
    {
        $this->container['shift_conditions'] = $shift_conditions;

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
