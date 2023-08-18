<?php
/**
 * LeaveAccrualRuleViewModel
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
 * LeaveAccrualRuleViewModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LeaveAccrualRuleViewModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeaveAccrualRuleViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'cap_type' => 'string',
        'unit_cap' => 'float',
        'carry_over_behaviour' => 'string',
        'carry_over_amount' => 'float',
        'accrue_in_advance' => 'bool',
        'accrual_type' => 'string',
        'leave_year_offset_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'cap_type' => null,
        'unit_cap' => 'double',
        'carry_over_behaviour' => null,
        'carry_over_amount' => 'double',
        'accrue_in_advance' => null,
        'accrual_type' => null,
        'leave_year_offset_amount' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'cap_type' => false,
		'unit_cap' => false,
		'carry_over_behaviour' => false,
		'carry_over_amount' => false,
		'accrue_in_advance' => false,
		'accrual_type' => false,
		'leave_year_offset_amount' => false
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
        'id' => 'id',
        'cap_type' => 'capType',
        'unit_cap' => 'unitCap',
        'carry_over_behaviour' => 'carryOverBehaviour',
        'carry_over_amount' => 'carryOverAmount',
        'accrue_in_advance' => 'accrueInAdvance',
        'accrual_type' => 'accrualType',
        'leave_year_offset_amount' => 'leaveYearOffsetAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'cap_type' => 'setCapType',
        'unit_cap' => 'setUnitCap',
        'carry_over_behaviour' => 'setCarryOverBehaviour',
        'carry_over_amount' => 'setCarryOverAmount',
        'accrue_in_advance' => 'setAccrueInAdvance',
        'accrual_type' => 'setAccrualType',
        'leave_year_offset_amount' => 'setLeaveYearOffsetAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'cap_type' => 'getCapType',
        'unit_cap' => 'getUnitCap',
        'carry_over_behaviour' => 'getCarryOverBehaviour',
        'carry_over_amount' => 'getCarryOverAmount',
        'accrue_in_advance' => 'getAccrueInAdvance',
        'accrual_type' => 'getAccrualType',
        'leave_year_offset_amount' => 'getLeaveYearOffsetAmount'
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

    public const CAP_TYPE_NOT_LIMITED = 'NotLimited';
    public const CAP_TYPE_LIMITED = 'Limited';
    public const CARRY_OVER_BEHAVIOUR_CARRY_ENTIRE_AMOUNT = 'CarryEntireAmount';
    public const CARRY_OVER_BEHAVIOUR_CARRY_HOURS = 'CarryHours';
    public const ACCRUAL_TYPE_ONGOING = 'Ongoing';
    public const ACCRUAL_TYPE_YEARLY = 'Yearly';
    public const ACCRUAL_TYPE_BASED_ON_LENGTH_OF_SERVICE = 'BasedOnLengthOfService';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCapTypeAllowableValues()
    {
        return [
            self::CAP_TYPE_NOT_LIMITED,
            self::CAP_TYPE_LIMITED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarryOverBehaviourAllowableValues()
    {
        return [
            self::CARRY_OVER_BEHAVIOUR_CARRY_ENTIRE_AMOUNT,
            self::CARRY_OVER_BEHAVIOUR_CARRY_HOURS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccrualTypeAllowableValues()
    {
        return [
            self::ACCRUAL_TYPE_ONGOING,
            self::ACCRUAL_TYPE_YEARLY,
            self::ACCRUAL_TYPE_BASED_ON_LENGTH_OF_SERVICE,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('cap_type', $data ?? [], null);
        $this->setIfExists('unit_cap', $data ?? [], null);
        $this->setIfExists('carry_over_behaviour', $data ?? [], null);
        $this->setIfExists('carry_over_amount', $data ?? [], null);
        $this->setIfExists('accrue_in_advance', $data ?? [], null);
        $this->setIfExists('accrual_type', $data ?? [], null);
        $this->setIfExists('leave_year_offset_amount', $data ?? [], null);
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

        $allowedValues = $this->getCapTypeAllowableValues();
        if (!is_null($this->container['cap_type']) && !in_array($this->container['cap_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'cap_type', must be one of '%s'",
                $this->container['cap_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCarryOverBehaviourAllowableValues();
        if (!is_null($this->container['carry_over_behaviour']) && !in_array($this->container['carry_over_behaviour'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'carry_over_behaviour', must be one of '%s'",
                $this->container['carry_over_behaviour'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAccrualTypeAllowableValues();
        if (!is_null($this->container['accrual_type']) && !in_array($this->container['accrual_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'accrual_type', must be one of '%s'",
                $this->container['accrual_type'],
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
     * Gets cap_type
     *
     * @return string|null
     */
    public function getCapType()
    {
        return $this->container['cap_type'];
    }

    /**
     * Sets cap_type
     *
     * @param string|null $cap_type 
     *
     * @return self
     */
    public function setCapType($cap_type)
    {
        if (is_null($cap_type)) {
            throw new \InvalidArgumentException('non-nullable cap_type cannot be null');
        }
        $allowedValues = $this->getCapTypeAllowableValues();
        if (!in_array($cap_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'cap_type', must be one of '%s'",
                    $cap_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['cap_type'] = $cap_type;

        return $this;
    }

    /**
     * Gets unit_cap
     *
     * @return float|null
     */
    public function getUnitCap()
    {
        return $this->container['unit_cap'];
    }

    /**
     * Sets unit_cap
     *
     * @param float|null $unit_cap 
     *
     * @return self
     */
    public function setUnitCap($unit_cap)
    {
        if (is_null($unit_cap)) {
            throw new \InvalidArgumentException('non-nullable unit_cap cannot be null');
        }
        $this->container['unit_cap'] = $unit_cap;

        return $this;
    }

    /**
     * Gets carry_over_behaviour
     *
     * @return string|null
     */
    public function getCarryOverBehaviour()
    {
        return $this->container['carry_over_behaviour'];
    }

    /**
     * Sets carry_over_behaviour
     *
     * @param string|null $carry_over_behaviour 
     *
     * @return self
     */
    public function setCarryOverBehaviour($carry_over_behaviour)
    {
        if (is_null($carry_over_behaviour)) {
            throw new \InvalidArgumentException('non-nullable carry_over_behaviour cannot be null');
        }
        $allowedValues = $this->getCarryOverBehaviourAllowableValues();
        if (!in_array($carry_over_behaviour, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'carry_over_behaviour', must be one of '%s'",
                    $carry_over_behaviour,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['carry_over_behaviour'] = $carry_over_behaviour;

        return $this;
    }

    /**
     * Gets carry_over_amount
     *
     * @return float|null
     */
    public function getCarryOverAmount()
    {
        return $this->container['carry_over_amount'];
    }

    /**
     * Sets carry_over_amount
     *
     * @param float|null $carry_over_amount 
     *
     * @return self
     */
    public function setCarryOverAmount($carry_over_amount)
    {
        if (is_null($carry_over_amount)) {
            throw new \InvalidArgumentException('non-nullable carry_over_amount cannot be null');
        }
        $this->container['carry_over_amount'] = $carry_over_amount;

        return $this;
    }

    /**
     * Gets accrue_in_advance
     *
     * @return bool|null
     */
    public function getAccrueInAdvance()
    {
        return $this->container['accrue_in_advance'];
    }

    /**
     * Sets accrue_in_advance
     *
     * @param bool|null $accrue_in_advance 
     *
     * @return self
     */
    public function setAccrueInAdvance($accrue_in_advance)
    {
        if (is_null($accrue_in_advance)) {
            throw new \InvalidArgumentException('non-nullable accrue_in_advance cannot be null');
        }
        $this->container['accrue_in_advance'] = $accrue_in_advance;

        return $this;
    }

    /**
     * Gets accrual_type
     *
     * @return string|null
     */
    public function getAccrualType()
    {
        return $this->container['accrual_type'];
    }

    /**
     * Sets accrual_type
     *
     * @param string|null $accrual_type 
     *
     * @return self
     */
    public function setAccrualType($accrual_type)
    {
        if (is_null($accrual_type)) {
            throw new \InvalidArgumentException('non-nullable accrual_type cannot be null');
        }
        $allowedValues = $this->getAccrualTypeAllowableValues();
        if (!in_array($accrual_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'accrual_type', must be one of '%s'",
                    $accrual_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accrual_type'] = $accrual_type;

        return $this;
    }

    /**
     * Gets leave_year_offset_amount
     *
     * @return int|null
     */
    public function getLeaveYearOffsetAmount()
    {
        return $this->container['leave_year_offset_amount'];
    }

    /**
     * Sets leave_year_offset_amount
     *
     * @param int|null $leave_year_offset_amount 
     *
     * @return self
     */
    public function setLeaveYearOffsetAmount($leave_year_offset_amount)
    {
        if (is_null($leave_year_offset_amount)) {
            throw new \InvalidArgumentException('non-nullable leave_year_offset_amount cannot be null');
        }
        $this->container['leave_year_offset_amount'] = $leave_year_offset_amount;

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


