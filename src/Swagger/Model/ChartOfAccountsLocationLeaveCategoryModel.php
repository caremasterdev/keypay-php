<?php
/**
 * ChartOfAccountsLocationLeaveCategoryModel
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
 * ChartOfAccountsLocationLeaveCategoryModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChartOfAccountsLocationLeaveCategoryModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChartOfAccountsLocationLeaveCategoryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'liability_account_id' => 'int',
        'accrue_from_contingent_period' => 'bool',
        'id' => 'int',
        'name' => 'string',
        'expense_account_id' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'liability_account_id' => 'int32',
        'accrue_from_contingent_period' => null,
        'id' => 'int32',
        'name' => null,
        'expense_account_id' => 'int32',
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
        'liability_account_id' => 'liabilityAccountId',
        'accrue_from_contingent_period' => 'accrueFromContingentPeriod',
        'id' => 'id',
        'name' => 'name',
        'expense_account_id' => 'expenseAccountId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'liability_account_id' => 'setLiabilityAccountId',
        'accrue_from_contingent_period' => 'setAccrueFromContingentPeriod',
        'id' => 'setId',
        'name' => 'setName',
        'expense_account_id' => 'setExpenseAccountId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'liability_account_id' => 'getLiabilityAccountId',
        'accrue_from_contingent_period' => 'getAccrueFromContingentPeriod',
        'id' => 'getId',
        'name' => 'getName',
        'expense_account_id' => 'getExpenseAccountId',
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
        $this->container['liability_account_id'] = isset($data['liability_account_id']) ? $data['liability_account_id'] : null;
        $this->container['accrue_from_contingent_period'] = isset($data['accrue_from_contingent_period']) ? $data['accrue_from_contingent_period'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['expense_account_id'] = isset($data['expense_account_id']) ? $data['expense_account_id'] : null;
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
     * Gets liability_account_id
     *
     * @return int
     */
    public function getLiabilityAccountId()
    {
        return $this->container['liability_account_id'];
    }

    /**
     * Sets liability_account_id
     *
     * @param int $liability_account_id
     *
     * @return $this
     */
    public function setLiabilityAccountId($liability_account_id)
    {
        $this->container['liability_account_id'] = $liability_account_id;

        return $this;
    }

    /**
     * Gets accrue_from_contingent_period
     *
     * @return bool
     */
    public function getAccrueFromContingentPeriod()
    {
        return $this->container['accrue_from_contingent_period'];
    }

    /**
     * Sets accrue_from_contingent_period
     *
     * @param bool $accrue_from_contingent_period
     *
     * @return $this
     */
    public function setAccrueFromContingentPeriod($accrue_from_contingent_period)
    {
        $this->container['accrue_from_contingent_period'] = $accrue_from_contingent_period;

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets expense_account_id
     *
     * @return int
     */
    public function getExpenseAccountId()
    {
        return $this->container['expense_account_id'];
    }

    /**
     * Sets expense_account_id
     *
     * @param int $expense_account_id
     *
     * @return $this
     */
    public function setExpenseAccountId($expense_account_id)
    {
        $this->container['expense_account_id'] = $expense_account_id;

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
