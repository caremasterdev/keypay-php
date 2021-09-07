<?php
/**
 * ShiftCostingsResponseShiftModel
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
 * ShiftCostingsResponseShiftModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShiftCostingsResponseShiftModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShiftCostingsResponseShiftModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_id' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'cost' => 'double',
        'evaluation_results' => '\Swagger\Client\Model\RuleEvaluationResult[]',
        'consolidated_shifts' => 'string[]',
        'cost_breakdown' => '\Swagger\Client\Model\ShiftCostingBreakdownModel[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_id' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'cost' => 'double',
        'evaluation_results' => null,
        'consolidated_shifts' => null,
        'cost_breakdown' => null,
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
        'external_id' => 'externalId',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'cost' => 'cost',
        'evaluation_results' => 'evaluationResults',
        'consolidated_shifts' => 'consolidatedShifts',
        'cost_breakdown' => 'costBreakdown',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_id' => 'setExternalId',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'cost' => 'setCost',
        'evaluation_results' => 'setEvaluationResults',
        'consolidated_shifts' => 'setConsolidatedShifts',
        'cost_breakdown' => 'setCostBreakdown',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_id' => 'getExternalId',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'cost' => 'getCost',
        'evaluation_results' => 'getEvaluationResults',
        'consolidated_shifts' => 'getConsolidatedShifts',
        'cost_breakdown' => 'getCostBreakdown',
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
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['evaluation_results'] = isset($data['evaluation_results']) ? $data['evaluation_results'] : null;
        $this->container['consolidated_shifts'] = isset($data['consolidated_shifts']) ? $data['consolidated_shifts'] : null;
        $this->container['cost_breakdown'] = isset($data['cost_breakdown']) ? $data['cost_breakdown'] : null;
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
     * Gets start_time
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime $start_time
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime $end_time
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets evaluation_results
     *
     * @return \Swagger\Client\Model\RuleEvaluationResult[]
     */
    public function getEvaluationResults()
    {
        return $this->container['evaluation_results'];
    }

    /**
     * Sets evaluation_results
     *
     * @param \Swagger\Client\Model\RuleEvaluationResult[] $evaluation_results
     *
     * @return $this
     */
    public function setEvaluationResults($evaluation_results)
    {
        $this->container['evaluation_results'] = $evaluation_results;

        return $this;
    }

    /**
     * Gets consolidated_shifts
     *
     * @return string[]
     */
    public function getConsolidatedShifts()
    {
        return $this->container['consolidated_shifts'];
    }

    /**
     * Sets consolidated_shifts
     *
     * @param string[] $consolidated_shifts
     *
     * @return $this
     */
    public function setConsolidatedShifts($consolidated_shifts)
    {
        $this->container['consolidated_shifts'] = $consolidated_shifts;

        return $this;
    }

    /**
     * Gets cost_breakdown
     *
     * @return \Swagger\Client\Model\ShiftCostingBreakdownModel[]
     */
    public function getCostBreakdown()
    {
        return $this->container['cost_breakdown'];
    }

    /**
     * Sets cost_breakdown
     *
     * @param \Swagger\Client\Model\ShiftCostingBreakdownModel[] $cost_breakdown
     *
     * @return $this
     */
    public function setCostBreakdown($cost_breakdown)
    {
        $this->container['cost_breakdown'] = $cost_breakdown;

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
