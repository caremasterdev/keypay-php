<?php
/**
 * AuLeaveAllowanceTemplateLeaveCategoryApiModel
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AuLeaveAllowanceTemplateLeaveCategoryApiModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuLeaveAllowanceTemplateLeaveCategoryApiModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuLeaveAllowanceTemplateLeaveCategoryApiModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'leave_loading' => 'double',
        'contingent_period' => 'double',
        'entitlement_period' => 'double',
        'unit_type' => 'string',
        'leave_unit_type' => 'string',
        'accrual_rule_leave_year_offset_amount' => 'int',
        'leave_category_id' => 'int',
        'leave_category_name' => 'string',
        'units' => 'double',
        'can_apply_for_leave' => 'bool',
        'leave_accrual_rule_accrual_type' => 'string',
        'leave_accrual_rule_cap_type' => 'string',
        'leave_accrual_rule_unit_cap' => 'double',
        'leave_accrual_rule_carry_over_behaviour' => 'string',
        'leave_accrual_rule_carry_over_amount' => 'double',
        'leave_accrual_rule_accrue_in_advance' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'leave_loading' => 'double',
        'contingent_period' => 'double',
        'entitlement_period' => 'double',
        'unit_type' => null,
        'leave_unit_type' => null,
        'accrual_rule_leave_year_offset_amount' => 'int32',
        'leave_category_id' => 'int32',
        'leave_category_name' => null,
        'units' => 'double',
        'can_apply_for_leave' => null,
        'leave_accrual_rule_accrual_type' => null,
        'leave_accrual_rule_cap_type' => null,
        'leave_accrual_rule_unit_cap' => 'double',
        'leave_accrual_rule_carry_over_behaviour' => null,
        'leave_accrual_rule_carry_over_amount' => 'double',
        'leave_accrual_rule_accrue_in_advance' => null
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
        'leave_loading' => 'leaveLoading',
        'contingent_period' => 'contingentPeriod',
        'entitlement_period' => 'entitlementPeriod',
        'unit_type' => 'unitType',
        'leave_unit_type' => 'leaveUnitType',
        'accrual_rule_leave_year_offset_amount' => 'accrualRuleLeaveYearOffsetAmount',
        'leave_category_id' => 'leaveCategoryId',
        'leave_category_name' => 'leaveCategoryName',
        'units' => 'units',
        'can_apply_for_leave' => 'canApplyForLeave',
        'leave_accrual_rule_accrual_type' => 'leaveAccrualRuleAccrualType',
        'leave_accrual_rule_cap_type' => 'leaveAccrualRuleCapType',
        'leave_accrual_rule_unit_cap' => 'leaveAccrualRuleUnitCap',
        'leave_accrual_rule_carry_over_behaviour' => 'leaveAccrualRuleCarryOverBehaviour',
        'leave_accrual_rule_carry_over_amount' => 'leaveAccrualRuleCarryOverAmount',
        'leave_accrual_rule_accrue_in_advance' => 'leaveAccrualRuleAccrueInAdvance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'leave_loading' => 'setLeaveLoading',
        'contingent_period' => 'setContingentPeriod',
        'entitlement_period' => 'setEntitlementPeriod',
        'unit_type' => 'setUnitType',
        'leave_unit_type' => 'setLeaveUnitType',
        'accrual_rule_leave_year_offset_amount' => 'setAccrualRuleLeaveYearOffsetAmount',
        'leave_category_id' => 'setLeaveCategoryId',
        'leave_category_name' => 'setLeaveCategoryName',
        'units' => 'setUnits',
        'can_apply_for_leave' => 'setCanApplyForLeave',
        'leave_accrual_rule_accrual_type' => 'setLeaveAccrualRuleAccrualType',
        'leave_accrual_rule_cap_type' => 'setLeaveAccrualRuleCapType',
        'leave_accrual_rule_unit_cap' => 'setLeaveAccrualRuleUnitCap',
        'leave_accrual_rule_carry_over_behaviour' => 'setLeaveAccrualRuleCarryOverBehaviour',
        'leave_accrual_rule_carry_over_amount' => 'setLeaveAccrualRuleCarryOverAmount',
        'leave_accrual_rule_accrue_in_advance' => 'setLeaveAccrualRuleAccrueInAdvance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'leave_loading' => 'getLeaveLoading',
        'contingent_period' => 'getContingentPeriod',
        'entitlement_period' => 'getEntitlementPeriod',
        'unit_type' => 'getUnitType',
        'leave_unit_type' => 'getLeaveUnitType',
        'accrual_rule_leave_year_offset_amount' => 'getAccrualRuleLeaveYearOffsetAmount',
        'leave_category_id' => 'getLeaveCategoryId',
        'leave_category_name' => 'getLeaveCategoryName',
        'units' => 'getUnits',
        'can_apply_for_leave' => 'getCanApplyForLeave',
        'leave_accrual_rule_accrual_type' => 'getLeaveAccrualRuleAccrualType',
        'leave_accrual_rule_cap_type' => 'getLeaveAccrualRuleCapType',
        'leave_accrual_rule_unit_cap' => 'getLeaveAccrualRuleUnitCap',
        'leave_accrual_rule_carry_over_behaviour' => 'getLeaveAccrualRuleCarryOverBehaviour',
        'leave_accrual_rule_carry_over_amount' => 'getLeaveAccrualRuleCarryOverAmount',
        'leave_accrual_rule_accrue_in_advance' => 'getLeaveAccrualRuleAccrueInAdvance'
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

    const UNIT_TYPE_DAYS = 'Days';
    const UNIT_TYPE_WEEKS = 'Weeks';
    const UNIT_TYPE_HOURS_PER_HOUR_WORKED = 'HoursPerHourWorked';
    const UNIT_TYPE_HOURS_PER_PAY_RUN = 'HoursPerPayRun';
    const UNIT_TYPE_STANDARD_DAYS = 'StandardDays';
    const UNIT_TYPE_STANDARD_WEEKS = 'StandardWeeks';
    const UNIT_TYPE_DAY_PER_CALENDAR_DAY = 'DayPerCalendarDay';
    const LEAVE_UNIT_TYPE_HOURS = 'Hours';
    const LEAVE_UNIT_TYPE_DAYS = 'Days';
    const LEAVE_UNIT_TYPE_WEEKS = 'Weeks';
    const LEAVE_ACCRUAL_RULE_ACCRUAL_TYPE_ONGOING = 'Ongoing';
    const LEAVE_ACCRUAL_RULE_ACCRUAL_TYPE_YEARLY = 'Yearly';
    const LEAVE_ACCRUAL_RULE_ACCRUAL_TYPE_BASED_ON_LENGTH_OF_SERVICE = 'BasedOnLengthOfService';
    const LEAVE_ACCRUAL_RULE_CAP_TYPE_NOT_LIMITED = 'NotLimited';
    const LEAVE_ACCRUAL_RULE_CAP_TYPE_LIMITED = 'Limited';
    const LEAVE_ACCRUAL_RULE_CARRY_OVER_BEHAVIOUR_CARRY_ENTIRE_AMOUNT = 'CarryEntireAmount';
    const LEAVE_ACCRUAL_RULE_CARRY_OVER_BEHAVIOUR_CARRY_HOURS = 'CarryHours';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitTypeAllowableValues()
    {
        return [
            self::UNIT_TYPE_DAYS,
            self::UNIT_TYPE_WEEKS,
            self::UNIT_TYPE_HOURS_PER_HOUR_WORKED,
            self::UNIT_TYPE_HOURS_PER_PAY_RUN,
            self::UNIT_TYPE_STANDARD_DAYS,
            self::UNIT_TYPE_STANDARD_WEEKS,
            self::UNIT_TYPE_DAY_PER_CALENDAR_DAY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveUnitTypeAllowableValues()
    {
        return [
            self::LEAVE_UNIT_TYPE_HOURS,
            self::LEAVE_UNIT_TYPE_DAYS,
            self::LEAVE_UNIT_TYPE_WEEKS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveAccrualRuleAccrualTypeAllowableValues()
    {
        return [
            self::LEAVE_ACCRUAL_RULE_ACCRUAL_TYPE_ONGOING,
            self::LEAVE_ACCRUAL_RULE_ACCRUAL_TYPE_YEARLY,
            self::LEAVE_ACCRUAL_RULE_ACCRUAL_TYPE_BASED_ON_LENGTH_OF_SERVICE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveAccrualRuleCapTypeAllowableValues()
    {
        return [
            self::LEAVE_ACCRUAL_RULE_CAP_TYPE_NOT_LIMITED,
            self::LEAVE_ACCRUAL_RULE_CAP_TYPE_LIMITED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeaveAccrualRuleCarryOverBehaviourAllowableValues()
    {
        return [
            self::LEAVE_ACCRUAL_RULE_CARRY_OVER_BEHAVIOUR_CARRY_ENTIRE_AMOUNT,
            self::LEAVE_ACCRUAL_RULE_CARRY_OVER_BEHAVIOUR_CARRY_HOURS,
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
        $this->container['leave_loading'] = isset($data['leave_loading']) ? $data['leave_loading'] : null;
        $this->container['contingent_period'] = isset($data['contingent_period']) ? $data['contingent_period'] : null;
        $this->container['entitlement_period'] = isset($data['entitlement_period']) ? $data['entitlement_period'] : null;
        $this->container['unit_type'] = isset($data['unit_type']) ? $data['unit_type'] : null;
        $this->container['leave_unit_type'] = isset($data['leave_unit_type']) ? $data['leave_unit_type'] : null;
        $this->container['accrual_rule_leave_year_offset_amount'] = isset($data['accrual_rule_leave_year_offset_amount']) ? $data['accrual_rule_leave_year_offset_amount'] : null;
        $this->container['leave_category_id'] = isset($data['leave_category_id']) ? $data['leave_category_id'] : null;
        $this->container['leave_category_name'] = isset($data['leave_category_name']) ? $data['leave_category_name'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['can_apply_for_leave'] = isset($data['can_apply_for_leave']) ? $data['can_apply_for_leave'] : null;
        $this->container['leave_accrual_rule_accrual_type'] = isset($data['leave_accrual_rule_accrual_type']) ? $data['leave_accrual_rule_accrual_type'] : null;
        $this->container['leave_accrual_rule_cap_type'] = isset($data['leave_accrual_rule_cap_type']) ? $data['leave_accrual_rule_cap_type'] : null;
        $this->container['leave_accrual_rule_unit_cap'] = isset($data['leave_accrual_rule_unit_cap']) ? $data['leave_accrual_rule_unit_cap'] : null;
        $this->container['leave_accrual_rule_carry_over_behaviour'] = isset($data['leave_accrual_rule_carry_over_behaviour']) ? $data['leave_accrual_rule_carry_over_behaviour'] : null;
        $this->container['leave_accrual_rule_carry_over_amount'] = isset($data['leave_accrual_rule_carry_over_amount']) ? $data['leave_accrual_rule_carry_over_amount'] : null;
        $this->container['leave_accrual_rule_accrue_in_advance'] = isset($data['leave_accrual_rule_accrue_in_advance']) ? $data['leave_accrual_rule_accrue_in_advance'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitTypeAllowableValues();
        if (!is_null($this->container['unit_type']) && !in_array($this->container['unit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveUnitTypeAllowableValues();
        if (!is_null($this->container['leave_unit_type']) && !in_array($this->container['leave_unit_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leave_unit_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveAccrualRuleAccrualTypeAllowableValues();
        if (!is_null($this->container['leave_accrual_rule_accrual_type']) && !in_array($this->container['leave_accrual_rule_accrual_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leave_accrual_rule_accrual_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveAccrualRuleCapTypeAllowableValues();
        if (!is_null($this->container['leave_accrual_rule_cap_type']) && !in_array($this->container['leave_accrual_rule_cap_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leave_accrual_rule_cap_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLeaveAccrualRuleCarryOverBehaviourAllowableValues();
        if (!is_null($this->container['leave_accrual_rule_carry_over_behaviour']) && !in_array($this->container['leave_accrual_rule_carry_over_behaviour'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leave_accrual_rule_carry_over_behaviour', must be one of '%s'",
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
     * Gets leave_loading
     *
     * @return double
     */
    public function getLeaveLoading()
    {
        return $this->container['leave_loading'];
    }

    /**
     * Sets leave_loading
     *
     * @param double $leave_loading 
     *
     * @return $this
     */
    public function setLeaveLoading($leave_loading)
    {
        $this->container['leave_loading'] = $leave_loading;

        return $this;
    }

    /**
     * Gets contingent_period
     *
     * @return double
     */
    public function getContingentPeriod()
    {
        return $this->container['contingent_period'];
    }

    /**
     * Sets contingent_period
     *
     * @param double $contingent_period 
     *
     * @return $this
     */
    public function setContingentPeriod($contingent_period)
    {
        $this->container['contingent_period'] = $contingent_period;

        return $this;
    }

    /**
     * Gets entitlement_period
     *
     * @return double
     */
    public function getEntitlementPeriod()
    {
        return $this->container['entitlement_period'];
    }

    /**
     * Sets entitlement_period
     *
     * @param double $entitlement_period 
     *
     * @return $this
     */
    public function setEntitlementPeriod($entitlement_period)
    {
        $this->container['entitlement_period'] = $entitlement_period;

        return $this;
    }

    /**
     * Gets unit_type
     *
     * @return string
     */
    public function getUnitType()
    {
        return $this->container['unit_type'];
    }

    /**
     * Sets unit_type
     *
     * @param string $unit_type 
     *
     * @return $this
     */
    public function setUnitType($unit_type)
    {
        $allowedValues = $this->getUnitTypeAllowableValues();
        if (!is_null($unit_type) && !in_array($unit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit_type'] = $unit_type;

        return $this;
    }

    /**
     * Gets leave_unit_type
     *
     * @return string
     */
    public function getLeaveUnitType()
    {
        return $this->container['leave_unit_type'];
    }

    /**
     * Sets leave_unit_type
     *
     * @param string $leave_unit_type 
     *
     * @return $this
     */
    public function setLeaveUnitType($leave_unit_type)
    {
        $allowedValues = $this->getLeaveUnitTypeAllowableValues();
        if (!is_null($leave_unit_type) && !in_array($leave_unit_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leave_unit_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_unit_type'] = $leave_unit_type;

        return $this;
    }

    /**
     * Gets accrual_rule_leave_year_offset_amount
     *
     * @return int
     */
    public function getAccrualRuleLeaveYearOffsetAmount()
    {
        return $this->container['accrual_rule_leave_year_offset_amount'];
    }

    /**
     * Sets accrual_rule_leave_year_offset_amount
     *
     * @param int $accrual_rule_leave_year_offset_amount 
     *
     * @return $this
     */
    public function setAccrualRuleLeaveYearOffsetAmount($accrual_rule_leave_year_offset_amount)
    {
        $this->container['accrual_rule_leave_year_offset_amount'] = $accrual_rule_leave_year_offset_amount;

        return $this;
    }

    /**
     * Gets leave_category_id
     *
     * @return int
     */
    public function getLeaveCategoryId()
    {
        return $this->container['leave_category_id'];
    }

    /**
     * Sets leave_category_id
     *
     * @param int $leave_category_id 
     *
     * @return $this
     */
    public function setLeaveCategoryId($leave_category_id)
    {
        $this->container['leave_category_id'] = $leave_category_id;

        return $this;
    }

    /**
     * Gets leave_category_name
     *
     * @return string
     */
    public function getLeaveCategoryName()
    {
        return $this->container['leave_category_name'];
    }

    /**
     * Sets leave_category_name
     *
     * @param string $leave_category_name 
     *
     * @return $this
     */
    public function setLeaveCategoryName($leave_category_name)
    {
        $this->container['leave_category_name'] = $leave_category_name;

        return $this;
    }

    /**
     * Gets units
     *
     * @return double
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param double $units 
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets can_apply_for_leave
     *
     * @return bool
     */
    public function getCanApplyForLeave()
    {
        return $this->container['can_apply_for_leave'];
    }

    /**
     * Sets can_apply_for_leave
     *
     * @param bool $can_apply_for_leave 
     *
     * @return $this
     */
    public function setCanApplyForLeave($can_apply_for_leave)
    {
        $this->container['can_apply_for_leave'] = $can_apply_for_leave;

        return $this;
    }

    /**
     * Gets leave_accrual_rule_accrual_type
     *
     * @return string
     */
    public function getLeaveAccrualRuleAccrualType()
    {
        return $this->container['leave_accrual_rule_accrual_type'];
    }

    /**
     * Sets leave_accrual_rule_accrual_type
     *
     * @param string $leave_accrual_rule_accrual_type 
     *
     * @return $this
     */
    public function setLeaveAccrualRuleAccrualType($leave_accrual_rule_accrual_type)
    {
        $allowedValues = $this->getLeaveAccrualRuleAccrualTypeAllowableValues();
        if (!is_null($leave_accrual_rule_accrual_type) && !in_array($leave_accrual_rule_accrual_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leave_accrual_rule_accrual_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_accrual_rule_accrual_type'] = $leave_accrual_rule_accrual_type;

        return $this;
    }

    /**
     * Gets leave_accrual_rule_cap_type
     *
     * @return string
     */
    public function getLeaveAccrualRuleCapType()
    {
        return $this->container['leave_accrual_rule_cap_type'];
    }

    /**
     * Sets leave_accrual_rule_cap_type
     *
     * @param string $leave_accrual_rule_cap_type 
     *
     * @return $this
     */
    public function setLeaveAccrualRuleCapType($leave_accrual_rule_cap_type)
    {
        $allowedValues = $this->getLeaveAccrualRuleCapTypeAllowableValues();
        if (!is_null($leave_accrual_rule_cap_type) && !in_array($leave_accrual_rule_cap_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leave_accrual_rule_cap_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_accrual_rule_cap_type'] = $leave_accrual_rule_cap_type;

        return $this;
    }

    /**
     * Gets leave_accrual_rule_unit_cap
     *
     * @return double
     */
    public function getLeaveAccrualRuleUnitCap()
    {
        return $this->container['leave_accrual_rule_unit_cap'];
    }

    /**
     * Sets leave_accrual_rule_unit_cap
     *
     * @param double $leave_accrual_rule_unit_cap 
     *
     * @return $this
     */
    public function setLeaveAccrualRuleUnitCap($leave_accrual_rule_unit_cap)
    {
        $this->container['leave_accrual_rule_unit_cap'] = $leave_accrual_rule_unit_cap;

        return $this;
    }

    /**
     * Gets leave_accrual_rule_carry_over_behaviour
     *
     * @return string
     */
    public function getLeaveAccrualRuleCarryOverBehaviour()
    {
        return $this->container['leave_accrual_rule_carry_over_behaviour'];
    }

    /**
     * Sets leave_accrual_rule_carry_over_behaviour
     *
     * @param string $leave_accrual_rule_carry_over_behaviour 
     *
     * @return $this
     */
    public function setLeaveAccrualRuleCarryOverBehaviour($leave_accrual_rule_carry_over_behaviour)
    {
        $allowedValues = $this->getLeaveAccrualRuleCarryOverBehaviourAllowableValues();
        if (!is_null($leave_accrual_rule_carry_over_behaviour) && !in_array($leave_accrual_rule_carry_over_behaviour, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'leave_accrual_rule_carry_over_behaviour', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['leave_accrual_rule_carry_over_behaviour'] = $leave_accrual_rule_carry_over_behaviour;

        return $this;
    }

    /**
     * Gets leave_accrual_rule_carry_over_amount
     *
     * @return double
     */
    public function getLeaveAccrualRuleCarryOverAmount()
    {
        return $this->container['leave_accrual_rule_carry_over_amount'];
    }

    /**
     * Sets leave_accrual_rule_carry_over_amount
     *
     * @param double $leave_accrual_rule_carry_over_amount 
     *
     * @return $this
     */
    public function setLeaveAccrualRuleCarryOverAmount($leave_accrual_rule_carry_over_amount)
    {
        $this->container['leave_accrual_rule_carry_over_amount'] = $leave_accrual_rule_carry_over_amount;

        return $this;
    }

    /**
     * Gets leave_accrual_rule_accrue_in_advance
     *
     * @return bool
     */
    public function getLeaveAccrualRuleAccrueInAdvance()
    {
        return $this->container['leave_accrual_rule_accrue_in_advance'];
    }

    /**
     * Sets leave_accrual_rule_accrue_in_advance
     *
     * @param bool $leave_accrual_rule_accrue_in_advance 
     *
     * @return $this
     */
    public function setLeaveAccrualRuleAccrueInAdvance($leave_accrual_rule_accrue_in_advance)
    {
        $this->container['leave_accrual_rule_accrue_in_advance'] = $leave_accrual_rule_accrue_in_advance;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
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
     * @param integer $offset Offset
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


