<?php
/**
 * OtherAmounts
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
 * OtherAmounts Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OtherAmounts implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OtherAmounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'work_place_giving' => 'float',
        'exempt_foreign_exempt_income' => 'float',
        'deductible_amount_of_undeducted_annuity_price' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'work_place_giving' => 'double',
        'exempt_foreign_exempt_income' => 'double',
        'deductible_amount_of_undeducted_annuity_price' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'work_place_giving' => false,
		'exempt_foreign_exempt_income' => false,
		'deductible_amount_of_undeducted_annuity_price' => false
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
        'work_place_giving' => 'workPlaceGiving',
        'exempt_foreign_exempt_income' => 'exemptForeignExemptIncome',
        'deductible_amount_of_undeducted_annuity_price' => 'deductibleAmountOfUndeductedAnnuityPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'work_place_giving' => 'setWorkPlaceGiving',
        'exempt_foreign_exempt_income' => 'setExemptForeignExemptIncome',
        'deductible_amount_of_undeducted_annuity_price' => 'setDeductibleAmountOfUndeductedAnnuityPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'work_place_giving' => 'getWorkPlaceGiving',
        'exempt_foreign_exempt_income' => 'getExemptForeignExemptIncome',
        'deductible_amount_of_undeducted_annuity_price' => 'getDeductibleAmountOfUndeductedAnnuityPrice'
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
        $this->setIfExists('work_place_giving', $data ?? [], null);
        $this->setIfExists('exempt_foreign_exempt_income', $data ?? [], null);
        $this->setIfExists('deductible_amount_of_undeducted_annuity_price', $data ?? [], null);
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
     * Gets work_place_giving
     *
     * @return float|null
     */
    public function getWorkPlaceGiving()
    {
        return $this->container['work_place_giving'];
    }

    /**
     * Sets work_place_giving
     *
     * @param float|null $work_place_giving 
     *
     * @return self
     */
    public function setWorkPlaceGiving($work_place_giving)
    {
        if (is_null($work_place_giving)) {
            throw new \InvalidArgumentException('non-nullable work_place_giving cannot be null');
        }
        $this->container['work_place_giving'] = $work_place_giving;

        return $this;
    }

    /**
     * Gets exempt_foreign_exempt_income
     *
     * @return float|null
     */
    public function getExemptForeignExemptIncome()
    {
        return $this->container['exempt_foreign_exempt_income'];
    }

    /**
     * Sets exempt_foreign_exempt_income
     *
     * @param float|null $exempt_foreign_exempt_income 
     *
     * @return self
     */
    public function setExemptForeignExemptIncome($exempt_foreign_exempt_income)
    {
        if (is_null($exempt_foreign_exempt_income)) {
            throw new \InvalidArgumentException('non-nullable exempt_foreign_exempt_income cannot be null');
        }
        $this->container['exempt_foreign_exempt_income'] = $exempt_foreign_exempt_income;

        return $this;
    }

    /**
     * Gets deductible_amount_of_undeducted_annuity_price
     *
     * @return float|null
     */
    public function getDeductibleAmountOfUndeductedAnnuityPrice()
    {
        return $this->container['deductible_amount_of_undeducted_annuity_price'];
    }

    /**
     * Sets deductible_amount_of_undeducted_annuity_price
     *
     * @param float|null $deductible_amount_of_undeducted_annuity_price 
     *
     * @return self
     */
    public function setDeductibleAmountOfUndeductedAnnuityPrice($deductible_amount_of_undeducted_annuity_price)
    {
        if (is_null($deductible_amount_of_undeducted_annuity_price)) {
            throw new \InvalidArgumentException('non-nullable deductible_amount_of_undeducted_annuity_price cannot be null');
        }
        $this->container['deductible_amount_of_undeducted_annuity_price'] = $deductible_amount_of_undeducted_annuity_price;

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


