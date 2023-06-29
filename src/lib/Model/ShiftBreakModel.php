<?php
/**
 * ShiftBreakModel
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
 * ShiftBreakModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ShiftBreakModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShiftBreakModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start' => '\OpenAPI\Client\Model\StartBreakModel',
        'end' => '\OpenAPI\Client\Model\EndBreakModel',
        'is_paid_break' => 'bool',
        'employee_id' => 'int',
        'latitude' => 'float',
        'longitude' => 'float',
        'kiosk_id' => 'int',
        'ip_address' => 'string',
        'image' => 'string',
        'is_admin_initiated' => 'bool',
        'recorded_time_utc' => '\DateTime',
        'utc_offset' => 'string',
        'note_visibility' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'start' => null,
        'end' => null,
        'is_paid_break' => null,
        'employee_id' => 'int32',
        'latitude' => 'double',
        'longitude' => 'double',
        'kiosk_id' => 'int32',
        'ip_address' => null,
        'image' => 'byte',
        'is_admin_initiated' => null,
        'recorded_time_utc' => 'date-time',
        'utc_offset' => null,
        'note_visibility' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'start' => false,
		'end' => false,
		'is_paid_break' => false,
		'employee_id' => false,
		'latitude' => false,
		'longitude' => false,
		'kiosk_id' => false,
		'ip_address' => false,
		'image' => false,
		'is_admin_initiated' => false,
		'recorded_time_utc' => false,
		'utc_offset' => false,
		'note_visibility' => false
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
        'start' => 'start',
        'end' => 'end',
        'is_paid_break' => 'isPaidBreak',
        'employee_id' => 'employeeId',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'kiosk_id' => 'kioskId',
        'ip_address' => 'ipAddress',
        'image' => 'image',
        'is_admin_initiated' => 'isAdminInitiated',
        'recorded_time_utc' => 'recordedTimeUtc',
        'utc_offset' => 'utcOffset',
        'note_visibility' => 'noteVisibility'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start' => 'setStart',
        'end' => 'setEnd',
        'is_paid_break' => 'setIsPaidBreak',
        'employee_id' => 'setEmployeeId',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'kiosk_id' => 'setKioskId',
        'ip_address' => 'setIpAddress',
        'image' => 'setImage',
        'is_admin_initiated' => 'setIsAdminInitiated',
        'recorded_time_utc' => 'setRecordedTimeUtc',
        'utc_offset' => 'setUtcOffset',
        'note_visibility' => 'setNoteVisibility'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start' => 'getStart',
        'end' => 'getEnd',
        'is_paid_break' => 'getIsPaidBreak',
        'employee_id' => 'getEmployeeId',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'kiosk_id' => 'getKioskId',
        'ip_address' => 'getIpAddress',
        'image' => 'getImage',
        'is_admin_initiated' => 'getIsAdminInitiated',
        'recorded_time_utc' => 'getRecordedTimeUtc',
        'utc_offset' => 'getUtcOffset',
        'note_visibility' => 'getNoteVisibility'
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

    public const NOTE_VISIBILITY_HIDDEN = 'Hidden';
    public const NOTE_VISIBILITY_VISIBLE = 'Visible';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNoteVisibilityAllowableValues()
    {
        return [
            self::NOTE_VISIBILITY_HIDDEN,
            self::NOTE_VISIBILITY_VISIBLE,
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
        $this->setIfExists('start', $data ?? [], null);
        $this->setIfExists('end', $data ?? [], null);
        $this->setIfExists('is_paid_break', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('kiosk_id', $data ?? [], null);
        $this->setIfExists('ip_address', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('is_admin_initiated', $data ?? [], null);
        $this->setIfExists('recorded_time_utc', $data ?? [], null);
        $this->setIfExists('utc_offset', $data ?? [], null);
        $this->setIfExists('note_visibility', $data ?? [], null);
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

        if (!is_null($this->container['image']) && !preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $this->container['image'])) {
            $invalidProperties[] = "invalid value for 'image', must be conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.";
        }

        $allowedValues = $this->getNoteVisibilityAllowableValues();
        if (!is_null($this->container['note_visibility']) && !in_array($this->container['note_visibility'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'note_visibility', must be one of '%s'",
                $this->container['note_visibility'],
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
     * Gets start
     *
     * @return \OpenAPI\Client\Model\StartBreakModel|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \OpenAPI\Client\Model\StartBreakModel|null $start start
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
     * Gets end
     *
     * @return \OpenAPI\Client\Model\EndBreakModel|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \OpenAPI\Client\Model\EndBreakModel|null $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        if (is_null($end)) {
            throw new \InvalidArgumentException('non-nullable end cannot be null');
        }
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets is_paid_break
     *
     * @return bool|null
     */
    public function getIsPaidBreak()
    {
        return $this->container['is_paid_break'];
    }

    /**
     * Sets is_paid_break
     *
     * @param bool|null $is_paid_break 
     *
     * @return self
     */
    public function setIsPaidBreak($is_paid_break)
    {
        if (is_null($is_paid_break)) {
            throw new \InvalidArgumentException('non-nullable is_paid_break cannot be null');
        }
        $this->container['is_paid_break'] = $is_paid_break;

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
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude 
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        if (is_null($latitude)) {
            throw new \InvalidArgumentException('non-nullable latitude cannot be null');
        }
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude 
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        if (is_null($longitude)) {
            throw new \InvalidArgumentException('non-nullable longitude cannot be null');
        }
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets kiosk_id
     *
     * @return int|null
     */
    public function getKioskId()
    {
        return $this->container['kiosk_id'];
    }

    /**
     * Sets kiosk_id
     *
     * @param int|null $kiosk_id 
     *
     * @return self
     */
    public function setKioskId($kiosk_id)
    {
        if (is_null($kiosk_id)) {
            throw new \InvalidArgumentException('non-nullable kiosk_id cannot be null');
        }
        $this->container['kiosk_id'] = $kiosk_id;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string|null $ip_address 
     *
     * @return self
     */
    public function setIpAddress($ip_address)
    {
        if (is_null($ip_address)) {
            throw new \InvalidArgumentException('non-nullable ip_address cannot be null');
        }
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image 
     *
     * @return self
     */
    public function setImage($image)
    {
        if (is_null($image)) {
            throw new \InvalidArgumentException('non-nullable image cannot be null');
        }

        if ((!preg_match("/^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/", $image))) {
            throw new \InvalidArgumentException("invalid value for \$image when calling ShiftBreakModel., must conform to the pattern /^(?:[A-Za-z0-9+\/]{4})*(?:[A-Za-z0-9+\/]{2}==|[A-Za-z0-9+\/]{3}=)?$/.");
        }

        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets is_admin_initiated
     *
     * @return bool|null
     */
    public function getIsAdminInitiated()
    {
        return $this->container['is_admin_initiated'];
    }

    /**
     * Sets is_admin_initiated
     *
     * @param bool|null $is_admin_initiated 
     *
     * @return self
     */
    public function setIsAdminInitiated($is_admin_initiated)
    {
        if (is_null($is_admin_initiated)) {
            throw new \InvalidArgumentException('non-nullable is_admin_initiated cannot be null');
        }
        $this->container['is_admin_initiated'] = $is_admin_initiated;

        return $this;
    }

    /**
     * Gets recorded_time_utc
     *
     * @return \DateTime|null
     */
    public function getRecordedTimeUtc()
    {
        return $this->container['recorded_time_utc'];
    }

    /**
     * Sets recorded_time_utc
     *
     * @param \DateTime|null $recorded_time_utc 
     *
     * @return self
     */
    public function setRecordedTimeUtc($recorded_time_utc)
    {
        if (is_null($recorded_time_utc)) {
            throw new \InvalidArgumentException('non-nullable recorded_time_utc cannot be null');
        }
        $this->container['recorded_time_utc'] = $recorded_time_utc;

        return $this;
    }

    /**
     * Gets utc_offset
     *
     * @return string|null
     */
    public function getUtcOffset()
    {
        return $this->container['utc_offset'];
    }

    /**
     * Sets utc_offset
     *
     * @param string|null $utc_offset 
     *
     * @return self
     */
    public function setUtcOffset($utc_offset)
    {
        if (is_null($utc_offset)) {
            throw new \InvalidArgumentException('non-nullable utc_offset cannot be null');
        }
        $this->container['utc_offset'] = $utc_offset;

        return $this;
    }

    /**
     * Gets note_visibility
     *
     * @return string|null
     */
    public function getNoteVisibility()
    {
        return $this->container['note_visibility'];
    }

    /**
     * Sets note_visibility
     *
     * @param string|null $note_visibility 
     *
     * @return self
     */
    public function setNoteVisibility($note_visibility)
    {
        if (is_null($note_visibility)) {
            throw new \InvalidArgumentException('non-nullable note_visibility cannot be null');
        }
        $allowedValues = $this->getNoteVisibilityAllowableValues();
        if (!in_array($note_visibility, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'note_visibility', must be one of '%s'",
                    $note_visibility,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['note_visibility'] = $note_visibility;

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


