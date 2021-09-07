<?php
/**
 * AuRosterTimesheetComparisonReportExportModel
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
 * AuRosterTimesheetComparisonReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuRosterTimesheetComparisonReportExportModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuRosterTimesheetComparisonReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'employment_type' => 'string',
        'employee_id' => 'int',
        'employee_first_name' => 'string',
        'employee_surname' => 'string',
        'employee_external_id' => 'string',
        'employee_default_location' => 'string',
        'pay_schedule_name' => 'string',
        'rostered_id' => 'int',
        'rostered_status' => 'string',
        'rostered_location' => 'string',
        'rostered_work_type' => 'string',
        'rostered_start' => '\DateTime',
        'rostered_start_time' => 'string',
        'rostered_end' => '\DateTime',
        'rostered_end_time' => 'string',
        'rostered_duration' => 'string',
        'rostered_breaks' => 'string',
        'rostered_cost' => 'double',
        'timesheet_id' => 'int',
        'timesheet_status' => 'string',
        'timesheet_location' => 'string',
        'timesheet_work_type' => 'string',
        'timesheet_start' => '\DateTime',
        'timesheet_start_time' => 'string',
        'timesheet_end' => '\DateTime',
        'timesheet_end_time' => 'string',
        'timesheet_duration' => 'string',
        'timesheet_breaks' => 'string',
        'timesheet_units' => 'double',
        'timesheet_unit_type' => 'string',
        'timesheet_cost' => 'double',
        'time_variance' => 'string',
        'cost_variance' => 'double',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'employment_type' => null,
        'employee_id' => 'int32',
        'employee_first_name' => null,
        'employee_surname' => null,
        'employee_external_id' => null,
        'employee_default_location' => null,
        'pay_schedule_name' => null,
        'rostered_id' => 'int32',
        'rostered_status' => null,
        'rostered_location' => null,
        'rostered_work_type' => null,
        'rostered_start' => 'date-time',
        'rostered_start_time' => null,
        'rostered_end' => 'date-time',
        'rostered_end_time' => null,
        'rostered_duration' => null,
        'rostered_breaks' => null,
        'rostered_cost' => 'double',
        'timesheet_id' => 'int32',
        'timesheet_status' => null,
        'timesheet_location' => null,
        'timesheet_work_type' => null,
        'timesheet_start' => 'date-time',
        'timesheet_start_time' => null,
        'timesheet_end' => 'date-time',
        'timesheet_end_time' => null,
        'timesheet_duration' => null,
        'timesheet_breaks' => null,
        'timesheet_units' => 'double',
        'timesheet_unit_type' => null,
        'timesheet_cost' => 'double',
        'time_variance' => null,
        'cost_variance' => 'double',
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
        'employment_type' => 'employmentType',
        'employee_id' => 'employeeId',
        'employee_first_name' => 'employeeFirstName',
        'employee_surname' => 'employeeSurname',
        'employee_external_id' => 'employeeExternalId',
        'employee_default_location' => 'employeeDefaultLocation',
        'pay_schedule_name' => 'payScheduleName',
        'rostered_id' => 'rosteredId',
        'rostered_status' => 'rosteredStatus',
        'rostered_location' => 'rosteredLocation',
        'rostered_work_type' => 'rosteredWorkType',
        'rostered_start' => 'rosteredStart',
        'rostered_start_time' => 'rosteredStartTime',
        'rostered_end' => 'rosteredEnd',
        'rostered_end_time' => 'rosteredEndTime',
        'rostered_duration' => 'rosteredDuration',
        'rostered_breaks' => 'rosteredBreaks',
        'rostered_cost' => 'rosteredCost',
        'timesheet_id' => 'timesheetId',
        'timesheet_status' => 'timesheetStatus',
        'timesheet_location' => 'timesheetLocation',
        'timesheet_work_type' => 'timesheetWorkType',
        'timesheet_start' => 'timesheetStart',
        'timesheet_start_time' => 'timesheetStartTime',
        'timesheet_end' => 'timesheetEnd',
        'timesheet_end_time' => 'timesheetEndTime',
        'timesheet_duration' => 'timesheetDuration',
        'timesheet_breaks' => 'timesheetBreaks',
        'timesheet_units' => 'timesheetUnits',
        'timesheet_unit_type' => 'timesheetUnitType',
        'timesheet_cost' => 'timesheetCost',
        'time_variance' => 'timeVariance',
        'cost_variance' => 'costVariance',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employment_type' => 'setEmploymentType',
        'employee_id' => 'setEmployeeId',
        'employee_first_name' => 'setEmployeeFirstName',
        'employee_surname' => 'setEmployeeSurname',
        'employee_external_id' => 'setEmployeeExternalId',
        'employee_default_location' => 'setEmployeeDefaultLocation',
        'pay_schedule_name' => 'setPayScheduleName',
        'rostered_id' => 'setRosteredId',
        'rostered_status' => 'setRosteredStatus',
        'rostered_location' => 'setRosteredLocation',
        'rostered_work_type' => 'setRosteredWorkType',
        'rostered_start' => 'setRosteredStart',
        'rostered_start_time' => 'setRosteredStartTime',
        'rostered_end' => 'setRosteredEnd',
        'rostered_end_time' => 'setRosteredEndTime',
        'rostered_duration' => 'setRosteredDuration',
        'rostered_breaks' => 'setRosteredBreaks',
        'rostered_cost' => 'setRosteredCost',
        'timesheet_id' => 'setTimesheetId',
        'timesheet_status' => 'setTimesheetStatus',
        'timesheet_location' => 'setTimesheetLocation',
        'timesheet_work_type' => 'setTimesheetWorkType',
        'timesheet_start' => 'setTimesheetStart',
        'timesheet_start_time' => 'setTimesheetStartTime',
        'timesheet_end' => 'setTimesheetEnd',
        'timesheet_end_time' => 'setTimesheetEndTime',
        'timesheet_duration' => 'setTimesheetDuration',
        'timesheet_breaks' => 'setTimesheetBreaks',
        'timesheet_units' => 'setTimesheetUnits',
        'timesheet_unit_type' => 'setTimesheetUnitType',
        'timesheet_cost' => 'setTimesheetCost',
        'time_variance' => 'setTimeVariance',
        'cost_variance' => 'setCostVariance',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employment_type' => 'getEmploymentType',
        'employee_id' => 'getEmployeeId',
        'employee_first_name' => 'getEmployeeFirstName',
        'employee_surname' => 'getEmployeeSurname',
        'employee_external_id' => 'getEmployeeExternalId',
        'employee_default_location' => 'getEmployeeDefaultLocation',
        'pay_schedule_name' => 'getPayScheduleName',
        'rostered_id' => 'getRosteredId',
        'rostered_status' => 'getRosteredStatus',
        'rostered_location' => 'getRosteredLocation',
        'rostered_work_type' => 'getRosteredWorkType',
        'rostered_start' => 'getRosteredStart',
        'rostered_start_time' => 'getRosteredStartTime',
        'rostered_end' => 'getRosteredEnd',
        'rostered_end_time' => 'getRosteredEndTime',
        'rostered_duration' => 'getRosteredDuration',
        'rostered_breaks' => 'getRosteredBreaks',
        'rostered_cost' => 'getRosteredCost',
        'timesheet_id' => 'getTimesheetId',
        'timesheet_status' => 'getTimesheetStatus',
        'timesheet_location' => 'getTimesheetLocation',
        'timesheet_work_type' => 'getTimesheetWorkType',
        'timesheet_start' => 'getTimesheetStart',
        'timesheet_start_time' => 'getTimesheetStartTime',
        'timesheet_end' => 'getTimesheetEnd',
        'timesheet_end_time' => 'getTimesheetEndTime',
        'timesheet_duration' => 'getTimesheetDuration',
        'timesheet_breaks' => 'getTimesheetBreaks',
        'timesheet_units' => 'getTimesheetUnits',
        'timesheet_unit_type' => 'getTimesheetUnitType',
        'timesheet_cost' => 'getTimesheetCost',
        'time_variance' => 'getTimeVariance',
        'cost_variance' => 'getCostVariance',
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
        $this->container['employment_type'] = isset($data['employment_type']) ? $data['employment_type'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['employee_first_name'] = isset($data['employee_first_name']) ? $data['employee_first_name'] : null;
        $this->container['employee_surname'] = isset($data['employee_surname']) ? $data['employee_surname'] : null;
        $this->container['employee_external_id'] = isset($data['employee_external_id']) ? $data['employee_external_id'] : null;
        $this->container['employee_default_location'] = isset($data['employee_default_location']) ? $data['employee_default_location'] : null;
        $this->container['pay_schedule_name'] = isset($data['pay_schedule_name']) ? $data['pay_schedule_name'] : null;
        $this->container['rostered_id'] = isset($data['rostered_id']) ? $data['rostered_id'] : null;
        $this->container['rostered_status'] = isset($data['rostered_status']) ? $data['rostered_status'] : null;
        $this->container['rostered_location'] = isset($data['rostered_location']) ? $data['rostered_location'] : null;
        $this->container['rostered_work_type'] = isset($data['rostered_work_type']) ? $data['rostered_work_type'] : null;
        $this->container['rostered_start'] = isset($data['rostered_start']) ? $data['rostered_start'] : null;
        $this->container['rostered_start_time'] = isset($data['rostered_start_time']) ? $data['rostered_start_time'] : null;
        $this->container['rostered_end'] = isset($data['rostered_end']) ? $data['rostered_end'] : null;
        $this->container['rostered_end_time'] = isset($data['rostered_end_time']) ? $data['rostered_end_time'] : null;
        $this->container['rostered_duration'] = isset($data['rostered_duration']) ? $data['rostered_duration'] : null;
        $this->container['rostered_breaks'] = isset($data['rostered_breaks']) ? $data['rostered_breaks'] : null;
        $this->container['rostered_cost'] = isset($data['rostered_cost']) ? $data['rostered_cost'] : null;
        $this->container['timesheet_id'] = isset($data['timesheet_id']) ? $data['timesheet_id'] : null;
        $this->container['timesheet_status'] = isset($data['timesheet_status']) ? $data['timesheet_status'] : null;
        $this->container['timesheet_location'] = isset($data['timesheet_location']) ? $data['timesheet_location'] : null;
        $this->container['timesheet_work_type'] = isset($data['timesheet_work_type']) ? $data['timesheet_work_type'] : null;
        $this->container['timesheet_start'] = isset($data['timesheet_start']) ? $data['timesheet_start'] : null;
        $this->container['timesheet_start_time'] = isset($data['timesheet_start_time']) ? $data['timesheet_start_time'] : null;
        $this->container['timesheet_end'] = isset($data['timesheet_end']) ? $data['timesheet_end'] : null;
        $this->container['timesheet_end_time'] = isset($data['timesheet_end_time']) ? $data['timesheet_end_time'] : null;
        $this->container['timesheet_duration'] = isset($data['timesheet_duration']) ? $data['timesheet_duration'] : null;
        $this->container['timesheet_breaks'] = isset($data['timesheet_breaks']) ? $data['timesheet_breaks'] : null;
        $this->container['timesheet_units'] = isset($data['timesheet_units']) ? $data['timesheet_units'] : null;
        $this->container['timesheet_unit_type'] = isset($data['timesheet_unit_type']) ? $data['timesheet_unit_type'] : null;
        $this->container['timesheet_cost'] = isset($data['timesheet_cost']) ? $data['timesheet_cost'] : null;
        $this->container['time_variance'] = isset($data['time_variance']) ? $data['time_variance'] : null;
        $this->container['cost_variance'] = isset($data['cost_variance']) ? $data['cost_variance'] : null;
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
     * Gets employment_type
     *
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->container['employment_type'];
    }

    /**
     * Sets employment_type
     *
     * @param string $employment_type
     *
     * @return $this
     */
    public function setEmploymentType($employment_type)
    {
        $this->container['employment_type'] = $employment_type;

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
     * Gets employee_first_name
     *
     * @return string
     */
    public function getEmployeeFirstName()
    {
        return $this->container['employee_first_name'];
    }

    /**
     * Sets employee_first_name
     *
     * @param string $employee_first_name
     *
     * @return $this
     */
    public function setEmployeeFirstName($employee_first_name)
    {
        $this->container['employee_first_name'] = $employee_first_name;

        return $this;
    }

    /**
     * Gets employee_surname
     *
     * @return string
     */
    public function getEmployeeSurname()
    {
        return $this->container['employee_surname'];
    }

    /**
     * Sets employee_surname
     *
     * @param string $employee_surname
     *
     * @return $this
     */
    public function setEmployeeSurname($employee_surname)
    {
        $this->container['employee_surname'] = $employee_surname;

        return $this;
    }

    /**
     * Gets employee_external_id
     *
     * @return string
     */
    public function getEmployeeExternalId()
    {
        return $this->container['employee_external_id'];
    }

    /**
     * Sets employee_external_id
     *
     * @param string $employee_external_id
     *
     * @return $this
     */
    public function setEmployeeExternalId($employee_external_id)
    {
        $this->container['employee_external_id'] = $employee_external_id;

        return $this;
    }

    /**
     * Gets employee_default_location
     *
     * @return string
     */
    public function getEmployeeDefaultLocation()
    {
        return $this->container['employee_default_location'];
    }

    /**
     * Sets employee_default_location
     *
     * @param string $employee_default_location
     *
     * @return $this
     */
    public function setEmployeeDefaultLocation($employee_default_location)
    {
        $this->container['employee_default_location'] = $employee_default_location;

        return $this;
    }

    /**
     * Gets pay_schedule_name
     *
     * @return string
     */
    public function getPayScheduleName()
    {
        return $this->container['pay_schedule_name'];
    }

    /**
     * Sets pay_schedule_name
     *
     * @param string $pay_schedule_name
     *
     * @return $this
     */
    public function setPayScheduleName($pay_schedule_name)
    {
        $this->container['pay_schedule_name'] = $pay_schedule_name;

        return $this;
    }

    /**
     * Gets rostered_id
     *
     * @return int
     */
    public function getRosteredId()
    {
        return $this->container['rostered_id'];
    }

    /**
     * Sets rostered_id
     *
     * @param int $rostered_id
     *
     * @return $this
     */
    public function setRosteredId($rostered_id)
    {
        $this->container['rostered_id'] = $rostered_id;

        return $this;
    }

    /**
     * Gets rostered_status
     *
     * @return string
     */
    public function getRosteredStatus()
    {
        return $this->container['rostered_status'];
    }

    /**
     * Sets rostered_status
     *
     * @param string $rostered_status
     *
     * @return $this
     */
    public function setRosteredStatus($rostered_status)
    {
        $this->container['rostered_status'] = $rostered_status;

        return $this;
    }

    /**
     * Gets rostered_location
     *
     * @return string
     */
    public function getRosteredLocation()
    {
        return $this->container['rostered_location'];
    }

    /**
     * Sets rostered_location
     *
     * @param string $rostered_location
     *
     * @return $this
     */
    public function setRosteredLocation($rostered_location)
    {
        $this->container['rostered_location'] = $rostered_location;

        return $this;
    }

    /**
     * Gets rostered_work_type
     *
     * @return string
     */
    public function getRosteredWorkType()
    {
        return $this->container['rostered_work_type'];
    }

    /**
     * Sets rostered_work_type
     *
     * @param string $rostered_work_type
     *
     * @return $this
     */
    public function setRosteredWorkType($rostered_work_type)
    {
        $this->container['rostered_work_type'] = $rostered_work_type;

        return $this;
    }

    /**
     * Gets rostered_start
     *
     * @return \DateTime
     */
    public function getRosteredStart()
    {
        return $this->container['rostered_start'];
    }

    /**
     * Sets rostered_start
     *
     * @param \DateTime $rostered_start
     *
     * @return $this
     */
    public function setRosteredStart($rostered_start)
    {
        $this->container['rostered_start'] = $rostered_start;

        return $this;
    }

    /**
     * Gets rostered_start_time
     *
     * @return string
     */
    public function getRosteredStartTime()
    {
        return $this->container['rostered_start_time'];
    }

    /**
     * Sets rostered_start_time
     *
     * @param string $rostered_start_time
     *
     * @return $this
     */
    public function setRosteredStartTime($rostered_start_time)
    {
        $this->container['rostered_start_time'] = $rostered_start_time;

        return $this;
    }

    /**
     * Gets rostered_end
     *
     * @return \DateTime
     */
    public function getRosteredEnd()
    {
        return $this->container['rostered_end'];
    }

    /**
     * Sets rostered_end
     *
     * @param \DateTime $rostered_end
     *
     * @return $this
     */
    public function setRosteredEnd($rostered_end)
    {
        $this->container['rostered_end'] = $rostered_end;

        return $this;
    }

    /**
     * Gets rostered_end_time
     *
     * @return string
     */
    public function getRosteredEndTime()
    {
        return $this->container['rostered_end_time'];
    }

    /**
     * Sets rostered_end_time
     *
     * @param string $rostered_end_time
     *
     * @return $this
     */
    public function setRosteredEndTime($rostered_end_time)
    {
        $this->container['rostered_end_time'] = $rostered_end_time;

        return $this;
    }

    /**
     * Gets rostered_duration
     *
     * @return string
     */
    public function getRosteredDuration()
    {
        return $this->container['rostered_duration'];
    }

    /**
     * Sets rostered_duration
     *
     * @param string $rostered_duration
     *
     * @return $this
     */
    public function setRosteredDuration($rostered_duration)
    {
        $this->container['rostered_duration'] = $rostered_duration;

        return $this;
    }

    /**
     * Gets rostered_breaks
     *
     * @return string
     */
    public function getRosteredBreaks()
    {
        return $this->container['rostered_breaks'];
    }

    /**
     * Sets rostered_breaks
     *
     * @param string $rostered_breaks
     *
     * @return $this
     */
    public function setRosteredBreaks($rostered_breaks)
    {
        $this->container['rostered_breaks'] = $rostered_breaks;

        return $this;
    }

    /**
     * Gets rostered_cost
     *
     * @return float
     */
    public function getRosteredCost()
    {
        return $this->container['rostered_cost'];
    }

    /**
     * Sets rostered_cost
     *
     * @param float $rostered_cost
     *
     * @return $this
     */
    public function setRosteredCost($rostered_cost)
    {
        $this->container['rostered_cost'] = $rostered_cost;

        return $this;
    }

    /**
     * Gets timesheet_id
     *
     * @return int
     */
    public function getTimesheetId()
    {
        return $this->container['timesheet_id'];
    }

    /**
     * Sets timesheet_id
     *
     * @param int $timesheet_id
     *
     * @return $this
     */
    public function setTimesheetId($timesheet_id)
    {
        $this->container['timesheet_id'] = $timesheet_id;

        return $this;
    }

    /**
     * Gets timesheet_status
     *
     * @return string
     */
    public function getTimesheetStatus()
    {
        return $this->container['timesheet_status'];
    }

    /**
     * Sets timesheet_status
     *
     * @param string $timesheet_status
     *
     * @return $this
     */
    public function setTimesheetStatus($timesheet_status)
    {
        $this->container['timesheet_status'] = $timesheet_status;

        return $this;
    }

    /**
     * Gets timesheet_location
     *
     * @return string
     */
    public function getTimesheetLocation()
    {
        return $this->container['timesheet_location'];
    }

    /**
     * Sets timesheet_location
     *
     * @param string $timesheet_location
     *
     * @return $this
     */
    public function setTimesheetLocation($timesheet_location)
    {
        $this->container['timesheet_location'] = $timesheet_location;

        return $this;
    }

    /**
     * Gets timesheet_work_type
     *
     * @return string
     */
    public function getTimesheetWorkType()
    {
        return $this->container['timesheet_work_type'];
    }

    /**
     * Sets timesheet_work_type
     *
     * @param string $timesheet_work_type
     *
     * @return $this
     */
    public function setTimesheetWorkType($timesheet_work_type)
    {
        $this->container['timesheet_work_type'] = $timesheet_work_type;

        return $this;
    }

    /**
     * Gets timesheet_start
     *
     * @return \DateTime
     */
    public function getTimesheetStart()
    {
        return $this->container['timesheet_start'];
    }

    /**
     * Sets timesheet_start
     *
     * @param \DateTime $timesheet_start
     *
     * @return $this
     */
    public function setTimesheetStart($timesheet_start)
    {
        $this->container['timesheet_start'] = $timesheet_start;

        return $this;
    }

    /**
     * Gets timesheet_start_time
     *
     * @return string
     */
    public function getTimesheetStartTime()
    {
        return $this->container['timesheet_start_time'];
    }

    /**
     * Sets timesheet_start_time
     *
     * @param string $timesheet_start_time
     *
     * @return $this
     */
    public function setTimesheetStartTime($timesheet_start_time)
    {
        $this->container['timesheet_start_time'] = $timesheet_start_time;

        return $this;
    }

    /**
     * Gets timesheet_end
     *
     * @return \DateTime
     */
    public function getTimesheetEnd()
    {
        return $this->container['timesheet_end'];
    }

    /**
     * Sets timesheet_end
     *
     * @param \DateTime $timesheet_end
     *
     * @return $this
     */
    public function setTimesheetEnd($timesheet_end)
    {
        $this->container['timesheet_end'] = $timesheet_end;

        return $this;
    }

    /**
     * Gets timesheet_end_time
     *
     * @return string
     */
    public function getTimesheetEndTime()
    {
        return $this->container['timesheet_end_time'];
    }

    /**
     * Sets timesheet_end_time
     *
     * @param string $timesheet_end_time
     *
     * @return $this
     */
    public function setTimesheetEndTime($timesheet_end_time)
    {
        $this->container['timesheet_end_time'] = $timesheet_end_time;

        return $this;
    }

    /**
     * Gets timesheet_duration
     *
     * @return string
     */
    public function getTimesheetDuration()
    {
        return $this->container['timesheet_duration'];
    }

    /**
     * Sets timesheet_duration
     *
     * @param string $timesheet_duration
     *
     * @return $this
     */
    public function setTimesheetDuration($timesheet_duration)
    {
        $this->container['timesheet_duration'] = $timesheet_duration;

        return $this;
    }

    /**
     * Gets timesheet_breaks
     *
     * @return string
     */
    public function getTimesheetBreaks()
    {
        return $this->container['timesheet_breaks'];
    }

    /**
     * Sets timesheet_breaks
     *
     * @param string $timesheet_breaks
     *
     * @return $this
     */
    public function setTimesheetBreaks($timesheet_breaks)
    {
        $this->container['timesheet_breaks'] = $timesheet_breaks;

        return $this;
    }

    /**
     * Gets timesheet_units
     *
     * @return float
     */
    public function getTimesheetUnits()
    {
        return $this->container['timesheet_units'];
    }

    /**
     * Sets timesheet_units
     *
     * @param float $timesheet_units
     *
     * @return $this
     */
    public function setTimesheetUnits($timesheet_units)
    {
        $this->container['timesheet_units'] = $timesheet_units;

        return $this;
    }

    /**
     * Gets timesheet_unit_type
     *
     * @return string
     */
    public function getTimesheetUnitType()
    {
        return $this->container['timesheet_unit_type'];
    }

    /**
     * Sets timesheet_unit_type
     *
     * @param string $timesheet_unit_type
     *
     * @return $this
     */
    public function setTimesheetUnitType($timesheet_unit_type)
    {
        $this->container['timesheet_unit_type'] = $timesheet_unit_type;

        return $this;
    }

    /**
     * Gets timesheet_cost
     *
     * @return float
     */
    public function getTimesheetCost()
    {
        return $this->container['timesheet_cost'];
    }

    /**
     * Sets timesheet_cost
     *
     * @param float $timesheet_cost
     *
     * @return $this
     */
    public function setTimesheetCost($timesheet_cost)
    {
        $this->container['timesheet_cost'] = $timesheet_cost;

        return $this;
    }

    /**
     * Gets time_variance
     *
     * @return string
     */
    public function getTimeVariance()
    {
        return $this->container['time_variance'];
    }

    /**
     * Sets time_variance
     *
     * @param string $time_variance
     *
     * @return $this
     */
    public function setTimeVariance($time_variance)
    {
        $this->container['time_variance'] = $time_variance;

        return $this;
    }

    /**
     * Gets cost_variance
     *
     * @return float
     */
    public function getCostVariance()
    {
        return $this->container['cost_variance'];
    }

    /**
     * Sets cost_variance
     *
     * @param float $cost_variance
     *
     * @return $this
     */
    public function setCostVariance($cost_variance)
    {
        $this->container['cost_variance'] = $cost_variance;

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
