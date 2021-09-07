<?php
/**
 * BankAccountEditModel
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
 * BankAccountEditModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BankAccountEditModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BankAccountEditModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'bsb' => 'string',
        'account_name' => 'string',
        'account_number' => 'string',
        'allocated_percentage' => 'double',
        'fixed_amount' => 'double',
        'external_reference_id' => 'string',
        'source' => 'string',
        'allocate_balance' => 'bool',
        'is_employee_editable' => 'bool',
        'can_be_deleted' => 'bool',
        'account_type' => 'string',
        'roll_number' => 'string',
        'bank_swift' => 'string',
        'branch_code' => 'string',
        'my_bank_code' => 'string',
        'my_other_bank_name' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'bsb' => null,
        'account_name' => null,
        'account_number' => null,
        'allocated_percentage' => 'double',
        'fixed_amount' => 'double',
        'external_reference_id' => null,
        'source' => null,
        'allocate_balance' => null,
        'is_employee_editable' => null,
        'can_be_deleted' => null,
        'account_type' => null,
        'roll_number' => null,
        'bank_swift' => null,
        'branch_code' => null,
        'my_bank_code' => null,
        'my_other_bank_name' => null,
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
        'bsb' => 'bsb',
        'account_name' => 'accountName',
        'account_number' => 'accountNumber',
        'allocated_percentage' => 'allocatedPercentage',
        'fixed_amount' => 'fixedAmount',
        'external_reference_id' => 'externalReferenceId',
        'source' => 'source',
        'allocate_balance' => 'allocateBalance',
        'is_employee_editable' => 'isEmployeeEditable',
        'can_be_deleted' => 'canBeDeleted',
        'account_type' => 'accountType',
        'roll_number' => 'rollNumber',
        'bank_swift' => 'bankSwift',
        'branch_code' => 'branchCode',
        'my_bank_code' => 'myBankCode',
        'my_other_bank_name' => 'myOtherBankName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bsb' => 'setBsb',
        'account_name' => 'setAccountName',
        'account_number' => 'setAccountNumber',
        'allocated_percentage' => 'setAllocatedPercentage',
        'fixed_amount' => 'setFixedAmount',
        'external_reference_id' => 'setExternalReferenceId',
        'source' => 'setSource',
        'allocate_balance' => 'setAllocateBalance',
        'is_employee_editable' => 'setIsEmployeeEditable',
        'can_be_deleted' => 'setCanBeDeleted',
        'account_type' => 'setAccountType',
        'roll_number' => 'setRollNumber',
        'bank_swift' => 'setBankSwift',
        'branch_code' => 'setBranchCode',
        'my_bank_code' => 'setMyBankCode',
        'my_other_bank_name' => 'setMyOtherBankName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bsb' => 'getBsb',
        'account_name' => 'getAccountName',
        'account_number' => 'getAccountNumber',
        'allocated_percentage' => 'getAllocatedPercentage',
        'fixed_amount' => 'getFixedAmount',
        'external_reference_id' => 'getExternalReferenceId',
        'source' => 'getSource',
        'allocate_balance' => 'getAllocateBalance',
        'is_employee_editable' => 'getIsEmployeeEditable',
        'can_be_deleted' => 'getCanBeDeleted',
        'account_type' => 'getAccountType',
        'roll_number' => 'getRollNumber',
        'bank_swift' => 'getBankSwift',
        'branch_code' => 'getBranchCode',
        'my_bank_code' => 'getMyBankCode',
        'my_other_bank_name' => 'getMyOtherBankName',
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

    public const SOURCE_NONE = 'None';
    public const SOURCE_SAASU = 'Saasu';
    public const SOURCE_XERO = 'Xero';
    public const SOURCE_MYOB = 'MYOB';
    public const SOURCE_DEPUTY = 'Deputy';
    public const SOURCE_EMPLOYEE_TIME_PUNCH = 'EmployeeTimePunch';
    public const SOURCE_CLICK_SUPER = 'ClickSuper';
    public const SOURCE_INTEGRATED_TIMESHEETS = 'IntegratedTimesheets';
    public const SOURCE_FILE_IMPORT = 'FileImport';
    public const SOURCE_FILE_EXPORT = 'FileExport';
    public const SOURCE_QUICK_BOOKS = 'QuickBooks';
    public const SOURCE_HARMONY = 'Harmony';
    public const SOURCE_AWARD_STORE = 'AwardStore';
    public const SOURCE_ATTACHE = 'Attache';
    public const SOURCE_INTEGRATED_ROSTERING = 'IntegratedRostering';
    public const SOURCE_RECKON_ACCOUNTS = 'ReckonAccounts';
    public const SOURCE_API = 'API';
    public const SOURCE_MICRO_POWER = 'MicroPower';
    public const SOURCE_ROSTER_LIVE = 'RosterLive';
    public const SOURCE_NET_SUITE = 'NetSuite';
    public const SOURCE_KOUNTA = 'Kounta';
    public const SOURCE_TIME_AND_ATTENDANCE_KIOSK = 'TimeAndAttendanceKiosk';
    public const SOURCE_DETAILED_FILE_EXPORT = 'DetailedFileExport';
    public const SOURCE_JONAS_PREMIER = 'JonasPremier';
    public const SOURCE_WAGE_EASY = 'WageEasy';
    public const SOURCE_MAESTRANO = 'Maestrano';
    public const SOURCE_WORK_ZONE = 'WorkZone';
    public const SOURCE_EMPLOYEE_PORTAL = 'EmployeePortal';
    public const SOURCE_ROSTER_TEMPLATE = 'RosterTemplate';
    public const SOURCE_ONBOARDING = 'Onboarding';
    public const SOURCE_ADMIN = 'Admin';
    public const SOURCE_WORK_ZONE_CLOCK_ON_OFF = 'WorkZoneClockOnOff';
    public const SOURCE_NET_SUITE_ONE_WORLD = 'NetSuiteOneWorld';
    public const SOURCE_SAGE50 = 'Sage50';
    public const SOURCE_PENSION_SYNC = 'PensionSync';
    public const SOURCE_FINANCIALS_OFFICE = 'FinancialsOffice';
    public const SOURCE_PRONTO_XI = 'ProntoXI';
    public const SOURCE_PAY_RUN_DEFAULT = 'PayRunDefault';
    public const SOURCE_STANDARD_WORK_DAY = 'StandardWorkDay';
    public const SOURCE_BEAM = 'Beam';
    public const SOURCE_PAY_RUN_AUTOMATION = 'PayRunAutomation';
    public const SOURCE_BUREAU_DASHBOARD = 'BureauDashboard';
    public const SOURCE_WIISE = 'Wiise';
    public const SOURCE_QBO_MIGRATION_TOOL = 'QBOMigrationTool';
    public const SOURCE_ABRIDGED_FILE_IMPORT = 'AbridgedFileImport';
    public const SOURCE_QBO_FORCED_MIGRATION = 'QBOForcedMigration';
    public const SOURCE_HMRC_DPS_UPDATE = 'HmrcDpsUpdate';
    public const SOURCE_HMRC_DPS_STUDENT_LOAN = 'HmrcDpsStudentLoan';
    public const SOURCE_HMRC_DPS_POST_GRAD_LOAN = 'HmrcDpsPostGradLoan';
    public const SOURCE_SAGE50_FILE_IMPORTER = 'Sage50FileImporter';
    public const SOURCE_FPS_FILE_IMPORTER = 'FPSFileImporter';
    public const SOURCE_O_AUTH = 'OAuth';
    public const SOURCE_FRESH_BOOKS = 'FreshBooks';
    public const SOURCE_STAR_FILE_IMPORTER = 'StarFileImporter';
    public const SOURCE_ACTIVE_CAMPAIGN = 'ActiveCampaign';
    public const SOURCE_SUMMARY_AND_DETAILS_EXPORT = 'SummaryAndDetailsExport';
    public const SOURCE_TELLEROO = 'Telleroo';
    public const SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD = 'EmployeeAdvancedHoursUpload';
    public const ACCOUNT_TYPE_ELECTRONIC = 'Electronic';
    public const ACCOUNT_TYPE_MANUAL_DEPOSIT = 'ManualDeposit';
    public const ACCOUNT_TYPE_CASH_OR_CHEQUE = 'CashOrCheque';
    public const ACCOUNT_TYPE_BPAY = 'Bpay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_NONE,
            self::SOURCE_SAASU,
            self::SOURCE_XERO,
            self::SOURCE_MYOB,
            self::SOURCE_DEPUTY,
            self::SOURCE_EMPLOYEE_TIME_PUNCH,
            self::SOURCE_CLICK_SUPER,
            self::SOURCE_INTEGRATED_TIMESHEETS,
            self::SOURCE_FILE_IMPORT,
            self::SOURCE_FILE_EXPORT,
            self::SOURCE_QUICK_BOOKS,
            self::SOURCE_HARMONY,
            self::SOURCE_AWARD_STORE,
            self::SOURCE_ATTACHE,
            self::SOURCE_INTEGRATED_ROSTERING,
            self::SOURCE_RECKON_ACCOUNTS,
            self::SOURCE_API,
            self::SOURCE_MICRO_POWER,
            self::SOURCE_ROSTER_LIVE,
            self::SOURCE_NET_SUITE,
            self::SOURCE_KOUNTA,
            self::SOURCE_TIME_AND_ATTENDANCE_KIOSK,
            self::SOURCE_DETAILED_FILE_EXPORT,
            self::SOURCE_JONAS_PREMIER,
            self::SOURCE_WAGE_EASY,
            self::SOURCE_MAESTRANO,
            self::SOURCE_WORK_ZONE,
            self::SOURCE_EMPLOYEE_PORTAL,
            self::SOURCE_ROSTER_TEMPLATE,
            self::SOURCE_ONBOARDING,
            self::SOURCE_ADMIN,
            self::SOURCE_WORK_ZONE_CLOCK_ON_OFF,
            self::SOURCE_NET_SUITE_ONE_WORLD,
            self::SOURCE_SAGE50,
            self::SOURCE_PENSION_SYNC,
            self::SOURCE_FINANCIALS_OFFICE,
            self::SOURCE_PRONTO_XI,
            self::SOURCE_PAY_RUN_DEFAULT,
            self::SOURCE_STANDARD_WORK_DAY,
            self::SOURCE_BEAM,
            self::SOURCE_PAY_RUN_AUTOMATION,
            self::SOURCE_BUREAU_DASHBOARD,
            self::SOURCE_WIISE,
            self::SOURCE_QBO_MIGRATION_TOOL,
            self::SOURCE_ABRIDGED_FILE_IMPORT,
            self::SOURCE_QBO_FORCED_MIGRATION,
            self::SOURCE_HMRC_DPS_UPDATE,
            self::SOURCE_HMRC_DPS_STUDENT_LOAN,
            self::SOURCE_HMRC_DPS_POST_GRAD_LOAN,
            self::SOURCE_SAGE50_FILE_IMPORTER,
            self::SOURCE_FPS_FILE_IMPORTER,
            self::SOURCE_O_AUTH,
            self::SOURCE_FRESH_BOOKS,
            self::SOURCE_STAR_FILE_IMPORTER,
            self::SOURCE_ACTIVE_CAMPAIGN,
            self::SOURCE_SUMMARY_AND_DETAILS_EXPORT,
            self::SOURCE_TELLEROO,
            self::SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_ELECTRONIC,
            self::ACCOUNT_TYPE_MANUAL_DEPOSIT,
            self::ACCOUNT_TYPE_CASH_OR_CHEQUE,
            self::ACCOUNT_TYPE_BPAY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['bsb'] = isset($data['bsb']) ? $data['bsb'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['allocated_percentage'] = isset($data['allocated_percentage']) ? $data['allocated_percentage'] : null;
        $this->container['fixed_amount'] = isset($data['fixed_amount']) ? $data['fixed_amount'] : null;
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['allocate_balance'] = isset($data['allocate_balance']) ? $data['allocate_balance'] : null;
        $this->container['is_employee_editable'] = isset($data['is_employee_editable']) ? $data['is_employee_editable'] : null;
        $this->container['can_be_deleted'] = isset($data['can_be_deleted']) ? $data['can_be_deleted'] : null;
        $this->container['account_type'] = isset($data['account_type']) ? $data['account_type'] : null;
        $this->container['roll_number'] = isset($data['roll_number']) ? $data['roll_number'] : null;
        $this->container['bank_swift'] = isset($data['bank_swift']) ? $data['bank_swift'] : null;
        $this->container['branch_code'] = isset($data['branch_code']) ? $data['branch_code'] : null;
        $this->container['my_bank_code'] = isset($data['my_bank_code']) ? $data['my_bank_code'] : null;
        $this->container['my_other_bank_name'] = isset($data['my_other_bank_name']) ? $data['my_other_bank_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSourceAllowableValues();
        if (! is_null($this->container['source']) && ! in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (! is_null($this->container['account_type']) && ! in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'account_type', must be one of '%s'",
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
     * Gets bsb
     *
     * @return string
     */
    public function getBsb()
    {
        return $this->container['bsb'];
    }

    /**
     * Sets bsb
     *
     * @param string $bsb
     *
     * @return $this
     */
    public function setBsb($bsb)
    {
        $this->container['bsb'] = $bsb;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string $account_number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets allocated_percentage
     *
     * @return float
     */
    public function getAllocatedPercentage()
    {
        return $this->container['allocated_percentage'];
    }

    /**
     * Sets allocated_percentage
     *
     * @param float $allocated_percentage
     *
     * @return $this
     */
    public function setAllocatedPercentage($allocated_percentage)
    {
        $this->container['allocated_percentage'] = $allocated_percentage;

        return $this;
    }

    /**
     * Gets fixed_amount
     *
     * @return float
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param float $fixed_amount
     *
     * @return $this
     */
    public function setFixedAmount($fixed_amount)
    {
        $this->container['fixed_amount'] = $fixed_amount;

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
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (! is_null($source) && ! in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets allocate_balance
     *
     * @return bool
     */
    public function getAllocateBalance()
    {
        return $this->container['allocate_balance'];
    }

    /**
     * Sets allocate_balance
     *
     * @param bool $allocate_balance
     *
     * @return $this
     */
    public function setAllocateBalance($allocate_balance)
    {
        $this->container['allocate_balance'] = $allocate_balance;

        return $this;
    }

    /**
     * Gets is_employee_editable
     *
     * @return bool
     */
    public function getIsEmployeeEditable()
    {
        return $this->container['is_employee_editable'];
    }

    /**
     * Sets is_employee_editable
     *
     * @param bool $is_employee_editable
     *
     * @return $this
     */
    public function setIsEmployeeEditable($is_employee_editable)
    {
        $this->container['is_employee_editable'] = $is_employee_editable;

        return $this;
    }

    /**
     * Gets can_be_deleted
     *
     * @return bool
     */
    public function getCanBeDeleted()
    {
        return $this->container['can_be_deleted'];
    }

    /**
     * Sets can_be_deleted
     *
     * @param bool $can_be_deleted
     *
     * @return $this
     */
    public function setCanBeDeleted($can_be_deleted)
    {
        $this->container['can_be_deleted'] = $can_be_deleted;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string $account_type
     *
     * @return $this
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (! is_null($account_type) && ! in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets roll_number
     *
     * @return string
     */
    public function getRollNumber()
    {
        return $this->container['roll_number'];
    }

    /**
     * Sets roll_number
     *
     * @param string $roll_number
     *
     * @return $this
     */
    public function setRollNumber($roll_number)
    {
        $this->container['roll_number'] = $roll_number;

        return $this;
    }

    /**
     * Gets bank_swift
     *
     * @return string
     */
    public function getBankSwift()
    {
        return $this->container['bank_swift'];
    }

    /**
     * Sets bank_swift
     *
     * @param string $bank_swift
     *
     * @return $this
     */
    public function setBankSwift($bank_swift)
    {
        $this->container['bank_swift'] = $bank_swift;

        return $this;
    }

    /**
     * Gets branch_code
     *
     * @return string
     */
    public function getBranchCode()
    {
        return $this->container['branch_code'];
    }

    /**
     * Sets branch_code
     *
     * @param string $branch_code
     *
     * @return $this
     */
    public function setBranchCode($branch_code)
    {
        $this->container['branch_code'] = $branch_code;

        return $this;
    }

    /**
     * Gets my_bank_code
     *
     * @return string
     */
    public function getMyBankCode()
    {
        return $this->container['my_bank_code'];
    }

    /**
     * Sets my_bank_code
     *
     * @param string $my_bank_code
     *
     * @return $this
     */
    public function setMyBankCode($my_bank_code)
    {
        $this->container['my_bank_code'] = $my_bank_code;

        return $this;
    }

    /**
     * Gets my_other_bank_name
     *
     * @return string
     */
    public function getMyOtherBankName()
    {
        return $this->container['my_other_bank_name'];
    }

    /**
     * Sets my_other_bank_name
     *
     * @param string $my_other_bank_name
     *
     * @return $this
     */
    public function setMyOtherBankName($my_other_bank_name)
    {
        $this->container['my_other_bank_name'] = $my_other_bank_name;

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
