<?php
/**
 * ShiftCostingBreakdownModel
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
 * ShiftCostingBreakdownModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShiftCostingBreakdownModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShiftCostingBreakdownModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'pay_category_id' => 'int',
        'pay_category_name' => 'string',
        'units' => 'float',
        'rate' => 'float',
        'cost' => 'float',
        'type' => 'string',
        'liability_category_id' => 'int',
        'liability_category_name' => 'string',
        'location_id' => 'int',
        'location_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'pay_category_id' => 'int32',
        'pay_category_name' => null,
        'units' => 'double',
        'rate' => 'double',
        'cost' => 'double',
        'type' => null,
        'liability_category_id' => 'int32',
        'liability_category_name' => null,
        'location_id' => 'int32',
        'location_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'start_time' => false,
		'end_time' => false,
		'pay_category_id' => false,
		'pay_category_name' => false,
		'units' => false,
		'rate' => false,
		'cost' => false,
		'type' => false,
		'liability_category_id' => false,
		'liability_category_name' => false,
		'location_id' => false,
		'location_name' => false
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
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'pay_category_id' => 'payCategoryId',
        'pay_category_name' => 'payCategoryName',
        'units' => 'units',
        'rate' => 'rate',
        'cost' => 'cost',
        'type' => 'type',
        'liability_category_id' => 'liabilityCategoryId',
        'liability_category_name' => 'liabilityCategoryName',
        'location_id' => 'locationId',
        'location_name' => 'locationName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'pay_category_id' => 'setPayCategoryId',
        'pay_category_name' => 'setPayCategoryName',
        'units' => 'setUnits',
        'rate' => 'setRate',
        'cost' => 'setCost',
        'type' => 'setType',
        'liability_category_id' => 'setLiabilityCategoryId',
        'liability_category_name' => 'setLiabilityCategoryName',
        'location_id' => 'setLocationId',
        'location_name' => 'setLocationName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'pay_category_id' => 'getPayCategoryId',
        'pay_category_name' => 'getPayCategoryName',
        'units' => 'getUnits',
        'rate' => 'getRate',
        'cost' => 'getCost',
        'type' => 'getType',
        'liability_category_id' => 'getLiabilityCategoryId',
        'liability_category_name' => 'getLiabilityCategoryName',
        'location_id' => 'getLocationId',
        'location_name' => 'getLocationName'
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
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('pay_category_id', $data ?? [], null);
        $this->setIfExists('pay_category_name', $data ?? [], null);
        $this->setIfExists('units', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
        $this->setIfExists('cost', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('liability_category_id', $data ?? [], null);
        $this->setIfExists('liability_category_name', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
        $this->setIfExists('location_name', $data ?? [], null);
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
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time 
     *
     * @return self
     */
    public function setStartTime($start_time)
    {
        if (is_null($start_time)) {
            throw new \InvalidArgumentException('non-nullable start_time cannot be null');
        }
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time 
     *
     * @return self
     */
    public function setEndTime($end_time)
    {
        if (is_null($end_time)) {
            throw new \InvalidArgumentException('non-nullable end_time cannot be null');
        }
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets pay_category_id
     *
     * @return int|null
     */
    public function getPayCategoryId()
    {
        return $this->container['pay_category_id'];
    }

    /**
     * Sets pay_category_id
     *
     * @param int|null $pay_category_id 
     *
     * @return self
     */
    public function setPayCategoryId($pay_category_id)
    {
        if (is_null($pay_category_id)) {
            throw new \InvalidArgumentException('non-nullable pay_category_id cannot be null');
        }
        $this->container['pay_category_id'] = $pay_category_id;

        return $this;
    }

    /**
     * Gets pay_category_name
     *
     * @return string|null
     */
    public function getPayCategoryName()
    {
        return $this->container['pay_category_name'];
    }

    /**
     * Sets pay_category_name
     *
     * @param string|null $pay_category_name 
     *
     * @return self
     */
    public function setPayCategoryName($pay_category_name)
    {
        if (is_null($pay_category_name)) {
            throw new \InvalidArgumentException('non-nullable pay_category_name cannot be null');
        }
        $this->container['pay_category_name'] = $pay_category_name;

        return $this;
    }

    /**
     * Gets units
     *
     * @return float|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param float|null $units 
     *
     * @return self
     */
    public function setUnits($units)
    {
        if (is_null($units)) {
            throw new \InvalidArgumentException('non-nullable units cannot be null');
        }
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate 
     *
     * @return self
     */
    public function setRate($rate)
    {
        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }
        $this->container['rate'] = $rate;

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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets liability_category_id
     *
     * @return int|null
     */
    public function getLiabilityCategoryId()
    {
        return $this->container['liability_category_id'];
    }

    /**
     * Sets liability_category_id
     *
     * @param int|null $liability_category_id 
     *
     * @return self
     */
    public function setLiabilityCategoryId($liability_category_id)
    {
        if (is_null($liability_category_id)) {
            throw new \InvalidArgumentException('non-nullable liability_category_id cannot be null');
        }
        $this->container['liability_category_id'] = $liability_category_id;

        return $this;
    }

    /**
     * Gets liability_category_name
     *
     * @return string|null
     */
    public function getLiabilityCategoryName()
    {
        return $this->container['liability_category_name'];
    }

    /**
     * Sets liability_category_name
     *
     * @param string|null $liability_category_name 
     *
     * @return self
     */
    public function setLiabilityCategoryName($liability_category_name)
    {
        if (is_null($liability_category_name)) {
            throw new \InvalidArgumentException('non-nullable liability_category_name cannot be null');
        }
        $this->container['liability_category_name'] = $liability_category_name;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id 
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            throw new \InvalidArgumentException('non-nullable location_id cannot be null');
        }
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets location_name
     *
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->container['location_name'];
    }

    /**
     * Sets location_name
     *
     * @param string|null $location_name 
     *
     * @return self
     */
    public function setLocationName($location_name)
    {
        if (is_null($location_name)) {
            throw new \InvalidArgumentException('non-nullable location_name cannot be null');
        }
        $this->container['location_name'] = $location_name;

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


