<?php
/**
 * AuBankPaymentModel
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
 * AuBankPaymentModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuBankPaymentModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuBankPaymentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bsb' => 'string',
        'employee_id' => 'int',
        'employee_external_id' => 'string',
        'employee_first_name' => 'string',
        'employee_surname' => 'string',
        'account_name' => 'string',
        'account_number' => 'string',
        'amount' => 'float',
        'account_type' => 'string',
        'lodgement_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bsb' => null,
        'employee_id' => 'int32',
        'employee_external_id' => null,
        'employee_first_name' => null,
        'employee_surname' => null,
        'account_name' => null,
        'account_number' => null,
        'amount' => 'double',
        'account_type' => null,
        'lodgement_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bsb' => false,
		'employee_id' => false,
		'employee_external_id' => false,
		'employee_first_name' => false,
		'employee_surname' => false,
		'account_name' => false,
		'account_number' => false,
		'amount' => false,
		'account_type' => false,
		'lodgement_reference' => false
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
        'bsb' => 'bsb',
        'employee_id' => 'employeeId',
        'employee_external_id' => 'employeeExternalId',
        'employee_first_name' => 'employeeFirstName',
        'employee_surname' => 'employeeSurname',
        'account_name' => 'accountName',
        'account_number' => 'accountNumber',
        'amount' => 'amount',
        'account_type' => 'accountType',
        'lodgement_reference' => 'lodgementReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bsb' => 'setBsb',
        'employee_id' => 'setEmployeeId',
        'employee_external_id' => 'setEmployeeExternalId',
        'employee_first_name' => 'setEmployeeFirstName',
        'employee_surname' => 'setEmployeeSurname',
        'account_name' => 'setAccountName',
        'account_number' => 'setAccountNumber',
        'amount' => 'setAmount',
        'account_type' => 'setAccountType',
        'lodgement_reference' => 'setLodgementReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bsb' => 'getBsb',
        'employee_id' => 'getEmployeeId',
        'employee_external_id' => 'getEmployeeExternalId',
        'employee_first_name' => 'getEmployeeFirstName',
        'employee_surname' => 'getEmployeeSurname',
        'account_name' => 'getAccountName',
        'account_number' => 'getAccountNumber',
        'amount' => 'getAmount',
        'account_type' => 'getAccountType',
        'lodgement_reference' => 'getLodgementReference'
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
        $this->setIfExists('bsb', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('employee_external_id', $data ?? [], null);
        $this->setIfExists('employee_first_name', $data ?? [], null);
        $this->setIfExists('employee_surname', $data ?? [], null);
        $this->setIfExists('account_name', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('account_type', $data ?? [], null);
        $this->setIfExists('lodgement_reference', $data ?? [], null);
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
     * Gets bsb
     *
     * @return string|null
     */
    public function getBsb()
    {
        return $this->container['bsb'];
    }

    /**
     * Sets bsb
     *
     * @param string|null $bsb 
     *
     * @return self
     */
    public function setBsb($bsb)
    {
        if (is_null($bsb)) {
            throw new \InvalidArgumentException('non-nullable bsb cannot be null');
        }
        $this->container['bsb'] = $bsb;

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
     * Gets employee_external_id
     *
     * @return string|null
     */
    public function getEmployeeExternalId()
    {
        return $this->container['employee_external_id'];
    }

    /**
     * Sets employee_external_id
     *
     * @param string|null $employee_external_id 
     *
     * @return self
     */
    public function setEmployeeExternalId($employee_external_id)
    {
        if (is_null($employee_external_id)) {
            throw new \InvalidArgumentException('non-nullable employee_external_id cannot be null');
        }
        $this->container['employee_external_id'] = $employee_external_id;

        return $this;
    }

    /**
     * Gets employee_first_name
     *
     * @return string|null
     */
    public function getEmployeeFirstName()
    {
        return $this->container['employee_first_name'];
    }

    /**
     * Sets employee_first_name
     *
     * @param string|null $employee_first_name 
     *
     * @return self
     */
    public function setEmployeeFirstName($employee_first_name)
    {
        if (is_null($employee_first_name)) {
            throw new \InvalidArgumentException('non-nullable employee_first_name cannot be null');
        }
        $this->container['employee_first_name'] = $employee_first_name;

        return $this;
    }

    /**
     * Gets employee_surname
     *
     * @return string|null
     */
    public function getEmployeeSurname()
    {
        return $this->container['employee_surname'];
    }

    /**
     * Sets employee_surname
     *
     * @param string|null $employee_surname 
     *
     * @return self
     */
    public function setEmployeeSurname($employee_surname)
    {
        if (is_null($employee_surname)) {
            throw new \InvalidArgumentException('non-nullable employee_surname cannot be null');
        }
        $this->container['employee_surname'] = $employee_surname;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name 
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        if (is_null($account_name)) {
            throw new \InvalidArgumentException('non-nullable account_name cannot be null');
        }
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number 
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount 
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type 
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        if (is_null($account_type)) {
            throw new \InvalidArgumentException('non-nullable account_type cannot be null');
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets lodgement_reference
     *
     * @return string|null
     */
    public function getLodgementReference()
    {
        return $this->container['lodgement_reference'];
    }

    /**
     * Sets lodgement_reference
     *
     * @param string|null $lodgement_reference 
     *
     * @return self
     */
    public function setLodgementReference($lodgement_reference)
    {
        if (is_null($lodgement_reference)) {
            throw new \InvalidArgumentException('non-nullable lodgement_reference cannot be null');
        }
        $this->container['lodgement_reference'] = $lodgement_reference;

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


