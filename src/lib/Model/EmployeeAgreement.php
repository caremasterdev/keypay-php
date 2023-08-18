<?php
/**
 * EmployeeAgreement
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Australia
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: AU
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EmployeeAgreement Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmployeeAgreement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'search' => 'object',
        'start' => 'int',
        'max' => 'int',
        'id' => 'int',
        'employee_id' => 'int',
        'pay_point' => 'int',
        'emp_type' => 'int',
        'company_name' => 'string',
        'active' => 'bool',
        'start_date' => 'string',
        'contract' => 'int',
        'salary_pay_rule' => 'int',
        'contract_file' => 'int',
        'payroll_id' => 'string',
        'pay_period' => 'int',
        'history_id' => 'int',
        'creator' => 'int',
        'created' => 'string',
        'modified' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'search' => null,
        'start' => 'int32',
        'max' => 'int32',
        'id' => 'int32',
        'employee_id' => 'int32',
        'pay_point' => 'int32',
        'emp_type' => 'int32',
        'company_name' => null,
        'active' => null,
        'start_date' => null,
        'contract' => 'int32',
        'salary_pay_rule' => 'int32',
        'contract_file' => 'int32',
        'payroll_id' => null,
        'pay_period' => 'int32',
        'history_id' => 'int32',
        'creator' => 'int32',
        'created' => null,
        'modified' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'search' => false,
		'start' => false,
		'max' => false,
		'id' => false,
		'employee_id' => false,
		'pay_point' => false,
		'emp_type' => false,
		'company_name' => false,
		'active' => false,
		'start_date' => false,
		'contract' => false,
		'salary_pay_rule' => false,
		'contract_file' => false,
		'payroll_id' => false,
		'pay_period' => false,
		'history_id' => false,
		'creator' => false,
		'created' => false,
		'modified' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'search' => 'search',
        'start' => 'start',
        'max' => 'max',
        'id' => 'id',
        'employee_id' => 'employeeId',
        'pay_point' => 'payPoint',
        'emp_type' => 'empType',
        'company_name' => 'companyName',
        'active' => 'active',
        'start_date' => 'startDate',
        'contract' => 'contract',
        'salary_pay_rule' => 'salaryPayRule',
        'contract_file' => 'contractFile',
        'payroll_id' => 'payrollId',
        'pay_period' => 'payPeriod',
        'history_id' => 'historyId',
        'creator' => 'creator',
        'created' => 'created',
        'modified' => 'modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search' => 'setSearch',
        'start' => 'setStart',
        'max' => 'setMax',
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'pay_point' => 'setPayPoint',
        'emp_type' => 'setEmpType',
        'company_name' => 'setCompanyName',
        'active' => 'setActive',
        'start_date' => 'setStartDate',
        'contract' => 'setContract',
        'salary_pay_rule' => 'setSalaryPayRule',
        'contract_file' => 'setContractFile',
        'payroll_id' => 'setPayrollId',
        'pay_period' => 'setPayPeriod',
        'history_id' => 'setHistoryId',
        'creator' => 'setCreator',
        'created' => 'setCreated',
        'modified' => 'setModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search' => 'getSearch',
        'start' => 'getStart',
        'max' => 'getMax',
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'pay_point' => 'getPayPoint',
        'emp_type' => 'getEmpType',
        'company_name' => 'getCompanyName',
        'active' => 'getActive',
        'start_date' => 'getStartDate',
        'contract' => 'getContract',
        'salary_pay_rule' => 'getSalaryPayRule',
        'contract_file' => 'getContractFile',
        'payroll_id' => 'getPayrollId',
        'pay_period' => 'getPayPeriod',
        'history_id' => 'getHistoryId',
        'creator' => 'getCreator',
        'created' => 'getCreated',
        'modified' => 'getModified'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('search', $data ?? [], null);
        $this->setIfExists('start', $data ?? [], null);
        $this->setIfExists('max', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('pay_point', $data ?? [], null);
        $this->setIfExists('emp_type', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('contract', $data ?? [], null);
        $this->setIfExists('salary_pay_rule', $data ?? [], null);
        $this->setIfExists('contract_file', $data ?? [], null);
        $this->setIfExists('payroll_id', $data ?? [], null);
        $this->setIfExists('pay_period', $data ?? [], null);
        $this->setIfExists('history_id', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('modified', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets search
     *
     * @return object|null
     */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
     * Sets search
     *
     * @param object|null $search 
     *
     * @return self
     */
    public function setSearch($search)
    {
        if (is_null($search)) {
            throw new \InvalidArgumentException('non-nullable search cannot be null');
        }
        $this->container['search'] = $search;

        return $this;
    }

    /**
     * Gets start
     *
     * @return int|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param int|null $start 
     *
     * @return self
     */
    public function setStart($start)
    {
        if (is_null($start)) {
            throw new \InvalidArgumentException('non-nullable start cannot be null');
        }
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets max
     *
     * @return int|null
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     *
     * @param int|null $max 
     *
     * @return self
     */
    public function setMax($max)
    {
        if (is_null($max)) {
            throw new \InvalidArgumentException('non-nullable max cannot be null');
        }
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id 
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return int|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int|null $employee_id 
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets pay_point
     *
     * @return int|null
     */
    public function getPayPoint()
    {
        return $this->container['pay_point'];
    }

    /**
     * Sets pay_point
     *
     * @param int|null $pay_point 
     *
     * @return self
     */
    public function setPayPoint($pay_point)
    {
        if (is_null($pay_point)) {
            throw new \InvalidArgumentException('non-nullable pay_point cannot be null');
        }
        $this->container['pay_point'] = $pay_point;

        return $this;
    }

    /**
     * Gets emp_type
     *
     * @return int|null
     */
    public function getEmpType()
    {
        return $this->container['emp_type'];
    }

    /**
     * Sets emp_type
     *
     * @param int|null $emp_type 
     *
     * @return self
     */
    public function setEmpType($emp_type)
    {
        if (is_null($emp_type)) {
            throw new \InvalidArgumentException('non-nullable emp_type cannot be null');
        }
        $this->container['emp_type'] = $emp_type;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name 
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active 
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date 
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return int|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param int|null $contract 
     *
     * @return self
     */
    public function setContract($contract)
    {
        if (is_null($contract)) {
            throw new \InvalidArgumentException('non-nullable contract cannot be null');
        }
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets salary_pay_rule
     *
     * @return int|null
     */
    public function getSalaryPayRule()
    {
        return $this->container['salary_pay_rule'];
    }

    /**
     * Sets salary_pay_rule
     *
     * @param int|null $salary_pay_rule 
     *
     * @return self
     */
    public function setSalaryPayRule($salary_pay_rule)
    {
        if (is_null($salary_pay_rule)) {
            throw new \InvalidArgumentException('non-nullable salary_pay_rule cannot be null');
        }
        $this->container['salary_pay_rule'] = $salary_pay_rule;

        return $this;
    }

    /**
     * Gets contract_file
     *
     * @return int|null
     */
    public function getContractFile()
    {
        return $this->container['contract_file'];
    }

    /**
     * Sets contract_file
     *
     * @param int|null $contract_file 
     *
     * @return self
     */
    public function setContractFile($contract_file)
    {
        if (is_null($contract_file)) {
            throw new \InvalidArgumentException('non-nullable contract_file cannot be null');
        }
        $this->container['contract_file'] = $contract_file;

        return $this;
    }

    /**
     * Gets payroll_id
     *
     * @return string|null
     */
    public function getPayrollId()
    {
        return $this->container['payroll_id'];
    }

    /**
     * Sets payroll_id
     *
     * @param string|null $payroll_id 
     *
     * @return self
     */
    public function setPayrollId($payroll_id)
    {
        if (is_null($payroll_id)) {
            throw new \InvalidArgumentException('non-nullable payroll_id cannot be null');
        }
        $this->container['payroll_id'] = $payroll_id;

        return $this;
    }

    /**
     * Gets pay_period
     *
     * @return int|null
     */
    public function getPayPeriod()
    {
        return $this->container['pay_period'];
    }

    /**
     * Sets pay_period
     *
     * @param int|null $pay_period 
     *
     * @return self
     */
    public function setPayPeriod($pay_period)
    {
        if (is_null($pay_period)) {
            throw new \InvalidArgumentException('non-nullable pay_period cannot be null');
        }
        $this->container['pay_period'] = $pay_period;

        return $this;
    }

    /**
     * Gets history_id
     *
     * @return int|null
     */
    public function getHistoryId()
    {
        return $this->container['history_id'];
    }

    /**
     * Sets history_id
     *
     * @param int|null $history_id 
     *
     * @return self
     */
    public function setHistoryId($history_id)
    {
        if (is_null($history_id)) {
            throw new \InvalidArgumentException('non-nullable history_id cannot be null');
        }
        $this->container['history_id'] = $history_id;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return int|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param int|null $creator 
     *
     * @return self
     */
    public function setCreator($creator)
    {
        if (is_null($creator)) {
            throw new \InvalidArgumentException('non-nullable creator cannot be null');
        }
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created 
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return string|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string|null $modified 
     *
     * @return self
     */
    public function setModified($modified)
    {
        if (is_null($modified)) {
            throw new \InvalidArgumentException('non-nullable modified cannot be null');
        }
        $this->container['modified'] = $modified;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


