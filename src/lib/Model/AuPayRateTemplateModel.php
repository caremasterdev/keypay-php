<?php
/**
 * AuPayRateTemplateModel
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
 * AuPayRateTemplateModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AuPayRateTemplateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AuPayRateTemplateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'super_threshold_amount' => 'float',
        'maximum_quarterly_super_contributions_base' => 'float',
        'id' => 'int',
        'name' => 'string',
        'primary_pay_category_id' => 'int',
        'pay_categories' => '\OpenAPI\Client\Model\PayRateTemplatePayCategoryExportModel[]',
        'external_id' => 'string',
        'source' => 'string',
        'reapply_to_linked_employees' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'super_threshold_amount' => 'double',
        'maximum_quarterly_super_contributions_base' => 'double',
        'id' => 'int32',
        'name' => null,
        'primary_pay_category_id' => 'int32',
        'pay_categories' => null,
        'external_id' => null,
        'source' => null,
        'reapply_to_linked_employees' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'super_threshold_amount' => false,
		'maximum_quarterly_super_contributions_base' => false,
		'id' => false,
		'name' => false,
		'primary_pay_category_id' => false,
		'pay_categories' => false,
		'external_id' => false,
		'source' => false,
		'reapply_to_linked_employees' => false
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
        'super_threshold_amount' => 'superThresholdAmount',
        'maximum_quarterly_super_contributions_base' => 'maximumQuarterlySuperContributionsBase',
        'id' => 'id',
        'name' => 'name',
        'primary_pay_category_id' => 'primaryPayCategoryId',
        'pay_categories' => 'payCategories',
        'external_id' => 'externalId',
        'source' => 'source',
        'reapply_to_linked_employees' => 'reapplyToLinkedEmployees'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super_threshold_amount' => 'setSuperThresholdAmount',
        'maximum_quarterly_super_contributions_base' => 'setMaximumQuarterlySuperContributionsBase',
        'id' => 'setId',
        'name' => 'setName',
        'primary_pay_category_id' => 'setPrimaryPayCategoryId',
        'pay_categories' => 'setPayCategories',
        'external_id' => 'setExternalId',
        'source' => 'setSource',
        'reapply_to_linked_employees' => 'setReapplyToLinkedEmployees'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super_threshold_amount' => 'getSuperThresholdAmount',
        'maximum_quarterly_super_contributions_base' => 'getMaximumQuarterlySuperContributionsBase',
        'id' => 'getId',
        'name' => 'getName',
        'primary_pay_category_id' => 'getPrimaryPayCategoryId',
        'pay_categories' => 'getPayCategories',
        'external_id' => 'getExternalId',
        'source' => 'getSource',
        'reapply_to_linked_employees' => 'getReapplyToLinkedEmployees'
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
        $this->setIfExists('super_threshold_amount', $data ?? [], null);
        $this->setIfExists('maximum_quarterly_super_contributions_base', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('primary_pay_category_id', $data ?? [], null);
        $this->setIfExists('pay_categories', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('reapply_to_linked_employees', $data ?? [], null);
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
     * Gets super_threshold_amount
     *
     * @return float|null
     */
    public function getSuperThresholdAmount()
    {
        return $this->container['super_threshold_amount'];
    }

    /**
     * Sets super_threshold_amount
     *
     * @param float|null $super_threshold_amount 
     *
     * @return self
     */
    public function setSuperThresholdAmount($super_threshold_amount)
    {
        if (is_null($super_threshold_amount)) {
            throw new \InvalidArgumentException('non-nullable super_threshold_amount cannot be null');
        }
        $this->container['super_threshold_amount'] = $super_threshold_amount;

        return $this;
    }

    /**
     * Gets maximum_quarterly_super_contributions_base
     *
     * @return float|null
     */
    public function getMaximumQuarterlySuperContributionsBase()
    {
        return $this->container['maximum_quarterly_super_contributions_base'];
    }

    /**
     * Sets maximum_quarterly_super_contributions_base
     *
     * @param float|null $maximum_quarterly_super_contributions_base 
     *
     * @return self
     */
    public function setMaximumQuarterlySuperContributionsBase($maximum_quarterly_super_contributions_base)
    {
        if (is_null($maximum_quarterly_super_contributions_base)) {
            throw new \InvalidArgumentException('non-nullable maximum_quarterly_super_contributions_base cannot be null');
        }
        $this->container['maximum_quarterly_super_contributions_base'] = $maximum_quarterly_super_contributions_base;

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets primary_pay_category_id
     *
     * @return int|null
     */
    public function getPrimaryPayCategoryId()
    {
        return $this->container['primary_pay_category_id'];
    }

    /**
     * Sets primary_pay_category_id
     *
     * @param int|null $primary_pay_category_id 
     *
     * @return self
     */
    public function setPrimaryPayCategoryId($primary_pay_category_id)
    {
        if (is_null($primary_pay_category_id)) {
            throw new \InvalidArgumentException('non-nullable primary_pay_category_id cannot be null');
        }
        $this->container['primary_pay_category_id'] = $primary_pay_category_id;

        return $this;
    }

    /**
     * Gets pay_categories
     *
     * @return \OpenAPI\Client\Model\PayRateTemplatePayCategoryExportModel[]|null
     */
    public function getPayCategories()
    {
        return $this->container['pay_categories'];
    }

    /**
     * Sets pay_categories
     *
     * @param \OpenAPI\Client\Model\PayRateTemplatePayCategoryExportModel[]|null $pay_categories 
     *
     * @return self
     */
    public function setPayCategories($pay_categories)
    {
        if (is_null($pay_categories)) {
            throw new \InvalidArgumentException('non-nullable pay_categories cannot be null');
        }
        $this->container['pay_categories'] = $pay_categories;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id 
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            throw new \InvalidArgumentException('non-nullable external_id cannot be null');
        }
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source 
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets reapply_to_linked_employees
     *
     * @return bool|null
     */
    public function getReapplyToLinkedEmployees()
    {
        return $this->container['reapply_to_linked_employees'];
    }

    /**
     * Sets reapply_to_linked_employees
     *
     * @param bool|null $reapply_to_linked_employees 
     *
     * @return self
     */
    public function setReapplyToLinkedEmployees($reapply_to_linked_employees)
    {
        if (is_null($reapply_to_linked_employees)) {
            throw new \InvalidArgumentException('non-nullable reapply_to_linked_employees cannot be null');
        }
        $this->container['reapply_to_linked_employees'] = $reapply_to_linked_employees;

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


