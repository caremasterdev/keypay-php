<?php
/**
 * AuSubmitTimesheetsRequest
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
 * AuSubmitTimesheetsRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuSubmitTimesheetsRequest implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuSubmitTimesheetsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'from_date' => '\DateTime',
        'to_date' => '\DateTime',
        'replace_existing' => 'bool',
        'approved' => 'bool',
        'employee_id_type' => 'string',
        'location_id_type' => 'string',
        'work_type_id_type' => 'string',
        'timesheets' => 'map[string,\Swagger\Client\Model\AuTimesheetLineModel[]]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'from_date' => 'date-time',
        'to_date' => 'date-time',
        'replace_existing' => null,
        'approved' => null,
        'employee_id_type' => null,
        'location_id_type' => null,
        'work_type_id_type' => null,
        'timesheets' => null,
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
        'from_date' => 'fromDate',
        'to_date' => 'toDate',
        'replace_existing' => 'replaceExisting',
        'approved' => 'approved',
        'employee_id_type' => 'employeeIdType',
        'location_id_type' => 'locationIdType',
        'work_type_id_type' => 'workTypeIdType',
        'timesheets' => 'timesheets',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'replace_existing' => 'setReplaceExisting',
        'approved' => 'setApproved',
        'employee_id_type' => 'setEmployeeIdType',
        'location_id_type' => 'setLocationIdType',
        'work_type_id_type' => 'setWorkTypeIdType',
        'timesheets' => 'setTimesheets',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'replace_existing' => 'getReplaceExisting',
        'approved' => 'getApproved',
        'employee_id_type' => 'getEmployeeIdType',
        'location_id_type' => 'getLocationIdType',
        'work_type_id_type' => 'getWorkTypeIdType',
        'timesheets' => 'getTimesheets',
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

    public const EMPLOYEE_ID_TYPE_STANDARD = 'Standard';
    public const EMPLOYEE_ID_TYPE_EXTERNAL = 'External';
    public const LOCATION_ID_TYPE_STANDARD = 'Standard';
    public const LOCATION_ID_TYPE_EXTERNAL = 'External';
    public const WORK_TYPE_ID_TYPE_STANDARD = 'Standard';
    public const WORK_TYPE_ID_TYPE_EXTERNAL = 'External';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEmployeeIdTypeAllowableValues()
    {
        return [
            self::EMPLOYEE_ID_TYPE_STANDARD,
            self::EMPLOYEE_ID_TYPE_EXTERNAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLocationIdTypeAllowableValues()
    {
        return [
            self::LOCATION_ID_TYPE_STANDARD,
            self::LOCATION_ID_TYPE_EXTERNAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWorkTypeIdTypeAllowableValues()
    {
        return [
            self::WORK_TYPE_ID_TYPE_STANDARD,
            self::WORK_TYPE_ID_TYPE_EXTERNAL,
        ];
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
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['replace_existing'] = isset($data['replace_existing']) ? $data['replace_existing'] : null;
        $this->container['approved'] = isset($data['approved']) ? $data['approved'] : null;
        $this->container['employee_id_type'] = isset($data['employee_id_type']) ? $data['employee_id_type'] : null;
        $this->container['location_id_type'] = isset($data['location_id_type']) ? $data['location_id_type'] : null;
        $this->container['work_type_id_type'] = isset($data['work_type_id_type']) ? $data['work_type_id_type'] : null;
        $this->container['timesheets'] = isset($data['timesheets']) ? $data['timesheets'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEmployeeIdTypeAllowableValues();
        if (! is_null($this->container['employee_id_type']) && ! in_array($this->container['employee_id_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'employee_id_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLocationIdTypeAllowableValues();
        if (! is_null($this->container['location_id_type']) && ! in_array($this->container['location_id_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'location_id_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWorkTypeIdTypeAllowableValues();
        if (! is_null($this->container['work_type_id_type']) && ! in_array($this->container['work_type_id_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'work_type_id_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets replace_existing
     *
     * @return bool
     */
    public function getReplaceExisting()
    {
        return $this->container['replace_existing'];
    }

    /**
     * Sets replace_existing
     *
     * @param bool $replace_existing
     *
     * @return $this
     */
    public function setReplaceExisting($replace_existing)
    {
        $this->container['replace_existing'] = $replace_existing;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return bool
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param bool $approved
     *
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets employee_id_type
     *
     * @return string
     */
    public function getEmployeeIdType()
    {
        return $this->container['employee_id_type'];
    }

    /**
     * Sets employee_id_type
     *
     * @param string $employee_id_type
     *
     * @return $this
     */
    public function setEmployeeIdType($employee_id_type)
    {
        $allowedValues = $this->getEmployeeIdTypeAllowableValues();
        if (! is_null($employee_id_type) && ! in_array($employee_id_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'employee_id_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['employee_id_type'] = $employee_id_type;

        return $this;
    }

    /**
     * Gets location_id_type
     *
     * @return string
     */
    public function getLocationIdType()
    {
        return $this->container['location_id_type'];
    }

    /**
     * Sets location_id_type
     *
     * @param string $location_id_type
     *
     * @return $this
     */
    public function setLocationIdType($location_id_type)
    {
        $allowedValues = $this->getLocationIdTypeAllowableValues();
        if (! is_null($location_id_type) && ! in_array($location_id_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'location_id_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['location_id_type'] = $location_id_type;

        return $this;
    }

    /**
     * Gets work_type_id_type
     *
     * @return string
     */
    public function getWorkTypeIdType()
    {
        return $this->container['work_type_id_type'];
    }

    /**
     * Sets work_type_id_type
     *
     * @param string $work_type_id_type
     *
     * @return $this
     */
    public function setWorkTypeIdType($work_type_id_type)
    {
        $allowedValues = $this->getWorkTypeIdTypeAllowableValues();
        if (! is_null($work_type_id_type) && ! in_array($work_type_id_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'work_type_id_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['work_type_id_type'] = $work_type_id_type;

        return $this;
    }

    /**
     * Gets timesheets
     *
     * @return map[string,\Swagger\Client\Model\AuTimesheetLineModel[]]
     */
    public function getTimesheets()
    {
        return $this->container['timesheets'];
    }

    /**
     * Sets timesheets
     *
     * @param map[string,\Swagger\Client\Model\AuTimesheetLineModel[]] $timesheets
     *
     * @return $this
     */
    public function setTimesheets($timesheets)
    {
        $this->container['timesheets'] = $timesheets;

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
