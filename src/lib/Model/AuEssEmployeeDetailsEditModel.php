<?php
/**
 * AuEssEmployeeDetailsEditModel
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
 * AuEssEmployeeDetailsEditModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuEssEmployeeDetailsEditModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuEssEmployeeDetailsEditModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'residential_address' => '\OpenAPI\Client\Model\AuAddressModel',
        'postal_address' => '\OpenAPI\Client\Model\AuAddressModel',
        'id' => 'int',
        'title_id' => 'int',
        'first_name' => 'string',
        'other_name' => 'string',
        'middle_name' => 'string',
        'surname' => 'string',
        'previous_surname' => 'string',
        'date_of_birth' => '\DateTime',
        'gender' => 'string',
        'email' => 'string',
        'home_phone' => 'string',
        'work_phone' => 'string',
        'mobile_phone' => 'string',
        'is_postal_address_same_as_residential' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'residential_address' => null,
        'postal_address' => null,
        'id' => 'int32',
        'title_id' => 'int32',
        'first_name' => null,
        'other_name' => null,
        'middle_name' => null,
        'surname' => null,
        'previous_surname' => null,
        'date_of_birth' => 'date-time',
        'gender' => null,
        'email' => null,
        'home_phone' => null,
        'work_phone' => null,
        'mobile_phone' => null,
        'is_postal_address_same_as_residential' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'residential_address' => false,
		'postal_address' => false,
		'id' => false,
		'title_id' => false,
		'first_name' => false,
		'other_name' => false,
		'middle_name' => false,
		'surname' => false,
		'previous_surname' => false,
		'date_of_birth' => false,
		'gender' => false,
		'email' => false,
		'home_phone' => false,
		'work_phone' => false,
		'mobile_phone' => false,
		'is_postal_address_same_as_residential' => false
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
        'residential_address' => 'residentialAddress',
        'postal_address' => 'postalAddress',
        'id' => 'id',
        'title_id' => 'titleId',
        'first_name' => 'firstName',
        'other_name' => 'otherName',
        'middle_name' => 'middleName',
        'surname' => 'surname',
        'previous_surname' => 'previousSurname',
        'date_of_birth' => 'dateOfBirth',
        'gender' => 'gender',
        'email' => 'email',
        'home_phone' => 'homePhone',
        'work_phone' => 'workPhone',
        'mobile_phone' => 'mobilePhone',
        'is_postal_address_same_as_residential' => 'isPostalAddressSameAsResidential'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'residential_address' => 'setResidentialAddress',
        'postal_address' => 'setPostalAddress',
        'id' => 'setId',
        'title_id' => 'setTitleId',
        'first_name' => 'setFirstName',
        'other_name' => 'setOtherName',
        'middle_name' => 'setMiddleName',
        'surname' => 'setSurname',
        'previous_surname' => 'setPreviousSurname',
        'date_of_birth' => 'setDateOfBirth',
        'gender' => 'setGender',
        'email' => 'setEmail',
        'home_phone' => 'setHomePhone',
        'work_phone' => 'setWorkPhone',
        'mobile_phone' => 'setMobilePhone',
        'is_postal_address_same_as_residential' => 'setIsPostalAddressSameAsResidential'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'residential_address' => 'getResidentialAddress',
        'postal_address' => 'getPostalAddress',
        'id' => 'getId',
        'title_id' => 'getTitleId',
        'first_name' => 'getFirstName',
        'other_name' => 'getOtherName',
        'middle_name' => 'getMiddleName',
        'surname' => 'getSurname',
        'previous_surname' => 'getPreviousSurname',
        'date_of_birth' => 'getDateOfBirth',
        'gender' => 'getGender',
        'email' => 'getEmail',
        'home_phone' => 'getHomePhone',
        'work_phone' => 'getWorkPhone',
        'mobile_phone' => 'getMobilePhone',
        'is_postal_address_same_as_residential' => 'getIsPostalAddressSameAsResidential'
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
        $this->setIfExists('residential_address', $data ?? [], null);
        $this->setIfExists('postal_address', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('title_id', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('other_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('previous_surname', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('home_phone', $data ?? [], null);
        $this->setIfExists('work_phone', $data ?? [], null);
        $this->setIfExists('mobile_phone', $data ?? [], null);
        $this->setIfExists('is_postal_address_same_as_residential', $data ?? [], null);
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
     * Gets residential_address
     *
     * @return \OpenAPI\Client\Model\AuAddressModel|null
     */
    public function getResidentialAddress()
    {
        return $this->container['residential_address'];
    }

    /**
     * Sets residential_address
     *
     * @param \OpenAPI\Client\Model\AuAddressModel|null $residential_address residential_address
     *
     * @return self
     */
    public function setResidentialAddress($residential_address)
    {
        if (is_null($residential_address)) {
            throw new \InvalidArgumentException('non-nullable residential_address cannot be null');
        }
        $this->container['residential_address'] = $residential_address;

        return $this;
    }

    /**
     * Gets postal_address
     *
     * @return \OpenAPI\Client\Model\AuAddressModel|null
     */
    public function getPostalAddress()
    {
        return $this->container['postal_address'];
    }

    /**
     * Sets postal_address
     *
     * @param \OpenAPI\Client\Model\AuAddressModel|null $postal_address postal_address
     *
     * @return self
     */
    public function setPostalAddress($postal_address)
    {
        if (is_null($postal_address)) {
            throw new \InvalidArgumentException('non-nullable postal_address cannot be null');
        }
        $this->container['postal_address'] = $postal_address;

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
     * Gets title_id
     *
     * @return int|null
     */
    public function getTitleId()
    {
        return $this->container['title_id'];
    }

    /**
     * Sets title_id
     *
     * @param int|null $title_id 
     *
     * @return self
     */
    public function setTitleId($title_id)
    {
        if (is_null($title_id)) {
            throw new \InvalidArgumentException('non-nullable title_id cannot be null');
        }
        $this->container['title_id'] = $title_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name 
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets other_name
     *
     * @return string|null
     */
    public function getOtherName()
    {
        return $this->container['other_name'];
    }

    /**
     * Sets other_name
     *
     * @param string|null $other_name 
     *
     * @return self
     */
    public function setOtherName($other_name)
    {
        if (is_null($other_name)) {
            throw new \InvalidArgumentException('non-nullable other_name cannot be null');
        }
        $this->container['other_name'] = $other_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name 
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname 
     *
     * @return self
     */
    public function setSurname($surname)
    {
        if (is_null($surname)) {
            throw new \InvalidArgumentException('non-nullable surname cannot be null');
        }
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets previous_surname
     *
     * @return string|null
     */
    public function getPreviousSurname()
    {
        return $this->container['previous_surname'];
    }

    /**
     * Sets previous_surname
     *
     * @param string|null $previous_surname 
     *
     * @return self
     */
    public function setPreviousSurname($previous_surname)
    {
        if (is_null($previous_surname)) {
            throw new \InvalidArgumentException('non-nullable previous_surname cannot be null');
        }
        $this->container['previous_surname'] = $previous_surname;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime|null $date_of_birth 
     *
     * @return self
     */
    public function setDateOfBirth($date_of_birth)
    {
        if (is_null($date_of_birth)) {
            throw new \InvalidArgumentException('non-nullable date_of_birth cannot be null');
        }
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender 
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email 
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets home_phone
     *
     * @return string|null
     */
    public function getHomePhone()
    {
        return $this->container['home_phone'];
    }

    /**
     * Sets home_phone
     *
     * @param string|null $home_phone 
     *
     * @return self
     */
    public function setHomePhone($home_phone)
    {
        if (is_null($home_phone)) {
            throw new \InvalidArgumentException('non-nullable home_phone cannot be null');
        }
        $this->container['home_phone'] = $home_phone;

        return $this;
    }

    /**
     * Gets work_phone
     *
     * @return string|null
     */
    public function getWorkPhone()
    {
        return $this->container['work_phone'];
    }

    /**
     * Sets work_phone
     *
     * @param string|null $work_phone 
     *
     * @return self
     */
    public function setWorkPhone($work_phone)
    {
        if (is_null($work_phone)) {
            throw new \InvalidArgumentException('non-nullable work_phone cannot be null');
        }
        $this->container['work_phone'] = $work_phone;

        return $this;
    }

    /**
     * Gets mobile_phone
     *
     * @return string|null
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     *
     * @param string|null $mobile_phone 
     *
     * @return self
     */
    public function setMobilePhone($mobile_phone)
    {
        if (is_null($mobile_phone)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone cannot be null');
        }
        $this->container['mobile_phone'] = $mobile_phone;

        return $this;
    }

    /**
     * Gets is_postal_address_same_as_residential
     *
     * @return bool|null
     */
    public function getIsPostalAddressSameAsResidential()
    {
        return $this->container['is_postal_address_same_as_residential'];
    }

    /**
     * Sets is_postal_address_same_as_residential
     *
     * @param bool|null $is_postal_address_same_as_residential 
     *
     * @return self
     */
    public function setIsPostalAddressSameAsResidential($is_postal_address_same_as_residential)
    {
        if (is_null($is_postal_address_same_as_residential)) {
            throw new \InvalidArgumentException('non-nullable is_postal_address_same_as_residential cannot be null');
        }
        $this->container['is_postal_address_same_as_residential'] = $is_postal_address_same_as_residential;

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


