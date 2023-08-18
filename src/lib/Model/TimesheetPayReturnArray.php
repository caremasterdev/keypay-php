<?php
/**
 * TimesheetPayReturnArray
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
 * TimesheetPayReturnArray Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TimesheetPayReturnArray implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimesheetPayReturnArray';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'timesheet' => 'int',
        'pay_rule' => 'int',
        'overridden' => 'bool',
        'value' => 'float',
        'cost' => 'float',
        'override_comment' => 'string',
        'pay_cycle_id' => 'int',
        'created' => '\DateTime',
        'modified' => '\DateTime'
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
        'timesheet' => 'int32',
        'pay_rule' => 'int32',
        'overridden' => null,
        'value' => 'double',
        'cost' => 'double',
        'override_comment' => null,
        'pay_cycle_id' => 'int32',
        'created' => 'date-time',
        'modified' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'timesheet' => false,
		'pay_rule' => false,
		'overridden' => false,
		'value' => false,
		'cost' => false,
		'override_comment' => false,
		'pay_cycle_id' => false,
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
        'id' => 'id',
        'timesheet' => 'timesheet',
        'pay_rule' => 'payRule',
        'overridden' => 'overridden',
        'value' => 'value',
        'cost' => 'cost',
        'override_comment' => 'overrideComment',
        'pay_cycle_id' => 'payCycleId',
        'created' => 'created',
        'modified' => 'modified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'timesheet' => 'setTimesheet',
        'pay_rule' => 'setPayRule',
        'overridden' => 'setOverridden',
        'value' => 'setValue',
        'cost' => 'setCost',
        'override_comment' => 'setOverrideComment',
        'pay_cycle_id' => 'setPayCycleId',
        'created' => 'setCreated',
        'modified' => 'setModified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'timesheet' => 'getTimesheet',
        'pay_rule' => 'getPayRule',
        'overridden' => 'getOverridden',
        'value' => 'getValue',
        'cost' => 'getCost',
        'override_comment' => 'getOverrideComment',
        'pay_cycle_id' => 'getPayCycleId',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('timesheet', $data ?? [], null);
        $this->setIfExists('pay_rule', $data ?? [], null);
        $this->setIfExists('overridden', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('override_comment', $data ?? [], null);
        $this->setIfExists('pay_cycle_id', $data ?? [], null);
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
     * Gets timesheet
     *
     * @return int|null
     */
    public function getTimesheet()
    {
        return $this->container['timesheet'];
    }

    /**
     * Sets timesheet
     *
     * @param int|null $timesheet 
     *
     * @return self
     */
    public function setTimesheet($timesheet)
    {
        if (is_null($timesheet)) {
            throw new \InvalidArgumentException('non-nullable timesheet cannot be null');
        }
        $this->container['timesheet'] = $timesheet;

        return $this;
    }

    /**
     * Gets pay_rule
     *
     * @return int|null
     */
    public function getPayRule()
    {
        return $this->container['pay_rule'];
    }

    /**
     * Sets pay_rule
     *
     * @param int|null $pay_rule 
     *
     * @return self
     */
    public function setPayRule($pay_rule)
    {
        if (is_null($pay_rule)) {
            throw new \InvalidArgumentException('non-nullable pay_rule cannot be null');
        }
        $this->container['pay_rule'] = $pay_rule;

        return $this;
    }

    /**
     * Gets overridden
     *
     * @return bool|null
     */
    public function getOverridden()
    {
        return $this->container['overridden'];
    }

    /**
     * Sets overridden
     *
     * @param bool|null $overridden 
     *
     * @return self
     */
    public function setOverridden($overridden)
    {
        if (is_null($overridden)) {
            throw new \InvalidArgumentException('non-nullable overridden cannot be null');
        }
        $this->container['overridden'] = $overridden;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value 
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost 
     *
     * @return self
     */
    public function setCost($cost)
    {
        if (is_null($cost)) {
            throw new \InvalidArgumentException('non-nullable cost cannot be null');
        }
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets override_comment
     *
     * @return string|null
     */
    public function getOverrideComment()
    {
        return $this->container['override_comment'];
    }

    /**
     * Sets override_comment
     *
     * @param string|null $override_comment 
     *
     * @return self
     */
    public function setOverrideComment($override_comment)
    {
        if (is_null($override_comment)) {
            throw new \InvalidArgumentException('non-nullable override_comment cannot be null');
        }
        $this->container['override_comment'] = $override_comment;

        return $this;
    }

    /**
     * Gets pay_cycle_id
     *
     * @return int|null
     */
    public function getPayCycleId()
    {
        return $this->container['pay_cycle_id'];
    }

    /**
     * Sets pay_cycle_id
     *
     * @param int|null $pay_cycle_id 
     *
     * @return self
     */
    public function setPayCycleId($pay_cycle_id)
    {
        if (is_null($pay_cycle_id)) {
            throw new \InvalidArgumentException('non-nullable pay_cycle_id cannot be null');
        }
        $this->container['pay_cycle_id'] = $pay_cycle_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime|null $created 
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
     * @return \DateTime|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime|null $modified 
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


