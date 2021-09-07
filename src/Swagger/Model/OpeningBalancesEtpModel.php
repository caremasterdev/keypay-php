<?php
/**
 * OpeningBalancesEtpModel
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
 * OpeningBalancesEtpModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpeningBalancesEtpModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OpeningBalancesEtpModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'etp_type' => 'string',
        'tax_free_component' => 'double',
        'taxable_component' => 'double',
        'tax_withheld' => 'double',
        'lump_sum_d' => 'double',
        'is_amended' => 'bool',
        'payment_date' => '\DateTime',
        'generate_payment_summary' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'etp_type' => null,
        'tax_free_component' => 'double',
        'taxable_component' => 'double',
        'tax_withheld' => 'double',
        'lump_sum_d' => 'double',
        'is_amended' => null,
        'payment_date' => 'date-time',
        'generate_payment_summary' => null,
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
        'etp_type' => 'etpType',
        'tax_free_component' => 'taxFreeComponent',
        'taxable_component' => 'taxableComponent',
        'tax_withheld' => 'taxWithheld',
        'lump_sum_d' => 'lumpSumD',
        'is_amended' => 'isAmended',
        'payment_date' => 'paymentDate',
        'generate_payment_summary' => 'generatePaymentSummary',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'etp_type' => 'setEtpType',
        'tax_free_component' => 'setTaxFreeComponent',
        'taxable_component' => 'setTaxableComponent',
        'tax_withheld' => 'setTaxWithheld',
        'lump_sum_d' => 'setLumpSumD',
        'is_amended' => 'setIsAmended',
        'payment_date' => 'setPaymentDate',
        'generate_payment_summary' => 'setGeneratePaymentSummary',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'etp_type' => 'getEtpType',
        'tax_free_component' => 'getTaxFreeComponent',
        'taxable_component' => 'getTaxableComponent',
        'tax_withheld' => 'getTaxWithheld',
        'lump_sum_d' => 'getLumpSumD',
        'is_amended' => 'getIsAmended',
        'payment_date' => 'getPaymentDate',
        'generate_payment_summary' => 'getGeneratePaymentSummary',
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

    public const ETP_TYPE_O = 'O';
    public const ETP_TYPE_P = 'P';
    public const ETP_TYPE_R = 'R';
    public const ETP_TYPE_S = 'S';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEtpTypeAllowableValues()
    {
        return [
            self::ETP_TYPE_O,
            self::ETP_TYPE_P,
            self::ETP_TYPE_R,
            self::ETP_TYPE_S,
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
        $this->container['etp_type'] = isset($data['etp_type']) ? $data['etp_type'] : null;
        $this->container['tax_free_component'] = isset($data['tax_free_component']) ? $data['tax_free_component'] : null;
        $this->container['taxable_component'] = isset($data['taxable_component']) ? $data['taxable_component'] : null;
        $this->container['tax_withheld'] = isset($data['tax_withheld']) ? $data['tax_withheld'] : null;
        $this->container['lump_sum_d'] = isset($data['lump_sum_d']) ? $data['lump_sum_d'] : null;
        $this->container['is_amended'] = isset($data['is_amended']) ? $data['is_amended'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['generate_payment_summary'] = isset($data['generate_payment_summary']) ? $data['generate_payment_summary'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEtpTypeAllowableValues();
        if (! is_null($this->container['etp_type']) && ! in_array($this->container['etp_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'etp_type', must be one of '%s'",
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
     * Gets etp_type
     *
     * @return string
     */
    public function getEtpType()
    {
        return $this->container['etp_type'];
    }

    /**
     * Sets etp_type
     *
     * @param string $etp_type
     *
     * @return $this
     */
    public function setEtpType($etp_type)
    {
        $allowedValues = $this->getEtpTypeAllowableValues();
        if (! is_null($etp_type) && ! in_array($etp_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'etp_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['etp_type'] = $etp_type;

        return $this;
    }

    /**
     * Gets tax_free_component
     *
     * @return float
     */
    public function getTaxFreeComponent()
    {
        return $this->container['tax_free_component'];
    }

    /**
     * Sets tax_free_component
     *
     * @param float $tax_free_component
     *
     * @return $this
     */
    public function setTaxFreeComponent($tax_free_component)
    {
        $this->container['tax_free_component'] = $tax_free_component;

        return $this;
    }

    /**
     * Gets taxable_component
     *
     * @return float
     */
    public function getTaxableComponent()
    {
        return $this->container['taxable_component'];
    }

    /**
     * Sets taxable_component
     *
     * @param float $taxable_component
     *
     * @return $this
     */
    public function setTaxableComponent($taxable_component)
    {
        $this->container['taxable_component'] = $taxable_component;

        return $this;
    }

    /**
     * Gets tax_withheld
     *
     * @return float
     */
    public function getTaxWithheld()
    {
        return $this->container['tax_withheld'];
    }

    /**
     * Sets tax_withheld
     *
     * @param float $tax_withheld
     *
     * @return $this
     */
    public function setTaxWithheld($tax_withheld)
    {
        $this->container['tax_withheld'] = $tax_withheld;

        return $this;
    }

    /**
     * Gets lump_sum_d
     *
     * @return float
     */
    public function getLumpSumD()
    {
        return $this->container['lump_sum_d'];
    }

    /**
     * Sets lump_sum_d
     *
     * @param float $lump_sum_d
     *
     * @return $this
     */
    public function setLumpSumD($lump_sum_d)
    {
        $this->container['lump_sum_d'] = $lump_sum_d;

        return $this;
    }

    /**
     * Gets is_amended
     *
     * @return bool
     */
    public function getIsAmended()
    {
        return $this->container['is_amended'];
    }

    /**
     * Sets is_amended
     *
     * @param bool $is_amended
     *
     * @return $this
     */
    public function setIsAmended($is_amended)
    {
        $this->container['is_amended'] = $is_amended;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime $payment_date
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets generate_payment_summary
     *
     * @return bool
     */
    public function getGeneratePaymentSummary()
    {
        return $this->container['generate_payment_summary'];
    }

    /**
     * Sets generate_payment_summary
     *
     * @param bool $generate_payment_summary
     *
     * @return $this
     */
    public function setGeneratePaymentSummary($generate_payment_summary)
    {
        $this->container['generate_payment_summary'] = $generate_payment_summary;

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
