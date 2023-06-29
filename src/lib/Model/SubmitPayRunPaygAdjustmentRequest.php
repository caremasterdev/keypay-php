<?php
/**
 * SubmitPayRunPaygAdjustmentRequest
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
 * SubmitPayRunPaygAdjustmentRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubmitPayRunPaygAdjustmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubmitPayRunPaygAdjustmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payg_adjustments' => 'array<string,\OpenAPI\Client\Model\PaygAdjustmentModel[]>',
        'pay_run_id' => 'int',
        'employee_id_type' => 'string',
        'replace_existing' => 'bool',
        'suppress_calculations' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payg_adjustments' => null,
        'pay_run_id' => 'int32',
        'employee_id_type' => null,
        'replace_existing' => null,
        'suppress_calculations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payg_adjustments' => false,
		'pay_run_id' => false,
		'employee_id_type' => false,
		'replace_existing' => false,
		'suppress_calculations' => false
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
        'payg_adjustments' => 'paygAdjustments',
        'pay_run_id' => 'payRunId',
        'employee_id_type' => 'employeeIdType',
        'replace_existing' => 'replaceExisting',
        'suppress_calculations' => 'suppressCalculations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payg_adjustments' => 'setPaygAdjustments',
        'pay_run_id' => 'setPayRunId',
        'employee_id_type' => 'setEmployeeIdType',
        'replace_existing' => 'setReplaceExisting',
        'suppress_calculations' => 'setSuppressCalculations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payg_adjustments' => 'getPaygAdjustments',
        'pay_run_id' => 'getPayRunId',
        'employee_id_type' => 'getEmployeeIdType',
        'replace_existing' => 'getReplaceExisting',
        'suppress_calculations' => 'getSuppressCalculations'
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

    public const EMPLOYEE_ID_TYPE_STANDARD = 'Standard';
    public const EMPLOYEE_ID_TYPE_EXTERNAL = 'External';

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
        $this->setIfExists('payg_adjustments', $data ?? [], null);
        $this->setIfExists('pay_run_id', $data ?? [], null);
        $this->setIfExists('employee_id_type', $data ?? [], null);
        $this->setIfExists('replace_existing', $data ?? [], null);
        $this->setIfExists('suppress_calculations', $data ?? [], null);
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

        $allowedValues = $this->getEmployeeIdTypeAllowableValues();
        if (!is_null($this->container['employee_id_type']) && !in_array($this->container['employee_id_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'employee_id_type', must be one of '%s'",
                $this->container['employee_id_type'],
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
     * Gets payg_adjustments
     *
     * @return array<string,\OpenAPI\Client\Model\PaygAdjustmentModel[]>|null
     */
    public function getPaygAdjustments()
    {
        return $this->container['payg_adjustments'];
    }

    /**
     * Sets payg_adjustments
     *
     * @param array<string,\OpenAPI\Client\Model\PaygAdjustmentModel[]>|null $payg_adjustments 
     *
     * @return self
     */
    public function setPaygAdjustments($payg_adjustments)
    {
        if (is_null($payg_adjustments)) {
            throw new \InvalidArgumentException('non-nullable payg_adjustments cannot be null');
        }
        $this->container['payg_adjustments'] = $payg_adjustments;

        return $this;
    }

    /**
     * Gets pay_run_id
     *
     * @return int|null
     */
    public function getPayRunId()
    {
        return $this->container['pay_run_id'];
    }

    /**
     * Sets pay_run_id
     *
     * @param int|null $pay_run_id 
     *
     * @return self
     */
    public function setPayRunId($pay_run_id)
    {
        if (is_null($pay_run_id)) {
            throw new \InvalidArgumentException('non-nullable pay_run_id cannot be null');
        }
        $this->container['pay_run_id'] = $pay_run_id;

        return $this;
    }

    /**
     * Gets employee_id_type
     *
     * @return string|null
     */
    public function getEmployeeIdType()
    {
        return $this->container['employee_id_type'];
    }

    /**
     * Sets employee_id_type
     *
     * @param string|null $employee_id_type 
     *
     * @return self
     */
    public function setEmployeeIdType($employee_id_type)
    {
        if (is_null($employee_id_type)) {
            throw new \InvalidArgumentException('non-nullable employee_id_type cannot be null');
        }
        $allowedValues = $this->getEmployeeIdTypeAllowableValues();
        if (!in_array($employee_id_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'employee_id_type', must be one of '%s'",
                    $employee_id_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['employee_id_type'] = $employee_id_type;

        return $this;
    }

    /**
     * Gets replace_existing
     *
     * @return bool|null
     */
    public function getReplaceExisting()
    {
        return $this->container['replace_existing'];
    }

    /**
     * Sets replace_existing
     *
     * @param bool|null $replace_existing 
     *
     * @return self
     */
    public function setReplaceExisting($replace_existing)
    {
        if (is_null($replace_existing)) {
            throw new \InvalidArgumentException('non-nullable replace_existing cannot be null');
        }
        $this->container['replace_existing'] = $replace_existing;

        return $this;
    }

    /**
     * Gets suppress_calculations
     *
     * @return bool|null
     */
    public function getSuppressCalculations()
    {
        return $this->container['suppress_calculations'];
    }

    /**
     * Sets suppress_calculations
     *
     * @param bool|null $suppress_calculations 
     *
     * @return self
     */
    public function setSuppressCalculations($suppress_calculations)
    {
        if (is_null($suppress_calculations)) {
            throw new \InvalidArgumentException('non-nullable suppress_calculations cannot be null');
        }
        $this->container['suppress_calculations'] = $suppress_calculations;

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


