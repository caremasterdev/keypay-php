<?php
/**
 * MLCSuperReportExportModel
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
 * MLCSuperReportExportModel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MLCSuperReportExportModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MLCSuperReportExportModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'fund_code' => 'string',
        'spin' => 'string',
        'member_code' => 'string',
        'first_name' => 'string',
        'second_name' => 'string',
        'surname' => 'string',
        'title' => 'string',
        'gender' => 'string',
        'date_of_birth' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'suburb' => 'string',
        'state' => 'string',
        'postcode' => 'string',
        'telephone' => 'string',
        'mobile_phone' => 'string',
        'start_date' => 'string',
        'annual_salary' => 'string',
        'pay_group' => 'string',
        'benefit_category' => 'string',
        'end_date' => 'string',
        'super_guarantee' => 'string',
        'employer_additional' => 'string',
        'member_voluntary' => 'string',
        'salary_sacrifice' => 'string',
        'spouse_contribution' => 'string',
        'tax_file_number' => 'string',
        'employment_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'fund_code' => null,
        'spin' => null,
        'member_code' => null,
        'first_name' => null,
        'second_name' => null,
        'surname' => null,
        'title' => null,
        'gender' => null,
        'date_of_birth' => null,
        'address1' => null,
        'address2' => null,
        'suburb' => null,
        'state' => null,
        'postcode' => null,
        'telephone' => null,
        'mobile_phone' => null,
        'start_date' => null,
        'annual_salary' => null,
        'pay_group' => null,
        'benefit_category' => null,
        'end_date' => null,
        'super_guarantee' => null,
        'employer_additional' => null,
        'member_voluntary' => null,
        'salary_sacrifice' => null,
        'spouse_contribution' => null,
        'tax_file_number' => null,
        'employment_status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
		'fund_code' => false,
		'spin' => false,
		'member_code' => false,
		'first_name' => false,
		'second_name' => false,
		'surname' => false,
		'title' => false,
		'gender' => false,
		'date_of_birth' => false,
		'address1' => false,
		'address2' => false,
		'suburb' => false,
		'state' => false,
		'postcode' => false,
		'telephone' => false,
		'mobile_phone' => false,
		'start_date' => false,
		'annual_salary' => false,
		'pay_group' => false,
		'benefit_category' => false,
		'end_date' => false,
		'super_guarantee' => false,
		'employer_additional' => false,
		'member_voluntary' => false,
		'salary_sacrifice' => false,
		'spouse_contribution' => false,
		'tax_file_number' => false,
		'employment_status' => false
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
        'code' => 'code',
        'fund_code' => 'fundCode',
        'spin' => 'spin',
        'member_code' => 'memberCode',
        'first_name' => 'firstName',
        'second_name' => 'secondName',
        'surname' => 'surname',
        'title' => 'title',
        'gender' => 'gender',
        'date_of_birth' => 'dateOfBirth',
        'address1' => 'address1',
        'address2' => 'address2',
        'suburb' => 'suburb',
        'state' => 'state',
        'postcode' => 'postcode',
        'telephone' => 'telephone',
        'mobile_phone' => 'mobilePhone',
        'start_date' => 'startDate',
        'annual_salary' => 'annualSalary',
        'pay_group' => 'payGroup',
        'benefit_category' => 'benefitCategory',
        'end_date' => 'endDate',
        'super_guarantee' => 'superGuarantee',
        'employer_additional' => 'employerAdditional',
        'member_voluntary' => 'memberVoluntary',
        'salary_sacrifice' => 'salarySacrifice',
        'spouse_contribution' => 'spouseContribution',
        'tax_file_number' => 'taxFileNumber',
        'employment_status' => 'employmentStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'fund_code' => 'setFundCode',
        'spin' => 'setSpin',
        'member_code' => 'setMemberCode',
        'first_name' => 'setFirstName',
        'second_name' => 'setSecondName',
        'surname' => 'setSurname',
        'title' => 'setTitle',
        'gender' => 'setGender',
        'date_of_birth' => 'setDateOfBirth',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'suburb' => 'setSuburb',
        'state' => 'setState',
        'postcode' => 'setPostcode',
        'telephone' => 'setTelephone',
        'mobile_phone' => 'setMobilePhone',
        'start_date' => 'setStartDate',
        'annual_salary' => 'setAnnualSalary',
        'pay_group' => 'setPayGroup',
        'benefit_category' => 'setBenefitCategory',
        'end_date' => 'setEndDate',
        'super_guarantee' => 'setSuperGuarantee',
        'employer_additional' => 'setEmployerAdditional',
        'member_voluntary' => 'setMemberVoluntary',
        'salary_sacrifice' => 'setSalarySacrifice',
        'spouse_contribution' => 'setSpouseContribution',
        'tax_file_number' => 'setTaxFileNumber',
        'employment_status' => 'setEmploymentStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'fund_code' => 'getFundCode',
        'spin' => 'getSpin',
        'member_code' => 'getMemberCode',
        'first_name' => 'getFirstName',
        'second_name' => 'getSecondName',
        'surname' => 'getSurname',
        'title' => 'getTitle',
        'gender' => 'getGender',
        'date_of_birth' => 'getDateOfBirth',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'suburb' => 'getSuburb',
        'state' => 'getState',
        'postcode' => 'getPostcode',
        'telephone' => 'getTelephone',
        'mobile_phone' => 'getMobilePhone',
        'start_date' => 'getStartDate',
        'annual_salary' => 'getAnnualSalary',
        'pay_group' => 'getPayGroup',
        'benefit_category' => 'getBenefitCategory',
        'end_date' => 'getEndDate',
        'super_guarantee' => 'getSuperGuarantee',
        'employer_additional' => 'getEmployerAdditional',
        'member_voluntary' => 'getMemberVoluntary',
        'salary_sacrifice' => 'getSalarySacrifice',
        'spouse_contribution' => 'getSpouseContribution',
        'tax_file_number' => 'getTaxFileNumber',
        'employment_status' => 'getEmploymentStatus'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('fund_code', $data ?? [], null);
        $this->setIfExists('spin', $data ?? [], null);
        $this->setIfExists('member_code', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('second_name', $data ?? [], null);
        $this->setIfExists('surname', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('date_of_birth', $data ?? [], null);
        $this->setIfExists('address1', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('suburb', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('postcode', $data ?? [], null);
        $this->setIfExists('telephone', $data ?? [], null);
        $this->setIfExists('mobile_phone', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('annual_salary', $data ?? [], null);
        $this->setIfExists('pay_group', $data ?? [], null);
        $this->setIfExists('benefit_category', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('super_guarantee', $data ?? [], null);
        $this->setIfExists('employer_additional', $data ?? [], null);
        $this->setIfExists('member_voluntary', $data ?? [], null);
        $this->setIfExists('salary_sacrifice', $data ?? [], null);
        $this->setIfExists('spouse_contribution', $data ?? [], null);
        $this->setIfExists('tax_file_number', $data ?? [], null);
        $this->setIfExists('employment_status', $data ?? [], null);
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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code 
     *
     * @return self
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets fund_code
     *
     * @return string|null
     */
    public function getFundCode()
    {
        return $this->container['fund_code'];
    }

    /**
     * Sets fund_code
     *
     * @param string|null $fund_code 
     *
     * @return self
     */
    public function setFundCode($fund_code)
    {
        if (is_null($fund_code)) {
            throw new \InvalidArgumentException('non-nullable fund_code cannot be null');
        }
        $this->container['fund_code'] = $fund_code;

        return $this;
    }

    /**
     * Gets spin
     *
     * @return string|null
     */
    public function getSpin()
    {
        return $this->container['spin'];
    }

    /**
     * Sets spin
     *
     * @param string|null $spin 
     *
     * @return self
     */
    public function setSpin($spin)
    {
        if (is_null($spin)) {
            throw new \InvalidArgumentException('non-nullable spin cannot be null');
        }
        $this->container['spin'] = $spin;

        return $this;
    }

    /**
     * Gets member_code
     *
     * @return string|null
     */
    public function getMemberCode()
    {
        return $this->container['member_code'];
    }

    /**
     * Sets member_code
     *
     * @param string|null $member_code 
     *
     * @return self
     */
    public function setMemberCode($member_code)
    {
        if (is_null($member_code)) {
            throw new \InvalidArgumentException('non-nullable member_code cannot be null');
        }
        $this->container['member_code'] = $member_code;

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
     * Gets second_name
     *
     * @return string|null
     */
    public function getSecondName()
    {
        return $this->container['second_name'];
    }

    /**
     * Sets second_name
     *
     * @param string|null $second_name 
     *
     * @return self
     */
    public function setSecondName($second_name)
    {
        if (is_null($second_name)) {
            throw new \InvalidArgumentException('non-nullable second_name cannot be null');
        }
        $this->container['second_name'] = $second_name;

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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

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
     * Gets date_of_birth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string|null $date_of_birth 
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
     * Gets address1
     *
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string|null $address1 
     *
     * @return self
     */
    public function setAddress1($address1)
    {
        if (is_null($address1)) {
            throw new \InvalidArgumentException('non-nullable address1 cannot be null');
        }
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 
     *
     * @return self
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets suburb
     *
     * @return string|null
     */
    public function getSuburb()
    {
        return $this->container['suburb'];
    }

    /**
     * Sets suburb
     *
     * @param string|null $suburb 
     *
     * @return self
     */
    public function setSuburb($suburb)
    {
        if (is_null($suburb)) {
            throw new \InvalidArgumentException('non-nullable suburb cannot be null');
        }
        $this->container['suburb'] = $suburb;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state 
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode 
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        if (is_null($postcode)) {
            throw new \InvalidArgumentException('non-nullable postcode cannot be null');
        }
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string|null $telephone 
     *
     * @return self
     */
    public function setTelephone($telephone)
    {
        if (is_null($telephone)) {
            throw new \InvalidArgumentException('non-nullable telephone cannot be null');
        }
        $this->container['telephone'] = $telephone;

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
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date 
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets annual_salary
     *
     * @return string|null
     */
    public function getAnnualSalary()
    {
        return $this->container['annual_salary'];
    }

    /**
     * Sets annual_salary
     *
     * @param string|null $annual_salary 
     *
     * @return self
     */
    public function setAnnualSalary($annual_salary)
    {
        if (is_null($annual_salary)) {
            throw new \InvalidArgumentException('non-nullable annual_salary cannot be null');
        }
        $this->container['annual_salary'] = $annual_salary;

        return $this;
    }

    /**
     * Gets pay_group
     *
     * @return string|null
     */
    public function getPayGroup()
    {
        return $this->container['pay_group'];
    }

    /**
     * Sets pay_group
     *
     * @param string|null $pay_group 
     *
     * @return self
     */
    public function setPayGroup($pay_group)
    {
        if (is_null($pay_group)) {
            throw new \InvalidArgumentException('non-nullable pay_group cannot be null');
        }
        $this->container['pay_group'] = $pay_group;

        return $this;
    }

    /**
     * Gets benefit_category
     *
     * @return string|null
     */
    public function getBenefitCategory()
    {
        return $this->container['benefit_category'];
    }

    /**
     * Sets benefit_category
     *
     * @param string|null $benefit_category 
     *
     * @return self
     */
    public function setBenefitCategory($benefit_category)
    {
        if (is_null($benefit_category)) {
            throw new \InvalidArgumentException('non-nullable benefit_category cannot be null');
        }
        $this->container['benefit_category'] = $benefit_category;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date 
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets super_guarantee
     *
     * @return string|null
     */
    public function getSuperGuarantee()
    {
        return $this->container['super_guarantee'];
    }

    /**
     * Sets super_guarantee
     *
     * @param string|null $super_guarantee 
     *
     * @return self
     */
    public function setSuperGuarantee($super_guarantee)
    {
        if (is_null($super_guarantee)) {
            throw new \InvalidArgumentException('non-nullable super_guarantee cannot be null');
        }
        $this->container['super_guarantee'] = $super_guarantee;

        return $this;
    }

    /**
     * Gets employer_additional
     *
     * @return string|null
     */
    public function getEmployerAdditional()
    {
        return $this->container['employer_additional'];
    }

    /**
     * Sets employer_additional
     *
     * @param string|null $employer_additional 
     *
     * @return self
     */
    public function setEmployerAdditional($employer_additional)
    {
        if (is_null($employer_additional)) {
            throw new \InvalidArgumentException('non-nullable employer_additional cannot be null');
        }
        $this->container['employer_additional'] = $employer_additional;

        return $this;
    }

    /**
     * Gets member_voluntary
     *
     * @return string|null
     */
    public function getMemberVoluntary()
    {
        return $this->container['member_voluntary'];
    }

    /**
     * Sets member_voluntary
     *
     * @param string|null $member_voluntary 
     *
     * @return self
     */
    public function setMemberVoluntary($member_voluntary)
    {
        if (is_null($member_voluntary)) {
            throw new \InvalidArgumentException('non-nullable member_voluntary cannot be null');
        }
        $this->container['member_voluntary'] = $member_voluntary;

        return $this;
    }

    /**
     * Gets salary_sacrifice
     *
     * @return string|null
     */
    public function getSalarySacrifice()
    {
        return $this->container['salary_sacrifice'];
    }

    /**
     * Sets salary_sacrifice
     *
     * @param string|null $salary_sacrifice 
     *
     * @return self
     */
    public function setSalarySacrifice($salary_sacrifice)
    {
        if (is_null($salary_sacrifice)) {
            throw new \InvalidArgumentException('non-nullable salary_sacrifice cannot be null');
        }
        $this->container['salary_sacrifice'] = $salary_sacrifice;

        return $this;
    }

    /**
     * Gets spouse_contribution
     *
     * @return string|null
     */
    public function getSpouseContribution()
    {
        return $this->container['spouse_contribution'];
    }

    /**
     * Sets spouse_contribution
     *
     * @param string|null $spouse_contribution 
     *
     * @return self
     */
    public function setSpouseContribution($spouse_contribution)
    {
        if (is_null($spouse_contribution)) {
            throw new \InvalidArgumentException('non-nullable spouse_contribution cannot be null');
        }
        $this->container['spouse_contribution'] = $spouse_contribution;

        return $this;
    }

    /**
     * Gets tax_file_number
     *
     * @return string|null
     */
    public function getTaxFileNumber()
    {
        return $this->container['tax_file_number'];
    }

    /**
     * Sets tax_file_number
     *
     * @param string|null $tax_file_number 
     *
     * @return self
     */
    public function setTaxFileNumber($tax_file_number)
    {
        if (is_null($tax_file_number)) {
            throw new \InvalidArgumentException('non-nullable tax_file_number cannot be null');
        }
        $this->container['tax_file_number'] = $tax_file_number;

        return $this;
    }

    /**
     * Gets employment_status
     *
     * @return string|null
     */
    public function getEmploymentStatus()
    {
        return $this->container['employment_status'];
    }

    /**
     * Sets employment_status
     *
     * @param string|null $employment_status 
     *
     * @return self
     */
    public function setEmploymentStatus($employment_status)
    {
        if (is_null($employment_status)) {
            throw new \InvalidArgumentException('non-nullable employment_status cannot be null');
        }
        $this->container['employment_status'] = $employment_status;

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


