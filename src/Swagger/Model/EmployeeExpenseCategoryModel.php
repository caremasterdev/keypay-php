<?php
/**
 * EmployeeExpenseCategoryModel
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
 * EmployeeExpenseCategoryModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeExpenseCategoryModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmployeeExpenseCategoryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'external_id' => 'string',
        'general_ledger_mapping_code' => 'string',
        'description' => 'string',
        'external_reference_id' => 'string',
        'external_tax_code_id' => 'string',
        'tax_code' => 'string',
        'tax_rate' => 'double',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'external_id' => null,
        'general_ledger_mapping_code' => null,
        'description' => null,
        'external_reference_id' => null,
        'external_tax_code_id' => null,
        'tax_code' => null,
        'tax_rate' => 'double',
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
        'id' => 'id',
        'name' => 'name',
        'external_id' => 'externalId',
        'general_ledger_mapping_code' => 'generalLedgerMappingCode',
        'description' => 'description',
        'external_reference_id' => 'externalReferenceId',
        'external_tax_code_id' => 'externalTaxCodeId',
        'tax_code' => 'taxCode',
        'tax_rate' => 'taxRate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'external_id' => 'setExternalId',
        'general_ledger_mapping_code' => 'setGeneralLedgerMappingCode',
        'description' => 'setDescription',
        'external_reference_id' => 'setExternalReferenceId',
        'external_tax_code_id' => 'setExternalTaxCodeId',
        'tax_code' => 'setTaxCode',
        'tax_rate' => 'setTaxRate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'external_id' => 'getExternalId',
        'general_ledger_mapping_code' => 'getGeneralLedgerMappingCode',
        'description' => 'getDescription',
        'external_reference_id' => 'getExternalReferenceId',
        'external_tax_code_id' => 'getExternalTaxCodeId',
        'tax_code' => 'getTaxCode',
        'tax_rate' => 'getTaxRate',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['general_ledger_mapping_code'] = isset($data['general_ledger_mapping_code']) ? $data['general_ledger_mapping_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
        $this->container['external_tax_code_id'] = isset($data['external_tax_code_id']) ? $data['external_tax_code_id'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
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
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets general_ledger_mapping_code
     *
     * @return string
     */
    public function getGeneralLedgerMappingCode()
    {
        return $this->container['general_ledger_mapping_code'];
    }

    /**
     * Sets general_ledger_mapping_code
     *
     * @param string $general_ledger_mapping_code
     *
     * @return $this
     */
    public function setGeneralLedgerMappingCode($general_ledger_mapping_code)
    {
        $this->container['general_ledger_mapping_code'] = $general_ledger_mapping_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets external_reference_id
     *
     * @return string
     */
    public function getExternalReferenceId()
    {
        return $this->container['external_reference_id'];
    }

    /**
     * Sets external_reference_id
     *
     * @param string $external_reference_id
     *
     * @return $this
     */
    public function setExternalReferenceId($external_reference_id)
    {
        $this->container['external_reference_id'] = $external_reference_id;

        return $this;
    }

    /**
     * Gets external_tax_code_id
     *
     * @return string
     */
    public function getExternalTaxCodeId()
    {
        return $this->container['external_tax_code_id'];
    }

    /**
     * Sets external_tax_code_id
     *
     * @param string $external_tax_code_id
     *
     * @return $this
     */
    public function setExternalTaxCodeId($external_tax_code_id)
    {
        $this->container['external_tax_code_id'] = $external_tax_code_id;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string $tax_code
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

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
