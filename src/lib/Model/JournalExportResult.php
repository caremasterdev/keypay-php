<?php
/**
 * JournalExportResult
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
 * JournalExportResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class JournalExportResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JournalExportResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'message' => 'string',
        'journal_source' => 'string',
        'journal_external_reference_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'message' => null,
        'journal_source' => null,
        'journal_external_reference_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
		'message' => false,
		'journal_source' => false,
		'journal_external_reference_id' => false
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
        'status' => 'status',
        'message' => 'message',
        'journal_source' => 'journalSource',
        'journal_external_reference_id' => 'journalExternalReferenceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'message' => 'setMessage',
        'journal_source' => 'setJournalSource',
        'journal_external_reference_id' => 'setJournalExternalReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'message' => 'getMessage',
        'journal_source' => 'getJournalSource',
        'journal_external_reference_id' => 'getJournalExternalReferenceId'
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

    public const STATUS_NOT_EXPORTED = 'NotExported';
    public const STATUS_SUCCESS = 'Success';
    public const STATUS_FAILURE_UNKNOWN_ERROR = 'FailureUnknownError';
    public const STATUS_FAILURE_ACCOUNTS_NOT_CONFIGURED = 'FailureAccountsNotConfigured';
    public const STATUS_FAILURE_ITEMS_DELETED = 'FailureItemsDeleted';
    public const STATUS_FAILURE_ACCOUNT_PERIOD_CLOSED = 'FailureAccountPeriodClosed';
    public const STATUS_FAILURE_NOT_AUTHENTICATED = 'FailureNotAuthenticated';
    public const STATUS_FAILURE_ALREADY_EXPORTED = 'FailureAlreadyExported';
    public const STATUS_FAILURE_FUNCTION_DISABLED = 'FailureFunctionDisabled';
    public const STATUS_FAILURE_CANNOT_USE_ACCOUNTS_PAYABLE_ACCOUNT = 'FailureCannotUseAccountsPayableAccount';
    public const STATUS_FAILURE_VENDOR_MESSAGE = 'FailureVendorMessage';
    public const STATUS_FAILURE_INTERCOMPANY_LOAN_ACCOUNTS_NOT_CONFIGURED = 'FailureIntercompanyLoanAccountsNotConfigured';
    public const STATUS_FAILURE_GST_SETUP = 'FailureGSTSetup';
    public const STATUS_FAILURE_KNOWN_ERROR = 'FailureKnownError';
    public const STATUS_FAILURES_TENANT_NOT_SUPPLIED = 'FailuresTenantNotSupplied';
    public const STATUS_FAILURE_NO_JOURNAL_ID = 'FailureNoJournalId';
    public const STATUS_FAILURE_API_ERROR = 'FailureAPIError';
    public const STATUS_RESULT_UNKNOWN = 'ResultUnknown';
    public const JOURNAL_SOURCE_NONE = 'None';
    public const JOURNAL_SOURCE_SAASU = 'Saasu';
    public const JOURNAL_SOURCE_XERO = 'Xero';
    public const JOURNAL_SOURCE_MYOB = 'MYOB';
    public const JOURNAL_SOURCE_DEPUTY = 'Deputy';
    public const JOURNAL_SOURCE_EMPLOYEE_TIME_PUNCH = 'EmployeeTimePunch';
    public const JOURNAL_SOURCE_CLICK_SUPER = 'ClickSuper';
    public const JOURNAL_SOURCE_INTEGRATED_TIMESHEETS = 'IntegratedTimesheets';
    public const JOURNAL_SOURCE_FILE_IMPORT = 'FileImport';
    public const JOURNAL_SOURCE_FILE_EXPORT = 'FileExport';
    public const JOURNAL_SOURCE_QUICK_BOOKS = 'QuickBooks';
    public const JOURNAL_SOURCE_HARMONY = 'Harmony';
    public const JOURNAL_SOURCE_AWARD_STORE = 'AwardStore';
    public const JOURNAL_SOURCE_ATTACHE = 'Attache';
    public const JOURNAL_SOURCE_INTEGRATED_ROSTERING = 'IntegratedRostering';
    public const JOURNAL_SOURCE_RECKON_ACCOUNTS = 'ReckonAccounts';
    public const JOURNAL_SOURCE_API = 'API';
    public const JOURNAL_SOURCE_MICRO_POWER = 'MicroPower';
    public const JOURNAL_SOURCE_ROSTER_LIVE = 'RosterLive';
    public const JOURNAL_SOURCE_NET_SUITE = 'NetSuite';
    public const JOURNAL_SOURCE_KOUNTA = 'Kounta';
    public const JOURNAL_SOURCE_TIME_AND_ATTENDANCE_KIOSK = 'TimeAndAttendanceKiosk';
    public const JOURNAL_SOURCE_DETAILED_FILE_EXPORT = 'DetailedFileExport';
    public const JOURNAL_SOURCE_JONAS_PREMIER = 'JonasPremier';
    public const JOURNAL_SOURCE_WAGE_EASY = 'WageEasy';
    public const JOURNAL_SOURCE_MAESTRANO = 'Maestrano';
    public const JOURNAL_SOURCE_WORK_ZONE = 'WorkZone';
    public const JOURNAL_SOURCE_EMPLOYEE_PORTAL = 'EmployeePortal';
    public const JOURNAL_SOURCE_ROSTER_TEMPLATE = 'RosterTemplate';
    public const JOURNAL_SOURCE_ONBOARDING = 'Onboarding';
    public const JOURNAL_SOURCE_ADMIN = 'Admin';
    public const JOURNAL_SOURCE_WORK_ZONE_CLOCK_ON_OFF = 'WorkZoneClockOnOff';
    public const JOURNAL_SOURCE_NET_SUITE_ONE_WORLD = 'NetSuiteOneWorld';
    public const JOURNAL_SOURCE_SAGE50 = 'Sage50';
    public const JOURNAL_SOURCE_PENSION_SYNC = 'PensionSync';
    public const JOURNAL_SOURCE_FINANCIALS_OFFICE = 'FinancialsOffice';
    public const JOURNAL_SOURCE_PRONTO_XI = 'ProntoXI';
    public const JOURNAL_SOURCE_PAY_RUN_DEFAULT = 'PayRunDefault';
    public const JOURNAL_SOURCE_STANDARD_WORK_DAY = 'StandardWorkDay';
    public const JOURNAL_SOURCE_BEAM = 'Beam';
    public const JOURNAL_SOURCE_PAY_RUN_AUTOMATION = 'PayRunAutomation';
    public const JOURNAL_SOURCE_BUREAU_DASHBOARD = 'BureauDashboard';
    public const JOURNAL_SOURCE_WIISE = 'Wiise';
    public const JOURNAL_SOURCE_QBO_MIGRATION_TOOL = 'QBOMigrationTool';
    public const JOURNAL_SOURCE_ABRIDGED_FILE_IMPORT = 'AbridgedFileImport';
    public const JOURNAL_SOURCE_QBO_FORCED_MIGRATION = 'QBOForcedMigration';
    public const JOURNAL_SOURCE_HMRC_DPS_UPDATE = 'HmrcDpsUpdate';
    public const JOURNAL_SOURCE_HMRC_DPS_STUDENT_LOAN = 'HmrcDpsStudentLoan';
    public const JOURNAL_SOURCE_HMRC_DPS_POST_GRAD_LOAN = 'HmrcDpsPostGradLoan';
    public const JOURNAL_SOURCE_SAGE50_FILE_IMPORTER = 'Sage50FileImporter';
    public const JOURNAL_SOURCE_FPS_FILE_IMPORTER = 'FPSFileImporter';
    public const JOURNAL_SOURCE_O_AUTH = 'OAuth';
    public const JOURNAL_SOURCE_FRESH_BOOKS = 'FreshBooks';
    public const JOURNAL_SOURCE_STAR_FILE_IMPORTER = 'StarFileImporter';
    public const JOURNAL_SOURCE_ACTIVE_CAMPAIGN = 'ActiveCampaign';
    public const JOURNAL_SOURCE_SUMMARY_AND_DETAILS_EXPORT = 'SummaryAndDetailsExport';
    public const JOURNAL_SOURCE_TELLEROO = 'Telleroo';
    public const JOURNAL_SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD = 'EmployeeAdvancedHoursUpload';
    public const JOURNAL_SOURCE_BUSINESS_CENTRAL = 'BusinessCentral';
    public const JOURNAL_SOURCE_PAYTRON = 'Paytron';
    public const JOURNAL_SOURCE_ACCESS_FINANCIALS = 'AccessFinancials';
    public const JOURNAL_SOURCE_COMMA = 'Comma';
    public const JOURNAL_SOURCE_ZOHO = 'Zoho';
    public const JOURNAL_SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER = 'FlatFileEmployeeImporter';
    public const JOURNAL_SOURCE_TWINFIELD = 'Twinfield';
    public const JOURNAL_SOURCE_SAGE_ACCOUNTING = 'SageAccounting';
    public const JOURNAL_SOURCE_SQUARE = 'Square';
    public const JOURNAL_SOURCE_QUICKFILE = 'Quickfile';
    public const JOURNAL_SOURCE_TIDE = 'Tide';
    public const JOURNAL_SOURCE_TIDE_SSO = 'TideSso';
    public const JOURNAL_SOURCE_FREE_AGENT = 'FreeAgent';
    public const JOURNAL_SOURCE_AKAHU = 'Akahu';
    public const JOURNAL_SOURCE_INSTA_PAY = 'InstaPay';
    public const JOURNAL_SOURCE_ZEPTO = 'Zepto';
    public const JOURNAL_SOURCE_SLACK = 'Slack';
    public const JOURNAL_SOURCE_CAXTON = 'Caxton';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_EXPORTED,
            self::STATUS_SUCCESS,
            self::STATUS_FAILURE_UNKNOWN_ERROR,
            self::STATUS_FAILURE_ACCOUNTS_NOT_CONFIGURED,
            self::STATUS_FAILURE_ITEMS_DELETED,
            self::STATUS_FAILURE_ACCOUNT_PERIOD_CLOSED,
            self::STATUS_FAILURE_NOT_AUTHENTICATED,
            self::STATUS_FAILURE_ALREADY_EXPORTED,
            self::STATUS_FAILURE_FUNCTION_DISABLED,
            self::STATUS_FAILURE_CANNOT_USE_ACCOUNTS_PAYABLE_ACCOUNT,
            self::STATUS_FAILURE_VENDOR_MESSAGE,
            self::STATUS_FAILURE_INTERCOMPANY_LOAN_ACCOUNTS_NOT_CONFIGURED,
            self::STATUS_FAILURE_GST_SETUP,
            self::STATUS_FAILURE_KNOWN_ERROR,
            self::STATUS_FAILURES_TENANT_NOT_SUPPLIED,
            self::STATUS_FAILURE_NO_JOURNAL_ID,
            self::STATUS_FAILURE_API_ERROR,
            self::STATUS_RESULT_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getJournalSourceAllowableValues()
    {
        return [
            self::JOURNAL_SOURCE_NONE,
            self::JOURNAL_SOURCE_SAASU,
            self::JOURNAL_SOURCE_XERO,
            self::JOURNAL_SOURCE_MYOB,
            self::JOURNAL_SOURCE_DEPUTY,
            self::JOURNAL_SOURCE_EMPLOYEE_TIME_PUNCH,
            self::JOURNAL_SOURCE_CLICK_SUPER,
            self::JOURNAL_SOURCE_INTEGRATED_TIMESHEETS,
            self::JOURNAL_SOURCE_FILE_IMPORT,
            self::JOURNAL_SOURCE_FILE_EXPORT,
            self::JOURNAL_SOURCE_QUICK_BOOKS,
            self::JOURNAL_SOURCE_HARMONY,
            self::JOURNAL_SOURCE_AWARD_STORE,
            self::JOURNAL_SOURCE_ATTACHE,
            self::JOURNAL_SOURCE_INTEGRATED_ROSTERING,
            self::JOURNAL_SOURCE_RECKON_ACCOUNTS,
            self::JOURNAL_SOURCE_API,
            self::JOURNAL_SOURCE_MICRO_POWER,
            self::JOURNAL_SOURCE_ROSTER_LIVE,
            self::JOURNAL_SOURCE_NET_SUITE,
            self::JOURNAL_SOURCE_KOUNTA,
            self::JOURNAL_SOURCE_TIME_AND_ATTENDANCE_KIOSK,
            self::JOURNAL_SOURCE_DETAILED_FILE_EXPORT,
            self::JOURNAL_SOURCE_JONAS_PREMIER,
            self::JOURNAL_SOURCE_WAGE_EASY,
            self::JOURNAL_SOURCE_MAESTRANO,
            self::JOURNAL_SOURCE_WORK_ZONE,
            self::JOURNAL_SOURCE_EMPLOYEE_PORTAL,
            self::JOURNAL_SOURCE_ROSTER_TEMPLATE,
            self::JOURNAL_SOURCE_ONBOARDING,
            self::JOURNAL_SOURCE_ADMIN,
            self::JOURNAL_SOURCE_WORK_ZONE_CLOCK_ON_OFF,
            self::JOURNAL_SOURCE_NET_SUITE_ONE_WORLD,
            self::JOURNAL_SOURCE_SAGE50,
            self::JOURNAL_SOURCE_PENSION_SYNC,
            self::JOURNAL_SOURCE_FINANCIALS_OFFICE,
            self::JOURNAL_SOURCE_PRONTO_XI,
            self::JOURNAL_SOURCE_PAY_RUN_DEFAULT,
            self::JOURNAL_SOURCE_STANDARD_WORK_DAY,
            self::JOURNAL_SOURCE_BEAM,
            self::JOURNAL_SOURCE_PAY_RUN_AUTOMATION,
            self::JOURNAL_SOURCE_BUREAU_DASHBOARD,
            self::JOURNAL_SOURCE_WIISE,
            self::JOURNAL_SOURCE_QBO_MIGRATION_TOOL,
            self::JOURNAL_SOURCE_ABRIDGED_FILE_IMPORT,
            self::JOURNAL_SOURCE_QBO_FORCED_MIGRATION,
            self::JOURNAL_SOURCE_HMRC_DPS_UPDATE,
            self::JOURNAL_SOURCE_HMRC_DPS_STUDENT_LOAN,
            self::JOURNAL_SOURCE_HMRC_DPS_POST_GRAD_LOAN,
            self::JOURNAL_SOURCE_SAGE50_FILE_IMPORTER,
            self::JOURNAL_SOURCE_FPS_FILE_IMPORTER,
            self::JOURNAL_SOURCE_O_AUTH,
            self::JOURNAL_SOURCE_FRESH_BOOKS,
            self::JOURNAL_SOURCE_STAR_FILE_IMPORTER,
            self::JOURNAL_SOURCE_ACTIVE_CAMPAIGN,
            self::JOURNAL_SOURCE_SUMMARY_AND_DETAILS_EXPORT,
            self::JOURNAL_SOURCE_TELLEROO,
            self::JOURNAL_SOURCE_EMPLOYEE_ADVANCED_HOURS_UPLOAD,
            self::JOURNAL_SOURCE_BUSINESS_CENTRAL,
            self::JOURNAL_SOURCE_PAYTRON,
            self::JOURNAL_SOURCE_ACCESS_FINANCIALS,
            self::JOURNAL_SOURCE_COMMA,
            self::JOURNAL_SOURCE_ZOHO,
            self::JOURNAL_SOURCE_FLAT_FILE_EMPLOYEE_IMPORTER,
            self::JOURNAL_SOURCE_TWINFIELD,
            self::JOURNAL_SOURCE_SAGE_ACCOUNTING,
            self::JOURNAL_SOURCE_SQUARE,
            self::JOURNAL_SOURCE_QUICKFILE,
            self::JOURNAL_SOURCE_TIDE,
            self::JOURNAL_SOURCE_TIDE_SSO,
            self::JOURNAL_SOURCE_FREE_AGENT,
            self::JOURNAL_SOURCE_AKAHU,
            self::JOURNAL_SOURCE_INSTA_PAY,
            self::JOURNAL_SOURCE_ZEPTO,
            self::JOURNAL_SOURCE_SLACK,
            self::JOURNAL_SOURCE_CAXTON,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('journal_source', $data ?? [], null);
        $this->setIfExists('journal_external_reference_id', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getJournalSourceAllowableValues();
        if (!is_null($this->container['journal_source']) && !in_array($this->container['journal_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'journal_source', must be one of '%s'",
                $this->container['journal_source'],
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message 
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets journal_source
     *
     * @return string|null
     */
    public function getJournalSource()
    {
        return $this->container['journal_source'];
    }

    /**
     * Sets journal_source
     *
     * @param string|null $journal_source 
     *
     * @return self
     */
    public function setJournalSource($journal_source)
    {
        if (is_null($journal_source)) {
            throw new \InvalidArgumentException('non-nullable journal_source cannot be null');
        }
        $allowedValues = $this->getJournalSourceAllowableValues();
        if (!in_array($journal_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'journal_source', must be one of '%s'",
                    $journal_source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['journal_source'] = $journal_source;

        return $this;
    }

    /**
     * Gets journal_external_reference_id
     *
     * @return string|null
     */
    public function getJournalExternalReferenceId()
    {
        return $this->container['journal_external_reference_id'];
    }

    /**
     * Sets journal_external_reference_id
     *
     * @param string|null $journal_external_reference_id 
     *
     * @return self
     */
    public function setJournalExternalReferenceId($journal_external_reference_id)
    {
        if (is_null($journal_external_reference_id)) {
            throw new \InvalidArgumentException('non-nullable journal_external_reference_id cannot be null');
        }
        $this->container['journal_external_reference_id'] = $journal_external_reference_id;

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


