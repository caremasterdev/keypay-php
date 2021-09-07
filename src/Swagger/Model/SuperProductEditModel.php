<?php
/**
 * SuperProductEditModel
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
 * SuperProductEditModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SuperProductEditModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SuperProductEditModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'abn' => 'string',
        'product_code' => 'string',
        'product_type' => 'string',
        'business_name' => 'string',
        'display_name' => 'string',
        'product_name' => 'string',
        'account_number' => 'string',
        'bsb' => 'string',
        'account_name' => 'string',
        'source' => 'string',
        'electronic_service_address' => 'string',
        'email' => 'string',
        'external_reference_id' => 'string',
        'super_details_default_fund_id' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'abn' => null,
        'product_code' => null,
        'product_type' => null,
        'business_name' => null,
        'display_name' => null,
        'product_name' => null,
        'account_number' => null,
        'bsb' => null,
        'account_name' => null,
        'source' => null,
        'electronic_service_address' => null,
        'email' => null,
        'external_reference_id' => null,
        'super_details_default_fund_id' => 'int32',
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
        'abn' => 'abn',
        'product_code' => 'productCode',
        'product_type' => 'productType',
        'business_name' => 'businessName',
        'display_name' => 'displayName',
        'product_name' => 'productName',
        'account_number' => 'accountNumber',
        'bsb' => 'bsb',
        'account_name' => 'accountName',
        'source' => 'source',
        'electronic_service_address' => 'electronicServiceAddress',
        'email' => 'email',
        'external_reference_id' => 'externalReferenceId',
        'super_details_default_fund_id' => 'superDetailsDefaultFundId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'abn' => 'setAbn',
        'product_code' => 'setProductCode',
        'product_type' => 'setProductType',
        'business_name' => 'setBusinessName',
        'display_name' => 'setDisplayName',
        'product_name' => 'setProductName',
        'account_number' => 'setAccountNumber',
        'bsb' => 'setBsb',
        'account_name' => 'setAccountName',
        'source' => 'setSource',
        'electronic_service_address' => 'setElectronicServiceAddress',
        'email' => 'setEmail',
        'external_reference_id' => 'setExternalReferenceId',
        'super_details_default_fund_id' => 'setSuperDetailsDefaultFundId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'abn' => 'getAbn',
        'product_code' => 'getProductCode',
        'product_type' => 'getProductType',
        'business_name' => 'getBusinessName',
        'display_name' => 'getDisplayName',
        'product_name' => 'getProductName',
        'account_number' => 'getAccountNumber',
        'bsb' => 'getBsb',
        'account_name' => 'getAccountName',
        'source' => 'getSource',
        'electronic_service_address' => 'getElectronicServiceAddress',
        'email' => 'getEmail',
        'external_reference_id' => 'getExternalReferenceId',
        'super_details_default_fund_id' => 'getSuperDetailsDefaultFundId',
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
        $this->container['abn'] = isset($data['abn']) ? $data['abn'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['product_name'] = isset($data['product_name']) ? $data['product_name'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['bsb'] = isset($data['bsb']) ? $data['bsb'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['electronic_service_address'] = isset($data['electronic_service_address']) ? $data['electronic_service_address'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['external_reference_id'] = isset($data['external_reference_id']) ? $data['external_reference_id'] : null;
        $this->container['super_details_default_fund_id'] = isset($data['super_details_default_fund_id']) ? $data['super_details_default_fund_id'] : null;
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
     * Gets abn
     *
     * @return string
     */
    public function getAbn()
    {
        return $this->container['abn'];
    }

    /**
     * Sets abn
     *
     * @param string $abn
     *
     * @return $this
     */
    public function setAbn($abn)
    {
        $this->container['abn'] = $abn;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets business_name
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string $business_name
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {
        $this->container['business_name'] = $business_name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets product_name
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['product_name'];
    }

    /**
     * Sets product_name
     *
     * @param string $product_name
     *
     * @return $this
     */
    public function setProductName($product_name)
    {
        $this->container['product_name'] = $product_name;

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
     * Gets electronic_service_address
     *
     * @return string
     */
    public function getElectronicServiceAddress()
    {
        return $this->container['electronic_service_address'];
    }

    /**
     * Sets electronic_service_address
     *
     * @param string $electronic_service_address
     *
     * @return $this
     */
    public function setElectronicServiceAddress($electronic_service_address)
    {
        $this->container['electronic_service_address'] = $electronic_service_address;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * Gets super_details_default_fund_id
     *
     * @return int
     */
    public function getSuperDetailsDefaultFundId()
    {
        return $this->container['super_details_default_fund_id'];
    }

    /**
     * Sets super_details_default_fund_id
     *
     * @param int $super_details_default_fund_id
     *
     * @return $this
     */
    public function setSuperDetailsDefaultFundId($super_details_default_fund_id)
    {
        $this->container['super_details_default_fund_id'] = $super_details_default_fund_id;

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
