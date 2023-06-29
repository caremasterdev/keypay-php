<?php
/**
 * PayRunWarningDto
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
 * PayRunWarningDto Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayRunWarningDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayRunWarningDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'warning_type' => 'string',
        'employee_id' => 'int',
        'warning' => 'string',
        'employee_name' => 'string',
        'pay_run_total_id' => 'int',
        'meta_data' => 'object',
        'meta_data_json' => 'string',
        'employee_external_id' => 'string',
        'formatted_warning_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'warning_type' => null,
        'employee_id' => 'int32',
        'warning' => null,
        'employee_name' => null,
        'pay_run_total_id' => 'int32',
        'meta_data' => null,
        'meta_data_json' => null,
        'employee_external_id' => null,
        'formatted_warning_message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'warning_type' => false,
		'employee_id' => false,
		'warning' => false,
		'employee_name' => false,
		'pay_run_total_id' => false,
		'meta_data' => false,
		'meta_data_json' => false,
		'employee_external_id' => false,
		'formatted_warning_message' => false
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
        'warning_type' => 'warningType',
        'employee_id' => 'employeeId',
        'warning' => 'warning',
        'employee_name' => 'employeeName',
        'pay_run_total_id' => 'payRunTotalId',
        'meta_data' => 'metaData',
        'meta_data_json' => 'metaDataJson',
        'employee_external_id' => 'employeeExternalId',
        'formatted_warning_message' => 'formattedWarningMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warning_type' => 'setWarningType',
        'employee_id' => 'setEmployeeId',
        'warning' => 'setWarning',
        'employee_name' => 'setEmployeeName',
        'pay_run_total_id' => 'setPayRunTotalId',
        'meta_data' => 'setMetaData',
        'meta_data_json' => 'setMetaDataJson',
        'employee_external_id' => 'setEmployeeExternalId',
        'formatted_warning_message' => 'setFormattedWarningMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warning_type' => 'getWarningType',
        'employee_id' => 'getEmployeeId',
        'warning' => 'getWarning',
        'employee_name' => 'getEmployeeName',
        'pay_run_total_id' => 'getPayRunTotalId',
        'meta_data' => 'getMetaData',
        'meta_data_json' => 'getMetaDataJson',
        'employee_external_id' => 'getEmployeeExternalId',
        'formatted_warning_message' => 'getFormattedWarningMessage'
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

    public const WARNING_TYPE_PAYMENT_FILE = 'PaymentFile';
    public const WARNING_TYPE_MORE_LEAVE_THAN_ACCRUED = 'MoreLeaveThanAccrued';
    public const WARNING_TYPE_UNPAID_EARNINGS = 'UnpaidEarnings';
    public const WARNING_TYPE_BIRTHDAY = 'Birthday';
    public const WARNING_TYPE_ANNIVERSARY = 'Anniversary';
    public const WARNING_TYPE_NEGATIVE_EARNINGS = 'NegativeEarnings';
    public const WARNING_TYPE_PREVIOUSLY_TERMINATED = 'PreviouslyTerminated';
    public const WARNING_TYPE_TERMINATED_WITH_EXPENSE_REIMBURSEMENTS = 'TerminatedWithExpenseReimbursements';
    public const WARNING_TYPE_EXPIRED_QUALIFICATION = 'ExpiredQualification';
    public const WARNING_TYPE_DUPLICATE_EARNINGS_LINES = 'DuplicateEarningsLines';
    public const WARNING_TYPE_TAX_CODE_MISSING = 'TaxCodeMissing';
    public const WARNING_TYPE_BPAY = 'Bpay';
    public const WARNING_TYPE_LEAVE_YEAR_CAP_REACHED = 'LeaveYearCapReached';
    public const WARNING_TYPE_AUTO_ENROLMENT_CHANGES = 'AutoEnrolmentChanges';
    public const WARNING_TYPE_EMPLOYEE_PENSION_CONTRIBUTION_REFUND = 'EmployeePensionContributionRefund';
    public const WARNING_TYPE_PENSION_SCHEME_REQUIRES_AUTHORIZATION = 'PensionSchemeRequiresAuthorization';
    public const WARNING_TYPE_UK_TAX_CODE_UPDATE = 'UkTaxCodeUpdate';
    public const WARNING_TYPE_UK_TAX_CODE_UPDATE_ERROR = 'UkTaxCodeUpdateError';
    public const WARNING_TYPE_NINO_UNKNOWN = 'NINOUnknown';
    public const WARNING_TYPE_PRO_RATA_EARNINGS = 'ProRataEarnings';
    public const WARNING_TYPE_HMRC_LATE_REASON_WARNING = 'HmrcLateReasonWarning';
    public const WARNING_TYPE_BELOW_MINIMUM_WAGE = 'BelowMinimumWage';
    public const WARNING_TYPE_EXPIRED_SPECIAL_TAX_RATE = 'ExpiredSpecialTaxRate';
    public const WARNING_TYPE_EXPIRED_STUDENT_LOAN_RATE = 'ExpiredStudentLoanRate';
    public const WARNING_TYPE_PENDING_LEAVE_REQUEST = 'PendingLeaveRequest';
    public const WARNING_TYPE_LEAVE_REQUEST_BEYOND_PAY_PERIOD = 'LeaveRequestBeyondPayPeriod';
    public const WARNING_TYPE_PRECEDING_LEAVE_REQUEST = 'PrecedingLeaveRequest';
    public const WARNING_TYPE_INCOMPLETE_PAY_RUN_TASKS = 'IncompletePayRunTasks';
    public const WARNING_TYPE_PENDING_EXPENSE_REQUESTS = 'PendingExpenseRequests';
    public const WARNING_TYPE_PAY_DAY_FILING = 'PayDayFiling';
    public const WARNING_TYPE_PAY_DAY_FILING_AMENDMENT = 'PayDayFilingAmendment';
    public const WARNING_TYPE_EMPLOYEE_INFORMATION = 'EmployeeInformation';
    public const WARNING_TYPE_IRD_SETTINGS = 'IrdSettings';
    public const WARNING_TYPE_AUTO_UPDATED_NI_CATEGORY = 'AutoUpdatedNICategory';
    public const WARNING_TYPE_UK_STUDENT_LOAN_UPDATE = 'UkStudentLoanUpdate';
    public const WARNING_TYPE_PENSION_PROVIDER_DOES_NOT_ALLOW_OVERSEAS_ADDRESS = 'PensionProviderDoesNotAllowOverseasAddress';
    public const WARNING_TYPE_MISSING_LEAVE_YEAR_ENTITLEMENT = 'MissingLeaveYearEntitlement';
    public const WARNING_TYPE_LEAVE_REQUEST_UNIT_TYPE_MISMATCH = 'LeaveRequestUnitTypeMismatch';
    public const WARNING_TYPE_EXPIRED_NRIC = 'ExpiredNric';
    public const WARNING_TYPE_EXCESS_OVERTIME = 'ExcessOvertime';
    public const WARNING_TYPE_FOREIGN_EMPLOYEE = 'ForeignEmployee';
    public const WARNING_TYPE_EXCESS_DEDUCTIONS = 'ExcessDeductions';
    public const WARNING_TYPE_TERMINATED_FOREIGN_EMPLOYEE = 'TerminatedForeignEmployee';
    public const WARNING_TYPE_STATUTORY_PAYMENT_APPLIED = 'StatutoryPaymentApplied';
    public const WARNING_TYPE_STATUTORY_PAYMENT_APPLIED_PREVIOUS = 'StatutoryPaymentAppliedPrevious';
    public const WARNING_TYPE_NATIONAL_INSURANCE_VALIDATIONS = 'NationalInsuranceValidations';
    public const WARNING_TYPE_MIXED_OFFSETS = 'MixedOffsets';
    public const WARNING_TYPE_PENDING_SAP_PAYMENT = 'PendingSapPayment';
    public const WARNING_TYPE_SCHEDULED_UPDATE_APPLIED = 'ScheduledUpdateApplied';
    public const WARNING_TYPE_PENSION_SETTINGS_UPDATED = 'PensionSettingsUpdated';
    public const WARNING_TYPE_TAX_RELIEF_THRESHOLD_EXCEEDED = 'TaxReliefThresholdExceeded';
    public const WARNING_TYPE_UK_NOT_NOTICE_UPDATE = 'UkNotNoticeUpdate';
    public const WARNING_TYPE_EARNINGS_AUTOMATICALLY_ADJUSTED = 'EarningsAutomaticallyAdjusted';
    public const WARNING_TYPE_EARNINGS_REQUIRE_ADJUSTMENT = 'EarningsRequireAdjustment';
    public const WARNING_TYPE_UK_TAX_CODE_P9_UPDATE = 'UkTaxCodeP9Update';
    public const WARNING_TYPE_HRDF_EMPLOYEE_WARNING = 'HrdfEmployeeWarning';
    public const WARNING_TYPE_NEW_PAYROLLED_BENEFITS = 'NewPayrolledBenefits';
    public const WARNING_TYPE_SUBMIT_TERMINATED_EMPLOYEE_TO_HMRC = 'SubmitTerminatedEmployeeToHmrc';
    public const WARNING_TYPE_SUPER_RECONCILIATION_PREVIOUS_PAY_RUN = 'SuperReconciliationPreviousPayRun';
    public const WARNING_TYPE_SUPER_RECONCILIATION_THIS_PAY_RUN = 'SuperReconciliationThisPayRun';
    public const WARNING_TYPE_MORE_THAN28_DAYS_WITHOUT_TFN_QUOTED = 'MoreThan28DaysWithoutTfnQuoted';
    public const WARNING_TYPE_BACK_CALCULATIONS_APPLIED = 'BackCalculationsApplied';
    public const WARNING_TYPE_LEAVE_ACCRUAL_RECONCILIATION_PREVIOUS_PAY_RUN = 'LeaveAccrualReconciliationPreviousPayRun';
    public const WARNING_TYPE_LEAVE_ACCRUAL_RECONCILIATION_THIS_PAY_RUN = 'LeaveAccrualReconciliationThisPayRun';
    public const WARNING_TYPE_PUBLIC_HOLIDAY_AUTOMATION = 'PublicHolidayAutomation';
    public const WARNING_TYPE_CIS_SUBCONTRACTOR_REQUIRES_VERIFICATION = 'CisSubcontractorRequiresVerification';
    public const WARNING_TYPE_ITN_REQUIRES_UPDATE = 'ItnRequiresUpdate';
    public const WARNING_TYPE_CIS_SUBCONTRACTOR_LAST_PAYMENT_DATE = 'CisSubcontractorLastPaymentDate';
    public const WARNING_TYPE_CIS_SUBCONTRACTOR_UNMATCHED = 'CisSubcontractorUnmatched';
    public const WARNING_TYPE_CPF_REFUND_REQUIRED = 'CpfRefundRequired';
    public const WARNING_TYPE_CPF_YEAR_END_RECALCULATION_REQUIRED = 'CpfYearEndRecalculationRequired';
    public const WARNING_TYPE_TAX_CODE_DISPLAY_NAME_TOO_LONG = 'TaxCodeDisplayNameTooLong';
    public const WARNING_TYPE_TIMESHEET_OUT_OF_SEQUENCE = 'TimesheetOutOfSequence';
    public const WARNING_TYPE_EXPIRED_CONTRACTOR_TAX_RATE = 'ExpiredContractorTaxRate';
    public const WARNING_TYPE_CONCURRENT_PAY_RUN = 'ConcurrentPayRun';
    public const WARNING_TYPE_STUDENT_LOAN_ADJUSTMENT = 'StudentLoanAdjustment';
    public const WARNING_TYPE_UNPAID_LEAVE_WITH_AVAILABLE_BALANCE = 'UnpaidLeaveWithAvailableBalance';
    public const WARNING_TYPE_OCCUPATIONAL_LEAVE_APPLIED = 'OccupationalLeaveApplied';
    public const WARNING_TYPE_OCCUPATIONAL_LEAVE_APPLIED_PREVIOUS = 'OccupationalLeaveAppliedPrevious';
    public const WARNING_TYPE_OCCUPATIONAL_LEAVE_ENTITLEMENT_EXHAUSTED = 'OccupationalLeaveEntitlementExhausted';
    public const WARNING_TYPE_ANNUAL_LEAVE_CASHED_OUT = 'AnnualLeaveCashedOut';
    public const WARNING_TYPE_EMPLOYEE_HAS_TAKEN_PAID_FAMILY_AND_DOMESTIC_VIOLENCE_LEAVE = 'EmployeeHasTakenPaidFamilyAndDomesticViolenceLeave';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWarningTypeAllowableValues()
    {
        return [
            self::WARNING_TYPE_PAYMENT_FILE,
            self::WARNING_TYPE_MORE_LEAVE_THAN_ACCRUED,
            self::WARNING_TYPE_UNPAID_EARNINGS,
            self::WARNING_TYPE_BIRTHDAY,
            self::WARNING_TYPE_ANNIVERSARY,
            self::WARNING_TYPE_NEGATIVE_EARNINGS,
            self::WARNING_TYPE_PREVIOUSLY_TERMINATED,
            self::WARNING_TYPE_TERMINATED_WITH_EXPENSE_REIMBURSEMENTS,
            self::WARNING_TYPE_EXPIRED_QUALIFICATION,
            self::WARNING_TYPE_DUPLICATE_EARNINGS_LINES,
            self::WARNING_TYPE_TAX_CODE_MISSING,
            self::WARNING_TYPE_BPAY,
            self::WARNING_TYPE_LEAVE_YEAR_CAP_REACHED,
            self::WARNING_TYPE_AUTO_ENROLMENT_CHANGES,
            self::WARNING_TYPE_EMPLOYEE_PENSION_CONTRIBUTION_REFUND,
            self::WARNING_TYPE_PENSION_SCHEME_REQUIRES_AUTHORIZATION,
            self::WARNING_TYPE_UK_TAX_CODE_UPDATE,
            self::WARNING_TYPE_UK_TAX_CODE_UPDATE_ERROR,
            self::WARNING_TYPE_NINO_UNKNOWN,
            self::WARNING_TYPE_PRO_RATA_EARNINGS,
            self::WARNING_TYPE_HMRC_LATE_REASON_WARNING,
            self::WARNING_TYPE_BELOW_MINIMUM_WAGE,
            self::WARNING_TYPE_EXPIRED_SPECIAL_TAX_RATE,
            self::WARNING_TYPE_EXPIRED_STUDENT_LOAN_RATE,
            self::WARNING_TYPE_PENDING_LEAVE_REQUEST,
            self::WARNING_TYPE_LEAVE_REQUEST_BEYOND_PAY_PERIOD,
            self::WARNING_TYPE_PRECEDING_LEAVE_REQUEST,
            self::WARNING_TYPE_INCOMPLETE_PAY_RUN_TASKS,
            self::WARNING_TYPE_PENDING_EXPENSE_REQUESTS,
            self::WARNING_TYPE_PAY_DAY_FILING,
            self::WARNING_TYPE_PAY_DAY_FILING_AMENDMENT,
            self::WARNING_TYPE_EMPLOYEE_INFORMATION,
            self::WARNING_TYPE_IRD_SETTINGS,
            self::WARNING_TYPE_AUTO_UPDATED_NI_CATEGORY,
            self::WARNING_TYPE_UK_STUDENT_LOAN_UPDATE,
            self::WARNING_TYPE_PENSION_PROVIDER_DOES_NOT_ALLOW_OVERSEAS_ADDRESS,
            self::WARNING_TYPE_MISSING_LEAVE_YEAR_ENTITLEMENT,
            self::WARNING_TYPE_LEAVE_REQUEST_UNIT_TYPE_MISMATCH,
            self::WARNING_TYPE_EXPIRED_NRIC,
            self::WARNING_TYPE_EXCESS_OVERTIME,
            self::WARNING_TYPE_FOREIGN_EMPLOYEE,
            self::WARNING_TYPE_EXCESS_DEDUCTIONS,
            self::WARNING_TYPE_TERMINATED_FOREIGN_EMPLOYEE,
            self::WARNING_TYPE_STATUTORY_PAYMENT_APPLIED,
            self::WARNING_TYPE_STATUTORY_PAYMENT_APPLIED_PREVIOUS,
            self::WARNING_TYPE_NATIONAL_INSURANCE_VALIDATIONS,
            self::WARNING_TYPE_MIXED_OFFSETS,
            self::WARNING_TYPE_PENDING_SAP_PAYMENT,
            self::WARNING_TYPE_SCHEDULED_UPDATE_APPLIED,
            self::WARNING_TYPE_PENSION_SETTINGS_UPDATED,
            self::WARNING_TYPE_TAX_RELIEF_THRESHOLD_EXCEEDED,
            self::WARNING_TYPE_UK_NOT_NOTICE_UPDATE,
            self::WARNING_TYPE_EARNINGS_AUTOMATICALLY_ADJUSTED,
            self::WARNING_TYPE_EARNINGS_REQUIRE_ADJUSTMENT,
            self::WARNING_TYPE_UK_TAX_CODE_P9_UPDATE,
            self::WARNING_TYPE_HRDF_EMPLOYEE_WARNING,
            self::WARNING_TYPE_NEW_PAYROLLED_BENEFITS,
            self::WARNING_TYPE_SUBMIT_TERMINATED_EMPLOYEE_TO_HMRC,
            self::WARNING_TYPE_SUPER_RECONCILIATION_PREVIOUS_PAY_RUN,
            self::WARNING_TYPE_SUPER_RECONCILIATION_THIS_PAY_RUN,
            self::WARNING_TYPE_MORE_THAN28_DAYS_WITHOUT_TFN_QUOTED,
            self::WARNING_TYPE_BACK_CALCULATIONS_APPLIED,
            self::WARNING_TYPE_LEAVE_ACCRUAL_RECONCILIATION_PREVIOUS_PAY_RUN,
            self::WARNING_TYPE_LEAVE_ACCRUAL_RECONCILIATION_THIS_PAY_RUN,
            self::WARNING_TYPE_PUBLIC_HOLIDAY_AUTOMATION,
            self::WARNING_TYPE_CIS_SUBCONTRACTOR_REQUIRES_VERIFICATION,
            self::WARNING_TYPE_ITN_REQUIRES_UPDATE,
            self::WARNING_TYPE_CIS_SUBCONTRACTOR_LAST_PAYMENT_DATE,
            self::WARNING_TYPE_CIS_SUBCONTRACTOR_UNMATCHED,
            self::WARNING_TYPE_CPF_REFUND_REQUIRED,
            self::WARNING_TYPE_CPF_YEAR_END_RECALCULATION_REQUIRED,
            self::WARNING_TYPE_TAX_CODE_DISPLAY_NAME_TOO_LONG,
            self::WARNING_TYPE_TIMESHEET_OUT_OF_SEQUENCE,
            self::WARNING_TYPE_EXPIRED_CONTRACTOR_TAX_RATE,
            self::WARNING_TYPE_CONCURRENT_PAY_RUN,
            self::WARNING_TYPE_STUDENT_LOAN_ADJUSTMENT,
            self::WARNING_TYPE_UNPAID_LEAVE_WITH_AVAILABLE_BALANCE,
            self::WARNING_TYPE_OCCUPATIONAL_LEAVE_APPLIED,
            self::WARNING_TYPE_OCCUPATIONAL_LEAVE_APPLIED_PREVIOUS,
            self::WARNING_TYPE_OCCUPATIONAL_LEAVE_ENTITLEMENT_EXHAUSTED,
            self::WARNING_TYPE_ANNUAL_LEAVE_CASHED_OUT,
            self::WARNING_TYPE_EMPLOYEE_HAS_TAKEN_PAID_FAMILY_AND_DOMESTIC_VIOLENCE_LEAVE,
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
        $this->setIfExists('warning_type', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('warning', $data ?? [], null);
        $this->setIfExists('employee_name', $data ?? [], null);
        $this->setIfExists('pay_run_total_id', $data ?? [], null);
        $this->setIfExists('meta_data', $data ?? [], null);
        $this->setIfExists('meta_data_json', $data ?? [], null);
        $this->setIfExists('employee_external_id', $data ?? [], null);
        $this->setIfExists('formatted_warning_message', $data ?? [], null);
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

        $allowedValues = $this->getWarningTypeAllowableValues();
        if (!is_null($this->container['warning_type']) && !in_array($this->container['warning_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'warning_type', must be one of '%s'",
                $this->container['warning_type'],
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
     * Gets warning_type
     *
     * @return string|null
     */
    public function getWarningType()
    {
        return $this->container['warning_type'];
    }

    /**
     * Sets warning_type
     *
     * @param string|null $warning_type 
     *
     * @return self
     */
    public function setWarningType($warning_type)
    {
        if (is_null($warning_type)) {
            throw new \InvalidArgumentException('non-nullable warning_type cannot be null');
        }
        $allowedValues = $this->getWarningTypeAllowableValues();
        if (!in_array($warning_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'warning_type', must be one of '%s'",
                    $warning_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['warning_type'] = $warning_type;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return int|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param int|null $employee_id 
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets warning
     *
     * @return string|null
     */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
     * Sets warning
     *
     * @param string|null $warning 
     *
     * @return self
     */
    public function setWarning($warning)
    {
        if (is_null($warning)) {
            throw new \InvalidArgumentException('non-nullable warning cannot be null');
        }
        $this->container['warning'] = $warning;

        return $this;
    }

    /**
     * Gets employee_name
     *
     * @return string|null
     */
    public function getEmployeeName()
    {
        return $this->container['employee_name'];
    }

    /**
     * Sets employee_name
     *
     * @param string|null $employee_name 
     *
     * @return self
     */
    public function setEmployeeName($employee_name)
    {
        if (is_null($employee_name)) {
            throw new \InvalidArgumentException('non-nullable employee_name cannot be null');
        }
        $this->container['employee_name'] = $employee_name;

        return $this;
    }

    /**
     * Gets pay_run_total_id
     *
     * @return int|null
     */
    public function getPayRunTotalId()
    {
        return $this->container['pay_run_total_id'];
    }

    /**
     * Sets pay_run_total_id
     *
     * @param int|null $pay_run_total_id 
     *
     * @return self
     */
    public function setPayRunTotalId($pay_run_total_id)
    {
        if (is_null($pay_run_total_id)) {
            throw new \InvalidArgumentException('non-nullable pay_run_total_id cannot be null');
        }
        $this->container['pay_run_total_id'] = $pay_run_total_id;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return object|null
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param object|null $meta_data 
     *
     * @return self
     */
    public function setMetaData($meta_data)
    {
        if (is_null($meta_data)) {
            throw new \InvalidArgumentException('non-nullable meta_data cannot be null');
        }
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets meta_data_json
     *
     * @return string|null
     */
    public function getMetaDataJson()
    {
        return $this->container['meta_data_json'];
    }

    /**
     * Sets meta_data_json
     *
     * @param string|null $meta_data_json 
     *
     * @return self
     */
    public function setMetaDataJson($meta_data_json)
    {
        if (is_null($meta_data_json)) {
            throw new \InvalidArgumentException('non-nullable meta_data_json cannot be null');
        }
        $this->container['meta_data_json'] = $meta_data_json;

        return $this;
    }

    /**
     * Gets employee_external_id
     *
     * @return string|null
     */
    public function getEmployeeExternalId()
    {
        return $this->container['employee_external_id'];
    }

    /**
     * Sets employee_external_id
     *
     * @param string|null $employee_external_id 
     *
     * @return self
     */
    public function setEmployeeExternalId($employee_external_id)
    {
        if (is_null($employee_external_id)) {
            throw new \InvalidArgumentException('non-nullable employee_external_id cannot be null');
        }
        $this->container['employee_external_id'] = $employee_external_id;

        return $this;
    }

    /**
     * Gets formatted_warning_message
     *
     * @return string|null
     */
    public function getFormattedWarningMessage()
    {
        return $this->container['formatted_warning_message'];
    }

    /**
     * Sets formatted_warning_message
     *
     * @param string|null $formatted_warning_message 
     *
     * @return self
     */
    public function setFormattedWarningMessage($formatted_warning_message)
    {
        if (is_null($formatted_warning_message)) {
            throw new \InvalidArgumentException('non-nullable formatted_warning_message cannot be null');
        }
        $this->container['formatted_warning_message'] = $formatted_warning_message;

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


