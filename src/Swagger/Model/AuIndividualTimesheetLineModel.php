<?php
/**
 * AuIndividualTimesheetLineModel
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
 * AuIndividualTimesheetLineModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuIndividualTimesheetLineModel implements ModelInterface, ArrayAccess
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AuIndividualTimesheetLineModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'classification_id' => 'int',
        'classification' => 'string',
        'id' => 'int',
        'employee_id' => 'int',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'units' => 'double',
        'work_type_id' => 'int',
        'location_id' => 'int',
        'comments' => 'string',
        'breaks' => '\Swagger\Client\Model\TimesheetBreakModelv3[]',
        'status' => 'string',
        'rate' => 'double',
        'leave_category_id' => 'int',
        'pay_category_id' => 'int',
        'external_id' => 'string',
        'source' => 'string',
        'attachment_id' => 'int',
        'shift_condition_ids' => 'int[]',
        'work_type' => 'string',
        'fully_qualified_location_name' => 'string',
        'shift_conditions' => '\Swagger\Client\Model\TimesheetShiftConditionModelv3[]',
        'hidden_comments' => 'string',
        'attachment' => '\Swagger\Client\Model\Attachment',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'classification_id' => 'int32',
        'classification' => null,
        'id' => 'int32',
        'employee_id' => 'int32',
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'units' => 'double',
        'work_type_id' => 'int32',
        'location_id' => 'int32',
        'comments' => null,
        'breaks' => null,
        'status' => null,
        'rate' => 'double',
        'leave_category_id' => 'int32',
        'pay_category_id' => 'int32',
        'external_id' => null,
        'source' => null,
        'attachment_id' => 'int32',
        'shift_condition_ids' => 'int32',
        'work_type' => null,
        'fully_qualified_location_name' => null,
        'shift_conditions' => null,
        'hidden_comments' => null,
        'attachment' => null,
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
        'classification_id' => 'classificationId',
        'classification' => 'classification',
        'id' => 'id',
        'employee_id' => 'employeeId',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'units' => 'units',
        'work_type_id' => 'workTypeId',
        'location_id' => 'locationId',
        'comments' => 'comments',
        'breaks' => 'breaks',
        'status' => 'status',
        'rate' => 'rate',
        'leave_category_id' => 'leaveCategoryId',
        'pay_category_id' => 'payCategoryId',
        'external_id' => 'externalId',
        'source' => 'source',
        'attachment_id' => 'attachmentId',
        'shift_condition_ids' => 'shiftConditionIds',
        'work_type' => 'workType',
        'fully_qualified_location_name' => 'fullyQualifiedLocationName',
        'shift_conditions' => 'shiftConditions',
        'hidden_comments' => 'hiddenComments',
        'attachment' => 'attachment',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'classification_id' => 'setClassificationId',
        'classification' => 'setClassification',
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'units' => 'setUnits',
        'work_type_id' => 'setWorkTypeId',
        'location_id' => 'setLocationId',
        'comments' => 'setComments',
        'breaks' => 'setBreaks',
        'status' => 'setStatus',
        'rate' => 'setRate',
        'leave_category_id' => 'setLeaveCategoryId',
        'pay_category_id' => 'setPayCategoryId',
        'external_id' => 'setExternalId',
        'source' => 'setSource',
        'attachment_id' => 'setAttachmentId',
        'shift_condition_ids' => 'setShiftConditionIds',
        'work_type' => 'setWorkType',
        'fully_qualified_location_name' => 'setFullyQualifiedLocationName',
        'shift_conditions' => 'setShiftConditions',
        'hidden_comments' => 'setHiddenComments',
        'attachment' => 'setAttachment',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'classification_id' => 'getClassificationId',
        'classification' => 'getClassification',
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'units' => 'getUnits',
        'work_type_id' => 'getWorkTypeId',
        'location_id' => 'getLocationId',
        'comments' => 'getComments',
        'breaks' => 'getBreaks',
        'status' => 'getStatus',
        'rate' => 'getRate',
        'leave_category_id' => 'getLeaveCategoryId',
        'pay_category_id' => 'getPayCategoryId',
        'external_id' => 'getExternalId',
        'source' => 'getSource',
        'attachment_id' => 'getAttachmentId',
        'shift_condition_ids' => 'getShiftConditionIds',
        'work_type' => 'getWorkType',
        'fully_qualified_location_name' => 'getFullyQualifiedLocationName',
        'shift_conditions' => 'getShiftConditions',
        'hidden_comments' => 'getHiddenComments',
        'attachment' => 'getAttachment',
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
        $this->container['classification_id'] = isset($data['classification_id']) ? $data['classification_id'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['work_type_id'] = isset($data['work_type_id']) ? $data['work_type_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['breaks'] = isset($data['breaks']) ? $data['breaks'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['leave_category_id'] = isset($data['leave_category_id']) ? $data['leave_category_id'] : null;
        $this->container['pay_category_id'] = isset($data['pay_category_id']) ? $data['pay_category_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['attachment_id'] = isset($data['attachment_id']) ? $data['attachment_id'] : null;
        $this->container['shift_condition_ids'] = isset($data['shift_condition_ids']) ? $data['shift_condition_ids'] : null;
        $this->container['work_type'] = isset($data['work_type']) ? $data['work_type'] : null;
        $this->container['fully_qualified_location_name'] = isset($data['fully_qualified_location_name']) ? $data['fully_qualified_location_name'] : null;
        $this->container['shift_conditions'] = isset($data['shift_conditions']) ? $data['shift_conditions'] : null;
        $this->container['hidden_comments'] = isset($data['hidden_comments']) ? $data['hidden_comments'] : null;
        $this->container['attachment'] = isset($data['attachment']) ? $data['attachment'] : null;
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
     * Gets classification_id
     *
     * @return int
     */
    public function getClassificationId()
    {
        return $this->container['classification_id'];
    }

    /**
     * Sets classification_id
     *
     * @param int $classification_id
     *
     * @return $this
     */
    public function setClassificationId($classification_id)
    {
        $this->container['classification_id'] = $classification_id;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param string $classification
     *
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->container['classification'] = $classification;

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
     * Gets employee_id
     *
     * @return int
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int $employee_id
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

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
     * Gets units
     *
     * @return float
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param float $units
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets work_type_id
     *
     * @return int
     */
    public function getWorkTypeId()
    {
        return $this->container['work_type_id'];
    }

    /**
     * Sets work_type_id
     *
     * @param int $work_type_id
     *
     * @return $this
     */
    public function setWorkTypeId($work_type_id)
    {
        $this->container['work_type_id'] = $work_type_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int $location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets breaks
     *
     * @return \Swagger\Client\Model\TimesheetBreakModelv3[]
     */
    public function getBreaks()
    {
        return $this->container['breaks'];
    }

    /**
     * Sets breaks
     *
     * @param \Swagger\Client\Model\TimesheetBreakModelv3[] $breaks
     *
     * @return $this
     */
    public function setBreaks($breaks)
    {
        $this->container['breaks'] = $breaks;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float $rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

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
     * Gets pay_category_id
     *
     * @return int
     */
    public function getPayCategoryId()
    {
        return $this->container['pay_category_id'];
    }

    /**
     * Sets pay_category_id
     *
     * @param int $pay_category_id
     *
     * @return $this
     */
    public function setPayCategoryId($pay_category_id)
    {
        $this->container['pay_category_id'] = $pay_category_id;

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
     * Gets attachment_id
     *
     * @return int
     */
    public function getAttachmentId()
    {
        return $this->container['attachment_id'];
    }

    /**
     * Sets attachment_id
     *
     * @param int $attachment_id
     *
     * @return $this
     */
    public function setAttachmentId($attachment_id)
    {
        $this->container['attachment_id'] = $attachment_id;

        return $this;
    }

    /**
     * Gets shift_condition_ids
     *
     * @return int[]
     */
    public function getShiftConditionIds()
    {
        return $this->container['shift_condition_ids'];
    }

    /**
     * Sets shift_condition_ids
     *
     * @param int[] $shift_condition_ids
     *
     * @return $this
     */
    public function setShiftConditionIds($shift_condition_ids)
    {
        $this->container['shift_condition_ids'] = $shift_condition_ids;

        return $this;
    }

    /**
     * Gets work_type
     *
     * @return string
     */
    public function getWorkType()
    {
        return $this->container['work_type'];
    }

    /**
     * Sets work_type
     *
     * @param string $work_type
     *
     * @return $this
     */
    public function setWorkType($work_type)
    {
        $this->container['work_type'] = $work_type;

        return $this;
    }

    /**
     * Gets fully_qualified_location_name
     *
     * @return string
     */
    public function getFullyQualifiedLocationName()
    {
        return $this->container['fully_qualified_location_name'];
    }

    /**
     * Sets fully_qualified_location_name
     *
     * @param string $fully_qualified_location_name
     *
     * @return $this
     */
    public function setFullyQualifiedLocationName($fully_qualified_location_name)
    {
        $this->container['fully_qualified_location_name'] = $fully_qualified_location_name;

        return $this;
    }

    /**
     * Gets shift_conditions
     *
     * @return \Swagger\Client\Model\TimesheetShiftConditionModelv3[]
     */
    public function getShiftConditions()
    {
        return $this->container['shift_conditions'];
    }

    /**
     * Sets shift_conditions
     *
     * @param \Swagger\Client\Model\TimesheetShiftConditionModelv3[] $shift_conditions
     *
     * @return $this
     */
    public function setShiftConditions($shift_conditions)
    {
        $this->container['shift_conditions'] = $shift_conditions;

        return $this;
    }

    /**
     * Gets hidden_comments
     *
     * @return string
     */
    public function getHiddenComments()
    {
        return $this->container['hidden_comments'];
    }

    /**
     * Sets hidden_comments
     *
     * @param string $hidden_comments
     *
     * @return $this
     */
    public function setHiddenComments($hidden_comments)
    {
        $this->container['hidden_comments'] = $hidden_comments;

        return $this;
    }

    /**
     * Gets attachment
     *
     * @return \Swagger\Client\Model\Attachment
     */
    public function getAttachment()
    {
        return $this->container['attachment'];
    }

    /**
     * Sets attachment
     *
     * @param \Swagger\Client\Model\Attachment $attachment
     *
     * @return $this
     */
    public function setAttachment($attachment)
    {
        $this->container['attachment'] = $attachment;

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
