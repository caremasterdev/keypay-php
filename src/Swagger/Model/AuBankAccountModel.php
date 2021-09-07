<?php
/**
 * AuBankAccountModel
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
 * AuBankAccountModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuBankAccountModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuBankAccountModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_type' => 'string',
        'id' => 'int',
        'employee_id' => 'int',
        'bsb' => 'string',
        'account_name' => 'string',
        'account_number' => 'string',
        'allocated_percentage' => 'double',
        'fixed_amount' => 'double',
        'allocate_balance' => 'bool',
        'is_employee_editable' => 'bool',
        'can_be_deleted' => 'bool',
        'external_reference_id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_type' => null,
        'id' => 'int32',
        'employee_id' => 'int32',
        'bsb' => null,
        'account_name' => null,
        'account_number' => null,
        'allocated_percentage' => 'double',
        'fixed_amount' => 'double',
        'allocate_balance' => null,
        'is_employee_editable' => null,
        'can_be_deleted' => null,
        'external_reference_id' => null,
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
        'account_type' => 'accountType',
        'id' => 'id',
        'employee_id' => 'employeeId',
        'bsb' => 'bsb',
        'account_name' => 'accountName',
        'account_number' => 'accountNumber',
        'allocated_percentage' => 'allocatedPercentage',
        'fixed_amount' => 'fixedAmount',
        'allocate_balance' => 'allocateBalance',
        'is_employee_editable' => 'isEmployeeEditable',
        'can_be_deleted' => 'canBeDeleted',
        'external_reference_id' => 'externalReferenceId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_type' => 'setAccountType',
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'bsb' => 'setBsb',
        'account_name' => 'setAccountName',
        'account_number' => 'setAccountNumber',
        'allocated_percentage' => 'setAllocatedPercentage',
        'fixed_amount' => 'setFixedAmount',
        'allocate_balance' => 'setAllocateBalance',
        'is_employee_editable' => 'setIsEmployeeEditable',
        'can_be_deleted' => 'setCanBeDeleted',
        'external_reference_id' => 'setExternalReferenceId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_type' => 'getAccountType',
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'bsb' => 'getBsb',
        'account_name' => 'getAccountName',
        'account_number' => 'getAccountNumber',
        'allocated_percentage' => 'getAllocatedPercentage',
        'fixed_amount' => 'getFixedAmount',
        'allocate_balance' => 'getAllocateBalance',
        'is_employee_editable' => 'getIsEmployeeEditable',
        'can_be_deleted' => 'getCanBeDeleted',
        'external_reference_id' => 'getExternalReferenceId',
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

    public const ACCOUNT_TYPE_ELECTRONIC = 'Electronic';
    public const ACCOUNT_TYPE_MANUAL_DEPOSIT = 'ManualDeposit';
    public const ACCOUNT_TYPE_CASH_OR_CHEQUE = 'CashOrCheque';
    public const ACCOUNT_TYPE_BPAY = 'Bpay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_ELECTRONIC,
            self::ACCOUNT_TYPE_MANUAL_DEPOSIT,
            self::ACCOUNT_TYPE_CASH_OR_CHEQUE,
            self::ACCOUNT_TYPE_BPAY,
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
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['bsb'] = isset($data['bsb']) ? $data['bsb'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['allocated_percentage'] = isset($data['allocated_percentage']) ? $data['allocated_percentage'] : null;
        $this->container['fixed_amount'] = isset($data['fixed_amount']) ? $data['fixed_amount'] : null;
        $this->container['allocate_balance'] = isset($data['allocate_balance']) ? $data['allocate_balance'] : null;
        $this->container['is_employee_editable'] = isset($data['is_employee_editable']) ? $data['is_employee_editable'] : null;
        $this->container['can_be_deleted'] = isset($data['can_be_deleted']) ? $data['can_be_deleted'] : null;
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (! is_null($this->container['account_type']) && ! in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account_type', must be one of '%s'",
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
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (! is_null($account_type) && ! in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_type'] = $account_type;

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
     * Gets bsb
     *
     * @return string
     */
    public function getBsb()
    {
        return $this->container['bsb'];
    }

    /**
     * Sets bsb
     *
     * @param string $bsb
     *
     * @return $this
     */
    public function setBsb($bsb)
    {
        $this->container['bsb'] = $bsb;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets allocated_percentage
     *
     * @return float
     */
    public function getAllocatedPercentage()
    {
        return $this->container['allocated_percentage'];
    }

    /**
     * Sets allocated_percentage
     *
     * @param float $allocated_percentage
     *
     * @return $this
     */
    public function setAllocatedPercentage($allocated_percentage)
    {
        $this->container['allocated_percentage'] = $allocated_percentage;

        return $this;
    }

    /**
     * Gets fixed_amount
     *
     * @return float
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param float $fixed_amount
     *
     * @return $this
     */
    public function setFixedAmount($fixed_amount)
    {
        $this->container['fixed_amount'] = $fixed_amount;

        return $this;
    }

    /**
     * Gets allocate_balance
     *
     * @return bool
     */
    public function getAllocateBalance()
    {
        return $this->container['allocate_balance'];
    }

    /**
     * Sets allocate_balance
     *
     * @param bool $allocate_balance
     *
     * @return $this
     */
    public function setAllocateBalance($allocate_balance)
    {
        $this->container['allocate_balance'] = $allocate_balance;

        return $this;
    }

    /**
     * Gets is_employee_editable
     *
     * @return bool
     */
    public function getIsEmployeeEditable()
    {
        return $this->container['is_employee_editable'];
    }

    /**
     * Sets is_employee_editable
     *
     * @param bool $is_employee_editable
     *
     * @return $this
     */
    public function setIsEmployeeEditable($is_employee_editable)
    {
        $this->container['is_employee_editable'] = $is_employee_editable;

        return $this;
    }

    /**
     * Gets can_be_deleted
     *
     * @return bool
     */
    public function getCanBeDeleted()
    {
        return $this->container['can_be_deleted'];
    }

    /**
     * Sets can_be_deleted
     *
     * @param bool $can_be_deleted
     *
     * @return $this
     */
    public function setCanBeDeleted($can_be_deleted)
    {
        $this->container['can_be_deleted'] = $can_be_deleted;

        return $this;
    }

    /**
     * Gets external_reference_id
     *
     * @return string
     */
    public function getExternalReferenceId()
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id
     *
     * @param string $external_reference_id
     *
     * @return $this
     */
    public function setExternalReferenceId($external_reference_id)
    {
        $this->container['external_reference_id'] = $external_reference_id;

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
