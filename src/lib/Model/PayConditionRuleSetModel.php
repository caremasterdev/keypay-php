<?php
/**
 * PayConditionRuleSetModel
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
 * PayConditionRuleSetModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayConditionRuleSetModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayConditionRuleSetModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'period_type' => 'string',
        'day_of_week_ending' => 'int',
        'day_of_month_ending' => 'int',
        'period_ending' => '\DateTime',
        'shift_consolidation_option' => 'string',
        'shift_consolidation_threshold' => 'string',
        'rules_json' => 'string',
        'disabled_rules' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'description' => null,
        'period_type' => null,
        'day_of_week_ending' => 'int32',
        'day_of_month_ending' => 'int32',
        'period_ending' => 'date-time',
        'shift_consolidation_option' => null,
        'shift_consolidation_threshold' => null,
        'rules_json' => null,
        'disabled_rules' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'description' => false,
		'period_type' => false,
		'day_of_week_ending' => false,
		'day_of_month_ending' => false,
		'period_ending' => false,
		'shift_consolidation_option' => false,
		'shift_consolidation_threshold' => false,
		'rules_json' => false,
		'disabled_rules' => false
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
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'period_type' => 'periodType',
        'day_of_week_ending' => 'dayOfWeekEnding',
        'day_of_month_ending' => 'dayOfMonthEnding',
        'period_ending' => 'periodEnding',
        'shift_consolidation_option' => 'shiftConsolidationOption',
        'shift_consolidation_threshold' => 'shiftConsolidationThreshold',
        'rules_json' => 'rulesJson',
        'disabled_rules' => 'disabledRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'period_type' => 'setPeriodType',
        'day_of_week_ending' => 'setDayOfWeekEnding',
        'day_of_month_ending' => 'setDayOfMonthEnding',
        'period_ending' => 'setPeriodEnding',
        'shift_consolidation_option' => 'setShiftConsolidationOption',
        'shift_consolidation_threshold' => 'setShiftConsolidationThreshold',
        'rules_json' => 'setRulesJson',
        'disabled_rules' => 'setDisabledRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'period_type' => 'getPeriodType',
        'day_of_week_ending' => 'getDayOfWeekEnding',
        'day_of_month_ending' => 'getDayOfMonthEnding',
        'period_ending' => 'getPeriodEnding',
        'shift_consolidation_option' => 'getShiftConsolidationOption',
        'shift_consolidation_threshold' => 'getShiftConsolidationThreshold',
        'rules_json' => 'getRulesJson',
        'disabled_rules' => 'getDisabledRules'
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

    public const PERIOD_TYPE_WEEKLY = 'Weekly';
    public const PERIOD_TYPE_FORTNIGHTLY = 'Fortnightly';
    public const PERIOD_TYPE_MONTHLY = 'Monthly';
    public const PERIOD_TYPE_CALENDAR_MONTH = 'CalendarMonth';
    public const PERIOD_TYPE_FOUR_WEEKLY = 'FourWeekly';
    public const PERIOD_TYPE_SIX_WEEKLY = 'SixWeekly';
    public const PERIOD_TYPE_THREE_WEEKLY = 'ThreeWeekly';
    public const PERIOD_TYPE_EIGHT_WEEKLY = 'EightWeekly';
    public const SHIFT_CONSOLIDATION_OPTION_NONE = 'None';
    public const SHIFT_CONSOLIDATION_OPTION_DURATION = 'Duration';
    public const SHIFT_CONSOLIDATION_OPTION_SAME_DAY = 'SameDay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_WEEKLY,
            self::PERIOD_TYPE_FORTNIGHTLY,
            self::PERIOD_TYPE_MONTHLY,
            self::PERIOD_TYPE_CALENDAR_MONTH,
            self::PERIOD_TYPE_FOUR_WEEKLY,
            self::PERIOD_TYPE_SIX_WEEKLY,
            self::PERIOD_TYPE_THREE_WEEKLY,
            self::PERIOD_TYPE_EIGHT_WEEKLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShiftConsolidationOptionAllowableValues()
    {
        return [
            self::SHIFT_CONSOLIDATION_OPTION_NONE,
            self::SHIFT_CONSOLIDATION_OPTION_DURATION,
            self::SHIFT_CONSOLIDATION_OPTION_SAME_DAY,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('period_type', $data ?? [], null);
        $this->setIfExists('day_of_week_ending', $data ?? [], null);
        $this->setIfExists('day_of_month_ending', $data ?? [], null);
        $this->setIfExists('period_ending', $data ?? [], null);
        $this->setIfExists('shift_consolidation_option', $data ?? [], null);
        $this->setIfExists('shift_consolidation_threshold', $data ?? [], null);
        $this->setIfExists('rules_json', $data ?? [], null);
        $this->setIfExists('disabled_rules', $data ?? [], null);
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

        $allowedValues = $this->getPeriodTypeAllowableValues();
        if (!is_null($this->container['period_type']) && !in_array($this->container['period_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'period_type', must be one of '%s'",
                $this->container['period_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getShiftConsolidationOptionAllowableValues();
        if (!is_null($this->container['shift_consolidation_option']) && !in_array($this->container['shift_consolidation_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shift_consolidation_option', must be one of '%s'",
                $this->container['shift_consolidation_option'],
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets period_type
     *
     * @return string|null
     */
    public function getPeriodType()
    {
        return $this->container['period_type'];
    }

    /**
     * Sets period_type
     *
     * @param string|null $period_type 
     *
     * @return self
     */
    public function setPeriodType($period_type)
    {
        if (is_null($period_type)) {
            throw new \InvalidArgumentException('non-nullable period_type cannot be null');
        }
        $allowedValues = $this->getPeriodTypeAllowableValues();
        if (!in_array($period_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'period_type', must be one of '%s'",
                    $period_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['period_type'] = $period_type;

        return $this;
    }

    /**
     * Gets day_of_week_ending
     *
     * @return int|null
     */
    public function getDayOfWeekEnding()
    {
        return $this->container['day_of_week_ending'];
    }

    /**
     * Sets day_of_week_ending
     *
     * @param int|null $day_of_week_ending 
     *
     * @return self
     */
    public function setDayOfWeekEnding($day_of_week_ending)
    {
        if (is_null($day_of_week_ending)) {
            throw new \InvalidArgumentException('non-nullable day_of_week_ending cannot be null');
        }
        $this->container['day_of_week_ending'] = $day_of_week_ending;

        return $this;
    }

    /**
     * Gets day_of_month_ending
     *
     * @return int|null
     */
    public function getDayOfMonthEnding()
    {
        return $this->container['day_of_month_ending'];
    }

    /**
     * Sets day_of_month_ending
     *
     * @param int|null $day_of_month_ending 
     *
     * @return self
     */
    public function setDayOfMonthEnding($day_of_month_ending)
    {
        if (is_null($day_of_month_ending)) {
            throw new \InvalidArgumentException('non-nullable day_of_month_ending cannot be null');
        }
        $this->container['day_of_month_ending'] = $day_of_month_ending;

        return $this;
    }

    /**
     * Gets period_ending
     *
     * @return \DateTime|null
     */
    public function getPeriodEnding()
    {
        return $this->container['period_ending'];
    }

    /**
     * Sets period_ending
     *
     * @param \DateTime|null $period_ending 
     *
     * @return self
     */
    public function setPeriodEnding($period_ending)
    {
        if (is_null($period_ending)) {
            throw new \InvalidArgumentException('non-nullable period_ending cannot be null');
        }
        $this->container['period_ending'] = $period_ending;

        return $this;
    }

    /**
     * Gets shift_consolidation_option
     *
     * @return string|null
     */
    public function getShiftConsolidationOption()
    {
        return $this->container['shift_consolidation_option'];
    }

    /**
     * Sets shift_consolidation_option
     *
     * @param string|null $shift_consolidation_option 
     *
     * @return self
     */
    public function setShiftConsolidationOption($shift_consolidation_option)
    {
        if (is_null($shift_consolidation_option)) {
            throw new \InvalidArgumentException('non-nullable shift_consolidation_option cannot be null');
        }
        $allowedValues = $this->getShiftConsolidationOptionAllowableValues();
        if (!in_array($shift_consolidation_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shift_consolidation_option', must be one of '%s'",
                    $shift_consolidation_option,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shift_consolidation_option'] = $shift_consolidation_option;

        return $this;
    }

    /**
     * Gets shift_consolidation_threshold
     *
     * @return string|null
     */
    public function getShiftConsolidationThreshold()
    {
        return $this->container['shift_consolidation_threshold'];
    }

    /**
     * Sets shift_consolidation_threshold
     *
     * @param string|null $shift_consolidation_threshold 
     *
     * @return self
     */
    public function setShiftConsolidationThreshold($shift_consolidation_threshold)
    {
        if (is_null($shift_consolidation_threshold)) {
            throw new \InvalidArgumentException('non-nullable shift_consolidation_threshold cannot be null');
        }
        $this->container['shift_consolidation_threshold'] = $shift_consolidation_threshold;

        return $this;
    }

    /**
     * Gets rules_json
     *
     * @return string|null
     */
    public function getRulesJson()
    {
        return $this->container['rules_json'];
    }

    /**
     * Sets rules_json
     *
     * @param string|null $rules_json 
     *
     * @return self
     */
    public function setRulesJson($rules_json)
    {
        if (is_null($rules_json)) {
            throw new \InvalidArgumentException('non-nullable rules_json cannot be null');
        }
        $this->container['rules_json'] = $rules_json;

        return $this;
    }

    /**
     * Gets disabled_rules
     *
     * @return string[]|null
     */
    public function getDisabledRules()
    {
        return $this->container['disabled_rules'];
    }

    /**
     * Sets disabled_rules
     *
     * @param string[]|null $disabled_rules 
     *
     * @return self
     */
    public function setDisabledRules($disabled_rules)
    {
        if (is_null($disabled_rules)) {
            throw new \InvalidArgumentException('non-nullable disabled_rules cannot be null');
        }
        $this->container['disabled_rules'] = $disabled_rules;

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


